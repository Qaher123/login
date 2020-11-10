<?php

include "db.php";

// todo 1: print de ingevoerde username en wachtwoord op aparte regels. Geef duidelijk aan welk van de twee de username en het wachtwoord is.

$user_name = $_POST['username'];
$password = $_POST['pswd'];

echo "username: ".$user_name;
echo "<br>";
echo "password: ".$password;
echo "<br>";

// todo 2: maak twee variabele aan en sla de ingevoerde username en wachtwoord op in deze variabelen.

$myConn = new DB;

// todo 3: include de variabele met de username in de onderstaande query, zodat deze alle data kan ophalen voor de ingevoerde username.
$query = "SELECT * FROM users WHERE username = '$user_name' AND pswd = '$password'" ;

$result = $myConn->executeSQL($query);

// todo 4: vermeldt wat de datatype van variabele $result is. Dit kun je met behulp van een ingebouwde php functie doen.
$type =  gettype($result);


if (!empty($result)) {
    echo "<br> Login as $user_name <br>";
    // todo 5: let uit wat de ingebouwde php functie print_r() doet en gebruik het om de result-variabele te printen.
    print_r($result);
} else {
    echo "<br> Invalid login! <br>";
}



?>
