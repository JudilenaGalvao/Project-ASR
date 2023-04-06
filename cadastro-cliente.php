<?php
	if(isset($_POST['submit'])){
		

	include_once('config.php');

	$num_ped = $_POST['num_ped'];
	$cod_cli = $_POST['cod_cli'];
	$cliente = $_POST['cliente'];
	$endereco = $_POST['endereco'];
	$rg = $_POST['rg'];

	$result = mysqli_query($conexao, "INSERT INTO clientes(num_ped,cod_cli,cliente,endereco,rg) VALUES ('$num_ped','$cod_cli','$cliente','$endereco','$rg')");


	}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro clientes | EAJ</title>

        <style>
                body{
                        font-family: Arial, Helvetica, sans-serif;
                        background-image: linear-gradient(to right, rgb(173,255,47), rgb(50,205,50));
                }

                .box{
                        position: absolute;
                        top: 50%;
                        left: 50%;
                        transform: translate(-50%, -50%);
                        background-color: rgba(0,0,0,0.8);
                        padding: 15px;
                        border-radius: 15px;
                        width: 20%;
                        color: white;
                }

                fieldset{
                        border: 3px solid darkgreen;
                }

                legend{
                        border: 1px solid darkgreen;
                        padding: 10px;
                        text-align: center;
                        background-color: darkgreen;
                        border-radius: 8px;
                        color: white;
                }

                .inputbox{
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
                        transition: .5s;
                }

                .inputUser:focus ~ .labelInput, .inputUser:valid ~ .labelInput{
                        top: -20px;
                        font-size: 12px;
                        color: dodgerblue;

                }

                #submit{
                        background-image: linear-gradient(to right, rgb(225,225,225), rgb(0,100,0));
                        width: 100%;
                        border: none;
                        padding: 15px;
                        color: white;
                        font-size: 15px;
                        cursor: pointer;
                        border-radius: 10px;
                }

                #submit:hover{
                        background-image: linear-gradient(to right, rgb(0,100,0), rgb(0,0,0));

                }
		

                #data{
                        border: none;
                        padding: 8px;
                        border-radius:10px;
                        font-size: 15px;
                }

        </style>

</head>


<body>
        <div class="box">
                <form action="cadastro-cliente.php" method="POST">
                        <fieldset>
                        <legend><b>Cadastro cliente</b></legend>
                        <br>
                        <div class= "inputbox">
                                <input type="number" name="num_ped" min="0" step="any" id="num_ped" class="inputUser" required>
                                <label for="num_ped" class="labelInput">Número do pedido</label>
                        </div>
                        <br>
                        <br>
                        <div class= "inputbox">
                                <input type="number" name="cod_cli" min="0" name="cod_cli" id="cod_cli" class="inputUser" required>
                                <label for="cod_cli" class="labelInput">Código do cliente</label>
                        </div>
                        <br>
                        <br>
                        <div class= "inputbox">
                                <input type="text" name="cliente" id="cliente" class="inputUser" required>
                                <label for="cliente" class="labelInput">cliente</label>
                        </div>
			<br>
                        <br>
                        <div class= "inputbox">
                                <input type="text" name="endereco" id="endereco" class="inputUser" required>
                                <label for="Endereco" class="labelInput">Endereço</label>
                        </div>
                        <br>
                        <br>
                        <div class= "inputbox">
                                <input type="text" name="rg" id="rg" class="inputUser" required>
                                <label for="rg" class="labelInput">RG</label>
                        </div>
                        <br>
                        <br>

                        <input type="submit" name="submit" id="submit">
                        </fieldset>
                </form>
        </div>

</body>


</html>
                                                                                                                                                                            156,7         Fim


