<?php
       if(!empty($_GET['num_ped'])){

        include_once('config.php');
	
	$num_ped=$_GET['num_ped'];

	$sqlSelect="SELECT * FROM venda_cliente WHERE num_ped=$num_ped";

	$result = $conexao->query($sqlSelect);

	if($result->num_rows > 0 ){
	
		while($user_data = mysqli_fetch_assoc($result)){
       		  $data = $user_data['data'];
        	  $cod_cli = $user_data['cod_cli'];
       		  $cliente = $user_data['cliente'];
       		  $endereco = $user_data['endereco'];
        	  $rg = $user_data['rg'];
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
        <title>Cadastro venda cliente | EAJ</title>

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
		<form action="saveEdit.php" method="POST">
		<fieldset>
                        <legend><b>Cadastro venda cliente</b></legend>
                        <br>
                        <div class= "inputbox">
			<input type="number" name="num_ped" min="0" step="any" id="num_ped" class="inputUser" value="<?php echo $num_ped ?>" required>
                                <label for="num_ped" class="labelInput">Número do pedido</label>
                        </div>
                        <br>
                        <br>
                        <div class= "inputbox">
			<input type="date" name="data" id="data" value="<?php echo $data ?>" required>
                                <label for="data" class="labelInput"></label> Data da compra
                        </div>
                        <br>
                        <br>
                        <div class= "inputbox">
			<input type="number" name="cod_cli" min="0" name="cod_cli" id="cod_cli" class="inputUser" value="<?php echo $cod_cli ?>"required>
                                <label for="cod_cli" class="labelInput">Código do cliente</label>
                        </div>
                        <br>
                        <br>
                        <div class= "inputbox">
			<input type="text" name="cliente" id="cliente" class="inputUser" value="<?php echo $cliente ?>" required>
                                <label for="cliente" class="labelInput">cliente</label>
                        </div>
                        <br>
                        <br>
                        <div class= "inputbox">
			<input type="text" name="endereco" id="endereco" class="inputUser" value="<?php echo $endereco ?>" required>
                                <label for="Endereco" class="labelInput">Endereço</label>
                        </div>
                        <br>
                        <br>
                        <div class= "inputbox">
			<input type="text" name="rg" id="rg" class="inputUser" value="<?php echo $rg ?>" required>
                                <label for="rg" class="labelInput">RG</label>
                        </div>
                        <br>
                        <br>
                        <div class= "inputbox">
			<input type="number" name="total_geral" min="0" step="any" id="total_geral" class="inputUser" value="<?php echo $total_geral?>" required>
                                <label for="total_geral" class="labelInput">Total geral</label>
                        </div>
                        <br>
			<br>
			<input type="hidden" name="num_ped" value="<?php echo $num_ped ?>">
			<input type="submit" name="update" id="update">
                        </fieldset>
                </form>
        </div>

</body>


</html>

