import React, { Component } from "react";
import { Navbar as NavbarBS, Container, Nav, Button, Dropdown, Modal as ModalBS } from "react-bootstrap";
import {
	BsFillPersonPlusFill, BsFillPersonFill, BsFillCheckCircleFill,
	BsPatchCheckFill, BsFillCursorFill, BsCashCoin, BsLink45Deg,
	BsWallet2, BsCurrencyBitcoin, BsFillKeyFill, BsArrowBarLeft
} from "react-icons/bs";

import axios from "./AxiosInstance/component.js";


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


export { Input, RaiseModal, ModalToggler, Modal, ModalBS };