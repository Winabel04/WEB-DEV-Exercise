<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Looping Over JSON Data</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>
body{
	background-color: Cornsilk;
}

.container{
	background-color: tan;
	width:400px;	
	border-radius:8px;
	box-shadow: 6px 6px 2px 6px;
}
#box{
	background-color: Chocolate;
	width:550px;	
	height:450px;
	border-radius:5px;
	box-shadow: 8px 8px 5px 8px;
	margin-top:30px;
}



</style>
<body>
<center>
<div id = "box">
<h2>𝑳𝒐𝒐𝒑𝒊𝒏𝒈 𝑶𝒗𝒆𝒓 𝑱𝑺𝑶𝑵 𝑫𝒂𝒕𝒂</h2>
<br>
	<div class="container">
		<table class="table">
			<?php

			//Write a program to loop over the given JSON data. Display the values via loops or recursion.

			$json_data = '[
				{
				"name" : "John Garg",
				"age"  : "15",
				"school" : "Ahlcon Public school"
				},
				{
				"name" : "Smith Soy",
				"age"  : "16",
				"school" : "St. Marie school"
				},
				{
				"name" : "Charle Rena",
				"age"  : "16",
				"school" : "St. Columba school"
				}
			]';

			// echo $json_data;

			// echo "<hr>";
			$arr_data = json_decode($json_data, true);
			// print_r($arr_data);

			// echo "<hr>";

			foreach($arr_data as $value) {
				echo $value["name"]." <br>" ;
				echo $value["age"]." <br>" ;
				echo $value["school"]."<br>" ;
				echo "<hr>";
			}
			?>
			</center>
		</table>
	</div>	
</div>
</body>
</html>

