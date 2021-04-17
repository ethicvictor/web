<html>
 <head>
   <title> Homepage </title>
   <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
 </head>
<body style="background-color: #23272A; color: white;">
<div style="position: fixed; top: 30%; left: 50%; margin-top: -50px; margin-left: -230px; border: solid 2px green; width: 500px;">
<center><h1 style="font-family: 'Audiowide';">Quick CMS Password Recovery</h1></center>
<hr color="white" size="3" width="400"></hr>
<br>
<form method="post" action="index.php">
<input type="text" placeholder="Name" name="name" style="height: 30px; width: 300px; border-radius: 13px; border: none; margin: auto; display: block;"/><br>
<br>
<input type="password" placeholder="Password" style="height: 30px; width: 300px; border-radius: 13px; border: none; margin: auto; display: block;" name="password"/>
<br>
<input type="submit" style="margin: auto; display: block; background-color: #009900; border: none; color: white; height: 25px; width: 100px; border-radius: 13px;" placeholder="Login">
</form>
</div>
<?php
$username = $_POST["name"];
$password = $_POST["password"];
if (strcmp($username,"John") ==0 ){
  if (strcmp($password,"secret") ==0 ){
   echo "<script> alert('Login Successful! Note: Since we have shifted our database to a new vendor we are facing some issues, please check out these logs and try to login without those damn errors, goodluck a̶d̶m̶i̶n! URL: https://mega.nz/file/r18whQYb#PytVFnaSbctN-2kdZVBvAi6nqPEc2juzvDsYaH3471I') </script>";
 }
}
else {
   echo "<center> <b> Try again and ROCK IT this time! </b> </center>";
}
?>
</body>
</html>
