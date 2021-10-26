<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="index.php">
    <input type="text" name="str">
    <input type="submit">

</form>
<?php

$string = $_GET['str'];
$reverse = '';
$i = 0;
while(!empty($string[$i])){
      $reverse = $string[$i].$reverse;
      $i++;
}
echo $reverse;


?>
</body>
</html>