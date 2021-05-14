<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pedido".
 *
 * @property int $idPedido
 * @property float|null $preço
 * @property int $Cliente_id
 */
class Pedido extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pedido';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['preço'], 'number'],
            [['Cliente_id'], 'required'],
            [['Cliente_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idPedido' => 'Id Pedido',
            'preço' => 'Preço',
            'Cliente_id' => 'Cliente ID',
        ];
    }
}
