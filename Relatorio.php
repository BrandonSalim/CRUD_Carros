<?php
////conexão
//include_once 'php_action/db_connect.php';
////header
//include_once 'include/header.php';
////mensagem
//include_once 'include/mensagem.php';
//?>
<!---->
<!---->
<!---->
<!--    <div class="row">-->
<!--        <div class="col s12 m6 push-m3">-->
<!--            <h3 class="light">Carros</h3>-->
<!---->
<!--            <ul id="dropdown2" class="dropdown-content">-->
<!--                <li><a href="#!">Nome<span class="badge"></span></a></li>-->
<!--                <li><a href="#!">Marca<span class="badge"></span></a></li>-->
<!--            </ul>-->
<!---->
<!---->
<!--            <a class="btn dropdown-trigger" href="#!" data-target="dropdown2">Ordenar Por<i class="material-icons right">arrow_drop_down</i></a>-->
<!---->
<!--            --><?php
//            $ordem =
//            ?>
<!--            <table class="striped">-->
<!--                <thead>-->
<!---->
<!--                <tr>-->
<!--                    <th>Modelo:</th>-->
<!--                    <th>Marca:</th>-->
<!--                    <th>Cor:</th>-->
<!--                    <th>Ano:</th>-->
<!--                    <th>Combustivél:</th>-->
<!--                    <th>Categoria:</th>-->
<!--                </tr>-->
<!---->
<!--                </thead>-->
<!---->
<!--                <tbody>-->
<!--                --><?php
//                $sql = "SELECT * FROM carros";
//                $resultado = mysqli_query($connect, $sql);
//
//                if (mysqli_num_rows($resultado) > 0):
//
//                    while ($dados = mysqli_fetch_array($resultado)):
//
//                        ?>
<!--                        <tr>-->
<!--                            <td>--><?php //echo $dados['modelo'] ?><!--</td>-->
<!--                            <td>--><?php //echo $dados['marca'] ?><!--</td>-->
<!--                            <td>--><?php //echo $dados['cor'] ?><!--</td>-->
<!--                            <td>--><?php //echo $dados['ano'] ?><!--</td>-->
<!--                            <td>--><?php //echo $dados['combustivel'] ?><!--</td>-->
<!--                            <td>--><?php //echo $dados['categoria'] ?><!--</td>-->
<!---->
<!--                        </tr>-->
<!--                    --><?php
//                    endwhile;
//                else: ?>
<!--                    <tr>-->
<!--                        <td>-</td>-->
<!--                        <td>-</td>-->
<!--                        <td>-</td>-->
<!--                        <td>-</td>-->
<!--                        <td>-</td>-->
<!--                        <td>-</td>-->
<!--                    </tr>-->
<!--                --><?php
//                endif;
//                ?>
<!--                </tbody>-->
<!--            </table>-->
<!--            <br>-->
<!---->
<!--        </div>-->
<!---->
<!--    </div>-->
<!---->
<?php
////footer
//include_once 'include/footer.php';
//?>
