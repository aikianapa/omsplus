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
                        <input class="input" placeholder="Укажите.." type="text" name="last_name" required />
                        <label class="label">Фамилия</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="content-form-block">
                    <div class="group">
                        <input class="input" placeholder="Укажите.." type="text" name="first_name" required />
                        <label class="label">Имя</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="content-form-block">
                    <div class="group">
                        <input class="input" placeholder="Укажите.." type="text" name="middle_name" required />
                        <label class="label">Отчество</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="content-form-block">
                    <div class="group">
                        <input class="input" placeholder="Укажите.." type="text" name="citizen" required1 />
                        <label class="label">Гражданство</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="content-form-block">
                    <div class="group">
                        <input class="input" placeholder="Укажите.." type="text" id="email" name="email" required1 />
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
            <div class="content-form-block-title abuse-form-block-title mb-40 mt-25 col-sm-12">
                Адрес
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="content-form-block">
                    <div class="group">
                        <input class="input" placeholder="Укажите.." type="text" data-wb-mask="999999" name="zip" required1 />
                        <label class="label">Индекс</label>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="content-form-block">
                    <div class="group">
                        <input type="text" placeholder="Укажите.." class="input" name="region" value="" readonly onclick="selectRegion(this)">
                        <label class="label">Регион</label>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="content-form-block">
                    <div class="group">
                        <input class="input" placeholder="Укажите.." type="text" name="place" required1 />
                        <label class="label">Населенный пункт</label>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="content-form-block">
                    <div class="group">
                        <input class="input" placeholder="Укажите.." type="text" name="place" required1 />
                        <label class="label">Дом, улица</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 ">
                <div class="content-form-block">
                    <div class="group">
                        <input class="input" placeholder="Укажите.." type="text" name="place" required1 />
                        <label class="label">Дом/владение</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 ">
                <div class="content-form-block">
                    <div class="group">
                        <input class="input" placeholder="Укажите.." type="text" name="place" required1 />
                        <label class="label">Строение/корпус</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 ">
                <div class="content-form-block">
                    <div class="group">
                        <input class="input" placeholder="Укажите.." type="text" name="place" required1 />
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
                        <select class="floating-select" name="type" required1 value="">
                            <option></option>
                            <option value="1">Провести экспертизу качества медицинской помощи</option>
                            <option value="2">Провести экспертизу качества медицинской помощи</option>
                            <option value="3">Жалоба на лекарственное обеспечение</option>
                        </select>
                        <label class="label abuse-label">Жалоба на оказание медицинских услуг</label>
                        <svg style="position: relative; right: 15px;" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 0L7 5L12 0L14 1L7 8L0 1L2 0Z" fill="#4A4A4A"/>
                        </svg>
                    </div>
                </div>
                <div class="content-form-block col-lg-6 col-12">
                    <div class="group">
                        <input type="text" class="input" placeholder="Укажите.." name="region_to" value="" readonly required1 onclick="selectRegion(this)">
                        <label class="label">Регион обращения</label>
                    </div>
                </div>
                <div class="col-lg-4 col-6 mb-6">
                    <div class="floating-label">
                        <select class="floating-select" name="type" required1 value="">
                            <option data-recepients></option>
                            <option>Платная</option>
                            <option>Бесплатная ОМС</option>
                        </select>
                        <label class="label abuse-label">Услуга оказана</label>
                        <svg style="position: relative; right: 15px;" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 0L7 5L12 0L14 1L7 8L0 1L2 0Z" fill="#4A4A4A"/>
                        </svg>
                    </div>
                </div>
                <div class="col-lg-4 col-6 mb-6">
                    <div class="floating-label">
                        <select class="floating-select" name="type" required1 value="">
                            <option data-recepients></option>
                            <option data-recepients="tfoms,insure">В поликлинике</option>
                            <option data-recepients="foms, tfoms,insure">В стационаре</option>
                        </select>
                        <label class="label abuse-label">Где ?</label>
                        <svg style="position: relative; right: 15px;" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 0L7 5L12 0L14 1L7 8L0 1L2 0Z" fill="#4A4A4A"/>
                        </svg>
                    </div>
                </div>
                <div class="col-lg-4 col-12 mb-6">
                    <div class="floating-label">
                        <select class="floating-select" name="type" required1 value="">
                            <option></option>
                            <option value="1">Провести экспертизу качества медицинской помощи</option>
                            <option value="2">Провести экспертизу качества медицинской помощи</option>
                            <option value="3">Жалоба на лекарственное обеспечение</option>
                        </select>
                        <label class="label abuse-label">Наименование медучреждения</label>
                        <svg style="position: relative; right: 15px;" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 0L7 5L12 0L14 1L7 8L0 1L2 0Z" fill="#4A4A4A"/>
                        </svg>
                    </div>
                </div>
            </div>



<!--             <div data-branch="1" class="d-none row"> -->
<!--                 <div class="col-12 d-none mb-2"> -->
<!--                     <div class="floating-label"> -->
<!--                         <select name="paytype" class="floating-select" required1 value=""> -->
<!--                             <option data-recepients></option> -->
<!--                             <option>Платная</option> -->
<!--                             <option>Бесплатная ОМС</option> -->
<!--                         </select> -->
<!--                         <label class="label">Тип услуги</label> -->
<!--                     </div> -->
<!--                 </div> -->
<!--                 <div class="col-12 d-none mb-2"> -->
<!--                     <div class="floating-label"> -->
<!--                         <select data-recepients name="orgtype" class="floating-select" required1 value=""> -->
<!--                             <option data-recepients></option> -->
<!--                             <option data-recepients="depart,insure">В поликлинике</option> -->
<!--                             <option data-recepients="depart,insure,tfoms">В стационаре</option> -->
<!--                         </select> -->
<!--                         <label class="label">Где?</label> -->
<!--                     </div> -->
<!--                 </div> -->
<!--                 <div class="col-12 d-none mb-2"> -->
<!--                     <div class="content-form-block"> -->
<!--                         <div class="group"> -->
<!--                             <input type="text" class="input" name="org" value="" placeholder=" " readonly required1 onclick="selectMed(this,true)" /> -->
<!--                             <label class="label">Наименование медучреждения</label> -->
<!--                         </div> -->
<!--                     </div> -->
<!--                 </div> -->
<!--             </div> -->
<!--             <div data-branch="2" class="d-none row"> -->
<!--                 <div class="col-12 mb-2"> -->
<!--                     <div class="floating-label"> -->
<!--                         <select name="paytype" class="floating-select" required1 value=""> -->
<!--                             <option data-recepients></option> -->
<!--                             <option>Платная</option> -->
<!--                             <option>Бесплатная ОМС</option> -->
<!--                         </select> -->
<!--                         <label class="label">Тип услуги</label> -->
<!--                     </div> -->
<!--                 </div> -->
<!--                 <div class="col-12 mb-2"> -->
<!--                     <div class="floating-label"> -->
<!--                         <select data-recepients name="orgtype" class="floating-select" value="" required1> -->
<!--                             <option data-recepients></option> -->
<!--                             <option data-recepients="tfoms,insure">В поликлинике</option> -->
<!--                             <option data-recepients="foms, tfoms,insure">В стационаре</option> -->
<!--                         </select> -->
<!--                         <label class="label">Где?</label> -->
<!--                     </div> -->
<!--                 </div> -->
<!--                 <div class="col-12 mb-2"> -->
<!--                     <div class="content-form-block"> -->
<!--                         <div class="group"> -->
<!--                             <input type="text" class="input" name="org" value="" placeholder=" " readonly required1 onclick="selectMed(this,true)" /> -->
<!--                             <label class="label">Наименование медучреждения</label> -->
<!--                         </div> -->
<!--                     </div> -->
<!--                 </div> -->
<!--             </div> -->
<!--             <div data-branch="3" class="d-none row"> -->
<!--                 <div class="col-12 mb-2"> -->
<!--                     <div class="content-form-block"> -->
<!--                         <div class="group"> -->
<!--                             <input class="input" type="text" value="" name="drug" placeholder=" " data-recepients="depart,roszn" value="" /> -->
<!--                             <label class="label">Какое лекартство?</label> -->
<!--                         </div> -->
<!--                     </div> -->
<!--                 </div> -->
<!--             </div> -->


            <div class="recepients row">
                <div class="col-12 head">
                    <div class="content-form-block-title abuse-form-block-title mb-40 pt-6 ">
                        Получители обращения
                    </div>
                </div>

                <div class="col-12 depart">
                    <div class="content-form-block">
                        <div class="group">
                            <input type="text" class="input" name="depart" value="" readonly onclick="selectDepart(this)" placeholder=" " data-id>
                            <label class="label">Департамент здравоохранения</label>
                        </div>
                    </div>
                </div>
                <div class="col-12 insure">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="content-form-block">
                                <div class="group">
                                    <input type="text" placeholder="Укажите.." class="input" name="insure" value="" readonly onclick="selectInsure(this)" data-id>
                                    <label class="label">Страховая медицинская организация</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="content-form-block">
                                <div class="group">
                                    <input class="input" placeholder="Укажите.." type="text" id="polis" name="polis" />
                                    <label class="label">Номер полиса</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 tfoms">
                    <div class="content-form-block">
                        <div class="group">
                            <input type="text" class="input" name="tfoms" value="" readonly onclick="selectTfoms(this)" placeholder=" " data-id>
                            <label class="label">Территориальный фонд ОМС</label>
                        </div>
                    </div>
                </div>

                <div class="col-12 d-none foms">
                    <div class="content-form-block">
                        <div class="group">
                            <input type="text" class="input" name="foms" value="Фонд обязательного медицинского страхования"  placeholder=" " data-id data-email="{{_sett.email_foms}}">
                            <label class="label">Фонд ОМС</label>
                        </div>
                    </div>
                </div>

                <div class="col-12 d-none roszn">
                    <div class="content-form-block">
                        <div class="group">
                            <input type="text" class="input" name="roszn" value="Росздравнадзор"  placeholder=" " data-id data-email="{{_sett.email_roszdrav}}">
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
                            <textarea placeholder=" " class="input" name="prev" required1 ></textarea>
                            <label class="label">Куда обращались ранее по данному вопросу</label>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="content-form-block">
                        <div class="group mb-0">
                            <textarea placeholder=" " class="input" name="text" required1 ></textarea>

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
                            <div class="form-buttons">
                                <div class="form-buttons-left">
                                    <input type="file" class="form-btn-input" id="formInputTypeFile" accept="image/jpeg, application/pdf, .doc, .docx">
                                    <label class="form-btn button" for="formInputTypeFile">
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
                    <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" id="checkAbuseForm" required />
                        <label class="custom-control-label textPale" for="checkAbuseForm">Я даю согласие на обработку и использование следующих моих персональных данных: фамилия, имя, отчество, контактные номера телефонов, адрес электронной почты, иные сведения, содержащие персональные данные в электронной форме, а также на их обработку с использованием средств автоматизации, включая осуществление сбора, накопления, систематизации, хранения, уточнения, использования, распространения (в т.ч. передачу), обезличивание, блокирование, уничтожение.
                        </label>
                    </div>
                </div>
                <div class=" mt-4 pt-1">
                    <button type="button" class="button button--red btn-abuse">Отправить</button>
                    <span class="button form-preview-btn">Предварительный просмотр</span>
                </div>
            </div>
        </div>
</div>

<modals>

    <div id="selectRegion1" class="modal nowb" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="w-100 modal-title">
                        <input type="search" class="form-control" placeholder="Поиск...">
                    </div>
                </div>
                <div class="modal-body">
                    <ul class="list-group ">
                        <template>
                            {{#each items}}
                            <li class="list-group-item cursor-pointer" data-region="{{id}}">{{name}}</li>
                            {{/each}}
                        </template>
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
                        <input type="search" class="form-control" placeholder="Поиск...">
                    </div>
                </div>
                <div class="modal-body">
                    <ul class="list-group">
                        <template>
                            {{#each items}}
                            <li class="list-group-item cursor-pointer" data-region="{{region}}">
                                <span>{{name}}</span> [{{kmo}}]
                            </li>
                            {{else}}
                            <p class="alert alert-info">Пожалуйста, вначале укажите регион.</p>
                            {{/each}}
                        </template>
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
                        <input type="search" class="form-control" placeholder="Поиск...">
                    </div>
                </div>
                <div class="modal-body">
                    <ul class="list-group">
                        <template>
                            {{#each items}}
                            <li class="list-group-item cursor-pointer" data-region="{{region}}" data-id="{{id}}" data-email="{{email}}">
                                <span>{{name}}</span> [{{ksmo}}]
                                <div class="tx-10">{{address}}</div>
                            </li>
                            {{else}}
                            <p class="alert alert-info">Пожалуйста, вначале укажите регион.</p>
                            {{/each}}
                        </template>
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
                        <input type="search" class="form-control" placeholder="Поиск...">
                    </div>
                </div>
                <div class="modal-body">
                    <ul class="list-group">
                        <template>
                            {{#each items}}
                            <li class="list-group-item cursor-pointer" data-region="{{id}}" data-id="{{id}}" data-email="{{email}}">
                                <span>{{name}}</span>
                            </li>
                            {{else}}
                            <p class="alert alert-info">Пожалуйста, вначале укажите регион.</p>
                            {{/each}}
                        </template>
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
                        <input type="search" class="form-control" placeholder="Поиск...">
                    </div>
                </div>
                <div class="modal-body">
                    <ul class="list-group">
                        <template>
                            {{#each items}}
                            <li class="list-group-item cursor-pointer" data-region="{{id}}" data-id="{{id}}" data-email="{{email}}">
                                <span>{{name}}</span>
                            </li>
                            {{else}}
                            <p class="alert alert-info">Пожалуйста, вначале укажите регион.</p>
                            {{/each}}
                        </template>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</modals>

<script>
    var selMed, selIns, selReg, selDep, selTfoms, selectInsure, selectRegion;
    document.addEventListener("site-jq-ready", function() {
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

        function openPopup() {
            let formPreviewPopup = document.querySelector('.form-popup');
            let body = document.querySelector('body');
            formPreviewPopup.classList.add('active');
            body.classList.add('lock');
        }

        function closePopup() {
            let formPreviewPopup = document.querySelector('.form-popup');
            let body = document.querySelector('body');
            formPreviewPopup.classList.remove('active');
            body.classList.remove('lock');
        }

        let formPreviewBtn = document.querySelector('.form-preview-btn');
        formPreviewBtn.addEventListener('click', openPopup);

        let formPreviewClose = document.querySelector('.form-popup__close');
        formPreviewClose.addEventListener('click', closePopup);

        let formPreviewNext = document.querySelector('.form-preview-btn-back');
        formPreviewNext.addEventListener('click', closePopup);

        let formPopupBody = document.querySelector('.form-popup__body');

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
        })

        $('#formAbuse .floating-select').on('change', function(e) {
            $(this).attr('value', $(this).val());
        });

        $('#formAbuse .btn-abuse').on('click', function(e) {
            if (wb_check_required('#formAbuse')) {
                $('#formAbuse [name]:input:not(:visible)').each(function(){
                    $(this).attr('data-name',$(this).attr('name')).removeAttr('name');
                });
                let data = $('#formAbuse').serializeArray();
                $('#formAbuse [data-name]:input:not(:visible)').each(function(){
                    $(this).attr('name',$(this).attr('data-name')).removeAttr('data-name');
                });

                let $form = $('<form id="printAbuse" />');
                $form.attr('method', 'POST').attr('target', '_blank').attr('action',
                    '/module/abuse/print');
                $.each(data, function(i, k) {
                    $form.append(
                        `<input type="hidden" name="${k.name}" value="${htmlentities(k.value)}">`
                    );
                });

                let region = $('#formAbuse [name=region_to]').data('region');
                let recp ='';
                $('#formAbuse .recepients [name][data-email]').each(function(){
                    let fld = $(this).attr('name');
                    let email = $(this).attr('data-email');
                    $form.append(`<input type="hidden" name="${fld}_email" value="${email}">`);
                    recp > '' ? recp +=`, ${fld}` : recp += fld;
                });
                
                $form.append(`<input type="hidden" name="recepients" value="${recp}">`);

                /*

                let email = $('#formAbuse [name=insure]:last').data('email');
                let inid = $('#formAbuse [name=insure]:last').data('id');

                $form.append(`<input type="hidden" name="insure_id" value="${inid}">`);
                $form.append(`<input type="hidden" name="insure_email" value="${email}">`);
                
                */
                $form.find('[name=region]').val(region);

                $form.appendTo('body');
                $form.submit();
                $form.remove();
            };
        })

        $("#formAbuse [name=type]").on('change', function() {
            $(`#formAbuse .branches [data-branch]`).addClass('d-none');
            $("#formAbuse .recepients > *").addClass('d-none');
            if ($(this).val() !== "0") {
                $(`#formAbuse .branches [data-branch=${$(this).val()}]`).removeClass('d-none');
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

            $('#selectInsure .list-group-item').off('click');
            $('#selectInsure .list-group-item').on('click', function() {
                let name = $(this).children('span').text();
                let email = $(this).data('email');
                let id = $(this).data('id');
                all ? $('#formAbuse [name=insure]').val(name) : $(that).val(name);
                all ? $('#formAbuse [name=insure]').attr('data-id', id) : $(that).attr('data-id',
                    id);
                all ? $('#formAbuse [name=insure]').attr('data-email', email) : $(that).attr(
                    'data-email', email);
                $('#selectInsure').modal('hide');
            })

            $('#selectInsure input').off('keyup');
            $('#selectInsure input').on('keyup', function() {
                let regex = $(this).val();
                if (regex > ' ') {
                    regex = new RegExp(regex, "gi");
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
            $('#selectRegion1').modal('show');
            $('#selectRegion1 .list-group-item').off('click');
            $('#selectRegion1 .list-group-item').on('click', function() {
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
                let regex = $(this).val();
                if (regex > ' ') {
                    regex = new RegExp(regex, "gi");
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
                    $.each($('#selectMed .list-group-item[data-region=' + region + ']'), function(i,
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
                all ? $('#formAbuse [name=depart]').attr('data-id', id) : $(that).attr('data-id',
                    id);
                all ? $('#formAbuse [name=depart]').attr('data-email', email) : $(that).attr(
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
                all ? $('#formAbuse [name=tfoms]').attr('data-id', id) : $(that).attr('data-id',
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

    });
</script>
<style>
    .floating-select {
        appearance: none;
        padding-right: 30px;
    }

    .floating-label {
        position: relative;
        margin-bottom: 2.8rem;
        display: flex;
        align-items: center;
    }

    .floating-select {
        font-size: 14px;
        display: block;
        width: 100%;
        height: 32px;
        background-color: transparent;
        border: none;
        border-bottom: 1px solid #C6C6C6;
        ;
    }

    .floating-select:focus {
        outline: none;
        border-bottom: 1px solid #C6C6C6;
    }

    label:not(.custom-control-label) {
        color: #4A4A4A;
        font-size: 14px;
        font-weight: normal;
        position: absolute;
        pointer-events: none;
        top: 5px;
        transition: 0.2s ease all;
        -moz-transition: 0.2s ease all;
        -webkit-transition: 0.2s ease all;
    }

    @media(max-width: 575px) {
        label:not(.custom-control-label) {
            font-size: 13px;
        }
    }

    .floating-select:focus~label,
    .floating-select:not([value=""]):valid~label {
        top: -19px;
        font-size: 14px;
    }

    /* active state */

    .floating-select:focus~.floating-select:focus~ {
        width: 50%;
    }

    *,
    *:before,
    *:after {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    /* active state */

    .floating-select:focus~ {
        -webkit-animation: inputHighlighter 0.3s ease;
        -moz-animation: inputHighlighter 0.3s ease;
        animation: inputHighlighter 0.3s ease;
    }

    .content-form-block .input::placeholder {
        color: transparent
    }

    .content-form-block .input:focus~label,
    .content-form-block .input:not(:placeholder-shown)~label {
        top: -20px
    }


    .content-form-block .input:focus {
        outline: none
    }

    .content-form-block .group {
        position: relative;
        margin-bottom: 24px
    }

    .modal-content {
        overflow-y: scroll;
        height: 500px;
    }

    .modal-dialog {
        @media (min-width: 576px) {
            max-width: 1000px;
        }
    }

    .list-group {
        grid-gap: 0 2rem;
        grid-template-columns: 1fr 1fr;
        display: grid;
    }

    @media(max-width: 640px) {
        .modal-body {
            flex-direction: column;
        }
        .list-group {
            grid-template-columns: 1fr;
        }

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

    @media(max-width: 992px) {
        .content-form-block .label {
            font-size: 13px;
        }
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
        /*padding: 54px 0;*/
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

    .blocks h1,
    .blocks h2,
    .blocks h3,
    .blocks h4,
    .blocks h5,
    .blocks h6,
    .content-list-item-subtitle {
        font-family: Montserrat;
        font-weight: 600;
        font-size: 18px;
        line-height: 145%;
        color: #4A4A4A;
        margin-bottom: 16px;
    }

    .blocks b,
    .content-list-item-label {
        font-family: Montserrat;
        font-weight: 600;
        font-size: 13px;
        line-height: 145%;
        color: #4A4A4A;
        margin-bottom: 8px;
    }

    .blocks p,
    .content-list-item-value {
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

    .form-group.floating>label {
        bottom: 34px;
        left: 8px;
        position: relative;
        background-color: white;
        padding: 0px 5px 0px 5px;
        font-size: 1.1em;
        transition: 0.1s;
        pointer-events: none;
        font-weight: 500 !important;
        transform-origin: bottom left;
    }

    .form-control.floating:focus~label {
        transform: translate(1px, -85%) scale(0.80);
        opacity: .8;
        color: #005ebf;
    }

    .form-control.floating:valid~label {
        transform-origin: bottom left;
        transform: translate(1px, -85%) scale(0.80);
        opacity: .8;
    }

    .modal-xl {
        max-width: 80vw;
    }

    .branches {
        margin-top: 60px;
        padding-left: 0;
        padding-right: 0;
    }

    @media(max-width: 575px) {
        .branches {
            margin-top: 30px;
        }
    }

</style>