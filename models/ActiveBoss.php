<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "active_boss".
 *
 * @property int $id
 * @property int $id_boss
 * @property int $current_health
 *
 * @property Battle[] $battles
 * @property Boss $boss
 */
class ActiveBoss extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'active_boss';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_boss', 'current_health'], 'required'],
            [['id_boss', 'current_health'], 'integer'],
            [['id_boss'], 'exist', 'skipOnError' => true, 'targetClass' => Boss::class, 'targetAttribute' => ['id_boss' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_boss' => 'Id Boss',
            'current_health' => 'Current Health',
        ];
    }

    /**
     * Gets query for [[Battles]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBattles()
    {
        return $this->hasMany(Battle::class, ['id_active_boss' => 'id']);
    }

    /**
     * Gets query for [[Boss]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBoss()
    {
        return $this->hasOne(Boss::class, ['id' => 'id_boss']);
    }
}
