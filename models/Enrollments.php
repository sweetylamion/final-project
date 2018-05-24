<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "enrollments".
 *
 * @property int $id
 * @property int $studentId
 * @property int $classId
 *
 * @property Classes $class
 * @property Students $student
 */
class Enrollments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'enrollments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['studentId', 'classId'], 'required'],
            [['studentId', 'classId'], 'integer'],
            [['classId'], 'exist', 'skipOnError' => true, 'targetClass' => Classes::className(), 'targetAttribute' => ['classId' => 'id']],
            [['studentId'], 'exist', 'skipOnError' => true, 'targetClass' => Students::className(), 'targetAttribute' => ['studentId' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'studentId' => 'Student ID',
            'classId' => 'Class ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClass()
    {
        return $this->hasOne(Classes::className(), ['id' => 'classId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudent()
    {
        return $this->hasOne(Students::className(), ['id' => 'studentId']);
    }
}
