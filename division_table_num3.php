<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Division Table</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
  <style>
  
  .container tr{
    background-color: lightgreen;
    }
  
  .container th{
    background: linear-gradient(to bottom left, #33ccff 0%, #ff99ff 100%);
    }


  </style>
  <body>
  <br>
  <center>
  <h2>𝐃𝐢𝐯𝐢𝐬𝐢𝐨𝐧 𝐓𝐚𝐛𝐥𝐞</h2>
  </center>
  <br>
  
  <div class="container">
    <table class="table table-striped">

  <?php
  
    $numStart = 1;
    $numEnd = 10;
    echo("<tr>");
    echo("<th> </th>");
    for ($i = $numStart; $i <= $numEnd; $i++)
      echo("<th>$i</th>");
    echo("</tr>");

    for ($i = $numStart; $i <= $numEnd; $i++){
      echo("<tr><th>$i</th>");
      for ($j = $numStart; $j <= $numEnd; $j++){
        $answer = $i / $j;
        printf("<td>%.3f</td>",
               $answer);  
      }
    echo("</tr>\n");
  }
    
  ?>

  </table> 
</div>
</body>
</html>