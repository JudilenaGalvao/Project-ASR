<?php

	if(!empty($_GET['num_ped'])){


	include_once('config.php');

        $num_ped = $_GET['num_ped'];


        $sqlSelect = "SELECT * FROM prod_vendidos WHERE num_ped=$num_ped";

        $result = $conexao->query($sqlSelect);


        if($result->num_rows > 0){


        while($user_data = mysqli_fetch_assoc($result)){

                $sqlDelete = "DELETE FROM prod_vendidos WHERE num_ped='$num_ped'";
		$resultDelete = $conexao->query($sqlDelete);

        }

        }
	}
	header('Location: ex-prod-vendidos.php');

?>
