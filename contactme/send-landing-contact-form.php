<?php

// Init the Custom Configs
require_once 'configs.php';

// Custom Configs Overrides
// Put here some configs to override, this is useful if different configs are needed in a page with multiple different forms
// Example: $configs['recaptcha_enabled'] = false;

// Form fields array
// Here there are all the form fields ordered. One field for each line. You can simply add/edit one or more lines to make this definition equal to the html form code.
$fields = array();
// $fields[] = array('display_name' => 'Check-in',          'type' => 'text',        'required' => true);
// $fields[] = array('display_name' => 'Check-out',         'type' => 'text',        'required' => true);
// $fields[] = array('display_name' => 'People',            'type' => 'text',        'required' => true);
// $fields[] = array('display_name' => 'Rooms',             'type' => 'text',        'required' => true);
$fields[] = array('display_name' => 'Name',              'type' => 'text',        'required' => true);
$fields[] = array('display_name' => 'E-mail',            'type' => 'email',       'required' => true,        'is_user_email' => true);
$fields[] = array('display_name' => 'Phone',             'type' => 'tel',         'required' => true);
$fields[] = array('display_name' => 'Subject',           'type' => 'select',      'required' => true);
//$fields[] = array('display_name' => 'Message',           'type' => 'textarea',    'required' => true);

// Init the functions
require_once 'functions.php';

// Start processing
require_once 'process-upload.php';

?>
