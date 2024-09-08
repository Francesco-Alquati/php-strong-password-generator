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
                <div class="card-header rounded">
                    <h1 class="mt-5 text-white">Strong Password Generator</h1>
                    <h3 class="mt-5 text-white">Genera una password <span class="text-green text-uppercase ms-2">Sicura</span></h3>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <div class="form-container">
                    <form action="./index.php" method="GET">
                        <div class="d-flex justify-content-around">
                            <label class="form-label mt-3">Lunghezza Password</label>
                            <input type="password" class="col-form-label" id="Password">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>