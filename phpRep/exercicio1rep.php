<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" initial-scale="1.0">
    <title>Exercicio 1 rep</title>
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
                                <label class="form-label" for="n1" step="any">N1:</label>
                                <input type="number" id="n1" name="n1" class="form-control" step="0.01">
                            </div>
                            <div class="col-md-6 pt-3">
                                <label class="form-label" for="n2" step="any">N2:</label>
                                <input type="number" id="n2" name="n2" class="form-control" step="0.01"> 

                            </div>
                            <div class="col-md-6 pt-3">
                                <label class="form-label" for="n3" step="any">N3:</label>
                                <input type="number" name="n3" id="n3" class="form-control" step="0.01">
                            </div>
                            <div class="col-md-6 pt-3">
                                <label class="form-label" for="n4" step="any">N4:</label>
                                <input type="number" name="n4" id="n4" class="form-control" step="0.01">
                            </div>
                            <div class="col-md-6 pt-3">
                                <label class="form-label" for="n5" step="any">N5:</label>
                                <input type="number" name="n5" id="n5" class="form-control" step="0.01">
                            </div>
                            <div class="col-md-6 pt-3">
                                <label class="form-label" for="n6" step="any">N6:</label>
                                <input type="number" name="n6" id="n6" class="form-control" step="0.01">
                            </div>
                            <div class="col-md-6 pt-3">
                                <label class="form-label" for="n7" step="any">N7:</label>
                                <input type="number" name="n7" id="n7" class="form-control" step="0.01">
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
                                        $numeros = [
                                            $_POST["n1"],
                                            $_POST["n2"],
                                            $_POST["n3"],
                                            $_POST["n4"],
                                            $_POST["n5"],
                                            $_POST["n6"],
                                            $_POST["n7"]
                                        ];

                                        $menor = 0;
                                        $indice = 0;
                
                                        for($i = 0; $i < 7; $i++){

                                            if($i == 0){
                                                $menor = $numeros[$i];
                                            }
                                            elseif($numeros[$i] < $menor){
                                                
                                                $menor = $numeros[$i];
                                                $indice = $i;
                                            }

                                        }

                                        echo "<p>O menor valor é: " . $menor . "</p><br>";
                                        echo "<p>A posição na sequência é a de número: " . ($indice + 1) . "</p>";
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