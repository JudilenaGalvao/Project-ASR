<?php
        if(!empty($_GET['num_ped'])){
                
	include_once('config.php');

	$num_ped = $_GET['num_ped'];


	$sqlSelect = "SELECT * FROM prod_vendidos WHERE	num_ped=$num_ped";

	$result = $conexao->query($sqlSelect);


	if($result->num_rows > 0){

	
	while($user_data = mysqli_fetch_assoc($result)){
	 
		$cod_prod = $user_data['cod_prod'];
        	$descricao = $user_data['descricao'];
	        $quantidade = $user_data['quantidade'];
       	 	$preco = $user_data['preco'];
        	$total = $user_data['total'];
        	$total_geral = $user_data['total_geral'];
	
	}
	
	}
	else{
		header('Location: menu.php');
	}


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

                #update{
                        background-image: linear-gradient(to right, rgb(225,225,225), rgb(0,100,0));
                        width: 100%;
                        border: none;
                        padding: 15px;
                        color: white;
                        font-size: 15px;
                        cursor: pointer;
                        border-radius: 10px;
                }

                #update:hover{
                        background-image: linear-gradient(to right, rgb(0,100,0), rgb(0,0,0));

                }

        </style>

</head>

<body>
        <div class="box">
                <form action="saveEdit2.php" method="POST">
                        <fieldset>
                        <legend><b>Cadastro produtos vendidos</b></legend>
                        <br>
                        <div class= "inputbox">
			<input type="number" name="num_ped" min="0" step="any" id="num_ped" class="inputUser" value="<?php  echo $num_ped?>" required>
                                <label for="num_ped" class="labelInput">Número do pedido</label>
                        </div>
                        <br>
                        <br>
                        <div class= "inputbox">
			<input type="number" name="cod_prod" min="0" step="any" id="cod_prod" class="inputUser" value="<?php echo $cod_prod?>"required>
                                <label for="cod_prod" class="labelInput">Código do produto</label>
                        </div>
                        <br>
                        <br>
                        <div class= "inputbox">
			<input type="text" name="descricao" id="descricao" class="inputUser" value="<?php echo $descricao?>"required>
                                <label for="descricao" class="labelInput">Descricao</label>
                        </div>
                        <br>
                        <br>
                        <div class= "inputbox">
			<input type="number" name="quantidade" min="0" step="any" id="quantidade" class="inputUser" value="<?php echo $quantidade?>"required>
                                <label for="quantidade" class="labelInput">Quantidade</label>
                        </div>
                        <br>
                        <br>
                        <div class= "inputbox">
			<input type="number" name="preco" min="0" step="any" id="preco" class="inputUser" value="<?php echo $preco?>"required>
                                <label for="preco" class="labelInput">Preço</label>
                        </div>
                        <br>
                        <br>
                        <div class= "inputbox">
			<input type="number" name="total" min="0" step="any" id="total" class="inputUser" value="<?php echo $total?>"required>
                                <label for="total" class="labelInput">Total</label>
                        </div>
                        <br>
                        <br>
                        <div class= "inputbox">
			<input type="number" name="total_geral" min="0" step="any" id="total_geral" class="inputUser" value="<?php echo $total_geral?>"required>
                                <label for="total_geral" class="labelInput">Total geral</label>
                         </div>
                        <br>
                        <br>
			<input type="hidden" name="num_ped" value="<?php echo $num_ped?>">
                        <input type="submit" name="update" id="update">
                        </fieldset>
                </form>
        </div>

</body>


</html>
                                                                                                                                                                            171,1         99%


