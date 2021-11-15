<!doctype html>
<html lang="en">

<head>
    <meta data-wb-role="include" src="template" data-wb-name="head.inc.php">
</head>

<body>

    <meta data-wb-role="include" src="template" data-wb-name="header.inc.php">

    <div class="price">
        <div class="bread-crumbs">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/" class="link-default">Главная</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{header}}</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="container price__container">
            <div class="price__title title-30">
                Цены
            </div>
        </div>
        <div class="price__subtitle">
            <div class="container">
                <div class="row">
                    <div class="col">
                        Услуга
                    </div>
                    <div class="col text-right">
                        Стоимость услуги
                    </div>
                </div>
            </div>
        </div>
        <div class="container" data-wb-role="formdata" data-wb-form="pages" data-wb-item="services" data-wb-hide="wb">
            <div class="price__list" data-wb-role="tree" data-wb-from="content" data-wb-branch="tabs" data-wb-parent="false" data-wb-children="false" data-wb-hide="wb">
                <div class="price__item">
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="price__item-title">
                                {{name}}
                            </div>
                            <!--div class="price__item-text">
                            {{wbGetWords(strip_tags({{data.text}}),30)}}
                        </div-->
                            <div class="mt-2">
                                <a href="/services/#service-{{id}}">Подробно</a>
                            </div>
                        </div>
                        <div class="col-sm-3 text-right">
                            <div class="price__price">
                                {{data.prop.price.value}} <i class="fa fa-rub"></i>
                            </div>
                            <!--div class="mt-2">
                            <a href="/services/#service-{{id}}">Подробно</a>
                        </div-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="price__info" data-wb-role="tree" data-wb-from="content" data-wb-branch="append" data-wb-children="false" data-wb-hide="wb">
            <div class="container">
                {{data.text}}
            </div>
        </div>
    </div>

    <div data-wb-role="formdata" data-wb-form="pages" data-wb-item="action" data-wb-hide="*">
    <div class="action" data-wb-where='"{{active}}" = "on"'>
            {{content.action.data.code}}
    </div>
    </div>
    
    <meta data-wb-role="include" src="template" data-wb-name="footer.inc.php">
</body>

</html>
