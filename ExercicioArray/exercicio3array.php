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
                            <?php
                            for($i = 0; $i < 5; $i++)
                                echo '<div class="col-md-6 pt-3">
                                    <label class="form-label" for="nomes[]">Informe Nome: </label>
                                    <input type="text" id="nomes[]" name="nomes[]" class="form-control">
                                </div>
                                <div class="col-md-3 pt-3">
                                    <label class="form-label" for="cod[]" >Informe Código: </label>
                                    <input type="number" id="cod[]" name="cod[]" class="form-control">
                                    <label class="form-label" for="price[]" step="any">Informe Preço: </label>
                                    <input type="number" id="price[]" name="price[]" class="form-control" step="0.01">
                                    </div>';
                            ?>

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
                                        $nomes = $_POST["nomes"];
                                        $cods = $_POST["cod"];
                                        $prices = $_POST["price"];
                                        
                                        
                                        $produtos = array();
                                        
                                        for($i = 0; $i < 5; $i++){

                                            $produtos[$cods[$i]] = array(
                                                "nome" => $nomes[$i],
                                                "preco" => (float)$prices[$i]
                                            );
                                            

                                        }

                                        foreach($produtos as $cods => $valor){
                                            if($valor["preco"] > 100){
                                                $produtos[$cods]["preco"] = $valor["preco"] - (($valor["preco"] * 10)/100);
                                            }
                                        }


                                        //permite  criar nova regra de ordenação
                                        uasort($produtos, function ($a, $b) {
                                            return strcmp($a["nome"], $b["nome"]); //strcmp ordena em ordem alfabética
                                        });

                                        foreach($produtos as $cod => $valor){
                                            $nome_produto = $valor["nome"];
                                            $preco_formatado = number_format($valor["preco"],2,",",".");

                                            echo"<p>Nome do produto: $nome_produto / Cód: $cod / Preço: R$$preco_formatado</p>";
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