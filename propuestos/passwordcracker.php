<?php
 // Valor a comparar -> $2y$10$0GNiidCkeO/VBBHPH0DP6e5tgz6l/FIOxs1RcFloJrXuTYmmAsW72

 $laZeta = 122;$laA = 97;

 for($letra4 = $laA; $letra4 <= $laZeta; $letra4++){
    for($letra3 = $laA; $letra3 <= $laZeta; $letra3++){
        for($letra2 = $laA; $letra2 <= $laZeta; $letra2++){
            for($letra1 = $laA; $letra1 <= $laZeta; $letra1++){
                 if(password_verify(chr($letra1).chr($letra2).chr($letra3).chr($letra4),'$2y$10$0GNiidCkeO/VBBHPH0DP6e5tgz6l/FIOxs1RcFloJrXuTYmmAsW72')){
                     echo "La contraseña es: ".chr($letra1).chr($letra2).chr($letra3).chr($letra4);
                     break;
                 }
            }
        }
    }
 }

?>