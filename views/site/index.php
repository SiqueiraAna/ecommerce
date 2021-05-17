<?php

/* @var $this yii\web\View */

$this->title = 'E-commerce';
?>
<style>
    .css {
        background-color: #0B4F80 !important;
        color: white !important;
        font-weight: bolder;
    }
    .itemTabs{
        border: 1px solid #bababa!important;
        background-color: white;
    }
    .conteudo-tabs{
        background-image: radial-gradient(circle at 119.64% 37.72%, #fafefd 0, #f5f5f5 50%, #f0eced 100%);
        margin-top: -20px;
        padding-top: 25px;
    }
    .campoInput{
        background-color: #f7f7f7!important;
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
            
            <div class="x_content conteudo-tabs" style="margin-bottom: 50px;">
            <!--conteudo das tabs-->

            <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="cliente">
            <div class="col-md-4 col-sm-4 col-xs-12">
             <?php
             foreach($arrayCliente as $cliente):?>
             <p><?= $cliente->idCliente; ?><p>
            <p><?= $cliente->nome; ?><p>
            <p><?= $cliente->email; ?><p>
            <p><?= $cliente->CPF; ?><p>
            <?php endforeach; 
            ?>  
            <br>
            </div>
            </div>
            </div><!-- fim div tabpanel -->


    