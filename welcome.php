<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>

<body>
    <?php
    $firstName = "Chris";
    $lastName = "Chevalier";
    $age = 30;

    define("CIVILITY", "M.");

    $age++; // $age = $age + 1 / $age += 1;
    echo "Bonjour " . CIVILITY . " $firstName $lastName.<br> Vous avez $age ans.";
   

    ?>
</body>

</html>