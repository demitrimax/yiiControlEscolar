<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipoequipo".
 *
 * @property int $id
 * @property string $ntipo
 * @property string $descripcion
 *
 * @property Catequipos[] $catequipos
 */
class Tipoequipo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tipoequipo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ntipo'], 'required'],
            [['ntipo'], 'string', 'max' => 10],
            [['descripcion'], 'string', 'max' => 255],
            [['ntipo'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ntipo' => 'Ntipo',
            'descripcion' => 'Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCatequipos()
    {
        return $this->hasMany(Catequipos::className(), ['tequipo' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return TipoequipoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TipoequipoQuery(get_called_class());
    }
}
