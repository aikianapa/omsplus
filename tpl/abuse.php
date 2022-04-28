<!doctype html>
<html lang="en">

<head>
    <meta data-wb-role="include" src="template" data-wb-name="head.inc.php">
</head>

<body>

    <meta data-wb-role="include" src="template" data-wb-name="header.inc.php">

    <div data-wb-role="formdata" data-wb-form="pages" data-wb-item="quote">
        <div class="container">
            <div class="content-title abuse-title">{{header}}</div>
        </div>

        <div class="company" data-wb-role="tree" data-wb-from="content" data-wb-hide="wb">
            <div class="content-form-block gray" data-wb-where='"{{id}}" == "block1"'>
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

    </div>


    <div class="content-form-block" data-wb-where='"{{id}}" == "block1"'>
        <div class="container">
            <form class="row abuse-form-top">
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
                            <input class="input" type="text" data-wb-mask="+7 (999) 999-99-99" name="phone_top">
                            <label class="label">
                                Номер телефона
                            </label>
                        </div>

                        <div class="group">
                            <input class="input" name="person_top">
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



    <div class="container blocks">

    <meta data-wb-role="include" src="template" data-wb-src="/module/abuse">

    </div>

    <meta data-wb-role="include" src="template" data-wb-name="footer.inc.php">

    <div class="form-popup success-popup" id="popupSuccess">
            <div class="form-popup__container success-popup__container container">
                <div class="form-popup__body success-popup__body">
                    <div class="form-popup__content success-popup__content">
                        <div class="form-popup__close success-popup__close" id="successPopupClose">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="21.3703" height="1.25708" transform="matrix(0.707108 -0.707105 0.707109 0.707105 0 15.1113)" fill="#4A4A4A"/>
                                <rect width="21.3703" height="1.25708" transform="matrix(0.707109 0.707105 -0.707108 0.707105 0.888672 0)" fill="#4A4A4A"/>
                            </svg>
                        </div>
                        <div class="form-popup__text">
                            Ваше обращение успешно отправлено!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="form-popup" id="popupPreview">
        <div class="form-popup__container container">
            <div class="form-popup__body">
                <div class="form-popup__content">
                    <div class="form-popup__close close-popup" id="formPopupClose">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="21.3703" height="1.25708" transform="matrix(0.707108 -0.707105 0.707109 0.707105 0 15.1113)" fill="#4A4A4A"/>
                            <rect width="21.3703" height="1.25708" transform="matrix(0.707109 0.707105 -0.707108 0.707105 0.888672 0)" fill="#4A4A4A"/>
                        </svg>
                    </div>
                    <div class="form-popup__top">
                        <div class="form-popup__left">
                            <div class="form-popup-logo">
                                <span>Медицинский</span>
                                <span>Поверенный</span>
                            </div>
                            <div class="form-popup-subt">МП 123/03032022</div>
                        </div>
                        <div class="form-popup__right">
                            <div class="form-popup__item">
                                <div class="form-popup__name">
                                    Куда отправляем
                                </div>
                                <span>Департамент здравоохранения и фармации Ярославской области</span>
                                <span>dzf@region.adm.yar.ru</span>
                            </div>
                            <div class="form-popup__item">
                                <div class="form-popup__name">
                                    Копия:
                                </div>
                                <span>ЯРОСЛАВСКИЙ ФИЛИАЛ ООО "СМК РЕСО- МЕД"</span>
                                <span>zhon@reso-med.com</span>
                            </div>
                            <div class="form-popup__item">
                                <div class="form-popup__name">
                                    От
                                </div>
                                <span>Ильичева Владимира Витальевича</span>
                                <span>152000, Ярославская обл, Переславский р-н, село Берендеево, уч-к 1-й, д 43, впвыпывап, 77</span>
                            </div>
                            <div class="form-popup__item">
                                <span>Полис No 4657457457</span>
                                <span>Страховая компания ЯРОСЛАВСКИЙ ФИЛИАЛ ООО "СМК РЕСО-МЕД"</span>
                            </div>
                            <div class="form-popup__item">
                                <div class="form-popup__name">
                                    Контакты

                                </div>
                                <span> horsinfo@mail.ru</span>
                                <span>Тел. +7(909) 626-65-85</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-popup__bottom">
                        <div class="form-popup__title">Заявление</div>
                        <p class="form-popup__descr">
                            <span>Я обратился в Вашу организацию с целью оказания платной медицинской услуги: Удаление родинки, которую выполнял работник Вашей организации. Однако в результате проведенной операции мне был причинен вред здоровью. В результате некачественного оказания медицинской услуги были причинены вред здоровью, а также физические и нравственные страдания. </span>
                            <span>Все это происходило в В поликлинике ГУЗ ЯО ГАВРИЛОВ-ЯМСКАЯ ЦРБ</span>
                            <span>Прошу разобраться в данной ситуации и привлечь виновных к ответственности</span>
                            <span>Ответ прошу направить на адрес электронной почты horsinfo@mail.ru в установленный законом срок.</span>
                        </p>
                        <div class="form-popup__personal">Я даю согласие на обработку и использование следующих моих персональных данных: фамилия, имя, отчество, контактные номера телефонов, адрес электронной почты, иные сведения, содержащие персональные данные в электронной форме, а также на их обработку с использованием средств автоматизации, включая осуществление сбора, накопления, систематизации, хранения, уточнения, использования, распространения (в т.ч. передачу), обезличивание, блокирование, уничтожение.</div>
                        <div class="form-popup__user">14.02.2022 Ильичев Владимир Витальевич</div>
                        <div class="form-popup__buttons">
                            <button type="submit" class="button button--red btn-abuse" id="submitMainForm" form="formAbuse">Отправить</button>
                            <span class="button form-preview-btn form-preview-btn-back">Вернуться в редактирование</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    document.addEventListener("site-ready", function(){
        wb_plugins();
        $(".content-list-item").find("b").parents("p").addClass("content-list-item-label");
        $(".content-list-item").find("p:not(.content-list-item-label)").addClass(
            "content-list-item-value");
        $(".content-list-item").find("h1,h2,h3,h4,h5,h6").addClass("content-list-item-subtitle");
        $(document).on('click', '.send-message', function() {
            if ($('body').hasClass('modal-open')) {
                $(document).one('hidden.bs.modal', '#modal-menu', function() {
                    $('#content-call-back').modal('show');
                });
                $('#modal-menu').modal('hide');
            } else {
                if ($(this).attr('data-email') > '') {
                    $('#content-call-back [name=_mailto]').attr('value', $(this).attr(
                        'data-email'));
                } else {
                    $('#content-call-back [name=_mailto]').attr('value',
                        '{{_sett.email}}');
                }
                $('#content-call-back').modal('show');
            }
        });
    });
    </script>
</body>
</html>