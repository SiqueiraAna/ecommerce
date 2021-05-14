<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "item".
 *
 * @property int $idItem
 * @property int|null $qtd_produto
 * @property float|null $preço
 * @property int $Produto_id
 * @property int $Item
 */
class Item extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'item';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['qtd_produto', 'Produto_id', 'Item'], 'integer'],
            [['preço'], 'number'],
            [['Produto_id', 'Item'], 'required'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idItem' => 'Id Item',
            'qtd_produto' => 'Qtd Produto',
            'preço' => 'Preço',
            'Produto_id' => 'Produto ID',
            'Item' => 'Item',
        ];
    }
}
