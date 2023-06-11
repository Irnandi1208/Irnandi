<?php

namespace app\controllers;

use app\models\Penjualan;
use yii\data\ActiveDataProvider;

class PenjualanController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Penjualan::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index' , [
            'dataProvider' => $dataProvider]);
    }

    public function actionTambah()
    {
        $Penjualan = new penjualan;
        $Penjualan->nama_barang = 'hp';
        $Penjualan->transaksi = 'tunai';
        $Penjualan->pembeli = 'biggy';
        if ($Penjualan->save()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($Penjualan->getErrors());
            die();
        }

    }

    public function actionUpdate($id_suplayer)
    {
        $Penjualan = Penjualan::findOne($id_suplayer);
        $Penjualan->nama_barang = 'laptop';
        if ($Penjualan->save()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($Penjualan->getErrors());
            die();
        }

    }

    public function actionDelete($id_suplayer)
    {
        $Penjualan = Penjualan::findOne($id_suplayer);
        if ($Penjualan->delete()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($Penjualan->getErrors());
            die();
        }
    }

}