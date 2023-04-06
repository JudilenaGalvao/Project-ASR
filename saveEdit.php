<?php

	include_once('config.php');

	if(isset($_POST['update'])){

                  $num_ped = $_POST['num_ped'];
      		  $data = $_POST['data'];
                  $cod_cli = $_POST['cod_cli'];
                  $cliente = $_POST['cliente'];
                  $endereco = $_POST['endereco'];
                  $rg = $_POST['rg'];
		  $total_geral = $_POST['total_geral'];


		  $sqlUpdate = "UPDATE venda_cliente SET data='$data', cod_cli='$cod_cli', cliente='$cliente', endereco='$endereco', rg='$rg', total_geral='$total_geral'
			  WHERE num_ped='$num_ped'";

		$result = $conexao->query($sqlUpdate);

	}

	header('Location: alt-venda-clientes.php');

?>
