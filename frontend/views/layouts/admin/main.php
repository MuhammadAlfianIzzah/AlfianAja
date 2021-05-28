<?php

use frontend\assets\AdminAsset;
use yii\helpers\Url;

AdminAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $this->title ?></title>
    <?php $this->registerCsrfMetaTags() ?>
    <!-- Custom fonts for this template-->

    <?php $this->head() ?>

    <!-- Custom styles for this template-->


</head>

<body id="page-top">
    <?php $this->beginBody() ?>
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- sidebar -->
        <?php $this->beginContent("@app/views/layouts/admin/components/sidebar.php") ?>
        <?php $this->endContent() ?>
        <!-- end of sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <!-- topbar -->
                <?php $this->beginContent("@app/views/layouts/admin/components/topbar.php") ?>
                <?php $this->endContent() ?>
                <!-- end of topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="col-12 d-flex justify-content-end">
                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">

                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                <i class="fas fa-fw fa-cog"></i> Setting</a>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <?= $content ?>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php $this->beginContent("@app/views/layouts/admin/components/footer.php") ?>
            <?php $this->endContent() ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>


    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>