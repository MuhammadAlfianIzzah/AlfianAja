<?php

use yii\bootstrap4\Modal;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BarangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Barangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="barang-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::button('Create Barang', ["value" => Url::to(["barang/create"]), 'class' => 'btn btn-success', "data-toggle" => "modal", "data-target" => "#w0", "id" => "modalButton"]) ?>
    </p>

    <?php echo Html::a('Link', ['/site/test'], ['target' => '_blank']); ?>
    <?php Modal::begin([
        'title' => 'Hello world',

        "size" => "modal-lg"
    ]);

    echo 'Say hello...';

    Modal::end(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_barang',
            'nama_barang',
            'harga',
            'stok',
            'id_supplier',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

<script>
    $(function() {
        $("#modalButton").click(function(e) {
            let url = e.target.value;
            let target = e.target.dataset.target;
            $(target).children().children().children(".modal-body").load(url)
        })
    })
</script>