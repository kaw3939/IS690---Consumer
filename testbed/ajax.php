<?php
	
	/*
		This file would be replaced with the web service, obviously.
		The webservice will get the GET params, which it can use
		to authenticate, process the command, do the DB inserts, etc.
		Sample return data below.
	*/
	$_event_details=array(
		'name'		=>	$_GET['name'],
		'location'	=>	$_GET['location'],
		'time'		=>	$_GET['time'],
	);
	
	$_status=array(
		'status'	=>	1,	//or a 0 if the insert failed, perhaps a reason?
		'status_details'=>	'Successfully created event',
		'details'	=>	$_event_details,
	);
	
	/*
		Format:
		status		=>	1 or 0, success or fail.
		status_details,	=>	Reasons for failure, or success message (if desired).
		details		=>	array of the data passed, used when populating the Success or Fail page.
	*/
	
	echo json_encode($_status);

?>
