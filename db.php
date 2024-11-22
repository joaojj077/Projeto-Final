<?php
function gerarNumeroRastreio() {    
    $letrasIniciais = strtoupper(chr(rand(65, 90)) . chr(rand(65, 90)));

    $numerosMeio = str_pad(rand(0, 999999999), 9, '0', STR_PAD_LEFT);

    $letrasFinais = strtoupper(chr(rand(65, 90)) . chr(rand(65, 90)));

    $numeroRastreio = $letrasIniciais . $numerosMeio . $letrasFinais;

    return $numeroRastreio;
  }

$dbhost = 'localhost';
$dbusername = 'root';
$dbPassword = '';
$dbName = 'formulario-snail';

// $conexao = new mysqli($dbhost,$dbusername,$dbPassword,$dbName);

// if ($conexao->connect_errnor) 
// {
//     echo "Erro";
// }
// else
// {
//     echo "Conexão efetuada com sucesso";
// }

?>