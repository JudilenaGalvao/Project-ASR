<?php

	include_once('config.php');


	if(isset($_POST['update'])){

                $num_ped = $_POST['num_ped'];
		$cod_prod = $_POST['cod_prod'];
                $descricao = $_POST['descricao'];
                $quantidade = $_POST['quantidade'];
                $preco = $_POST['preco'];
                $total = $_POST['total'];
		$total_geral = $_POST['total_geral'];


		$sqlUpdate = "UPDATE prod_vendidos SET cod_prod='$cod_prod', descricao='$descricao', quantidade='$quantidade', preco='$preco', total='$total', total_geral='$total_geral'
		WHERE num_ped='$num_ped'";


		$result = $conexao->query($sqlUpdate);
	}
	
	header('Location: alt-prod-vendidos.php');

?>
