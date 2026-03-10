<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" initial-scale="1.0">
    <title>Exercicio 4 rep</title>
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
                                <label class="form-label" for="meses[]" step="any">Valor Janeiro:</label>
                                <input type="number" id="meses[]" name="meses[]" class="form-control" step="0.01">
                            </div>

                            <div class="col-md-6 pt-3">
                                <label class="form-label" for="meses[]" step="any">Valor Fevereiro:</label>
                                <input type="number" id="meses[]" name="meses[]" class="form-control" step="0.01">
                            </div>

                            <div class="col-md-6 pt-3">
                                <label class="form-label" for="meses[]" step="any">Valor Março:</label>
                                <input type="number" id="meses[]" name="meses[]" class="form-control" step="0.01">
                            </div>

                            <div class="col-md-6 pt-3">
                                <label class="form-label" for="meses[]" step="any">Valor Abril:</label>
                                <input type="number" id="meses[]" name="meses[]" class="form-control" step="0.01">
                            </div>

                            <div class="col-md-6 pt-3">
                                <label class="form-label" for="meses[]" step="any">Valor Maio:</label>
                                <input type="number" id="meses[]" name="meses[]" class="form-control" step="0.01">
                            </div>

                            <div class="col-md-6 pt-3">
                                <label class="form-label" for="meses[]" step="any">Valor Junho:</label>
                                <input type="number" id="meses[]" name="meses[]" class="form-control" step="0.01">
                            </div>

                            <div class="col-md-6 pt-3">
                                <label class="form-label" for="meses[]" step="any">Valor Julho:</label>
                                <input type="number" id="meses[]" name="meses[]" class="form-control" step="0.01">
                            </div>

                            <div class="col-md-6 pt-3">
                                <label class="form-label" for="meses[]" step="any">Valor Agosto:</label>
                                <input type="number" id="meses[]" name="meses[]" class="form-control" step="0.01">
                            </div>

                            <div class="col-md-6 pt-3">
                                <label class="form-label" for="meses[]" step="any">Valor Setembro:</label>
                                <input type="number" id="meses[]" name="meses[]" class="form-control" step="0.01">
                            </div>

                            <div class="col-md-6 pt-3">
                                <label class="form-label" for="meses[]" step="any">Valor Outubro:</label>
                                <input type="number" id="meses[]" name="meses[]" class="form-control" step="0.01">
                            </div>

                            <div class="col-md-6 pt-3">
                                <label class="form-label" for="meses[]" step="any">Valor Novembro:</label>
                                <input type="number" id="meses[]" name="meses[]" class="form-control" step="0.01">
                            </div>

                            <div class="col-md-6 pt-3">
                                <label class="form-label" for="meses[]" step="any">Valor Dezembro:</label>
                                <input type="number" id="meses[]" name="meses[]" class="form-control" step="0.01">
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
                                        $mesesN = $_POST["meses"];
                                        $meses = ["Janeiro",
                                                "Feveiro",
                                                "Março",
                                                "Abril",
                                                "Maio",
                                                "Junho",
                                                "Julho",
                                                "Agosto",
                                                "Setembro",
                                                "Outubro",
                                                "Novembro",
                                                "Dezembro"];

                                        
                                        

                                        for($i = 0; $i < count($mesesN); $i++){   
                                            echo"<p>".$mesesN[$i]." - " . $meses[$i] . "</p>";
                                            
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