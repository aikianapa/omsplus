
<div class="home-page-footer">
  <div class="home-page-footer-block-1">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-3">
          <img class="home-page-footer-block-1-logo" src="/tpl/build/img/svg/logo-footer.svg" alt="">
          <div class="home-page-footer-block-1-title">Соц сети</div>
          <div class="d-flex">
            <a href="{{_sett.facebook}}" class="home-page-footer-block-1-social-link">
              <img src="/tpl/build/img/svg/facebook.svg" alt="">
            </a>
            <a href="{{_sett.instagram}}" class="home-page-footer-block-1-social-link">
              <img src="/tpl/build/img/svg/instagram.svg" alt="">
            </a>
            <a href="{{_sett.vkontakte}}" class="home-page-footer-block-1-social-link">
              <img src="/tpl/build/img/svg/vk.svg" alt="">
            </a>
            <a href="{{_sett.youtube}}" class="home-page-footer-block-1-social-link">
              <img src="/tpl/build/img/svg/youtube.svg" alt="">
            </a>
            <a href="{{_sett.odnoklassniki}}" class="home-page-footer-block-1-social-link">
              <img src="/tpl/build/img/svg/ok.svg" alt="">
            </a>
          </div>
        </div>
        <div class="col-12 col-md-3 mt-4 mt-md-0" data-wb-role="formdata" data-wb-form="pages" data-wb-item="menu" data-wb-hide="wb">
          <div class="home-page-footer-block-1-title">Меню</div>
          <div class="home-page-footer-block-1-links" data-wb-role="tree" data-wb-from="content" data-wb-branch="footer" data-wb-parent="false" data-wb-hide="wb">
            <a href="{{data.link}}">
              {{name}}
            </a>
          </div>
        </div>
        <div class="col-12 col-md-3 mt-4 mt-md-0" data-wb-role="formdata" data-wb-form="pages" data-wb-item="services">
          <div class="home-page-footer-block-1-title">Наша помощь</div>
          <div class="home-page-footer-block-1-links" data-wb-role="tree" data-wb-from="content" data-wb-branch="tabs" data-wb-parent="false" data-wb-children="false" data-wb-hide="wb">
            <a href="/services/#service-{{id}}">
              {{name}}
            </a>
          </div>
        </div>
        <div class="col-12 col-md-3 mt-4 mt-md-0">
          <div class="home-page-footer-block-1-title">Контакты</div>
          <div class="home-page-footer-block-1-links">
            <div>
              {{_sett.address}}
            </div>
            <div>
              ИНН {{_sett.inn}}
            </div>
            <div>
              ОГРН {{_sett.ogrn}}
            </div>
            <a href="tel:{{text2tel({{_SETT[phone]}})}}">
              {{_SETT.phone}}
            </a>
            <a href="mailto:{{_SETT.email}}">
              {{_SETT.email}}
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="home-page-footer-block-2">
    <div class="container d-flex align-items-center justify-content-between">
      <div>© 2021, Медицинский поверенный</div>
      <a href="#" class="d-flex">
        <img src="/tpl/build/img/svg/idees_logo_protected_white.svg" alt="">
      </a>
    </div>
  </div>
</div>

<div class="modal fade" id="modal-call-back" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal__close" data-dismiss="modal"></div>
            <div class="modal__title">
                Пожалуйста, заполните&nbsp;форму!
            </div>
            <form class="form-white form-white--gray">
                <div class="form-body">
                    <input type="hidden" name="_subject" value="Заказ обратного звонка">
                    <div class="input form-white__input">
                        <input class="input__field" type="text" id="call-name" required />
                        <label class="input__label" for="call-name">
                            <span class="input__label-content">Ваше имя</span>
                        </label>
                    </div>
                    <div class="input form-white__input">
                        <input class="input__field" type="phone" id="call-phone" required />
                        <label class="input__label" for="call-phone">
                            <span class="input__label-content">Ваш телефон</span>
                        </label>
                    </div>
                    <div class="text-center mt-4 pt-1">
                        <span class="button button--red" data-wb-ajax="/ajax/mail/">Заказать звонок</span>
                    </div>
                </div>
                <div class="form-success alert alert-success d-none">
                    Сообщение успешно отправлено менеджеру. С вами обязательно свяжутся в ближайшее время.
                </div>
                <div class="form-fail alert alert-warning d-none">
                    Ошибка отправки сообщения. Попробуйте ещё раз чуть позже.
                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal__close" data-dismiss="modal"></div>

            <ul class="nav nav-tabs nav-tabs--modal" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" id="registration-nav" data-toggle="tab" href="#registration" role="tab">Регистрация</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" id="profile-nav" data-toggle="tab" href="#autorization" role="tab">Войти в личный кабинет</a>
                </li>
                <li class="nav-item d-none">
                    <a class="nav-link" id="password-nav" data-toggle="tab" href="#password-tab" role="tab">Забыли пароль?</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane" id="registration" role="tabpanel">
                    <div class="modal__desc">
                        Для регистрации личного кабинета вам нужно лишь ввести свой email адрес, а пароль автоматически сгенерирует система и отправит
                        вам его на вашу почту
                    </div>
                    <form class="form-white form-white--gray" action="/signup" method="POST" autocomplete="off">
                        <div class="input form-white__input">
                            <input class="input__field" type="email" id="reg-mail" name="email" required/>
                            <label class="input__label" for="reg-mail">
                                <span class="input__label-content">Ваше Email</span>
                            </label>
                        </div>
                        <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                            <label class="custom-control-label textPale" for="customCheck2">Я соглашаюсь на
                                <a href="/privacy" target="_blank" class="link linkgreen">обработку персональных данных</a> и с
                                <a href="/politics" target="_blank" class="link linkgreen">политикой конфиденциальности</a>
                            </label>
                        </div>
                        <div class="mb-4">
                            <button type="submit" class="button button--red button-radius btn-block" disabled>Зарегистрироваться</button>
                        </div>
                    </form>
                </div>
                <div class="tab-pane active" id="autorization" role="tabpanel">
                    <form class="form-white form-white--gray" action="/login" method="POST" autocomplete="off">
                        <div class="input form-white__input">
                            <input class="input__field" type="text" name="l" id="login-email" />
                            <label class="input__label" for="login-email">
                                <span class="input__label-content">Ваш email</span>
                            </label>
                        </div>
                        <div class="input form-white__input">
                            <input class="input__field" type="password" name="p" id="login-password" />
                            <label class="input__label" for="login-password">
                                <span class="input__label-content">Ваш пароль</span>
                            </label>
                        </div>
                        <div class="row mt-4 pt-1 align-items-center">
                            <div class="col-sm-6 text-center mb-3 mb-sm-0">
                                <span id="link-password-tab" class="link-red" onclick='$("#password-nav").trigger("click");'>
                                    Забыли пароль?
                                </span>
                            </div>
                            <div class="col-sm-6">
                                <button type="submit" class="button button--red btn-block button-radius">Войти в кабинет</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane" id="password-tab" role="tabpanel">
                    <form class="form-white form-white--gray" method="post" action="/login/" autocomplete="off">
                        <div class="recovery-block">
                            <div class="modal__desc">
                                Для восстановления пароля введите email, который вы указывали при регистрации
                            </div>
                            <div class="input form-white__input">
                                <input class="input__field" type="text" name="l" id="password-mail" required>
                                <label class="input__label" for="password-mail">
                                    <span class="input__label-content">Ваш Email</span>
                                </label>
                                <div class="d-none recovery-letter signbox-header">
                                    <h3 class="recovery-block">Восстановление пароля</h3>
                                    <p>Приветствуем!</p>
                                    <p>Для восстановления пароля на сайте {{_SETT[header]}}, перейдите по сыылке:
                                        <a href='{{link}}'>ВОССТАНОВИТЬ ПАРОЛЬ</a>.
                                        <br>Если вы не запрашивали восстановление пароля, ничего не делайте.</p>
                                </div>
                                <div class="d-none recovery-wrong">
                                    Ошибка процедуры восстановления пароля!
                                </div>
                            </div>
                            <div>
                                <button type="submit" name="recovery" value="password" class="button button--red button-radius btn-block">Восстановить</button>
                            </div>
                        </div>
                    </form>
                    <form class="form-white form-white--gray" method="post" data-wb-where='"{{_ENV.route.mode}}" = "recovery" AND "{{_POST._token}}"=""'
                        data-wb-hide="*">
                        <div class="recovery-password">
                            <div class="modal__desc">
                                Пожалуйста, придумайте новый пароль.
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" minlength="3" placeholder="Пароль" autocomplete="off" required name="_pwd1" type="password">
                                </div>
                                <small>Придумайте пароль</small>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" minlength="3" placeholder="Пароль повторно" autocomplete="off" required name="_pwd2" type="password">
                                </div>
                                <small>Введите пароль повторно</small>
                            </div>
                            <input type="hidden" name="_email">
                            <input type="hidden" name="_token">
                            <button value="password" name="recovery" disabled class="button button--red button-radius btn-block mg-t-10">Изменить пароль &nbsp;
                                <i class="fa fa-gears"></i>
                            </button>
                            <meta data-wb-selector="#login-block .tab-pane" data-wb-removeClass="show">
                            <meta data-wb-selector="#login-block .tab-pane" data-wb-removeClass="active">
                            <meta data-wb-selector="#login-block .nav-tabs .nav-link" data-wb-removeClass="active">
                            <meta data-wb-selector="#login-block .tab-pane#password" data-wb-addClass="active show">
                            <meta data-wb-selector="#login-block .recovery-block" data-wb-addClass="d-none">
                        </div>
                    </form>
                </div>
            </div>

            <div class="mt-4 recovery-info alert alert-info d-none">
                <p>На ваш почтовый ящик выслана ссылка для восстановления пароля. Пожалуйста, проверье почту.</p>
            </div>
        </div>
    </div>
</div>

<div data-wb-role="formdata" data-wb-form="users" data-wb-item="{{_sess.user_id}}" data-wb-hide="*">
    <div class="modal fade" id="modal-welcome" tabindex="-1" role="dialog" aria-hidden="true" data-wb-hide="wb" data-wb-where='"{{_route[tpl]}}" = "lk.php" AND "{{strtotime({{_created}})}}" > "{{time() - 15}}"'>
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal__close" data-dismiss="modal"></div>
                <div class="modal__title">
                    Регистрация прошла успешно
                </div>
                <p>
                    <span class="text-red">Внимание!</span> Пароль успешно сгенерирован и отправлен вам на указанную при регистрации почту. Сохраните
                    его или поменяйте на свой в личном кабинете.</p>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-question" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal__close" data-dismiss="modal"></div>
            <div class="modal__title">
                Пожалуйста, заполните&nbsp;форму!
            </div>
            <form class="form-white form-white--gray">
                <div class="form-body">
                    <input type="hidden" name="_subject" value="Вопрос медицинскому поверенному">
                    <div class="input form-white__input">
                        <input class="input__field" type="text" id="question-name" data-label="Имя" required />
                        <label class="input__label" for="question-name">
                            <span class="input__label-content">Ваше имя</span>
                        </label>
                    </div>
                    <div class="input form-white__input">
                        <input type="email" class="input__field" type="email" id="question-mail" data-label="Эл.почта" required />
                        <label class="input__label" for="question-mail">
                            <span class="input__label-content">Email</span>
                        </label>
                    </div>
                    <div class="input form-white__input">
                        <input class="input__field" type="text" id="question-theme" data-label="Тема" required />
                        <label class="input__label" for="question-theme">
                            <span class="input__label-content">Введите тему вопроса</span>
                        </label>
                    </div>
                    <div class="input form-white__input">
                        <textarea class="input__field" id="question" cols="30" rows="auto" data-label="Вопрос" required></textarea>
                        <label class="input__label" for="question">
                            <span class="input__label-content1">Ваш вопрос</span>
                        </label>
                    </div>
                    <div class="text-center mt-4 pt-1">
                        <span data-wb-ajax="/ajax/mail/" class="button button--red">Заказать звонок</span>
                    </div>
                </div>

                <div class="form-success alert alert-success d-none">
                    Ваш вопрос успешно отправлен. С вами обязательно свяжутся в ближайшее время.
                </div>
                <div class="form-fail alert alert-warning d-none">
                    Ошибка! Ваш вопрос не был доставлен. Попробуйте ещё раз чуть позже.
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-order" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal__title">
                Пожалуйста, заполните&nbsp;форму!
            </div>
            <form class="form-white form-white--gray">
                <div data-wb-prepend="#home-order" data-wb-hide="wb">
                    <div class="form-body">
                        <input type="hidden" name="_subject" value="Вызов медицинского представителя">
                        <select name="region" id="region" class="selectpicker form-white__select" placeholder="Выбрать регион..." data-label="Регион"
                            data-wb-role="tree" data-wb-item="area" data-wb-hide="wb" required>
                            <option value="{{name}}" data-area="{{data.iso}}">{{name}}</option>
                        </select>
                        <meta data-wb-selector="#region option[data-area={{_route.area}}]" data-wb-attr="selected" value="true">

                        <div data-wb-hide="*" data-wb-role="formdata" data-wb-form="pages" data-wb-item="services">
                            <select name="service[]" id="service" class="selectpicker select--multi form-white__select" data-header="&nbsp;" title="Нужна помощь..."
                                data-label="Нужна помощь" data-wb-role="tree" data-wb-from="content" data-wb-branch="tabs" data-wb-parent="false"
                                data-wb-children="false" data-wb-hide="wb" required multiple>
                                <option value="{{name}}">
                                    {{name}}
                                </option>
                            </select>
                        </div>
                        <div data-wb-where='"{{_sess.user_role}}" != "user"' data-wb-hide="*">
                            <div class="input-group input form-white__input">
                                <input class="input__field text-dark" type="text" id="order-name" name="client" data-label="Имя" required />
                                <label class="input__label" for="order-name">
                                    <span class="input__label-content">Ваше имя</span>
                                </label>
                            </div>
                            <div class="input form-white__input">
                                <input class="input__field text-dark" type="text" id="order-phone" type="mask" name="phone" data-wb-mask="+7 (999) 999-99-99" data-label="Телефон"
                                    required />
                                <label class="input__label" for="order-phone">
                                    <span class="input__label-content">Ваш телефон</span>
                                </label>
                            </div>
                        </div>
                        <div data-wb-where='"{{_sess.user_role}}" = "user"' data-wb-hide="*">
                            <input class="input__field" type="hidden" data-label="Имя" value="{{_sess.user.fullname}}" />
                            <input class="input__field" type="hidden" data-label="Телефон" value="{{_sess.user.phone}}" />
                            <input class="input__field" type="hidden" data-label="Эл.почта" value="{{_sess.user.email}}" />
                        </div>
                    </div>
                    <div class="form-success alert alert-success d-none">
                        Ваша заявка успешно отправлено менеджеру. С вами обязательно свяжутся в ближайшее время.
                    </div>
                    <div class="form-fail alert alert-warning d-none">
                        Ошибка! Ваша заявка не была отправлена по техническим причинам. Попробуйте ещё раз чуть позже.
                    </div>
                </div>
                <div class="text-center mt-4 pt-1">
                    <button data-wb-ajax="/ajax/mail/" data-wb-tpl="mailform.php" class="button button--red button--190">Вызвать</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-order-reg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal__title">
                Пожалуйста, заполните&nbsp;форму!
            </div>
            <form class="form-white form-white--gray" method="post">
                <select name="region" id="region" class="selectpicker form-white__select" placeholder="Выбрать регион..." data-label="Регион"
                    data-wb-role="tree" data-wb-item="area" data-wb-hide="wb" required>
                    <option value="{{id}}">{{name}}</option>
                </select>

                <div data-wb-hide="*" data-wb-role="formdata" data-wb-form="pages" data-wb-item="services">
                    <select name="service[]" id="service" class="selectpicker select--multi form-white__select" data-header="&nbsp;" title="Нужна помощь..."
                        data-label="Нужна помощь" data-wb-role="tree" data-wb-from="content" data-wb-branch="tabs" data-wb-parent="false"
                        data-wb-children="false" data-wb-hide="wb" required multiple>
                        <option value="{{id}}">
                            {{name}}
                        </option>
                    </select>

                </div>
                <div class="input-group input form-white__input">
                    <label class="switch switch--small switch--text">
                        <span class="switch__text">
                            Экстренно! (+50% к сумме)
                        </span>
                        <input type="checkbox" class="default" name="extr">
                        <span class="switch__slider round"></span>
                    </label>
                </div>
                <div class="input-group input form-white__input">
                    <input class="input__field" type="text" id="promocode" data-label="Есть промокод" not-required />
                    <label class="input__label" for="promocode">
                        <span class="input__label-content">Есть промокод</span>
                    </label>
                </div>
                <div class="text-center mt-2 pt-1">
                    <p class="text-semibold text-red data-price"></p>
                </div>
                <div class="text-center mt-2 pt-1">
                    <button data-wb-ajax="/orders/create/_new/" data-wb-html="#modal-order-reg .modal-content" class="button button--red button--190">Подтвердить и оплатить</button>
                </div>
            </form>
        </div>
    </div>
</div>

<meta data-wb-role="include" src="template" data-wb-name="scripts.inc.php">
<!--meta data-wb-role="include" src="snippet" data-wb-name="cookies"-->