<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Tipoequipo]].
 *
 * @see Tipoequipo
 */
class TipoequipoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Tipoequipo[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Tipoequipo|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
