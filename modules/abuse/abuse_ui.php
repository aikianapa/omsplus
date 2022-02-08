    <form class="form-white form-white--gray" id="formAbuse">
            <input type="hidden" name="_subject" value="Обращение с сайта {{_route.host}}" />
            <input type="hidden" name="_mailto" value="{{_sett.email}}" />
            <div class="form-body row">

                <div class="col-sm-4">
                    <div class="input form-white__input">
                        <label>Фамилия</label>
                        <input class="form-control" type="text" name="last_name" required />
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="input form-white__input">
                        <label>Имя</label>
                        <input class="form-control" type="text" name="first_name" required />
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="input form-white__input">
                        <label>Отчество</label>
                        <input class="form-control" type="text" name="middle_name" required />
                    </div>
                </div>
                <div class="col-sm-4">
                    <label>Е-mail</label>
                    <input class="form-control" type="text" id="email" name="email" required1 />
                </div>
                <div class="col-sm-4">
                        <label>Телефон</label>
                        <input class="form-control" type="text" data-wb-mask="+7 (999) 999-99-99" name="phone" />
                </div>
                <div class="col-sm-4">
                    <label>Гражданство</label>
                    <input class="form-control" type="text" name="citizen" required1 />
                </div>

                <div class="col-sm-4">
                    <label>Индекс</label>
                    <input class="form-control" type="text" data-wb-mask="999999" name="zip" required1 />
                </div>
                <div class="col-sm-8">
                    <label>Регион</label>
                    <input type="text" class="form-control" name="region" value="" readonly onclick="selectRegion(this)"
                        placeholder="Укажите...">
                </div>
                <div class="col-sm-4">
                    <label>Населённый пункт</label>
                    <input class="form-control" type="text" name="place" required1 />
                </div>
                <div class="col-sm-8">
                    <label>Адрес</label>
                    <input class="form-control" type="text" name="address" required1 />
                </div>

                <div class="col-sm-8">
                    <label>Страховая медицинская организация</label>
                    <input type="text" class="form-control" name="insure" value="" readonly 
                        onclick="selectInsure(this,true)" placeholder="Укажите...">
                </div>
                <div class="col-sm-4">
                    <label>Номер полиса</label>
                    <input class="form-control" type="text" id="polis" name="polis" />
                </div>

                <div class="branches col-12">
                    <div class="row">
                        <div class="col-12 mb-2">
                             <label>Регион обращения</label>
                            <input type="text" class="form-control" name="region_to" placeholder="Укажите..." value="" readonly required1
                                onclick="selectRegion(this)">
                        </div>

                        <div class="col-12 mb-2">
                            <label>Повод обращения</label>
                            <select class="form-control" name="type" required1>
                                <option value="">Укажите...</option>
                                <option value="1">Жалоба на оказание медицинской помощи</option>
                                <option value="2">Провести экспертизу качества медицинской помощи</option>
                                <option value="3">Жалоба на лекарственное обеспечение</option>
                            </select>
                        </div>
                    </div>
                    <div data-branch="1" class="d-none row">
                        <div class="col-12 mb-2">
                            <label>Где?</label>
                            <select data-recepients name="orgtype" class="form-control" required1>
                                <option data-recepients>Укажите...</option>
                                <option data-recepients="depart,insure">В поликлинике</option>
                                <option data-recepients="depart,insure,tfoms">В стационаре</option>
                            </select>
                        </div>
                        <div class="col-12 mb-2">
                            <label>Наименование медучреждения</label>
                            <input type="text" class="form-control" name="org" value="" readonly required1
                                onclick="selectMed(this,true)" placeholder="Укажите...">
                        </div>
                    </div>
                    <div data-branch="2" class="d-none row">
                        <div class="col-12 mb-2">
                            <label>Где?</label>
                            <select data-recepients name="orgtype" class="form-control" required1>
                                <option data-recepients>Укажите...</option>
                                <option data-recepients="tfoms,insure">В поликлинике</option>
                                <option data-recepients="foms, tfoms,insure">В стационаре</option>
                            </select>
                        </div>
                        <div class="col-12 mb-2">
                            <label>Наименование медучреждения</label>
                            <input type="text" class="form-control" name="org" value="" readonly required1
                                onclick="selectMed(this,true)" placeholder="Укажите...">
                        </div>
                    </div>
                    <div data-branch="3" class="d-none row">
                        <div class="col-12 mb-2">
                            <input class="form-control" type="text" id="drug" name="drug" data-recepients="depart,roszn"
                                placeholder="Какое лекартство?" />
                        </div>
                    </div>
                </div>

                <div class="recepients col-12">
                    <div class="row">
                    <div class="col-12 d-none depart" data-wb-role="formdata" data-wb-form="pages" data-wb-item="quote">
                        <select name="depart" class="form-control" data-wb-role="tree" data-wb-from="content"
                            data-wb-hide="wb" required1>
                            <option value="{{name}}" data-wb-where='"{{id}}" !== "block1"'>
                                {{name}}
                            </option>
                        </select>
                    </div>
                    <div class="col-12 d-none insure">
                        <label>Страховая медицинская организация</label>
                        <input type="text" class="form-control" name="insure" value="" readonly
                            onclick="selectInsure(this)" placeholder="Укажите...">
                    </div>
                    <div class="col-12 d-none tfoms">
                        <input class="form-control" type="text" id="tfoms" name="tfoms" placeholder="ТФОМС" />
                    </div>
                    <div class="col-12 d-none foms">
                        <input class="form-control" type="text" id="foms" name="foms" placeholder="ФОМС" />
                    </div>
                    <div class="col-12 d-none foms">
                        <input class="form-control" type="text" id="roszd" name="roszd" placeholder="Росздравнадзор" />
                    </div>
                    </div>
                </div>


                <div class="col-12 mb-2">
                    <label>Куда обращались ранее по данному вопросу</label>
                    <textarea class="form-control" name="prev" placeholder="Куда обращались ранее по данному вопросу"
                        required1></textarea>
                </div>

                <div class="col-12 mb-2">
                    <label>Текст обращения</label>
                    <textarea class="form-control" type="text" name="text" placeholder="Текст обращения"
                        required1></textarea>
                </div>

                <div class="col-12">
                    <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" id="dangerAbuseForm" name="danger">
                        <label class="custom-control-label textPale" for="dangerAbuseForm">
                            Существует угроза жизни
                        </label>
                    </div>

                    <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" id="checkAbuseForm" required>
                        <label class="custom-control-label textPale" for="checkAbuseForm">Я даю согласие на обработку и
                            использование следующих моих персональных данных: фамилия, имя, отчество, контактные номера
                            телефонов, адрес электронной почты, иные сведения, содержащие персональные данные в
                            электронной форме, а также на их обработку с использованием средств автоматизации, включая
                            осуществление сбора, накопления, систематизации, хранения, уточнения, использования,
                            распространения (в т.ч. передачу), обезличивание, блокирование, уничтожение.
                        </label>
                    </div>
                </div>

                <div class="text-center mt-4 pt-1">
                    <button type="button" class="button button--red btn-abuse">Отправить</button>
                </div>
            </div>


        </div>
     </form>

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
                                <li class="list-group-item cursor-pointer" data-region="{{region}}"><span>{{name}}</span> [{{kmo}}]
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
                                <li class="list-group-item cursor-pointer" data-region="{{region}}">
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

    </modals>

        <script>
    var selMed, selIns, selReg, selectInsure, selectRegion;
    document.addEventListener("site-jq-ready", function(){
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

        $('#formAbuse .btn-abuse').on('click', function(e) {
            if (wb_check_required('#formAbuse')) {
                $('#formAbuse :input:not(:visible)').remove();
                let data = $('#formAbuse').serializeArray();
                let $form = $('<form id="printAbuse" />');
                $form.attr('method', 'POST').attr('target', '_blank').attr('action', '/module/abuse/print');
                $.each(data, function(i,k) {
                    $form.append(`<input type="hidden" name="${k.name}" value="${k.value}">`);
                });
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
            $("#formAbuse .recepients > *").addClass('d-none');
            $.each(recep, function(i, val) {
                val = val.trim();
                console.log(val);
                if (val > "") $("#formAbuse .recepients > ." + val).removeClass('d-none');
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
                all ? $('#formAbuse [name=insure]').val(name) : $(that).val(name);
                $('#selectInsure').modal('hide');
            })

            $('#selectInsure input').off('keyup');
            $('#selectInsure input').on('keyup', function() {
                let regex = $(this).val();
                if (regex > ' ') {
                    regex = new RegExp(regex, "gi");
                    $.each($('#selectInsure .list-group-item[data-region=' + region + ']'), function(i, item) {
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
                let region = $(this).data('region');
                $.get('/ajax/smo/?region=' + region, function(data) {
                    selIns.set('items', data);
                })
                $.get('/ajax/mo/?region=' + region, function(data) {
                    selMed.set('items', data);
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
                    $.each($('#selectMed .list-group-item[data-region=' + region + ']'), function(i, item) {
                        let str = $(item).text();
                        str.match(regex) ? $(this).show() : $(this).hide();
                    });
                }
            });
            $('#selectMed input').val('').focus().trigger('keyup');
        }


    });
    </script>

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
</style>
