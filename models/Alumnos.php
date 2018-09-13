<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "alumnos".
 *
 * @property int $id
 * @property string $matricula
 * @property string $nombre
 * @property string $apellidos
 * @property string $CURP
 * @property string $fecnac
 * @property string $genero
 * @property string $telefono_fijo
 * @property string $telefono_cel
 * @property string $correo_electronico
 * @property string $direccion_calle
 * @property string $direccion_codpostal
 * @property string $direccion_estado
 * @property int $carrera_id
 */
class Alumnos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'alumnos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['matricula', 'nombre', 'apellidos', 'CURP', 'fecnac', 'genero'], 'required'],
            [['fecnac'], 'safe'],
            [['genero', 'telefono_fijo', 'telefono_cel', 'correo_electronico', 'direccion_calle', 'direccion_estado'], 'string'],
            [['carrera_id'], 'integer'],
            [['matricula'], 'string', 'max' => 20],
            [['nombre'], 'string', 'max' => 50],
            [['apellidos'], 'string', 'max' => 150],
            [['CURP'], 'string', 'max' => 18],
            [['direccion_codpostal'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'matricula' => 'Matricula',
            'nombre' => 'Nombre',
            'apellidos' => 'Apellidos',
            'CURP' => 'Curp',
            'fecnac' => 'Fecnac',
            'genero' => 'Genero',
            'telefono_fijo' => 'Telefono Fijo',
            'telefono_cel' => 'Telefono Cel',
            'correo_electronico' => 'Correo Electronico',
            'direccion_calle' => 'Direccion Calle',
            'direccion_codpostal' => 'Direccion Codpostal',
            'direccion_estado' => 'Direccion Estado',
            'carrera_id' => 'Carrera ID',
        ];
    }

    /**
     * {@inheritdoc}
     * @return AlumnosQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AlumnosQuery(get_called_class());
    }
}
