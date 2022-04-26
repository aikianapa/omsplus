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

<div class="company" data-wb-role="tree" data-wb-from="content" data-wb-branch="about" data-wb-children="false" data-wb-hide="wb">
    <div class="container">
        <div class="title-30 company__title">
            {{name}}
        </div>
        <div class="row">
            <div class="col-xl-5 order-xl-last">
                <div class="company__bg" style="background: url('/uploads/{{_form}}/{{_item}}/{{data.image[0][img]}}') no-repeat center bottom;"></div>
            </div>
            <div class="col-xl-7">
                <div class="company__content">
					{{data.text}}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="about-count" data-wb-role="tree" data-wb-from="content" data-wb-branch="counter" data-wb-children="false" data-wb-hide="wb">
    <div class="container">
        <div class="about-count__subtitle">
            {{data.prop.count__subtitle.name}}
        </div>
        <div class="about-count__title title-30">
            {{name}}
        </div>
        <div class="row about-count__row" data-wb-role="foreach" data-wb-from="children" data-wb-tpl="false" data-wb-hide="wb">
            <div class="col-sm-6 col-lg-3">
                <div class="about-count__item">
                    <div class="about-count__count">{{name}}</div>
                    <div class="about-count__desc">
                        {{data.text}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        <!--div class="home-stock" data-wb-role="formdata" data-wb-form="pages" data-wb-item="action" data-wb-hide="wb">
            {{content.action.data.code}}
        </div-->
    
<div class="partners" data-wb-role="tree" data-wb-from="content" data-wb-branch="partners" data-wb-children="false" data-wb-hide="wb">
    <div class="container">
        <div class="partners__title title-30">{{name}}</div>
        <section class="regular slider slider-custom partnerSlider" data-wb-role="foreach" data-wb-from="children" data-wb-tpl="false" data-wb-hide="wb">
            <div class="partnerSlider__item">
                <img src="/uploads/{{_form}}/{{_item}}/{{data.image[0][img]}}">
            </div>
        </section>
    </div>
</div>

<meta data-wb-role="include" src="template" data-wb-name="footer.inc.php">
</body>
</html>
