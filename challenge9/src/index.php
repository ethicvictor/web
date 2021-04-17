<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Webpage</title>
</head>
<body style="background-color: black; color: white;">
 
  <center style="margin-top: 240px;">
    <h1> Post me, if you can! </h1>
  </center>

<center>
  <?php
    if(strcmp($_SERVER['REQUEST_METHOD'], "POST")==0){
            echo "Guess it worked! Here's your flag: AbhedyaCTF{P0S7_r3q3us7_f7w}";
    }
    else{
        echo "Error, Try Again!";
    }
  ?>
</center>
</body>
</html>