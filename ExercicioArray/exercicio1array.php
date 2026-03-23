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
                                    <label class="form-label" for="numero[]">Informe Número de telefone: </label>
                                    <input type="number" id="numero[]" name="numero[]" class="form-control">
                                </div>
                                <div class="col-md-6 pt-3">
                                    <label class="form-label" for="nomes[]">Informe Nome: </label>
                                    <input type="text" id="nomes[]" name="nomes[]" class="form-control">
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
                                        $lista_nome = $_POST["nomes"];
                                        $lista_num = $_POST["numero"];
                                        
                                        
                                        $contatos = array();

                                        for($i = 0; $i < 5; $i++){
                                            $nome_atual = $lista_nome[$i];
                                            $numero_atual = $lista_numero[$i];
                                            // array_key_exists checa se o nome já virou uma chave
                                            // in_array checa se o numero já é um valor dentro da array
                                            if(array_key_exists($nome_atual, $contatos) || in_array($numero_atual, $contatos)){

                                                
                                                continue;//pula para o proximo
                                        
                                            }

                                            $contatos[$nome_atual] = $numero_atual;

                                        }
                                        
                                        //ordena a lista em ordém alfabética
                                        ksort($contatos);


                                        foreach($contatos as $chave => $valor){
                                            echo "<p>Teleforne de $chave: $valor</p>";
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