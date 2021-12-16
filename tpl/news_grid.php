<!doctype html>
<html lang="en">
<head>
<meta data-wb-role="include" src="template" data-wb-name="head.inc.php">
</head>
<body>

<meta data-wb-role="include" src="template" data-wb-name="header.inc.php">
<meta data-wb-selector="title" data-wb-html="Новости">

<meta data-wb-role="variable" var="title" value="Статьи" data-wb-where="'{{_route.uri}}'=='/blog' OR '{{_route.uri}}'=='/blog/' ">
<meta data-wb-role="variable" var="title" value="Новости" data-wb-where="'{{_route.uri}}'=='/news' OR '{{_route.uri}}'=='/news/'">

<meta data-wb-role="variable" var="act_blog" value="active" data-wb-where="'{{_route.uri}}'=='/blog' OR '{{_route.uri}}'=='/blog/' ">
<meta data-wb-role="variable" var="act_news" value="active" data-wb-where="'{{_route.uri}}'=='/news' OR '{{_route.uri}}'=='/news/'">

<meta data-wb-role="variable" var="wh" value=" AND '{{article}}'=='on'" data-wb-where="'{{_route.uri}}'=='/blog' OR '{{_route.uri}}'=='/blog/' ">
<meta data-wb-role="variable" var="wh" value=" AND '{{article}}'!='on'" data-wb-where="'{{_route.uri}}'=='/news' OR '{{_route.uri}}'=='/news/'">

<div class="bread-crumbs">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/" class="link-default">Главная</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{_var.title}}</li>
            </ol>
        </nav>
    </div>
</div>

<div class="news">
    <div class="container">
        <div class="news__title title-30">
            {{_var.title}}
        </div>
        
        <div class="news__sort sort">
            <!--
            <div class="sort__title">Сортировать по:</div>
            <div class="sort__dropdown dropdown dropdown-custom">
                <span class="dropdown-custom__link link-default dropdown-toggle" id="sort-blog-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Популярные
                </span>
                <div class="dropdown-menu" aria-labelledby="sort-blog-button">
                    <span class="dropdown-item">Популярные</span>
                    <span class="dropdown-item">Новые</span>
                </div>
            </div>
            -->
            <!--ul class="nav nav-tabs nav-tabs--custom">
                <li class="nav-item"><a class="nav-link {{_var.act_news}}" href="/news/">Новости</a></li>
                <li class="nav-item"><a class="nav-link {{_var.act_blog}}" href="/blog/">Статьи</a></li>
            </ul-->

        </div>
        

		<meta data-wb-role="variable" var="first_news" value="{{id}}">
        <div class="new-big" data-wb-role="foreach" data-wb-table="news" data-wb-where="'{{active}}'=='on' {{_var.wh}}" data-wb-limit="1" data-wb-tpl="false" data-wb-sort="date:d">
            <meta data-wb-role="variable" var="first_news" value="{{id}}">
            <div class="row">
                <div class="col-lg-6 new-big__left">
                    <a href="/news/{{id}}/">
                        <img data-wb-role="thumbnail" data-wb-size="590;356" src="0" alt="" class="new-big__img">
                    </a>
                </div>
                <div class="col-lg-6 col-xl new-big__right">
                    <div class="new-big__content">
                        <a href="/news/{{id}}/" class="new-big__title title-30 link-default">
                            {{header}}
                        </a>
                        <div class="date new-big__date">
                            {{date("M d. Y",strtotime({{date}}))}}
                        </div>
                        <div class="new-big__desc">
                            {{strip_tags({{text->wbGetWords(@,"40")}})}}
                        </div>
                    </div>
                    <div class="new-big__btn">
                        <a href="/news/{{id}}/" class="button button--outline">
                            Читать статью
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="news-row row" data-wb-role="foreach" data-wb-table="news" data-wb-more="#moreNews" data-wb-size="6" data-wb-sort="date:d" data-wb-where="active=='on' {{_var.wh}} AND '{{id}}' !=='{{_var.first_news}}'">
            <div class="col-md-6 col-xl-4">
                <div class="new-item" data-wb-where='id>""'>
                    <a href="/news/{{id}}/" class="new-item__link link-default">
                        <img data-wb-role="thumbnail" data-wb-size="425;285" src="0" alt="" class="new-item__img">
                        <span class="new-item__title">
                            {{header}}
                        </span>
                    </a>
                    <div class="date new-item__date">
                        {{date("M d. Y",strtotime({{date}}))}}
                    </div>
                    <div class="new-item__desc">
                        {{strip_tags({{text->wbGetWords(@,"20")}})}}
                    </div>
                </div>
            </div>
        </div>


		

        <div class="more">
            <span class="more__link link-default" id="moreNews">
                Показать больше
            </span>
        </div>
    </div>
</div>

<meta data-wb-role="include" src="template" data-wb-name="footer.inc.php">
</body>
</html>
