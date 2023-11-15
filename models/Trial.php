<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trial".
 *
 * @property int $id
 * @property int $id_user
 * @property int $id_task
 * @property int $is_done
 *
 * @property Battle[] $battles
 * @property Task $task
 * @property User $user
 */
class Trial extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'trial';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'id_task'], 'required'],
            [['id_user', 'id_task', 'is_done'], 'integer'],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['id_user' => 'id']],
            [['id_task'], 'exist', 'skipOnError' => true, 'targetClass' => Task::class, 'targetAttribute' => ['id_task' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_user' => 'Id User',
            'id_task' => 'Id Task',
            'is_done' => 'Is Done',
        ];
    }

    /**
     * Gets query for [[Battles]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBattles()
    {
        return $this->hasMany(Battle::class, ['id_trial' => 'id']);
    }

    /**
     * Gets query for [[Task]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTask()
    {
        return $this->hasOne(Task::class, ['id' => 'id_task']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'id_user']);
    }
}
