<?php

use yii\db\Migration;

/**
 * Handles the creation of table `catclase`.
 */
class m180918_221650_create_catclase_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('catclase', [
            'id' => $this->primaryKey(),
            'nombre' => $this->string(10)->unique()->notnull(),
            'nomcorto' => $this->string(5),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('catclase');
    }
}
