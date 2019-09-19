<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "asset".
 *
 * @property int $ID
 * @property string $originalName
 * @property int $eventID
 * @property int $selected
 * @property string $date
 * @property int $userID
 * @property string $displayName
 * @property int $status
 *
 * @property User $user
 * @property Events $event
 * @property Winner[] $winners
 */
class Asset extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'asset';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['originalName', 'eventID', 'date', 'userID', 'displayName'], 'required'],
            [['eventID', 'selected', 'userID', 'status'], 'integer'],
            [['date'], 'safe'],
            [['originalName', 'displayName'], 'string', 'max' => 255],
            [['userID'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['userID' => 'id']],
            [['eventID'], 'exist', 'skipOnError' => true, 'targetClass' => Events::className(), 'targetAttribute' => ['eventID' => 'ID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'originalName' => 'Original Name',
            'eventID' => 'Event ID',
            'selected' => 'Selected',
            'date' => 'Date',
            'userID' => 'User ID',
            'displayName' => 'Display Name',
            'status' => 'Status',
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
    public function getWinners()
    {
        return $this->hasMany(Winner::className(), ['assetID' => 'ID']);
    }
}
