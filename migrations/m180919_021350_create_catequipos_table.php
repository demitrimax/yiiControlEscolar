<?php

use yii\db\Migration;

/**
 * Handles the creation of table `catequipos`.
 * Has foreign keys to the tables:
 *
 * - `tipoequipo`
 * - `catcias`
 * - `catclase`
 */
class m180919_021350_create_catequipos_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('catequipos', [
            'id' => $this->primaryKey(),
            'clave' => $this->integer(),
            'nombre' => $this->string(35)->notNull(),
            'nomcorto' => $this->string(10),
            'tequipo' => $this->integer()->notNull(),
            'cia_id' => $this->integer()->notNull(),
            'marcamalacate' => $this->string(35),
            'hp' => $this->integer(),
            'ta' => $this->string(10),
            'clase' => $this->integer()->notNull(),
            'aniocompra' => $this->integer(),
            'anioconst' => $this->integer(),
            'noactivofijo' => $this->string(10),
        ]);

        // creates index for column `tequipo`
        $this->createIndex(
            'idx-catequipos-tequipo',
            'catequipos',
            'tequipo'
        );

        // add foreign key for table `tipoequipo`
        $this->addForeignKey(
            'fk-catequipos-tequipo',
            'catequipos',
            'tequipo',
            'tipoequipo',
            'id',
            'CASCADE'
        );

        // creates index for column `cia_id`
        $this->createIndex(
            'idx-catequipos-cia_id',
            'catequipos',
            'cia_id'
        );

        // add foreign key for table `catcias`
        $this->addForeignKey(
            'fk-catequipos-cia_id',
            'catequipos',
            'cia_id',
            'catcias',
            'id',
            'CASCADE'
        );

        // creates index for column `clase`
        $this->createIndex(
            'idx-catequipos-clase',
            'catequipos',
            'clase'
        );

        // add foreign key for table `catclase`
        $this->addForeignKey(
            'fk-catequipos-clase',
            'catequipos',
            'clase',
            'catclase',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `tipoequipo`
        $this->dropForeignKey(
            'fk-catequipos-tequipo',
            'catequipos'
        );

        // drops index for column `tequipo`
        $this->dropIndex(
            'idx-catequipos-tequipo',
            'catequipos'
        );

        // drops foreign key for table `catcias`
        $this->dropForeignKey(
            'fk-catequipos-cia_id',
            'catequipos'
        );

        // drops index for column `cia_id`
        $this->dropIndex(
            'idx-catequipos-cia_id',
            'catequipos'
        );

        // drops foreign key for table `catclase`
        $this->dropForeignKey(
            'fk-catequipos-clase',
            'catequipos'
        );

        // drops index for column `clase`
        $this->dropIndex(
            'idx-catequipos-clase',
            'catequipos'
        );

        $this->dropTable('catequipos');
    }
}
