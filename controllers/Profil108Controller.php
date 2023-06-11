<?php

namespace app\controllers;
use app\models\Profil108;
use yii\data\ActiveDataProvider;

class Profil108Controller extends \yii\web\Controller
{
    public function actionIndex()
    {        
        $dataProvider = new ActiveDataProvider([
            'query' => Profil108::find()
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider

        ]);
    }

}
