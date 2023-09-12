<?php 
include("conexao.php");
$nome = $_POST['nome'];
$raca = $_POST['raca'];
$especie = $_POST['especie'];
$nome_dono = $_POST['nome_dono'];
$fone_dono = $_POST['fone_dono'];
$mail_dono = $_POST['mail_dono'];


echo "<h1>Dados do usuário</h1>";
echo "Nome: $nome <br>";
echo "Raca: $raca <br>";
echo "Especie: $especie <br>";
echo "Nome Dono: $nome_dono <br>";
echo "Fone Dono: $fone_dono <br>";
echo "Mail Dono: $mail_dono <br>";

$sql = "INSERT INTO animal (nome,raca,especie,nome_dono,fone_dono,mail_dono)";
$sql .= "VALUES ('".$nome."','".$raca."','".$especie."','".$nome_dono."','".$fone_dono."','".$mail_dono."')";

echo $sql;
$result = mysqli_query($con, $sql);

if($result){
echo "Dados cadastrados com sucesso";}
else{
echo "Erro ao tentar cadastrar!";}


?>