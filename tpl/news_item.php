<!doctype html>
<html lang="en">
<head>
<meta data-wb-role="include" src="template" data-wb-name="head.inc.php">
</head>
<body>

<meta data-wb-role="include" src="template" data-wb-name="header.inc.php">
<meta data-wb-selector="title" data-wb-html="{{header}}">

<meta data-wb-role="variable" var="title" value="Статьи" data-wb-where="'{{article}}'=='on'">
<meta data-wb-role="variable" var="title" value="Новости" data-wb-where="'{{article}}'!=='on'">

<meta data-wb-role="variable" var="bc" value="/blog/" data-wb-where="'{{article}}'=='on'">
<meta data-wb-role="variable" var="bc" value="/news/" data-wb-where="'{{article}}'!=='on'">

<div class="post">
    <div class="bread-crumbs">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/" class="link-default">Главная</a></li>
                    <li class="breadcrumb-item"><a href="{{_var.bc}}" class="link-default">{{_var.title}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{header}}</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container post__container">
        <div class="post__title title-30">
            {{_var.title}}
        </div>
        <div class="post__subtitle title-30">{{header}}</div>
        <img data-wb-size="1326;400" data-wb-role="thumbnail" src="0" alt="" class="post__img">
        <div class="post__content">
            <div class="date post__date">{{date("M d. Y",strtotime({{date}}))}}</div>
            <div class="">
				{{text}}
			</div>

				<div class="fotorama " data-nav="false" data-allowfullscreen="true" data-width="100%" data-ratio="16/9" data-wb-role="foreach" data-wb-from="images" data-wb-tpl="false" data-wb-hide="wb" data-wb-html="images">
					<div class="media__img-wrap" data-wb-where='visible="1"'>
						<div style="background-image: url('/uploads/{{_form}}/{{_item}}/{{img}}')" class="media__img"></div>
					</div>
				</div>
				<!--meta data-wb-selector=".fotorama" data-wb-replace=".wb-gallery" data-wb-where='images_position[pos]>""' data-wb-hide="*"-->
				<meta data-wb-selector=".fotorama" data-wb-replace="images" data-wb-where='images_position[pos]="" AND "{{images->count()}}">"1"' data-wb-hide="*">
            </div>
        
        <meta data-wb-remove=".wb-gallery">
        <meta data-wb-remove=".fotorama" data-wb-where='images_position[pos]=""'>
        <div class="post__bottom">
            <div class="row">
                <div class="col-auto">
                    <div class="dropdown share">
                        <div class="review__icon review__share" id="dropdownMenuLink" data-toggle="dropdown"
                             aria-haspopup="true" aria-expanded="false">
                            Поделиться
                        </div>
                        <div class="dropdown-menu share__dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <form action="">
                                <script src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
                                <script src="https://yastatic.net/share2/share.js"></script>
                                <div class="ya-share2" data-services="vkontakte,odnoklassniki,facebook,twitter,whatsapp,skype,telegram"></div>
                                <!--div class="share__input-group input-group">
                                    <input type="text" class="form-control" value="https://youtu.be/GVC5adzPpiE"
                                           aria-label="Recipient's username" aria-describedby="button-addon2" readonly>
                                    <div class="input-group-append">
                                        <button class="btn" type="button" id="button-addon2">Копировать ссылку</button>
                                    </div>
                                </div-->
                            </form>
                        </div>
                    </div>
                </div>
                <!--div class="col post__bottom-right">
                    <div class="review__icon review__like">
                        30
                    </div>
                    <div class="review__icon review__dislike">
                        0
                    </div>
                </div-->
            </div>
        </div>
    </div>
</div>


<meta data-wb-role="include" src="template" data-wb-name="footer.inc.php">

</body>
</html>
