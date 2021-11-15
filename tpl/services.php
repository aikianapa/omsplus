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

<div class="services">
    <div class="container">

        <div class="services__title title-30">
            {{header}}
        </div>
        <div id="nav-scroll" class="nav-scroll">
            <ul class="nav nav-tabs nav-tabs--custom" role="tablist" data-wb-role="tree" data-wb-from="content" data-wb-branch="tabs" data-wb-parent="false" data-wb-children="false" data-wb-hide="wb">
                <li class="nav-item">
					<meta data-wb-role="variable" var="active" data-wb-if='_ndx="1"' value="active" else="">
                    <a class="nav-link {{_var.active}}" data-toggle="tab" style="cursor:pointer;" href="#service-{{id}}" role="tab"
                       aria-controls="service-{{id}}"><span>{{name}}</span></a>
                </li>
            </ul>
        </div>
        <div class="tab-content" data-wb-role="tree" data-wb-from="content" data-wb-branch="tabs" data-wb-parent="false" data-wb-children="false" data-wb-hide="wb">
			<meta data-wb-role="variable" var="active" data-wb-if='_ndx="1"' value="show active" else="">
            <div class="tab-pane fade {{_var.active}}" id="service-{{_ndx}}" role="tabpanel">
                <div class="row">
                    <div class="col-lg-3 order-lg-last d-none d-lg-block">
                        <div class="sidebar-fixed">
                            <div class="services__subtitle mb-3">
                                Ваши действия
                            </div>
                            <div class="service-sidebar" data-wb-role="foreach" data-wb-from="children.links.data.prop" data-wb-hide="wb">
                                <a href="{{value}}" class="link-default service-sidebar__link service-sidebar__link-active">{{name}}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="service-content">
                            <div class="row service-content__title">
                                <div class="col">
                                    <div class="services__subtitle mb-3">
                                        {{name}}
                                    </div>
                                </div>
                                <div class="col-sm-auto">
                                    <div class="button button--red btn-block button--order" data-toggle="modal" data-target="#modal-order">Вызов медицинского поверенного</div>
                                </div>
                            </div>
							{{data.text}}
							<meta data-wb-selector=".service-content q" data-wb-addclass="service-content__quote quote d-block" data-wb-hide="*">
                            <div class="row block-image" data-wb-role="tree" data-wb-from="children" data-wb-branch="subblock" data-wb-children="false" data-wb-hide="wb">
                                <div data-wb-hide="*">
                                <div class="col-md-auto block-image__left" data-wb-where='"{{data[image][0][img]}}" > ""'>
                                    <div class="block-image__img" style="background-image: url(/uploads/{{_form}}/{{_item}}/{{data.image[0].img}})"></div>
                                </div>
                                <div class="col block-image__right" data-wb-where='name > "" AND data[text]>""'>
                                    <div class="block-image__title services__subtitle">
                                        {{name}}
                                    </div>
									{{data.text}}
                                </div>
                                </div>
                            </div>
                            
                            <div class="row services-count" data-wb-role="tree" data-wb-from="children" data-wb-branch="subblock" data-wb-parent="false" data-wb-hide="wb">
                                <div class="col-lg services-count__item">
                                    <div class="services-count__count">
                                        {{name}}
                                    </div>
                                    <div class="services-count__text">
                                        {{data.text}}
                                    </div>
                                </div>
                            </div>

                            <div class="button button--red button--order" data-toggle="modal" data-target="#modal-order">Вызов медицинского поверенного</div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="consult" data-wb-role="tree" data-wb-from="content" data-wb-branch="consult" data-wb-children="false" data-wb-hide="wb">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-auto">
                <div class="consult__quest">
                    {{name}}
                </div>
            </div>
            <div class="col">
                <div class="consult__quote quote">
                    {{data.text}}
                </div>
            </div>
            <div class="col-lg-auto">
                <span class="button button--white" data-toggle="modal" data-target="#modal-question">{{data.prop.button.name}}</span>
            </div>
        </div>
    </div>
</div>

<meta data-wb-role="include" src="template" data-wb-name="footer.inc.php">
<script>
	$(document).ready(function(){
		var hash=document.location.hash;
		if (hash > "") {
				$("[data-toggle=tab][href='"+hash+"']").trigger("click");
		}

		$("a.footer__menu-link.service").on("click",function(){
			var hash=explode("#",$(this).attr("href"));
			hash="#"+hash[1];
			$("[data-toggle=tab][href='"+hash+"']").trigger("click");
			$('html, body').animate({ scrollTop: $(window.location.hash).offset().top -100}, 500);
		});
	})

</script>

</body>
</html>
