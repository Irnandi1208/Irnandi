<?php
use yii\widgets\DetailView;
?>

<?=
    Detailview::widget([
        'model' => $Mahasiswa108,
        'attributes' => [
            'id108',
            'nim108',
            'nama108',
            'kelas108',
            'status108',
        ],
    ]);
?>