<html>
 <head>
   <title> Dashboard Login </title>
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <!-- ¯\_(ツ)_/¯ -->
   <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
 </head>
<body style="background-color: #23272A; color: white;">
<div style="position: fixed; top: 30%; left: 50%; margin-top: -50px; margin-left: -250px; border: solid 2px red; width: 500px; background-image: url(https://cdn.pixabay.com/photo/2016/11/30/20/58/programming-1873854_1280.png);">
<center><h1 style="font-family: 'Audiowide';">XSS MACHINE</h1></center>
<hr color="white" size="3" width="400"></hr>
<div style="height: 20px; width: 300px; background-color:red; align-items: center; margin-left: 100px;">
<center><h5 style="color:yellow">HINT :-  XSS everywhere just hit a correct tag</h5></center>
</div>
<br>
<form method="post" action="index.php">
<input type="text" placeholder="Search for upcoming events" name="query" style="height: 30px; width: 300px; border-radius: 13px; border: none; margin: auto; display: block;"/><br>
<br>
<input type="submit" style="margin: auto; display: block; background-color: #009900; border: none; color: white; height: 25px; width: 100px; border-radius: 13px;" value="Search">
</form>
</div>
<?php
$query = $_POST["query"];
if (strcmp($query,"<a onpointerup=alert(1)>XSS</a>") ==0 ){
   echo "<script>alert('hola !! you finally pop up xss here is your flag AbhedyaCTF{xss_is_fun}');</script>";
}
?>
<h4 style="margin-top: 40%; text-align: center; font-family: 'Audiowide';">!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!TRY HARDER!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!</h4>
</body>
</html>
