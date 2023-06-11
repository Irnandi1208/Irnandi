<?php

namespace app\controllers;
use app\models\ProfilNim;
use yii\data\ActiveDataProvider;

class ProfilNimController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => ProfilNim::find()
        ]);
        
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

}
