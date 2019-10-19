<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
$error=$model->firstErrors;
?>
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'options'=>['class'=>'login100-form validate-form'],
                'fieldConfig' => [
                    'template' => "{label}\n<div>{input}</div>\n",
                ],
            ]); ?>
<!--            <form class="login100-form validate-form">-->
					<span class="login100-form-title p-b-40">
						<?=gl('Kirish')?>
					</span>
            <?php
            if(sizeof($error))
                echo '<div class="wrap-input100 validate-input m-b-16 alert alert-danger fade show" role="alert"><center>Login yoki parol xato!!!</center> </div>';
            ?>
                <div class="wrap-input100 validate-input m-b-16" data-validate = "Valid email is required: ex@abc.xyz">
                    <?= $form->field($model, 'username')->textInput(['autofocus' => true,'class'=>'input100','placeholder'=>gl('Login')])->label(false) ?>
<!--                    <input class="input100" type="text" name="email" placeholder="Email">-->
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<span class="lnr lnr-user"></span>
						</span>
                </div>

                <div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
                    <?= $form->field($model, 'password')->passwordInput(['class'=>'input100','placeholder'=>gl('Parol')])->label(false) ?>
<!--                    <input class="input100" type="password" name="pass" placeholder="Password">-->
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<span class="lnr lnr-lock"></span>
						</span>
                </div>

                <div class="contact100-form-checkbox m-l-4">
<!--                    --><?//= $form->field($model, 'rememberMe')->checkbox(['input-checkbox100'])->label(false) ?>
                    <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                    <label class="label-checkbox100" for="ckb1">
                        <?=gl('Eslab qolish')?>
                    </label>
                </div>

                <div class="container-login100-form-btn p-t-25">
                    <button class="login100-form-btn" type="submit">
                        <?=gl('Kirish')?>
                    </button>
                </div>

                <div class="text-center w-full p-t-42 p-b-22">
						<span class="txt1">
							<?=gl('Yoki')?>
						</span>
                </div>

                <a href="#" class="btn-face m-b-10">
                    <i class="fa fa-barcode"></i>
                    Barcode
                </a>

                <a href="#" class="btn-face m-b-10">
                    <i class="fa fa-qrcode"> </i>
<!--                    <img src="--><?//=Yii::$app->homeUrl?><!--loginpage/images/icons/icon-google.png" alt="GOOGLE">-->
                    Qr Code
                </a>
            <?php ActiveForm::end(); ?>
<!--            </form>-->
        </div>
    </div>
</div>
