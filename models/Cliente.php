<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cliente".
 *
 * @property int $idCliente
 * @property string|null $nome
 * @property string|null $email
 * @property int|null $CPF
 */
class Cliente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cliente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CPF'], 'integer'],
            [['nome', 'email'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idCliente' => 'Id Cliente',
            'nome' => 'Nome',
            'email' => 'Email',
            'CPF' => 'Cpf',
        ];
    }
}
