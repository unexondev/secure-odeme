import React from "react";


const UserContext = React.createContext({

	"user": {},
	"set_user": (user) => {}

});

const UserProvider = UserContext.Provider;
const UserConsumer = UserContext.Consumer;


export { UserContext, UserProvider, UserConsumer };