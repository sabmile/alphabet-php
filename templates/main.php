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
    <h1><?= $letters[1]; ?></h1>
    <link rel="stylesheet" href="/../../assets/fonts/stylesheet.css">
    <table class="alphabet">
        <tr>
            <th>NUM</th>
            <th>at the end</th>
            <th>in the middle</th>
            <th>at the beginning</th>
        </tr>
        <tr>
            <td class="num">1</td>
            <td class="end"><?= $letter; ?></td>
            <td class="middle"><?= $letter; ?></td>
            <td class="begin"><?= $letter; ?></td>
        </tr>
    </table>

    <p></p>
    <p></p>
</body>
</html>
