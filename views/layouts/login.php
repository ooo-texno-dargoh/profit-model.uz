<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

\app\assets\LoginAsset::register($this);
//
// Turgun
$categories=\app\models\Categories::find()->all();
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <link rel="icon" type="image/png" href="<?=Yii::$app->homeUrl?>loginpage/images/icons/favicon.ico"/>

        <?php $this->head() ?>
    </head>
    <body>
<?php $this->beginBody() ?>
<?//=gl("Bosh sahifa") ?>
<?=$content?>

<?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
