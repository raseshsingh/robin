<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
$this->title = 'Signup';
?>
<?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
<section class="section-half-rounded bg-section-secondary py-0">
    <div class="jumbotron rounded-right left-0 section-inner bg-primary overflow-hidden col-md-9 col-lg-6 d-none d-md-block">
        <?= Html::img('@web/images/reset-lost-banner.jpg', ['alt' => 'Banner-img','class'=>'img-as-bg blend-mode--multiply']) ?>
    </div>
    <div class="container-fluid d-flex flex-column">
        <div class="row align-items-center min-vh-100">
            <div class="col-md-6 col-lg-5 col-xl-4 ml-md-auto mx-lg-auto">
                <div class="card mb-0">
                    <div class="card-body py-5 px-sm-5">
                        <div>
                            <div class="mb-5 text-center"><h6 class="h3 mb-1">Reset password</h6>
                                <p class="text-muted mb-0">We will send you an email that will allow you to reset your password.</p>
                            </div>
                            <span class="clearfix"></span>
                            <?php $form = ActiveForm::begin(['id' => 'reset-password']); ?>

                                    <?= $form->field($model, 'email',['template'=>'<div class="form-group">
                                    <label class="form-control-label">Email address</label>
                                    <div class="input-group input-group-merge">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-at-sign">
                                                    <circle cx="12" cy="12"  r="4"></circle>
                                                    <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path>
                                                </svg>
                                            </span>
                                        </div>                                        
                                        {input}{hint}{error}
                                    </div>'])->textInput(['class' => 'form-control', 'placeholder' => 'name@example.com'])->label(false); ?>
                                </div>

                                <div class="mt-4">
                                    <?= Html::submitButton('Reset password', ['class' => 'btn btn-block btn-primary']) ?>
                                </div>
                            <?php ActiveForm::end(); ?>
                            <div class="mt-4 text-center">
                                <small>Not registered?</small>
                                <?=Html::a('Create account',['site/signup'], ['class' => 'small font-weight-bold'])?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>