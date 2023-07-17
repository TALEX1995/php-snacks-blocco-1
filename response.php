<?php

$name = $_GET[trim('name')] ?? '';
$e_mail = $_GET[trim('e-mail')] ?? '';
$age = $_GET['age'] ?? '';
var_dump($name, $e_mail, $age);

$have_name = (strlen($name) > 3);

$have_e_mail = str_contains($e_mail, '@') && str_contains($e_mail, '.');

$have_age = is_numeric($age);

var_dump($have_name);
var_dump($have_e_mail);
var_dump($have_age);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>