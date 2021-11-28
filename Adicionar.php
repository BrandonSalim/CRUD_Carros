<?php
//header
include_once 'include/header.php';
?>

<div class="row">
        <div class="col s12 m6 push-m3">

            <h3 class="light">Novo Carro</h3>

            <form action="php_action/create.php" method="post">

                <div class="input_field col s12">
                    <label for="modelo" style="font-size: 20px">Modelo</label>
                    <input type="text" name="modelo" id="modelo">
                </div>

                <div class="input_field col s12">
                    <label for="marca" style="font-size: 20px">Marca</label>
                    <input type="text" name="marca" id="marca">
                </div>

                <div class="input_field col s12">
                    <label for="cor" style="font-size: 20px">Cor</label>
                    <input type="text" name="cor" id="cor">
                </div>

                <div class="input_field col s12">
                    <label for="ano" style="font-size: 20px">Ano</label>
                    <input type="text" name="ano" id="ano">
                </div>

                <div class="input_field col s12">
                    <label for="categoria" style="font-size: 20px">Categoria</label>
                    <label for="categoria">(Sport,Passeio,Muscle, Etc...)</label>
                    <input type="text" name="categoria" id="categoria">
                </div>


                <div class="input_field col s12">
                    <label for="categoria" style="font-size: 20px">Combustivél</label>
                    <label for="categoria">(Gasolina, Ácool, Híbrido, Elétrico)</label>
                    <input type="text" name="combustivel" id="combustivel">
                </div>

                <button type="submit" name="btn-caadstrar" class="btn"> Cadastrar </button>
                <a href="index.php" class="btn green"> Lista de Carros </a>
            </form>


        </div>
</div>


<?php
//footer
include_once 'include/footer.php';
?>
