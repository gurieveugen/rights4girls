<?php

require_once 'repeater.php';

if(isset($_POST['email']))
{
	$repeater = new Repeater($_POST);
	$html     = $repeater->get();
	$position = strpos($html, 'Your information has been submitted');

	$json = array(
		'html' => $html,
		'position'  => $position,
		'result' => (-1 < $position )
	);
	echo json_encode($json);
}