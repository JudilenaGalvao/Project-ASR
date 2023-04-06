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
							  <a class='btn btn-danger' href='delete-prod-vendidos.php?num_ped=$user_data[num_ped]'>
                                                        <svg xmlns='http://www.w3.org/2000/svg width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                                          <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H                                                          7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8                                                             5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                                                        </svg>                                                          

                                                        </a>

							
							</td>";
                                                echo "</td>";
                                        }
                                ?>

                        </tbody>
                </table>
        </div>
</body>

</html>
                                                                                                                                                                            76,7          Fim


