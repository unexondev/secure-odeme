import React, { Component } from "react";
import { Container, Form, Button, Spinner, Alert } from "react-bootstrap";
import { Input } from "../Assets/Components/component.js";
import { BsPersonCheckFill, BsFillKeyFill, BsFillEnvelopeFill, BsFillPersonFill } from "react-icons/bs";

import axios from "../Assets/Components/AxiosInstance/component.js";


class Login extends Component { 

	constructor(props) { 

		super(props);

		this.OnSubmit = this.OnSubmit.bind(this);
		this.SetBusy = this.SetBusy.bind(this);

		this.remember_ref = React.createRef();

		this.state = { 

			busy: false,
			message: {},

			username: "",
			password: ""

		}

	}

	SetBusy(toggle = true) {

		this.setState({ "busy": toggle });

	}

	OnSubmit(event) {

		let username = this.state.username;
		let password = this.state.password;
		let remember = this.remember_ref.current.checked;

		this.SetBusy();

		axios.get('/sanctum/csrf-cookie').then(response => {

			axios.post("/api/login", {
				"username": username,
				"password": password,
				"remember": remember
			}).then(((response) => {

				this.setState({ "message": { "is_error": false, "text": response.data["message"] } });

				setTimeout((() => {

					window.location.href = "/dashboard";

				}).bind(this), 1500);

			}).bind(this)).catch(((error) => {

				let response = error.response;

				if (response && response.status == 400)
					this.setState({ "message": { "is_error": true, "text": response.data["message"] } });
				else 
					this.setState({ "message": { "is_error": true, "text": "Beklenmedik bir hata oluştu, lütfen daha sonra tekrar deneyiniz." } });

				this.SetBusy(false);

			}).bind(this));

		}).catch(((error) => {

			this.setState({ "message": { "is_error": true, "text": "Beklenmedik bir hata oluştu, lütfen daha sonra tekrar deneyiniz." } });

			this.SetBusy(false);

		}).bind(this));

		return event.preventDefault();

	}

	render() {

		return (

			<Container fluid="xxl" className="h-100 d-flex justify-content-center" style={{"paddingTop": "100px"}}>
				
				<Form onSubmit={this.OnSubmit} className="p-4 m-3 border border-secondary rounded-5 shadow" style={{"height": "max-content"}}>
					
					<div className="mb-3">
						<label className="form-label text-white"><BsPersonCheckFill className="text-primary"/> Kullanıcı adı</label>
						<Input value={this.state["username"]} onChange={ ((ctx) => { this.setState({ "username": ctx.target.value }) }).bind(this) } maxLength="20" minLength="4"/>
	    			</div>

	    			<div className="mb-2">
						<label className="form-label text-white"><BsFillKeyFill className="text-primary"/> Parola</label>
						<Input value={this.state["password"]} onChange={ ((ctx) => { this.setState({ "password": ctx.target.value }) }).bind(this) } type="password" maxLength="50" minLength="8"/>
	    				<div className="form-text">Şifrenizi unuttuysanız platform üzerinden iletişime geçebilirsiniz.</div>
	    			</div>

	    			<Form.Check ref={this.remember_ref} label="Beni hatırla" className="text-white mb-2"></Form.Check>

	    			{ this.state["message"]["text"] ? <Alert variant={ this.state["message"]["is_error"] ? "danger" : "success" } className="mb-3 d-block px-2 py-1"><small>{this.state["message"]["text"]}</small></Alert> : null }

	    			<Button disabled={
	    				this.state["busy"] || !this.state["username"] ||
	    				!/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!.%*?&]).{8,50}$/.test(this.state["password"])
	    			} type="submit" className="d-block mx-auto rounded-pill" style={{ "width": 120, "height": 40 }}>
	    				{ this.state["busy"] ? <Spinner as="span" animation="border" size="sm"/> : <><BsFillPersonFill/> Giriş yap</> }
	    			</Button>

				</Form>

			</Container>

		);

	}

}


export default Login;