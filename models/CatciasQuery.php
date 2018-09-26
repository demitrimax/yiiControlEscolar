<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Catcias]].
 *
 * @see Catcias
 */
class CatciasQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Catcias[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Catcias|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
