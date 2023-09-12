<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    include('conexao.php');
    $sql = "select * FROM fluxo_caixa";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
    ?>
    <h1>Lista de Animais</h1> 
    <table align="center" border="1" width="900">
      
    
            <th>Id</th>
            <th>Nome</th>
            <th>Raca</th>
            <th>Especie</th>
            <th>Nome Dono</th>
            <th>Fone Dono</th>
            <th>Mail Dono</th>
            
            <?php
            do{
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['nome']."</td>";
            echo "<td>".$row['raca']."</td>";
            echo "<td>".$row['especie']."</td>";
            echo "<td>".$row['nome_dono']."</td>";
            echo "<td>".$row['fone_dono']."</td>";
            echo "<td>".$row['mail_dono']."</td>";
            echo "<td>



            <a href='altera_animal.php?id=".$row['id']."'>".$row['historico']."</a></td>";
            echo "<td>".$row['cheque']."</td>";

            echo "<td><a href='excluir_animal.php?id=".$row['id']."'>Excluir</a>
            </td>";

            echo "<td> <a href='altera_animal.php?id=".$row['id']."'>Alterar</a>
            </td>";

            
            echo "</tr>";
        } while($row = mysqli_fetch_array($result));
          
        ?>
    </table>

    <br>
    <a href="index.php">Voltar</a>
</body>
</html>