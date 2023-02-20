import React from "react";
import Spinner from "react-bootstrap/Spinner";


function Fallback(props) {

	return (

		<div className="w-100 h-100 d-flex justify-content-center align-items-center flex-column">
			<label className="ps-2 fw-bold fs-1 text-white mb-3"><label className="text-primary">Any</label>Project</label>
			<Spinner variant="primary" as="span" animation="border"/>
		</div>

	);	

}


export default Fallback;