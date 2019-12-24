<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/31/18
 * Time: 4:40 PM
 */

use yii\helpers\Html;
use yii\web\View;

/* @var $this View */
/* @var $links array */
$this->title = '"Дом" - результаты поиска';
$this->params['breadcrumbs'][] = $this->title;
?><main class="page-search__content">
    <h1><?= $this->title ?></h1>
	<div class="input-group">
		<input class="page-search__search-field form-control form-control-lg" type="text" placeholder="Поиск по сайту" value="Дом">
		<div class="input-group-append">
          <button type="submit" class="page-search__search-btn btn btn-primary">Поиск</button>
        </div>
	</div>
    <div class="page-search__text">Если результаты вас не удовлетворяют, пожалуйста, попробуйте еще раз</div>
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
            'options' => [
                'class' => 'text-center',
            ],
        ],
    ]) ?>
    <div class="page-search__btn-wrap text-center">
        <button class="btn btn-lg btn-primary">Показать еще</button>
    </div>
    <ul class="page-search__pagination pagination justify-content-center align-items-center">
        <li class="page-item">
            <a class="page-link" href="#"><i class="fa fa-angle-left"></i> Назад</a>
        </li>
        <li class="page-item active">
            <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">4</a>
        </li>
        <li class="page-item">
            <a class="page-link">...</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">7</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">Вперед <i class="fa fa-angle-right"></i></a>
        </li>
    </ul>
</main>
