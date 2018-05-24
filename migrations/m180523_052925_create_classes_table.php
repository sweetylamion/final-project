<?php

use yii\db\Migration;

/**
 * Handles the creation of table `classes`.
 */
class m180523_052925_create_classes_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('classes', [
            'id' => $this->primaryKey(),
            'title' => $this->string(60)->notNull(),
            'description' => $this->string(255)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('classes');
    }
}
