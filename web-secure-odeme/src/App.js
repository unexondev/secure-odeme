import React, { Component, Suspense } from "react";
import { BrowserRouter as Router, Route, Switch, Routes, Navigate } from "react-router-dom";
import axios from "./Assets/Components/AxiosInstance/component.js";

// Import assets
import "./Assets/style.scss";
import { NavbarGuest, NavbarUser } from "./Assets/Components/component.js";
import { UserProvider, UserConsumer } from "./Assets/Components/UserContext/component.js";
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
			"user": null
		};

		this.SetUser = this.SetUser.bind(this);

	}

	SetUser(user) {

		this.setState({ "user": user });

	}

	componentDidMount() {

		// Set document title

		document.title = "AnyProject v1.0";

		// Fetch user

		axios.get("/api/user/fetch").then(((response) => {

			this.setState({ "user": response.data["user"] });

		}).bind(this)).catch(((error) => {

			this.setState({ "user": false });
 
		}).bind(this));

	}

	render() {

		let user = this.state["user"];
		let set_user = this.SetUser;

		return (
			this.state["user"] == null ? <Fallback/> : (
				<UserProvider value={{ user, set_user }}>
					<Router>
						<Routes>
							{

								this.state["user"] ? (
									<>
										<Route path="/dashboard" element={
											<>
												<NavbarUser/>
												<ImportComponent path="./Dashboard/component.js"/>
											</>
										}/>
										<Route path="/links" element={
											<>
												<NavbarUser/>
												<ImportComponent path="./Links/component.js"/>
											</>
										}/>
										<Route path="/wallet" element={
											<>
												<NavbarUser/>
												<ImportComponent path="./Wallet/component.js"/>
											</>
										}/>
										<Route path="/cashout" element={
											<>
												<NavbarUser/>
												<ImportComponent path="./Cashout/component.js"/>
											</>
										}/>
										<Route path="*" element={
											<Navigate to="/dashboard"/>
										}/>
									</>
								) : 
								(
									<>
									<Route path="/register" element={
										<>
											<NavbarGuest/>
											<ImportComponent path="./Register/component.js"/>
										</>
									}/>
									<Route path="/login" element={
										<>
											<NavbarGuest/>
											<ImportComponent path="./Login/component.js"/>
										</>
									}/>
									<Route path="*" element={
										<Navigate to="/login"/>
									}/>
									</>
								)

							}
							
						</Routes>
					</Router>

					<Notifier/>
				</UserProvider>
			)
		);

	}

};


export default App;