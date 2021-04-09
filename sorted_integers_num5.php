<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorted List Integers</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>


#bg{
        margin-top:20px;
        border-radius:8px;
        width:750px;
    }

    h2{
        margin-top:20px;
    }
</style>
<body>
<center>
<div class = "container_all">
    <h2>𝐒𝐨𝐫𝐭𝐞𝐝 𝐋𝐢𝐬𝐭 𝐈𝐧𝐭𝐞𝐠𝐞𝐫𝐬</h2>
</center>
    <br>
    <br>
    <div class="container p-5 my-3 bg-primary text-white" id = "bg">
        <h5>Sorted Array</h5>
    <?php
        $num_list = array (11,4,3,5,8,9,27,12,9,1,14,45,21,16,1,4,12,11);
        sort($num_list);
        $end = count($num_list);
        for($count=0;$count<$end;$count++){
            echo $num_list[$count] . "<br>";       
        };
        echo "<br>";
        echo "<h5>Deleting the recurring elements <h5><br>";    
        $numbers = array_unique($num_list);
        print_r($numbers);
        sort($numbers);

        $c1 = count($numbers);

        $counter = 0;
        echo "  or <br>";
        while ($counter < $c1 ) {
            echo $numbers[$counter]." - ";

            $counter++;
        }
    ?>
</body>
</html>