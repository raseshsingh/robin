<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */

/* @var $model \common\models\LoginForm */

use common\widgets\Alert;
//use kartik\form\ActiveForm;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'Login';
?>
<?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
<section>
    <div class="bg-primary position-absolute h-100 top-0 right-0 zindex-110 col-lg-6 col-xl-6 zindex-100 d-none d-lg-flex flex-column justify-content-end rounded-bottom-left"
         data-bg-size="cover"
         data-bg-position="center">

        <?= Html::img('@web/images/login-banner-min.jpg', ['alt' => 'Banner-img','class'=>'img-as-bg blend-mode--multiply rounded-bottom-left']) ?>

        <div class="row position-relative zindex-110 p-5">
            <div class="col-md-8 text-center mx-auto">
                <span class="badge badge-warning badge-pill">News</span>
                <h5 class="h5 text-white mt-3">The all new Robin is here</h5>
                <p class="text-white opacity-8">Everything you need to create amazing Portfolio at scale.</p>
            </div>
        </div>
    </div>
    <div class="container-fluid d-flex flex-column">
        <div class="row align-items-center min-vh-100">

            <div class="col-sm-7 col-lg-6 col-xl-6 py-6 py-md-0 mx-auto ml-lg-0">
                <div class="row justify-content-center">
                    <div class="col-11 col-lg-10 col-xl-6">
                        <div>
                            <div class="mb-5"><h6 class="h3 mb-1">Welcome back!</h6>
                                <p class="text-muted mb-0">Sign in to your account to continue.</p></div>
                            <span class="clearfix"></span>

                            <div class="form-group"><label class="form-control-label">Username</label>


                                <?= $form->field($model, 'username', ['template' => '<div class="input-group input-group-merge">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                 width="1em"
                                                 height="1em"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-user">
                                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                            </svg>
                                        </span>
                                    </div>
                                    
                                {input}</div>{hint}{error}'])->textInput(['class' => 'form-control', 'placeholder' => 'Username'])->label(false); ?>

                            </div>
                            <div class="form-group mb-4">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div><label class="form-control-label">Password</label></div>
                                    <div class="mb-2">
                                        <?=Html::a('Lost Password?',['site/forget-password'], ['class' => 'small text-muted text-underline--dashed border-primary'])?>
                                    </div>
                                </div>
                                <?= $form->field($model, 'password', ['template' => '<div class="input-group input-group-merge">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-key"><path d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4"></path></svg>
                                        </span>
                                    </div>
                                    {input}
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <a id="reveal" href="#" data-toggle="password-text" data-target="#loginform-password">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                      width="1em"
                                                      height="1em"
                                                      viewBox="0 0 24 24"
                                                      fill="none"
                                                      stroke="currentColor"
                                                      stroke-width="2" 
                                                      stroke-linecap="round"
                                                      stroke-linejoin="round"
                                                      class="feather feather-eye">
                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                </svg>
                                            </a>
                                        </span>
                                    </div>{hint}{error}
                                    '])->passwordInput(['placeholder' => '********', 'class' => 'form-control'])->label(false); ?>

                            </div>
                            <div class="mt-4">
                                <?= Html::submitButton('Sign in', ['class' => 'btn btn-primary btn-block', 'name' => 'login-button']) ?>
                            </div>
                            <div class="pt-3 text-center"><span class="text-xs text-uppercase">or</span></div>
                            <div class="row">
                                <div class="col-sm-6"><a href="#" class="btn btn-block btn-neutral btn-icon mb-3 mb-sm-0">
                                        <span class="btn-inner--icon">
                                            <img src="https://upload.wikimedia.org/wikipedia/commons/9/91/Octicons-mark-github.svg" alt="Image placeholder">
                                        </span>
                                        <span class="btn-inner--text">Github</span>
                                    </a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="#" class="btn btn-block btn-neutral btn-icon">
                                        <span class="btn-inner--icon">
                                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png" alt="GoogleLogo">
                                        </span>
                                        <span class="btn-inner--text">Google</span></a></div>
                            </div>
                            <div class="mt-4">
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

<?php ActiveForm::end(); ?>
