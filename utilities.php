<?php
//CREARE LA FUNZIONE DI CONTROLLO
function validate($email)
{



    if (strpos($email, '@') === false || strpos($email, '.') === false) {
        return false;
    }

    return true;
}
?>