<?php
//conexão
include_once 'php_action/db_connect.php';
//header
include_once 'include/header.php';
//select
if(isset($_GET['id'])):
    $id = mysqli_escape_string($connect, $_GET['id']);

    $sql = "SELECT * FROM carros WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="row">
        <div class="col s12 m6 push-m3">

            <h3 class="light">Editar Carro</h3>

            <form action="php_action/update.php" method="post">

                <input type="hidden" name="id" value="<?php echo $dados['id']?>">
                <div class="input_field col s12">
                    <label for="modelo" style="font-size: 20px">Modelo</label>
                    <input type="text" name="modelo" id="modelo" value="<?php echo $dados['modelo']?>">
                </div>

                <div class="input_field col s12">
                    <label for="marca" style="font-size: 20px">Marca</label>
                    <input type="text" name="marca" id="marca" value="<?php echo $dados['marca']?>">
                </div>

                <div class="input_field col s12">
                    <label for="cor" style="font-size: 20px">Cor</label>
                    <input type="text" name="cor" id="cor" value="<?php echo $dados['cor']?>">
                </div>

                <div class="input_field col s12">
                    <label for="ano" style="font-size: 20px">Ano</label>
                    <input type="text" name="ano" id="ano" value="<?php echo $dados['ano']?>">
                </div>

                <div class="input_field col s12">
                    <label for="categoria" style="font-size: 20px">Categoria</label>
                    <input type="text" name="categoria" id="categoria" value="<?php echo $dados['categoria']?>">
                </div>

                <div class="input_field col s12">
                    <label for="combustivel" style="font-size: 20px">Combustivél</label>
                    <input type="text" name="combustivel" id="combustivel" value="<?php echo $dados['combustivel']?>">
                </div>



                <button type="submit" name="btn-update" class="btn"> Editar </button>
                <a href="index.php" class="btn green"> Lista de Carros </a>
            </form>


        </div>
</div>


<?php
//footer
include_once 'include/footer.php';
?>
