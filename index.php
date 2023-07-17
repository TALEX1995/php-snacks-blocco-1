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
]

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php snaks</title>
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
</body>

</html>