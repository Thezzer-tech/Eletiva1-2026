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
                                    <label class="form-label" for="nota1[]" step="any">Informe nota1: </label>
                                    <input type="number" id="nota1[]" name="nota1[]" class="form-control" step="0.01">
                                    <label class="form-label" for="nota2[]" step="any">Informe nota2: </label>
                                    <input type="number" id="nota2[]" name="nota2[]" class="form-control" step="0.01">
                                    <label class="form-label" for="nota3[]" step="any">Informe nota3: </label>
                                    <input type="number" id="nota3[]" name="nota3[]" class="form-control" step="0.01">
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
                                        $notas1 = $_POST["nota1"];
                                        $notas2 = $_POST["nota2"];
                                        $notas3 = $_POST["nota3"];
                                        
                                        $media_notas = array();
                                        
                                        for($i = 0; $i < 5; $i++){
                                            $nome_atual = $lista_nome[$i];
                                            $media = ($notas1[$i] + $notas2[$i] + $notas3[$i]) / 3;

                                            $mapa_medias[$nome_atual] = round($media, 2);
                                        }

                                        arsort($mapa_medias);

                                        foreach($mapa_medias as $nome => $media){

                                            echo "<p>Nome: ".$nome." / Média: ".$media." </p>";

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