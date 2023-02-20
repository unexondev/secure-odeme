import React from "react";

import { Toast, ToastContainer } from "react-bootstrap";


var Notify = { "messages": [], "add_message": (message) => {} };


function Notifier(props) {

	const [messages, set_messages] = React.useState([]);

	Notify["messages"] = messages;
	Notify["add_message"] = (message) => { message["show"] = true; set_messages([ ...messages, message ]) };

	return (
	
		<ToastContainer className="p-3" containerPosition="fixed" position="top-end">
			{ 
			messages.map((entry, idx) => (

				<Toast onClose={() => {
					let _messages = [ ...messages ];
					_messages[idx]["show"] = false;
					set_messages(_messages);
				}} show={entry["show"]} delay={3000} key={idx} bg={ entry.is_error ? "danger" : "primary" } autohide>

					<Toast.Body>{entry.text}</Toast.Body>
				
				</Toast>

			))
			}
		</ToastContainer>
	
	);

}


export { Notifier, Notify };