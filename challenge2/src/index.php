<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Monster</title>
</head>
<body style="background-color: black;">

<center>

<img src="https://i.pinimg.com/originals/cc/b7/7c/ccb77c5039678dd5db9e96d17b75ce72.jpg" style="height: 300px;">

</center>

<?php
$cookie_name = "website_data";
$cookie_value = "QWJoZWR5YUNURntjMDBrMTMkX0ByM19sMHYzISF9";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
</body>
</html>