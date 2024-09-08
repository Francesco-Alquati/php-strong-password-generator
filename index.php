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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Password Generator</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="card-header mt-5 rounded">
                    <h1 class="text-white">Strong Password Generator</h1>
                    <h3 class="text-white mt-4">Genera una password <span class="text-green text-uppercase ms-2">Sicura</span></h3>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <div class="form-container">
                    <form action="./index.php" method="GET">
                        <div class=" mt-3 d-flex justify-content-around align-items-center">
                            <label class="form-label fs-6 text-uppercase">Lunghezza Password :</label>
                            <input type="number" id="passwordLength" name="passwordLength" min="8">
                        </div>
                        <div class="text-center mt-5">
                            <input type="submit" class="btn btn-primary" value="Genera">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="form-container mt-5 d-flex justify-content-center align-items-center h-100">
                    <div><?php echo "LA TUA PASSWORD : $password";?></div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>