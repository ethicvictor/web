<?php

$para = $_GET["cookie"];

if($para == 1337){
    echo '<center>';
    echo 'Congratulations! Here is your flag: AbhedyaCTF{fuzz1ng_p@r@m373rs_1s_fun}';
    echo '</center>';
}
else if ($para != 1337){
    echo 'Try again!';
}

?>