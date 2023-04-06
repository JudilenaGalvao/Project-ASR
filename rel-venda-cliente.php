<?php

        include_once('config.php');

        $sql = "SELECT * FROM venda_cliente ORDER BY num_ped DESC";

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
				     <th scope="col">data</th>
                                     <th scope="col">cod_cli</th>
                                     <th scope="col">cliente</th>
                                     <th scope="col">endereco</th>
                                     <th scope="col">rg</th>
                                     <th scope="col">total_geral</th>

                                 </tr>
                        </thead>

                        <tbody>
                                <?php

                                        while($user_data = mysqli_fetch_assoc($result)){
                                                echo "<tr>";
                                                echo "<td>".$user_data['num_ped']."</td>";
                                                echo "<td>".$user_data['data']."</td>";
                                                echo "<td>".$user_data['cod_cli']."</td>";
                                                echo "<td>".$user_data['cliente']."</td>";
                                                echo "<td>".$user_data['endereco']."</td>";
                                                echo "<td>".$user_data['rg']."</td>";
                                                echo "<td>".$user_data['total_geral']."</td>";
                                                echo "</td>";
                                        }
                                ?>

                        </tbody>
                </table>
        </div>
</body>

</html>
                                                                                                                                                                            78,7          Fim


