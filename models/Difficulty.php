<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "difficulty".
 *
 * @property int $id
 * @property string $name
 * @property int $damage
 *
 * @property Task[] $tasks
 */
class Difficulty extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'difficulty';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'damage'], 'required'],
            [['damage'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'damage' => 'Damage',
        ];
    }

    /**
     * Gets query for [[Tasks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTasks()
    {
        return $this->hasMany(Task::class, ['id_difficulty' => 'id']);
    }
}
