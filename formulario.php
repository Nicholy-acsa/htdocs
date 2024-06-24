<?php
if(isset($_POST['submit']))
{
    //print_r('Nome:' . $_POST['Nome']);
    //print_r('<br>');
    //print_r('Email: ' . $_POST['Email']);

    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['genero'];
    $data_nascimento = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];
    $feedback = $_POST['feedback'];

    $result = mysqli_query($conexao, "INSERT INTO usuario(nome,email,telefone,sexo,data_nascimento,cidade,estado,endereco,feedback)
    VALUES ('$nome','$email','$telefone','$sexo','$data_nascimento','$cidade','$estado','$endereco','$feedback')");

}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário | NICHOLY</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
        
        }
        .box{
            color: black;
            position: relative;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.4);
            padding: 15px;
            border-radius: 17px;
            width: 30%;
        }
        fieldset{
            border: 3px solid white;
        }
        legend{
            border: 1px solid black;
            padding: 10px;
            text-align: center;
            background-color:white;
            border-radius: 9px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: 5px;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: black;
        }
        #data_nascimento{
            border: none;
            padding: 9px;
            border-radius: 11px;
            outline: none;
            font-size: 17px;
        }
        #submit{
            background-color: black;
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 17px;
            cursor: pointer;
            border-radius: 11px;
        }
        #submit:hover{
            background-color: black;
        }
        
        .box h1{
            text-align: center;
            padding-top: 4px;
            padding-bottom: 4px;
            font-family: "Ready_to_party";
            font-size: xx-large;
        }
        h1 img{
            width: 25px;
            height: 25px;
        }
    </style>
</head>
<body>
    <div class="box">
        <h1>Giro Gv <img src="turismo.png"></h1>
        <form action="formulario.php" method="POST">
        <fieldset>
            <legend> Formulário de FeedBack </legend>
            <br>
            <div class="inputBox">
                <input type="text" name="nome" id="nome" class="inputUser" required>
                <label for="nome" class="labelInput"> Nome completo </label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="email" id="email" class="inputUser" required>
                <label for="email" class="labelInput">Email</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                <label for="telefone" class="labelInput">Telefone</label>
            </div>
            <p>Sexo</p>
            <input type="radio" id="feminino" name="genero" value="feminino" required>
            <label for="feminino">Feminino</label>
            <input type="radio" id="masculino" name="genero" value="masculino" required>
            <label for="masculino">Masculino</label>
            <input type="radio" id="outro" name="genero" value="outro" required>
            <label for="outro">Outro</label>
            <br><br>
            <label for="data_nascimento"><b>Data de nascimento:</b></label>
            <input type="date" name="data_nascimento" id="data_nascimento" required>
            <br><br>
            <div class="inputBox">
                <input type="text" name="cidade" id="cidade" class="inputUser" required>
                <label for="cidade" class="labelInput">Cidade</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="estado" id="estado" class="inputUser" required>
                <label for="estado" class="labelInput">Estado</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="endereco" id="endereco" class="inputUser" required>
                <label for="endereco" class="labelInput">Endereço</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="feedback" id="feedback" class="inputUser" required>
                <label for="feedback" class="labelInput">O que você gostaria de acrescentar no site?</label>
            </div>
            <br>
            <input type="submit" name="submit" id="submit">
            <br>
            </div>
        </fieldset>
    </div>
</body>
</html>
