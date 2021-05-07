<?php

use yii\bootstrap4\ActiveForm;
use kartik\file\FileInput;
use yii\helpers\Url;

$this->title = "Halaman data";

?>


<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data', "class" => "formUpload"]]) ?>

<?= $form->field($model, "nama")->textInput() ?>
<?= $form->field($model, "email")->textInput() ?>
<?= $form->field($model, "no_hp")->textInput() ?>
<?= $form->field($model, "file")->fileInput() ?>
<div class="progress mb-3">
    <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
</div>
<button type="submit" class="btn btn-primary">Simpan Data</button>

<?php $form::end() ?>
<script>
    $(document).ready(function() {

        $(".formUpload").on("submit", function(e) {
            e.preventDefault();
            $.ajax({
                xhr: function() {
                    var xhr = new window.XMLHttpRequest();
                    xhr.upload.addEventListener("progress", function(evt) {
                        var persenSuccess = Math.floor(((evt.loaded / evt.total) * 100));

                        $(".progress-bar").width(persenSuccess + "%");
                        $(".progress-bar").html(persenSuccess + "%");
                    })
                    return xhr;
                },
                type: "POST",
                url: "<?= Url::current() ?>",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function() {
                    $(".progress-bar").width("0%");
                },
                success: function() {
                    // console.log("succes")
                },
                error: function() {
                    // console.log("error")
                }
            })
        })
    })
</script>