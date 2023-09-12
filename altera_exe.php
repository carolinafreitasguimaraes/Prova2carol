<?php
include('conexao.php');
$id = $_POST['id'];


$nome = $_POST['nome'];
$raca = $_POST['raca'];
$especie = $_POST['especie'];
$nome_dono = $_POST['nome_dono'];
$fone_dono = $_POST['fone_dono'];
$mail_dono = $_POST['mail_dono'];


echo "<h1>Alteração de dados</h1>";

$sql = "update animal set 
    nome = '$nome',
    raca = '$raca',
    especie = '$especie',
    nome_dono = '$nome_dono',
    fone_dono = '$fone_dono',
    mail_dono = '$mail_dono'
    where id = $id";

$result = mysqli_query($con, $sql);
if ($result)
    echo "Dados alterados com sucesso!<br>";
else
    echo "Erro ao alterar dados: " . $mysqli_error($con) . "!";
?>

<a href="index.php">Voltar</a>
