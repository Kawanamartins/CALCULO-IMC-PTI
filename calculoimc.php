<?php
// Função para classificar o IMC
function classificarIMC($imc) {
    // Array com as faixas e classificações
    $faixas = array(
        array("faixa" => 18.5, "classificacao" => "Magreza"),
        array("faixa" => 24.9, "classificacao" => "Saudável"),
        array("faixa" => 29.9, "classificacao" => "Sobrepeso"),
        array("faixa" => 34.9, "classificacao" => "Obesidade Grau I"),
        array("faixa" => 39.9, "classificacao" => "Obesidade Grau II"),
        array("faixa" => PHP_INT_MAX, "classificacao" => "Obesidade Grau III")
    );

    // Percorre as faixas para encontrar a classificação
    foreach ($faixas as $faixa) {
        if ($imc <= $faixa['faixa']) {
            echo "Atenção, seu IMC é $imc, e você está classificado como " . $faixa['classificacao'];
            return;
        }
    }
}

// Chamada da função com um valor numérico
classificarIMC(30.30);
?>


