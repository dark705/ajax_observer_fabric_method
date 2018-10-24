<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!---
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	--->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<style>
		.status_on {
			background-color: #4F4;
		}
		
		.status_off {
			background-color: #F44;
		}
		
		.status_error {
			background-color: #FF4;
		}	
	</style>
	
</head>
<body>
	<script>
		"use strict";
		$(function(){
			setInterval(function(){
				$.post('', 'true', function(response){
					console.log(response);
					if (response == 'on'){
						$('#status').removeClass('status_off status_error').addClass('status_on').html('On');
					} else if (response == 'off') {
						$('#status').removeClass('status_on status_error').addClass('status_off').html('Off');
					} else {
						$('#status').removeClass('status_on status_off').addClass('status_error').html('Error on receive data');
					}
					
				});
			}, 1000);
		})
	</script>
	
<div id="status">Loading...</div>
	
	
</body>
</html>