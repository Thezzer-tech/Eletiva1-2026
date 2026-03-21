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
                                <label class="form-label" for="word" step="any">Frase:</label>
                                <input type="text" id="word" name="word" class="form-control" step="0.01">
                            </div>

                        </form>
                        <div class="mt-5">
                            <div class="text-center">
                                <?php
                                    if($_SERVER["REQUEST_METHOD"] == "POST"){
                                        $frase = $_POST["word"];

                                        $frase_limpa = str_replace([".",",","!","?",";",":"], "", $frase);

                                        $palavras = explode(" ", $frase_limpa);

                                        $total_palavras = count($palavras);

                                        $maior_palavra = "";

                                        foreach($palavras as $palavra){

                                            if(strlen($palavra) > strlen($maior_palavra)){
                                                $maior_palavra = $palavra;
                                            }
                                        }

                                        echo "<p>Frase analisada: '" . $frase . "'\n</p><br>";
                                        echo "<p>Número total de palavras: " . $total_palavras . "\n</p><br>";
                                        echo "<p>Maior palavra da frase: " . $maior_palavra . "\n</p>";
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