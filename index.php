<html>
<head>
	<title>Testing Ajax</title>
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
</head>
<body>

	<div id="main_panel">
		<div id="panel_slide">
			<div id="panel1" class="panel">
				<h1>Create Event</h1>
				<label for="txt_1">Event Name:</label> <input value="Geddys Birthday Party" type="text" id="txt_1" name="txt_1"><br/>
				<label for="txt_2">Location:</label> <input value="Geddys House" type="text" id="txt_2" name="txt_2"><br/>
				<label for="txt_3">Time:</label> <input value="10:30pm" type="text" id="txt_3" name="txt_3"><br/>
				<button id="btn_createEvent">Moose</button><br/>
				
			</div>
			<div id="panel2" class="panel" style="display:none;">
			Successfully created event:<br>
				<div id="success_msg">
				Event Name: <div id="success_name"></div><br/>
				Event Location: <div id="success_location"></div><br/>
				Event Time: <div id="success_time"></div>
				</div>
			</div>
		</div>
	</div>
	<div id="status"></div>
	
	<h2>Developer Log</h2>
	<textarea id="dev_log" cols="80" rows="20"></textarea>

<script language="javascript">
	$(document).ready(function(){
		$('#btn_createEvent').click(function(){
				
			log('#btn_createEvent clicked.');
			log('$.getJSON(\'ajax.php\') executed'+"\n\n");
			
			//send the get request
			$.getJSON('ajax.php',{
					"name": 	$('#txt_1').val(),
					"location": 	$('#txt_2').val(),
					"time": 	$('#txt_3').val()
			},
			function(data){
				
				//process the response.
				log('JSON response returned:'+"\n");
				log('Status: '+data.status);
				log('Status Details: '+data.status_details);
				log('Details: ');
				
				//loop through the event details, contained as 
				//JSON within the response JSON.
				$.each(data.details, function(key, val){
					$('#success_'+key).html(val);
					log('Key: '+key+', Value: '+val+"\n");					
				});
				$('#status').html(data.status_details);
				
				if (data.status=='1'){
					//only show panel 2 (the success screen) if the response
					//status was '1'.
					$('#panel1').fadeOut();
					$('#panel2').fadeIn();
				}
			});
		});
	});
	
	function log(msg){
		$('#dev_log').val($('#dev_log').val()+msg+"\n");
	}
</script>
	
</body>
</html>

