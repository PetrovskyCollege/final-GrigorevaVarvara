<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "battle".
 *
 * @property int $id
 * @property int $id_trial
 * @property int $id_active_boss
 *
 * @property ActiveBoss $activeBoss
 * @property Trial $trial
 */
class Battle extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'battle';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_trial', 'id_active_boss'], 'required'],
            [['id_trial', 'id_active_boss'], 'integer'],
            [['id_active_boss'], 'exist', 'skipOnError' => true, 'targetClass' => ActiveBoss::class, 'targetAttribute' => ['id_active_boss' => 'id']],
            [['id_trial'], 'exist', 'skipOnError' => true, 'targetClass' => Trial::class, 'targetAttribute' => ['id_trial' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_trial' => 'Id Trial',
            'id_active_boss' => 'Id Active Boss',
        ];
    }

    /**
     * Gets query for [[ActiveBoss]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getActiveBoss()
    {
        return $this->hasOne(ActiveBoss::class, ['id' => 'id_active_boss']);
    }

    /**
     * Gets query for [[Trial]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTrial()
    {
        return $this->hasOne(Trial::class, ['id' => 'id_trial']);
    }
}
