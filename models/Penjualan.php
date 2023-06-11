<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "penjualan".
 *
 * @property int $id_suplayer
 * @property string $nama_barang
 * @property string $transaksi
 * @property string $pembeli
 */
class Penjualan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penjualan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_barang', 'transaksi', 'pembeli'], 'required'],
            [['nama_barang'], 'string', 'max' => 15],
            [['transaksi'], 'string', 'max' => 32],
            [['pembeli'], 'string', 'max' => 255],
            [['nama_barang'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_suplayer' => 'Id Suplayer',
            'nama_barang' => 'Nama Barang',
            'transaksi' => 'Transaksi',
            'pembeli' => 'Pembeli',
        ];
    }
}
