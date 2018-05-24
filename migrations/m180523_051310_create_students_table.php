<?php

use yii\db\Migration;

/**
 * Handles the creation of table `students`.
 */
class m180523_051310_create_students_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('students', [
            'id' => $this->primaryKey(),
            'lastname' => $this->string(191)->notNull(),
            'firstname' => $this->string(191)->notNull(),
            'address' => $this->string(200)->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('students');
    }
}
