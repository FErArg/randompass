<?php
function randomPassword($cant) {
    $alphabet = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $symbols = "!?/\*-+.:;,@#$%&()[]{}^";
    $alphabet = $alphabet . $symbols;
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < $cant; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}

$cantidades = array(
                        0 => 10,
                        1 => 15,
                        2 => 20,
                        3 => 25,
                );

echo "<pre>";
echo "<table style=\"text-align: left; \" border=\"1\" cellpadding=\"2\" cellspacing=\"2\">";
echo "<tr>";
echo "<td>";
foreach ($cantidades as $key => $value) {
        echo "<p> Caracteres ".$value."</p>";
        for($i = 1; $i <= 10; $i++){
                echo "<p>".randomPassword($value)."</p>";
        }
        echo "</td><td>";
}

$value = $_GET['i'];

if ( $value === NULL ){
        $value = 30;
}
echo "<p> Caracteres ".$value."</p>";
        for($i = 1; $i <= 10; $i++){
                echo "<p>".randomPassword($value)."</p>";
        }

echo "</td>";
echo "</tr>";
echo "</table>";
echo "</pre";
?>
