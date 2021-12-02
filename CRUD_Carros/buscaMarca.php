<?php
//conexão
include_once 'php_action/db_connect.php';
//header
include_once 'include/header.php';
//mensagem
include_once 'include/mensagem.php';
?>


    <div class="row">
        <div class="col s12 m6 push-m3">
            <h3 class="light">Carros: Busca Modelo</h3>


            <table class="striped">
                <thead>

                <tr>
                    <th>Categoria:</th>
                    <th>Modelo:</th>
                    <th>Marca:</th>
                    <th>Cor:</th>
                    <th>Ano:</th>
                    <th>Combustivél:</th>
                </tr>

                </thead>

                <tbody>



                <?php

                $marca = mysqli_escape_string($connect, $_POST['marca']);


                $sql = "SELECT * FROM carros WHERE marca = '$marca'";

                $resultado = mysqli_query($connect, $sql);

                if (mysqli_num_rows($resultado) > 0):
                    while ($dados = mysqli_fetch_array($resultado)):

                        ?>
                        <tr>
                            <td bgcolor="orange" style="color: white" ><?php echo $dados['marca'] ?></td>
                            <td><?php echo $dados['modelo'] ?></td>
                            <td><?php echo $dados['cor'] ?></td>
                            <td><?php echo $dados['ano'] ?></td>
                            <td><?php echo $dados['combustivel'] ?></td>
                            <td><?php echo $dados['categoria'] ?></td>

                        </tr>
                    <?php
                    endwhile;
                else: ?>
                    <tr>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                <?php
                endif;
                ?>
                </tbody>
            </table>
            <br>


            <a href="index.php" class="btn green"> Lista de Carros </a>
        </div>

    </div>



<?php
//footer
include_once 'include/footer.php';
?>

