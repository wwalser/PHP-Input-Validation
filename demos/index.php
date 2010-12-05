<?php
require('core.php');
function validateIndex(){
	$oValidation = new Validation($oRequest);
	return array(
		'email' => array(
			$oValidation->required('An email address is required to register for MacGuffin App. Please provide an email address.'),
			$oValidation->email('The email address does not appear to be valid. Please provide a valid email address.'),
		),
		'username' => array(
			$oValidation->required('A username is required in order to register for MacGuffin App. Please provide a username.'),
			$oValidation->username('Usernames have the following requirements.<br />
				<ul><li>Must be composed of alpha numeric characters.</li>
				<li>Must contain atleast one alphabetic character.</li>
				<li>Must be atleast four characters long</li>
				<li>Can not be longer than 50 characters</li></ul>
				Please provide a username that meets these requirements.'),
		),
		'password' => array(
			$oValidation->required('A password is required to register for MacGuffin App. Please provide a password.'),
			$oValidation->minLength(5, 'Passwords must be atleast five characters in length. Please provide a valid password.'),
		),
	);
}

$foo = 'this works?';
include('templates/demo.php');

?>
