<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convert digit to Words</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>
body{
        background-color: Khaki;
    }
#inputs{
        width:300px;
    }
#bg{
        width: 600px;
        height:270px;
    }
h2{
        margin-top:20px;
    }
#btn{
        margin-top:30px;
        margin-left:400px;
    }
.container_all{
        background-color: DeepSkyBlue;
        width:650px;	
        height:450px;
        border-radius:5px;
        box-shadow: 8px 8px 5px 8px;
        margin-top:30px;
    }
</style>
<body>
<center>
<div class = "container_all">
    <h2>𝐂𝐨𝐧𝐯𝐞𝐫𝐭 𝐃𝐢𝐠𝐢𝐭 𝐭𝐨 𝐖𝐨𝐫𝐝𝐬</h2>
    <br>
    <br>
        <form method = "GET">
            <div class="container p-5 my-3 bg-primary text-white" id = "bg">
                <div class="form-group">
                <label for="usr">𝐈𝐧𝐩𝐮𝐭 𝐚𝐧𝐲 𝐍𝐮𝐦𝐛𝐞𝐫(𝐬):</label>
                <input type="number" class="form-control" id="inputs" name = "get_input_number">
                <input type="submit" class="btn btn-info" name = "get_convert_num" id = "btn">
                </div>
                    <?php

                        if(isset($_GET['get_convert_num'])){
                            $number = $_GET['get_input_number'];
                            $num_length = strlen($number);
                            
                            for ($counter = 0; $counter <$num_length ; $counter++) { 
                                getNumIndex($number[$counter]);
                            }
                        }
                        function getNumIndex($num){              
                            switch($num){
                                
                                case '0':
                                    echo "Zero ";
                                    break;
                                case '1':
                                    echo "One ";
                                    break;
                                case '2':
                                    echo "Two ";
                                    break;
                                case '3':
                                    echo "Three ";
                                    break;
                                case '4':
                                    echo "Four ";
                                    break;
                                case '5':
                                    echo "Five ";
                                    break;
                                case '6':
                                    echo "Six ";
                                    break;
                                case '7':
                                    echo "Seven ";
                                    break;
                                case '8':
                                    echo "Eight ";
                                    break;
                                case '9':
                                    echo "Nine ";
                                    break;
                                                    
                            }

                        }
                    ?>
                </div>
            </div>
        </form>
</div>
</center>                      
</body>
</html>