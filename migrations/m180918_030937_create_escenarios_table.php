<?php

use yii\db\Migration;

/**
 * Handles the creation of table `escenarios`.
 */
class m180918_030937_create_escenarios_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('escenarios', [
            'id' => $this->primaryKey(),
            'descripcion' => $this->string()->notNull(),
            'fecha' => $this->date(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('escenarios');
    }
}
