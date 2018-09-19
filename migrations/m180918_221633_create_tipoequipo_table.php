<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tipoequipo`.
 */
class m180918_221633_create_tipoequipo_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tipoequipo', [
            'id' => $this->primaryKey(),
            'ntipo' => $this->string(10)->unique()->notnull(),
            'descripcion' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('tipoequipo');
    }
}
