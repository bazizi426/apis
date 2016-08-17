<?php
require 'zoho_methods.php';

$AUTH_TOKEN = 'd941d2b0cb2a64af2ab6313b3999dff6';

$zoho_api = new Zoho($AUTH_TOKEN);

var_dump($zoho_api->get_module_data_by_id('Leads'));
die;

$potential_data = array();

$potential_data['Email'] = "bazizi426@gmail.com";

$potential_data['Operation Nom'] = "Operation Nom";

if ($status != "Approved")

$potential_data['Closing Date'] = date('m/d/Y', strtotime("+30 days"));
else

$potential_data['Closing Date'] = date('m/d/Y', strtotime("+0 days"));
//have to wrap the array in another array for some reason

$response = $zoho_api->insert_record('Operations', (array($potential_data)));

var_dump($response);