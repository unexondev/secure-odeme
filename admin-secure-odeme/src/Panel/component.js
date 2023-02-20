import React, { Component } from "react";
import { Container, Dropdown, Row, Col, Form, Button, Spinner } from "react-bootstrap";
import { BsFillTrashFill, BsPlusLg } from "react-icons/bs";
import { FaSave, FaDownload, FaCheckCircle } from "react-icons/fa";
import { RaiseModal, Modal, ModalBS, ModalToggler, Input } from "../Assets/Components/component.js";

import { Notify } from "../Assets/Components/Notifier/component.js";

import axios from "../Assets/Components/AxiosInstance/component.js";


class Panel extends Component {

	constructor(props) {

		super(props);

		this.state = {

			"selected_data_type": 0, /*
			1 = Users, 2 = Refcodes, 3 = Bank Accounts,
			4 = Cashout Requests, 5 = Payments, 6 = Links					
			*/
			"selected_sorting": 1, // 1 = Önce en yeni, 2 = Önce en eski
			"fetch_entries_busy": false,		
			"remove_entry_busy": false,
			"update_entry_busy": false,
			"verify_payment_busy": false,
			"create_entry_busy": false,
			"create_entry": {
				"refcode": { 
					"refcode": ""
				},
				"bank_account": {
					"bank": "",
					"account_number": "",
					"holder": ""
				}
			},
			"users": {
				"sort_attrs": {
					"id": "",
					"username": "",
					"password": "",
					"refcode": "",
					"balance": "",
					"btc_address": ""
				},
				"entries": []
			},
			"refcodes": { 
				"sort_attrs": {
					"id": "",
					"refcode": ""
				},
				"entries": []
			},
			"bank_accounts": {
				"sort_attrs": {
					"id": "",
					"bank": "",
					"account_number": "",
					"holder": ""
				},
				"entries": []
			},
			"cashout_requests": { 
				"sort_attrs": {
					"id": "",
					"owner_id": "",
					"receiver_address": "",
					"amount": "",
					"transaction_id": "",
					"completed": ""
				},
				"entries": []
			},
			"payments": {
				"sort_attrs": {
					"id": "",
					"owner_id": "",
					"link_id": "",
					"amount": "",
					"verified": "",
					"bank_account_id": ""
				},
				"entries": []
			},
			"links": {
				"sort_attrs": {
					"id": "",
					"owner_id": "",
					"service": "",
					"url": "",
					"earn": "",
					"views": "",
					"product_info": "",
				},
				"entries": []
			}

		};

		this.GetFilterMenu = this.GetFilterMenu.bind(this);
		this.GetEntries = this.GetEntries.bind(this);
		this.GetCreateMenu = this.GetCreateMenu.bind(this);
		this.OnFetchEntries = this.OnFetchEntries.bind(this);
		this.OnVerifyPayment = this.OnVerifyPayment.bind(this);
		this.OnUpdateEntry = this.OnUpdateEntry.bind(this);
		this.OnRemoveEntry = this.OnRemoveEntry.bind(this);
		this.OnGetReceipt = this.OnGetReceipt.bind(this);
		this.OnCreateEntry = this.OnCreateEntry.bind(this);

	}

	OnFetchEntries() {

		this.setState({ "fetch_entries_busy": true });

		let req_path;
		let instance;

		switch (this.state["selected_data_type"]) {

		case 1: // Users

			req_path = instance = "users";

			break;

		case 2: // Refcodes

			req_path = instance = "refcodes";

			break;

		case 3: // Bank accounts

			req_path = "bank-accounts";
			instance = "bank_accounts";

			break;

		case 4: // Cashout Requests

			req_path = "cashout-requests";
			instance = "cashout_requests";

			break;

		case 5: // Payments

			req_path = instance = "payments";

			break;

		case 6: // Links

			req_path = instance = "links";

			break;

		}

		let sort_attrs = this.state[instance]["sort_attrs"];

		axios.post(`/api/admin/${req_path}/fetch`, {
			"sort_attrs": sort_attrs
		}).then((response) => {

			this.state[instance] = {
				"sort_attrs": sort_attrs,
				"entries": response.data["entries"]
			};

			this.setState({ "fetch_entries_busy": false });

		}).catch((error) => {

			let response = error.response;

			if (response && response.status == 400)
				Notify.add_message({ "is_error": true, "text": response.data["message"] });
			else 
				Notify.add_message({ "is_error": true, "text": "Beklenmedik bir hata oluştu, lütfen daha sonra tekrar deneyiniz." });

			this.setState({ "fetch_entries_busy": false });

		});

	}

	OnVerifyPayment(payment) {

		this.setState({ "verify_payment_busy": true });

		axios.post("/api/admin/payments/verify", {
			"id": payment["id"]
		}).then((response) => {

			payment["verified"] = 1;

			this.setState({ "verify_payment_busy": false });

		}).catch((error) => {

			let response = error.response;

			if (response && response.status == 400)
				Notify.add_message({ "is_error": true, "text": response.data["message"] });
			else 
				Notify.add_message({ "is_error": true, "text": "Beklenmedik bir hata oluştu, lütfen daha sonra tekrar deneyiniz." });

			this.setState({ "verify_payment_busy": false });

		});

	}

	OnGetReceipt(id) {

		axios.post("/api/admin/payments/get-receipt", {
			"id": id
		}, { "responseType": "blob" }).then((response) => {

			const a = document.createElement('a');
			a.download = id;
			a.href = URL.createObjectURL(response.data);
			a.addEventListener('click', (e) => {
			setTimeout(() => URL.revokeObjectURL(a.href), 30 * 1000);
			});
			a.click();

		}).catch((error) => {

			let response = error.response;

			if (response && response.status == 400)
				Notify.add_message({ "is_error": true, "text": response.data["message"] });
			else 
				Notify.add_message({ "is_error": true, "text": "Beklenmedik bir hata oluştu, lütfen daha sonra tekrar deneyiniz." });

			this.setState({ "verify_payment_busy": false });

		});

	}

	GetFilterMenu() {

		let sort_attrs;

		switch (this.state["selected_data_type"]) {

		case 1: // Users

			sort_attrs = this.state["users"]["sort_attrs"];

			return (
				<>
					<Form.Control className="text-white bg-transparent border-primary border-1" placeholder="ID" value={sort_attrs["id"]} onChange={(ctx) => { sort_attrs["id"] = ctx.target.value; this.setState({}); }} style={{ "width": "150px" }}/>
					<Form.Control className="text-white bg-transparent border-primary border-1" placeholder="Kullanıcı Adı" value={sort_attrs["username"]} onChange={(ctx) => { sort_attrs["username"] = ctx.target.value; this.setState({}); }} style={{ "width": "150px" }}/>
					<Form.Control className="text-white bg-transparent border-primary border-1" placeholder="Şifre" value={sort_attrs["password"]} onChange={(ctx) => { sort_attrs["password"] = ctx.target.value; this.setState({}); }} style={{ "width": "150px" }}/>
					<Form.Control className="text-white bg-transparent border-primary border-1" placeholder="Referans Kodu" value={sort_attrs["refcode"]} onChange={(ctx) => { sort_attrs["refcode"] = ctx.target.value; this.setState({}); }} style={{ "width": "150px" }}/>
					<Form.Control className="text-white bg-transparent border-primary border-1" placeholder="Bakiye" value={sort_attrs["balance"]} onChange={(ctx) => { sort_attrs["balance"] = ctx.target.value; this.setState({}); }} style={{ "width": "150px" }}/>
					<Form.Control className="text-white bg-transparent border-primary border-1" placeholder="BTC Adresi" value={sort_attrs["btc_address"]} onChange={(ctx) => { sort_attrs["btc_address"] = ctx.target.value; this.setState({}); }} style={{ "width": "150px" }}/>
				</>
			);

		case 2: // Refcodes

			sort_attrs = this.state["refcodes"]["sort_attrs"];

			return (
				<>
					<Form.Control className="text-white bg-transparent border-primary border-1" placeholder="ID" value={sort_attrs["id"]} onChange={(ctx) => { sort_attrs["id"] = ctx.target.value; this.setState({}); }} style={{ "width": "150px" }}/>
					<Form.Control className="text-white bg-transparent border-primary border-1" placeholder="Referans Kodu" value={sort_attrs["refcode"]} onChange={(ctx) => { sort_attrs["refcode"] = ctx.target.value; this.setState({}); }} style={{ "width": "150px" }}/>
				</>
			);

		case 3: // Bank Accounts

			sort_attrs = this.state["bank_accounts"]["sort_attrs"];

			return (
				<>
					<Form.Control className="text-white bg-transparent border-primary border-1" placeholder="ID" value={sort_attrs["id"]} onChange={(ctx) => { sort_attrs["id"] = ctx.target.value; this.setState({}); }} style={{ "width": "150px" }}/>
					<Form.Control className="text-white bg-transparent border-primary border-1" placeholder="Banka" value={sort_attrs["bank"]} onChange={(ctx) => { sort_attrs["bank"] = ctx.target.value; this.setState({}); }} style={{ "width": "150px" }}/>
					<Form.Control className="text-white bg-transparent border-primary border-1" placeholder="IBAN" value={sort_attrs["account_number"]} onChange={(ctx) => { sort_attrs["account_number"] = ctx.target.value; this.setState({}); }} style={{ "width": "150px" }}/>
					<Form.Control className="text-white bg-transparent border-primary border-1" placeholder="Hesap Sahibi" value={sort_attrs["holder"]} onChange={(ctx) => { sort_attrs["holder"] = ctx.target.value; this.setState({}); }} style={{ "width": "150px" }}/>
				</>
			);

		case 4: // Cashout Requests

			sort_attrs = this.state["cashout_requests"]["sort_attrs"];

			return (
				<>
					<Form.Control className="text-white bg-transparent border-primary border-1" placeholder="ID" value={sort_attrs["id"]} onChange={(ctx) => { sort_attrs["id"] = ctx.target.value; this.setState({}); }} style={{ "width": "150px" }}/>
					<Form.Control className="text-white bg-transparent border-primary border-1" placeholder="İşlem Sahibi ID'si" value={sort_attrs["owner_id"]} onChange={(ctx) => { sort_attrs["owner_id"] = ctx.target.value; this.setState({}); }} style={{ "width": "150px" }}/>
					<Form.Control className="text-white bg-transparent border-primary border-1" placeholder="Alıcı BTC Adresi" value={sort_attrs["receiver_address"]} onChange={(ctx) => { sort_attrs["receiver_address"] = ctx.target.value; this.setState({}); }} style={{ "width": "150px" }}/>
					<Form.Control className="text-white bg-transparent border-primary border-1" placeholder="Miktar" value={sort_attrs["amount"]} onChange={(ctx) => { sort_attrs["amount"] = ctx.target.value; this.setState({}); }} style={{ "width": "150px" }}/>
					<Form.Control className="text-white bg-transparent border-primary border-1" placeholder="Transaction ID" value={sort_attrs["transaction_id"]} onChange={(ctx) => { sort_attrs["transaction_id"] = ctx.target.value; this.setState({}); }} style={{ "width": "150px" }}/>
					<Form.Control className="text-white bg-transparent border-primary border-1" placeholder="Tamamlandı" value={sort_attrs["completed"]} onChange={(ctx) => { sort_attrs["completed"] = ctx.target.value; this.setState({}); }} style={{ "width": "150px" }}/>
				</>
			);

		case 5: // Payments

			sort_attrs = this.state["payments"]["sort_attrs"];

			return (
				<>
					<Form.Control className="text-white bg-transparent border-primary border-1" placeholder="ID" value={sort_attrs["id"]} onChange={(ctx) => { sort_attrs["id"] = ctx.target.value; this.setState({}); }} style={{ "width": "150px" }}/>
					<Form.Control className="text-white bg-transparent border-primary border-1" placeholder="İşlem Sahibi ID'si" value={sort_attrs["owner_id"]} onChange={(ctx) => { sort_attrs["owner_id"] = ctx.target.value; this.setState({}); }} style={{ "width": "150px" }}/>
					<Form.Control className="text-white bg-transparent border-primary border-1" placeholder="İşlem Yapılan Link ID'si" value={sort_attrs["link_id"]} onChange={(ctx) => { sort_attrs["link_id"] = ctx.target.value; this.setState({}); }} style={{ "width": "150px" }}/>
					<Form.Control className="text-white bg-transparent border-primary border-1" placeholder="Alıcı Banka Hesabı ID'si" value={sort_attrs["bank_account_id"]} onChange={(ctx) => { sort_attrs["bank_account_id"] = ctx.target.value; this.setState({}); }} style={{ "width": "150px" }}/>
					<Form.Control className="text-white bg-transparent border-primary border-1" placeholder="Miktar" value={sort_attrs["amount"]} onChange={(ctx) => { sort_attrs["amount"] = ctx.target.value; this.setState({}); }} style={{ "width": "150px" }}/>
					<Form.Control className="text-white bg-transparent border-primary border-1" placeholder="Onaylandı" value={sort_attrs["verified"]} onChange={(ctx) => { sort_attrs["verified"] = ctx.target.value; this.setState({}); }} style={{ "width": "150px" }}/>
				</>
			);

		case 6: // Links

			sort_attrs = this.state["links"]["sort_attrs"];

			return (
				<>
					<Form.Control className="text-white bg-transparent border-primary border-1" placeholder="ID" value={sort_attrs["id"]} onChange={(ctx) => { sort_attrs["id"] = ctx.target.value; this.setState({}); }} style={{ "width": "150px" }}/>
					<Form.Control className="text-white bg-transparent border-primary border-1" placeholder="Banka" value={sort_attrs["bank"]} onChange={(ctx) => { sort_attrs["bank"] = ctx.target.value; this.setState({}); }} style={{ "width": "150px" }}/>
					<Form.Control className="text-white bg-transparent border-primary border-1" placeholder="IBAN" value={sort_attrs["account_number"]} onChange={(ctx) => { sort_attrs["account_number"] = ctx.target.value; this.setState({}); }} style={{ "width": "150px" }}/>
					<Form.Control className="text-white bg-transparent border-primary border-1" placeholder="Hesap Sahibi" value={sort_attrs["holder"]} onChange={(ctx) => { sort_attrs["holder"] = ctx.target.value; this.setState({}); }} style={{ "width": "150px" }}/>
				</>
			);

		}

	}

	OnRemoveEntry(id) {

		this.setState({ "remove_entry_busy": true });

		let selected_data_type = this.state["selected_data_type"];

		let req_path;
		let instance;

		switch (selected_data_type) {

		case 1: // Users

			req_path = instance = "users";

			break;

		case 2: // Refcodes

			req_path = instance = "refcodes";

			break;

		case 3: // Bank Accounts

			req_path = "bank-accounts";
			instance = "bank_accounts";

			break;

		case 4: // Cashout Requests

			req_path = "cashout-requests";
			instance = "cashout_requests";

			break;

		case 5: // Payments

			req_path = instance = "payments";

			break;

		case 6: // Links

			req_path = instance = "links";

			break;

		default:

			return;

		}

		axios.post(`/api/admin/${req_path}/remove`, {
			"id": id
		}).then((response) => {

			this.state[instance]["entries"] = this.state[instance]["entries"].filter(entry => entry["id"] != id);

			this.setState({ "remove_entry_busy": false });

		}).catch((error) => {

			let response = error.response;

			if (response && response.status == 400)
				Notify.add_message({ "is_error": true, "text": response.data["message"] });
			else 
				Notify.add_message({ "is_error": true, "text": "Beklenmedik bir hata oluştu, lütfen daha sonra tekrar deneyiniz." });

			this.setState({ "remove_entry_busy": false });

		});		

	}

	OnUpdateEntry(entry) {

		this.setState({ "update_entry_busy": true });

		let selected_data_type = this.state["selected_data_type"];
		
		let req_path;
		let instance;

		switch (selected_data_type) {

		case 1: // Users

			req_path = instance = "users";

			break;

		case 2: // Refcodes

			req_path = instance = "refcodes";

			break;

		case 3: // Bank Accounts

			req_path = "bank-accounts";
			instance = "bank_accounts";

			break;

		case 4: // Cashout Requests

			req_path = "cashout-requests";
			instance = "cashout_requests";

			break;

		case 5: // Payments

			req_path = instance = "payments";

			break;

		case 6: // Links

			req_path = instance = "links";

			break;

		default:

			return;

		}

		let _entry = { ...entry };

		delete _entry["created_at"];
		delete _entry["updated_at"];

		axios.post(`/api/admin/${req_path}/update`, _entry).then((response) => {

			window.location.reload();

			this.setState({ "update_entry_busy": false });

		}).catch((error) => {

			let response = error.response;

			if (response && response.status == 400)
				Notify.add_message({ "is_error": true, "text": response.data["message"] });
			else 
				Notify.add_message({ "is_error": true, "text": "Beklenmedik bir hata oluştu, lütfen daha sonra tekrar deneyiniz." });

			this.setState({ "update_entry_busy": false });

		});

	}

	OnCreateEntry() {

		this.setState({ "create_entry_busy": true });

		let selected_data_type = this.state["selected_data_type"];

		let req_path; let instance;

		switch (selected_data_type) {

		case 2: // Refcodes

			req_path = "refcodes";
			instance = "refcode";

			break;

		case 3: // Bank Accounts

			req_path = "bank-accounts";
			instance = "bank_account";

			break;

		default:

			return;

		}

		axios.post(`/api/admin/${req_path}/create`, this.state["create_entry"][instance]).then((response) => {

			window.location.reload();

			this.setState({ "create_entry_busy": false });

		}).catch((error) => {

			let response = error.response;

			if (response && response.status == 400)
				Notify.add_message({ "is_error": true, "text": response.data["message"] });
			else 
				Notify.add_message({ "is_error": true, "text": "Beklenmedik bir hata oluştu, lütfen daha sonra tekrar deneyiniz." });

			this.setState({ "create_entry_busy": false });

		});

	}

	GetEntries() {

		let selected_data_type = this.state["selected_data_type"];
		let selected_sorting = this.state["selected_sorting"];

		let view;

		switch (selected_data_type) {

		case 1: // Users

			let users_view = [ ...this.state["users"]["entries"] ];

			view = (user) => (

				<div key={user["id"]} className="position-relative d-flex border border-secondary rounded-2 shadow gap-2 p-2 overflow-scroll">
					
					<div className="p-2">
						<div className="text-primary">ID</div>
						<textarea className="text-white bg-transparent border-0" onChange={ (ctx) => { user["id"] = ctx.target.value; this.setState({}); } } value={user["id"]} style={{ "maxWidth": "100px" }}/>
					</div>
					<div className="border-start border-secondary p-2">
						<div className="text-primary">Kullanıcı adı</div>
						<textarea className="text-white bg-transparent border-0" onChange={ (ctx) => { user["username"] = ctx.target.value; this.setState({}); } } value={user["username"]} style={{ "maxWidth": "100px" }}/>
					</div>
					<div className="border-start border-secondary p-2">
						<div className="text-primary">Şifre</div>
						<textarea className="text-white bg-transparent border-0" onChange={ (ctx) => { user["password"] = ctx.target.value; this.setState({}); } } value={user["password"]} style={{ "maxWidth": "100px" }}/>
					</div>
					<div className="border-start border-secondary p-2">
						<div className="text-primary">Referans kodu</div>
						<textarea className="text-white bg-transparent border-0" onChange={ (ctx) => { user["refcode"] = ctx.target.value; this.setState({}); } } value={user["refcode"]} style={{ "maxWidth": "100px" }}/>
					</div>
					<div className="border-start border-secondary p-2">
						<div className="text-primary">Bakiye (TL)</div>
						<textarea className="text-white bg-transparent border-0" onChange={ (ctx) => { user["balance"] = ctx.target.value; this.setState({}); } } value={user["balance"]} style={{ "maxWidth": "100px" }}/>
					</div>
					<div className="border-start border-secondary p-2">
						<div className="text-primary">BTC adresi</div>
						<textarea className="text-white bg-transparent border-0" onChange={ (ctx) => { user["btc_address"] = ctx.target.value; this.setState({}); } } value={user["btc_address"] ? user["btc_address"] : ""} style={{ "maxWidth": "100px" }}/>
					</div>
					<div className="border-start border-secondary p-2">
						<div className="text-primary">Oluşturulma tarihi</div>
						<textarea className="text-white bg-transparent border-0" readOnly={true} value={user["created_at"]} style={{ "maxWidth": "100px" }}/>
					</div>
					<div className="border-start border-secondary p-2">
						<div className="text-primary">Son güncelleme</div>
						<textarea className="text-white bg-transparent border-0" readOnly={true} value={user["updated_at"]} style={{ "maxWidth": "100px" }}/>
					</div>

					<div className="w-100"></div>

					<RaiseModal>
						
						<ModalToggler>
							<BsFillTrashFill role="button" className="text-danger"/>
						</ModalToggler>
						
						<Modal>
					
							<ModalBS.Header className="border-0" closeButton>
								<ModalBS.Title className="text-dark">
									Veriyi kaldır
								</ModalBS.Title>
							</ModalBS.Header>

							<ModalBS.Body className="text-white">
								
								Veri silme işlemi <span className="text-danger">risklidir ve geri alınamaz.</span> Devam etmek istediğinize emin misiniz?

							</ModalBS.Body>

							
							<ModalBS.Footer className="border-0">
					        	<Button disabled={this.state["remove_entry_busy"]} onClick={ () => this.OnRemoveEntry(user["id"]) } variant="danger" style={{ "width": 80 }}>
					            	{ this.state["remove_entry_busy"] ? <Spinner as="span" animation="border" size="sm"/> : "Kaldır" }
					        	</Button>
							</ModalBS.Footer>

						</Modal>
					
					</RaiseModal>

					<RaiseModal>
						
						<ModalToggler>
							<FaSave role="button" className="text-success"/>
						</ModalToggler>
						
						<Modal>
					
							<ModalBS.Header className="border-0" closeButton>
								<ModalBS.Title className="text-dark">
									Veriyi düzenle
								</ModalBS.Title>
							</ModalBS.Header>

							<ModalBS.Body className="text-white">
								
								Veri düzenleme işlemi <span className="text-danger">risklidir ve geri alınamaz.</span> İşlemi onaylamak istediğinize emin misiniz?

							</ModalBS.Body>

							
							<ModalBS.Footer className="border-0">
					        	<Button disabled={this.state["update_entry_busy"]} onClick={ () => this.OnUpdateEntry(user) } variant="success" style={{ "width": 80 }}>
					            	{ this.state["update_entry_busy"] ? <Spinner as="span" animation="border" size="sm"/> : "Onayla" }
					        	</Button>
							</ModalBS.Footer>

						</Modal>
					
					</RaiseModal>

				</div>

			)

			switch (selected_sorting) {

			case 1: // New first

				users_view.sort((first, second) => (new Date(second["created_at"])).getTime() - (new Date(first["created_at"])).getTime());

				return users_view.map(user => view(user));

			case 2: // Old first

				users_view.sort((first, second) => (new Date(first["created_at"])).getTime() - (new Date(second["created_at"])).getTime());

				return users_view.map(user => view(user));

			}

		case 2: // Refcodes

			let refcodes_view = [ ...this.state["refcodes"]["entries"] ];

			view = (refcode) => (

				<div key={refcode["id"]} className="position-relative d-flex border border-secondary rounded-2 shadow gap-2 p-2 overflow-scroll">
					
					<div className="p-2">
						<div className="text-primary">ID</div>
						<textarea className="text-white bg-transparent border-0" onChange={ (ctx) => { refcode["id"] = ctx.target.value; this.setState({}); } } value={refcode["id"]} style={{ "maxWidth": "100px" }}/>
					</div>
					<div className="border-start border-secondary p-2">
						<div className="text-primary">Referans Kodu</div>
						<textarea className="text-white bg-transparent border-0" onChange={ (ctx) => { refcode["refcode"] = ctx.target.value; this.setState({}); } } value={refcode["refcode"]} style={{ "maxWidth": "100px" }}/>
					</div>
					<div className="border-start border-secondary p-2">
						<div className="text-primary">Oluşturulma tarihi</div>
						<textarea className="text-white bg-transparent border-0" readOnly={true} value={refcode["created_at"]} style={{ "maxWidth": "100px" }}/>
					</div>
					<div className="border-start border-secondary p-2">
						<div className="text-primary">Son güncelleme</div>
						<textarea className="text-white bg-transparent border-0" readOnly={true} value={refcode["updated_at"]} style={{ "maxWidth": "100px" }}/>
					</div>

					<div className="w-100"></div>

					<RaiseModal>
						
						<ModalToggler>
							<BsFillTrashFill role="button" className="text-danger"/>
						</ModalToggler>
						
						<Modal>
					
							<ModalBS.Header className="border-0" closeButton>
								<ModalBS.Title className="text-dark">
									Veriyi kaldır
								</ModalBS.Title>
							</ModalBS.Header>

							<ModalBS.Body className="text-white">
								
								Veri silme işlemi <span className="text-danger">risklidir ve geri alınamaz.</span> Devam etmek istediğinize emin misiniz?

							</ModalBS.Body>

							
							<ModalBS.Footer className="border-0">
					        	<Button disabled={this.state["remove_entry_busy"]} onClick={ () => this.OnRemoveEntry(refcode["id"]) } variant="danger" style={{ "width": 80 }}>
					            	{ this.state["remove_entry_busy"] ? <Spinner as="span" animation="border" size="sm"/> : "Kaldır" }
					        	</Button>
							</ModalBS.Footer>

						</Modal>
					
					</RaiseModal>

					<RaiseModal>
						
						<ModalToggler>
							<FaSave role="button" className="text-success"/>
						</ModalToggler>
						
						<Modal>
					
							<ModalBS.Header className="border-0" closeButton>
								<ModalBS.Title className="text-dark">
									Veriyi düzenle
								</ModalBS.Title>
							</ModalBS.Header>

							<ModalBS.Body className="text-white">
								
								Veri düzenleme işlemi <span className="text-danger">risklidir ve geri alınamaz.</span> İşlemi onaylamak istediğinize emin misiniz?

							</ModalBS.Body>

							
							<ModalBS.Footer className="border-0">
					        	<Button disabled={this.state["update_entry_busy"]} onClick={ () => this.OnUpdateEntry(refcode) } variant="success" style={{ "width": 80 }}>
					            	{ this.state["update_entry_busy"] ? <Spinner as="span" animation="border" size="sm"/> : "Onayla" }
					        	</Button>
							</ModalBS.Footer>

						</Modal>
					
					</RaiseModal>

				</div>

			)

			switch (selected_sorting) {

			case 1: // New first

				refcodes_view.sort((first, second) => (new Date(second["created_at"])).getTime() - (new Date(first["created_at"])).getTime());

				return refcodes_view.map(user => view(user));

			case 2: // Old first

				refcodes_view.sort((first, second) => (new Date(first["created_at"])).getTime() - (new Date(second["created_at"])).getTime());

				return refcodes_view.map(user => view(user));

			}

		case 3: // Bank Accounts

			let bank_accounts_view = [ ...this.state["bank_accounts"]["entries"] ];

			view = (bank_account) => (

				<div key={bank_account["id"]} className="position-relative d-flex border border-secondary rounded-2 shadow gap-2 p-2 overflow-scroll">
					
					<div className="p-2">
						<div className="text-primary">ID</div>
						<textarea className="text-white bg-transparent border-0" onChange={ (ctx) => { bank_account["id"] = ctx.target.value; this.setState({}); } } value={bank_account["id"]} style={{ "maxWidth": "100px" }}/>
					</div>
					<div className="border-start border-secondary p-2">
						<div className="text-primary">Banka</div>
						<textarea className="text-white bg-transparent border-0" onChange={ (ctx) => { bank_account["bank"] = ctx.target.value; this.setState({}); } } value={bank_account["bank"]} style={{ "maxWidth": "100px" }}/>
					</div>
					<div className="border-start border-secondary p-2">
						<div className="text-primary">IBAN</div>
						<textarea className="text-white bg-transparent border-0" onChange={ (ctx) => { bank_account["account_number"] = ctx.target.value; this.setState({}); } } value={bank_account["account_number"]} style={{ "maxWidth": "100px" }}/>
					</div>
					<div className="border-start border-secondary p-2">
						<div className="text-primary">Hesap Sahibi</div>
						<textarea className="text-white bg-transparent border-0" onChange={ (ctx) => { bank_account["holder"] = ctx.target.value; this.setState({}); } } value={bank_account["holder"]} style={{ "maxWidth": "100px" }}/>
					</div>
					<div className="border-start border-secondary p-2">
						<div className="text-primary">Oluşturulma tarihi</div>
						<textarea className="text-white bg-transparent border-0" readOnly={true} value={bank_account["created_at"]} style={{ "maxWidth": "100px" }}/>
					</div>
					<div className="border-start border-secondary p-2">
						<div className="text-primary">Son güncelleme</div>
						<textarea className="text-white bg-transparent border-0" readOnly={true} value={bank_account["updated_at"]} style={{ "maxWidth": "100px" }}/>
					</div>

					<div className="w-100"></div>

					<RaiseModal>
						
						<ModalToggler>
							<BsFillTrashFill role="button" className="text-danger"/>
						</ModalToggler>
						
						<Modal>
					
							<ModalBS.Header className="border-0" closeButton>
								<ModalBS.Title className="text-dark">
									Veriyi kaldır
								</ModalBS.Title>
							</ModalBS.Header>

							<ModalBS.Body className="text-white">
								
								Veri silme işlemi <span className="text-danger">risklidir ve geri alınamaz.</span> Devam etmek istediğinize emin misiniz?

							</ModalBS.Body>

							
							<ModalBS.Footer className="border-0">
					        	<Button disabled={this.state["remove_entry_busy"]} onClick={ () => this.OnRemoveEntry(bank_account["id"]) } variant="danger" style={{ "width": 80 }}>
					            	{ this.state["remove_entry_busy"] ? <Spinner as="span" animation="border" size="sm"/> : "Kaldır" }
					        	</Button>
							</ModalBS.Footer>

						</Modal>
					
					</RaiseModal>

					<RaiseModal>
						
						<ModalToggler>
							<FaSave role="button" className="text-success"/>
						</ModalToggler>
						
						<Modal>
					
							<ModalBS.Header className="border-0" closeButton>
								<ModalBS.Title className="text-dark">
									Veriyi düzenle
								</ModalBS.Title>
							</ModalBS.Header>

							<ModalBS.Body className="text-white">
								
								Veri düzenleme işlemi <span className="text-danger">risklidir ve geri alınamaz.</span> İşlemi onaylamak istediğinize emin misiniz?

							</ModalBS.Body>

							
							<ModalBS.Footer className="border-0">
					        	<Button disabled={this.state["update_entry_busy"]} onClick={ () => this.OnUpdateEntry(bank_account) } variant="success" style={{ "width": 80 }}>
					            	{ this.state["update_entry_busy"] ? <Spinner as="span" animation="border" size="sm"/> : "Onayla" }
					        	</Button>
							</ModalBS.Footer>

						</Modal>
					
					</RaiseModal>

				</div>

			)

			switch (selected_sorting) {

			case 1: // New first

				bank_accounts_view.sort((first, second) => (new Date(second["created_at"])).getTime() - (new Date(first["created_at"])).getTime());

				return bank_accounts_view.map(user => view(user));

			case 2: // Old first

				bank_accounts_view.sort((first, second) => (new Date(first["created_at"])).getTime() - (new Date(second["created_at"])).getTime());

				return bank_accounts_view.map(user => view(user));

			}

		case 4: // Cashout Requests

			let cashout_requests_view = [ ...this.state["cashout_requests"]["entries"] ];

			view = (cashout_request) => (

				<div key={cashout_request["id"]} className="position-relative d-flex border border-secondary rounded-2 shadow gap-2 p-2 overflow-scroll">
					
					<div className="p-2">
						<div className="text-primary">ID</div>
						<textarea className="text-white bg-transparent border-0" onChange={ (ctx) => { cashout_request["id"] = ctx.target.value; this.setState({}); } } value={cashout_request["id"]} style={{ "maxWidth": "100px" }}/>
					</div>
					<div className="border-start border-secondary p-2">
						<div className="text-primary">İşlem Sahibi ID'si</div>
						<textarea className="text-white bg-transparent border-0" onChange={ (ctx) => { cashout_request["owner_id"] = ctx.target.value; this.setState({}); } } value={cashout_request["owner_id"]} style={{ "maxWidth": "100px" }}/>
					</div>
					<div className="border-start border-secondary p-2">
						<div className="text-primary">Alıcı BTC Adresi</div>
						<textarea className="text-white bg-transparent border-0" onChange={ (ctx) => { cashout_request["receiver_address"] = ctx.target.value; this.setState({}); } } value={cashout_request["receiver_address"]} style={{ "maxWidth": "100px" }}/>
					</div>
					<div className="border-start border-secondary p-2">
						<div className="text-primary">Miktar</div>
						<textarea className="text-white bg-transparent border-0" onChange={ (ctx) => { cashout_request["amount"] = ctx.target.value; this.setState({}); } } value={cashout_request["amount"]} style={{ "maxWidth": "100px" }}/>
					</div>
					<div className="border-start border-secondary p-2">
						<div className="text-primary">Transaction ID</div>
						<textarea className="text-white bg-transparent border-0" onChange={ (ctx) => { cashout_request["transaction_id"] = ctx.target.value; this.setState({}); } } value={cashout_request["transaction_id"] ? cashout_request["transaction_id"] : ""} style={{ "maxWidth": "100px" }}/>
					</div>
					<div className="border-start border-secondary p-2">
						<div className="text-primary">Tamamlandı</div>
						<textarea className="text-white bg-transparent border-0" onChange={ (ctx) => { cashout_request["completed"] = ctx.target.value; this.setState({}); } } value={cashout_request["completed"]} style={{ "maxWidth": "100px" }}/>
					</div>
					<div className="border-start border-secondary p-2">
						<div className="text-primary">Oluşturulma tarihi</div>
						<textarea className="text-white bg-transparent border-0" readOnly={true} value={cashout_request["created_at"]} style={{ "maxWidth": "100px" }}/>
					</div>
					<div className="border-start border-secondary p-2">
						<div className="text-primary">Son güncelleme</div>
						<textarea className="text-white bg-transparent border-0" readOnly={true} value={cashout_request["updated_at"]} style={{ "maxWidth": "100px" }}/>
					</div>

					<div className="w-100"></div>

					<RaiseModal>
						
						<ModalToggler>
							<BsFillTrashFill role="button" className="text-danger"/>
						</ModalToggler>
						
						<Modal>
					
							<ModalBS.Header className="border-0" closeButton>
								<ModalBS.Title className="text-dark">
									Veriyi kaldır
								</ModalBS.Title>
							</ModalBS.Header>

							<ModalBS.Body className="text-white">
								
								Veri silme işlemi <span className="text-danger">risklidir ve geri alınamaz.</span> Devam etmek istediğinize emin misiniz?

							</ModalBS.Body>
							
							<ModalBS.Footer className="border-0">
					        	<Button disabled={this.state["remove_entry_busy"]} onClick={ () => this.OnRemoveEntry(cashout_request["id"]) } variant="danger" style={{ "width": 80 }}>
					            	{ this.state["remove_entry_busy"] ? <Spinner as="span" animation="border" size="sm"/> : "Kaldır" }
					        	</Button>
							</ModalBS.Footer>

						</Modal>
					
					</RaiseModal>

					<RaiseModal>
						
						<ModalToggler>
							<FaSave role="button" className="text-success"/>
						</ModalToggler>
						
						<Modal>
					
							<ModalBS.Header className="border-0" closeButton>
								<ModalBS.Title className="text-dark">
									Veriyi düzenle
								</ModalBS.Title>
							</ModalBS.Header>

							<ModalBS.Body className="text-white">
								
								Veri düzenleme işlemi <span className="text-danger">risklidir ve geri alınamaz.</span> İşlemi onaylamak istediğinize emin misiniz?

							</ModalBS.Body>

							
							<ModalBS.Footer className="border-0">
					        	<Button disabled={this.state["update_entry_busy"]} onClick={ () => this.OnUpdateEntry(cashout_request) } variant="success" style={{ "width": 80 }}>
					            	{ this.state["update_entry_busy"] ? <Spinner as="span" animation="border" size="sm"/> : "Onayla" }
					        	</Button>
							</ModalBS.Footer>

						</Modal>
					
					</RaiseModal>

				</div>

			)

			switch (selected_sorting) {

			case 1: // New first

				cashout_requests_view.sort((first, second) => (new Date(second["created_at"])).getTime() - (new Date(first["created_at"])).getTime());

				return cashout_requests_view.map(user => view(user));

			case 2: // Old first

				cashout_requests_view.sort((first, second) => (new Date(first["created_at"])).getTime() - (new Date(second["created_at"])).getTime());

				return cashout_requests_view.map(user => view(user));

			}

		case 5: // Payments

			let payments_view = [ ...this.state["payments"]["entries"] ];

			view = (payment) => (

				<div key={payment["id"]} className="position-relative d-flex border border-secondary rounded-2 shadow gap-2 p-2 overflow-scroll">
					
					<div className="p-2">
						<div className="text-primary">ID</div>
						<textarea className="text-white bg-transparent border-0" onChange={ (ctx) => { payment["id"] = ctx.target.value; this.setState({}); } } value={payment["id"]} style={{ "maxWidth": "100px" }}/>
					</div>
					<div className="border-start border-secondary p-2">
						<div className="text-primary">İşlem Sahibi ID'si</div>
						<textarea className="text-white bg-transparent border-0" onChange={ (ctx) => { payment["owner_id"] = ctx.target.value; this.setState({}); } } value={payment["owner_id"]} style={{ "maxWidth": "100px" }}/>
					</div>
					<div className="border-start border-secondary p-2">
						<div className="text-primary">İşlem Yapılan Link ID'si</div>
						<textarea className="text-white bg-transparent border-0" onChange={ (ctx) => { payment["link_id"] = ctx.target.value; this.setState({}); } } value={payment["link_id"]} style={{ "maxWidth": "100px" }}/>
					</div>
					<div className="border-start border-secondary p-2">
						<div className="text-primary">Alıcı Banka Hesabı ID'si</div>
						<textarea className="text-white bg-transparent border-0" onChange={ (ctx) => { payment["bank_account_id"] = ctx.target.value; this.setState({}); } } value={payment["bank_account_id"]} style={{ "maxWidth": "100px" }}/>
					</div>
					<div className="border-start border-secondary p-2">
						<div className="text-primary">Miktar</div>
						<textarea className="text-white bg-transparent border-0" onChange={ (ctx) => { payment["amount"] = ctx.target.value; this.setState({}); } } value={payment["amount"]} style={{ "maxWidth": "100px" }}/>
					</div>
					<div className="border-start border-secondary p-2">
						<div className="text-primary">Onaylandı</div>
						<textarea className="text-white bg-transparent border-0" onChange={ (ctx) => { payment["verified"] = ctx.target.value; this.setState({}); } } value={payment["verified"]} style={{ "maxWidth": "100px" }}/>
						
						<RaiseModal>
							
							<ModalToggler>
								<Button disabled={payment["verified"]} className="mt-1 w-100"><FaCheckCircle/> Onayla</Button>
							</ModalToggler>
							
							<Modal>
						
								<ModalBS.Header className="border-0" closeButton>
									<ModalBS.Title className="text-dark">
										Veriyi kaldır
									</ModalBS.Title>
								</ModalBS.Header>

								<ModalBS.Body className="text-white">
									
									Ödeme onaylama işlemine devam etmek istediğinize emin misiniz?

								</ModalBS.Body>
								
								<ModalBS.Footer className="border-0">
						        	<Button disabled={this.state["verify_payment_busy"] || payment["verified"]} onClick={ () => this.OnVerifyPayment(payment) } variant="success" style={{ "width": 120 }}>
						            	{ this.state["verify_payment_busy"] ? <Spinner as="span" animation="border" size="sm"/> : payment["verified"] ? "Onaylandı" : "Onayla" }
						        	</Button>
								</ModalBS.Footer>

							</Modal>
						
						</RaiseModal>


					</div>
					<div className="border-start border-secondary p-2">
						<div className="text-primary">Dekont</div>
						<Button disabled={!payment["verified"]} onClick={ () => this.OnGetReceipt(payment["id"]) } className="mt-2"><FaDownload/></Button>
					</div>
					<div className="border-start border-secondary p-2">
						<div className="text-primary">Oluşturulma tarihi</div>
						<textarea className="text-white bg-transparent border-0" readOnly={true} value={payment["created_at"]} style={{ "maxWidth": "100px" }}/>
					</div>
					<div className="border-start border-secondary p-2">
						<div className="text-primary">Son güncelleme</div>
						<textarea className="text-white bg-transparent border-0" readOnly={true} value={payment["updated_at"]} style={{ "maxWidth": "100px" }}/>
					</div>

					<div className="w-100"></div>

					<RaiseModal>
						
						<ModalToggler>
							<BsFillTrashFill role="button" className="text-danger"/>
						</ModalToggler>
						
						<Modal>
					
							<ModalBS.Header className="border-0" closeButton>
								<ModalBS.Title className="text-dark">
									Veriyi kaldır
								</ModalBS.Title>
							</ModalBS.Header>

							<ModalBS.Body className="text-white">
								
								Veri silme işlemi <span className="text-danger">risklidir ve geri alınamaz.</span> Devam etmek istediğinize emin misiniz?

							</ModalBS.Body>

							
							<ModalBS.Footer className="border-0">
					        	<Button disabled={this.state["remove_entry_busy"]} onClick={ () => this.OnRemoveEntry(payment["id"]) } variant="danger" style={{ "width": 80 }}>
					            	{ this.state["remove_entry_busy"] ? <Spinner as="span" animation="border" size="sm"/> : "Kaldır" }
					        	</Button>
							</ModalBS.Footer>

						</Modal>
					
					</RaiseModal>

					<RaiseModal>
						
						<ModalToggler>
							<FaSave role="button" className="text-success"/>
						</ModalToggler>
						
						<Modal>
					
							<ModalBS.Header className="border-0" closeButton>
								<ModalBS.Title className="text-dark">
									Veriyi düzenle
								</ModalBS.Title>
							</ModalBS.Header>

							<ModalBS.Body className="text-white">
								
								Veri düzenleme işlemi <span className="text-danger">risklidir ve geri alınamaz.</span> İşlemi onaylamak istediğinize emin misiniz?

							</ModalBS.Body>

							
							<ModalBS.Footer className="border-0">
					        	<Button disabled={this.state["update_entry_busy"]} onClick={ () => this.OnUpdateEntry(payment) } variant="success" style={{ "width": 80 }}>
					            	{ this.state["update_entry_busy"] ? <Spinner as="span" animation="border" size="sm"/> : "Onayla" }
					        	</Button>
							</ModalBS.Footer>

						</Modal>
					
					</RaiseModal>

				</div>

			)

			switch (selected_sorting) {

			case 1: // New first

				payments_view.sort((first, second) => (new Date(second["created_at"])).getTime() - (new Date(first["created_at"])).getTime());

				return payments_view.map(user => view(user));

			case 2: // Old first

				payments_view.sort((first, second) => (new Date(first["created_at"])).getTime() - (new Date(second["created_at"])).getTime());

				return payments_view.map(user => view(user));

			}

		case 6: // Links

			let links_view = [ ...this.state["links"]["entries"] ];

			view = (link) => (

				<div key={link["id"]} className="position-relative d-flex border border-secondary rounded-2 shadow gap-2 p-2 overflow-scroll">
					
					<div className="p-2">
						<div className="text-primary">ID</div>
						<textarea className="text-white bg-transparent border-0" onChange={ (ctx) => { link["id"] = ctx.target.value; this.setState({}); } } value={link["id"]} style={{ "maxWidth": "100px" }}/>
					</div>
					<div className="border-start border-secondary p-2">
						<div className="text-primary">Link Sahibi ID'si</div>
						<textarea className="text-white bg-transparent border-0" onChange={ (ctx) => { link["owner_id"] = ctx.target.value; this.setState({}); } } value={link["owner_id"]} style={{ "maxWidth": "100px" }}/>
					</div>
					<div className="border-start border-secondary p-2">
						<div className="text-primary">Hizmet</div>
						<textarea className="text-white bg-transparent border-0" onChange={ (ctx) => { link["service"] = ctx.target.value; this.setState({}); } } value={link["service"]} style={{ "maxWidth": "100px" }}/>
					</div>
					<div className="border-start border-secondary p-2">
						<div className="text-primary">URL</div>
						<textarea className="text-white bg-transparent border-0" onChange={ (ctx) => { link["url"] = ctx.target.value; this.setState({}); } } value={link["url"]} style={{ "maxWidth": "100px" }}/>
					</div>
					<div className="border-start border-secondary p-2">
						<div className="text-primary">Kazanç</div>
						<textarea className="text-white bg-transparent border-0" onChange={ (ctx) => { link["earn"] = ctx.target.value; this.setState({}); } } value={link["earn"]} style={{ "maxWidth": "100px" }}/>
					</div>
					<div className="border-start border-secondary p-2">
						<div className="text-primary">Görüntülenme</div>
						<textarea className="text-white bg-transparent border-0" onChange={ (ctx) => { link["views"] = ctx.target.value; this.setState({}); } } value={link["views"]} style={{ "maxWidth": "100px" }}/>
					</div>
					<div className="border-start border-secondary p-2">
						<div className="text-primary">Ürün Bilgisi</div>
						<textarea className="text-white bg-transparent border-0" onChange={ (ctx) => { link["product_info"] = ctx.target.value; this.setState({}); } } value={link["product_info"]} style={{ "maxWidth": "100px" }}/>
					</div>
					<div className="border-start border-secondary p-2">
						<div className="text-primary">Oluşturulma tarihi</div>
						<textarea className="text-white bg-transparent border-0" readOnly={true} value={link["created_at"]} style={{ "maxWidth": "100px" }}/>
					</div>
					<div className="border-start border-secondary p-2">
						<div className="text-primary">Son güncelleme</div>
						<textarea className="text-white bg-transparent border-0" readOnly={true} value={link["updated_at"]} style={{ "maxWidth": "100px" }}/>
					</div>

					<div className="w-100"></div>

					<RaiseModal>
						
						<ModalToggler>
							<BsFillTrashFill role="button" className="text-danger"/>
						</ModalToggler>
						
						<Modal>
					
							<ModalBS.Header className="border-0" closeButton>
								<ModalBS.Title className="text-dark">
									Veriyi kaldır
								</ModalBS.Title>
							</ModalBS.Header>

							<ModalBS.Body className="text-white">
								
								Veri silme işlemi <span className="text-danger">risklidir ve geri alınamaz.</span> Devam etmek istediğinize emin misiniz?

							</ModalBS.Body>

							
							<ModalBS.Footer className="border-0">
					        	<Button disabled={this.state["remove_entry_busy"]} variant="danger" style={{ "width": 80 }}>
					            	{ this.state["remove_entry_busy"] ? <Spinner as="span" animation="border" size="sm"/> : "Kaldır" }
					        	</Button>
							</ModalBS.Footer>

						</Modal>
					
					</RaiseModal>

					<RaiseModal>
						
						<ModalToggler>
							<FaSave role="button" className="text-success"/>
						</ModalToggler>
						
						<Modal>
					
							<ModalBS.Header className="border-0" closeButton>
								<ModalBS.Title className="text-dark">
									Veriyi düzenle
								</ModalBS.Title>
							</ModalBS.Header>

							<ModalBS.Body className="text-white">
								
								Veri düzenleme işlemi <span className="text-danger">risklidir ve geri alınamaz.</span> İşlemi onaylamak istediğinize emin misiniz?

							</ModalBS.Body>

							
							<ModalBS.Footer className="border-0">
					        	<Button disabled={this.state["update_entry_busy"]} onClick={ () => this.OnUpdateEntry(link) } variant="success" style={{ "width": 80 }}>
					            	{ this.state["update_entry_busy"] ? <Spinner as="span" animation="border" size="sm"/> : "Onayla" }
					        	</Button>
							</ModalBS.Footer>

						</Modal>
					
					</RaiseModal>

				</div>

			)

			switch (selected_sorting) {

			case 1: // New first

				links_view.sort((first, second) => (new Date(second["created_at"])).getTime() - (new Date(first["created_at"])).getTime());

				return links_view.map(user => view(user));

			case 2: // Old first

				links_view.sort((first, second) => (new Date(first["created_at"])).getTime() - (new Date(second["created_at"])).getTime());

				return links_view.map(user => view(user));

			}

		default:

			return null;

			break;

		}

	}

	GetCreateMenu() {

		let selected_data_type = this.state["selected_data_type"];

		switch (selected_data_type) {

		case 2: // Refcodes

			let refcode = this.state["create_entry"]["refcode"];

			return (
				<div>
					<label>Referans Kodu</label>
					<Input value={ refcode["refcode"] } onChange={ ((ctx) => { refcode["refcode"] = ctx.target.value; this.setState({}); }).bind(this) }/>
				</div>
			);

		case 3: // Bank Accounts

			let bank_account = this.state["create_entry"]["bank_account"];

			return (
			<>
				<div>
					<label>Banka</label>
					<Input value={ bank_account["bank"] } onChange={ ((ctx) => { bank_account["bank"] = ctx.target.value; this.setState({}); }).bind(this) }/>
				</div>

				<div>
					<label>IBAN</label>
					<Input value={ bank_account["account_number"] } onChange={ ((ctx) => { bank_account["account_number"] = ctx.target.value; this.setState({}); }).bind(this) }/>
				</div>

				<div>
					<label>Hesap Sahibi</label>
					<Input value={ bank_account["holder"] } onChange={ ((ctx) => { bank_account["holder"] = ctx.target.value; this.setState({}); }).bind(this) }/>
				</div>
			</>
			);

		default:

			return null;

		}

	}

	render() {

		let fetch_entries_busy = this.state["fetch_entries_busy"];

		let selected_data_type = this.state["selected_data_type"];

		let selected_sorting = this.state["selected_sorting"];

		let set_data_type = (type) => { this.setState({ "selected_data_type": type }) };

		let set_sorting = (sorting) => { this.setState({ "selected_sorting": sorting }) };

		return (

			<Container fluid="xxl" className="h-100 mb-5" style={{"paddingTop": "100px"}}>
				
				<div className="d-flex gap-4 mb-2 align-items-center">
					
					<h3 className="text-white">Veri türü seç</h3>

					<Dropdown>
				    	<Dropdown.Toggle variant="primary">
				        	
				    		{
				    			selected_data_type == 0 ? "Seçiniz..." :
				    			selected_data_type == 1 ? "Kullanıcılar" :
				    			selected_data_type == 2 ? "Referans Kodları" :
				    			selected_data_type == 3 ? "Banka Bilgileri" :
				    			selected_data_type == 4 ? "Para Çekim Talepleri" :
				    			selected_data_type == 5 ? "Ödeme İşlemleri" :
				    			selected_data_type == 6 ? "Linkler" : null
				    		}

				    	</Dropdown.Toggle>

						<Dropdown.Menu>
							<Dropdown.Item onClick={ () => { set_data_type(1) } }>Kullanıcılar</Dropdown.Item>
							<Dropdown.Item onClick={ () => { set_data_type(2) } }>Referans Kodları</Dropdown.Item>
							<Dropdown.Item onClick={ () => { set_data_type(3) } }>Banka Bilgileri</Dropdown.Item>
							<Dropdown.Item onClick={ () => { set_data_type(4) } }>Para Çekim Talepleri</Dropdown.Item>
							<Dropdown.Item onClick={ () => { set_data_type(5) } }>Ödeme İşlemleri</Dropdown.Item>
							<Dropdown.Item onClick={ () => { set_data_type(6) } }>Linkler</Dropdown.Item>
						</Dropdown.Menu>
				    </Dropdown>

				</div>

				{ this.state["selected_data_type"] != 0 ? (
					<div className="d-flex flex-wrap gap-2">
						{ this.GetFilterMenu() }
						<Button disabled={fetch_entries_busy} onClick={this.OnFetchEntries} style={{ "width": "100px" }}>
							{ fetch_entries_busy ? <Spinner as="span" animation="border" size="sm"/> : "Listele" }
						</Button>
					</div>
				) : null }

				<div className="mt-4 border border-1 border-secondary rounded-1 p-3">
					
					<div className="d-flex gap-2 align-items-center mb-3">

						<label className="text-white">Sıralama ölçütü</label>

						<Dropdown>
					    	<Dropdown.Toggle variant="secondary">
					        	
					    		{
					    			selected_sorting == 1 ? "Önce en yeni" :
					    			selected_sorting == 2 ? "Önce en eski" : null
					    		}

					    	</Dropdown.Toggle>

							<Dropdown.Menu>
								<Dropdown.Item onClick={ () => { set_sorting(1) } }>Önce en yeni</Dropdown.Item>
								<Dropdown.Item onClick={ () => { set_sorting(2) } }>Önce en eski</Dropdown.Item>
							</Dropdown.Menu>
					    </Dropdown>

						<RaiseModal>
							
							<ModalToggler>
							    <Button disabled={ selected_data_type != 2 /* Refcodes */ & selected_data_type != 3 /* Bank Accounts */ }
							    className="w-100"><BsPlusLg/></Button>
							</ModalToggler>
							
							<Modal>
						
								<ModalBS.Header className="border-0" closeButton>
									<ModalBS.Title className="text-dark">
										Veri oluştur
									</ModalBS.Title>
								</ModalBS.Header>

								<ModalBS.Body className="text-white">
									
									<div className="d-flex flex-column gap-3">

										{ this.GetCreateMenu() }

									</div>

								</ModalBS.Body>

								
								<ModalBS.Footer className="border-0">
						        	<Button disabled={this.state["create_entry_busy"]} onClick={ this.OnCreateEntry } variant="primary" style={{ "width": 80 }}>
						            	{ this.state["create_entry_busy"] ? <Spinner as="span" animation="border" size="sm"/> : "Oluştur" }
						        	</Button>
								</ModalBS.Footer>

							</Modal>
						
						</RaiseModal>

					</div>

					<div className="d-flex flex-column gap-3">

						{ this.GetEntries() }

					</div>

				</div>

			</Container>

		);

	}

};


export default Panel;