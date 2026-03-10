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
                                <label class="form-label" for="mes" step="any">Valor do mês:</label>
                                <input type="number" id="mes" name="mes" class="form-control" step="0.01">
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
                                        $mes = $_POST["mes"];

                                        switch ($mes) {
                                            case "1":
                                                echo"1 - Janeiro";
                                                break;
                                            case "2":
                                                echo "2 - Feveiro";
                                                break;
                                            case "3":
                                                echo "3 - Março";
                                                break;
                                            case "4":
                                                echo "4 - Abril";
                                                break;
                                            case "5":
                                                echo "5 - Maio";
                                                break;
                                            case "6":
                                                echo "6 - Junho";
                                                break;
                                            case "7":
                                                echo "7 - Julho";
                                                break;
                                            case "8":
                                                echo "8 - Agosto";
                                                break;
                                            case "9":
                                                echo "9 - Setembro";
                                                break;
                                            case "10":
                                                echo "10 - Outubro";
                                                break;
                                            case "11":
                                                echo "11 - Novembro";
                                                break;
                                            case "12":
                                                echo "12 - Dezembro";
                                                break;
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