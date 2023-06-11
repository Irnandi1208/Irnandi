<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "daftarmatakuliah".
 *
 * @property int $id
 * @property string $kode_mk
 */
class Daftarmatakuliah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'daftarmatakuliah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'kode_mk'], 'required'],
            [['id'], 'integer'],
            [['kode_mk'], 'string', 'max' => 30],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kode_mk' => 'Kode matakuliah',
        ];
    }
}
