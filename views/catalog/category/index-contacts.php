<?php

use common\modules\catalog\models\CatalogCategory;
use frontend\widgets\twigRender\TwigRender;
use pantera\leads\widgets\form\LeadForm;
use yii\web\View;

$this->params['breadcrumbs'] = [];
foreach ($model->parents as $parent) {
    if ($parent->depth > 0) {
        $this->params['breadcrumbs'][] = [
            'label' => $parent->name,
            'url' => $parent->present()->getUrl()
        ];
    }
}
$this->params['breadcrumbs'][] = $model->name;

/* @var $this View */
/* @var $model CatalogCategory */
?>
</div>
<main class="page-contacts__content">
    <div class="container">
        <h1><?= Yii::$app->seo->getH1() ?></h1>
        <div class="page-contacts__tabs">
            <?php if (0) : ?>
                <ul class="page-contacts__nav-tabs nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#contacts-tab-1"><i class="fa fa-map-marker"></i> Москва</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#contacts-tab-2"><i class="fa fa-map-marker"></i> Волгоград</a>
                    </li>
                </ul>
            <?php endif; ?>
            <div class="page-contacts__tab-content tab-content mt-4">
                <div class="tab-pane fade show active" id="contacts-tab-1">
                    <div class="row">
                        <div class="col-lg-4">
                            <ul class="page-contacts__contact-list ul-reset">
                                <li class="page-contacts__contact-item contact-item">
                                    <div class="contact-item__icon-wrap">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                            <use xlink:href="/images/sprite.svg#icon-address"></use>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="contact-item__key">Адрес:</div>
                                        <div class="contact-item__value"><?= Yii::$app->contactsManager->get('address') ?></div>
                                    </div>
                                </li>
                                <li class="page-contacts__contact-item contact-item">
                                    <div class="contact-item__icon-wrap">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                            <use xlink:href="/images/sprite.svg#icon-tel"></use>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="contact-item__key">Отдел продаж:</div>
                                        <div class="contact-item__value"><?= Yii::$app->contactsManager->get('phone_sales_department') ?></div>
                                        <div class="contact-item__key">Бухгалтерия:</div>
                                        <div class="contact-item__value"><?= Yii::$app->contactsManager->get('phone_bookkeeping') ?></div>
                                        <div class="contact-item__key">Сотрудничество:</div>
                                        <div class="contact-item__value"><?= Yii::$app->contactsManager->get('phone_collaboration') ?></div>
                                    </div>
                                </li>
                                <li class="page-contacts__contact-item contact-item">
                                    <div class="contact-item__icon-wrap">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                            <use xlink:href="/images/sprite.svg#icon-email"></use>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="contact-item__key">Email:</div>
                                        <div class="contact-item__value"><?= Yii::$app->contactsManager->get('email') ?></div>
                                    </div>
                                </li>
                                <li class="page-contacts__contact-item contact-item">
                                    <div class="contact-item__icon-wrap">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                            <use xlink:href="/images/sprite.svg#icon-mode"></use>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="contact-item__key">Режим работы:</div>
                                        <div class="contact-item__value"><?= Yii::$app->contactsManager->get('opening_hours') ?></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-8">
                            <ul class="page-contacts__map-tabs nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#map-tab-1">Google</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#map-tab-2">Яндекс</a>
                                </li>
                            </ul>
                            <div class="tab-content mt-3">
                                <div class="tab-pane fade show active" id="map-tab-1">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <?= trim($model->present()->getAttributeValueByKey('map_google')) ?>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="map-tab-2">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <?= trim($model->present()->getAttributeValueByKey('map_yandex')) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="page-contacts__route">
                                <h2>Как добраться</h2>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="page-contacts__route-item page-contacts__route-item--foot">
                                            <div class="page-contacts__route-title">Пешком</div>
                                            <div class="page-contacts__route-text">
                                                <?= trim($model->present()->getAttributeValueByKey('how_to_get_on_foot')) ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="page-contacts__route-item page-contacts__route-item--car">
                                            <div class="page-contacts__route-title">Авто</div>
                                            <div class="page-contacts__route-text">
                                                <?= trim($model->present()->getAttributeValueByKey('how_to_get_by_car')) ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if (0) : ?>
                    <div class="tab-pane fade" id="contacts-tab-2">
                        Волгоград инфо
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="requisites light-bg">
        <div class="container">
            <h2>Наши реквизиты</h2>
            <?= TwigRender::widget([
                'text' => $model->description,
            ]) ?>
        </div>
    </div>

</main>

<?= $this->render('@theme/views/_video') ?>

<?= LeadForm::widget([
    'mode' => LeadForm::MODE_INLINE,
    'key' => 'contact',
]) ?>
