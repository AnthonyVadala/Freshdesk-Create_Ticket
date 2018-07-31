<?php
	if(isset($_POST['Submit'])) {
		// POST data
		$text_input=$_POST['text_input'];
		$number_input=$_POST['number_input'];
		$drop_down=$_POST['drop_down'];
		$date_field=$_POST['date_field'];
		$text_area=$_POST['text_area'];
	
		// Array for custom fields
		$custom_fields = array(
			"cf_custom_text_field" => $text_input,
			"cf_custom_number_field" => $number_input
		);

		// Freshdesk domain information
			// Your agent API key
			$api_key = "YOUR_API_KEY";
			// Your Freshdesk subdomain 
				// For example "example.freshdesk.com" enter "example"
			$yourdomain = "YOUR_DOMAIN";

		// Ticket data
		$ticket_data = json_encode(array(
			"subject" => "PHP Form - " .$drop_down,
			"description" => $text_area ."<br><br>-- <br>This ticket was created by a PHP form",
			"type" => "Test Request",
			"email" => "example@example.com",
			"priority" => 1,
			"status" => 2,
			"source" => 2,
			"due_by" => $date_field,
			"fr_due_by" => $date_field,
			"custom_fields" => $custom_fields
		));

		// Freshdesk API
		$url = "https://$yourdomain.freshdesk.com/api/v2/tickets";
		$ch = curl_init($url);
		$header[] = "Content-type: application/json";
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
		curl_setopt($ch, CURLOPT_HEADER, true);
		curl_setopt($ch, CURLOPT_USERPWD, "$api_key");
		curl_setopt($ch, CURLOPT_POSTFIELDS, $ticket_data);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$server_output = curl_exec($ch);
		$info = curl_getinfo($ch);
		$header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
		$headers = substr($server_output, 0, $header_size);
		$response = substr($server_output, $header_size);

		// Uncomment to view logging/errors
		/*
			if($info['http_code'] == 201) {
				echo "Ticket created successfully, the response is given below \n";
				echo "Response Headers are \n";
				echo $headers."\n";
				echo "Response Body \n";
				echo "$response \n";
			} else {
				if($info['http_code'] == 404) {
					echo "Error, Please check the end point \n";
				} else {
					echo "Error, HTTP Status Code : " . $info['http_code'] . "\n";
					echo "Headers are ".$headers;
					echo "Response are ".$response;
				}
			}
		*/
		curl_close($ch);
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ticket Submited</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container">
		<div class="row">
			<div>
				Ticket Created Successfully! <br>
				Redirecting in: <div id="counter">5</div>
			</div>
			<script>
				setInterval(function() {
					var div = document.querySelector("#counter");
					var count = div.textContent * 1 - 1;
					div.textContent = count;
						if (count <= 0) {
							window.location.replace("index.php");
						}
				}, 1000);
			</script>
		</div>
	</div>
</body>
</html>
