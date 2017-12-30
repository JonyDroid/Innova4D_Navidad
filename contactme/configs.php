<?php

error_reporting(E_ALL);


$configs['from_name']			= 'Equipo de DoopWeb';							
$configs['from_address']		= 'hola@armandosarabia.mx';							
$configs['to_addresses']		= array('hola@armandosarabia.mx');					



$configs['lang_path']			= 'lang/es.json';								
$configs['recaptcha_enabled']	= true;											
$configs['recaptcha_secret']	= '6Lcpjj4UAAAAAHH-Q4xN9P_B3JYporHX39j5RIoj';	
$configs['success_link']		= 'https://google.com';											
$configs['curl_enabled']		= true;											

$configs['email_to_owner']		= true;											
$configs['email_confirm']		= true;											
$configs['cc_addresses']		= array();										
$configs['bcc_addresses']		= array();										

$configs['smtp_enabled']		= true;										
$configs['smtp_host']			= 'smtp.mailgun.org';											
$configs['smtp_auth']			= true;											
$configs['smtp_username']		= 'postmaster@mg.doopweb.agency';										
$configs['smtp_password']		= '88698b0cf097d1c17413f13d85763ac2';											
$configs['smtp_secure']			= 'tls';										
$configs['smtp_port']			= 587;											

$configs['upload_dir']			= 'uploads/';									
$configs['upload_limit']		= 10;											
$configs['upload_keep_files']	= false;										
$configs['upload_types']		= array('jpeg',	'jpg', 'png', 'gif',			
										'doc', 'docx', 'xls', 'xlsx',
										'pdf', 'txt', 'rtf', 'zip', 'rar'
									   );


?>