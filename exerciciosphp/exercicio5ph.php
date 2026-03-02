<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" initial-scale="1.0">
    <title>Exercicio 5</title>
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
                                <label class="form-label" for="nota1" step="any">Nota 1:</label>
                                <input type="number" id="nota" name="nota1" class="form-control" step="0.01">
                            </div>
                            <div class="col-md-6 pt-3">
                                <label for="nota2" class="form-label fw-b" step="any">Nota 2:</label>
                                <input type="number" class="form-control" id="nota2" name="nota2" step="0.01">
                            </div>
                            <div class="col-md-12 pt-3">
                                <label for="nota3" class="form-label" step="any">Nota 3:</label>
                                <input type="number" class="form-control" id="nota3" name="nota3" step="0.01">
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
                                    $nota1 = $_POST["nota1"];
                                    $nota2 = $_POST["nota2"];
                                    $nota3 = $_POST["nota3"];
                                    $media = ($nota1+$nota2+$nota3)/3;
                                    echo "<p>A Média das notas é igual a: $media<p>";
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