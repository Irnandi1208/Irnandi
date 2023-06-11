<?php

namespace app\controllers;
use app\models\DaftarMatakuliah;
use yii\data\ActiveDataProvider;

class DaftarMatakuliahController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = DaftarMatakuliah::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

}
