<?php

use userApp\user;
use userApp\car;
//use userApp\motorcycle;
//use userApp\bike;


$user = new user("asmenskodas", "zmogus","zmogiska",
    "darbuotojas", "email@gmail.com", "300$");
$car = new car("bmw", "9000$", "2500t", "2.5 diesel");
$car->setData( "5", "250km/h");


//var_dump($car->showcar());
?>







<!--    --><?php
//    for ($i = 1; $i <= 10; $i++) {
//        foreach ($user as $data): {
//            echo "<th>" . $data . "</th>";
//        }
//        endforeach;
//    }
//        ?>
