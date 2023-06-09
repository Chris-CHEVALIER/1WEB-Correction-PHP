<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Languages</title>
</head>

<body>
    <?php
    $computerLanguages = array("C", "PHP", "Python", "Rust");
    $numberOfcomputerLanguages = count($computerLanguages);
    echo "Voici vos $numberOfcomputerLanguages langages préférés : ";
    foreach ($computerLanguages as $i => $computerLanguage) {
        echo $computerLanguage;
        if ($i !== $numberOfcomputerLanguages - 1) {
            echo ", ";
        }
    }

    $rustLanguage = $computerLanguages[3];
    echo "<br>Parmi ces langages, le $rustLanguage est mon favoris !<br>";

    $frameworks = [
        "JavaScript" => "NodeJS",
        "CSS" => "Bootstrap",
        "PHP" => "Symfony",
        "Python" => "Django"
    ];

    foreach ($frameworks as $language => $framework) {
        echo "Le langage <b>$framework</b> est écrit en $language.<br>";
    }

    /* $_GET = [
        "firstName" => "Chris",
        "lastName" => "Chevalier"
    ]; */

    ?>


    <!-- <form>
        <label for="firstName">Prénom</label>
        <input type="text" name="firstName" id="firstName">

        <label for="lastName">Nom</label>
        <input type="text" name="lastName" id="lastName">
        <input type="submit" value="OK">
    </form> -->
</body>

</html>