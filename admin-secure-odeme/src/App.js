import React, { Component, Suspense } from "react";
import { BrowserRouter as Router, Route, Switch, Routes, Navigate } from "react-router-dom";
import axios from "./Assets/Components/AxiosInstance/component.js";
import { Helmet } from "react-helmet";

// Import assets
import "./Assets/style.scss";
import { Navbar } from "./Assets/Components/component.js";
import { Notifier } from "./Assets/Components/Notifier/component.js";

import Fallback from "./Fallback/component.js";


function ImportComponent(props) {

	const ComponentLoad = React.lazy(() => import(`${props.path}`));

	return (
		<Suspense fallback={<Fallback/>}>
			<ComponentLoad/>
		</Suspense>
	);

}

class App extends Component {

	constructor(props) {

		super(props);

		this.state = {
			"authorized": null
		};

	}
	componentDidMount() {

		// Check admin rights

		axios.get("/api/admin/check").then(((response) => {

			this.setState({ "authorized": true });

		}).bind(this)).catch(((error) => {

			this.setState({ "authorized": false });

		}).bind(this));

	}

	render() {

		return (
			<>
				<Helmet>
					<title>AnyProject v1.0</title>
				</Helmet>

				{

					this.state["authorized"] == null ? <Fallback/> : (
						<>
							{

								this.state["authorized"] ?
									<ImportComponent path="./Panel/component.js"/> : <ImportComponent path="./Login/component.js"/>

							}

							<Notifier/>
						</>
					)

				}
			</>
		);

	}

};


export default App;