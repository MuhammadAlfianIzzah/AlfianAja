<?php

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

$form = ActiveForm::begin();
echo $form->field($model, "nama_barang")->textInput();
echo $form->field($model, "harga")->textInput();
echo $form->field($model, "stok")->textInput();
echo Html::submitButton("Simpan data", ["class" => "btn btn-primary"]);
$form::end();
