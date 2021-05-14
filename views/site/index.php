<?php

/* @var $this yii\web\View */

$this->title = 'E-commerce';
?>
<style>
    .css {
        background-color: #0B4F80 !important;
        color: white !important;
    }
</style>

<div class="site-index">
<div class="x_content" style="margin-bottom: 50px;">
        <h1>E-commerce</h1>
        <ul class="nav nav-tabs nav-justified">
                <!-- preenchendo os campos aqui -->
                <!-- <li class="secundarios hidden"></li> -->
                <li class="nav-item active"><a class="nav-link active css " role="tab" data-toggle="tab" href="#cliente">Dados do Cliente</a></li>
                <li class="nav-item"><a class="nav-link  " role="tab" data-toggle="tab" href="#Pedido">Dados do Pedido</a></li>
                <li class="nav-item"><a class="nav-link  " role="tab" data-toggle="tab" href="#item">Item do Pedido</a></li>
                <li class="nav-item"><a class="nav-link  " role="tab" data-toggle="tab" href="#produto">Produtos</a></li>

            </ul><br>
            <!--conteudo das tabs-->

            <?php
    foreach($arrayCliente as $cliente):
    ?>
    <p><?= $cliente->idCliente; ?><p>
    <p><?= $cliente->nome; ?><p>
    <p><?= $cliente->email; ?><p>
    <p><?= $cliente->CPF; ?><p>
    <?php
    endforeach;
    ?>          