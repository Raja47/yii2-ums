<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>
    <div class="wrapper text-center">
        <strong>Sign in to get in touch</strong>
    </div>
    <form action="login"
        method="post"
        name="form"
        class="form-validation">
        <input type="hidden"
            name="<?php echo Yii::$app->request->csrfParam; ?>"
            value="<?php echo Yii::$app->request->csrfToken; ?>">
        <div class="list-group list-group-sm">
            <div class="list-group-item">
                <input type="text" placeholder="Email" required
                    class="form-control no-border" name="email">
            </div>
            <div class="list-group-item">
                <input type="password" placeholder="Password" required
                    class="form-control no-border" name="password">
            </div>
        </div>
        <button type="submit" class="btn btn-lg btn-primary btn-block">
            Log in
        </button>
    </form>
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>


<!-- 
<?php


$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title; ?>

<div class="container w-xxl w-auto-xs">
    <a href class="navbar-brand block m-t">OpenXcell Pvt. Ltd.</a>
    <div class="m-b-lg">
        <div class="wrapper text-center">
            <strong>Sign in to get in touch</strong>
        </div>
        <form action="/advanced/admin/site/login"
              method="post"
              name="form"
              class="form-validation">
            <div class="list-group list-group-sm">
                <div class="list-group-item">
                    <input type="text" placeholder="Email" required
                           class="form-control no-border" name="email">
                </div>
                <div class="list-group-item">
                    <input type="password" placeholder="Password" required
                           class="form-control no-border" name="password">
                </div>
            </div>
            <button type="submit" class="btn btn-lg btn-primary btn-block">
                Log in
            </button>
        </form>
    </div>
</div> -->