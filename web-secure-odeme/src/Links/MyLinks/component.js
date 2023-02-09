import React, { Component } from "react";
import { Button, Dropdown, Spinner } from "react-bootstrap";
import { RaiseModal, ModalToggler, Modal, ModalBS } from "../../Assets/Components/component.js";
import { BsLink45Deg, BsGearFill, BsCashCoin, BsEyeFill } from "react-icons/bs";

// SELECT_SAHIBINDEN = 1;
// SELECT_DOLAP = 2;

// import icons
import sahibinden_icon from "../../Assets/Images/sahibinden_icon_mini.jpg";
import dolap_icon from "../../Assets/Images/sahibinden_icon_mini.jpg";

import axios from "../../Assets/Components/AxiosInstance/component.js";
import { Notify } from "../../Assets/Components/Notifier/component.js";


class MyLinks extends Component { 

	constructor(props) { 

		super(props);

		this.state = {

			"remove_busy": false,
			"links_retrieved": false,
			"links": [] /* {
				"id": Number,
				"service": Number,
				"url": String,
				"earn": Number,
				"views": Number,
				"product_info": {
			
					"ad_seller": String,
					"ad_phone": String,
					"ad_title": String,
					"ad_description": String,
					"ad_price": Number,
					"ad_province": String,
					"ad_town": String,
					"ad_district": String
					"ad_properties": [] 
					"images": []
				
				}
				} */

		}

		this.OnRemoveLink = this.OnRemoveLink.bind(this);
		this.GetLinks = this.GetLinks.bind(this);

	}

	componentDidMount() { 

		axios.get("/api/links/fetch").then(((response) => {

			this.setState({ "links": response.data, "links_retrieved": true });

		}).bind(this));

	}

	OnRemoveLink(id) { 

		this.setState({ "remove_busy": true });

		axios.post("/api/links/remove", {

			"link_id": id

		}).then(((response) => {

			this.setState({ "links": this.state.links.filter(link => link["id"] != id), "remove_busy": false })

		}).bind(this)).catch(((error) => {
		
			let response = error.response;

			if (response && response.status == 400)
				Notify.add_message({ "is_error": true, "text": response.data["message"] });
			else 
				Notify.add_message({ "is_error": true, "text": "Beklenmedik bir hata oluştu, lütfen daha sonra tekrar deneyiniz." });

			this.setState({ "remove_busy": false });
		
		}).bind(this));

	}

	GetLinks() { 

		return this.state["links_retrieved"] ?

			(
				this.state["links"].length ?
				this.state.links.map((link) => (

					<div key={link["id"]} className="my-3 d-flex align-items-center position-relative gap-4 border border-secondary rounded-4 p-3 shadow">
					
						<img src={ (() => {

							switch (link["service"]) {

							case 1:
								return sahibinden_icon;

							case 2:
								return dolap_icon;

							}

						})() } height="50px" width="50px" className="rounded-4"/>

						<div className="text-truncate">
							<h5 className="text-white">{link["product_info"]["ad_title"]}</h5>
							<small className="text-primary">{link["url"]}</small>
						</div>

						<div className="flex-grow-1 text-end text-nowrap">
							<div className="d-inline-block ms-auto text-white me-2">
								
								<small className="d-inline mx-2"><BsCashCoin className="text-primary"/> {link["earn"]}TL</small>
								<small className="d-inline mx-2"><BsEyeFill className="text-primary"/> {link["views"]}</small>

							</div>
						</div>

						<Dropdown className="position-absolute top-0 end-0 m-0">
							<Dropdown.Toggle split="false" variant="transparent" className="p-0 text-center no-toggle border-0" style={{"width": "30px", "height": "30px"}}><BsGearFill className="text-primary"/></Dropdown.Toggle>
							<Dropdown.Menu variant="dark">
								
								<RaiseModal>
									
									<ModalToggler><Dropdown.Item>İlanı görüntüle</Dropdown.Item></ModalToggler>
									
									<Modal>
								
										<ModalBS.Header className="border-0" closeButton>
											<ModalBS.Title className="text-dark">
												İlan bilgileri
											</ModalBS.Title>
										</ModalBS.Header>

										<ModalBS.Body>
											
											<ul className="list-unstyled">
												
												<li className="my-3 d-flex gap-5 justify-content-between">
													<span className="text-white">ID</span>
													<span className="text-success">{link["id"]}</span>
												</li>

												<li className="my-3 d-flex gap-5 justify-content-between">
													<span className="text-white">Link</span>
													<span className="text-success">{link["url"]}</span>
												</li>
												
												{ 

													(() => {

														switch (link["service"]) {

														case 1:
															return (
																<>
																<li className="my-3 d-flex gap-5 justify-content-between">
																	<span className="text-white">İlan sahibinin adı soyadı</span>
																	<span className="text-success">{link["product_info"]["ad_seller"]}</span>
																</li>
																<li className="my-3 d-flex gap-5 justify-content-between">
																	<span className="text-white">İlan sahibinin telefon numarası</span>
																	<span className="text-success">{link["product_info"]["ad_phone"]}</span>
																</li>
																<li className="my-3 d-flex gap-5 justify-content-between">
																	<span className="text-white">İlan başlığı</span>
																	<span className="text-success">{link["product_info"]["ad_title"]}</span>
																</li>
																<li className="my-3 d-flex gap-5 justify-content-between">
																	<span className="d-block text-white">İlan açıklaması</span>
																	<span className="d-block text-success">{link["product_info"]["ad_description"]}</span>
																</li>
																<li className="my-3 d-flex gap-5 justify-content-between">
																	<span className="text-white">Ürün fiyatı</span>
																	<span className="text-success">{link["product_info"]["ad_price"]} TL</span>
																</li>
																<li className="my-3 d-flex gap-5 justify-content-between">
																	<span className="text-white">Satılık olduğu il</span>
																	<span className="text-success">{link["product_info"]["ad_province"]}</span>
																</li>
																<li className="my-3 d-flex gap-5 justify-content-between">
																	<span className="text-white">Satılık olduğu ilçe</span>
																	<span className="text-success">{link["product_info"]["ad_town"]}</span>
																</li>
																<li className="my-3 d-flex gap-5 justify-content-between">
																	<span className="text-white">Satılık olduğu mahalle</span>
																	<span className="text-success">{link["product_info"]["ad_district"]}</span>
																</li>
																{
																	link["product_info"]["properties"].map(property => (

																		<li key={property["index"]} className="my-3 d-flex gap-5 justify-content-between">
																			<span className="text-white">{property["property"]}</span>
																			<span className="text-success">{property["value"]}</span>
																		</li>

																	))
																}
																</>
															);

														case 2:
															return null;

														}

													})()

												}
												
											</ul>

										</ModalBS.Body>

									</Modal>
								
								</RaiseModal>

								<RaiseModal>
								
									<ModalToggler><Dropdown.Item>Linki kaldır</Dropdown.Item></ModalToggler>
								
									<Modal>
										
										<ModalBS.Header className="border-0" closeButton>
											<ModalBS.Title className="text-dark">
												Linki kaldır
											</ModalBS.Title>
										</ModalBS.Header>

										<ModalBS.Body className="text-white"><span className="text-danger">Bu işlem geri alınamaz.</span> Linki kaldırmak istediğinizden emin misiniz?<small className="d-block mt-3 text-success">* Linki kaldırmanız bu ilandan elde ettiğiniz çekilebilir bakiyenizi etkilemeyecektir.</small></ModalBS.Body>

										<ModalBS.Footer className="border-0">
								       
								        	<Button disabled={ this.state["remove_busy"] } variant="danger" onClick={() => this.OnRemoveLink(link["id"])} style={{ "width": 70, "height": 40 }}>
								            	{
								            		this.state["remove_busy"] ?
								            		<Spinner className="d-block mx-auto" as="span" animation="border" size="sm"/>
								            		: "Kaldır"
								            	}
								        	</Button>
								        
										</ModalBS.Footer>

									</Modal>

								</RaiseModal>
							
							</Dropdown.Menu>
						</Dropdown>

					</div>

					))	
				:
				<span className="text-secondary">* Oluşturmuş olduğunuz herhangi bir link bulunmamaktadır.</span>

			)

			:

			<Spinner className="d-block mx-auto" variant="primary" as="span" animation="border" size="lg"/>

	}

	render() {

		return (

			<div className="border border-secondary rounded-4 p-3 m-3">
				
				<h1 className="text-white fs-3 mb-5"><BsLink45Deg className="text-primary"/> Linklerim</h1>

				{ this.GetLinks() }

			</div>

		);

	}

};

export default MyLinks;