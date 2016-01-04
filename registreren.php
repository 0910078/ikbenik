<?php
require_once('db.php');

if(isset($login_system['submit']))
{
    echo "er is op submit gedrukt";
    // zo ja, data uit post halen
    $voornaam = $_POST('voornaam');
        // query opbouwn INSERT INTO
    $query = "INSERT INTO gebruiker (name)
              VALUES ('$voornaam')";
        // echo query , copy, paste in phpmyadmin
    echo $query;
        // mysqli_query
    $result = mysqli_query($db, $query);

    if (!$result)   {
        echo 'Fout in query: '.mysqli_error($db);
    }

    mysqli_close($db);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Praktijk ik ben ik</title>
    <link href="css/stylesheet.css" rel="stylesheet" type="text/css"/>
</head>

<body>

<div class="container">

    <header>
        <nav class="navigation">
            <ul class="navigation">
                <li class="navigation"><a class="navigation" href="index.php">Home</a></li>
                <li class="navigation"><a class="navigation" href=#>Agenda</a></li>
                <li class="navigation"><a class="navigation" href=#>Mijn afspraken</a></li>
                <li class="navigation2"><a class="navigation2" href="contact.php">Contact</a></li>
                <li class="navigation"><a class="navigation" href=#>Inloggen</a></li>
                <li class="navigation"><a class="navigation" href="registreren.php"><b>Registreren</b></a></li>
            </ul>
        </nav>
        <div class ="logo">
            <img class="logo" src="images/logo-ikbenik-metal-brush1.png"/>
        </div>
    </header>

    <main class="registreren">
        <div class="welkom">
            <h1>Registreren</h1>
        </div>

        <div class="register">
            <h1>Vul a.u.b. de volgende gegevens in:</h1>
            <form method="post" action="">
                <div class="vraag">
                    <label for="voornaam">Voornaam:</label>
                    <input id="voornaam" type="text" name="voornaam"><br>
                </div>
                <div class="vraag">
                    <label for="achternaam">Achternaam:</label>
                    <input type="text" name="achternaam" id="achternaam"><br>
                </div>
                <div class="vraag">
                    <label for="email">E-mail:</label>
                    <input type="text" name="email" id="email"><br>
                </div>
                <div class="vraag">
                    <label for="gebruikersnaam">Gebruikersnaam:</label>
                    <input type="text" name="gebruikersnaam" id="email"><br>
                </div>
                <div class="vraag">
                    <label for="wachtwoord">Wachtwoord:</label>
                    <input type="text" name="wachtwoord" id="wachtwoord"><br>
                </div>
                <input type="submit" value="bevestigen" name="submit">
            </form>
        </div>
    </main>

    <footer>
        <h5>Footer tekst</h5>
        <p>&copy;Praktijk ik ben ik 2015</p>
    </footer>

</div>
</body>
</html>
