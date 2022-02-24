<!doctype html>
<html lang="en">

<head>
    <meta data-wb-role="include" src="template" data-wb-name="head.inc.php">
</head>

<body>

    <meta data-wb-role="include" src="template" data-wb-name="header.inc.php">

    <div data-wb-role="formdata" data-wb-form="pages" data-wb-item="quote">
        <div class="container">
            <div class="content-title">{{header}}</div>
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



    <div class="container blocks">

    <meta data-wb-role="include" src="template" data-wb-src="/module/abuse">

    </div>

    <meta data-wb-role="include" src="template" data-wb-name="footer.inc.php">
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