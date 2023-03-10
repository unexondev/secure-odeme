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
				"image_count": 0,
				"files": [],
				"images": []

			};

			break;

		case 2:

			this.state["product_info"] = {

				"ad_seller": "",
				"ad_title": "",
				"status": "",
				"ad_description": "",
				"likes": "",
				"ad_seller_likes": "",
				"ad_price": "",
				"ad_shipment": 1,
				"image_count": 0,
				"files": [],
				"images": []

			};
			
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

		let product_info = this.state["product_info"];

		let file = ctx.target.files[0];

		if (file.size > 2 * 1024 * 1024) {

			Notify.add_message({ "is_error": true, "text": "Belirtmi?? oldu??unuz ??r??n foto??raf??n??n boyutu ??st s??n??r olan 1MB boyutundan fazlad??r." });

			return;

		}

		const file_reader = new FileReader();

		file_reader.addEventListener("load", ctx => {

			product_info["images"].push({
				"name": file.name,
				"data_url": ctx.target.result
			});
			product_info["files"].push(file);
			product_info["image_count"]++;

			this.setState({});

		});

		file_reader.readAsDataURL(file);

	}
 
	OnRemoveImage(ctx) {

		let idx = ctx.target.getAttribute("index");

		let product_info = this.state["product_info"];

		product_info["images"].splice(idx, 1);
		product_info["files"].splice(idx, 1);
		product_info["image_count"]--;

		this.setState({});

	}

	OnCreateLink() {

		let service = this.state["service"];

		this.setState({ "add_link_busy": true });

		let product_info = this.state["product_info"];
		let _product_info;

		switch (service) {

		case 1: // Sahibinden

			_product_info = { ...product_info };

			_product_info["properties"] = _product_info["properties"].filter(property => property["property"] && property["value"]);

			delete _product_info["images"];
			delete _product_info["files"];

			axios.post("/api/links/add", {
				"service": service,
				"product_info": _product_info
			}).then((response) => {

				let link_id = response.data["link_id"];

				const form_data = new FormData();

				form_data.append("link_id", link_id);

				product_info["files"].forEach(file => form_data.append("files[]", file));

				axios.post("/api/links/set-ad-images", form_data).then((response) => {

					window.location.reload();

				}).catch(error => {

					let response = error.response;

					if (response && response.status == 400)
						Notify.add_message({ "is_error": true, "text": response.data["message"] });
					else 
						Notify.add_message({ "is_error": true, "text": "Beklenmedik bir hata olu??tu, l??tfen daha sonra tekrar deneyiniz." });

					this.setState({ "add_link_busy": false });

				});

			}).catch((error) => {

				let response = error.response;

				if (response && response.status == 400)
					Notify.add_message({ "is_error": true, "text": response.data["message"] });
				else 
					Notify.add_message({ "is_error": true, "text": "Beklenmedik bir hata olu??tu, l??tfen daha sonra tekrar deneyiniz." });

				this.setState({ "add_link_busy": false });

			});

			break;

		case 2: // Dolap
			
			_product_info = { ...product_info };

			delete _product_info["images"];
			delete _product_info["files"];

			axios.post("/api/links/add", {
				"service": service,
				"product_info": _product_info
			}).then((response) => {

				let link_id = response.data["link_id"];

				const form_data = new FormData();

				form_data.append("link_id", link_id);

				product_info["files"].forEach(file => form_data.append("files[]", file));

				axios.post("/api/links/set-ad-images", form_data).then((response) => {

					window.location.reload();

				}).catch(error => {

					let response = error.response;

					if (response && response.status == 400)
						Notify.add_message({ "is_error": true, "text": response.data["message"] });
					else 
						Notify.add_message({ "is_error": true, "text": "Beklenmedik bir hata olu??tu, l??tfen daha sonra tekrar deneyiniz." });

					this.setState({ "add_link_busy": false });

				});

			}).catch((error) => {

				let response = error.response;

				if (response && response.status == 400)
					Notify.add_message({ "is_error": true, "text": response.data["message"] });
				else 
					Notify.add_message({ "is_error": true, "text": "Beklenmedik bir hata olu??tu, l??tfen daha sonra tekrar deneyiniz." });

				this.setState({ "add_link_busy": false });

			});

		}

	}

	GetProperties() {

		return this.state["product_info"]["properties"].map(entry => (

			<div key={entry.index} className="d-flex flex-row gap-2 align-items-center mb-3">
				<Input index={entry.index} field="property" onChange={(ctx) => this.OnChangeProperty(ctx, entry.index, "property")} value={entry.property} placeholder="??r. Model" minLength="1" maxLength="30"/>
				<Input index={entry.index} field="value" onChange={(ctx) => this.OnChangeProperty(ctx, entry.index, "value")} value={entry.value} placeholder="??r. iPhone 13" minLength="1" maxLength="30"/>
				<Button index={entry.index} onClick={() => this.OnRemoveProperty(entry.index)} className={`py-0 px-1 border-0 rounded-pill ${entry.removable ? "visible" : "invisible"}`}><BsX className="pe-none"/></Button>
			</div>

		));

	}

	GetImages() {

		switch (this.state["service"]) {

		case 1: // Sahibinden

			return this.state["product_info"]["images"].map((entry, idx) => (

				<div key={idx} className="d-flex flex-row align-items-center">
					<img src={entry["data_url"]} style={{"height": "30px", "maxWidth": "40px"}}/>
					<label className="text-white ms-2 text-nowrap text-truncate me-2">{entry["name"]}</label>
					<Button index={idx} onClick={this.OnRemoveImage} className="py-0 px-1 border-0 rounded-pill"><BsX className="pe-none"/></Button>
				</div>

			));

			break;

		case 2: // Dolap

			return this.state["product_info"]["images"].map((entry, idx) => (

				<div key={idx} className="d-flex flex-row align-items-center">
					<img src={entry["data_url"]} style={{"height": "30px", "maxWidth": "40px"}}/>
					<label className="text-white ms-2 text-nowrap text-truncate me-2">{entry["name"]}</label>
					<Button index={idx} onClick={this.OnRemoveImage} className="py-0 px-1 border-0 rounded-pill"><BsX className="pe-none"/></Button>
				</div>

			));

			break

		}

	}

	GetImageCount() { return this.state["product_info"]["images"].length; }

	GetMenu() {

		let product_info = this.state["product_info"];

		switch (this.state["service"]) {

		case 1:
			return (

				<div className="text-center">
					
					<div className="text-start d-inline-block m-3 border border-secondary rounded-4">
						
						<Form className="p-3">
							
							<h1 className="text-white mb-4 fs-3"><BsLink45Deg className="text-primary"/> Sahibinden Param G??vende Linki Olu??tur</h1>
							
							<div className="d-flex flex-wrap gap-5">
								
								<div className="flex-grow-1">
									
									<div className="mb-3">
										<label className="form-label text-white">??lan sahibinin ad?? ve soyad??</label>
										<Input value={product_info["ad_seller"]} onChange={
											((ctx) => { this.setState({ "product_info": { ...product_info, "ad_seller": ctx.target.value } }) }).bind(this)
										} maxLength="50" minLength="3"/>
										<small className="text-primary">En az 3 karakter i??ermelidir.</small>
									</div>
							
									<div className="mb-3">
										<label className="form-label text-white">??lan sahibinin telefon numaras??</label>
										<Input value={product_info["ad_phone"]} onChange={
											((ctx) => { this.setState({ "product_info": { ...product_info, "ad_phone": ctx.target.value } }) }).bind(this)
										} placeholder="5xxxxxxxxx" maxLength="10" minLength="10"/>
									</div>
								
									<div className="mb-3">
										<label className="form-label text-white">??lan ba??l??????</label>
										<Input value={product_info["ad_title"]} onChange={
											((ctx) => { this.setState({ "product_info": { ...product_info, "ad_title": ctx.target.value } }) }).bind(this)
										} maxLength="30" minLength="1"/>
										<small className="text-primary">En az 1 karakter i??ermelidir.</small>
									</div>

									<div className="mb-3">
										<label className="form-label text-white">??lan a????klamas??</label>
										<Input value={product_info["ad_description"]} onChange={
											((ctx) => { this.setState({ "product_info": { ...product_info, "ad_description": ctx.target.value } }) }).bind(this)
										} maxLength="200"/>
									</div>

									<div className="mb-3">
										<label className="form-label text-white">??r??n fiyat?? (Param G??vende bedeli dahil)</label>
										<Input value={product_info["ad_price"]} onChange={
											((ctx) => { if (/^[0-9]+$/.test(ctx.target.value) || !ctx.target.value.length)
												this.setState({ "product_info": { ...product_info, "ad_price": ctx.target.value } }) }).bind(this)
										} indicator="TL" maxLength="6" minLength="4"/>
										<small className="text-primary">En az 1000 de??eri verilebilir.</small>
									</div>

									<div className="mb-3">
										<label className="form-label text-white">Sat??l??k oldu??u il</label>
										<Input value={product_info["ad_province"]} onChange={
											((ctx) => { this.setState({ "product_info": { ...product_info, "ad_province": ctx.target.value } }) }).bind(this)
										} maxLength="30" minLength="2"/>
										<small className="text-primary">En az 2 karakter i??ermelidir.</small>
									</div>

									<div className="mb-3">
										<label className="form-label text-white">Sat??l??k oldu??u il??e</label>
										<Input value={product_info["ad_town"]} onChange={
											((ctx) => { this.setState({ "product_info": { ...product_info, "ad_town": ctx.target.value } }) }).bind(this)
										} maxLength="30" minLength="2"/>
										<small className="text-primary">En az 2 karakter i??ermelidir.</small>
									</div>

									<div>
										<label className="form-label text-white">Sat??l??k oldu??u mahalle</label>
										<Input value={product_info["ad_district"]} onChange={
											((ctx) => { this.setState({ "product_info": { ...product_info, "ad_district": ctx.target.value } }) }).bind(this)
										} indicator="Mah." maxLength="30" minLength="2"/>
										<small className="text-primary">En az 2 karakter i??ermelidir.</small>
									</div>

								</div>

								<div style={{"width": "250px"}}>
									
									<label className="text-white mb-2">??r??n ??zelliklerini belirle</label>

									<small className="d-block text-primary mb-3">* ??lan no ve kimden b??lmeleri sistemimiz taraf??ndan belirlenmektedir.</small>
									
									{ this.GetProperties() }

									<Button className="w-100 rounded-pill py-1" onClick={this.OnAddProperty}>Ekle</Button>

								</div>

								<div className="flex-grow-1" style={{"width": "250px"}}>
									
									<label className="text-white mb-2">??lan foto??raflar??n?? se??</label>
									
									<div className="d-flex flex-column justify-content-center align-items-center border-secondary rounded-2 mb-1 position-relative" style={{
										"height": "150px",
										"border": "1px dashed"
									}}>
										<input onChange={ ((ctx) => {
										
											if (product_info["images"].length < 10) this.OnAddImage(ctx)

										}).bind(this) } type="file" accept="image/png, image/jpeg, image/jpg" alt="" className="position-absolute w-100 h-100 opacity-0"/>
										<BsFillCameraFill className="text-secondary" style={{"fontSize": "5rem"}}/>
										<small className="text-secondary">Foto??raf se?? (Max. 1MB)</small>

									</div>

									<small className="text-primary mb-3 d-block"><span>{ product_info["image_count"] }</span>/10 tane foto??raf se??ildi</small>

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
										} variant="primary" className="d-block ms-auto">Linki olu??tur</Button></ModalToggler>
										
										<Modal>
									
											<ModalBS.Header className="border-0" closeButton>
												<ModalBS.Title className="text-dark">
													Link olu??tur
												</ModalBS.Title>
											</ModalBS.Header>

											<ModalBS.Body className="text-white">
												
												Ayn?? anda toplamda <span className="text-primary">10</span> tane link bulundurma hakk??n??z bulunmaktad??r. Link olu??turmak istedi??inize emin misiniz?

											</ModalBS.Body>

											
											<ModalBS.Footer className="border-0">
									        	<Button disabled={this.state["add_link_busy"]} variant="success" onClick={this.OnCreateLink} style={{ "width": 80 }}>
									            	{ this.state["add_link_busy"] ? <Spinner as="span" animation="border" size="sm"/> : "Olu??tur" }
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
				
				<div className="text-center">
					
					<div className="text-start d-inline-block m-3 border border-secondary rounded-4">
						
						<Form className="p-3">
							
							<h1 className="text-white mb-4 fs-3"><BsLink45Deg className="text-primary"/> Dolap G??venli ??deme Linki Olu??tur</h1>
							
							<div className="d-flex flex-wrap gap-5">
								
								<div className="flex-grow-1">
									
									<div className="mb-3">
										<label className="form-label text-white">??lan sahibinin kullan??c?? ad??</label>
										<Input value={product_info["ad_seller"]} onChange={
											((ctx) => { this.setState({ "product_info": { ...product_info, "ad_seller": ctx.target.value } }) }).bind(this)
										} maxLength="20" minLength="3"/>
										<small className="text-primary">En az 3 karakter i??ermelidir.</small>
									</div>
							
									<div className="mb-3">
										<label className="form-label text-white">??lan ba??l??????</label>
										<Input value={product_info["ad_title"]} onChange={
											((ctx) => { this.setState({ "product_info": { ...product_info, "ad_title": ctx.target.value } }) }).bind(this)
										} maxLength="30" minLength="1"/>
										<small className="text-primary">En az 1 karakter i??ermelidir.</small>
									</div>
								
									<div className="mb-3">
										<label className="form-label text-white">Durumu</label>
										<Input value={product_info["status"]} onChange={
											((ctx) => { this.setState({ "product_info": { ...product_info, "status": ctx.target.value } }) }).bind(this)
										} maxLength="20" minLength="4"/>
										<small className="text-primary">En az 4 karakter i??ermelidir.</small>
									</div>

									<div className="mb-3">
										<label className="form-label text-white">??lan a????klamas??</label>
										<Input value={product_info["ad_description"]} onChange={
											((ctx) => { this.setState({ "product_info": { ...product_info, "ad_description": ctx.target.value } }) }).bind(this)
										} maxLength="200"/>
									</div>

									<div className="mb-3">
										<label className="form-label text-white">??lan be??eni say??s??</label>
										<Input value={product_info["likes"]} onChange={
											((ctx) => { if (/^[0-9]+$/.test(ctx.target.value) || !ctx.target.value.length)
												this.setState({ "product_info": { ...product_info, "likes": ctx.target.value } }) }).bind(this)
										} maxLength="5" minLength="1"/>
										<small className="text-primary">En az 0 de??eri verilebilir.</small>
									</div>

									<div className="mb-3">
										<label className="form-label text-white">Sat??c?? be??eni say??s??</label>
										<Input value={product_info["ad_seller_likes"]} onChange={
											((ctx) => { if (/^[0-9]+$/.test(ctx.target.value) || !ctx.target.value.length)
												this.setState({ "product_info": { ...product_info, "ad_seller_likes": ctx.target.value } }) }).bind(this)
										} maxLength="5" minLength="1"/>
										<small className="text-primary">En az 0 de??eri verilebilir.</small>
									</div>

									<div className="mb-3">
										<label className="form-label text-white">??r??n fiyat?? (Al??c?? ??demelide +50 TL kargo ??creti)</label>
										<Input value={product_info["ad_price"]} onChange={
											((ctx) => { if (/^[0-9]+$/.test(ctx.target.value) || !ctx.target.value.length)
												this.setState({ "product_info": { ...product_info, "ad_price": ctx.target.value } }) }).bind(this)
										} indicator="TL" maxLength="6" minLength="4"/>
										<small className="text-primary">En az 1000 de??eri verilebilir.</small>
									</div>

									<div className="mb-3">
										<label className="form-label text-white">Kargo</label>
										<Form.Select className="border-0 bg-primary" value={ this.state["product_info"]["ad_shipment"] } onChange={
											((ctx) => { this.setState({ "product_info": { ...product_info, "ad_shipment": ctx.target.value } }) }).bind(this)
										}>
											<option value="1">Al??c?? ??demeli</option>
											<option value="2">Sat??c?? ??demeli</option>
										</Form.Select>
									</div>

								</div>

								<div className="flex-grow-1" style={{"width": "250px"}}>
									
									<label className="text-white mb-2">??lan foto??raflar??n?? se??</label>
									
									<div className="d-flex flex-column justify-content-center align-items-center border-secondary rounded-2 mb-1 position-relative" style={{
										"height": "150px",
										"border": "1px dashed"
									}}>
										<input onChange={ ((ctx) => {
										
											if (product_info["images"].length < 10) this.OnAddImage(ctx)

										}).bind(this) } type="file" accept="image/png, image/jpeg, image/jpg" alt="" className="position-absolute w-100 h-100 opacity-0"/>
										<BsFillCameraFill className="text-secondary" style={{"fontSize": "5rem"}}/>
										<small className="text-secondary">Foto??raf se?? (Max. 1MB)</small>

									</div>

									<small className="text-primary mb-3 d-block"><span>{ product_info["image_count"] }</span>/10 tane foto??raf se??ildi</small>

									<div className="d-flex flex-column gap-2">
										{ this.GetImages() }
									</div>

								</div>

								<div className="w-100">
									
									<RaiseModal>
										
										<ModalToggler><Button disabled={
											this.state["product_info"]["ad_seller"].length < 3 ||
											!this.state["product_info"]["ad_title"].length ||
											this.state["product_info"]["status"].length < 4 ||
											this.state["product_info"]["likes"].length < 1 ||
											this.state["product_info"]["ad_seller_likes"].length < 1 ||
											this.state["product_info"]["ad_price"].length < 4 ||
											!this.state["product_info"]["ad_shipment"] ||
											!this.state["product_info"]["images"].length
										} variant="primary" className="d-block ms-auto">Linki olu??tur</Button></ModalToggler>
										
										<Modal>
									
											<ModalBS.Header className="border-0" closeButton>
												<ModalBS.Title className="text-dark">
													Link olu??tur
												</ModalBS.Title>
											</ModalBS.Header>

											<ModalBS.Body className="text-white">
												
												Ayn?? anda toplamda <span className="text-primary">5</span> tane link bulundurma hakk??n??z bulunmaktad??r. Link olu??turmak istedi??inize emin misiniz?

											</ModalBS.Body>

											
											<ModalBS.Footer className="border-0">
									        	<Button disabled={this.state["add_link_busy"]} variant="success" onClick={this.OnCreateLink} style={{ "width": 80 }}>
									            	{ this.state["add_link_busy"] ? <Spinner as="span" animation="border" size="sm"/> : "Olu??tur" }
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
		}

	}

	render() {

		return (

			<Container fluid="xxl" className="h-100 mb-5" style={{"paddingTop": "100px"}}>
				
				<div className="border border-secondary rounded-4 p-3 m-3">
					
					<div className="d-flex flex-row justify-content-between">
						<h1 className="text-white fs-3"><BsLink45Deg className="text-primary"/> Link Olu??tur</h1>
						<Form.Select className="border-0 bg-primary" style={{"width": "40%", "maxWidth": "300px"}} onChange={this.SetCreateLinkMenu}>

					    	<option>Hizmet se??</option>
					      	<option value="1">Sahibinden Param G??vende</option>
					        <option value="2">Dolap G??venli ??deme</option>
					    
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