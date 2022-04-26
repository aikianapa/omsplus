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

<div class="contacts">
    <div class="container">
        <div class="contacts__title title-30">
            {{header}}
        </div>
        <div class="row contacts__row">
            <div class="col-lg-6 contacts__left">
                <div class="contacts__links">
                    <a href="tel:{{_sett.phone}}" class="contacts__link contacts__link--phone link-default">{{_sett.local_phone}}</a>
                    <a href="mailto:{{_sett.email}}" class="contacts__link contacts__link--mail link-default">{{_sett.local_email}}</a>
                </div>

                <div class="coordinator" data-wb-role="tree" data-wb-item="area" data-wb-hide="wb">
                    <div class="row" data-wb-where='"{{data.iso}}" = "{{_cookie.area}}" AND "{{data.coord}}">""'>
                        <div class="col-md-auto">
                            <div class="coordinator__img" style="background-image: url(/tpl/build/img/contacts/coordinator.jpg)"></div>
                        </div>
                        <div class="col">
                            <div class="coordinator__text">
                                <div class="coordinator__red">
                                    Региональный координатор
                                </div>
                                <div class="coordinator__name">
                                    {{data.coord}}
                                </div>
                                <div class="coordinator__position">
                                    {{data.position}}
                                </div>
                                <div class="coordinator__department">
                                    {{data.org}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-wb-role="tree" data-wb-from="content" data-wb-hide="*">
                    <div class="contacts__content">
                        <div class="contacts__subtitle">
                            {{name}}
                        </div>
                        {{data.text}}
                    </div>
                </div>

                <form class="form-white form-white--gray" data-wb-role="tree" data-wb-from="content" data-wb-branch="contacts" data-wb-children="false" data-wb-hide="wb">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input form-white__input">
                                <input class="input__field" type="text" id="contacts-name"/>
                                <label class="input__label" for="contacts-name">
                                    <span class="input__label-content">{{data.prop.name.name}}</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input form-white__input">
                                <input class="input__field" type="text" id="contacts-mail"/>
                                <label class="input__label" for="contacts-mail">
                                    <span class="input__label-content">{{data.prop.email.name}}</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="input form-white__input">
                        <textarea class="input__field" id="contacts-message" cols="30" rows="4"></textarea>
                        <label class="input__label" for="contacts-message">
                            <span class="input__label-content1">{{data.prop.message.name}}</span>
                        </label>
                    </div>
                    <div class="mt-4 pt-1">
                        <span class="button button--red" data-wb-ajax="/ajax/mail/">{{data.prop.send.name}}</span>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 contacts__right">
                <div class="contacts__bg" style="background-image: url(/uploads/{{_form}}/{{_item}}/{{images[0].img}});"></div>
            </div>
        </div>
    </div>
</div>

<meta data-wb-role="include" src="template" data-wb-name="footer.inc.php">

</body>
</html>
