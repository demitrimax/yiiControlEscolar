<?php

use yii\db\Migration;

/**
 * Handles the creation of table `catcias`.
 */
class m180918_213532_create_catcias_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('catcias', [
            'id' => $this->primaryKey(),
            'nombre' => $this->string(35)->unique()->notnull(),
            'rfc' => $this->string(12),
            'nomcorto' => $this->string(10)->notNull(),
            'nacionalidad' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('catcias');
    }
}
