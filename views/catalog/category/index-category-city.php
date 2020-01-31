<?php

use frontend\widgets\twigRender\TwigRender;
use pantera\leads\widgets\form\LeadForm;
use yii\helpers\Html;
use yii\web\View;

/* @var $this View */
$this->title = $model->name;

?><main class="page-site-category__content">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php if ($model->description) : ?>
    <div class="text-block">
        <div class="editor-content">
            <?= TwigRender::widget([
                'text' => $model->description,
            ]) ?>
        </div>
    </div>
    <?php endif; ?>

    <?= $this->render('@theme/views/_filter') ?>

    <?= \yii\widgets\ListView::widget([
        'dataProvider' => new \yii\data\ActiveDataProvider([
            'query' => \common\modules\shop\models\ShopProduct::find()
        ]),
        'options' => [
            'class' => 'products-list',
        ],
        'itemView' => '@theme/views/_product-card',
        'itemOptions' => [
            'class' => 'col-xl-3 col-lg-4 col-sm-6 catalog-page__item',
        ],
        'layout' => '<div class="row">{items}</div>{pager}',
        'pager' => [
            'class' => 'yii\bootstrap4\LinkPager',
            'prevPageLabel' => '<i class="fa fa-angle-left"></i> Назад',
            'nextPageLabel' => 'Вперед <i class="fa fa-angle-right"></i>',
            'listOptions' => [
                'class' => ['page-search__pagination pagination justify-content-center align-items-center']
            ]
        ],
    ]) ?>

</main>

</div><!-- закрываем .container -->

<?= $this->render('@theme/views/_works-map--with-form') ?>

<?php if ($bottom_text = Yii::$app->seo->text): ?>
<div class="text-block">
    <div class="container">
        <div class="editor-content">
            <?= $bottom_text ?>
        </div>
    </div>
</div>
<?php endif; ?>

<?= $this->render('@theme/views/_works') ?>

<div class="contact-form-block">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-8">
                <?= LeadForm::widget([
                    'key' => 'request',
                    'mode' => LeadForm::MODE_INLINE,
                ]) ?>
            </div>
        </div>
    </div>
</div>
