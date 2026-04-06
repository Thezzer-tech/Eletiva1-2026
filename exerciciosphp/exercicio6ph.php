<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" initial-scale="1.0">
    <title>Exercicio 6 PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">

    <style>
    .cordefundo {
        background-color: #f3f2f4;
    }
    </style>
</head>

<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-body p-4 cordefundo">
                        <form class="row" method="post">

                            <div class="col-md-6 pt-3">
                                <label class="form-label" for="tempC" step="any">Temperatura em celsius:</label>
                                <input type="number" id="tempC" name="tempC" class="form-control" step="0.01">
                            </div>

                            <div class="mt-5">
                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="reset" class="btn btn-light">Cancel</button>
                                    </div>
                                </div>

                        </form>

                        <div class="text-center">
                            <?php

                                if($_SERVER["REQUEST_METHOD"] == "POST"){
                                    $tempC = $_POST["tempC"];
                                    $convert = ($tempC*1.8)+32;
                                    echo "<p>Temperatura em Fahrenheit: $convert °</p>";
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>