<?php
    use yii\grid\GridView;
    use yii\helpers\Html;
    use yii\grid\SerialColumn;
    use yii\grid\ActionColumn;
?>
<?= Html::a('Tambah Mahasiswa', ['create'], ['class' => 'btn btn-primary']) ?>
<?=
    Gridview::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => SerialColumn::className()],
            'id108',
            'nim108',
            'nama108',
            'kelas108',
            'status108',
            [
                'class' => ActionColumn::className()             
            ],                
        ]
    ]);
?>