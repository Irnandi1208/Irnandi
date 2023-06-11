<?php

namespace app\controllers;
use app\models\Mahasiswa;
use yii\data\ActiveDataProvider;

class MahasiswaController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Mahasiswa::find();
        $dataProvider = new ActiveDataProvider([
            'query' => Mahasiswa::find()
        ]);
        
        return $this->render('Index', [
            'dataProvider' => $dataProvider
        ]);
    }

}
