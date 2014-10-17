<?php 
if(isset($_COOKIE['sessionid']) && $_COOKIE['sessionid'] != '')
	http_response_code(200);
else 
	http_response_code(403);; 
?>