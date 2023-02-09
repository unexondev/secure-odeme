import axios from "axios";

const instance = axios.create({
	baseURL: 'http://secure-odeme.test/',
	timeout: 5000,
	withCredentials: true
});


export default instance;