<?php
    //funções php

    
    date_default_timezone_set("America/Sao_Paulo");
    $data = date("d/m/Y h:i:s"); // mostra a data d = dia, m = mes, y = ano, h = hora, i = minuto, s = segundo
    echo"<p> $data </p>";
    $valor = 1045.88888;
    $valor_arredondado = round($valor);

    echo"<p>Valor arredondado: $valor_arredondado</p>";
    $valor_formatado = number_format($valor, 2, ",");
    echo"<p>Valor sem formatação: $valor</p>";
    echo"<p>Valor formatado: $valor_formatado</p>";
    //exponenciação
    $exp = pow(3, 4);
    //raiz quadrada
    $raiz = sqrt(16);
    //numeros aleatórios
    $aleatorio = rand(1,100);

    if(isset($nome)){
        echo"<p>Nome informado!</p>";
    }else{
        echo "<p>Nome não informado!</p>";
        
    }

    if(is_float($valor)){
        echo "<p>É número flutuante!</p>";
    }
?>