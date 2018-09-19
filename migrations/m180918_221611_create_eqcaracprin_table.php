<?php

use yii\db\Migration;

/**
 * Handles the creation of table `eqcaracprin`.
 */
class m180918_221611_create_eqcaracprin_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('eqcaracprin', [
            'id' => $this->primaryKey(),
            'nombre' => $this->string(10)->unique()->notnull(),
            'orden' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('eqcaracprin');
    }
}
