import React, { Component } from "react";
import { Container, Button, Spinner } from "react-bootstrap";
import { BsCashCoin, BsClockHistory, BsCurrencyBitcoin, BsArrowLeftRight, BsX } from "react-icons/bs";
import { FaInfoCircle } from "react-icons/fa";
import { Input, RaiseModal, ModalToggler, Modal, ModalBS } from "../Assets/Components/component.js";
import { UserContext, UserConsumer } from "../Assets/Components/UserContext/component.js";

import axios from "../Assets/Components/AxiosInstance/component.js";
import { Notify } from "../Assets/Components/Notifier/component.js";


class Cashout extends Component {

	constructor(props) {

		super(props);

		this.state = {
			"create_request_busy": false,
			"delete_request_busy": false,
			"cashout_requests_retrieved": false,
			"amount": 100.0,
			"cashout_requests": []
		};

		this.OnCreateRequest = this.OnCreateRequest.bind(this);

	}

	componentDidMount() {

		axios.get("/api/cashout-requests/fetch").then(((response) => {

			this.setState({ "cashout_requests": response.data, "cashout_requests_retrieved": true });

		}).bind(this)).catch(((error) => {

			let response = error.response;

			if (response && response.status == 400)
				Notify.add_message({ "is_error": true, "text": response.data["message"] });
			else 
				Notify.add_message({ "is_error": true, "text": "Beklenmedik bir hata oluştu, lütfen sayfayı yenilemeyi deneyin." });

		}).bind(this));

	}

	OnCreateRequest() {

		this.setState({ "create_request_busy": true });

		axios.post("/api/cashout-requests/create", {
			"amount": this.state["amount"]
		}).then(((response) => {

			this.context["user"]["balance"] -= this.state["amount"];
			this.context.set_user(this.context["user"]);

			this.setState({ "cashout_requests": [ ...this.state["cashout_requests"], response.data ], "create_request_busy": false });

		}).bind(this)).catch(((error) => {

			let response = error.response;

			if (response && response.status == 400)
				Notify.add_message({ "is_error": true, "text": response.data["message"] });
			else 
				Notify.add_message({ "is_error": true, "text": "Beklenmedik bir hata oluştu, lütfen daha sonra tekrar deneyiniz." });

			this.setState({ "create_request_busy": false });

		}).bind(this));

	}

	OnDeleteRequest(id) {

		this.setState({ "delete_request_busy": true });

		axios.post("/api/cashout-requests/delete", {
		
			"request_id": id
		
		}).then(((response) => {

			let reqs = this.state["cashout_requests"];

			let req = reqs.find((req) => req.id === id);

			this.context["user"]["balance"] += req["amount"];
			this.context.set_user(this.context["user"]);

			this.setState({ "cashout_requests": reqs.splice(reqs.indexOf(req), 1), "delete_request_busy": false });

		}).bind(this)).catch(((error) => {

			let response = error.response;

			if (response && response.status == 400)
				Notify.add_message({ "is_error": true, "text": response.data["message"] });
			else 
				Notify.add_message({ "is_error": true, "text": "Beklenmedik bir hata oluştu, lütfen daha sonra tekrar deneyiniz." });

			this.setState({ "create_request_busy": false });

		}).bind(this));

	}

	render() {

		return (

			<Container fluid="xxl" className="h-100 mb-5" style={{"paddingTop": "100px"}}>

				<div className="border-bottom border-2 border-secondary p-3 mb-4" style={{"maxWidth": "600px"}}>
					
					<h1 className="text-white fs-3 mb-4"><BsCashCoin className="text-primary"/> Ödeme talep et</h1>

					<div className="ps-3 py-1 border-start border-success border-3">
						<h1 className="fs-3 text-white mb-3">Çekilebilir toplam kazanç: <span className="text-success">{ this.context["user"]["balance"] } TL</span></h1>

						<div className="d-flex flex-wrap gap-2">
							
							{
								<Input onChange={((ctx) => {
									if ((/^[0-9]+$/.test(ctx.target.value) || !ctx.target.value.length) && this.context["user"]["balance"] >= ctx.target.value) this.setState({ "amount": ctx.target.value });
								}).bind(this)} value={this.state["amount"]} className="flex-grow-1" variant="primary"
								id="withdraw-amount-input" indicator="TL"
								placeholder="Çekmek istediğin tutarı gir" maxLength="12" minLength="1"/>
							}

							<Button disabled={ !this.state["amount"] || this.state["amount"] < 100.0 }
							onClick={this.OnCreateRequest} variant="primary" className="rounded-pill" style={{ "width": 125 }}>
								{ this.state["create_request_busy"] ? <Spinner as="span" animation="border" size="sm"/> : "Talep oluştur" }
							</Button>

						</div>
					</div>

				</div>

				<div className="border border-secondary rounded p-3 mb-4 shadow">
					
					<h1 className="text-white fs-3 mb-5"><BsClockHistory className="text-primary"/> Talep geçmişi</h1>

					{

					this.state["cashout_requests_retrieved"] ?

					<div className="d-flex flex-column gap-2 p-2">
						
					{

						this.state["cashout_requests"].length ?
						this.state["cashout_requests"].map(req => (

							req["completed"] ?

							<div key={ req["id"] } className="shadow border-1 border-bottom border-success p-2">
								
								<h1 className="text-white fs-4 ps-2 py-1 border-3 border-start border-success">Ödemeniz gerçekleştirildi</h1>

								<small className="d-block text-white"><BsArrowLeftRight className="text-success"/> Transaction ID:</small>

								<small className="text-break text-success">{ req["transaction_id"] }</small>
								
								<div className="d-flex justify-content-between flex-wrap align-items-start mt-3">
									
									<small className="text-secondary">{ req["created_at"] } tarihinde oluşturuldu</small>

									<small className="text-white">Tutar: <span className="text-success">{ req["amount"] } TL</span></small>

								</div>

							</div>
							:
							<div key={ req["id"] } className="shadow border-1 border-bottom border-primary p-2 position-relative">
								
								<h1 className="text-white fs-4 ps-2 py-1 border-3 border-start border-primary">Ödeme bekleniyor</h1>

								<small className="text-white"><FaInfoCircle className="text-primary"/> Ödemeniz işleme konulmuştur. Ödemeler toplu yapıldığından işlemin tamamlanması birkaç iş günü alabilir.</small>
									
								<small className="mt-1 d-block text-break text-primary"><BsCurrencyBitcoin/> { req["receiver_address"] }</small>

								<div className="d-flex justify-content-between flex-wrap align-items-start mt-3">

									<small className="text-secondary">{ req["created_at"] } tarihinde oluşturuldu</small>

									<small className="text-white">Tutar: <span className="text-primary">{ req["amount"] } TL</span></small>

								</div>

								<RaiseModal>
								
									<ModalToggler>
										<Button className="position-absolute end-0 top-0 bg-transparent border-0 px-1 py-0 text-primary"><BsX/></Button>
									</ModalToggler>
								
									<Modal>
										
										<ModalBS.Header className="border-0" closeButton>
											<ModalBS.Title className="text-dark">
												Para çekme talebini kaldır
											</ModalBS.Title>
										</ModalBS.Header>

										<ModalBS.Body className="text-white"><span className="text-danger">Bu işlem geri alınamaz.</span> Para çekme talebini kaldırmak istediğinizden emin misiniz?<small className="d-block mt-3 text-success">* Talebi kaldırmanız halinde ödeme miktarı bakiyenize geri yansıtılacaktır.</small></ModalBS.Body>

										<ModalBS.Footer className="border-0">
								       
								        	<Button disabled={ this.state["delete_request_busy"] } variant="danger" onClick={() => this.OnDeleteRequest(req["id"])} style={{ "width": 70, "height": 40 }}>
								            	{
								            		this.state["delete_request_busy"] ?
								            		<Spinner className="d-block mx-auto" as="span" animation="border" size="sm"/>
								            		: "Kaldır"
								            	}
								        	</Button>
								        
										</ModalBS.Footer>

									</Modal>

								</RaiseModal>

							</div>


						)).reverse()
						: <span className="text-secondary">* Oluşturmuş olduğunuz herhangi bir ödeme talebi bulunmamaktadır.</span>
					}

					</div>

					:

					<Spinner className="d-block mx-auto" variant="primary" as="span" animation="border" size="lg"/>

					}

				</div>

			</Container>

		);

	}

}
Cashout.contextType = UserContext;

export default Cashout;