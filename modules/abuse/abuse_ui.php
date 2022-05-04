<link rel="stylesheet" href="/modules/abuse/abuse.css">
<script src="/tpl/build/libs/petrovich.min.js"></script>

<div id="modAbuse">
    <template id="modAbuseTpl">
        <div class="container blocks">
            <form class="form-white--gray" id="formAbuse">
                <input type="hidden" name="_subject" value="Обращение с сайта {{_route.host}}" />
                <input type="hidden" name="_mailto" value="{{_sett.email}}" />
                <div class="content-form-block-title abuse-form-block-title">
                    Написать обращение
                </div>
                <div class="content-form-block-hr"></div>
                <div class="form-body abuse-form-body row">
                    <div class="content-form-block-title abuse-form-block-title mb-40 col-sm-12">
                        Личные данные
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="content-form-block">
                            <div class="group">
                                <input class="input" placeholder="Укажите.." type="text" name="last_name" />
                                <label class="label">Фамилия</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="content-form-block">
                            <div class="group">
                                <input class="input" placeholder="Укажите.." type="text" name="first_name" />
                                <label class="label">Имя</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="content-form-block">
                            <div class="group">
                                <input class="input" placeholder="Укажите.." type="text" name="middle_name" />
                                <label class="label">Отчество</label>
                            </div>
                        </div>
                    </div>
                    <div class="content-form-block-title abuse-form-block-title mb-40 mt-25 col-sm-12">
                        Адрес
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="content-form-block">
                            <div class="group">
                                <input class="input" placeholder="Укажите.." type="text" name="citizen" />
                                <label class="label">Гражданство</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="content-form-block">
                            <div class="group">
                                <input class="input" placeholder="Укажите.." type="text" id="email" name="email" />
                                <label class="label">Адрес E-mail</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="content-form-block">
                            <div class="group">
                                <input class="input" placeholder="Укажите.." type="text" data-wb-mask="+7 (999) 999-99-99" name="phone" />
                                <label class="label">Телефон (необязательно)</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="content-form-block">
                            <div class="group">
                                <input class="input" placeholder="Укажите.." type="text" data-wb-mask="999999" name="zip" />
                                <label class="label">Индекс</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="content-form-block">
                            <div class="group">
                                <input type="text" placeholder="Укажите.." class="input" name="region" value="" readonly on-click="selectRegion">
                                <label class="label">Регион</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="content-form-block">
                            <div class="group">
                                <input class="input" placeholder="Укажите.." type="text" name="place" />
                                <label class="label">Населенный пункт</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="content-form-block">
                            <div class="group">
                                <input class="input" placeholder="Укажите.." type="text" name="street" />
                                <label class="label">Улица</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 ">
                        <div class="content-form-block">
                            <div class="group">
                                <input class="input" placeholder="Укажите.." type="text" name="house" />
                                <label class="label">Дом/владение</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 ">
                        <div class="content-form-block">
                            <div class="group">
                                <input class="input" placeholder="Укажите.." type="text" name="corpse" />
                                <label class="label">Строение/корпус</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 ">
                        <div class="content-form-block">
                            <div class="group">
                                <input class="input" placeholder="Укажите.." type="text" name="flat" />
                                <label class="label">Квартира/офис</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="branches col-12">
                    <div class="content-form-block-title abuse-form-block-title mb-40">
                        Суть обращения
                    </div>
                    <div class="row">
                        <div class="col-lg-7 col-12 mb-40">
                            <div class="abuse-checkboxes d-block">
                                <div class="custom-control abuse-checkbox custom-checkbox mb-10">
                                    <input type="radio" class="custom-control-input input" id="type1AbuseForm" checked value="1" name="type" />
                                    <label class="custom-control-label t-5 textPale" for="type1AbuseForm">
                                        Жалоба на оказание медицинской помощи
                                    </label>
                                </div>
                                <div class="custom-control abuse-checkbox custom-checkbox mb-10">
                                    <input type="radio" class="custom-control-input input" id="type2AbuseForm" value="2" name="type" />
                                    <label class="custom-control-label t-5 textPale" for="type2AbuseForm">
                                        Провести экспертизу качества медицинской помощи
                                    </label>
                                </div>
                                <div class="custom-control abuse-checkbox custom-checkbox mb-10">
                                    <input type="radio" class="custom-control-input input" id="type3AbuseForm" value="3" name="type" />
                                    <label class="custom-control-label t-5 textPale" for="type3AbuseForm">
                                        Жалоба на лекарственное обеспечение
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="content-form-block col-lg-5 col-12">
                            <div class="group">
                                <input type="text" class="input" placeholder="Укажите.." name="region_to" value="" readonly on-click="selectRegion">
                                <label class="label">Регион обращения</label>
                            </div>
                        </div>
                    </div>
                    <div class="abuse-form-body mt-0 abuse-form-grey row">
                        <div class="col-xl-4 col-lg-6 mb-6 abuse-checkbox-block">
                            <div class="abuse-form-title">Тип услуги</div>
                            <div class="abuse-checkboxes">
                                <div class="custom-control abuse-checkbox custom-checkbox mb-40" on-click="abuseCheckbox">
                                    <input type="radio" class="custom-control-input input" value="payed" id="payAbuseForm" name="payform" />
                                    <label class="custom-control-label t-5 textPale" for="payAbuseForm">
                                        Платно
                                    </label>
                                </div>
                                <div class="custom-control abuse-checkbox custom-checkbox mb-40 input" on-click="abuseCheckbox">
                                    <input type="radio" class="custom-control-input" value="free" id="freeAbuseForm" name="payform" />
                                    <label class="custom-control-label t-5 textPale" for="freeAbuseForm">
                                        Бесплатно (по ОМС)
                                    </label>
                                </div>
                            </div>
                            <div class="abuse-dop">
                                <div class="content-form-block">
                                    <div class="group">
                                        <input class="input" placeholder="Укажите.." type="text" name="polis" />
                                        <label class="label">Полис ОМС</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 mb-6 abuse-checkbox-block">
                            <div class="abuse-form-title">Где ?</div>
                            <div class="abuse-checkboxes">
                                <div class="custom-control abuse-checkbox custom-checkbox mb-40">
                                    <input type="radio" class="custom-control-input input" id="stacAbuseForm" value="station" name="orgtype" />
                                    <label class="custom-control-label t-5 textPale" for="stacAbuseForm">
                                        Стационар
                                    </label>
                                </div>
                                <div class="custom-control abuse-checkbox custom-checkbox mb-40">
                                    <input type="radio" class="custom-control-input input" id="hospitalAbuseForm" value="poly" name="orgtype" />
                                    <label class="custom-control-label t-5 textPale" for="hospitalAbuseForm">
                                        Поликлиника
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-12 mb-6 abuse-form-item content-form-block">
                            <div class="floating-label abuse-label">
                                <input type="text" class="input" name="org" value="" placeholder=" " readonly required1 on-click="['selectModal','#selectMed']" />
                                <label class="label abuse-label">Наименование медучреждения
                                    <svg style="position: relative; right: 15px;" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2 0L7 5L12 0L14 1L7 8L0 1L2 0Z" fill="#4A4A4A" />
                                    </svg></label>

                            </div>
                        </div>
                    </div>

                    <div class="recepients row" id="Recepients">
                        <div class="col-12 head">
                            <div class="content-form-block-title abuse-form-block-title pt-6 ">
                                Получители обращения
                            </div>
                            <div class="abuse-form-subititle mb-40">
                                Ниже вы можете выбрать получателей вашего обращения, их может быть как один так и несколько
                            </div>
                        </div>

                        <div class="col-12 depart">
                            <div class="content-form-block">
                                <div class="group floating-label">
                                    <input type="text" class="input" name="depart" value="" readonly on-click="['selectModal','#selectDepart']" placeholder=" " data-id>
                                    <label class="label abuse-label">Департамент здравоохранения
                                        <svg style="position: relative; right: 15px;" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2 0L7 5L12 0L14 1L7 8L0 1L2 0Z" fill="#4A4A4A" />
                                        </svg>
                                    </label>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 insure">
                            <div class="row">
                                <div class="col-12">
                                    <div class="content-form-block">
                                        <div class="group floating-label">
                                            <input type="text" placeholder="Укажите.." class="input" name="insure" value="" readonly on-click="['selectModal','#selectInsure']" data-id>
                                            <label class="label abuse-label">Страховая медицинская организация
                                                <svg style="position: relative; right: 15px;" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2 0L7 5L12 0L14 1L7 8L0 1L2 0Z" fill="#4A4A4A" />
                                                </svg>
                                            </label>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 tfoms">
                            <div class="content-form-block">
                                <div class="group floating-label">
                                    <input type="text" class="input" name="tfoms" value="" readonly on-click="['selectModal','#selectTfoms']" placeholder=" " data-id>
                                    <label class="label abuse-label">Территориальный фонд ОМС
                                        <svg style="position: relative; right: 15px;" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2 0L7 5L12 0L14 1L7 8L0 1L2 0Z" fill="#4A4A4A" />
                                        </svg>
                                    </label>

                                </div>
                            </div>
                        </div>

                        <div class="col-12 add-address">
                            <div class="content-form-block">
                                <div class="group abuse-group">
                                    <input class="input" placeholder="Укажите.." type="text" name="citizen" />
                                    <label class="label">
                                        Укажите адрес
                                    </label>
                                    <svg style="position: relative; right: 15px; z-index: 2;" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="21.3703" height="1.25708" transform="matrix(0.707108 -0.707105 0.707109 0.707105 0 15.1108)" fill="#4A4A4A" />
                                        <rect width="21.3703" height="1.25708" transform="matrix(0.707109 0.707105 -0.707108 0.707105 0.888916 0)" fill="#4A4A4A" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 add-address-block">
                            <div class="content-form-block">
                                <div class="group mb-0">
                                    <div class="form-buttons form-btn-address">
                                        <div class="form-buttons">
                                            <span class="form-btn button abuse-button-address abuse-button-hover">
                                                <span class="form-pluse">
                                                    <span></span>
                                                    <span></span>
                                                </span>
                                                Добавить адрес
                                            </span>
                                        </div>
                                        <span class="form-descr">
                                            <span>Если вам необходимо добавить получателя которого нет в списке,</span>
                                            <span>вы можете это сделать нажав кнопку «Добавить адрес»</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 d-none foms">
                            <div class="content-form-block">
                                <div class="group">
                                    <input type="text" class="input" name="foms" value="Фонд обязательного медицинского страхования" placeholder=" " data-id data-email="{{_sett.email_foms}}">
                                    <label class="label">Фонд ОМС</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 d-none roszn">
                            <div class="content-form-block">
                                <div class="group">
                                    <input type="text" class="input" name="roszn" value="Росздравнадзор" placeholder=" " data-id data-email="{{_sett.email_roszdrav}}">
                                    <label class="label">Росздравнадзор</label>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="appeal row">
                        <div class="col-12">
                            <div class="content-form-block-title abuse-form-block-title mb-40 pt-6 ">
                                Содержание обращения
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="custom-control custom-checkbox mb-40">
                                <input type="checkbox" class="custom-control-input" id="dangerAbuseForm" name="danger" />
                                <label class="custom-control-label t-5 textPale" for="dangerAbuseForm">
                                    Существует угроза жизни
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="content-form-block">
                                <div class="group">
                                    <textarea placeholder=" " class="input" name="prev"></textarea>
                                    <label class="label">Куда обращались ранее по данному вопросу</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="content-form-block">
                                <div class="group mb-0">
                                    <textarea placeholder=" " class="input" name="text"></textarea>

                                    <label class="label">Текст обращения</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="content-form-block">
                                <div class="group mb-40">
                                    <span class="span-label label">Ответ по сути обращения не даётся в случае, если в обращении отсутствует текст, даны только ссылки на прилагаемые файлы или адреса интернет-сайтов.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="content-form-block">
                                <div class="group mb-0">
                                    <div class="form-buttons abuse-form-buttons">
                                        <div class="form-buttons-left">
                                            <input type="file" multiple class="form-btn-input" id="type-file" accept="image/jpeg, application/pdf, .doc, .docx">
                                            <label class="form-btn button abuse-button-hover" for="type-file">
                                                <span class="form-pluse">
                                                    <span></span>
                                                    <span></span>
                                                </span>
                                                Добавить документ
                                            </label>
                                        </div>
                                        <span class="form-descr">
                                            <span>Не более 10 файлов, максимальный размер каждого — 5 МБ.</span>
                                            <span>Допустимые форматы: PDF, JPEG, DOC и другие</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row form-bottom">
                        <div class="col-12">
                            <div class="custom-control custom-checkbox abuse-personal-checkbox mb-3">
                                <input type="checkbox" class="custom-control-input input" checked="checked" id="checkAbuseForm" name="personal" />
                                <label class="custom-control-label textPale" for="checkAbuseForm">Я даю согласие на обработку и использование следующих моих персональных данных: фамилия, имя, отчество, контактные номера телефонов, адрес электронной почты, иные сведения, содержащие персональные данные в электронной форме, а также на их обработку с использованием средств автоматизации, включая осуществление сбора, накопления, систематизации, хранения, уточнения, использования, распространения (в т.ч. передачу), обезличивание, блокирование, уничтожение.
                                </label>
                            </div>
                        </div>
                        <div class="col-12 abuse-prop">
                            Внимание! Персональные данные на сайте medpoverennyi.ru не сохраняются, не хранятся, не используются
                        </div>

                        <div class="mt-20 pt-1">
                            <button type="submit" class="button button--red btn-abuse">Отправить</button>
                            <a href="#" on-click="viewPreview" class="button cursor-pointer form-preview-btn popup-link">Предварительный просмотр</span>
                        </div>
                    </div>
                </div>
        </div>

        <modals class="nowb">
            <div id="selectRegion1" class="modal nowb" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="w-100 modal-title">
                                <input type="search" class="form-control" placeholder="Поиск..." on-keyup="modalSearch">
                            </div>
                        </div>
                        <div class="modal-body">
                            <ul class="list-group ">
                                {{#each regions}}
                                    <li class="list-group-item cursor-pointer" data-region="{{id}}" on-click="selectRegionClick">
                                        <span>{{name}}</span>
                                    </li>
                                {{/each}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div id="selectMed" class="modal nowb" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="w-100 modal-title">
                                <input type="search" class="form-control" placeholder="Поиск..." on-keyup="modalSearch">
                            </div>
                        </div>
                        <div class="modal-body">
                            <ul class="list-group">
                                {{#each listMo}}
                                    <li class="list-group-item cursor-pointer" on-click="selectModalClick">
                                        <span>{{name}}</span> [{{kmo}}]
                                    </li>
                                {{else}}
                                    <p class="alert alert-info">Пожалуйста, вначале укажите регион.</p>
                                {{/each}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div id="selectInsure" class="modal nowb" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="w-100 modal-title">
                                <input type="search" class="form-control" placeholder="Поиск..." on-keyup="modalSearch">
                            </div>
                        </div>
                        <div class="modal-body">
                            <ul class="list-group">
                                {{#each listSmo}}
                                    <li class="list-group-item cursor-pointer" data-id="{{id}}" data-email="{{email}}" on-click="selectModalClick">
                                        <span>{{name}}</span> [{{ksmo}}]
                                        <div class="tx-10">{{address}}</div>
                                    </li>
                                {{else}}
                                    <p class="alert alert-info">Пожалуйста, вначале укажите регион.</p>
                                {{/each}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div id="selectDepart" class="modal nowb" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="w-100 modal-title">
                                <input type="search" class="form-control" placeholder="Поиск..." on-keyup="modalSearch">
                            </div>
                        </div>
                        <div class="modal-body">
                            <ul class="list-group">
                                {{#each listDep}}
                                    <li class="list-group-item cursor-pointer" data-region="{{id}}" data-id="{{id}}" data-email="{{email}}" on-click="selectModalClick">
                                        <span>{{name}}</span>
                                    </li>
                                {{else}}
                                    <p class="alert alert-info">Пожалуйста, вначале укажите регион.</p>
                                {{/each}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div id="selectTfoms" class="modal nowb" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="w-100 modal-title">
                                <input type="search" class="form-control" placeholder="Поиск..." on-keyup="modalSearch">
                            </div>
                        </div>
                        <div class="modal-body">
                            <ul class="list-group">
                                {{#each listTfoms}}
                                    <li class="list-group-item cursor-pointer" data-region="{{id}}" data-id="{{id}}" data-email="{{email}}" on-click="selectModalClick">
                                        <span>{{name}}</span>
                                    </li>
                                {{else}}
                                    <p class="alert alert-info">Пожалуйста, вначале укажите регион.</p>
                                {{/each}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-popup nowb" id="popupPreview">
                {{#letter}}
                    <div class="form-popup__container container">
                        <div class="form-popup__body">
                            <div class="form-popup__content">
                                <a href="#" class="form-popup__close close-popup cursor-pointer" onclick="$(this).parents('.form-popup').removeClass('active')" id="formPopupClose">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="21.3703" height="1.25708" transform="matrix(0.707108 -0.707105 0.707109 0.707105 0 15.1113)" fill="#4A4A4A" />
                                        <rect width="21.3703" height="1.25708" transform="matrix(0.707109 0.707105 -0.707108 0.707105 0.888672 0)" fill="#4A4A4A" />
                                    </svg>
                                </a>
                                <div class="form-popup__top">
                                    <div class="form-popup__left">
                                        <div class="form-popup-logo">
                                            <span>Медицинский</span>
                                            <span>Поверенный</span>
                                        </div>
                                        <div class="form-popup-subt">МП №Номер заявления </div>
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
                                            <span>{{person}}</span>
                                            {{#if citizen !== ""}}<span>Гражданство: {{citizen}}</span>{{/if}}
                                            <span>
                                                {{#if zip !== ""}} {{zip}}, {{/if}}
                                                {{#if region !== ''}} {{region}}, {{/if}}
                                                {{#if place !== ''}} {{place}}, {{/if}}
                                                {{#if street !== ''}} {{street}}, {{/if}}
                                                {{#if house !== ''}} {{house}}, {{/if}}
                                                {{#if corpse !== ''}} {{corpse}}, {{/if}}
                                                {{#if flat !== ''}} {{flat}}, {{/if}}
                                            </span>
                                        </div>
                                        <div class="form-popup__item">
                                            {{#if payform == 'free'}}<span>Полис No {{polis}}</span>
                                                <span>{{insure}}</span>
                                            {{/if}}
                                        </div>
                                        <div class="form-popup__item">
                                            <div class="form-popup__name">
                                                Контакты

                                            </div>
                                            <span>{{email}}</span>
                                            {{#if phone !== ''}}<span>Тел. {{phone}}</span>{{/if}}
                                        </div>
                                    </div>
                                </div>
                                <div class="form-popup__bottom">
                                    <div class="form-popup__title">Заявление</div>
                                    <p class="form-popup__descr">
                                        <span>{{text}}</span>
                                        <span>Все это происходило в {{orgtype}} {{org}}</span>
                                        {{#if danger == 'on'}}<span>Ситуация несет угрозу жизни</span>{{/if}}
                                        {{#if prev !== ''}}<span>{{prev}}</span>{{/if}}
    <span>
    {{#if type == '1'}}
        Прошу разобраться в данной ситуации и привлечь виновных к ответственности
    {{/if}}
    {{#if type == '2'}}
        Прошу провести экспертизу качества медицинской помощи по данному случаю.
    {{/if}}
    {{#if type == '3'}}
        Прошу обеспечить необходимым лекарством {{drug}}.
    {{/if}}
    </span>

                                        <span>Ответ прошу направить на адрес электронной почты {{email}} в установленный законом срок.</span>
                                    </p>
                                    <div class="form-popup__personal">Я даю согласие на обработку и использование следующих моих персональных данных: фамилия, имя, отчество, контактные номера телефонов, адрес электронной почты, иные сведения, содержащие персональные данные в электронной форме, а также на их обработку с использованием средств автоматизации, включая осуществление сбора, накопления, систематизации, хранения, уточнения, использования, распространения (в т.ч. передачу), обезличивание, блокирование, уничтожение.</div>
                                    <div class="form-popup__user">{{date}} {{last_name}} {{first_name}} {{middle_name}}</div>
                                    <div class="form-popup__buttons">
                                        <button type="submit" class="button button--red btn-abuse" id="submitMainForm" form="formAbuse">Отправить</button>
                                        <span class="button form-preview-btn form-preview-btn-back cursor-pointer" onclick="$('#popupPreview').removeClass('active')">Вернуться в редактирование</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                {{/letter}}
            </div>
        </modals>
    </template>
</div>


<script>
    document.addEventListener("site-jq-ready", () => {
        wb_plugins()
        var modAbuseTpl = $('#modAbuseTpl').html()
        var modAbuse = new Ractive({
            el: '#modAbuse',
            template: modAbuseTpl,
            data: {},
            on: {
                init() {
                    $.get('/ajax/region/', function(data) {
                        modAbuse.set('regions', data);
                    })
                },
                selectRegion(ev) {
                    $('#selectRegion1').modal('show');
                    $('#selectRegion1')[0].input = $(ev.node)
                },
                selectRegionClick(ev) {
                    let region = $(ev.node).data('region')
                    let input = $('#selectRegion1')[0].input
                    $(input).val($(ev.node).text())
                    $.get('/ajax/smo/?region=' + region, function(data) {
                        modAbuse.set('listSmo', data);
                    })
                    $.get('/ajax/mo/?region=' + region, function(data) {
                        modAbuse.set('listMo', data);
                    })
                    $.get('/ajax/dep/?region=' + region, function(data) {
                        modAbuse.set('listDep', data);
                    })
                    $.get('/ajax/tfoms/?region=' + region, function(data) {
                        modAbuse.set('listTfoms', data);
                    })
                    $('#formAbuse').data('region', region);
                    $('#selectRegion1').modal('hide');
                },
                selectModal(ev, modal) {
                    let that = ev.node
                    $(modal)[0].input = that
                    $(modal).modal('show');
                    $(modal).find('input').val('').focus().trigger('keyup');
                },
                selectModalClick(ev) {
                    let that = ev.node
                    let modal = $(that).parents('.modal')
                    let input = $(modal)[0].input
                    let data = $(that).data()
                    $(input).val($(that).children('span').text()).data(data)
                    $(modal).modal('hide');
                },
                modalSearch(ev) {
                    let that = ev.node
                    let modal = $(that).parents('.modal')
                    let regex = $(that).val();
                    if (regex > ' ') {
                        regex = new RegExp(regex, "gi");
                        $.each($(modal).find('.list-group-item'),
                            function(i,
                                item) {
                                let str = $(item).text();
                                str.match(regex) ? $(this).show() : $(this).hide();
                            });
                    } else {
                        $(modal).find('.list-group-item').show()
                    }
                },
                viewPreview(ev) {
                    let formdata = $('#formAbuse').serializeArray();
                    let data = {}
                    $.each(formdata, function(i, item) {
                        data[item.name] = item.value
                    })
                    let person = {
                        first: data.first_name,
                        middle: data.middle_name,
                        last: data.last_name
                    };
                    let gender = petrovich(person, 'genitive');
                    data.person = `${gender.last} ${gender.first} ${gender.middle}`;
                    data.date = date('d.m.Y')
                    modAbuse.set('letter', data);
                    $('#popupPreview').addClass('active')
                },
                abuseCheckbox() {
                    $('.abuse-checkbox').on('click', function() {
                        if ($('#freeAbuseForm').is(':checked')) {
                            $('.abuse-dop').show();
                            $('#Recepients .insure').show()
                        } else {
                            $('.abuse-dop').hide();
                            $('#Recepients .insure').hide()
                        }
                    })
                }
            }
        })
    }, false);
</script>

<script>
    () => {
        var selMed, selIns, selReg, selDep, selTfoms, selectInsure, selectRegion;
        selMed = new Ractive({
            target: '#selectMed .list-group',
            template: $('#selectMed template').html(),
            data: {
                items: []
            }
        });

        selIns = new Ractive({
            target: '#selectInsure .list-group',
            template: $('#selectInsure template').html(),
            data: {
                items: []
            }
        });

        selReg = new Ractive({
            target: '#selectRegion1 .list-group',
            template: $('#selectRegion1 template').html(),
            data: {
                items: []
            }
        });

        selDep = new Ractive({
            target: '#selectDepart .list-group',
            template: $('#selectDepart template').html(),
            data: {
                items: []
            }
        });

        selTfoms = new Ractive({
            target: '#selectTfoms .list-group',
            template: $('#selectTfoms template').html(),
            data: {
                items: []
            }
        });

        $(document).on('wb_mail_done', function(ev, a) {
            if ($(ev.target).parents('#content-call-back')) {
                $(ev.target).parents('.modal').modal('hide');
                setTimeout(function() {
                    $(ev.target).removeClass('d-none');
                }, 1000)
            }
        })


        $.get('/ajax/region/', function(data) {
            selReg.set('items', data);
            console.log(data)
        })



        function valideFormsMain(form) {
            $(form).validate({
                rules: {
                    first_name: {
                        required: true,
                        minlength: 2
                    },
                    last_name: {
                        required: true,
                        minlength: 2
                    },
                    middle_name: {
                        required: true,
                        minlength: 2
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    type: {
                        required: true
                    },
                    region_to: {
                        required: true
                    },
                    payform: {
                        required: true
                    },
                    hospital: {
                        required: true
                    },
                    type_hospital: {
                        required: true
                    },
                    text: {
                        required: true
                    },
                    personal: {
                        required: true
                    },
                    depart: {
                        required: true
                    },
                    insure: {
                        required: true
                    },
                    tfoms: {
                        required: true
                    }
                },
                messages: {
                    first_name: {
                        required: "Пожалуйста, введите свое имя",
                        minlength: jQuery.validator.format("Введите {0} символа!")
                    },
                    last_name: {
                        required: "Пожалуйста, введите свою фамилию",
                        minlength: jQuery.validator.format("Введите {0} символа!")
                    },
                    middle_name: {
                        required: "Пожалуйста, введите свое отчество",
                        minlength: jQuery.validator.format("Введите {0} символа!")
                    },
                    email: {
                        required: "Пожалуйста, введите свою почту",
                        email: "Неправильно введен адрес почты"
                    },
                    type: {
                        required: "Пожалуйста, укажите жалобу"
                    },
                    region_to: {
                        required: "Пожалуйста, укажите ваш регион"
                    },
                    payform: {
                        required: "Пожалуйста, выберите тип услуги"
                    },
                    hospital: {
                        required: "Пожалуйста, выберите лечебное учреждение"
                    },
                    type_hospital: {
                        required: "Пожалуйста, укажите наименование медучреждения"
                    },
                    text: {
                        required: "Пожалуйста, введите текст обращения"
                    },
                    personal: {
                        required: "Пожалуйста, поставьте галочку"
                    },
                    depart: {
                        required: "Пожалуйста, выберите департамент"
                    },
                    insure: {
                        required: "Пожалуйста, выберите страховую мед.организацию"
                    },
                    tfoms: {
                        required: "Пожалуйста, выберите фонд ОМС"
                    }
                }
            });
        };

        $('#formAbuse .floating-select').on('change', function(e) {
            $(this).attr('value', $(this).val());
        });

        // $('#formAbuse .btn-abuse').on('click', function (e) {
        // if (wb_check_required('#formAbuse')) {
        // $('#formAbuse [name]:input:not(:visible)').each(function () {
        // $(this).attr('data-name', $(this).attr('name')).removeAttr('name');
        // });
        // let data = $('#formAbuse').serializeArray();
        // $('#formAbuse [data-name]:input:not(:visible)').each(function () {
        // $(this).attr('name', $(this).attr('data-name')).removeAttr(
        // 'data-name');
        // });

        // let $form = $('        <        form id = "printAbuse" / > ');
        // $form.attr('method', 'POST').attr('target', '_blank').attr('action',
        // '/module/abuse/print');
        // $.each(data, function (i, k) {
        // $form.append(
        // `--><input type="hidden" name="${k.name}" value="${htmlentities(k.value)}" />`
        // );
        // });

        // let region = $('#formAbuse [name=region_to]').data('region');
        // let recp = '';
        // $('#formAbuse .recepients [name][data-email]').each(function () {
        // let fld = $(this).attr('name');
        // let email = $(this).attr('data-email');
        // $form.append(
        // `<input type="hidden" name="${fld}_email" value="${email}" />`
        // );
        // recp > '' ? recp += `, ${fld}` : recp += fld;
        // });

        // $form.append(`<input type="hidden" name="recepients" value="${recp}" />`);

        // /*

        // let email = $('#formAbuse [name=insure]:last').data('email');
        // let inid = $('#formAbuse [name=insure]:last').data('id');

        // $form.append(`<input type="hidden" name="insure_id" value="${inid}" />`);
        // $form.append(`<input type="hidden" name="insure_email" value="${email}" />`);

        // */
        // $form.find('[name=region]').val(region);

        // $form.appendTo('body');
        // $form.submit();
        // $form.remove();
        // };
        // })

        $('.abuse-checkbox').on('click', function() {
            if ($('#freeAbuseForm').is(':checked')) {
                $('.abuse-dop').css('display', 'block');
            } else {
                $('.abuse-dop').css('display', 'none');
            }
        })



        $("#formAbuse [name=type]").on('change', function() {
            $(`#formAbuse .branches [data-branch]`).addClass('d-none');
            // $("#formAbuse .recepients > *").addClass('d-none');

            if ($(this).val() !== "0") {
                $(`#formAbuse .branches [data-branch=${$(this).val()}]`).removeClass(
                    'd-none');

            }
        })

        $("#formAbuse [data-branch] [data-recepients]").on('change', function() {
            let recep;
            if ($(this).is('input')) {
                recep = $(this).attr('data-recepients').split(',');
            } else {
                recep = $(this).find('option:selected').attr('data-recepients').split(',');
            }
            $("#formAbuse .recepients").removeClass('d-none');
            $("#formAbuse .recepients > *").addClass('d-none');
            $("#formAbuse .recepients > .head").removeClass('d-none');
            $.each(recep, function(i, val) {
                val = val.trim();
                if (val > "") {
                    $("#formAbuse .recepients > ." + val).removeClass('d-none');
                }
            });

        });

        selectInsure = function(that, all = false) {
            $('#selectInsure').modal('show');
            let region = $('#formAbuse').data('region');
            $('#selectInsure .list-group-item').hide();
            $('#selectInsure .list-group-item[data-region=' + region + ']').show();
            valideFormsMain('#formAbuse')
            $('#selectInsure .list-group-item').off('click');
            $('#selectInsure .list-group-item').on('click', function() {
                let name = $(this).children('span').text();
                let email = $(this).data('email');
                let id = $(this).data('id');
                all ? $('#formAbuse [name=insure]').val(name) : $(that).val(name);
                all ? $('#formAbuse [name=insure]').attr('data-id', id) : $(that).attr(
                    'data-id',
                    id);
                all ? $('#formAbuse [name=insure]').attr('data-email', email) : $(that)
                    .attr(
                        'data-email', email);
                $('#selectInsure').modal('hide');
            })

            $('#selectInsure input').off('keyup');
            $('#selectInsure input').on('keyup', function() {
                let regex = $(this).val();
                if (regex > ' ') {
                    regex = new RegExp(regex, "gi");
                    valideFormsMain('#formAbuse')
                    $.each($('#selectInsure .list-group-item[data-region=' + region + ']'),
                        function(i, item) {
                            let str = $(item).text();
                            str.match(regex) ? $(this).show() : $(this).hide();
                        });
                }
            });
            $('#selectInsure input').val('').focus().trigger('keyup');
        }

        selectRegion = function(that) {
            valideFormsMain('#formAbuse')
            $('#selectRegion1').modal('show');
            $('#selectRegion1 .list-group-item').off('click');
            $('#selectRegion1 .list-group-item').on('click', function() {
                valideFormsMain('#formAbuse')
                $(that).val($(this).text());
                $(that).attr('data-region', $(this).data('region'));
                let region = $(this).data('region');
                $.get('/ajax/smo/?region=' + region, function(data) {
                    selIns.set('items', data);
                })
                $.get('/ajax/mo/?region=' + region, function(data) {
                    selMed.set('items', data);
                })
                $.get('/ajax/dep/?region=' + region, function(data) {
                    selDep.set('items', data);
                })
                $.get('/ajax/tfoms/?region=' + region, function(data) {
                    selTfoms.set('items', data);
                })

                $('#formAbuse').data('region', region);
                $('#selectRegion1').modal('hide');

            })

            $('#selectRegion1 input').off('keyup');
            $('#selectRegion1 input').on('keyup', function() {
                valideFormsMain('#formAbuse')
                let regex = $(this).val();
                if (regex > ' ') {
                    regex = new RegExp(regex, "gi");
                    valideFormsMain('#formAbuse')
                    $.each($('#selectRegion1 .list-group-item'), function(i, item) {
                        let str = $(item).text();
                        str.match(regex) ? $(this).show() : $(this).hide();
                    });
                }
            });
            $('#selectRegion1 input').val('').focus().trigger('keyup');
        }



        selectMed = function(that, all = false) {
            $('#selectMed').modal('show');
            let region = $('#formAbuse').data('region');
            $('#selectMed .list-group-item').hide();
            $('#selectMed .list-group-item[data-region=' + region + ']').show();
            valideFormsMain('#formAbuse')
            $('#selectMed .list-group-item').off('click');
            $('#selectMed .list-group-item').on('click', function() {
                let name = $(this).children('span').text();
                all ? $('#formAbuse [name=org]').val(name) : $(that).val(name);
                $('#selectMed').modal('hide');
            })

            $('#selectMed input').off('keyup');
            $('#selectMed input').on('keyup', function() {
                let regex = $(this).val();
                if (regex > ' ') {
                    regex = new RegExp(regex, "gi");
                    valideFormsMain('#formAbuse')
                    $.each($('#selectMed .list-group-item[data-region=' + region + ']'),
                        function(i,
                            item) {
                            let str = $(item).text();
                            str.match(regex) ? $(this).show() : $(this).hide();
                        });
                }
            });
            $('#selectMed input').val('').focus().trigger('keyup');
        }


        selectDepart = function(that, all = false) {
            $('#selectDepart').modal('show');
            let region = $('#formAbuse').data('region');
            $('#selectDepart .list-group-item').hide();
            $('#selectDepart .list-group-item[data-region=' + region + ']').show();

            $('#selectDepart .list-group-item').off('click');
            $('#selectDepart .list-group-item').on('click', function() {
                let name = $(this).children('span').text();
                let email = $(this).data('email');
                let id = $(this).data('id');
                all ? $('#formAbuse [name=depart]').val(name) : $(that).val(name);
                all ? $('#formAbuse [name=depart]').attr('data-id', id) : $(that).attr(
                    'data-id',
                    id);
                all ? $('#formAbuse [name=depart]').attr('data-email', email) : $(that)
                    .attr(
                        'data-email', email);
                $('#selectDepart').modal('hide');
            })

            $('#selectDepart input').off('keyup');
            $('#selectDepart input').on('keyup', function() {
                let regex = $(this).val();
                if (regex > ' ') {
                    regex = new RegExp(regex, "gi");
                    $.each($('#selectDepart .list-group-item[data-region=' + region + ']'),
                        function(i, item) {
                            let str = $(item).text();
                            str.match(regex) ? $(this).show() : $(this).hide();
                        });
                }
            });
            $('#selectDepart input').val('').focus().trigger('keyup');
        }
        selectTfoms = function(that, all = false) {
            $('#selectTfoms').modal('show');
            let region = $('#formAbuse').data('region');
            $('#selectTfoms .list-group-item').hide();
            $('#selectTfoms .list-group-item[data-region=' + region + ']').show();

            $('#selectTfoms .list-group-item').off('click');
            $('#selectTfoms .list-group-item').on('click', function() {
                let name = $(this).children('span').text();
                let email = $(this).data('email');
                let id = $(this).data('id');
                all ? $('#formAbuse [name=tfoms]').val(name) : $(that).val(name);
                all ? $('#formAbuse [name=tfoms]').attr('data-id', id) : $(that).attr(
                    'data-id',
                    id);
                all ? $('#formAbuse [name=tfoms]').attr('data-email', email) : $(that).attr(
                    'data-email', email);
                $('#selectTfoms').modal('hide');
            })

            $('#selectTfoms input').off('keyup');
            $('#selectTfoms input').on('keyup', function() {
                let regex = $(this).val();
                if (regex > ' ') {
                    regex = new RegExp(regex, "gi");
                    $.each($('#selectTfoms .list-group-item[data-region=' + region + ']'),
                        function(i, item) {
                            let str = $(item).text();
                            str.match(regex) ? $(this).show() : $(this).hide();
                        });
                }
            });
            $('#selectTfoms input').val('').focus().trigger('keyup');
        }
        $('#type-file').on('change', function() {
            var arrayFiles = this.files, // массив с выбранными фалами
                formItem = this
                .parentNode, // родительский элемент, для того чтобы вставить список с файлами
                listFiles = document.createElement('ul'), // список с файлами
                li = ''; // файлы

            // Если список с файлами уже вставлен в ДОМ, то удаляем его
            if (formItem.querySelector('.list-files')) {
                formItem.querySelector('.list-files').remove();
            }

            listFiles.className = 'list-files'; // добавим класс, чтобы было удобнее стилять

            if (arrayFiles.length <= 10) {
                for (var i = 0; i < arrayFiles.length; i++) {
                    li += '<li>' + arrayFiles[i].name + '</li>';
                }
            } else {
                li += '<li style="color: #F24C45;">' + 'Не более 10 файлов!' + '</li>';
            }

            listFiles.innerHTML = li;

            formItem.appendChild(listFiles);
        });
        $('.abuse-button-address').on('click', function() {
            $('.add-address').addClass('active');
        });

        $('.abuse-group svg').on('click', function() {
            $('.add-address').removeClass('active');
        })

        var textarea = document.querySelectorAll('textarea.input');

        textarea.forEach((elem) => {
            elem.addEventListener('keydown', resize);
        })

        function resize() {
            var el = this;
            setTimeout(function() {
                el.style.cssText = 'height:auto; padding:0';
                el.style.cssText = 'height:' + el.scrollHeight + 'px';
            }, 1);
        }

        function valideFormsTop(form) {
            $(form).validate({
                rules: {
                    person_top: {
                        required: true,
                        minlength: 2
                    },
                    phone_top: "required",
                },
                messages: {
                    person_top: {
                        required: "Пожалуйста, введите свое имя",
                        minlength: jQuery.validator.format("Введите {0} символа!")
                    },
                    phone_top: "Пожалуйста, введите свой номер телефона"
                }
            });
        };

        valideFormsTop('.abuse-form-top')

        $('#submitMainForm').on('click', function() {
            $('#popupPreview').removeClass('active');
            $('body.lock').removeClass('lock');
        });

        // предпросмотр



        valideFormsMain('#formAbuse')

        $('#formAbuse').submit(function(e) {
            e.preventDefault();


            let form = document.querySelector("#formAbuse");
            let formData = new FormData(form);
            $.each($("#type-file")[0].files, function(key, input) {
                formData.append('file[]', input);
            });


            let errors = document.querySelectorAll('#formAbuse .input.error')
            if (errors.length != 0) {
                console.log('Заполните все поля!')
            } else {
                $.ajax({
                    url: 'test.php',
                    type: 'POST',
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: formData,
                    dataType: 'json',
                }).done(function() {
                    $(this).find('input').val('');
                    $('#popupSuccess').addClass('active');
                    $('body').addClass('lock');
                    setTimeout(() => {
                        $('#popupSuccess').removeClass('active');
                        $('body').removeClass('lock');
                    }, 2000)
                    $('form').trigger('reset');
                });
            }
            return false;
        });
        $('#successPopupClose').on('click', function() {
            $('#popupSuccess').removeClass('active')
        })
        $('.form-preview-btn-back, #formPopupClose').on('click', function() {
            $('#popupPreview').removeClass('active')
            $('body').removeClass('lock')
        })
    }
</script>