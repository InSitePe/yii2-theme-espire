<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use upch\theme\padlock\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <header>
            <?= $this->render("main-navbar.php") ?>
            <?= $this->render("main-sidenav.php") ?>
        </header>
        <main>
            <div class="container">
                <?= $content ?>
            </div>
        </main>
        <footer>
            <div class="copyright">
                UPCH.&nbsp;2017&nbsp;©&nbsp; 
                <a target="_blank" href="#">
                    Padlock
                </a>
            </div>
        </footer>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
