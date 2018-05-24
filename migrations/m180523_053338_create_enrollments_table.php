<?php

use yii\db\Migration;

/**
 * Handles the creation of table `enrollments`.
 */
class m180523_053338_create_enrollments_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('enrollments', [
            'id' => $this->primaryKey(),
            'studentId' => $this->integer()->notNull(),
            'classId' => $this->integer()->notNull()
        ]);

        $this->createIndex(
            'idx-enrollments-studentId',
            'enrollments','studentId');
        $this->addForeignKey(
            'fk-enrollments-students',
            'enrollments', 'studentId',
            'students','id'
        );

        $this->createIndex(
            'idx-enrollments-classId',
            'enrollments', 'classId'
        );
        $this->addForeignKey(
            'fk-enrollments-classes',
            'enrollments','classId',
            'classes', 'id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-enrollments-students', 'enrollments');
        $this->dropForeignKey('fk-enrollments-classes', 'enrollments');
        $this->dropIndex('idx-enrollments-studentId', 'enrollments');
        $this->dropIndex('idx-enrollments-classId', 'enrollments');
        $this->dropTable('enrollments');
    }
}