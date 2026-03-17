<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" initial-scale="1.0">
    <title>Exercicio 2 rep</title>
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
                                <label class="form-label" for="dia" step="any">Dia:</label>
                                <input type="text" id="dia" name="dia" class="form-control" step="0.01">
                            </div>
                            <div class="col-md-6 pt-3">
                                <label class="form-label" for="mes" step="any">Mês:</label>
                                <input type="text" id="mes" name="mes" class="form-control" step="0.01">
                            </div>
                            <div class="col-md-6 pt-3">
                                <label class="form-label" for="ano" step="any">Ano:</label>
                                <input type="text" id="ano" name="ano" class="form-control" step="0.01">
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
                                        $dia = $_POST["dia"];
                                        $mes = $_POST["mes"];
                                        $ano = $_POST["ano"];
                                         
                                        //checkdate barra datas falsas
                                        if (checkdate($mes, $dia, $ano)){
                                            
                                            //converte para hora, min, seg, mes, dia e ano
                                            $time = mktime(0,0,0, $mes, $dia, $ano);

                                            // usa date para mostrar data
                                            echo date("d/m/Y", $time);
                                        
                                        }else{
                                            echo "Erro data inválida";
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