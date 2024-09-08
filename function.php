<?php
    // creo la funzione per generare la password
    function generaPassword($lunghezza)
    {
        $caratteri = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=[]{}|;:,.<>/?';
        $password = '';
        for ($i = 0; $i < $lunghezza; $i++) {
            $password .= $caratteri[random_int(0, strlen($caratteri) - 1)];
        }
        return $password;
    }

    if (isset($_GET['passwordLength'])) {
        $lunghezza = intval($_GET['passwordLength']);
        $password = generaPassword($lunghezza);
    }
?>