import React, { Component } from "react";
import { Navbar as NavbarBS, Container, Nav, Button, Dropdown, Modal as ModalBS } from "react-bootstrap";
import {
	BsFillPersonPlusFill, BsFillPersonFill, BsFillCheckCircleFill,
	BsPatchCheckFill, BsFillCursorFill, BsCashCoin, BsLink45Deg,
	BsWallet2, BsCurrencyBitcoin, BsFillKeyFill, BsArrowBarLeft
} from "react-icons/bs";

import axios from "./AxiosInstance/component.js";
import { UserConsumer } from "./UserContext/component.js";

import logo from "../Images/any_icon.png";
import user_icon from "../Images/user_icon.png";


const NavbarGuest = () => (
<NavbarBS expand="lg" fixed="top" className="bg-secondary shadow">
	<Container fluid="xxl">
		
		<NavbarBS.Brand className="navbar-brand px-3 text-white" href="/login">
			<img src={logo} height="50px"/>
			<small className="ps-2 fw-bold"><label className="text-primary">Any</label>Project</small>
		</NavbarBS.Brand>

		<NavbarBS.Toggle aria-controls="navbar-menu"/>
		<NavbarBS.Collapse id="navbar-menu">
			
			<Nav className="mx-auto">
				<Nav.Link className="mx-2 text-white"><BsFillCursorFill className="text-primary"/> Hizmetlerimiz</Nav.Link>
				<Nav.Link className="mx-2 text-white"><BsFillCursorFill className="text-primary"/> S.S.S.</Nav.Link>
			</Nav>

			<Nav className="flex-row">
	            <a href="/login"><Button variant="outline-dark" className="py-2 mx-2 rounded-pill"><BsFillPersonFill className="color-secondary"/> Giriş yap</Button></a>
	            <a href="/register"><Button variant="primary" className="px-3 py-2 mx-2 rounded-pill"><BsFillPersonPlusFill/> Üye ol</Button></a>
	        </Nav>
			
		</NavbarBS.Collapse>
	
	</Container>
</NavbarBS>
)

const NavbarUser = () => (
<NavbarBS expand="lg" fixed="top" className="bg-secondary shadow">
	<Container fluid="xxl">
		
		<NavbarBS.Brand className="px-3 text-white" href="/dashboard">
			<img src={logo} height="50px"/>
			<small className="ps-2 fw-bold"><span className="text-primary">Any</span>Project</small>
		</NavbarBS.Brand>

		<Nav className="navigate-menu-wide">
			<Nav.Link href="/links" className="mx-2 text-white"><BsLink45Deg className="text-primary"/> Linklerim</Nav.Link>
			<Nav.Link href="/wallet" className="mx-2 text-white"><BsWallet2 className="text-primary"/> Cüzdanım</Nav.Link>
			<Nav.Link href="/cashout" className="mx-2 text-white"><BsCurrencyBitcoin className="text-primary"/> Ödeme Taleplerim</Nav.Link>
		</Nav>

		<Dropdown>
			<Dropdown.Toggle className="profile-menu bg-transparent text-white border-0">
				<img src={user_icon} height="50px" className="border border-2 border-primary rounded-circle"/>
				<span className="text-white ps-3 pe-2 fw-bold">{
					<UserConsumer>{({ user }) => (
						user["username"]
					)}</UserConsumer>
				}</span>
			</Dropdown.Toggle>

			<Dropdown.Menu variant="dark">

				<Nav className="navigate-menu flex-column mb-3">
					<Dropdown.Item href="/links"><span className="text-white"><BsLink45Deg className="text-primary"/> Linklerim</span></Dropdown.Item>
					<Dropdown.Item href="/wallet"><span className="text-white"><BsWallet2 className="text-primary"/> Cüzdanım</span></Dropdown.Item>
					<Dropdown.Item href="/cashout"><span className="text-white"><BsCurrencyBitcoin className="text-primary"/> Ödeme Taleplerim</span></Dropdown.Item>
				</Nav>

				<Dropdown.Item onClick={() => {

					axios.get("/api/logout").then((response) => {

						window.location.href = "/login";

					});

				}}><BsArrowBarLeft/> Çıkış yap</Dropdown.Item>
			</Dropdown.Menu>
    	</Dropdown>
	
	</Container>
</NavbarBS>
)

function Input(props) {

	let style = props.style,
		className = props.className;
	let variant = props.variant;
	let innerRef = props.innerRef;

	let childProps = { ...props };
	delete childProps.style;
	delete childProps.className;
	delete childProps.variant;
	delete childProps.innerRef;

	return (
		<div className={className + " d-block position-relative"} style={style}>
			
			<input className={"form-control input-login text-white bg-transparent border border-1 rounded-pill " + (variant ? "border-" + variant : "border-primary")}
			{...childProps} ref={innerRef}/>

			<span className="position-absolute text-secondary end-0 top-50 translate-middle me-1">{props.indicator}</span>

		</div>
	);

}

const ctx_modal = React.createContext({

	is_active: false,

	set_active: (active) => {}

});

function RaiseModal(props) {

	const [is_active, set_active] = React.useState(false);

	return (

		<ctx_modal.Provider value={{ is_active, set_active }}>
			
			<>
				{props.children}
			</>

		</ctx_modal.Provider>

	);

}

function ModalToggler(props) {

	const { set_active } = React.useContext(ctx_modal);

	return (

		<div onClick={() => { if (!props.children.props.disabled) set_active(true); }}>{props.children}</div>

	);

};

function Modal(props) {

	const { is_active, set_active } = React.useContext(ctx_modal);

	return (

		<ModalBS show={is_active} onHide={() => { set_active(false); }} {...props}>
			
			{props.children}
		
		</ModalBS>

	);

};


export { NavbarGuest, NavbarUser, Input, RaiseModal, ModalToggler, Modal, ModalBS };