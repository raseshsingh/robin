<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "winner".
 *
 * @property int $ID
 * @property int $userID
 * @property int $eventID
 * @property int $assetID
 *
 * @property User $user
 * @property Events $event
 * @property Asset $asset
 */
class Winner extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'winner';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['userID', 'eventID', 'assetID'], 'required'],
            [['userID', 'eventID', 'assetID'], 'integer'],
            [['userID'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['userID' => 'id']],
            [['eventID'], 'exist', 'skipOnError' => true, 'targetClass' => Events::className(), 'targetAttribute' => ['eventID' => 'ID']],
            [['assetID'], 'exist', 'skipOnError' => true, 'targetClass' => Asset::className(), 'targetAttribute' => ['assetID' => 'ID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'userID' => 'User ID',
            'eventID' => 'Event ID',
            'assetID' => 'Asset ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'userID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEvent()
    {
        return $this->hasOne(Events::className(), ['ID' => 'eventID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAsset()
    {
        return $this->hasOne(Asset::className(), ['ID' => 'assetID']);
    }
}
