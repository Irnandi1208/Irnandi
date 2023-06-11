<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profil_nim".
 *
 * @property int $id
 * @property int $id_mahasiswa
 * @property string $foto_profi;
 */
class ProfilNim extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profil_nim';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_mahasiswa', 'foto_profi;'], 'required'],
            [['id', 'id_mahasiswa'], 'integer'],
            [['foto_profi'], 'string', 'max' => 20],
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
            'id_mahasiswa' => 'Id Mahasiswa',
            'foto_profil' => 'Foto Profil',
        ];
    }
}
