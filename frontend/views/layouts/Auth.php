<?php

/* @var $this \yii\web\View */

/* @var $content string */

use frontend\assets\AuthAppAsset;
use yii\helpers\Html;

AuthAppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <?php $this->registerLinkTag(['rel' => 'icon', 'type' => 'image/ico', 'href' => Yii::$app->request->BaseUrl . '/favicon-cam.ico']); ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>


<?= $content ?>

<?php $this->endBody() ?>
<script defer>
    $("#reveal").click(function() {
        var $pwd = $("input#loginform-password,input#signupform-password");
        if ($pwd.attr('type') === 'password') {
            $pwd.attr('type', 'text');
        } else {
            $pwd.attr('type', 'password');
        }
    });
</script>
</body>
</html>
<?php $this->endPage() ?>
