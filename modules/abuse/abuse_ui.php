<link rel="stylesheet" href="/modules/abuse/abuse.css">
<script src="/tpl/build/libs/petrovich.min.js"></script>
<script>

    
</script>

<div id="modAbuse">
    <template id="modAbuseTpl">
        <div class="container blocks">
            <form class="form-white--gray" id="formAbuse" >
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
                        <div class="col-lg-6 col-12 mb-6">
                            <div class="floating-label">
                                <select class="floating-select input" name="type" value="" on-change="setType">
                                    <option value="1">Жалоба на оказание медицинской помощи</option>
                                    <option value="2">Провести экспертизу качества медицинской помощи</option>
                                    <option value="3">Жалоба на лекарственное обеспечение</option>
                                </select>
                                <label style="top: 0px;" class="label abuse-label">Повод обращения
                                    <svg style="position: relative; right: 15px;" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2 0L7 5L12 0L14 1L7 8L0 1L2 0Z" fill="#4A4A4A" />
                                    </svg>
                                </label>

                            </div>
                        </div>
                        <div class="content-form-block col-lg-6 col-12">
                            <div class="group">
                                <input type="text" class="input" placeholder="Укажите.." name="region_to" value="" readonly on-click="selectRegion">
                                <label class="label">Регион обращения</label>
                            </div>
                        </div>
                    </div>
                    <div class="abuse-form-body mt-0 abuse-form-grey row">
                        <div class="col-12 type-3">
                            <div class="content-form-block">
                                <div class="group">
                                    <textarea placeholder=" " class="input" name="drug"></textarea>
                                    <label class="label">Какое лекарство?</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 mb-6 abuse-checkbox-block type-1 type-2">
                            <div class="abuse-form-title">Тип услуги</div>
                            <div class="abuse-checkboxes">
                                <div class="custom-control abuse-checkbox custom-checkbox mb-40" on-click="abuseCheckbox">
                                    <input type="radio" class="custom-control-input input" value="pay" id="payAbuseForm" name="payform" />
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
                            <div class="abuse-dop type-free">
                                <div class="content-form-block">
                                    <div class="group">
                                        <input class="input" placeholder="Укажите.." type="text" name="polis" />
                                        <label class="label">Полис ОМС</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 mb-6 abuse-checkbox-block type-1 type-2">
                            <div class="abuse-form-title">Где ?</div>
                            <div class="abuse-checkboxes">
                                <div class="custom-control abuse-checkbox custom-checkbox mb-40" on-click="abuseCheckbox">
                                    <input type="radio" class="custom-control-input input" id="statAbuseForm" value="stat" name="orgtype" />
                                    <label class="custom-control-label t-5 textPale" for="statAbuseForm">
                                        Стационар
                                    </label>
                                </div>
                                <div class="custom-control abuse-checkbox custom-checkbox mb-40" on-click="abuseCheckbox">
                                    <input type="radio" class="custom-control-input input" id="polyAbuseForm" value="poly" name="orgtype" />
                                    <label class="custom-control-label t-5 textPale" for="polyAbuseForm">
                                        Поликлиника
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-12 mb-6 abuse-form-item content-form-block type-1 type-2">
                            <div class="floating-label abuse-label">
                                <input type="text" class="input" name="org" value="" placeholder=" " readonly  on-click="['selectModal','#selectMed']"  on-change="abuseCheckbox" /><span></span>
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

                        <div class="col-12 roszn type-3">
                            <div class="content-form-block">
                                <div class="group">
                                    <input type="text" id="zdravinp" readonly class="input" name="roszn" value="Росздравнадзор" placeholder=" " data-id data-email="{{_sett.email_roszdrav}}">
                                    <label class="label">Росздравнадзор</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 depart type-1 type-3">
                            <div class="content-form-block">
                                <div class="group floating-label">
                                    <input type="text" class="input" id="depinp" name="depart" value="" readonly on-click="['selectModal','#selectDepart']" placeholder=" " data-id> <span class="strsp" style="display: none; position: absolute; top: 0;right: 0;" onclick=" document.getElementById('depinp').value = ''; this.style.display = 'none';"><svg class="input-delete" style="position: relative; right: 15px; z-index: 2;" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="21.3703" height="1.25708" transform="matrix(0.707108 -0.707105 0.707109 0.707105 0 15.1108)" fill="#4A4A4A" />
                        <rect width="21.3703" height="1.25708" transform="matrix(0.707109 0.707105 -0.707108 0.707105 0.888916 0)" fill="#4A4A4A" />
                    </svg></span>
                                    <label class="label abuse-label">Департамент здравоохранения
                                        <svg style="position: relative; right: 15px;" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2 0L7 5L12 0L14 1L7 8L0 1L2 0Z" fill="#4A4A4A" />
                                        </svg>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 insure type-1 type-2">
                            <div class="content-form-block">
                                <div class="group floating-label">
                                     <input type="text" id="strahinp" placeholder="Укажите.." class="input" name="insure" value="" readonly on-click="['selectModal','#selectInsure']" data-id><span class="strsp" style="display: none; position: absolute; top: 0;right: 0;" onclick=" document.getElementById('strahinp').value = ''; this.style.display = 'none';"><svg class="input-delete" style="position: relative; right: 15px; z-index: 2;" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="21.3703" height="1.25708" transform="matrix(0.707108 -0.707105 0.707109 0.707105 0 15.1108)" fill="#4A4A4A" />
                        <rect width="21.3703" height="1.25708" transform="matrix(0.707109 0.707105 -0.707108 0.707105 0.888916 0)" fill="#4A4A4A" />
                    </svg></span>
                                                                       
                                    <label class="label abuse-label">Страховая медицинская организация
                                        <svg style="position: relative; right: 15px;" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2 0L7 5L12 0L14 1L7 8L0 1L2 0Z" fill="#4A4A4A" />
                                        </svg>
                                    </label>

                                </div>
                            </div>
                        </div>

                        <div class="col-12 foms type-1 type-2">
                            <div class="content-form-block">
                                <div class="group">
                                    <input type="text" id="fomsinp" class="input" name="foms" readonly value="Фонд обязательного медицинского страхования" placeholder=" " data-id data-email="{{_sett.email_foms}}">
                                    <label class="label">Фонд ОМС</label>
                                </div>
                            </div>
                        </div>


                        <div class="col-12 tfoms type-1 type-2">
                            <div class="content-form-block">
                                <div class="group floating-label">
                                    <input type="text" class="input" id="tfomse" name="tfoms" value="" readonly on-click="['selectModal','#selectTfoms']" placeholder=" " data-id><span class="strsp" style="display: none; position: absolute; top: 0;right: 0;" onclick=" document.getElementById('tfomse').value = ''; this.style.display = 'none';"><svg class="input-delete" style="position: relative; right: 15px; z-index: 2;" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="21.3703" height="1.25708" transform="matrix(0.707108 -0.707105 0.707109 0.707105 0 15.1108)" fill="#4A4A4A" />
                        <rect width="21.3703" height="1.25708" transform="matrix(0.707109 0.707105 -0.707108 0.707105 0.888916 0)" fill="#4A4A4A" />
                    </svg></span>
                                    <label class="label abuse-label">Территориальный фонд ОМС
                                        <svg style="position: relative; right: 15px;" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2 0L7 5L12 0L14 1L7 8L0 1L2 0Z" fill="#4A4A4A" />
                                        </svg>
                                    </label>

                                </div>
                            </div>
                        </div>

                        <div class="col-12 add-address-out">
                            
                        </div>

                        <div class="col-12 add-address-block">
                            <div class="content-form-block">
                                <div class="group mb-0">
                                    <div class="form-buttons form-btn-address">
                                        <div class="form-buttons">
                                            <span class="form-btn button abuse-button-address abuse-button-hover add-input">
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
                                            <input type="file" class="form-btn-input"  id="type-file0" accept="image/jpeg, application/pdf, .doc, .docx" onchange="addFiles();">
                                            <div class="lb">
                                                 <label class="form-btn button abuse-button-hover" for="type-file0">
                                                <span class="form-pluse">
                                                    <span></span>
                                                    <span></span>
                                                </span>
                                                Добавить документ
                                            </label>
                                            </div>                                          
                                           
                                           <ul class="list-files">
                                               <p class="file__text" style="display: none;">Приложение:</p>

                                           </ul>
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

                        <div class="mt-20 pt-5">
                            <button type="submit" class="button cursor-pointer button--red btn-abuse">Отправить</button>
                            <a href="javascript:void(0)" on-click="viewPreview" class="button cursor-pointer form-preview-btn popup-link">Предварительный просмотр</span>
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
                                    <li class="list-group-item cursor-pointer" data-id="{{id}}" data-email="{{email}}" on-click="selectModalClick">
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
                                        <div class="form-popup-subt">МП № <span data-name="number"></span>> </div>
                                    </div>
                                    <div class="form-popup__right">
                                        {{#each recep}}
                                            <div class="form-popup__item">
                                                <div class="form-popup__name">
                                                    {{#if @index == 0}}Куда отправляем{{else}}Копия{{/if}}
                                                </div>
                                                <span>{{name}}</span>
                                                <span>{{email}}</span>
                                            </div>
                                        {{/each}}
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
                                        {{#if type !== '3'}}
                                            <span>Все это происходило в {{#if orgtype == 'stat'}}стационаре{{else}}поликлинике{{/if}}: {{org}}</span>
                                        {{/if}}
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

            <div class="form-popup success-popup" id="popupSuccess">
                <div class="form-popup__container success-popup__container container">
                    <div class="form-popup__body success-popup__body">
                        <div class="form-popup__content success-popup__content">
                            <div class="form-popup__close success-popup__close cursor-pointer" id="successPopupClose" onclick="$('#popupSuccess').removeClass('active')">
                                <svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="21.3703" height="1.25708" transform="matrix(0.707108 -0.707105 0.707109 0.707105 0 15.1113)" fill="#4A4A4A" />
                                    <rect width="21.3703" height="1.25708" transform="matrix(0.707109 0.707105 -0.707108 0.707105 0.888672 0)" fill="#4A4A4A" />
                                </svg>
                            </div>
                            <div class="form-popup__text">
                                Ваше обращение успешно отправлено!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </modals>
    </template>
</div>

<script>
   
    document.addEventListener("site-jq-ready", () => {
    
     



        wb_plugins()
        $('#formAbuse').validate()
        var modAbuseTpl = $('#modAbuseTpl').html()
        var modAbuse = new Ractive({
            el: '#modAbuse',
            template: modAbuseTpl,
            data: {},
            on: {
                init() {
                    $.get('/ajax/region/', function(data) {
                        modAbuse.set('regions', data);
                        modAbuse.set('_sett', wbapp.settings);
                    })
                },
                complete() {
                    $('#modAbuse').find('[class*="type-"]').hide()
                },
                selectRegion(ev) {
                    $('#selectRegion1').modal('show');
                    $('#selectRegion1')[0].input = $(ev.node)
                },



                // printAbuse() {
                //     this.fire('viewPreview', false)
                //     $('#popupPreview data-fld')
                //     data = modAbuse.get('letter')
                //     $.post('/module/abuse/print/',data,function(res){
                //         console.log(res);
                //         if (res.error == false) {
                //             $('#popupSuccess').addClass('active');
                //             $('body').addClass('lock');
                //             setTimeout(() => {
                //                 $('#popupSuccess').removeClass('active');
                //                 $('body').removeClass('lock');
                //             }, 2000)
                //        // $('#formAbuse').trigger('reset');                            
                //         }
                //     })
                // },

              



                
                // addFile(ev) {
                //     let outLb = document.querySelector(".lb");
                //     let outinput = document.querySelector(".form-buttons-left");
                //     countLb++
                //     console.log(5465465)
                //     console.log(countLb)
                //     console.log(outLb)

                //     let tmpinput = `
                //         <input type="file" class="form-btn-input" name="files[]" id="type-file${countLb}" accept="image/jpeg, application/pdf, .doc, .docx" on-change="addFile">
                //     `
                //     outinput.insertAdjacentHTML("beforeEnd" , tmpinput);

                //     let tmpLabel = `
                //     <label class="form-btn button abuse-button-hover" for="type-file${countLb}">
                //                                 <span class="form-pluse">
                //                                     <span></span>
                //                                     <span></span>
                //                                 </span>
                //                                 Добавить документ
                //                             </label>
                //     `
                //     outLb.innerHTML = tmpLabel;

                     
                    
                    
                    

                //     let that = ev.node
                //     var arrayFiles = that.files, // массив с выбранными фалами
                //         formItem = that
                //         .parentNode, // родительский элемент, для того чтобы вставить список с файлами
                //         listFiles = document.createElement('ul'), // список с файлами
                //         li = ''; // файлы
                //     // Если список с файлами уже вставлен в ДОМ, то удаляем его
                //     if (formItem.querySelector('.list-files')) {
                //         formItem.querySelector('.list-files').remove();
                //     }
                //     listFiles.className = 'list-files'; // добавим класс, чтобы было удобнее стилять
                //     if (arrayFiles.length <= 10) {
                //         for (var i = 0; i < arrayFiles.length; i++) {
                //             li += '<li>' + arrayFiles[i].name + '</li>'; // --><li>Имя файла</li>
                //         }
                //     } else {
                //         li += '<li style="color: #F24C45;">' + 'Не более 10 файлов!' + '</li>';
                //     }
                //     listFiles.innerHTML = li;
                //     formItem.appendChild(listFiles);
                
                // },
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
                    if (data.email !== undefined) $(input).attr('data-email', data.email)
                    $(modal).modal('hide')
                    
          
                    if (input.value != ""){
                        input.nextElementSibling.style.display = "block"
                    } else{
                        input.nextElementSibling.style.display = "none"
                    }



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
                setType(ev) {
                    let type = $(ev.node).val()
                    $('#modAbuse').find('[class*="type-"]').hide()
                    $('#modAbuse').find(`[class*="type-${type}"]`).show()
                    this.fire('abuseCheckbox')
                    ev.node.nextElementSibling.style = "-19px"
                },
                viewPreview(ev, view = true) {
                let validator = $( "#formAbuse" ).validate();
                validator.form();  
                let errors = document.querySelectorAll('#formAbuse .input.error')
                if (errors.length != 0) {
                    console.log('Заполните все поля!')
                } else {
                    
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
                    data.recep = {}
                    $('#formAbuse #Recepients [data-email]:visible').each(function(i) {
                        data.recep[i] = {
                            email: $(this).data('email').toLowerCase(),
                            name: $(this).val()
                        }
                    })
                    modAbuse.set('letter', data);
                    if (view) $('#popupPreview').addClass('active')

                }
                },
                abuseCheckbox() {
                    let type = $('#modAbuse [name=type]').val() * 1
                    let org =  $('#modAbuse [name=org]').val()
                    let federal = false
                    let regex = "(ФГУ|ФГАУ|НМИЦ)"
                    regex = new RegExp(regex, "gi");
                    org.match(regex) ? federal = true : federal = false;
                    if (federal == true) console.log("Federal");
                    let free = null;
                    let poly = null;
                    if ($('#freeAbuseForm').is(':checked')) {
                        $('#modAbuse .abuse-dop').show()
                        free = true;
                    } else {
                        $('#modAbuse .abuse-dop').hide()
                        free = false;
                    }
                    $('#polyAbuseForm').is(':checked') ? poly = true : poly = false
                    /*
                        .roszn - Росздравнадзор
                        .depart - Департамент
                        .insure - Страховая
                        .foms - Фонд ОМС
                        .tfoms - Терр.фонд ОМС
                    */
                    $('#modAbuse').find('.roszn,.depart,.insure,.foms,.tfoms').hide()
                    switch (type) {
                        case 1:
                            if (poly == true && free == true) $('#modAbuse').find('.depart,.insure,.tfoms').show()
                            if (poly == true && free == false) $('#modAbuse').find('.depart,.roszn').show()
                            if (poly == false && free == true && federal == false) $('#modAbuse').find('.depart,.insure,.tfoms').show()
                            if (poly == false && free == true && federal == true) $('#modAbuse').find('.roszn').show()
                            if (poly == false && free == false && federal == false) $('#modAbuse').find('.depart,.roszn').show()
                            if (poly == false && free == false && federal == true) $('#modAbuse').find('.roszn').show()
                            break
                        case 2:
                            if (poly == true && free == true) $('#modAbuse').find('.insure,.tfoms').show()
                            if (poly == true && free == false) $('#modAbuse').find('.roszn,.depart').show()
                            if (poly == false && free == true && federal == false) $('#modAbuse').find('.insure,.tfoms').show()
                            if (poly == false && free == true && federal == true) $('#modAbuse').find('.foms').show()
                            if (poly == false && free == false && federal == false) $('#modAbuse').find('.roszn,.depart').show()
                            if (poly == false && free == false && federal == true) $('#modAbuse').find('.roszn').show()
                            break
                        case 3:
                            $('#modAbuse').find('.depart,.roszn').show()
                            break

                    }
                }
            }
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
                            }
                            
                        },
                        messages: {
                            first_name: {
                                required: "Пожалуйста, введите свое имя",
                                minlength: jQuery.validator.format("Введите {0} символа!")
                            }
                            ,
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
                            }
                            ,
                            text: {
                                required: "Пожалуйста, введите текст обращения"
                            },
                            personal: {
                                required: "Пожалуйста, поставьте галочку"
                            }
                       
                        }
                    });
                };
                valideFormsMain('#formAbuse')

        const addInput = document.querySelector(".add-input"),
            addAddressOut= document.querySelector(".add-address-out"),
            temp = `
            <div class="content-form-block div-node">
                <div class="group abuse-group">
                    <input class="input" placeholder="Укажите.." type="email" name="addemail[]" />
                    <label class="label">
                        Укажите эл.почту
                    </label>
                    <svg class="input-delete" style="position: relative; right: 15px; z-index: 2;" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="21.3703" height="1.25708" transform="matrix(0.707108 -0.707105 0.707109 0.707105 0 15.1108)" fill="#4A4A4A" />
                        <rect width="21.3703" height="1.25708" transform="matrix(0.707109 0.707105 -0.707108 0.707105 0.888916 0)" fill="#4A4A4A" />
                    </svg>
                </div>
            </div>
            `;


        addInput.addEventListener("click", ()=>{
            let adressInputs = document.querySelectorAll(".div-node");  
            if (adressInputs.length == 0){                
                addAddressOut.insertAdjacentHTML("beforeEnd" , temp); 
            } else if (adressInputs[adressInputs.length-1].querySelector("input").value){                
                addAddressOut.insertAdjacentHTML("beforeEnd" , temp);
            } 
        })

         addAddressOut.addEventListener("click", (e)=>{
             let target = e.target;
             if (target.classList.contains("input-delete")){
                 target.closest(".div-node").remove();
             }
         })

      

         $('#formAbuse').submit(function (e) {
            e.preventDefault();            
            let errors = document.querySelectorAll('#formAbuse .input.error')
            if (errors.length != 0) {
                console.log('Заполните все поля!')
            } else {
                let form = document.querySelector("#formAbuse");
                let thatfiles = document.querySelectorAll("[type='file']");
                
                let formData = new FormData(form);
                for (var i = 0; i < thatfiles.length-1; i++) {
                      
                        formData.append('files[]', thatfiles[i].files[0]);

                    }

                    let persons = {
                            first: document.querySelector("[name='first_name']").value,
                            middle: document.querySelector("[name='middle_name']").value,
                            last: document.querySelector("[name='last_name']").value
                        };
                        let genders = petrovich(persons, 'genitive');
                        let persone = `${genders.last} ${genders.first} ${genders.middle}`;
                        formData.append('person', persone);


                $.ajax({
                    url: '/module/abuse/print/',
                    type: 'POST',
                    	cache: false,
                contentType: false,
                processData: false,
                data: formData,
                dataType : 'json',
                }).done(function () {
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


  



    }, false);


                let flags = true;
                let countLb = 0;
                function addFiles(){
                    document.querySelector(".file__text").style.display = 'block';
                    if (flags == true){
                    
                        let outLb = document.querySelector(".lb");
                    let outinput = document.querySelector(".form-buttons-left");
                    countLb++

                    let tmpinput = `
                        <input type="file" class="form-btn-input" id="type-file${countLb}" accept="image/jpeg, application/pdf, .doc, .docx" onchange="addFiles()">
                    `
                    outinput.insertAdjacentHTML("beforeEnd" , tmpinput);

                    let tmpLabel = `
                    <label class="form-btn button abuse-button-hover" for="type-file${countLb}">
                                                <span class="form-pluse">
                                                    <span></span>
                                                    <span></span>
                                                </span>
                                                Добавить документ
                                            </label>
                    `
                    outLb.innerHTML = tmpLabel;                   
                    
                    let that = document.querySelectorAll("[type='file']");
                     
                    let ttt = document.querySelector(`#type-file${countLb-1}`)
                      document.querySelector('.list-files').innerHTML += `<li class="li${countLb}"> ${ttt.files[0]?.name} <span style="cursor: pointer; margin-left: 20px"  onmouseover="this.style.color='red';" onmouseout="this.style.color='#4a4a4a';" onclick="deleteFile(${countLb})">X</span></li>`
           
                    if (that.length <= 10) {

                }else {
                    flags = false
                    
                    document.querySelector('.list-files').innerHTML += '<li class="limit-error" style="color: #F24C45;">' + 'Не более 10 файлов!' + '</li>'
                       
                    }
        
                    }
                }

         function deleteFile(ind){
             
            let that = document.querySelectorAll("[type='file']");
            console.log(that.length)
             if (that.length > 10){
                flags=true
                document.querySelector('.limit-error').remove()
             }

            document.querySelector(`.li${ind}`).remove()
            document.querySelector(`#type-file${ind-1}`).remove()

            if (that.length <= 2){
                console.log(that.length)
                document.querySelector(".file__text").style.display = 'none';
                        }

       
         }

   
    
</script>