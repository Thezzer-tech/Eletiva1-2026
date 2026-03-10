<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" initial-scale="1.0">
    <title>Exercicio 3 rep</title>
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
                                <label class="form-label" for="a" step="any">A:</label>
                                <input type="number" id="a" name="a" class="form-control" step="0.01">
                            </div>
                            <div class="col-md-6 pt-3">
                                <label class="form-label" for="b" step="any">B:</label>
                                <input type="number" id="b" name="b" class="form-control" step="0.01"> 

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
                                        $valor1 = $_POST["a"];
                                        $valor2 = $_POST["b"];

                                        if($valor1 == $valor2){
                                            echo"<p>Valores iguais: " . $valor1 . "</p>";
                                        }
                                        else{
                                            if ($valor1 > $valor2){
                                                echo "" . $valor2 . " " . $valor1 . "";
                                            }
                                            else{
                                                echo "" . $valor1 . " " . $valor2 . "";
                                            }
                                        }
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