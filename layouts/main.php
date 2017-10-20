<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use insite\theme\espire\assets\AppAsset;

AppAsset::register($this);

$directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/insite/yii2-theme-espire/dist');
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <div class="app header-danger">
            <div class="layout">
                <!-- Side Nav START -->
                <?= $this->render("main-sidenav.php", ["assets" => $directoryAsset]) ?>
                <!-- Side Nav END -->
                <!-- Page Container START -->
                <div class="page-container">
                    <!-- Header START -->
                    <?= $this->render("main-navbar.php", ["assets" => $directoryAsset]) ?>
                    <!-- Header END -->

                    <!-- Content Wrapper START -->
                    <div class="main-content">
                        <div class="container-fluid">
                            <?= $content ?>
                        </div>
                    </div>
                    <!-- Content Wrapper END -->

                    <!-- Footer START -->
                    <?= $this->render("main-footer.php", ["assets" => $directoryAsset]) ?>
                    <!-- Footer END -->

                </div>
                <!-- Page Container END -->
            </div>
        </div>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
