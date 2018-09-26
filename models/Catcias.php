<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "catcias".
 *
 * @property int $id
 * @property string $nombre
 * @property string $rfc
 * @property string $nomcorto
 * @property string $nacionalidad
 *
 * @property Catequipos[] $catequipos
 */
class Catcias extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'catcias';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'nomcorto'], 'required'],
            [['nombre'], 'string', 'max' => 35],
            [['rfc'], 'string', 'max' => 12],
            [['nomcorto'], 'string', 'max' => 10],
            [['nacionalidad'], 'string', 'max' => 255],
            [['nombre'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'rfc' => 'Rfc',
            'nomcorto' => 'Nomcorto',
            'nacionalidad' => 'Nacionalidad',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCatequipos()
    {
        return $this->hasMany(Catequipos::className(), ['cia_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return CatciasQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CatciasQuery(get_called_class());
    }
}
