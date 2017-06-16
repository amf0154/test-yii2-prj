<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
$this->title = 'Registration';
?>
<?php if($login){ ?>
<p>Вы ввели логин= <b><?=$login?></b>
<p>Вы ввели email= <b><?=$email?></b>
<?php } ?>
<?php $f = ActiveForm::begin(); ?>
<?=$f->field($register, 'login'); ?>
<?=$f->field($register, 'email'); ?>
<?=$f->field($register, 'password'); ?>
<?= Html::submitButton('Register'); ?>
<?php ActiveForm::end(); ?>