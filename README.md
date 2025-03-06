# 🏋️‍♂️ Cálculo de IMC em PHP

Este projeto calcula o Índice de Massa Corporal (**IMC**) e classifica o resultado de acordo com faixas predefinidas.

## 📌 Requisitos

- **XAMPP** instalado ([Baixe aqui](https://www.apachefriends.org/index.html))
- PHP configurado corretamente
- Navegador web (Google Chrome, Firefox, etc.)

## 🚀 Como Usar

### 1️⃣ Instalar e Configurar o XAMPP

1. Baixe e instale o [XAMPP](https://www.apachefriends.org/index.html).
2. Abra o **Painel de Controle do XAMPP** e inicie o **Apache**.

### 2️⃣ Configurar o Arquivo PHP

1. Crie o arquivo `calculoimc.php` dentro da pasta `C:\xampp\htdocs\`.
2. Copie e cole o seguinte código:

```php
<?php
// Função para classificar o IMC
function classificarIMC($imc) {
    $faixas = [
        ["min" => 0, "max" => 18.5, "classificacao" => "Magreza"],
        ["min" => 18.51, "max" => 24.9, "classificacao" => "Saudável"],
        ["min" => 25.0, "max" => 29.9, "classificacao" => "Sobrepeso"],
        ["min" => 30.0, "max" => 34.9, "classificacao" => "Obesidade Grau I"],
        ["min" => 35.0, "max" => 39.9, "classificacao" => "Obesidade Grau II"],
        ["min" => 40.0, "max" => PHP_INT_MAX, "classificacao" => "Obesidade Grau III"]
    ];

    foreach ($faixas as $faixa) {
        if ($imc >= $faixa['min'] && $imc <= $faixa['max']) {
            echo "Atenção, seu IMC é $imc, e você está classificado como " . $faixa['classificacao'];
            return;
        }
    }
}
// Testando com diferentes valores de IMC
classificarIMC(25.30);
?>
```

### 3️⃣ Configurar o Arquivo PHP

1. Abra um navegador e digite na barra de endereço: http://localhost/calculoimc.php

Ou clique diretamente no link abaixo:
[Acessar o cálculo de IMC](http://localhost/calculoimc.php)

2. Pressione Enter e veja o resultado.

## 📊 Classificação do IMC

| Faixa de IMC          | Classificação              |
|-----------------------|----------------------------|
| Até 18.5              | Magreza                    |
| 18.51 - 24.9          | Saudável                   |
| 25.0 - 29.9           | Sobrepeso                  |
| 30.0 - 34.9           | Obesidade Grau I           |
| 35.0 - 39.9           | Obesidade Grau II          |
| Acima de 39.9         | Obesidade Grau III         |

## 🛠 Melhorias Futuras

- Criar um formulário HTML para inserir o peso e altura e calcular o IMC automaticamente.
- Melhorar a interface para exibir os resultados de forma mais amigável.
- Adicionar suporte a mais formatos de entrada.

Feito com ❤️ para aprendizado de PHP.
