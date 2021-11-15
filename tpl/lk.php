<!doctype html>
<html lang="en">

<head>
    <meta data-wb-role="include" src="template" data-wb-name="head.inc.php">
</head>

<body data-wb-alive="true">

    <meta data-wb-role="include" src="template" data-wb-name="header.inc.php">
    <meta data-wb-selector="title" data-wb-html="Личный кабинет">

    <div data-wb-disallow="user">
        <div class="container" id="login-block">
            <meta data-wb-remove="#modal-login .modal-dialog .modal__close">
            <meta data-wb-selector="#modal-login .modal-dialog" data-wb-removeclass="modal-dialog-centered">
            <meta data-wb-selector="#modal-login .modal-dialog" data-wb-appendto="#login-block">

        </div>
    </div>

    <div class="lk" data-wb-allow="user" data-wb-role="formdata" data-wb-form="users" data-wb-item="{{_SESS.user_id}}">
        <div class="container">
            <div class="bread-crumbs">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/" class="link-default">Главная</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Личный кабинет</li>
                    </ol>
                </nav>
            </div>

            <div class="lk__title title-30">
                Личный кабинет
            </div>

            <div class="steps steps--1">
                <div class="row">
                    <div class="steps__item col-3">
                        <div class="steps__count">
                            Шаг 1.
                        </div>
                        <div class="steps__text">
                            Заполнение личных данных
                        </div>
                    </div>
                    <div class="steps__item col-3">
                        <div class="steps__count">
                            Шаг 2.
                        </div>
                        <div class="steps__text">
                            Согласие с общими условиями
                        </div>
                    </div>
                    <div class="steps__item col-3">
                        <div class="steps__count">
                            Шаг 3.
                        </div>
                        <div class="steps__text">
                            Заказать услугу
                        </div>
                    </div>
                    <div class="steps__item col-3">
                        <div class="steps__count">
                            Шаг 4.
                        </div>
                        <div class="steps__text">
                            Оплата услуги
                        </div>
                    </div>
                </div>
                <div class="steps__line"></div>
            </div>

            <div class="row lk__row">
                <div class="col-xl-4 order-xl-last lk__right">
                    <div class="block-white">
                        <div class="lk__subtitle">Общие условия</div>
                        <div class="lk__downloads">
                            <a target="_blank" data-wb-href data-module="pdfdoc" data-url="doc_oferta" class="lk__pdf link-default">
                                Общие условия
                            </a>
                            <a target="_blank" data-wb-href data-module="pdfdoc" data-url="doc_dover    " class="lk__pdf link-default">
                                Доверенность
                            </a>
                        </div>
                        <form data-wb-form="users" data-wb-item="{{_SESS.user_id}}">
                            <label class="switch switch--small switch--text">
                                <input type="checkbox" class="default" name="success">
                                <span class="switch__slider round"></span>
                                <span class="switch__text">
                                    Согласен с общими условиями
                                </span>
                            </label>
                        </form>

                        <div class="lk__order-btn">
                            <button class="button button--red btn-block button--order" disabled data-toggle="modal" data-target="#modal-order-reg">Заказать услугу</button>
                        </div>

                        <div class="lk__subtitle">История заказов</div>
                        <div class="history">
                            <div class="history__list" data-wb-role="foreach" data-wb-form="orders" data-wb-limit="3" data-wb-where='_creator="{{_sess.user_id}}" AND payed = "succeeded"' data-wb-sort="id:d" data-wb-hide="wb" data-wb-tpl="false">

                                <div class="history__item">
                                    <div class="history__count">
                                        № {{id}} {{total}}ք
                                    </div>
                                    <div class="row no-gutters">
                                        <div class="col-auto pr-3">
                                            <span class="history__date">{{date("d.m.Y",strtotime({{_created}}))}}</span>
                                        </div>
                                        <div class="col text-right" ___data-wb-where='report="on"'>
                                            <a target="_blank" data-wb-href data-module="pdfdoc" data-order="{{id}}" data-url="doc_report" class="lk__pdf history__file link-default">Отчёт</a>
                                        </div>
                                    </div>
                                </div>
                                <empty>
                                    <div class="alert alert-info">У вас пока нет ни одного заказа.</div>
                                </empty>
                            </div>
                            <a href="/history/" class="history__all link-default">Посмотреть историю всех заказов</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 lk__left">
                    <div class="block-white">
                        <div class="row">
                            <div class="col-auto">
                                <div class="lk__subtitle">Личные данные</div>
                            </div>
                            <div class="col-md">
                                <div class="lk-buttons">
                                    <span class="lk-buttons__item btn-save link-default" data-wb-formsave="#userProfileForm1">
                                        Сохранить изменения
                                    </span>
                                    <span class="lk-buttons__item btn-cancel link-default" data-cancel="#userProfileForm1">
                                        Отмена
                                    </span>
                                </div>
                            </div>
                        </div>

                        <form class="lk__form form-white form-white--gray" id="userProfileForm1" data-wb-form="users" data-wb-item="{{_SESS.user_id}}">
                            <div class="lk-photo row no-gutters">
                                <div class="col-auto">
                                    <div class="lk-photo__img">
                                        <input class="lk-photo__img" data-wb-noimg="build/img/lk/profile.svg" type="hidden" name="avatar" id="avatar" data-wb-role="uploader" value="{{avatar}}" width="50" height="50" data-wb-size="contain" data-wb-form="users" data-wb-item="{{_SESS[user_id]}}">
                                    </div>
                                </div>
                                <div class="col pl-3 pl-sm-4">
                                    <div class="lk-photo__buttons">
                                        <div class="lk-photo__item">
                                            <label for="customFile" class="lk-photo__btn lk-photo__upload link-default">Загрузить фото</label>
                                        </div>
                                        <div class="lk-photo__item">
                                            <span class="lk-photo__btn lk-photo__remove link-default">
                                                Удалить
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="input form-white__input">
                                <input class="input__field" type="text" id="lk-fio" name="fullname" required />
                                <label class="input__label" for="lk-fio">
                                    <span class="input__label-content">Имя</span>
                                </label>
                            </div>
                            <div class="input form-white__input">
                                <input class="input__field" type="text" id="lk-mail" value="{{email}}" readonly />
                                <label class="input__label" for="lk-mail">
                                    <span class="input__label-content">E-mail адрес</span>
                                </label>
                            </div>
                            <div class="input form-white__input">
                                <input class="input__field" type="phone" id="lk-phone" name="phone" required />
                                <label class="input__label" for="lk-phone">
                                    <span class="input__label-content">Телефон</span>
                                </label>
                            </div>
                        </form>
                    </div>
                    <!--div class="block-white">
                    <div class="row">
                        <div class="col-auto">
                            <div class="lk__subtitle">Паспортные данные</div>
                        </div>
                        <div class="col-md">
                            <div class="lk-buttons">
                                <span class="lk-buttons__item btn-save link-default"  data-wb-formsave="#userProfileForm2">
                                    Сохранить изменения
                                </span>
                                <span class="lk-buttons__item btn-cancel link-default" data-cancel="#userProfileForm2">
                                    Отмена
                                </span>
                            </div>
                        </div>
                    </div>

                    <form class="lk__form form-white form-white--gray" id="userProfileForm2" data-wb-form="users" data-wb-item="{{_SESS.user_id}}">
                        <div class="input form-white__input">
                            <input class="input__field" type="mask" data-wb-mask="9999 999999" id="series-passport" name="pasp_number" />
                            <label class="input__label" for="series-passport">
                                <span class="input__label-content">Серия и номер паспорта</span>
                            </label>
                        </div>
                        <div class="input form-white__input">
                            <input class="input__field" type="text" id="issued-by" name="pasp_issued"/>
                            <label class="input__label" for="issued-by">
                                <span class="input__label-content">Кем выдан</span>
                            </label>
                        </div>
                        <div class="input form-white__input">
                            <input class="input__field" type="text" id="passport-date" name="pasp_date" />
                            <label class="input__label" for="passport-date">
                                <span class="input__label-content">Дата выдачи 01.01.2019</span>
                            </label>
                        </div>
                        <div class="input form-white__input">
                            <input class="input__field" type="mask" data-wb-mask="999-999" id="unit-code" name="pasp_code" />
                            <label class="input__label" for="unit-code">
                                <span class="input__label-content">Код подразделения</span>
                            </label>
                        </div>
                    </form>
                </div-->

                    <div class="block-white">
                        <div class="lk__subtitle">Смена пароля</div>

                        <form class="lk__form form-white form-white--gray" method="POST">
                            <div class="input form-white__input">
                                <input class="input__field" type="password" name="old_pass" id="old-pass" />
                                <label class="input__label" for="old-pass">
                                    <span class="input__label-content">Введите текущий пароль</span>
                                </label>
                            </div>
                            <div class="input form-white__input">
                                <input class="input__field" type="password" name="new_pass" id="password" />
                                <label class="input__label" for="new-pass">
                                    <span class="input__label-content">Придумайте новый пароль</span>
                                </label>
                            </div>
                            <div class="input form-white__input">
                                <input class="input__field" type="password" name="chk_pass" id="password_check" />
                                <label class="input__label" for="new-pass-repeat">
                                    <span class="input__label-content">Повторите новый пароль</span>
                                </label>
                            </div>
                            <div class="mt-4 pt-1">
                                <button type="submit" class="button button--red" data-wb-ajax="/ajax/change_password/">Сменить пароль</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <meta data-wb-role="include" src="template" data-wb-name="footer.inc.php">
    <meta data-wb-selector="form input" data-wb-attr="autocomplete" value="off" data-wb-hide="*">
    <meta data-wb-selector="form input[type!=checkbox]:not([not-required])" data-wb-attr="required" value="true" data-wb-hide="*">
    <script data-wb-src="uploader"></script>
    <script>
        $(document).on("wbapp", function() {
            $("[data-cancel]").on("click", function() {
                var id = $(this).attr("data-cancel");
                $(id).find(":input").each(function() {
                    $(this).val($(this).attr("value"));
                });
            });
            $("[data-wb-ajax='/ajax/change_password/']").on("wb_ajax_done", function(ev, el, ajax, data) {
                data = $.parseJSON(data);
                if (ajax == '/ajax/change_password/') {
                    var type = "success";
                    if (data.error == true) {
                        type = "danger";
                    }
                    wbapp.baloon(data.msg, type);
                }
            });
            $("#avatar").on("wb_uploader_init", function() {
                $(".lk-photo__btn").attr("for", $("#avatar").find("input[type=file]").attr("id"));
                $("#avatar li.wb-empty img").attr("src", "build/img/lk/profile.svg").removeAttr("style");
            });

            $(".lk-photo__remove").on("click", function() {
                $("#avatar li.thumbnail img").attr("src", "build/img/lk/profile.svg").removeAttr("style");
                $("#avatar input[name=avatar]").attr("value", "").val("");
            });

            $(document).on("users_after_formsave", function() {
                step1();
            });

            $("input[type=password]").on("keyup", function() {
                if ($(this).is("[name=_pwd1]") || $(this).is("[name=_pwd2]")) {
                    if ($(this).val().length < $(this).attr("minlength")) {
                        $(this).parents(".input-group").find(".input-group-addon .fa").addClass("tx-danger");
                    } else {
                        $(this).parents(".input-group").find(".input-group-addon .fa").removeClass("tx-danger");
                    }
                    if ($("[name=_pwd1]").val() == $("[name=_pwd2]").val() && $("[name=_pwd1]").val().length >= $(this).attr("minlength")) {
                        $(this).parents(".recovery-password").find(".input-group-addon .fa").addClass("tx-success");
                        $("button[name=recovery]").removeAttr("disabled");
                    } else {
                        $("button[name=recovery]").attr("disabled", true);
                        $(this).parents(".recovery-password").find(".input-group-addon .fa").removeClass("tx-success");
                    }

                }
            });


            $("#userProfileForm1 input[required]:visible").on("change", function() {
                step1();step2();
            })
            $("#userProfileForm2 input[required]:visible").on("change", function() {
                step1();step2();
            })


            function step1() {
                var res = true;
                $("#userProfileForm1 input[required]:visible").each(function() {
                    if ($(this).val() == "") res = false;
                });
                $("#userProfileForm2 input[required]:visible").each(function() {
                    if ($(this).val() == "") res = false;
                });
                if (res == true) {
                    $(".steps").addClass("steps--2");
                    $(".block-white [name=success]").prop("disabled", false);
                    $(".lk__downloads").addClass("on");
                    $(".lk__row .order-xl-last").addClass("order-xl-first").removeClass("order-xl-last");
                    if ($(document).data("step1") == undefined || $(document).data("step1") == false) {
                        $(document).data("step1", res);
                        var form = $("#userProfileForm1");
                        wb_formsave_obj(form);
                    }
                } else {
                    $(".lk__downloads").removeClass("on");
                    $(".steps").removeClass("steps--2 steps--3 steps--4");
                    $(".block-white [name=success]").prop("disabled", true);
                    $(".block-white [name=success]").prop("checked", false);
                    $(".button--order").prop("disabled", true);
                }
                $(document).data("step1", res);
            }

            function step2() {
                if ($(document).data("step1") !== true) return;
                $(".block-white [name=success]").off("change");
                $(".block-white [name=success]").on("change", function() {
                    var res = $(this).prop("checked");
                    var form = $(this).parents("form");
                    if (res == true) {
                        $(".steps").addClass("steps--3");
                        $(".button--order").prop("disabled", false);
                    } else {
                        $(".steps").removeClass("steps--3 steps--4").addClass("steps--2");
                        $(".button--order").prop("disabled", true);
                    }
                    if ($(".block-white [name=success]").data("init") == undefined) {
                        $(".block-white [name=success]").data("init", true);
                    } else {
                        wb_formsave_obj(form);
                    }


                });
                $(".block-white [name=success]").trigger("change");
            }

            function get_ajax_post(url, data) {
                $(data).serialize();
                $.ajax({
                    cache: false,
                    type: 'POST',
                    url: url,
                    processData: true,
                    data: data,
                    //xhrFields is what did the trick to read the blob to pdf
                    xhrFields: {
                        responseType: 'blob'
                    },
                    success: function(response, status, xhr) {

                        var filename = "";
                        var disposition = xhr.getResponseHeader('Content-Disposition');

                        if (disposition) {
                            var filenameRegex = /filename[^;=]*=((['"]).*?2|[^;]*)/;
                            var matches = filenameRegex.exec(disposition);
                            if (matches !== null && matches[1]) filename = matches[1].replace(/['"]/g, '');
                        }
                        var linkelem = document.createElement('a');
                        try {
                            var blob = new Blob([response], {
                                type: 'application/octet-stream'
                            });

                            if (typeof window.navigator.msSaveBlob !== 'undefined') {
                                //   IE workaround for "HTML7007: One or more blob URLs were revoked by closing the blob for which they were created. These URLs will no longer resolve as the data backing the URL has been freed."
                                window.navigator.msSaveBlob(blob, filename);
                            } else {
                                var URL = window.URL || window.webkitURL;
                                var downloadUrl = URL.createObjectURL(blob);

                                if (filename) {
                                    // use HTML5 a[download] attribute to specify filename
                                    var a = document.createElement("a");

                                    // safari doesn't support this yet
                                    if (typeof a.download === 'undefined') {
                                        window.location = downloadUrl;
                                    } else {
                                        a.href = downloadUrl;
                                        a.download = filename;
                                        document.body.appendChild(a);
                                        a.target = "_blank";
                                        a.click();
                                    }
                                } else {
                                    window.location = downloadUrl;
                                }
                            }

                        } catch (ex) {
                            console.log(ex);
                        }
                    }
                });
            }

            step1();
            step2();
        });

    </script>
    <style>
        #avatar li.thumbnail img {
            background: none;
            border: 0;
            border-radius: 50%;
        }

    </style>
</body>

</html>
