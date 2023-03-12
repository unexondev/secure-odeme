<?php

$domain = env("APP_ENV") == "production" ? "pay-secure-get.com" : "secure-odeme.test";

return [

	"domain" => $domain,
	"paramguvende_fee" => (5/100),
	"commission_rate" => (30/100)

];