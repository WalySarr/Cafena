<?php

$name=$_POST["name"];
$email=$_POST["email"];
$number=$_POST["number"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?=include "nav.php"?>
<table>
<td style="color: white";>    Le nom du client est :
</td>   
 <td><?="$name"?></td>
</table>
</body>
</html>