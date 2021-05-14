<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "produto".
 *
 * @property int $idProduto
 * @property string|null $nome
 * @property float|null $preço
 * @property string|null $qtd_estoque
 */
class Produto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'produto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['preço'], 'number'],
            [['nome', 'qtd_estoque'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idProduto' => 'Id Produto',
            'nome' => 'Nome',
            'preço' => 'Preço',
            'qtd_estoque' => 'Qtd Estoque',
        ];
    }
}
