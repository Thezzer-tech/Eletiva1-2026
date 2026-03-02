<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" initial-scale="1.0">
    <title>Exercicio 14 PHP</title>
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
                                <label class="form-label" for="km" step="any">Quilômetro:</label>
                                <input type="number" id="km" name="km" step="0.01" class="form-control">
                            </div>


                            <div class="mt-5">
                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="reset" class="btn btn-light">Cancel</button>
                                    </div>
                                </div>

                        </form>
                        <div class="mt-5">
                            <div class="text-center">
                                <?php
                                    if($_SERVER["REQUEST_METHOD"] == "POST"){
                                        $km = $_POST["km"];
                                        $milha = round($km*0.621371,2);
                                        echo "<p>Milhas: $milha °<p>";
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>