<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armstrong Number</title>
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
    <h2>𝑪𝒉𝒆𝒄𝒌𝒊𝒏𝒈 𝒂𝒏 𝑨𝒓𝒎𝒔𝒕𝒓𝒐𝒏𝒈 𝑵𝒖𝒎𝒃𝒆𝒓</h2>
    <br>
    <br>
        <form method = "GET">
            <div class="container p-5 my-3 bg-primary text-white" id = "bg">
                <div class="form-group">
                <label for="usr">𝐈𝐧𝐩𝐮𝐭 𝐚𝐧𝐲 𝐍𝐮𝐦𝐛𝐞𝐫(𝐬):</label>
                <input type="number" class="form-control" id="inputs" name = "get_input_number">
                <input type="submit" class="btn btn-info" name = "get_convertion" id = "btn">
                </div>
                    <?php  

                        if(isset($_GET["get_convertion"])){
                        $get_input_data = $_GET['get_input_number'];
                        $outcome = 0;
                        for ($ctr = 0;$ctr < strlen($get_input_data); $ctr++){
                            $outcome += $get_input_data[$ctr] **3;
                        }
                        if($get_input_data == $outcome){
                            echo "<center> 𝒀𝒆𝒔, 𝒊𝒕 𝒊𝒔 𝒂𝒏 𝑨𝑹𝑴𝑺𝑻𝑹𝑶𝑵𝑮 𝑵𝑼𝑴𝑩𝑬𝑹.";
                        }else{
                            echo "<center> 𝑵𝒐, 𝒊𝒕 𝒊𝒔 𝑵𝑶𝑻 𝒂𝒏 𝑨𝑹𝑴𝑺𝑻𝑹𝑶𝑵𝑮 𝑵𝑼𝑴𝑩𝑬𝑹.";
                        }
                        
                    }
                    ?>
            </div>
        </form>
</div>
</center>
</body>
</html>