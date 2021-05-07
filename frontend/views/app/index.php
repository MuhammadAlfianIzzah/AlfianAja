<?php

/* @var $this yii\web\View */

use app\models\Barang;
use dosamigos\chartjs\ChartJs;
use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;
use yii\helpers\Url;
use yii\bootstrap4\Modal;


// $total = [];
// foreach ($ts as $transaksi) {
//     $total[] = $transaksi["total"];
// }
// $nama_barang = [];
// foreach ($brg as $barang) {
//     $nama_barang[] = $barang->barang->nama_barang;
// }

use buttflattery\formwizard\FormWizard;

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Fluid jumbotron</h1>
            <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
    </div>
    <div class="body-content">

        <div class="row">
            <?php foreach ($barang as $brg) : ?>
                <div class="col-4">
                    <div class="card my-2">
                        <img src="https://images.pexels.com/photos/34577/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="card-img-top" alt="...">
                        <div class="card-header">
                            <?= $brg["nama_barang"] ?>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                Barang ini <?= $brg["nama_barang"] ?> dengan harga
                                <span class="text-danger"> <?= $brg["harga"] ?></span>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>