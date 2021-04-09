<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorted List Strings</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>


#bg{
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
<br>
    <h2>𝐒𝐨𝐫𝐭𝐞𝐝 𝐋𝐢𝐬𝐭 𝐒𝐭𝐫𝐢𝐧𝐠</h2>
</center>
    <br>
    <br>
    <div class="container p-5 bg-primary text-white" id = "bg">
        <h5>Sorted Array String List</h5>
    <?php
        $string_list = array ("Daryll", "Lyndrex", "Jurick", "Jeric", "Aldrin", "Joselito", "Joshua", "John Dave", "Jurick", "Aldrin", "Daryll");
        sort($string_list);
        $last = count($string_list);
        for($ndx=0;$ndx<$last;$ndx++){
            echo $string_list[$ndx] . "<br>";       
        };
        echo "<br>";
        echo "<h5>Deleting the recurring elements of a String List <h5><br>";    
        $names = array_unique($string_list);
        print_r($names);
        sort($names);

        $index = count($names);

        $count = 0;
        echo "  or <br>";
        while ($count < $index ) {
            echo $names[$count]." - ";

            $count++;
        }
    ?>
</body>
</html>