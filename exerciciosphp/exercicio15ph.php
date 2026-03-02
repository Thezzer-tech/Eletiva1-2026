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
                                <label class="form-label" for="al" step="any">Altura:</label>
                                <input type="number" id="alt" name="alt" class="form-control" step="0.01">
                            </div>
                            <div class="col-md-6 pt-3">
                                <label class="form-label" for="peso" step="any">Peso:</label>
                                <input type="number" id="peso" name="peso" class="form-control" step="0.01"> 

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
                                        $alt = $_POST["alt"];
                                        $peso = $_POST["peso"];
                                        $imc = round($peso/$alt**2,2);
                                        echo "<p>Resultado do IMC: $imc °<p>";
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>