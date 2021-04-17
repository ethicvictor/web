<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swigger</title>
</head>
<body style="background-color: #23272A; color: white;">
<div style="position: fixed; top: 30%; left: 50%; margin-top: -50px; margin-left: -250px; border: solid 2px red; width: 500px;">
<center><h1 style="font-family: 'Audiowide';">Event Handler Search</i></h1></center>
<hr color="white" size="3" width="400"></hr>
<br>
<form method="post" action="index.php">
<input type="text" placeholder="enter your query" name="query" style="height: 30px; width: 300px; border-radius: 13px; border: none; margin: auto; display: block;"/><br>
<br>
<input type="submit" style="margin: auto; display: block; background-color: #009900; border: none; color: white; height: 25px; width: 100px; border-radius: 13px;" value="Search">
</form>
<!-- Maybe try out some payloads? -->
</div>
<?php
$query = $_POST["query"];
if (strcmp($query,"<a2 onbeforescriptexecute=alert(1)><script>1</script>")==0 ){
   echo "<script>alert('Goodjob! Here is your flag: AbhedyaCTF{fuzz1ng_1s_fun}');</script>";
}
?>
</body>
</html>