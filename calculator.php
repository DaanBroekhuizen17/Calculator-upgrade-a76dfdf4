<?php

    echo ("welke operatie wil je uitvoeren? (+, -, %)");
    $operatie = readline($prompt);
    if ($operatie == "+" || $operatie == "-" || $operatie == "%") {

        echo ("eerste getal?");
        $eerste = readline($prompt);
        if (is_numeric($eerste)){

            echo ("tweede getal?");
            $tweede = readline($prompt);
            if (is_numeric($tweede)){

                if ($operatie == "+"){
                    echo ($eerste + $tweede);
                } if ($operatie == "-") {
                    echo ($eerste - $tweede);
                } if ($operatie == "%") {
                    echo ($eerste % $tweede);
                }
            } else {
                echo ("dit is geen geldige waarde");
                exit;
            }
        } else{
            echo ("dit is geen geldige waarde");
            exit;
        }
    } else {
        echo ( "$operatie is geen geldige operatie" );
        exit;
    }

?>