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
        <h3 class="light">Carros</h3>
        <table class="striped">
            <thead>
            <tr>
                <th>Modelo:</th>
                <th>Marca:</th>
                <th>Cor:</th>
                <th>Ano:</th>
                <th>Combustivél:</th>
                <th>Categoria:</th>
            </tr>

            </thead>

            <tbody>
            <?php
                $sql = "SELECT * FROM carros";
                $resultado = mysqli_query($connect, $sql);

                if (mysqli_num_rows($resultado) > 0):

                while ($dados = mysqli_fetch_array($resultado)):

            ?>
            <tr>
                <td><?php echo $dados['modelo'] ?></td>
                <td><?php echo $dados['marca'] ?></td>
                <td><?php echo $dados['cor'] ?></td>
                <td><?php echo $dados['ano'] ?></td>
                <td><?php echo $dados['combustivel'] ?></td>
                <td><?php echo $dados['categoria'] ?></td>
                <td><a href="edita.php?id=<?php echo $dados['id'] ?>" class="btn-floating orange"><i class="material-icons">edit</i> </a></td>

                <td><a href="#modal<?php echo $dados['id'] ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

                <!-- Modal Structure -->
                <div id="modal<?php echo $dados['id'] ?>" class="modal">
                    <div class="modal-content">
                        <h4>Ops!</h4>
                        <p>Tem certeza que deseja excluir esse carro?</p>
                    </div>
                    <div class="modal-footer">

                        <form action="php_action/delete.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $dados['id'] ?>">
                            <button type="submit" name="btn-deletar" class="btn red">Deletar</button>
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                        </form>
                    </div>
                </div>
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
        <a href="adicionar.php" class="btn" >Adicionar Carro</a>
        <a href="Relatorio.php" class="btn" >Relatório</a>
    </div>

</div>

<?php
//footer
include_once 'include/footer.php';
?>