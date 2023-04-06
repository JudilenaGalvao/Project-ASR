<?php

        include_once('config.php');

        $sql = "SELECT * FROM clientes ORDER BY num_ped DESC";

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
                        background: rgba(0,0,0,0.8);
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
				     <th scope="col">cod_cli</th>
                                     <th scope="col">cliente</th>
                                     <th scope="col">endereco</th>
				     <th scope="col">rg</th>
				     <th scope="col">...</th>

                                 </td>
                        </thead>

                        <tbody>
                                <?php

                                        while($user_data = mysqli_fetch_assoc($result)){
                                                echo "<tr>";
                                                echo "<td>".$user_data['num_ped']."</td>";
                                                echo "<td>".$user_data['cod_cli']."</td>";
                                                echo "<td>".$user_data['cliente']."</td>";
                                                echo "<td>".$user_data['endereco']."</td>";
						echo "<td>".$user_data['rg']."</td>";
						echo "<td>
							<a class='btn btn-danger' href='delete-clientes.php?num_ped=$user_data[num_ped]'>
                                                        <svg xmlns='http://www.w3.org/2000/svg width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                                          <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H                                                          7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8                                                             5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
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

