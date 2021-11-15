<!doctype html>
<html lang="en">
<head>
    <meta data-wb-role="include" src="template" data-wb-name="head.inc.php">
</head>
<body>

<meta data-wb-role="include" src="template" data-wb-name="header.inc.php">

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

<div class="participant participant--white">
    <div class="container">
        <div class="title-30">
            {{header}}
        </div>

       <!-- <div class="participant__row row" data-wb-role="foreach" data-wb-from="content" data-wb-limit="12" data-wb-children="false" data-wb-hide="wb">
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="participant__item">
                    <a href="{{data.link}}" class="participant__link" target="_blank">{{name}}</a>
                </div>
            </div>
        </div>-->
        <div class="row participant__region">
            <div class="col-lg mb-3 mb-lg-0">
                <div class="participant__sort sort">
                    <div class="sort__title">Выбрать регион:</div>
                    <div class="sort__dropdown dropdown dropdown-custom">
                <span class="dropdown-custom__link link-default dropdown-toggle" id="sort-blog-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Москва
                </span>
                        <div class="dropdown-menu" aria-labelledby="sort-blog-button" data-label="Регион" data-wb-role="tree" data-wb-item="area" data-wb-hide="wb">
                            <span class="dropdown-item" data-region="{{id}}">{{name}}</span>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-auto text-lg-right">
                Всего клиник в системе: {{_var.count_clinics}}
            </div>
        </div>

        <div id="clinicsListview">
            <div class="participant__row row" data-wb-role="foreach" data-wb-form="clinics" data-wb-where='region="77"'>
                <div class="col-sm-6 col-md-4 col-lg-3" data-region="{{region}}">
                    <div class="participant__item">
                        <a href="{{link}}" class="participant__link" target="_blank">
                            {{name}}
                        </a>
                    </div>
                </div> 
            </div>
        </div>
        <div class="participant__warning">
            <div class="participant__warning-inner">
                {{content.block1.data.text}}
            </div>
        </div>
    </div>
</div>



<meta data-wb-role="include" src="template" data-wb-name="footer.inc.php">
</body>
</html>
