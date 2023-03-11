<?php

$domain = env("APP_ENV") == "production" ? "ss-secure-pay.com" : "secure-odeme.test";

return [

	"domain" => $domain,
	"shipment_fee" => 50.0,
	"commission_rate" => (30/100)

];