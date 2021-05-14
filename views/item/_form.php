<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Item */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="item-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'qtd_produto')->textInput() ?>

    <?= $form->field($model, 'preço')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Produto_id')->textInput() ?>

    <?= $form->field($model, 'Item')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
