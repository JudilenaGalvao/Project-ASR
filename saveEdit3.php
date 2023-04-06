<?php

	include_once('config.php');

	if(isset($_POST['update'])){
	
		$num_ped = $_POST['num_ped'];
		$cod_cli = $_POST['cod_cli'];
                $cliente = $_POST['cliente'];
                $endereco = $_POST['endereco'];
		$rg = $_POST['rg'];


		$sqlUpdate = "UPDATE clientes SET cod_cli='$cod_cli', cliente='$cliente', endereco='$endereco', rg='$rg' WHERE num_ped='$num_ped'";

		$result = $conexao->query($sqlUpdate);

	}
	header('Location: alt-clientes.php');
	

	


?>
