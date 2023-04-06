<?php
        if(isset($_POST['submit'])){
               

        include_once('config.php');

        $num_ped = $_POST['num_ped'];
        $cod_prod = $_POST['cod_prod'];
        $descricao = $_POST['descricao'];
        $quantidade = $_POST['quantidade'];
	$preco = $_POST['preco'];
	$total = $_POST['total'];
	$total_geral = $_POST['total_geral'];

        $result = mysqli_query($conexao, "INSERT INTO prod_vendidos(num_ped,cod_prod,descricao,quantidade,preco,total,total_geral) VALUES ('$num_ped','$cod_prod','$descricao','$quantidade','$preco','$total','$total_geral')");


        }

?>




<!DOCTYPE html>
<html lang="pt-br">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro produtos vendidos | EAJ</title>

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

        </style>

</head>

<body>
        <div class="box">
                <form action="cadastro-prod-vendidos.php" method="POST">
                        <fieldset>
                        <legend><b>Cadastro produtos vendidos</b></legend>
                        <br>
                        <div class= "inputbox">
                                <input type="number" name="num_ped" min="0" step="any" id="num_ped" class="inputUser" required>
                                <label for="num_ped" class="labelInput">Número do pedido</label>
                        </div>
                        <br>
                        <br>
                        <div class= "inputbox">
                                <input type="number" name="cod_prod" min="0" step="any" id="cod_prod" class="inputUser" required>
                                <label for="cod_prod" class="labelInput">Código do produto</label>
                        </div>
                        <br>
                        <br>
                        <div class= "inputbox">
                                <input type="text" name="descricao" id="descricao" class="inputUser" required>
                                <label for="descricao" class="labelInput">Descricao</label>
                        </div>
                        <br>
                        <br>
                        <div class= "inputbox">
                                <input type="number" name="quantidade" min="0" step="any" id="quantidade" class="inputUser" required>
                                <label for="quantidade" class="labelInput">Quantidade</label>
                        </div>
                        <br>
                        <br>
                        <div class= "inputbox">
                                <input type="number" name="preco" min="0" step="any" id="preco" class="inputUser" required>
                                <label for="preco" class="labelInput">Preço</label>
                        </div>
                        <br>
                        <br>
                        <div class= "inputbox">
                                <input type="number" name="total" min="0" step="any" id="total" class="inputUser" required>
                                <label for="total" class="labelInput">Total</label>
                        </div>
                        <br>
                        <br>
                        <div class= "inputbox">
                                <input type="number" name="total_geral" min="0" step="any" id="total_geral" class="inputUser" required>
                                <label for="total_geral" class="labelInput">Total geral</label>
			 </div>
                        <br>
                        <br>

                        <input type="submit" name="submit" id="submit">
                        </fieldset>
                </form>
        </div>

</body>


</html>

