<?php
    $bateau = array(
        "Surcouf" => array(
            "Membres" => 8, "Passagers" => 15
        ),
        "Manureva" => array( 
            "Membres" => 3, "Passagers" => 4
        ),
        "Sirius" => array( 
            "Membres" => 4, "Passagers" => 6
        )   
    );

    foreach ($bateau as $key => $value) {
        if ($value["Passagers"] > 10) {
            echo $key;
        }
    }
?>