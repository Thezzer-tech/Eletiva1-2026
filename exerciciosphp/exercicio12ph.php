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
                                <label class="form-label" for="base">Digite base a ser elevada:</label>
                                <input type="number" id="base" name="base" class="form-control">
                            </div>
                            <div class="col-md-6 pt-3">
                                <label class="form-label" for="exp">Digite expoente:</label>
                                <input type="number" id="exp" name="exp" class="form-control">

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
                                        $base = $_POST["base"];
                                        $exp = $_POST["exp"];
                                        $elevado = $base**$exp;
                                        echo "<p>Resultado: $elevado °<p>";
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