<?php

namespace app\controllers;

use app\models\Mahasiswa108;
use yii\data\ActiveDataProvider;
use Yii;

class Mahasiswa108Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Mahasiswa108::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index' , [
            'dataProvider' => $dataProvider]);
    }

    public function actionCreate()
    {
        $Mahasiswa108 = new Mahasiswa108;
        $Mahasiswa108->nim108 = '60200121108-'.rand(10,99);
        $Mahasiswa108->nama108 = 'Muh.Irnandi';
        $Mahasiswa108->kelas108 = 'C';
        $Mahasiswa108->status108 = 'Baru';
        if ($Mahasiswa108->save()) {
            Yii::$app->session->setFlash('success', 'Data Tersimpan');
            return $this->redirect(['index']);
        }        
    }

    public function actionUpdate($id)
    {
        $Mahasiswa108 = Mahasiswa108::findOne(['id108' => $id]);
        if ($Mahasiswa108 !== null) {
            $Mahasiswa108->kelas108 = 'D';
            $Mahasiswa108->status108 = 'Update';
            $Mahasiswa108->save();
            Yii::$app->session->setFlash('success', 'Data Terupdate');
        }
            return $this->redirect(['index']);      
        
    }

    public function actionDelete($id)
    {
        $Mahasiswa108 = Mahasiswa108::findOne(['id108' => $id]);
        if ($Mahasiswa108->delete())
        Yii::$app->session->setFlash('success', 'Data Terdelete');        
        {
            return $this->redirect(['index']);
        }
    }

    public function actionView($id)
    {
        $Mahasiswa108 = Mahasiswa108::findOne($id);
        //if($Mahasiswa108 === null)
        return $this->render('view', ['Mahasiswa108'=>$Mahasiswa108]); 
    }

}