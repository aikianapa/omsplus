<!doctype html>
<html lang="ru">

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
    <script src="/tpl/src/js/jquery.validate.min.js"></script>
</body>

</html>