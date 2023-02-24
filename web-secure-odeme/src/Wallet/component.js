import React, { Component } from "react";
import { Container, Button, Spinner } from "react-bootstrap";
import { Input } from "../Assets/Components/component.js";
import { BsWallet2, BsClockHistory } from "react-icons/bs";
import { FaInfoCircle } from "react-icons/fa";
import { validate } from "bitcoin-address-validation";
import { UserContext, UserConsumer } from "../Assets/Components/UserContext/component.js";

import axios from "../Assets/Components/AxiosInstance/component.js";
import { Notify } from "../Assets/Components/Notifier/component.js";


class Wallet extends Component { 

	constructor(props) {

		super(props);

		this.state = {

			"set_btc_address_busy": false,
			"payments_retrieved": false,
			"btc_address": "",
			"payments": []

		}

		this.OnSetBTCAddress = this.OnSetBTCAddress.bind(this);
		this.CalculateIncome = this.CalculateIncome.bind(this);

	}

	componentDidMount() {

		let btc_address = this.context["user"]["btc_address"];

		if (btc_address)
			this.setState({ "btc_address": btc_address });

		axios.get("/api/payments/fetch").then(((response) => {

			this.setState({ "payments": response.data, "payments_retrieved": true });

		}).bind(this)).catch(((error) => {

			let response = error.response;

			if (response && response.status == 400)
				Notify.add_message({ "is_error": true, "text": response.data["message"] });
			else 
				Notify.add_message({ "is_error": true, "text": "Beklenmedik bir hata oluştu, lütfen sayfayı yenilemeyi deneyin." });

		}).bind(this));

	}

	OnSetBTCAddress() {

		this.setState({ "set_btc_address_busy": true });

		axios.post("/api/user/set_btc_address", {
			"btc_address": this.state["btc_address"]
		}).then(((response) => {

			this.context["user"]["btc_address"] = this.state["btc_address"];
			this.context.set_user(this.context["user"]);

			this.setState({ "set_btc_address_busy": false });

			Notify.add_message({ "is_error": false, "text": "Bitcoin adresiniz başarıyla değiştirilmiştir." });

		}).bind(this)).catch(((error) => {

			let response = error.response;

			if (response && response.status == 400)
				Notify.add_message({ "is_error": true, "text": response.data["message"] });
			else 
				Notify.add_message({ "is_error": true, "text": "Beklenmedik bir hata oluştu, lütfen sayfayı yenilemeyi deneyin." });

			this.setState({ "set_btc_address_busy": false });

		}).bind(this));

	}

	CalculateIncome() {

		let income = 0;

		this.state["payments"].forEach((payment) => { income += payment["amount"] });

		return income;

	}

	render() {

		return (

			<Container fluid="xxl" className="h-100 mb-5" style={{"paddingTop": "100px"}}>

				<UserConsumer>
				{ ({ user }) => (

					<div className="border border-secondary p-3 rounded shadow mb-4">
						
						<h1 className="text-white fs-3 mb-5"><BsWallet2 className="text-primary"/> Cüzdan</h1>

						<h1 className="text-white fs-3 ps-3 py-1 border-start border-primary border-3">Alınan toplam ödeme: <span className="text-primary">{ this.CalculateIncome() } TL</span></h1>
						<h1 className="text-white fs-3 ps-3 py-1 border-start border-success border-3">Çekilebilir bakiye: <span className="text-success">{user["balance"]} TL</span></h1>

						<small className="d-block text-primary mt-5 p-1">Tanımlı BTC (Bitcoin) adresiniz:</small>
						
						<div className="d-flex flex-wrap align-items-center gap-2">
						
							<Input value={this.state["btc_address"]} onChange={ ((ctx) => this.setState({ "btc_address": ctx.target.value })).bind(this) }
							className="flex-grow-1" id="btc-address-input"
							placeholder="BTC (Bitcoin) adresini gir" maxLength="35" minLength="26"/>
							
							<Button disabled={
								this.state["set_btc_address_busy"] ||
								this.state["btc_address"].length < 26 ||
								this.state["btc_address"].length > 35
							} onClick={this.OnSetBTCAddress}
							variant="outline-primary" className="rounded-pill" style={{ "width": 100, "height": 40 }}>
								{
								this.state["set_btc_address_busy"] ?
								<Spinner className="d-block mx-auto" variant="primary" as="span" animation="border" size="sm"/>
								: "Tanımla"
								}
							</Button>
							
							<a href="/cashout" className="text-decoration-none">
								<Button variant="success" className="rounded-pill" style={{ "width": 100, "height": 40 }}>Ödeme al</Button>
							</a>
						
						</div>

					</div>

				)}
				</UserConsumer>

				<div className="border border-secondary p-3 rounded">
					
					<h1 className="text-white fs-3 mb-5"><BsClockHistory className="text-primary"/> Ödeme geçmişi</h1>

					{

					this.state["payments_retrieved"] ?

					<div className="d-flex flex-column gap-2 p-2">
						
						{

						this.state["payments"].length ?

						this.state["payments"].map((payment) => (

							<div key={ payment["id"] } className="shadow border-1 border-bottom border-success p-2">
								
								<h1 className="text-white fs-4 ps-2 py-1 border-3 border-start border-success">Oluşturduğunuz linke ödeme yapıldı</h1>

								<small className="text-white text-center"><FaInfoCircle className="text-success me-2 align-middle"/>
									{ payment["updated_at"] } tarihinde <span className="text-success">{ payment["link_id"] }</span> ID'li linke ödeme yapıldığı onaylandı.
								</small>

								<div className="d-flex justify-content-between flex-wrap align-items-start mt-3">

									<small className="text-secondary">{ payment["created_at"] } tarihinde oluşturuldu</small>

									<small className="text-white">Ödeme: <span className="text-success">{ payment["amount"] } TL</span></small>

								</div>

							</div>

						)).reverse()

						:

						<span className="text-secondary">* Oluşturmuş olduğunuz herhangi bir linke ödeme yapılmamıştır.</span>

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
Wallet.contextType = UserContext;


export default Wallet;