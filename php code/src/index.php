<?php
  include "flag.php";
  highlight_file(__FILE__);
  
  if (isset($_GET['param'])) {
    $inputstring = $_GET['param'];
    $substring = 'phpisfun';
    $final = preg_replace("/$substring/", '', $inputstring);
    if ($final === $substring) {
      echo $flag;
    }
    else {
      echo $er;
    }
  }
?>
