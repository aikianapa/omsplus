<!doctype html>
<html lang="en">

<head>
    <meta data-wb-role="include" src="template" data-wb-name="head.inc.php">
</head>

<body>


    <meta data-wb-role="include" src="template" data-wb-name="header.inc.php" class="header--main">

    <div class="home-page-block-1">
        <div class="container d-flex flex-column">
            <div class="d-flex flex-column flex-md-row align-items-start flex-md-fill">
                <div class="flex-md-fill">
                    <div class="home-page-block-1-title" data-wb-role="tree" data-wb-from="content" data-wb-branch="slogan" data-wb-children="false"
                        data-wb-hide="wb">
                        {{name}}
                    </div>

                    <div class="home-page-block-1-label">
                        Мы делаем это
                    </div>

                    <div class="d-flex flex-wrap">
                        <div class="home-page-block-1-item">Оперативно</div>
                        <div class="home-page-block-1-item">По ОМС или квотам</div>
                        <div class="home-page-block-1-item">Без ожиданий и переживаний</div>
                    </div>
                </div>
                <div class="home-page-block-1-form mt-4 mt-md-0">
                    <form class="form-white" id="home-order">

                        <button class="home-page-button block small" data-wb-ajax="/ajax/mail/" data-automail="false" data-wb-tpl="mailform.php">
                            Вызвать медицинского поверенного
                        </button>
                    </form>
                </div>
            </div>

            <div class="home-page-block-1-info">
                Мы используем cookies. Оставаясь на сайте, вы соглашаетесь с политикой конфиденциальности.

                <button class="home-page-block-1-info-button">
                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.49998 9.49999L4.99999 5M4.99999 5L0.499994 0.500006M4.99999 5L9.49998 0.500006M4.99999 5L0.499994 9.49999" stroke="currentColor"
                            stroke-linecap="round" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div class="home-page-block-2">
        <div class="container" data-wb-role="tree" data-wb-from="content" data-wb-branch="counts" data-wb-children="false" data-wb-hide="wb">
            <div class="home-page-title">{{name}}</div>
            <div class="row" data-wb-role="foreach" data-wb-json="{{data.prop}}" data-wb-hide="wb">
                <div class="col-12 col-md-3 home-page-block-2-item mb-3 mb-md-0">
                    <div>{{id}}</div>
                    <div>
                        {{name}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="home-page-block-3">
        <div class="container" data-wb-role="tree" data-wb-from="content" data-wb-branch="info" data-wb-children="false" data-wb-hide="wb">
            <div class="row">
                <div class="col-12 col-md-6 mb-3 mb-md-0" data-wb-role="tree" data-wb-branch="left" data-wb-hide="wb">
                    <div class="home-page-title">{{name}}</div>
                    <div class="home-page-block-3-item">
                        {{data.text}}
                    </div>
                </div>
                <div class="col-12 col-md-6 mb-3 mb-md-0" data-wb-role="tree" data-wb-branch="right" data-wb-hide="wb">
                    <div class="home-page-title">{{name}}</div>
                    <div class="home-page-block-3-item">
                        {{data.text}}
                    </div>
                </div>
            </div>

            <img class="home-page-block-3-img img-fluid" src="/uploads/pages/{{_item}}/{{data.image[0][img]}}" alt="" />
        </div>
    </div>

    <div class="home-page-block-4">
        <div class="container">
            <div class="row" data-wb-role="tree" data-wb-from="content" data-wb-branch="tips" data-wb-parent="false" data-wb-hide="wb">
                <div class="col-12 col-md-6 mb-4 mb-md-0">
                    <div class="d-flex flex-column flex-md-row">
                        <div class="flex-fill">
                            <div class="home-page-title">
                                {{data.prop.tips__title.value}}
                            </div>
                            <div class="home-page-block-4-item">
                                {{data.text}}
                            </div>

                            <button class="home-page-block-4-button">
                                {{data.prop.tips__btn.name}}
                            </button>
                            <a href="{{data.prop.tips__btn.value}}" data-wb-where='"{{data.prop.tips__btn.value}}" > ""' data-wb-hide="wb" class="tips__btn button button--outline">
                                {{data.prop.tips__btn.name}}
                            </a>
                        </div>
                        <img class="mt-3 mt-md-0 img-fluid w-50" src="/uploads/pages/{{_item}}/{{data.image[0][img]}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="home-page-block-5">
        <div class="container" data-wb-role="tree" data-wb-from="content" data-wb-branch="telemed" data-wb-hide="wb">
            <div class="home-page-title">{{data.prop.tips__title.value}}</div>
            <div class="row">
                <div class="col-12 col-md-9 mb-3 mb-md-0 d-flex flex-column">
                    <div class="home-page-block-5-text flex-fill">
                        {{data.text}}
                    </div>

        <a href="{{data.prop.tips__btn.value}}" data-wb-where='"{{data.prop.tips__btn.value}}" > ""' data-wb-hide="wb" class="home-page-button align-self-start mt-3 mt-md-0">
                                {{data.prop.tips__btn.name}}
        </a>
                </div>
                <div class="col-12 col-md-3 mb-3 mb-md-0">
                    <img class="home-page-block-5-img mt-3 mt-md-0 img-fluid" src="/uploads/pages/{{_item}}/{{data.image[0][img]}}" alt="">
                </div>
            </div>
        </div>
    </div>


    <div class="home-page-block-6" data-wb-role="tree" data-wb-from="content" data-wb-branch="services" data-wb-children="false"
        data-wb-hide="wb">
        <div class="container">
            <div class="d-flex flex-column flex-md-row">
                <div class="home-page-title flex-fill">
                    {{data.text}}
                </div>
                <div class="d-flex mt-3 mt-md-0 align-items-center">
                    <button class="home-page-swiper-button home-page-block-6-swiper-button-prev">
          <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M8 2L3 7L8 12L7 14L6.11959e-07 7L7 -8.74228e-08L8 2Z" fill="currentColor" />
          </svg>
        </button>
                    <button class="home-page-swiper-button home-page-block-6-swiper-button-next">
          <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M-2.09815e-06 12L5 7L-3.49691e-07 2L1 1.74846e-07L8 7L0.999998 14L-2.09815e-06 12Z"
                  fill="currentColor" />
          </svg>
        </button>
                </div>
            </div>
        </div>

        <div class="home-page-block-6-swiper swiper">
            <div class="swiper-wrapper" data-wb-role="tree" data-wb-from="children">
                <div class="swiper-slide">
                    <div class="home-page-block-6-swiper-slide">
                        <div class="home-page-block-6-swiper-slide-title">
                            {{name}}
                        </div>
                        <div class="home-page-block-6-swiper-slide-description">
                            {{data.text}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="home-page-block-7">
        <div class="container">
            <div class="d-flex flex-column flex-md-row" data-wb-role="formdata" data-wb-form="pages" data-wb-item="clinics" data-wb-hide="wb">
                <div class="home-page-title flex-fill">
                    {{header}}
                </div>
                <a href="/clinics" class="home-page-link">
                    Все клиники ({{_var.count_clinics}})
                </a>
            </div>

            <div class="row" data-wb-role="foreach" data-wb-form="clinics" data-wb-hide="wb">
                <div class="col-12 col-md-4 home-page-block-7-item" data-wb-where='"{{active}}"="on" AND "{{tohome}}"="on"' data-wb-hide="wb">
                    <div class="d-flex align-items-start">
                        <img class="home-page-block-7-item-img" src="./assets/Rectangle%2092.svg" alt="">
                        <div class="home-page-block-7-item-description">
                            <a href="{{link}}" class="link-default" target="_blank">{{name}}</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="home-page-block-7-info">
                Внимание! Вы можете самостоятельно записаться на консультацию, перейдя по ссылке на сайт выбранной клиники.
            </div>

        </div>
    </div>

    <div class="home-page-block-8">
        <div class="container">
            <div class="d-flex flex-column flex-md-row">
                <div class="home-page-title flex-fill">
                    Актуальные новости и статьи
                </div>
                <a href="/news" class="home-page-link">
                    Все новости и статьи
                </a>
            </div>

            <div class="home-page-block-8-item" data-wb-role="foreach" data-wb-tpl="false" data-wb-table="news" data-wb-where='active="on" AND home="on"'
                data-wb-sort="date:d" data-wb-limit="1">

                <img class="home-page-block-8-item-img img-fluid d-none d-md-block" data-wb-role="thumbnail" data-wb-size="1400;295;src"
                    src="0" alt="">
                <img class="home-page-block-8-item-img img-fluid d-md-none" data-wb-role="thumbnail" data-wb-size="650;295;src" src="0" alt="">

                <div class="home-page-block-8-item-content">
                    <div class="home-page-block-8-item-content-title">
                        {{header}}
                    </div>

                    <div class="home-page-block-8-item-content-date">
                        <a class="float-right home-page-link" href="/news/{{id}}/">подробнее</a>
                        <span class="d-none d-md-inline">Опубликовано: </span>{{date("M d. Y",strtotime({{date}}))}}
                    </div>
                </div>
            </div>

            <div class="row" data-wb-role="foreach" data-wb-tpl="false" data-wb-table="news" data-wb-where='active="on" AND home="on"'
                data-wb-sort="date:d" data-wb-limit="3">
                <div class="col-12 col-md-6" data-wb-where='"{{_idx}}"!=="0"'>
                    <div class="home-page-block-8-item">
                        <img class="home-page-block-8-item-img img-fluid" data-wb-role="thumbnail" data-wb-size="650;295;src" src="0" alt="">

                        <div class="home-page-block-8-item-content">
                            <div class="home-page-block-8-item-content-title">
                                {{header}}
                            </div>

                            <div class="home-page-block-8-item-content-date">
                                <a class="float-right home-page-link" href="/news/{{id}}/">подробнее</a>
                                <span class="d-none d-md-inline">Опубликовано: </span>{{date("M d. Y",strtotime({{date}}))}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="home-page-block-9">
        <div class="container">
            <div class="d-flex flex-column flex-md-row">
                <div class="home-page-title flex-fill">
                    Посмотрите, что о нас пишут
                </div>
                <div class="d-flex mt-3 mt-md-0 align-items-center">
                    <button class="home-page-swiper-button home-page-block-9-swiper-button-prev">
                        <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 2L3 7L8 12L7 14L6.11959e-07 7L7 -8.74228e-08L8 2Z" fill="currentColor" />
                        </svg>
                    </button>
                    <button class="home-page-swiper-button home-page-block-9-swiper-button-next">
                        <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M-2.09815e-06 12L5 7L-3.49691e-07 2L1 1.74846e-07L8 7L0.999998 14L-2.09815e-06 12Z" fill="currentColor" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div class="home-page-block-9-swiper swiper">
            <div class="swiper-wrapper" data-wb-role="foreach" data-wb-tpl="false" data-wb-form="comments" data-wb-sort="date:d" data-wb-where='active = "on"'>
                <div class="swiper-slide">
                    <div class="home-page-block-9-swiper-slide">
                        <div class="home-page-block-9-swiper-slide-name">
                            {{name}}
                        </div>
                        <div class="home-page-block-9-swiper-slide-date">
                            {{date("M d. Y",strtotime({{date}}))}}
                        </div>
                        <div class="home-page-block-9-swiper-slide-content">
                            {{text}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="d-flex align-items-center mt-4">
                <button class="home-page-button">Оставить отзыв</button>
                <a href="#" class="home-page-link">Все отзывы (8)</a>
            </div>
        </div>
    </div>

    <meta data-wb-role="include" src="template" data-wb-name="footer.inc.php">
</body>

</html>