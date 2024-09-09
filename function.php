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

    if (isset($_GET['passwordLength']) && $_GET['passwordLength'] != '') {
        $lunghezza = intval($_GET['passwordLength']);
        $password = generaPassword($lunghezza);

        // Verifica del numero minimo di caratteri
        if(intval($_GET['passwordLength']) < 8){
            $password = '<span class="bg-icons"><i class="fa-solid text-warning fa-lg fa-triangle-exclamation"></i></span><span class="text-danger ms-3 me-3 text-uppercase">Seleziona il numero minimo di caratteri (8)</span><span class="bg-icons"><i class="fa-solid text-warning fa-lg fa-triangle-exclamation"></i></span>';
        }
    }
    // Controllo se l'utente ha selezionato un numero di caratteri 
    else {
        $password = '<span class="bg-icons"><i class="fa-solid text-warning fa-lg fa-triangle-exclamation"></i></span><span class="text-danger ms-3 me-3 text-uppercase">Seleziona un numero di caratteri</span><span class="bg-icons"><i class="fa-solid text-warning fa-lg fa-triangle-exclamation"></i></span>';
    }
?>