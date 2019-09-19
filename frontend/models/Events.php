<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "events".
 *
 * @property int $ID
 * @property string $title
 * @property string $content
 * @property string $startDate
 * @property string $endDate
 * @property int $status
 * @property int $price
 * @property int $revenue
 *
 * @property Asset[] $assets
 * @property Payment[] $payments
 * @property Winner[] $winners
 */
class Events extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'events';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'startDate', 'endDate', 'status', 'price'], 'required'],
            [['content'], 'string'],
            [['startDate', 'endDate'], 'safe'],
            [['status', 'price', 'revenue'], 'integer'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'title' => 'Title',
            'content' => 'Content',
            'startDate' => 'Start Date',
            'endDate' => 'End Date',
            'status' => 'Status',
            'price' => 'Price',
            'revenue' => 'Revenue',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAssets()
    {
        return $this->hasMany(Asset::className(), ['eventID' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPayments()
    {
        return $this->hasMany(Payment::className(), ['eventID' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWinners()
    {
        return $this->hasMany(Winner::className(), ['eventID' => 'ID']);
    }
}
