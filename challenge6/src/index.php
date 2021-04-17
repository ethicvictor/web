<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Secret Portal</title>
</head>
<body style="color: white; background-color: black;">

<?php
$cookie_name = "website_data";
$cookie_value = "e25hbWU6ICJhZG1pbiIsIHVzZXJpZDogMTMzNywgZG9iOiAxMjAzMjAwMn0=";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

$val = $_COOKIE[$cookie_name];
if(strcmp($val, 'e25hbWU6ICJhZG1pbiIsIHVzZXJpZDogMTMzNywgZG9iOiAxMjAzMjAwMn0=')==0 ){
    echo '<center>';
    echo '<h1 style="margin-top: 300px; color: red;">Access Denied!</h1>';
    echo '<br><br>';
    echo 'Make sure your year of birth is between 1940 - 1999 (ddmmyy)';
    echo '</center';
}
else if(strcmp($val, 'e25hbWU6ICJhZG1pbiIsIHVzZXJpZDogMTMzNywgZG9iOiAxMjAzMTk2OH0=')==0 ){
    echo '<center>';
    echo '<h1 style="margin-top: 300px; color: green;">Welcome Admin!</h1>';
    echo '<br><br>';
    echo "Here's your flag: AbhedyaCTF{1m@g1n3_h@v1ng_c00k13_v@lu3s_1n_b64}";
    echo '</center>';
}
?>
</body>
</html>