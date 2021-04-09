<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>𝙋𝙪𝙧𝙘𝙝𝙖𝙨𝙚 𝙩𝙝𝙚 𝙄𝙩𝙚𝙢</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>
    body{
        background-color:DarkKhaki; 
    }
    .container{
        background-color:BurlyWood;
        box-shadow:8px 8px 5px 8px;
        margin-top:50px;
        border-radius:8px;
        width:700px;
    }

    h2{
        margin-top:20px;
    }
</style>
<body>
<center>
<h2>𝑭𝒊𝒏𝒅𝒊𝒏𝒈 𝒕𝒉𝒆 𝒃𝒆𝒔𝒕 𝒅𝒆𝒂𝒍 𝒕𝒐 𝑷𝒖𝒓𝒄𝒉𝒂𝒔𝒆</h2>  
</center>  
<div class="container">
	<table class="table">   

<?php

echo "<h4> 𝘛𝘩𝘦𝘳𝘦 𝘢𝘳𝘦 𝘵𝘸𝘰 𝘥𝘦𝘢𝘭𝘴 𝘰𝘧 𝘢𝘯 𝘪𝘵𝘦𝘮 𝘵𝘰 𝘣𝘶𝘺. 𝘛𝘩𝘦 𝘲𝘶𝘢𝘯𝘵𝘪𝘵𝘪𝘦𝘴 𝘢𝘯𝘥 𝘱𝘳𝘪𝘤𝘦𝘴 𝘰𝘧 𝘵𝘩𝘦 𝘪𝘵𝘦𝘮 𝘢𝘳𝘦 𝘨𝘪𝘷𝘦𝘯 𝘣𝘦𝘭𝘰𝘸. Write a program in PHP to find the best deal to purchase the item. </h4><br> <br>";


$quantity1 = 70;
$quantity2 = 100;
$price1 = 35;
$price2 = 30;
$best_deal_item;

echo "<h5> 𝐪𝐮𝐚𝐧𝐭𝐢𝐭𝐲𝟏 = 𝟕𝟎 <br> 𝐪𝐮𝐚𝐧𝐭𝐢𝐭𝐲𝟐 = 𝟏𝟎𝟎 <br> 𝐩𝐫𝐢𝐜𝐞𝟏 = 𝟑𝟓 <br> 𝐩𝐫𝐢𝐜𝐞𝟐 = 𝟑𝟎 </h5> <br> <br>";
if ($quantity1*$price1 < $quantity2*$price2){
    echo $best_deal_item = "<h3>"."𝙏𝙝𝙚 𝙗𝙚𝙨𝙩 𝙙𝙚𝙖𝙡 𝙩𝙤 𝙋𝙪𝙧𝙘𝙝𝙖𝙨𝙚 𝙞𝙨 𝙩𝙝𝙚 <strong> First Price </strong> 𝙬𝙝𝙞𝙘𝙝 𝙞𝙨 $price1 𝙬𝙞𝙩𝙝 𝙩𝙝𝙚 <strong> First Quantity </strong>𝙤𝙛 $quantity1. </h3>";
}else{
    echo $best_deal_item = "<h3>"."𝙏𝙝𝙚 𝙗𝙚𝙨𝙩 𝙙𝙚𝙖𝙡 𝙩𝙤 𝙋𝙪𝙧𝙘𝙝𝙖𝙨𝙚 𝙞𝙨 𝙩𝙝𝙚 <strong> Second Price </bold> 𝙬𝙝𝙞𝙘𝙝 𝙞𝙨 $price2 𝙬𝙞𝙩𝙝 𝙩𝙝𝙚 <strong> Second Quantity </strong> 𝙤𝙛 $quantity2. </h3>";
}
?>
    </table>
</div>
</body>
</html>
