<!doctype html>
<html lang="en">
<head>
<meta data-wb-role="include" src="template" data-wb-name="head.inc.php">
</head>
    <style>
        .content-form-block .input:focus~label,
        .content-form-block .input:valid~label {
            top: -20px
        }

        .content-form-block .input:focus {
            outline: none
        }

        .content-form-block .group {
            position: relative;
            margin-bottom: 24px
        }

        @media (min-width: 768px) {
            .content-form-block .group {
                margin-bottom: 40px
            }
        }

        .content-form-block .input {
            padding: 0;
            height: 32px;
            border: none;
            border-bottom: 1px solid #C6C6C6;
            border-radius: 0;
            background: none;
            max-width: 100%
        }

        .content-form-block .input.textarea {
            height: 100px
        }

        .content-form-block .label {
            transition: .2s ease all;
            font-size: 14px;
            top: 6px;
            left: 0;
            margin: 0;
            padding: 0;
            position: absolute;
            pointer-events: none
        }

        .content-title {
            font-family: Montserrat;
            font-weight: 600;
            font-size: 36px;
            line-height: 44px;
            color: #4A4A4A;
            margin: 80px 0;
        }

        .content-form-block {
            background: #F9F9F9;
            padding: 54px 0;
        }

        .content-form-block-title {
            font-family: Montserrat;
            font-weight: 600;
            font-size: 18px;
            line-height: 22px;
            color: #4A4A4A;
            max-width: 445px;
        }

        .content-form-block-hr {
            border: 1px solid #EC231A;
            max-width: 190px;
            margin: 12px 0;
        }

        .content-form-block-description {
            font-family: Montserrat;
            font-size: 16px;
            line-height: 140%;
            color: #4A4A4A;
            max-width: 630px;
        }

        .content-form-block-form {
            border: 1px solid #C6C6C6;
            padding: 48px 24px 24px;
            margin-top: 40px;
        }

        @media (min-width: 768px) {
            .content-form-block-form {
                margin-top: 0px;
            }
        }

        .content-form-block-form .content-button {
            width: 100%;
            display: block;
        }

        .content-list-item {
            padding: 40px 0;
        }

        @media (min-width: 768px) {
            .content-list-item {
                padding: 80px 0;
            }
        }

        .content-list-item:not(:last-child) {
            border-bottom: 1px solid #C6C6C6;
        }

        .content-list-item-title {
            font-family: Montserrat;
            font-style: normal;
            font-weight: 600;
            font-size: 24px;
            line-height: 29px;
            color: #4A4A4A;
            margin-bottom: 40px;
        }

        @media (min-width: 768px) {
            .content-list-item-title {
                margin-bottom: 70px;
            }
        }

        .blocks h1, .blocks h2, .blocks h3, .blocks h4, .blocks h5, .blocks h6, .content-list-item-subtitle {
            font-family: Montserrat;
            font-weight: 600;
            font-size: 18px;
            line-height: 145%;
            color: #4A4A4A;
            margin-bottom: 16px;
        }

        .blocks b, .content-list-item-label {
            font-family: Montserrat;
            font-weight: 600;
            font-size: 13px;
            line-height: 145%;
            color: #4A4A4A;
            margin-bottom: 8px;
        }

        .blocks p, .content-list-item-value {
            font-family: Montserrat;
            font-size: 14px;
            line-height: 145%;
            color: #4A4A4A;
        }

        .content-list-item-value:not(:last-child) {
            margin-bottom: 16px;
        }

        .content-list-item-img {
            object-fit: contain;
            object-position: left;
            max-width: 100%;
            max-width: 265px;
            height: 55px;
            margin: 24px 0;
        }

        @media (min-width: 768px) {
            .content-list-item-img {
                margin: 0;
                max-width: 265px;
            }
        }

        .content-button {
            display: inline-block;
            font-weight: 500;
            font-size: 14px;
            color: #fff;
            padding: 14px 22px;
            background: #EC231A;
            border-radius: 30px;
            outline: none;
            cursor: pointer;
            border: 1px solid #EC231A
        }

        .content-button:hover {
            color: #ec231a;
            text-decoration: none;
            background: transparent
        }

        .content-button:active {
            background: transparent;
            color: #c31810;
            border: 1px solid #c31810
        }

        .content-button:focus {
            outline: none
        }
    </style>
<body>

<meta data-wb-role="include" src="template" data-wb-name="header.inc.php">

    <div class="container">
        <div class="content-title">{{header}}</div>
    </div>

<div class="company" data-wb-role="tree" data-wb-from="content"  data-wb-hide="wb">
    <div class="content-form-block" data-wb-where='"{{id}}" == "block1"'>
        <div class="container">
            <form class="row">
                <input type="hidden" name="_subject" value="Заказ обратного звонка" />
                <input type="hidden" name="_mailto" value="{{data.email}}" />
                <div class="col-12 col-md-8 d-flex align-items-center">
                    <div>
                        <div class="content-form-block-title">
                            {{name}}
                        </div>
                        <div class="content-form-block-hr"></div>
                        <div class="content-form-block-description">
                            {{data.text}}
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="content-form-block-form">
                        <div class="group">
                            <input class="input" type="text" data-wb-mask="+7 (999) 999-99-99" required>
                            <label class="label">
                                Номер телефона
                            </label>
                        </div>
                        <div class="group">
                            <input class="input" required>
                            <label class="label">
                                Имя и фамилия
                            </label>
                        </div>

                        <button class="content-button" data-wb-ajax="/ajax/mail/">
                            Получить срочную консультацию
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


    
    
    <div class="container blocks">
        <div data-wb-role="tree" data-wb-from="content"  data-wb-hide="wb">
        <div class="content-list-item" data-wb-where='"{{id}}" !== "block1"'>
            <div class="row">
                <div class="col-12 col-md-6 d-flex flex-column">
                    <div class="content-list-item-title">
                        {{name}}
                    </div>

                    <div class="flex-fill">
                        <button class="content-button send-message" data-email="{{data.email}}">Отправить обращение</button>
                    </div>
                    <img src="/uploads/pages/{{_route.item}}/{{data.image.0.img}}" class="content-list-item-img" alt="" />
                </div>
                <div class="col-12 col-md-6">
                    {{data.text}}
                </div>
            </div>
        </div>
        </div>
    </div>

    <div class="modal fade" id="content-call-back" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal__close" data-dismiss="modal"></div>
                <div class="modal__title">
                    Пожалуйста, заполните&nbsp;форму!
                </div>
                <form class="form-white form-white--gray">
                    <input type="hidden" name="_subject" value="Обращение с сайта {{_route.host}}" />
                    <input type="hidden" name="_mailto" value="{{_sett.email}}" />
                    <div class="form-body">
                        <div class="input form-white__input">
                            <input class="input__field" type="text" id="last-name" required />
                            <label class="input__label" for="last-name">
                                <span class="input__label-content">Фамилия</span>
                            </label>
                        </div>
                        <div class="input form-white__input">
                            <input class="input__field" type="text" id="first-name" required />
                            <label class="input__label" for="first-name">
                                <span class="input__label-content">Имя</span>
                            </label>
                        </div>
                        <div class="input form-white__input">
                            <input class="input__field" type="text" id="patronymic" required />
                            <label class="input__label" for="patronymic">
                                <span class="input__label-content">Отчество</span>
                            </label>
                        </div>
                        <div class="input form-white__input">
                            <input class="input__field" type="text" data-wb-mask="+7 (999) 999-99-99" id="phone" required />
                            <label class="input__label" for="phone">
                                <span class="input__label-content">Контактный телефон</span>
                            </label>
                        </div>
                        <div class="input form-white__input">
                            <input class="input__field" type="text" id="email" required />
                            <label class="input__label" for="email">
                                <span class="input__label-content">Е-mail</span>
                            </label>
                        </div>
                        <div class="input form-white__input">
                            <textarea class="input__field" type="text" id="body" required></textarea>
                            <label class="input__label" for="body">
                                <span class="input__label-content">Текст обращения</span>
                            </label>
                        </div>
                        <div class="text-center mt-4 pt-1">
                            <span class="button button--red" data-wb-ajax="/ajax/mail/">Отправить</span>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    
    
<meta data-wb-role="include" src="template" data-wb-name="footer.inc.php">
<script>
var jqwait = setInterval(function(){
    if (typeof jQuery == "undefined") return;
    clearInterval(jqwait);
    $(document).ready(function(){
        $(".content-list-item").find("b").parents("p").addClass("content-list-item-label");
        $(".content-list-item").find("p:not(.content-list-item-label)").addClass("content-list-item-value");
        $(".content-list-item").find("h1,h2,h3,h4,h5,h6").addClass("content-list-item-subtitle");
        $(document).on('click', '.send-message', function () {
            if ($('body').hasClass('modal-open')) {
                $(document).one('hidden.bs.modal', '#modal-menu', function () {
                    $('#content-call-back').modal('show');
                });
                $('#modal-menu').modal('hide');
            } else {
                if ($(this).attr('data-email') > '') {
                    $('#content-call-back [name=_mailto]').attr('value',$(this).attr('data-email'));
                } else {
                    $('#content-call-back [name=_mailto]').attr('value','{{_sett.email}}');
                }
                $('#content-call-back').modal('show');
            }
        });
        $(document).on('wb_mail_done',function(ev,a){
            if ($(ev.target).parents('#content-call-back')) {
                $(ev.target).parents('.modal').modal('hide');
                setTimeout(function(){
                    $(ev.target).removeClass('d-none');
                },1000)
            }
        })
    });
},10)
</script>
</body>
</html>