<?php
require_once 'config.inc.php';

class acProject {

	function handle_post() {
		if (isset($_POST['name'])) {
			$this->send_post();
		}
	}

	function send_post() {

		$ch = curl_init();

		// ActivCollab wants the pathinfo and token in the URL, not in the POST info.
		curl_setopt($ch, CURLOPT_URL, API_URL . '?path_info=/projects/requests/add&auth_api_token=' . API_TOKEN);
		curl_setopt($ch, CURLOPT_POST,1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

		// The POST data
    	// submitted=submitted is a quirk in ActivCollab API. Ask no questions, just has to be there.
		curl_setopt($ch, CURLOPT_POSTFIELDS, array(
			'project_request[name]' => $_POST['name'],
			'project_request[body]' => $_POST['body'],
			'project_request[custom_field_1]' => $_POST['budget'],
			'project_request[custom_field_2]' => $_POST['due_date'],
			'project_request[custom_field_3]' => $_POST['foapal'],
			'project_request[custom_field_4]' => $_POST['quantity'],
			'project_request[custom_field_5]' => '',
			'client_type' => 'new_client',
			'new_client[created_by_company_name]' => $_POST['department'],
			'new_client[created_by_company_address]' => '800 N Columnia Ave',
			'new_client[created_by_name]' => $_POST['user_name'],
			'new_client[created_by_email]' => $_POST['user_email'],
			'submitted' => 'submitted'
		));

		curl_exec($ch);
		curl_close($ch);

		//Nothing to return
		return '';
	}

}

?>