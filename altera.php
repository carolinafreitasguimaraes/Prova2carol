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
                Cadastro Fluxo
            </h1>
            <form action="altera_exe.php" method="post">
                <input name="id" type="hidden" value="<?php echo $row['id'] ?>">
                <div class="form-group">
                    <label for="nome">Nome: </label>
                    <input type="varchar" name="nome" id="nome" class="form-control" value="<?php echo $row['nome'] ?>">
                </div>

                <div>
                    <label for="raca">Raca: </label>
                    <input type="varchhar" name="raca" value="entrada" required <?php if($row['raca'] == 'entrada'){ echo "checked"; } else { echo "";} ?>>
                    <label for="raca">Entrada</label>
                    <input type="varchar" name="raca" value="saida" required <?php if($row['raca'] == 'saida'){ echo "checked"; } else { echo "";} ?>>
                    <label for="raca">Saída</label>
                </div>


                <div class="form-group">
                    <label for="especie">Espécie: </label>
                    <input type="varchar" value="<?php echo $row['especie'] ?>" name="especie" id="especie" required maxlength="13" class="form-control" step=".01">
                </div>
                <div class="form-group">
                    <label for="nome_dono">Nome Dono: </label>
                    <input type="text" name="nome_dono" value="<?php echo $row['nome_dono'] ?>" id="nome_dono" required maxlength="150" class="form-control">
                </div>
                <div class="form-group">
                    <label for="fone_dono">Fone Dono: </label>
                    <select class="form-control" name="fone_dono">
                        <option value="sim" <?php if($row['fone_dono'] == 'sim'){ echo "selected"; } else { echo "";} ?>>Sim</option>
                        <option value="nao" <?php if($row['fone_dono'] == 'nao'){ echo "selected"; } else { echo "";} ?>>Não</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="mail_dono">Mail Dono: </label>
                    <select class="form-control" name="mail_dono">
                        <option value="sim" <?php if($row['mail_dono'] == 'sim'){ echo "selected"; } else { echo "";} ?>>Sim</option>
                        <option value="nao" <?php if($row['mail_dono'] == 'nao'){ echo "selected"; } else { echo "";} ?>>Não</option>
                    </select>
                </div>
                <input type="submit" value="Enviar" class="buttom">

               
            </form>
        </div>
    </div>
</body>