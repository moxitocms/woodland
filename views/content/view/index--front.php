<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 9/18/18
 * Time: 3:45 PM
 */

use common\modules\catalog\models\CatalogCategory;
use frontend\themes\woodland\widgets\mainCatalog\MainCatalog;
use frontend\themes\woodland\widgets\videoList\VideoList;
use pantera\content\models\ContentPage;
use pantera\content\widgets\block\Block;
use pantera\content\widgets\slider\Slider;
use pantera\leads\widgets\form\LeadForm;
use yii\web\View;

$this->context->layout = '//front';

/* @var $this View */
/* @var $model ContentPage */
/** @noinspection PhpUndefinedFieldInspection */
?>

<div class="slider">
    <?= Slider::widget([
        'pluginOptions' => [
            'dots' => true,
            'autoplay' => true,
            'animateIn' => false,
            'animateOut' => false,
            'autoplayHoverPause' => true,
        ],
    ]) ?>

    <div class="slider__form">
        <div class="slider__form-title">Отправить расчёт на проект</div>
        <?= LeadForm::widget([
            'key' => 'order',
            'mode' => LeadForm::MODE_INLINE,
        ]) ?>
    </div>

    <a href="#video-block" class="btn btn-primary btn--video">Смотреть видео <i class="fa fa-play" aria-hidden="true"></i></a>
</div>

<div class="why-us light-bg">
    <div class="container">
        <h1>Домостроительная компания</h1>
        <h2>Почему выбирают нас</h2>
        <div class="row justify-content-center">
            <div class="col-xl-2 col-md-3 col-6">
                <div class="why-us__item why-us-item">
                    <div class="why-us-item__circle">
                        <div class="why-us-item__number" data-from="0" data-to="19">19</div>
                    </div>
                    <div class="why-us-item__descr">Лет <br>работы</div>
                </div>
            </div>
            <div class="col-xl-2 col-md-3 col-6">
                <div class="why-us__item why-us-item">
                    <div class="why-us-item__circle">
                        <div class="why-us-item__number" data-from="0" data-to="2">2</div>
                    </div>
                    <div class="why-us-item__descr">Собственных <br>производства</div>
                </div>
            </div>
            <div class="col-xl-2 col-md-3 col-6">
                <div class="why-us__item why-us-item">
                    <div class="why-us-item__circle">
                        <div class="why-us-item__number" data-from="0" data-to="550">550</div>
                    </div>
                    <div class="why-us-item__descr">Проектов <br>выполненно</div>
                </div>
            </div>
            <div class="col-xl-2 col-md-3 col-6">
                <div class="why-us__item why-us-item">
                    <div class="why-us-item__circle">
                        <div class="why-us-item__number" data-from="0" data-to="200">200</div>
                    </div>
                    <div class="why-us-item__descr">Рабочих <br>в штате</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="categories">
    <div class="container">
        <h2>Категории</h2>
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <div class="categories__item">
                    <a class="categories__item-link" href="#">
                        <div class="categories__item-img-wrap">
                            <img class="categories__item-img" src="/images/category-1.jpg" alt="">
                            <div class="categories__item-descr">Цена от 320 0000 Руб.</div>
                        </div>
                        <div class="categories__item-title">Каркасные дома</div>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <div class="categories__item">
                    <a class="categories__item-link" href="#">
                        <div class="categories__item-img-wrap">
                            <img class="categories__item-img" src="/images/category-2.jpg" alt="">
                            <div class="categories__item-descr">Цена от 320 0000 Руб.</div>
                        </div>
                        <div class="categories__item-title">Дома из бревна</div>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <div class="categories__item">
                    <a class="categories__item-link" href="#">
                        <div class="categories__item-img-wrap">
                            <img class="categories__item-img" src="/images/category-3.jpg" alt="">
                            <div class="categories__item-descr">Цена от 320 0000 Руб.</div>
                        </div>
                        <div class="categories__item-title">Кирпичные дома</div>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <div class="categories__item">
                    <a class="categories__item-link" href="#">
                        <div class="categories__item-img-wrap">
                            <img class="categories__item-img" src="/images/category-4.jpg" alt="">
                            <div class="categories__item-descr">Цена от 320 0000 Руб.</div>
                        </div>
                        <div class="categories__item-title">Дачные дома</div>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <div class="categories__item">
                    <a class="categories__item-link" href="#">
                        <div class="categories__item-img-wrap">
                            <img class="categories__item-img" src="/images/category-5.jpg" alt="">
                            <div class="categories__item-descr">Цена от 320 0000 Руб.</div>
                        </div>
                        <div class="categories__item-title">Дома из бруса</div>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <div class="categories__item">
                    <a class="categories__item-link" href="#">
                        <div class="categories__item-img-wrap">
                            <img class="categories__item-img" src="/images/category-6.jpg" alt="">
                            <div class="categories__item-descr">Цена от 320 0000 Руб.</div>
                        </div>
                        <div class="categories__item-title">Бани</div>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <div class="categories__item">
                    <a class="categories__item-link" href="#">
                        <div class="categories__item-img-wrap">
                            <img class="categories__item-img" src="/images/category-7.jpg" alt="">
                            <div class="categories__item-descr">Цена от 320 0000 Руб.</div>
                        </div>
                        <div class="categories__item-title">Беседки</div>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <div class="categories__item">
                    <a class="categories__item-link" href="#">
                        <div class="categories__item-img-wrap">
                            <img class="categories__item-img" src="/images/category-8.jpg" alt="">
                            <div class="categories__item-descr">Цена от 320 0000 Руб.</div>
                        </div>
                        <div class="categories__item-title">Хозблоки</div>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <div class="categories__item">
                    <a class="categories__item-link" href="#">
                        <div class="categories__item-img-wrap">
                            <img class="categories__item-img" src="/images/category-9.jpg" alt="">
                            <div class="categories__item-descr">Цена от 320 0000 Руб.</div>
                        </div>
                        <div class="categories__item-title">Туалеты</div>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <div class="categories__item">
                    <a class="categories__item-link" href="#">
                        <div class="categories__item-img-wrap">
                            <img class="categories__item-img" src="/images/category-10.jpg" alt="">
                            <div class="categories__item-descr">Цена от 320 0000 Руб.</div>
                        </div>
                        <div class="categories__item-title">Мобильные дома</div>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <div class="categories__item">
                    <a class="categories__item-link" href="#">
                        <div class="categories__item-img-wrap">
                            <img class="categories__item-img" src="/images/category-11.jpg" alt="">
                            <div class="categories__item-descr">Цена от 320 0000 Руб.</div>
                        </div>
                        <div class="categories__item-title">Бытовки</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="projects">
    <div class="container">
        <h2>Проекты</h2>
        <div class="projects__carousel owl-carousel">
            <div class="projects__item product-card">
                <div class="product-card__label product-card__label--discount"><div>скидка</div></div>
                <div class="product-card__img-wrap">
                    <img class="product-card__img" src="/images/product-1.jpg" alt="Дом из бруса 8x8.5 в два этажа брусом с эркером">
                </div>
                <a href="#" class="product-card__title-link">
                    <h3 class="product-card__title">Дом из бруса 8x8.5 в два этажа брусом с эркером</h3>
                </a>
                <ul class="product-card__params ul-reset">
                    <li class="product-card__param">
                        <div class="product-card__param-icon-wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                <use xlink:href="/images/sprite.svg#icon-address"/>
                            </svg>
                        </div>
                        <div class="product-card__param-text">Этажность: <b>2 этажа</b></div>
                    </li>
                    <li class="product-card__param">
                        <div class="product-card__param-icon-wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                <use xlink:href="/images/sprite.svg#icon-bed"/>
                            </svg>
                        </div>
                        <div class="product-card__param-text">Комнат: <b>5</b></div>
                    </li>
                    <li class="product-card__param">
                        <div class="product-card__param-icon-wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                <use xlink:href="/images/sprite.svg#icon-size"/>
                            </svg>
                        </div>
                        <div class="product-card__param-text">Размер: <b>8×8.5</b></div>
                    </li>
                    <li class="product-card__param">
                        <div class="product-card__param-icon-wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                <use xlink:href="/images/sprite.svg#icon-calendar"/>
                            </svg>
                        </div>
                        <div class="product-card__param-text">Сроки: <b>14 дней</b></div>
                    </li>
                </ul>
                <div class="product-card__old-price">Старая цена: <del>850 000 Руб</del></div>
                <div class="product-card__price">Цена: <b>742 500 Руб</b></div>
                <div class="product-card__actions">
                    <button class="product-card__to-cart btn btn-primary">
                        Заказать
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                            <use xlink:href="/images/sprite.svg#icon-cart"/>
                        </svg>
                    </button>
                    <button class="product-card__to-favorites btn btn-outline-success">
                        <span class="sr-only">В избранное</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                            <use xlink:href="/images/sprite.svg#icon-heart"/>
                        </svg>
                    </button>
                    <button class="product-card__to-compare btn btn-outline-success">
                        <span class="sr-only">Сравнить</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                            <use xlink:href="/images/sprite.svg#icon-graph"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="projects__item product-card">
                <div class="product-card__label product-card__label--best-price"><div>лучшая цена</div></div>
                <div class="product-card__img-wrap">
                    <img class="product-card__img" src="/images/product-1.jpg" alt="Дом из бруса 8x8.5 в два этажа брусом с эркером">
                </div>
                <a href="#" class="product-card__title-link">
                    <h3 class="product-card__title">Дом из бруса 8x8.5 в два этажа брусом с эркером</h3>
                </a>
                <ul class="product-card__params ul-reset">
                    <li class="product-card__param">
                        <div class="product-card__param-icon-wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                <use xlink:href="/images/sprite.svg#icon-address"/>
                            </svg>
                        </div>
                        <div class="product-card__param-text">Этажность: <b>2 этажа</b></div>
                    </li>
                    <li class="product-card__param">
                        <div class="product-card__param-icon-wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                <use xlink:href="/images/sprite.svg#icon-bed"/>
                            </svg>
                        </div>
                        <div class="product-card__param-text">Комнат: <b>5</b></div>
                    </li>
                    <li class="product-card__param">
                        <div class="product-card__param-icon-wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                <use xlink:href="/images/sprite.svg#icon-size"/>
                            </svg>
                        </div>
                        <div class="product-card__param-text">Размер: <b>8×8.5</b></div>
                    </li>
                    <li class="product-card__param">
                        <div class="product-card__param-icon-wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                <use xlink:href="/images/sprite.svg#icon-calendar"/>
                            </svg>
                        </div>
                        <div class="product-card__param-text">Сроки: <b>14 дней</b></div>
                    </li>
                </ul>
                <div class="product-card__old-price">Старая цена: <del>850 000 Руб</del></div>
                <div class="product-card__price">Цена: <b>742 500 Руб</b></div>
                <div class="product-card__actions">
                    <button class="product-card__to-cart btn btn-primary">
                        Заказать
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                            <use xlink:href="/images/sprite.svg#icon-cart"/>
                        </svg>
                    </button>
                    <button class="product-card__to-favorites btn btn-outline-success">
                        <span class="sr-only">В избранное</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                            <use xlink:href="/images/sprite.svg#icon-heart"/>
                        </svg>
                    </button>
                    <button class="product-card__to-compare btn btn-outline-success">
                        <span class="sr-only">Сравнить</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                            <use xlink:href="/images/sprite.svg#icon-graph"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="projects__item product-card">
                <div class="product-card__label product-card__label--present"><div>подарок</div></div>
                <div class="product-card__img-wrap">
                    <img class="product-card__img" src="/images/product-1.jpg" alt="Дом из бруса 8x8.5 в два этажа брусом с эркером">
                </div>
                <a href="#" class="product-card__title-link">
                    <h3 class="product-card__title">Дом из бруса 8x8.5 в два этажа брусом с эркером</h3>
                </a>
                <ul class="product-card__params ul-reset">
                    <li class="product-card__param">
                        <div class="product-card__param-icon-wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                <use xlink:href="/images/sprite.svg#icon-address"/>
                            </svg>
                        </div>
                        <div class="product-card__param-text">Этажность: <b>2 этажа</b></div>
                    </li>
                    <li class="product-card__param">
                        <div class="product-card__param-icon-wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                <use xlink:href="/images/sprite.svg#icon-bed"/>
                            </svg>
                        </div>
                        <div class="product-card__param-text">Комнат: <b>5</b></div>
                    </li>
                    <li class="product-card__param">
                        <div class="product-card__param-icon-wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                <use xlink:href="/images/sprite.svg#icon-size"/>
                            </svg>
                        </div>
                        <div class="product-card__param-text">Размер: <b>8×8.5</b></div>
                    </li>
                    <li class="product-card__param">
                        <div class="product-card__param-icon-wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                <use xlink:href="/images/sprite.svg#icon-calendar"/>
                            </svg>
                        </div>
                        <div class="product-card__param-text">Сроки: <b>14 дней</b></div>
                    </li>
                </ul>
                <div class="product-card__old-price">Старая цена: <del>850 000 Руб</del></div>
                <div class="product-card__price">Цена: <b>742 500 Руб</b></div>
                <div class="product-card__actions">
                    <button class="product-card__to-cart btn btn-primary">
                        Заказать
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                            <use xlink:href="/images/sprite.svg#icon-cart"/>
                        </svg>
                    </button>
                    <button class="product-card__to-favorites btn btn-outline-success">
                        <span class="sr-only">В избранное</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                            <use xlink:href="/images/sprite.svg#icon-heart"/>
                        </svg>
                    </button>
                    <button class="product-card__to-compare btn btn-outline-success">
                        <span class="sr-only">Сравнить</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                            <use xlink:href="/images/sprite.svg#icon-graph"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="projects__item product-card">
                <div class="product-card__label product-card__label--bestseller"><div>хит продаж</div></div>
                <div class="product-card__img-wrap">
                    <img class="product-card__img" src="/images/product-1.jpg" alt="Дом из бруса 8x8.5 в два этажа брусом с эркером">
                </div>
                <a href="#" class="product-card__title-link">
                    <h3 class="product-card__title">Дом из бруса 8x8.5 в два этажа брусом с эркером</h3>
                </a>
                <ul class="product-card__params ul-reset">
                    <li class="product-card__param">
                        <div class="product-card__param-icon-wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                <use xlink:href="/images/sprite.svg#icon-address"/>
                            </svg>
                        </div>
                        <div class="product-card__param-text">Этажность: <b>2 этажа</b></div>
                    </li>
                    <li class="product-card__param">
                        <div class="product-card__param-icon-wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                <use xlink:href="/images/sprite.svg#icon-bed"/>
                            </svg>
                        </div>
                        <div class="product-card__param-text">Комнат: <b>5</b></div>
                    </li>
                    <li class="product-card__param">
                        <div class="product-card__param-icon-wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                <use xlink:href="/images/sprite.svg#icon-size"/>
                            </svg>
                        </div>
                        <div class="product-card__param-text">Размер: <b>8×8.5</b></div>
                    </li>
                    <li class="product-card__param">
                        <div class="product-card__param-icon-wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                <use xlink:href="/images/sprite.svg#icon-calendar"/>
                            </svg>
                        </div>
                        <div class="product-card__param-text">Сроки: <b>14 дней</b></div>
                    </li>
                </ul>
                <div class="product-card__old-price">Старая цена: <del>850 000 Руб</del></div>
                <div class="product-card__price">Цена: <b>742 500 Руб</b></div>
                <div class="product-card__actions">
                    <button class="product-card__to-cart btn btn-primary">
                        Заказать
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                            <use xlink:href="/images/sprite.svg#icon-cart"/>
                        </svg>
                    </button>
                    <button class="product-card__to-favorites btn btn-outline-success">
                        <span class="sr-only">В избранное</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                            <use xlink:href="/images/sprite.svg#icon-heart"/>
                        </svg>
                    </button>
                    <button class="product-card__to-compare btn btn-outline-success">
                        <span class="sr-only">Сравнить</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                            <use xlink:href="/images/sprite.svg#icon-graph"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="projects__item product-card">
                <div class="product-card__label product-card__label--best-price"><div>лучшая цена</div></div>
                <div class="product-card__img-wrap">
                    <img class="product-card__img" src="/images/product-1.jpg" alt="Дом из бруса 8x8.5 в два этажа брусом с эркером">
                </div>
                <a href="#" class="product-card__title-link">
                    <h3 class="product-card__title">Дом из бруса 8x8.5 в два этажа брусом с эркером</h3>
                </a>
                <ul class="product-card__params ul-reset">
                    <li class="product-card__param">
                        <div class="product-card__param-icon-wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                <use xlink:href="/images/sprite.svg#icon-address"/>
                            </svg>
                        </div>
                        <div class="product-card__param-text">Этажность: <b>2 этажа</b></div>
                    </li>
                    <li class="product-card__param">
                        <div class="product-card__param-icon-wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                <use xlink:href="/images/sprite.svg#icon-bed"/>
                            </svg>
                        </div>
                        <div class="product-card__param-text">Комнат: <b>5</b></div>
                    </li>
                    <li class="product-card__param">
                        <div class="product-card__param-icon-wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                <use xlink:href="/images/sprite.svg#icon-size"/>
                            </svg>
                        </div>
                        <div class="product-card__param-text">Размер: <b>8×8.5</b></div>
                    </li>
                    <li class="product-card__param">
                        <div class="product-card__param-icon-wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                <use xlink:href="/images/sprite.svg#icon-calendar"/>
                            </svg>
                        </div>
                        <div class="product-card__param-text">Сроки: <b>14 дней</b></div>
                    </li>
                </ul>
                <div class="product-card__old-price">Старая цена: <del>850 000 Руб</del></div>
                <div class="product-card__price">Цена: <b>742 500 Руб</b></div>
                <div class="product-card__actions">
                    <button class="product-card__to-cart btn btn-primary">
                        Заказать
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                            <use xlink:href="/images/sprite.svg#icon-cart"/>
                        </svg>
                    </button>
                    <button class="product-card__to-favorites btn btn-outline-success">
                        <span class="sr-only">В избранное</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                            <use xlink:href="/images/sprite.svg#icon-heart"/>
                        </svg>
                    </button>
                    <button class="product-card__to-compare btn btn-outline-success">
                        <span class="sr-only">Сравнить</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                            <use xlink:href="/images/sprite.svg#icon-graph"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="text-block light-bg">
    <div class="container">
        <h2>Текстовый блок</h2>
        <p>В активе компании склад круглого леса, пилорама, несколько деревообрабатывающих цехов, комплекс сушильных камер, склад готовой продукции, собственный парк автотранспорта. В цехах установлено оборудование для производства домостроительного бруса и подготовки домокомплектов , в том числе и линия для изготовления клеёного бруса. Иными словами, на производственные площади  предприятия мы поместили всё необходимое оборудование для полного технологического цикла по обработке древесины от раскроя бревна до выпуска готовых домокомплектов и другой столярной продукции.</p>
        <ul>
            <li>Доставка по Москве в день заказа!</li>
            <li>Выдача-доставка заказов в Москве - "на завтра"!</li>
            <li>Организуем быструю доставку в любую точку России транспортными компаниями для юр. лиц.</li>
            <li>Получить и оплатить товары можно в многочисленных пунктах выдачи в любом городе России. Оплата в 99% - при получении, никаких предоплат!</li>
        </ul>
        <p>У каждого из нас есть свои слабости. Наша — это деревянное и экологичное домостроение, история которого насчитывает уже не одну тысячу лет.</p>
        <p>Чтобы прикоснуться к истории, мы создали домостроительную компанию «ФОРТУНА» и разместили ее в подмосковной Мещёре, в краю красивых и экологически чистых лесов, жемчужных озёр и рек, на расстоянии 140км. от Москвы, в посёлке ЦУС «Мир» Шатурского района.</p>
        <ol>
            <li>Доставка по Москве в день заказа!</li>
            <li>Выдача-доставка заказов в Москве - "на завтра"!</li>
            <li>Организуем быструю доставку в любую точку России транспортными компаниями для юр. лиц.</li>
        </ol>
        <p>Мы не стоим на месте и в настоящий момент, для наших клиентов функционируют два офиса продаж: В Шатурском районе Московской области, а так-же в г. Волгоград.</p>
        <p>В активе компании склад круглого леса, пилорама, несколько деревообрабатывающих цехов, комплекс сушильных камер, склад готовой продукции, собственный парк автотранспорта. В цехах установлено оборудование для производства домостроительного бруса и подготовки домокомплектов , в том числе и линия для изготовления клеёного бруса. Иными словами, на производственные площади  предприятия мы поместили всё необходимое оборудование для полного технологического цикла по обработке древесины от раскроя бревна до выпуска готовых домокомплектов и другой столярной продукции.</p>
    </div>
</div>

<div class="video-block" id="video-block">
    <div class="container">
        <h2>Видео</h2>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/fVcxQFPvl88?rel=0" allowfullscreen></iframe>
        </div>
    </div>
</div>

<div class="main-tabs">
    <div class="container">
        <ul class="main-tabs__nav-tabs nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#reviews-tab">Отзывы</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#news-tab">Новости</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#articles-tab">Статьи</a>
            </li>
        </ul>
        <div class="main-tabs__tab-content tab-content">
            <div class="tab-pane fade show active" id="reviews-tab">
                <h2>Что клиенты говорят о нас</h2>
                <div class="main-tabs__reviews-carousel owl-carousel">
                    <div class="review-item">
                        <div class="review-item__name">Татьяна Косенко</div>
                        <div class="review-item__date"><i class="fa fa-clock-o"></i> 07.10.19</div>
                        <div class="review-item__text">
                            <p>Долго и качественно я выбирала фирму, которая построит дом по моим требованиям и за приемлемую цену. Когда нашла эту компанию после звонка менеджеру, прежде чем заключить договор, сначала съездила на несколько объектов, которые они раньше строили, что и вам советую. Смогла лично удостовериться, что имею дело с профессионалами, а после того, как залили мне фундамент, я приезжала во время возведения самого сруба и видела, что работа кипит. Каждый был занят своим делом, но работали дружно, как в команде. Дом возвели добротный, с точностью выполнив условия договора, весной этого года думаю продолжить сотрудничество по отделке дома. Выполненной работой осталась очень довольна, здесь вам помогут построить дом вашей мечты.</p>
                        </div>
                    </div>
                    <div class="review-item">
                        <div class="review-item__name">Татьяна Косенко</div>
                        <div class="review-item__date"><i class="fa fa-clock-o"></i> 07.10.19</div>
                        <div class="review-item__text">
                            <p>Долго и качественно я выбирала фирму, которая построит дом по моим требованиям и за приемлемую цену. Когда нашла эту компанию после звонка менеджеру, прежде чем заключить договор, сначала съездила на несколько объектов, которые они раньше строили, что и вам советую. Смогла лично удостовериться, что имею дело с профессионалами, а после того, как залили мне фундамент, я приезжала во время возведения самого сруба и видела, что работа кипит. Каждый был занят своим делом, но работали дружно, как в команде. Дом возвели добротный, с точностью выполнив условия договора, весной этого года думаю продолжить сотрудничество по отделке дома. Выполненной работой осталась очень довольна, здесь вам помогут построить дом вашей мечты.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="news-tab">
                <h2>Последние новости</h2>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="main-tabs__item-card item-card item-card--main-news-item">
                            <a class="item-card__img-link" href="#">
                                <img class="item-card__img" src="/images/main-new-1.jpg" alt="Приглашение на выставку домов из дерева 2019 года">
                            </a>
                            <div class="item-card__date"><i class="fa fa-calendar"></i> 07.10.19</div>
                            <h4 class="item-card__title"><a href="#">Приглашение на выставку домов из дерева 2019 года</a></h4>
                            <a class="item-card__more-link" href="#">Подробнее <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="main-tabs__item-card item-card item-card--main-news-item">
                            <a class="item-card__img-link" href="#">
                                <img class="item-card__img" src="/images/main-new-1.jpg" alt="Приглашение на выставку домов из дерева 2019 года">
                            </a>
                            <div class="item-card__date"><i class="fa fa-calendar"></i> 07.10.19</div>
                            <h4 class="item-card__title"><a href="#">Приглашение на выставку домов из дерева 2019 года</a></h4>
                            <a class="item-card__more-link" href="#">Подробнее <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="main-tabs__item-card item-card item-card--main-news-item">
                            <a class="item-card__img-link" href="#">
                                <img class="item-card__img" src="/images/main-new-1.jpg" alt="Приглашение на выставку домов из дерева 2019 года">
                            </a>
                            <div class="item-card__date"><i class="fa fa-calendar"></i> 07.10.19</div>
                            <h4 class="item-card__title"><a href="#">Приглашение на выставку домов из дерева 2019 года</a></h4>
                            <a class="item-card__more-link" href="#">Подробнее <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="main-tabs__item-card item-card item-card--main-news-item">
                            <a class="item-card__img-link" href="#">
                                <img class="item-card__img" src="/images/main-new-1.jpg" alt="Приглашение на выставку домов из дерева 2019 года">
                            </a>
                            <div class="item-card__date"><i class="fa fa-calendar"></i> 07.10.19</div>
                            <h4 class="item-card__title"><a href="#">Приглашение на выставку домов из дерева 2019 года</a></h4>
                            <a class="item-card__more-link" href="#">Подробнее <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="articles-tab">
                <h2>Актуальные статьи</h2>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="main-tabs__item-card item-card item-card--main-articles-item">
                            <div class="item-card__date"><i class="fa fa-calendar"></i> 07.10.19</div>
                            <a class="item-card__img-link" href="#">
                                <img class="item-card__img" src="/images/main-article-1.jpg" alt="Комформ и уют проживания в деревянном доме">
                            </a>
                            <h4 class="item-card__title"><a href="#">Комформ и уют проживания в деревянном доме</a></h4>
                            <a class="item-card__more-link" href="#">Читать все <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="main-tabs__item-card item-card item-card--main-articles-item">
                            <div class="item-card__date"><i class="fa fa-calendar"></i> 07.10.19</div>
                            <a class="item-card__img-link" href="#">
                                <img class="item-card__img" src="/images/main-article-1.jpg" alt="Комформ и уют проживания в деревянном доме">
                            </a>
                            <h4 class="item-card__title"><a href="#">Комформ и уют проживания в деревянном доме</a></h4>
                            <a class="item-card__more-link" href="#">Читать все <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="main-tabs__item-card item-card item-card--main-articles-item">
                            <div class="item-card__date"><i class="fa fa-calendar"></i> 07.10.19</div>
                            <a class="item-card__img-link" href="#">
                                <img class="item-card__img" src="/images/main-article-1.jpg" alt="Комформ и уют проживания в деревянном доме">
                            </a>
                            <h4 class="item-card__title"><a href="#">Комформ и уют проживания в деревянном доме</a></h4>
                            <a class="item-card__more-link" href="#">Читать все <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="main-tabs__item-card item-card item-card--main-articles-item">
                            <div class="item-card__date"><i class="fa fa-calendar"></i> 07.10.19</div>
                            <a class="item-card__img-link" href="#">
                                <img class="item-card__img" src="/images/main-article-1.jpg" alt="Комформ и уют проживания в деревянном доме">
                            </a>
                            <h4 class="item-card__title"><a href="#">Комформ и уют проживания в деревянном доме</a></h4>
                            <a class="item-card__more-link" href="#">Читать все <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="steps">
    <div class="container">
        <h2>Как мы работаем</h2>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="steps__item step">
                    <div class="step__number">01</div>
                    <div class="step__title" style="background-image: url('/images/1.svg')">Общение</div>
                    <div class="step__descr">Общение с заказчиком, получение информации для отрисовки и просчёта проекта</div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="steps__item step">
                    <div class="step__number">02</div>
                    <div class="step__title" style="background-image: url('/images/2.svg')">Создание</div>
                    <div class="step__descr">Создание<br> проекта и технической документации</div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="steps__item step">
                    <div class="step__number">03</div>
                    <div class="step__title" style="background-image: url('/images/3.svg')">Согласовываем</div>
                    <div class="step__descr">Согласовываем<br> и подписываем документы +&nbsp;предоплата 35%</div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="steps__item step">
                    <div class="step__number">04</div>
                    <div class="step__title" style="background-image: url('/images/4.svg')">Встреча</div>
                    <div class="step__descr">Встреча заказчика<br> с прорабом на участке и обсуждение вопросов</div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="steps__item step">
                    <div class="step__number">05</div>
                    <div class="step__title" style="background-image: url('/images/5.svg')">Вывоз</div>
                    <div class="step__descr">Вывоз домокомплекта,<br> начало работ бригады +&nbsp;вторая оплата 35%</div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="steps__item step">
                    <div class="step__number">06</div>
                    <div class="step__title" style="background-image: url('/images/6.svg')">Приемка</div>
                    <div class="step__descr">Приемка проекта согласно документации, заказчиком и  прорабом +&nbsp;остаток оплаты 30%</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="works-map">
    <div class="container">
        <h2>Карта выполненых объектов</h2>
    </div>
    <iframe src="https://yandex.ru/map-widget/v1/-/CGXCfH1r"></iframe>
</div>

<div class="advantages">
    <div class="container">
        <h2>Наши преимущества</h2>
        <div class="row justify-content-center no-gutters">
            <div class="col-xl col-md-3 col-sm-4 col-6">
                <div class="advantages__item advantage">
                    <div class="advantage__circle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="29" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                            <use xlink:href="/images/sprite.svg#icon-address">
                        </svg>
                    </div>
                    <div class="advantage__descr">Офисы в Москве и&nbsp;Волгограде</div>
                </div>
            </div>
            <div class="col-xl col-md-3 col-sm-4 col-6">
                <div class="advantages__item advantage">
                    <div class="advantage__circle">
                        <img src="/images/advantage-2.png" alt="">
                    </div>
                    <div class="advantage__descr">Собственный склад круглого леса</div>
                </div>
            </div>
            <div class="col-xl col-md-3 col-sm-4 col-6">
                <div class="advantages__item advantage">
                    <div class="advantage__circle">
                        <img src="/images/advantage-3.png" alt="">
                    </div>
                    <div class="advantage__descr">Современная пилорама</div>
                </div>
            </div>
            <div class="col-xl col-md-3 col-sm-4 col-6">
                <div class="advantages__item advantage">
                    <div class="advantage__circle">
                        <img src="/images/advantage-4.png" alt="">
                    </div>
                    <div class="advantage__descr">Цеха по обработке дерева</div>
                </div>
            </div>
            <div class="col-xl col-md-3 col-sm-4 col-6">
                <div class="advantages__item advantage">
                    <div class="advantage__circle">
                        <img src="/images/advantage-5.png" alt="">
                    </div>
                    <div class="advantage__descr">Склад готовой продукции</div>
                </div>
            </div>
            <div class="col-xl col-md-3 col-sm-4 col-6">
                <div class="advantages__item advantage">
                    <div class="advantage__circle">
                        <img src="/images/advantage-6.png" alt="">
                    </div>
                    <div class="advantage__descr">Собственный парк автотранспорта</div>
                </div>
            </div>
            <div class="col-xl col-md-3 col-sm-4 col-6">
                <div class="advantages__item advantage">
                    <div class="advantage__circle">
                        <img src="/images/advantage-7.png" alt="">
                    </div>
                    <div class="advantage__descr">Высокое качество продукции</div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php if (0) : ?>
<div class="content-block">
    <div class="container">
        <div class="content-block__body">
            <?= Block::widget([
                'position' => 'text_about',
            ]) ?>
        </div>
    </div>
</div>

<div class="content-block content-block--video">
    <div class="h2 content-block__title text-center" style="margin-bottom: 0px;">Видео о нас</div>
    <div class="container">
        <div class="front-page-video-holder">
            <?= VideoList::widget([
                'models' => CatalogCategory::findOne(110)->getChildrenActive()->limit(6)->all(),
            ]) ?>
        </div>
    </div>
</div>

<?php if ($model->body || $model->seo->h1): ?>
    <div class="content-block content-block--frontpage-content">
        <div class="container">
            <?php if ($model->seo->h1) : ?>
                <h1 class="title-home">
                    <?= $model->seo->h1 ?>
                </h1>
            <?php endif; ?>
            <?php if ($model->body) : ?>
                <div class="editor-content">
                    <?= $model->body ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>
<?php endif; ?>

<?php if (0): ?>
<div class="cities-block light-bg">
    <div class="container">
        <h2>Города</h2>
        <div class="cities-block__list">
            <ul>
                <li>
                    <a href="">Москва</a>
                </li>
                <li>
                    <a href="">Санкт-Петербург</a>
                </li>
                <li>
                    <a href="">Новосибирск</a>
                </li>
                <li>
                    <a href="">Екатеринбург</a>
                </li>
                <li>
                    <a href="">Нижний Новгород</a>
                </li>
                <li>
                    <a href="">Самара</a>
                </li>
                <li>
                    <a href="">Омск</a>
                </li>
                <li>
                    <a href="">Казань</a>
                </li>
                <li>
                    <a href="">Астрахань</a>
                </li>
                <li>
                    <a href="">Пермь</a>
                </li>
                <li>
                    <a href="">Красноярск</a>
                </li>
                <li>
                    <a href="">Челябинск</a>
                </li>
                <li>
                    <a href="">Ростов-на-Дону</a>
                </li>
                <li>
                    <a href="">Уфа</a>
                </li>
                <li>
                    <a href="">Волгоград</a>
                </li>
                <li>
                    <a href="">Пенза</a>
                </li>
                <li>
                    <a href="">Ижевск</a>
                </li>
                <li>
                    <a href="">Ульяновск</a>
                </li>
                <li>
                    <a href="">Воронеж</a>
                </li>
                <li>
                    <a href="">Саратов</a>
                </li>
                <li>
                    <a href="">Краснодар</a>
                </li>
                <li>
                    <a href="">Тольятти</a>
                </li>
                <li>
                    <a href="">Набережные Челны</a>
                </li>
                <li>
                    <a href="">Тюмень</a>
                </li>
                <li>
                    <a href="">Махачкала</a>
                </li>
                <li>
                    <a href="">Барнаул</a>
                </li>
                <li>
                    <a href="">Владивосток</a>
                </li>
                <li>
                    <a href="">Ярославль</a>
                </li>
                <li>
                    <a href="">Иркутск</a>
                </li>
                <li>
                    <a href="">Рязань</a>
                </li>
                <li>
                    <a href="">Томск</a>
                </li>
                <li>
                    <a href="">Хабаровск</a>
                </li>
                <li>
                    <a href="">Новокузнецк</a>
                </li>
                <li>
                    <a href="">Оренбург</a>
                </li>
                <li>
                    <a href="">Кемерово</a>
                </li>
                <li>
                    <a href="">И другие города России</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php endif; ?>

<div class="works">
    <div class="container">
        <h2>Наши выполненные работы</h2>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <a class="works__item" href="/images/work-1.jpg" data-fancybox="works">
                    <img src="/images/work-1.jpg" alt="">
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a class="works__item" href="/images/work-2.jpg" data-fancybox="works">
                    <img src="/images/work-2.jpg" alt="">
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a class="works__item" href="/images/work-3.jpg" data-fancybox="works">
                    <img src="/images/work-3.jpg" alt="">
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a class="works__item" href="/images/work-4.jpg" data-fancybox="works">
                    <img src="/images/work-4.jpg" alt="">
                </a>
            </div>
        </div>
    </div>
</div>

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
