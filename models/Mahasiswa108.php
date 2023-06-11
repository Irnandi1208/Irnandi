<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa108".
 *
 * @property int $id108
 * @property string $nim108
 * @property string $nama108
 * @property string $kelas108
 * @property string $status108
 */
class Mahasiswa108 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa108';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim108', 'nama108', 'kelas108', 'status108'], 'required'],
            [['nim108'], 'string', 'max' => 25],
            [['nama108'], 'string', 'max' => 225],
            [['kelas108', 'status108'], 'string', 'max' => 255],
            [['nim108'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id108' => 'Id108',
            'nim108' => 'Nim108',
            'nama108' => 'Nama108',
            'kelas108' => 'Kelas108',
            'status108' => 'Status108',
        ];
    }
}
