<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Panel</title>
</head>
<body style="background-color: black; color: white;">
<center style="margin-top: 230px;">
<h1> Login </h1>
<form method="post" action="index.php">
<input type="text" name="username" placeholder="Username:"><br><br>
<input type="password" name="password" placeholder="Password: "></br>
<br><br>
<input type="submit" value="Login">
</form>
    </center>
<center>
<br>
    <?php

header('hint: https://www.youtube.com/watch?v=-tJYN-eG1zk');

$username = $_POST["username"];
$password = $_POST["password"];

if(strcmp($username, "admin")==0 && strcmp($password, "superman")==0 ){
    echo "Login Successful! Here's the flag: AbhedyaCTF{bru73_up_7h3_l0g1n_p@nel}";
}
else if (strcmp($username, "admin")==0 && strcmp($password, "superman")!=0){
    echo "Incorrect Password! Please try again..";
}
else{
   echo "Only the user 'admin' can login at the moment!";
}
?>
</body>
</html>