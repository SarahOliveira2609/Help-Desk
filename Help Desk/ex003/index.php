<?php 
    if(isset($_POST['submit']))
    {
        //print_r($_POST['nome']);
       // print_r('<br>');
       //print_r($_POST['departamento']);
        //print_r('<br>');
       //print_r($_POST['email']);
        //print_r('<br>');
       //print_r($_POST['equipamento']);
        //print_r('<br>');
       //print_r($_POST['numeq']);
        //print_r('<br>');
        //print_r($_POST['problem']);}

        include_once('config.php');

      $nome = $_POST['nome'];
      $departamento = $_POST['departamento'];
      $email = $_POST['email'];
      $telefone = $_POST['telefone'];
      $equipamento = $_POST['equipamento'];
      $numeq = $_POST['numeq'];
      $problem = $_POST['problem'];

      $result = mysqli_query($conexao, "INSERT INTO usuário(nome,departamento,email,telefone,equipamento,numeq,problem) VALUES ('$nome','$departamento','$email','$telefone','$equipamento','$numeq','$problem')");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Suporte</title>
</head>
<body>
    <div class="box">
    <form action="index.php" method="post">
        <fieldset>
            <legend><b>Network Connetion</b></legend>
            <h3>Informações do Usuário</h3>
            <div class="inputBox">
                <label for="nome" class="labelInput">Usuário:</label><br>
                <input type="text" name="nome" id="nome" required class="inputUser"><br><br>
            </div>
            <div class="inputBox">
                <label for="departamento" class="labelInput">Departamento:</label><br>
                <input type="text" name="departamento" id="departamento" required class="inputUser"><br>
            </div>
            <div class="inputBox">
                <label for="email" class="labelInput">E-mail:</label><br>
                <input type="text" name="email" id="email" class="inputUser"><br><br>
            </div>
            <div class="inputBox">
                <label for="telefone" class="labelInput">Telefone:</label><br>
                <input type="text" name="telefone" id="telefone" class="inputUser"><br><br>
            </div>
            <h3>Informações do Problema</h3>
                <p>Equipamentos:</p>
                <label for="computadores" class="equip">Computadores</label>
                <input type="radio" name="equipamento" id="computadores" value="computadores" required>
                <label for="impressora" class="equip">Impressoras</label>
                <input type="radio" name="equipamento" id="impressora" value="impressora" required>
                <label for="monitor" class="equip">Monitores</label>
                <input type="radio" name="equipamento" id="monitor" value="monitor" required>
                <label for="rede" class="equip">Dispositivos de Rede</label>
                <input type="radio" name="equipamento" id="Dispositivos de Rede" value="rede" required>
                <label for="telefone" class="equip">Telefones</label>
                <input type="radio" name="equipamento" id="telefone" value="telefone" required>
                <label for="servidor" class="equip">Servidores</label>
                <input type="radio" name="equipamento" id="servidor" value="servidor" required>
                <label for="celular" class="equip">Dispositivos Móveis</label>
                <input type="radio" name="equipamento" id="celular" value="celular" required>
                <label for="perifericos" class="equip">Periféricos</label>
                <input type="radio" name="equipamento" id="perifericos" value="perifericos" required>
                <label for="video" class="equip">Equipamentos de Vídeos</label>
                <input type="radio" name="equipamento" id="Equipamentos de video" value="video" required>
            <br><br>
            <div class="inputBox">
                <label for="numeq" class="labelInput">Número de Equipamento:</label><br>
                <input type="text" name="numeq" id="numeq" class="inputUser">
            </div><br>
            <div class="inputBox">
                <label for="problem" class="labelInput">Descrição do problema</label><br><br>
                <textarea name="problem" id="problem" cols="30" rows="5" placeholder="Relate seu problema de forma resumida" class="inputUser"></textarea>
            </div><br><br>
           <input type="submit"  id="submit" name="submit">
        </fieldset>
    </form>
    </div>
</body>
</html>