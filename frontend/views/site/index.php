<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';

use yii\helpers\Html;
$this->registerJsFile(
    '@web/scripts/typed.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]
);
?>
<section class="section-half-rounded">
    <div class="jumbotron section-inner left-0 rounded-right bg-primary overflow-hidden col-lg-9">
        <?= Html::img('@web/images/main-banner.jpg', ['alt' => 'Banner-img', 'class' => 'img-as-bg blend-mode--multiply']) ?>
    </div>
    <div class="container text-center text-lg-left py-5">
        <div class="row">
            <div class="col-lg-7 ml-auto">
                <div class="card shadow-lg rounded-lg mb-0">
                    <div class="px-5 py-6">
                        <h2 class="h1 font-weight-bold mb-3">Digital experiences crafted with <span                                    class="text-warning typed" id="type-example-1"
                                    data-type-this="love., patience., dedication.">patienc</span><span
                                    class="typed-cursor">|</span></h2>
                        <p class="lead lh-180">With we have build the platform to get you started with your Creativity.</p>
                        <div class="mt-5">
                            <a href="#" class="btn btn-warning btn-icon shadow-sm hover-translate-y-n3">
                                <span class="btn-inner--text">Learn more</span>
                                <span class="btn-inner--icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                         height="1em" viewBox="0 0 24 24" fill="none"
                                         stroke="currentColor" stroke-width="2"
                                         stroke-linecap="round" stroke-linejoin="round"
                                         class="feather feather-arrow-right">
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                        <polyline points="12 5 19 12 12 19"></polyline>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
