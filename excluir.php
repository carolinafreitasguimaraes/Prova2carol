<?php
     include('conexao.php');
     $id = $_GET['id'];
     $sql = "select * from animal where id=$id";
     $result = mysqli_query($con,$sql);



    echo "<h1>Excluir</h1>";
    echo "<p>Código: $id</p>";
    $sql = "delete from animal where id = $id";

    

    $result = mysqli_query($con, $sql);
    if($result)
        echo "Dados deletados com sucesso!<br>";
    else
        echo "Erro ao deletar dados: !";
?>

<a href="index.php">Voltar</a>