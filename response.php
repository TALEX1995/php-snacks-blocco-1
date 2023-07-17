<?php

// Get value from form
$name = $_GET[trim('name')] ?? '';
$e_mail = $_GET[trim('e-mail')] ?? '';
$age = $_GET['age'] ?? '';

// Validation
$have_name = (strlen($name) > 3);

$have_e_mail = str_contains($e_mail, '@') && str_contains($e_mail, '.');

$have_age = is_numeric($age);

$access_allowed = $have_name && $have_e_mail && $have_age;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if ($access_allowed) : ?>
        <h1>Accesso riuscito</h1>
    <?php else : ?>
        <h1>Accesso Negato</h1>
    <?php endif ?>
</body>

</html>