<?php
    require_once 'const.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../assets/style.css">
    <link rel="stylesheet" href="../assets/alphabet.css">
    <link rel="stylesheet" href="../assets/shadow.css">

    <title>Document</title>
</head>
<body>
    <h1><?= $letters[1575][POSITION[SEPARATE]]; ?></h1>
    <link rel="stylesheet" href="/../../assets/fonts/stylesheet.css">
    <table class="alphabet">
        <tr>
            <th>NUM</th>
            <th>at the end</th>
            <th>in the middle</th>
            <th>at the beginning</th>
            <th>separate</th>
        </tr>
        <?php foreach ($letters as $letter): ?>
        <tr>
            <td class="num"><?= $num++; ?></td>
            <td class="end"><?= $letter[POSITION[END]] ?></td>
            <td class="middle"><?= $letter[POSITION[MIDDLE]] ?></td>
            <td class="begin"><?= $letter[POSITION[BEGIN]] ?></td>
            <td class="separate"><?= $letter[POSITION[SEPARATE]]; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <p></p>
    <p></p>
</body>
</html>
