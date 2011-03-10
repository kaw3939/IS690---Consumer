<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>GET/POST Request TestBed App</title>
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>   
	<script type="text/javascript" src="scripts/js/jquery-ui-1.8.10.custom.min.js"></script>   
</head>
<body>

	<form id="mainform">
		<fieldset id="options">
			<div>
				Request Type:<br/>
				<input type="radio" name="method" id="method_get" value="get" checked> <label for="method_get">GET</label>
				<input type="radio" name="method" id="method_post" value="post"/> <label for="method_post">POST</label>
			</div>
			<div>
				<label for="request_url">URL:</label><br/>
				<input type="text" id="request_url" value="test.php">
			</div>
			<div>
				Parameters:<br/>
				<select id="parameters" multiple="multiple">
				
				</select>
				<input type="button" id="delete_parameter" value="Delete Selected"/>
				<br/>
				Add Parameter:<br/>
				<label for="param_name">Name:</label>
				<input type="text" id="param_name"><br/>
				<label for="param_value">Value:</label>
				<input type="text" id="param_value">
				<input type="button" value="Add Parameter" id="add_parameter">
			</div>
		</fieldset>
	</form>
<script language="javascript">
	$(document).ready(function(){
		$('#add_parameter').click(function(){
			if ( ($('#param_name').val()=='') || ($('#param_value').val()=='') ){
				alert('Enter all values');
			}else{
				$('#parameters').append('<option value="'+$('#param_value').val()+'">'+$('#param_name').val()+'</option>');
				//$('#param_name').val('');
				//$('#param_value').val('');
			}
		});
		
		$('#delete_parameter').click(function(){
			$('#parameters option:selected').remove();	
		});
	});
</script>
</body>
</html>
