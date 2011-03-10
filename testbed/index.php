<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>GET/POST Request TestBed App</title>
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>   
	<script type="text/javascript" src="scripts/js/jqueryui/jquery-ui-1.8.10.custom.min.js"></script>   
</head>
<body>

	<form id="mainform">
		<fieldset id="options">
			<div>
				Request Type:<br/>
				<input type="radio" name="method" id="method" value="get" checked> GET
				<input type="radio" name="method" id="method" value="post"/> POST
				<input type="radio" name="method" id="method" value="put"/> PUT
				<input type="radio" name="method" id="method" value="delete"/> DELETE
			</div>
			<div>
				<label for="request_url">URL:</label><br/>
				<input type="text" id="request_url" value="ajax.php">
			</div>
			<div>
				Parameters:<br/>
				<select id="parameters" multiple="multiple"></select>
				<input type="button" id="delete_parameter" value="Delete Selected"/>
				<br/>
				Add Parameter:<br/>
				<label for="param_name">Name:</label>
				<input type="text" id="param_name"><br/>
				<label for="param_value">Value:</label>
				<input type="text" id="param_value">
				<input type="button" value="Add Parameter" id="add_parameter">
			</div>
			<div>
				<input type="button" id="btnpush" value="Send Request"/>
			</div>
		</fieldset>
	</form>
	<br/><br/>
	<div>
		Response Text:<br/>
		<textarea id="request_result"></textarea><br/>
		<input type="button" id="btnprocess_html" value="Parse HTML"/>
		<input type="button" id="btnprocess_json" value="Parse JSON"/>
		<br/><br/><br/>
		<div id="result_html" style="border:1px solid red;"></div>
	</div>	
	
<script language="javascript">
	$(document).ready(function(){
		$('#add_parameter').click(function(){
			//field checking
			if ( ($('#param_name').val()=='') || ($('#param_value').val()=='') ){
				alert('Enter all values');
			}else{
				$('#parameters').append('<option value="'+$('#param_value').val()+'">'+$('#param_name').val()+'</option>');
				//$('#param_name').val('');
				//$('#param_value').val('');
			}
		});
		
		//remove selected options from parameters list
		$('#delete_parameter').click(function(){
			$('#parameters option:selected').remove();	
		});
		
		$('#btnprocess_html').click(function(){
			$('#result_html').html('').html('Response HTML:<br/>'+$('#request_result').val());
		});
		
		$('#btnpush').click(function(){
			$('#request_result').val();
			var params="";
			if ($('#parameters option').length>0){				
				$('#parameters option').each(function(){
					params+=$(this).text() + "=" + $(this).val() + "&";		
				});
				alert(params);
			}
			var reqtype=$('#method:checked').val();
			var url=$('#request_url').val();
			$.ajax({
				type: reqtype,
				url: url,
				data: params,
				success: function(response){
					$('#request_result').val(response);	
				}
			});
		});
	});
</script>
</body>
</html>
