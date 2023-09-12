<?php
include('conexao.php');
$id = $_GET['id'];
$sql = "select * from animal where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="pt-br">
    

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

<body>
    <div class="container">
        <div class="box">
            <h1 class="titulo">
                Alteração
            </h1>
            <?php 
            echo $row['nome']; 
            ?>
            <form action="altera_exe.php" method="post">
                <input name="id" type="hidden" value="<?php echo $row['id'] ?>">
                <div class="form-group">
                    <label for="nome">Nome: </label>
                    <input type="text" name="nome" id="nome" value="<?php echo $row['nome']; ?>"> 
                </div>

                <div>
                    <label for="raca">Raca: </label>
                    <input type="text" name="raca" id="raca" value="<?php echo $row['raca'] ?>"> 
                   
                   
                </div>


                <div class="form-group">
                    <label for="especie">Espécie: </label>
                    <input type="text" name="especie" id="especie" value="<?php echo $row['especie'] ?>"> 
                </div>
                <div class="form-group">
                    <label for="nome_dono">Nome Dono: </label>
                    <input type="text" name="nome_dono" id="nome_dono" value="<?php echo $row['nome_dono'] ?>"> 
                </div>
                <div class="form-group">
                    <label for="fone_dono">Fone Dono: </label>
                    <input type="text" name="fone_dono" id="fone_dono" value="<?php echo $row['fone_dono'] ?>"> 
                        
                    </select>
                </div>
                <div class="form-group">
                    <label for="mail_dono">Mail Dono: </label>
                    <input type="text"name="mail_dono" id="mail_dono" value="<?php echo $row['mail_dono'] ?>"> 
                        
                    </select>
                </div>
                <input type="submit" value="Enviar" class="buttom">

               
            </form>
        </div>
    </div>
</body>