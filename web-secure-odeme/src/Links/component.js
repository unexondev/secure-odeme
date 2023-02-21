import React, { Component } from "react";
import { Container, Form, Button, Spinner } from "react-bootstrap";
import { Input, RaiseModal, ModalToggler, Modal, ModalBS } from "../Assets/Components/component.js";
import { BsLink45Deg, BsFillCameraFill, BsX } from "react-icons/bs";
import MyLinks from "./MyLinks/component.js";

import axios from "../Assets/Components/AxiosInstance/component.js";
import { Notify } from "../Assets/Components/Notifier/component.js";

// SELECT_SAHIBINDEN = 1;
// SELECT_DOLAP = 2;


class Links extends Component {

	constructor(props) {

		super(props);

		this.state = {
			"add_link_busy": false,
			"service": null,
			"product_info": {}
		};

		this.SetCreateLinkMenu = this.SetCreateLinkMenu.bind(this);
		this.OnAddProperty = this.OnAddProperty.bind(this);
		this.OnRemoveProperty = this.OnRemoveProperty.bind(this);
		this.OnChangeProperty = this.OnChangeProperty.bind(this);
		this.OnAddImage = this.OnAddImage.bind(this);
		this.OnRemoveImage = this.OnRemoveImage.bind(this);
		this.OnCreateLink = this.OnCreateLink.bind(this);

	}

	SetCreateLinkMenu(ctx) {

		let service = parseInt(ctx.target.value, 10);

		switch (service) {

		case 1: // Sahibinden

			this.state["product_info"] = {

				"ad_seller": "",
				"ad_phone": "",
				"ad_title": "",
				"ad_description": "",
				"ad_price": "",
				"ad_province": "",
				"ad_town": "",
				"ad_district": "",
				"properties": [],
				"images": []

			};

		case 2:
			
			break;

		}

		this.setState({ "service": service });

	}

	OnAddProperty() { 

		let num_product_properties = this.state["product_info"]["properties"].length;

		if (num_product_properties >= 20) return;

		let product_property = {
			"index": num_product_properties,
			"property": "",
			"value": "", 
			"removable": true
		};

		this.state["product_info"]["properties"].push(product_property);

		this.setState({});

	}

	OnRemoveProperty(idx) {

		this.setState({ "product_info": { ...this.state["product_info"], "properties": this.state["product_info"]["properties"].filter(entry => entry["index"] != idx) } });

	}

	OnChangeProperty(ctx, idx, field) {

		this.state["product_info"]["properties"].forEach((entry, i) => {

			if (idx == i) {

				this.state["product_info"]["properties"][i][field] = ctx.target.value;

			}

		});

		this.setState({});

	}

	OnAddImage(ctx) {

		let file = ctx.target.files[0];

		if (file.size > 1024*1024) {

			Notify.add_message({ "is_error": true, "text": "Belirtmiş olduğunuz ürün fotoğrafının boyutu üst sınır olan 1MB boyutundan fazladır." });

			return;

		}

		let file_reader = new FileReader();

		file_reader.onload = (event) => {

			let file_buffer = event.target.result;

			let is_data_url = typeof file_buffer === "string";

			let images = this.state["product_info"]["images"];

			let idx_exist = images.findIndex(entry => {

				if (entry.name === file.name)
					return true;

			});

			if (idx_exist != -1) {

				is_data_url ? images[idx_exist]["data"] = file_buffer : images[idx_exist]["buffer"] = new Uint8Array(file_buffer);

			}

			else if (is_data_url) {

				images.push({ "index": images.length, "data": file_buffer, "name": file.name });

			}

			if (is_data_url)
				file_reader.readAsArrayBuffer(file);

			this.setState({});

		}

		file_reader.readAsDataURL(file);

	}
 
	OnRemoveImage(ctx) {

		let idx = ctx.target.getAttribute("index");

		this.setState({ "product_info": {
			...this.state["product_info"],
			"images": this.state["product_info"]["images"].filter(entry => entry.index != idx)
		}});

	}

	OnCreateLink() {

		let service = this.state["service"];

		switch (service) {

		case 1: // Sahibinden

			this.setState({ "add_link_busy": true });

			let product_info = this.state["product_info"];

			let _product_info = { ...product_info };
			_product_info["images"] = { ..._product_info["images"] };
			
			_product_info["images"].forEach((image, idx) => {

				let _image = { ...image };

				delete _image["data"];

				_product_info["images"][idx] = _image;

			})

			axios.post("/api/links/add", {
				"service": service,
				"product_info": _product_info
			}).then((response) => {

				window.location.reload();

			}).catch((error) => {

				let response = error.response;

				if (response && response.status == 400)
					Notify.add_message({ "is_error": true, "text": response.data["message"] });
				else 
					Notify.add_message({ "is_error": true, "text": "Beklenmedik bir hata oluştu, lütfen daha sonra tekrar deneyiniz." });

				this.setState({ "add_link_busy": false });

			})

			break;

		case 2: // Dolap
			break;

		}

	}

	GetProperties() {

		switch (this.state["service"]) {

		case 1: // Sahibinden

			return this.state["product_info"]["properties"].map(entry => (

				<div key={entry.index} className="d-flex flex-row gap-2 align-items-center mb-3">
					<Input index={entry.index} field="property" onChange={(ctx) => this.OnChangeProperty(ctx, entry.index, "property")} value={entry.property} placeholder="Ör. Model" minLength="1" maxLength="30"/>
					<Input index={entry.index} field="value" onChange={(ctx) => this.OnChangeProperty(ctx, entry.index, "value")} value={entry.value} placeholder="Ör. iPhone 13" minLength="1" maxLength="30"/>
					<Button index={entry.index} onClick={() => this.OnRemoveProperty(entry.index)} className={`py-0 px-1 border-0 rounded-pill ${entry.removable ? "visible" : "invisible"}`}><BsX className="pe-none"/></Button>
				</div>

			));

		case 2:
			break

		}

	}

	GetImages() {

		switch (this.state["service"]) {

		case 1: // Sahibinden

			return this.state["product_info"]["images"].map(entry => (

				<div key={entry["index"]} className="d-flex flex-row align-items-center">
					<img src={entry["data"]} style={{"height": "30px", "maxWidth": "40px"}}/>
					<label className="text-white ms-2 text-nowrap text-truncate me-2">{entry["name"]}</label>
					<Button index={entry["index"]} onClick={this.OnRemoveImage} className="py-0 px-1 border-0 rounded-pill"><BsX className="pe-none"/></Button>
				</div>

			));

		case 2:
			break

		}

	}

	GetImageCount() { return this.state["product_info"]["images"].length; }

	GetMenu() {

		switch (this.state["service"]) {

		case 1:
			return (

				<div className="text-center">
					
					<div className="text-start d-inline-block m-3 border border-secondary rounded-4">
						
						<Form className="p-3">
							
							<h1 className="text-white mb-4 fs-3"><BsLink45Deg className="text-primary"/> Sahibinden Param Güvende Linki Oluştur</h1>
							
							<div className="d-flex flex-wrap gap-5">
								
								<div className="flex-grow-1">
									
									<div className="mb-3">
										<label className="form-label text-white">İlan sahibinin adı ve soyadı</label>
										<Input value={this.state["product_info"]["ad_seller"]} onChange={
											((ctx) => { this.setState({ "product_info": { ...this.state["product_info"], "ad_seller": ctx.target.value } }) }).bind(this)
										} maxLength="50" minLength="3"/>
									</div>
							
									<div className="mb-3">
										<label className="form-label text-white">İlan sahibinin telefon numarası</label>
										<Input value={this.state["product_info"]["ad_phone"]} onChange={
											((ctx) => { this.setState({ "product_info": { ...this.state["product_info"], "ad_phone": ctx.target.value } }) }).bind(this)
										} placeholder="5xxxxxxxxx" maxLength="10" minLength="10"/>
									</div>
								
									<div className="mb-3">
										<label className="form-label text-white">İlan başlığı</label>
										<Input value={this.state["product_info"]["ad_title"]} onChange={
											((ctx) => { this.setState({ "product_info": { ...this.state["product_info"], "ad_title": ctx.target.value } }) }).bind(this)
										} maxLength="30" minLength="1"/>
									</div>

									<div className="mb-3">
										<label className="form-label text-white">İlan açıklaması</label>
										<Input value={this.state["product_info"]["ad_description"]} onChange={
											((ctx) => { this.setState({ "product_info": { ...this.state["product_info"], "ad_description": ctx.target.value } }) }).bind(this)
										} maxLength="200"/>
									</div>

									<div className="mb-3">
										<label className="form-label text-white">Ürün fiyatı</label>
										<Input value={this.state["product_info"]["ad_price"]} onChange={
											((ctx) => { if (/^[0-9]+$/.test(ctx.target.value) || !ctx.target.value.length)
												this.setState({ "product_info": { ...this.state["product_info"], "ad_price": ctx.target.value } }) }).bind(this)
										} indicator="TL" maxLength="12" minLength="4"/>
									</div>

									<div className="mb-3">
										<label className="form-label text-white">Satılık olduğu il</label>
										<Input value={this.state["product_info"]["ad_province"]} onChange={
											((ctx) => { this.setState({ "product_info": { ...this.state["product_info"], "ad_province": ctx.target.value } }) }).bind(this)
										} maxLength="30" minLength="2"/>
									</div>

									<div className="mb-3">
										<label className="form-label text-white">Satılık olduğu ilçe</label>
										<Input value={this.state["product_info"]["ad_town"]} onChange={
											((ctx) => { this.setState({ "product_info": { ...this.state["product_info"], "ad_town": ctx.target.value } }) }).bind(this)
										} maxLength="30" minLength="2"/>
									</div>

									<div>
										<label className="form-label text-white">Satılık olduğu mahalle</label>
										<Input value={this.state["product_info"]["ad_district"]} onChange={
											((ctx) => { this.setState({ "product_info": { ...this.state["product_info"], "ad_district": ctx.target.value } }) }).bind(this)
										} indicator="Mah." maxLength="30" minLength="2"/>
									</div>

								</div>

								<div style={{"width": "250px"}}>
									
									<label className="text-white mb-2">Ürün özelliklerini belirle</label>

									<small className="d-block text-primary mb-3">* İlan no ve kimden bölmeleri sistemimiz tarafından belirlenmektedir.</small>
									
									{ this.GetProperties() }

									<Button className="w-100 rounded-pill py-1" onClick={this.OnAddProperty}>Ekle</Button>

								</div>

								<div className="flex-grow-1" style={{"width": "250px"}}>
									
									<label className="text-white mb-2">İlan fotoğraflarını seç</label>
									
									<div className="d-flex flex-column justify-content-center align-items-center border-secondary rounded-2 mb-1 position-relative" style={{
										"height": "150px",
										"border": "1px dashed"
									}}>
										<input onChange={ ((ctx) => { if (this.state["product_info"]["images"].length < 10) this.OnAddImage(ctx) }).bind(this) } type="file" accept="image/*" alt="" className="position-absolute w-100 h-100 opacity-0"/>
										<BsFillCameraFill className="text-secondary" style={{"fontSize": "5rem"}}/>
										<small className="text-secondary">Fotoğraf seç (Max. 1MB)</small>

									</div>

									<small className="text-primary mb-3 d-block"><span>{this.GetImageCount()}</span>/10 tane fotoğraf seçildi</small>

									<div className="d-flex flex-column gap-2">
										{ this.GetImages() }
									</div>

								</div>

								<div className="w-100">
									
									<RaiseModal>
										
										<ModalToggler><Button disabled={
											this.state["product_info"]["ad_seller"].length < 3 ||
											this.state["product_info"]["ad_phone"].length != 10 ||
											!this.state["product_info"]["ad_title"].length ||
											this.state["product_info"]["ad_price"].length < 4 ||
											this.state["product_info"]["ad_province"].length < 2 ||
											this.state["product_info"]["ad_town"].length < 2 ||
											this.state["product_info"]["ad_district"].length < 2 ||
											!this.state["product_info"]["images"].length
										} variant="primary" className="d-block ms-auto">Linki oluştur</Button></ModalToggler>
										
										<Modal>
									
											<ModalBS.Header className="border-0" closeButton>
												<ModalBS.Title className="text-dark">
													Link oluştur
												</ModalBS.Title>
											</ModalBS.Header>

											<ModalBS.Body className="text-white">
												
												Aynı anda toplamda <span className="text-primary">5</span> tane link bulundurma hakkınız bulunmaktadır. Link oluşturmak istediğinize emin misiniz?

											</ModalBS.Body>

											
											<ModalBS.Footer className="border-0">
									        	<Button disabled={this.state["add_link_busy"]} variant="success" onClick={this.OnCreateLink} style={{ "width": 80 }}>
									            	{ this.state["add_link_busy"] ? <Spinner as="span" animation="border" size="sm"/> : "Oluştur" }
									        	</Button>
											</ModalBS.Footer>

										</Modal>
									
									</RaiseModal>

								</div>

							</div>
						
						</Form>

					</div>

				</div>
			
			);
		case 2:
			return (
				null
			);
		}

	}

	render() {

		return (

			<Container fluid="xxl" className="h-100 mb-5" style={{"paddingTop": "100px"}}>
				
				<div className="border border-secondary rounded-4 p-3 m-3">
					
					<div className="d-flex flex-row justify-content-between">
						<h1 className="text-white fs-3"><BsLink45Deg className="text-primary"/> Link Oluştur</h1>
						<Form.Select className="border-0 bg-primary" style={{"width": "40%", "maxWidth": "300px"}} onChange={this.SetCreateLinkMenu}>

					    	<option>Hizmet seç</option>
					      	<option value="1">Sahibinden Param Güvende</option>
					        <option value="2">Dolap Güvenli Ödeme</option>
					    
					    </Form.Select>
					</div>
				
				</div>

				{ this.GetMenu() }

				<MyLinks/>

			</Container>

		)

	}

};

export default Links;