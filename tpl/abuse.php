<!doctype html>
<html lang="en">

<head>
    <meta data-wb-role="include" src="template" data-wb-name="head.inc.php">
</head>

<body>

    <meta data-wb-role="include" src="template" data-wb-name="header.inc.php">

    <div class="container">
        <div class="content-title">{{header}}</div>
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
                    <div class="input form-white__input">
                        <select name="region" id="region" class="form-control" placeholder="Выбрать регион..." data-label="Регион"
                            data-wb-role="tree" data-wb-item="area" data-wb-hide="wb" required>
                            <option value="{{name}}" data-area="{{data.iso}}">{{name}}</option>
                        </select>
                        <label class="input__label" for="region">
                            <span class="input__label-content">Регион</span>
                        </label>
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
                    <div class="input form-white__input">
                        <select class="form-control" data-wb-role="foreach" data-wb-table="smo" data-wb-sort="_created:d active:d" id="insure" name="insure">
                            <option>
                                {{name}}
                            </option>
                        </select>
                        <label class="input__label" for="insure">
                            <span class="input__label-content">Страховая медицинская организация</span>
                        </label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="input form-white__input">
                        <input class="form-control" type="text" id="polis" name="polis" />
                        <label class="input__label" for="polis">
                            <span class="input__label-content">Номер полиса</span>
                        </label>
                    </div>
                </div>

                <div class="col-12 branches">
                    <div class="input form-white__input">
                        <select id="type" class="form-control" required>
                            <option value="0">Подать обращение:</option>
                            <option value="1">Жалоба на оказание медицинской помощи</option>
                            <option value="2">Провести экспертизу качества медицинской помощи</option>
                            <option value="3">Жалоба на лекарственное обеспечение</option>
                        </select>
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
                                <input class="form-control" type="text" id="org1" name="org" placeholder="Наименование организации" />
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
                                <div class="input form-white__input">
                                    <input class="form-control" type="text" id="org2" name="org" placeholder="Наименование организации" />
                                </div>
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
                            <div class="input form-white__input" data-wb-role="formdata" data-wb-form="pages" data-wb-item="quote">
                                <select name="insure" data-wb-role="foreach" data-wb-table="smo" data-wb-sort="_created:d active:d" class="form-control">
                                    <option value="" data-wb-where='"{{_idx}}"=="0"'>Страховая медицинская организация</option>
                                    <option value="{{name}}"  data-wb-where='"{{id}}" !== "block1"'>
                                        {{name}}
                                    </option>
                                </select>
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
        var jqwait = setInterval(function() {
            if (typeof jQuery == "undefined") return;
            clearInterval(jqwait);
            $(document).ready(function() {
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

            });
        }, 10)
    </script>
</body>

</html>