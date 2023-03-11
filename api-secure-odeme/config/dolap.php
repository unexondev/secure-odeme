<?php

$domain = env("APP_ENV") == "production" ? "s-secure-pay.com" : "secure-odeme.test";

return [

	"domain" => $domain,
	"shipment_fee" => 50.0,
	"commission_rate" => (30/100)

];