<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>

<body>
    <?php
    for ($i = 0; $i <= 10; $i++) {
        if ($i === 9) {
            break;
        }
        echo $i % 2 === 0 ? $i : ", ";
        /* if ($i % 2 === 0) {
            echo $i;
        } else {
            echo ", ";
        } */
    }
    ?>
</body>

</html>