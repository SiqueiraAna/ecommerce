<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Item */

$this->title = $model->idItem;
$this->params['breadcrumbs'][] = ['label' => 'Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="item-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idItem' => $model->idItem, 'Produto_id' => $model->Produto_id, 'Item' => $model->Item], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idItem' => $model->idItem, 'Produto_id' => $model->Produto_id, 'Item' => $model->Item], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idItem',
            'qtd_produto',
            'preço',
            'Produto_id',
            'Item',
        ],
    ]) ?>

</div>
