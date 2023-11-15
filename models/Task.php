<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Task".
 *
 * @property int $id
 * @property string $name
 * @property int $id_difficulty
 *
 * @property Difficulty $difficulty
 * @property Trial[] $trials
 */
class Task extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Task';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'id_difficulty'], 'required'],
            [['id_difficulty'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['id_difficulty'], 'exist', 'skipOnError' => true, 'targetClass' => Difficulty::class, 'targetAttribute' => ['id_difficulty' => 'id']],
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
            'id_difficulty' => 'Id Difficulty',
        ];
    }

    /**
     * Gets query for [[Difficulty]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDifficulty()
    {
        return $this->hasOne(Difficulty::class, ['id' => 'id_difficulty']);
    }

    /**
     * Gets query for [[Trials]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTrials()
    {
        return $this->hasMany(Trial::class, ['id_task' => 'id']);
    }
}
