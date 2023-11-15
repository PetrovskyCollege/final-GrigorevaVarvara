<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "boss".
 *
 * @property int $id
 * @property string $name
 * @property int $health
 *
 * @property ActiveBoss[] $activeBosses
 */
class Boss extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'boss';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'health'], 'required'],
            [['health'], 'integer'],
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
            'health' => 'Health',
        ];
    }

    /**
     * Gets query for [[ActiveBosses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getActiveBosses()
    {
        return $this->hasMany(ActiveBoss::class, ['id_boss' => 'id']);
    }
}
