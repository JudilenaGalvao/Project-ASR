<?php

        include_once('config.php');

        $sql = "SELECT * FROM prod_vendidos ORDER BY num_ped DESC";

        $result = $conexao->query($sql);




?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>M | EAJ</title>

        
        <style>
                body{
                        font-family: Arial, Helvetica, sans-serif;
                        background-image: linear-gradient(to right, rgb(20,147,220), rgb(17,54,71));
                        color: white;
                        text-align: center;
                }

                .table-bg{
                        background: rgba(0,0,0,0.5);
                        border-radius: 15px;
                }

        </style>
</head>

<body>

        <div class="m-5">
                        <table class="table text-white table-bg">
                        <thead>
                                 <tr>

                                     <th scope="col">num_ped</th>
				     <th scope="col">cod_prod</th>
                                     <th scope="col">descricao</th>
                                     <th scope="col">quantidade</th>
                                     <th scope="col">preco</th>
                                     <th scope="col">total</th>
				     <th scope="col">total_geral</th>
				     <th scope="col">...</th>

                                 </tr>
                        </thead>

                        <tbody>
                                <?php

                                        while($user_data = mysqli_fetch_assoc($result)){
                                                echo "<tr>";
                                                echo "<td>".$user_data['num_ped']."</td>";
                                                echo "<td>".$user_data['cod_prod']."</td>";
                                                echo "<td>".$user_data['descricao']."</td>";
						echo "<td>".$user_data['quantidade']."</td>";
                                                echo "<td>".$user_data['preco']."</td>";
                                                echo "<td>".$user_data['total']."</td>";
						echo "<td>".$user_data['total_geral']."</td>";
						echo "<td>
							<a class='btn btn-primary' href='edit-cad-prod-vendidos.php?num_ped=$user_data[num_ped]'>
                                                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                                        <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168                                                        l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5                                                        v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.                                                        468-.325z'/>
                                                        </svg>
                                                        </a>  	
						</td>";
                                                echo "</tr>";
                                        }
                                ?>

                        </tbody>
                </table>
        </div>
</body>

</html>
                                                                                                                                                                            76,7          Fim


