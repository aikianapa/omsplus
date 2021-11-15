<!doctype html>
<html lang="en">
<head>
<meta data-wb-role="include" src="template" data-wb-name="head.inc.php">
</head>
<body data-wb-alive="true">
<meta data-wb-role="include" src="template" data-wb-name="header.inc.php">

<div class="bread-crumbs">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html" class="link-default">Главная</a></li>
                <li class="breadcrumb-item"><a href="/lk/" class="link-default">Личный кабинет</a></li>
                <li class="breadcrumb-item active" aria-current="page">История заказов</li>
            </ol>
        </nav>
    </div>
</div>

<div class="history-page" data-wb-allow="user">
    <div class="container">
        <div class="history-page__title title-30">
            История заказов
        </div>
        <div class="news__sort sort">
            <div class="sort__title">Отобрать по дате:</div>

            <div class="sort__dropdown dropdown dropdown-custom mr-3">
                <span class="dropdown-custom__link link-default dropdown-toggle" id="sort-month" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">
                    Месяц <span data-wb-where='"{{_env.route.month}}">"0"' data-wb-hide="*">{{_env.route.month}}</span>
                </span>
                <div class="dropdown-menu month" aria-labelledby="sort-month">
                    <span class="dropdown-item">Все</span>
                    <span class="dropdown-item">01</span>
                    <span class="dropdown-item">02</span>
                    <span class="dropdown-item">03</span>
                    <span class="dropdown-item">04</span>
                    <span class="dropdown-item">05</span>
                    <span class="dropdown-item">06</span>
                    <span class="dropdown-item">07</span>
                    <span class="dropdown-item">08</span>
                    <span class="dropdown-item">09</span>
                    <span class="dropdown-item">10</span>
                    <span class="dropdown-item">11</span>
                    <span class="dropdown-item">12</span>
                </div>
            </div>

            <div class="sort__dropdown dropdown dropdown-custom">
                <span class="dropdown-custom__link link-default dropdown-toggle" id="sort-year" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">
                    Год <span data-wb-where='"{{_env.route.year}}">"0"' data-wb-hide="*">{{_env.route.year}}</span>
                </span>
                <div class="dropdown-menu years" aria-labelledby="sort-year" data-wb-role="foreach" data-wb-from="list_years" data-wb-hide="wb" data-wb-tpl="false">
                    <span class="dropdown-item" data-wb-where='_idx="0"'>Все</span>
                    <span class="dropdown-item">{{_value}}</span>
                </div>
            </div>

        </div>
        <div class="history history--page" data-wb-role="formdata" data-wb-form="pages" data-wb-item="services">
            <div class="history__list"  data-wb-role="foreach" data-wb-from="%list_orders" data-wb-size="15" data-wb-hide="wb">

                <div class="history__item history__item--hospitalization">

                    <div class="history__date">{{date("d.m.Y",strtotime({{_created}}))}}</div>
                    <div class="history__time">
                        {{date("H:i",strtotime({{_created}}))}}
                    </div>
                    <div class="history__count row no-gutters">
                        <div class="col-auto pt-1 pr-3">№ {{id}}</div>
                        <!--div class="col fw500" data-wb-role="tree" data-wb-from="%content" data-wb-branch="tabs->{{service}}">{{name}}</div-->
                        <div class="col fw500">{{total}}ք</div>
                    </div>
                    <a target="_blank" data-wb-href data-module="pdfdoc" data-order="{{id}}" data-url="doc_report" class="lk__pdf history__file link-default">Скачать отчёт</a>
                </div>
                <!--div class="history__item history__item--escort">

                    <div class="history__date">15 Марта 2019</div>
                    <div class="history__time">
                        12:30
                    </div>
                    <div class="history__count row no-gutters">
                        <div class="col-auto pt-1 pr-3">№ 0205</div>
                        <div class="col fw500">Сопровождение</div>
                    </div>
                    <a href="#" class="history__file link-default">Скачать приложение к договору</a>
                </div>
                <div class="history__item history__item--control">

                    <div class="history__date">15 Марта 2019</div>
                    <div class="history__time">
                        12:30
                    </div>
                    <div class="history__count row no-gutters">
                        <div class="col-auto pt-1 pr-3">№ 0205</div>
                        <div class="col fw500">Контроль качества лечения</div>
                    </div>
                    <a href="#" class="history__file link-default">Скачать приложение к договору</a>
                </div>
                <div class="history__item history__item--adjustment">

                    <div class="history__date">15 Марта 2019</div>
                    <div class="history__time">
                        12:30
                    </div>
                    <div class="history__count row no-gutters">
                        <div class="col-auto pt-1 pr-3">№ 0205</div>
                        <div class="col fw500">Досудебное урегулирование спора (Медиация)</div>
                    </div>
                    <a href="#" class="history__file link-default">Скачать приложение к договору</a>
                </div-->
                <empty>
                    <div class="alert alert-info">
                        Заказов не найдено.
                    </div>
                </empty>
            </div>
        </div>

        <!--div class="more">
            <span class="more__link link-default">
                Показать больше
            </span>
        </div-->
    </div>
</div>


<meta data-wb-role="include" src="template" data-wb-name="footer.inc.php">
</body>
</html>
