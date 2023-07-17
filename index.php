<?php

$matches = [
    [
        'home_team' => 'Atlanta Hawks',
        'home_team_points' => 42,
        'away_team' => 'Oklahoma City Thunder',
        'away_team_points' => 45,
    ],
    [
        'home_team' => 'Charlotte Hornets',
        'home_team_points' => 40,
        'away_team' => 'Chicago Bulls',
        'away_team_points' => 57,
    ],
    [
        'home_team' => 'Cleveland Cavaliers',
        'home_team_points' => 48,
        'away_team' => 'Denver Nuggets',
        'away_team_points' => 46,
    ],
    [
        'home_team' => 'Milwaukee Bucks',
        'home_team_points' => 49,
        'away_team' => 'Milwaukee Bucks',
        'away_team_points' => 53,
    ],
];

$paragraph = "Plutone è un pianeta nano orbitante nella parte esterna del sistema solare, nella fascia di Kuiper. Scoperto da Clyde Tombaugh nel 1930, è stato considerato per 76 anni il nono pianeta del sistema solare. Dal 1992 il suo status di pianeta venne messo in discussione in seguito alla scoperta di diversi oggetti di dimensioni simili nella fascia di Kuiper. La scoperta di Eris nel 2005, un pianeta nano del disco diffuso che è il 27% più massiccio di Plutone, ha portato l'Unione Astronomica Internazionale l'anno successivo a riconsiderare, dopo un acceso dibattito, la definizione di pianeta, e a riclassificare così Plutone come pianeta nano.";

$exploded_paragraph = explode('.', $paragraph);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php snaks</title>
    <style>
        input {
            display: block;
            margin-bottom: 16px;
            width: 30%;
        }
    </style>
</head>

<body>
    <ul>
        <?php foreach ($matches as [
            'home_team' => $home_team,
            'home_team_points' => $home_team_points,
            'away_team' => $away_team,
            'away_team_points' => $away_team_points
        ]) : ?>
            <li><?= $home_team ?> - <?= $away_team ?> | <?= $home_team_points ?>-<?= $away_team_points ?> </li>
        <?php endforeach ?>
    </ul>

    <br>
    <br>
    <br>

    <form action="response.php" method="GET">
        <input type="text" name="name" placeholder="Insert your name">
        <input type="text" name="e-mail" placeholder="Insert your email">
        <input type="text" name="age" placeholder="Insert your age">
        <button type="submit">Accedi</button>
    </form>

    <br>
    <br>
    <br>

    <?php foreach ($exploded_paragraph as $paragraph) : ?>
        <p><?= $paragraph ?>.</p>
    <?php endforeach ?>

</body>

</html>