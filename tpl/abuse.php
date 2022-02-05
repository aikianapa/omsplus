<!doctype html>
<html lang="en">

<head>
    <meta data-wb-role="include" src="template" data-wb-name="head.inc.php">
</head>

<body>

    <meta data-wb-role="include" src="template" data-wb-name="header.inc.php">

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
                <ul class="list-group">
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
                    <li class="list-group-item cursor-pointer" data-region="{{region}}">{{name}}</li>
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
                    <li class="list-group-item cursor-pointer" data-region="{{region}}">{{name}}</li>
                    {{/each}}
                    </template>
                </ul>
            </div>
        </div>
    </div>
</div>

</modals>

<div data-wb-role="formdata" data-wb-form="pages" data-wb-item="quote">
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

</div>

    <div class="company" data-wb-role="tree" data-wb-from="content" data-wb-hide="wb">
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

        <form class="form-white form-white--gray" id="formAbuse">
            <input type="hidden" name="_subject" value="Обращение с сайта {{_route.host}}" />
            <input type="hidden" name="_mailto" value="{{_sett.email}}" />
            <div class="form-body row">

                <div class="col-sm-4">
                    <div class="input form-white__input">
                        <input class="form-control" type="text" id="last-name" name="last_name" required />
                        <label class="input__label" for="last-name">
                            <span class="input__label-content">Фамилия</span>
                        </label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="input form-white__input">
                        <input class="form-control" type="text" id="first-name" name="first_name" required />
                        <label class="input__label" for="first-name">
                            <span class="input__label-content">Имя</span>
                        </label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="input form-white__input">
                        <input class="form-control" type="text" id="patronymic" name="patronymic" required />
                        <label class="input__label" for="patronymic">
                            <span class="input__label-content">Отчество</span>
                        </label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="input form-white__input">
                        <input class="form-control" type="text" id="email" name="email" required />
                        <label class="input__label" for="email">
                            <span class="input__label-content">Е-mail</span>
                        </label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="input form-white__input">
                        <input class="form-control" type="text" data-wb-mask="+7 (999) 999-99-99" id="phone" name="phone" />
                        <label class="input__label" for="phone">
                            <span class="input__label-content">Контактный телефон</span>
                        </label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="input form-white__input">
                        <input class="form-control" type="text" id="citizen" name="citizen" required />
                        <label class="input__label" for="citizen">
                            <span class="input__label-content">Гражданство</span>
                        </label>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="input form-white__input">
                        <input class="form-control" type="text" data-wb-mask="999999" id="zip" name="zip" required />
                        <label class="input__label" for="zip">
                            <span class="input__label-content">Индекс</span>
                        </label>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="region" value="" readonly onclick="selectRegion(this)" placeholder="Регион">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="input form-white__input">
                        <input class="form-control" type="text" id="place" name="place" required />
                        <label class="input__label" for="palce">
                            <span class="input__label-content">Населённый пункт</span>
                        </label>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="input form-white__input">
                        <input class="form-control" type="text" id="address" name="address" required />
                        <label class="input__label" for="addres">
                            <span class="input__label-content">Адрес</span>
                        </label>
                    </div>
                </div>

                <div class="col-sm-8">
                        <input type="text" class="form-control" name="insure" value="" readonly onclick="selectInsure(this,true)" placeholder="Страховая медицинская организация">
                </div>
                <div class="col-sm-4">
                    <div class="input form-white__input">
                        <input class="form-control" type="text" id="polis" name="polis" />
                        <label class="input__label" for="polis">
                            <span class="input__label-content">Номер полиса</span>
                        </label>
                    </div>
                </div>

                <div class="branches col-12">
<div class="row">
                <div class="col-12">
                        <input type="text" class="form-control" name="region" value="" readonly onclick="selectRegion(this)" placeholder="Регион обращения">
                </div>

                    <div class="col-12">
                        <select id="type" class="form-control" required>
                            <option value="0">Подать обращение:</option>
                            <option value="1">Жалоба на оказание медицинской помощи</option>
                            <option value="2">Провести экспертизу качества медицинской помощи</option>
                            <option value="3">Жалоба на лекарственное обеспечение</option>
                        </select>
                    </div>
</div>
                        <div data-branch="1" class="d-none row">
                            <div class="col-12 mb-2">
                                <select data-recepients name="orgtype" class="form-control">
                                    <option data-recepients>Где?</option>
                                    <option data-recepients="depart,insure">В поликлинике</option>
                                    <option data-recepients="depart,insure,tfoms">В стационаре</option>
                                </select>
                            </div>
                            <div class="col-12 mb-2">
                                <input type="text" class="form-control" name="org" value="" readonly onclick="selectMed(this,true)" placeholder="Наименование медучреждения">
                            </div>
                        </div>
                        <div data-branch="2" class="d-none row">
                           <div class="col-12 mb-2">
                                <select data-recepients name="orgtype" class="form-control">
                                    <option data-recepients>Где?</option>
                                    <option data-recepients="tfoms,insure">В поликлинике</option>
                                    <option data-recepients="foms, tfoms,insure">В стационаре</option>
                                </select>
                            </div>
                            <div class="col-12 mb-2">
                                <input type="text" class="form-control" name="org" value="" readonly onclick="selectMed(this,true)" placeholder="Наименование медучреждения">
                            </div>
                        </div>
                        <div data-branch="3" class="d-none row">
                            <div class="col-12 mb-2">
                                    <input class="form-control" type="text" id="drug" name="drug"  data-recepients="depart,roszn" placeholder="Какое лекартство?"/>
                            </div>
                        </div>
                    </div>

                    <div class="recepients">
                        <div class="col-12 d-none depart">
                            <div class="input form-white__input" data-wb-role="formdata" data-wb-form="pages" data-wb-item="quote">
                                    <select name="depart[]" class="form-control" data-wb-role="tree" data-wb-from="content"  data-wb-hide="wb" required>
                                        <option value="" data-wb-where='"{{_idx}}"=="0"'>"Департамент здравоохранения"</option>
                                        <option value="{{name}}"  data-wb-where='"{{id}}" !== "block1"'>
                                            {{name}}
                                        </option>
                                    </select>
                            </div>
                        </div>
                        <div class="col-12 d-none insure">
                            <div class="input form-white__input">
                                <input type="text" class="form-control" name="insure" value="" readonly onclick="selectInsure(this)" placeholder="Страховая медицинская организация">
                            </div>
                        </div>
                        <div class="col-12 d-none tfoms">
                            <div class="input form-white__input">
                                <input class="form-control" type="text" id="tfoms" name="tfoms" />
                                <label class="input__label" for="tfoms">
                                    <span class="input__label-content">ТФОМС</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12 d-none foms">
                            <div class="input form-white__input">
                                <input class="form-control" type="text" id="foms" name="foms" />
                                <label class="input__label" for="foms">
                                    <span class="input__label-content">ФОМС</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12 d-none foms">
                            <div class="input form-white__input">
                                <input class="form-control" type="text" id="roszd" name="roszd" />
                                <label class="input__label" for="roszd">
                                    <span class="input__label-content">Росздравнадзор</span>
                                </label>
                            </div>
                        </div>
                    </div>


                <div class="col-12">
                    <div class="input form-white__input">
                        <input class="form-control" type="text" id="prev" name="prev" />
                        <label class="input__label" for="prev">
                            <span class="input__label-content">Ранее обращался по данному вопросу:</span>
                        </label>
                    </div>
                </div>

                <div class="col-12">
                    <div class="input form-white__input">
                        <textarea class="form-control" type="text" id="body" required></textarea>
                        <label class="input__label" for="body">
                            <span class="input__label-content">Текст обращения</span>
                        </label>
                    </div>


                    <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" id="dangerAbuseForm" name="danger">
                        <label class="custom-control-label textPale" for="dangerAbuseForm">
                            Существует угроза жизни
                        </label>
                    </div>

                    <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" id="checkAbuseForm">
                        <label class="custom-control-label textPale" for="checkAbuseForm">Я даю согласие на обработку и использование следующих моих персональных данных: фамилия, имя, отчество, контактные номера телефонов, адрес электронной почты, иные сведения, содержащие персональные данные в электронной форме, а также на их обработку с использованием средств автоматизации, включая осуществление сбора, накопления, систематизации, хранения, уточнения, использования, распространения (в т.ч. передачу), обезличивание, блокирование, уничтожение.
                        </label>
                    </div>


                    <div class="text-center mt-4 pt-1">
                        <span class="button button--red" data-wb-ajax="/ajax/mail/">Отправить</span>
                    </div>
                </div>
                
            </div>

        </form>

    </div>

    <meta data-wb-role="include" src="template" data-wb-name="footer.inc.php">
    <script>
        var selMed, selIns, selReg, selectInsure, selectRegion;
            $(document).on('site-ready',function() {

                selMed = new Ractive({
                    target: '#selectMed .list-group',
                    template: $('#selectMed template').html(),
                    data: {items:[]} 
                });

                selIns = new Ractive({
                    target: '#selectInsure .list-group',
                    template: $('#selectInsure template').html(),
                    data: {items:[]} 
                });

                selReg = new Ractive({
                    target: '#selectRegion1 .list-group',
                    template: $('#selectRegion1 template').html(),
                    data: {items:[]} 
                });

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
                $(document).on('wb_mail_done', function(ev, a) {
                    if ($(ev.target).parents('#content-call-back')) {
                        $(ev.target).parents('.modal').modal('hide');
                        setTimeout(function() {
                            $(ev.target).removeClass('d-none');
                        }, 1000)
                    }
                })


                $.get('/ajax/region/',function(data){
                    selReg.set('items', data);
                })
                
                $("#formAbuse #type").on('change',function(){
                    $(`#formAbuse .branches [data-branch]`).addClass('d-none');
                    $("#formAbuse .recepients > *").addClass('d-none');
                    if ($(this).val() !== "0") {
                        $(`#formAbuse .branches [data-branch=${$(this).val()}]`).removeClass('d-none');
                    }
                })

                $("#formAbuse [data-branch] [data-recepients]").on('change',function(){
                    let recep;
                    if ($(this).is('input')) {
                        recep = $(this).attr('data-recepients').split(',');
                    } else {
                        recep = $(this).find('option:selected').attr('data-recepients').split(',');
                    }
                    $("#formAbuse .recepients > *").addClass('d-none');
                    $.each(recep,function(i,val){
                        val = val.trim();
                        console.log(val);
                        if (val > "") $("#formAbuse .recepients > ."+val).removeClass('d-none');
                    });

                });


        selectInsure = function(that,all = false) {
            $('#selectInsure').modal('show');
            $('#selectInsure input').val('').focus();
            let region = $('#formAbuse').data('region');
            $('#selectInsure .list-group-item').hide();
            $('#selectInsure .list-group-item[data-region='+region+']').show();

            $('#selectInsure .list-group-item').off('click');
            $('#selectInsure .list-group-item').on('click',function(){
                all ? $('#formAbuse [name=insure]').val($(this).text()) : $(that).val($(this).text());
                $('#selectInsure').modal('hide');
            })

            $('#selectInsure input').off('keyup');
            $('#selectInsure input').on('keyup',function(){
                let regex = $(this).val();
                if (regex > ' ') {
                    regex = new RegExp(regex, "gi");
                    $.each($('#selectInsure .list-group-item'), function(i, item) {
                        let str = $(item).text();
                        str.match(regex) ? $(this).show() : $(this).hide();
                    });
                }
            });
        }

        selectRegion = function(that) {
            $('#selectRegion1').modal('show');
            $('#selectRegion1 input').val('').focus();
            $('#selectRegion1 .list-group-item').off('click');
            $('#selectRegion1 .list-group-item').on('click',function(){
                $(that).val($(this).text());
                let region = $(this).data('region');
                $.get('/ajax/smo/?region='+region,function(data){
                    selIns.set('items', data);
                })
                $.get('/ajax/mo/?region='+region,function(data){
                    selMed.set('items', data);
                })
                $('#formAbuse').data('region',region);
                $('#selectRegion1').modal('hide');
            })

            $('#selectRegion1 input').off('keyup');
            $('#selectRegion1 input').on('keyup',function(){
                let regex = $(this).val();
                if (regex > ' ') {
                    regex = new RegExp(regex, "gi");
                    $.each($('#selectRegion1 .list-group-item'), function(i, item) {
                        let str = $(item).text();
                        str.match(regex) ? $(this).show() : $(this).hide();
                    });
                }
            });
        }

        selectMed= function(that,all = false) {
            $('#selectMed').modal('show');
            $('#selectMed input').val('').focus();
            let region = $('#formAbuse').data('region');
            $('#selectMed .list-group-item').hide();
            $('#selectMed .list-group-item[data-region='+region+']').show();

            $('#selectMed .list-group-item').off('click');
            $('#selectMed .list-group-item').on('click',function(){
                all ? $('#formAbuse [name=org]').val($(this).text()) : $(that).val($(this).text());
                $('#selectMed').modal('hide');
            })

            $('#selectMed input').off('keyup');
            $('#selectMed input').on('keyup',function(){
                let regex = $(this).val();
                if (regex > ' ') {
                    regex = new RegExp(regex, "gi");
                    $.each($('#selectMed .list-group-item'), function(i, item) {
                        let str = $(item).text();
                        str.match(regex) ? $(this).show() : $(this).hide();
                    });
                }
            });
        }


            });
                
    </script>
</body>
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
</html>