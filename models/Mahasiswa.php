<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa".
 *
 * @property int $id
 * @property string $nim
 * @property string $nama
 * @property string $kelas
 */
class Mahasiswa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'nim', 'nama', 'kelas', 'jurusan'], 'required'],
            [['id'], 'integer'],
            [['nim'], 'string', 'max' => 25],
            [['nama'], 'string', 'max' => 225],
            [['kelas'], 'string', 'max' => 1],
            [['nim'], 'unique'],
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
            'nim' => 'Nim',
            'nama' => 'Nama',
            'kelas' => 'Kelas',
            'jurusan' => 'jurusan',
        ];
    }

    /**
     * Gets query for [[Profil108]].
     * 
     * @return \yii\db\ActiveQuery
     */
    public function getProfil108()
    {
        return $this->hasOne(Profil108::class, ['id_mahasiswa' => 'id']);
    }
}
