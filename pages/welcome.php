<?php

global $limbs;
$addons = new Addons();

if (isset($_POST['message'])) {
	$limbs->database->where('id', 1);
	$status = $limbs->database->update('hello_world', array('message' => $_POST['message']));
	if ($status) {
		$parameters['message'] = 'Message updated';
	} else {
		$parameters['errors'][] = 'Failed to update message';
	}
}

$parameters['response'] = $limbs->database->getOne('hello_world');
$parameters['_title'] = 'Edit Message';
$parameters['mainSection'] = 'hello_world';
$addons->display(HELLOWORLD_CORE_NAME, 'pages/welcome.html', $parameters);