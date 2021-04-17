<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Super Exclusive Club</title>
</head>
<body style="color: white; background-color: black;">

<?php
$cookie_name = "balance";
$cookie_value = "1000";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

$balance = $_COOKIE[$cookie_name];
if($balance < 1000000 ){
    echo '<center>';
    echo '<h1 style="margin-top: 300px;">Have at least a million dollars as your bank balance before thinking to visit this super exclusive club again!</h1>';
    echo '</center';

    echo '<center> <h3> Current Balance: <font color="red">';
    echo $_COOKIE[$cookie_name];
    echo "</font> </h3> </center>";    
}
else if ($balance >= 1000000){
    echo '<center>';
    echo '<h1 style="margin-top: 300px;">Welcome to the super exclusive club!</h1>';
    echo '</center';

    echo '<center> <h3> Current Balance: <font color="green">';
    echo $_COOKIE[$cookie_name];
    echo "</font> </h3> </center>";   

    echo '<br><br>';
    echo '<center> <h4> ';
    echo 'AbhedyaCTF{w@s_17_3v3n_@_sup3r_3xclusive_club?}';
    echo '</h4> </center>';
}
?>
</body>
</html>