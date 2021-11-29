
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
        <a href="https://idees.ru" target="_blank"><img src="/tpl/build/img/svg/idees_logo_protected_white.svg" alt=""></a>
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

<div id="button-up">
  <img src="/tpl/build/img/svg/up.svg" alt="">
</div>

    <div class="mobile-bottom-bar" style="display: none">
        <button class="mobile-bottom-bar-top">
            <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M8.70711 0.4293C8.31658 0.0387764 7.68342 0.0387764 7.29289 0.4293L0.928933 6.79326C0.538408 7.18379 0.538408 7.81695 0.928933 8.20748C1.31946 8.598 1.95262 8.598 2.34315 8.20748L8 2.55062L13.6569 8.20748C14.0474 8.598 14.6805 8.598 15.0711 8.20748C15.4616 7.81695 15.4616 7.18379 15.0711 6.79326L8.70711 0.4293ZM9 19.4546L9 1.13641L7 1.13641L7 19.4546L9 19.4546Z"
                    fill="#FF0000" />
            </svg>
        </button>

        <div class="mobile-bottom-bar-buttons">
            <a class="mobile-bottom-bar-write" href="https://wa.me/{{wbDigitsOnly({{_var.whatsapp}})}}" target="_blank">
                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M6.68198 20.1116L7.06512 20.3055C8.66178 21.2751 10.4499 21.7275 12.238 21.7275C17.8579 21.7275 22.456 17.0737 22.456 11.3856C22.456 8.67083 21.3703 6.02067 19.4545 4.08152C17.5386 2.14237 14.984 1.04358 12.238 1.04358C6.61817 1.04358 2.02001 5.69747 2.08391 11.4502C2.08391 13.3893 2.65867 15.2639 3.61657 16.8797L3.872 17.2676L2.85029 21.0812L6.68198 20.1116Z"
                        fill="#00E676" />
                    <path
                        d="M21.3896 3.5027C19.0735 1.23247 15.8719 0 12.6021 0C5.65401 0 0.068163 5.38376 0.136228 11.9351C0.136228 14.0108 0.749305 16.0217 1.77116 17.8378L0 24L6.60761 22.3784C8.44684 23.3514 10.4904 23.8055 12.5341 23.8055C19.4142 23.8055 25 18.4216 25 11.8704C25 8.69193 23.7057 5.70811 21.3897 3.5027H21.3896ZM12.6021 21.7947C10.7629 21.7947 8.92369 21.3407 7.35692 20.4326L6.94823 20.238L2.99732 21.2109L4.01908 17.5137L3.74662 17.1244C0.749305 12.5191 2.17985 6.42161 7.08446 3.56751C11.9891 0.713502 18.3242 2.07569 21.3215 6.74595C24.3188 11.4162 22.8882 17.4487 17.9837 20.3028C16.4168 21.2757 14.5095 21.7946 12.6021 21.7946V21.7947ZM18.5967 14.5948L17.8474 14.2704C17.8474 14.2704 16.7575 13.8163 16.0763 13.492C16.0081 13.492 15.9401 13.4271 15.8719 13.4271C15.6675 13.4271 15.5313 13.492 15.3951 13.5569C15.3951 13.5569 15.327 13.6217 14.3733 14.6596C14.3051 14.7893 14.1689 14.8542 14.0327 14.8542H13.9645C13.8965 14.8542 13.7602 14.7893 13.6921 14.7245L13.3515 14.5948C12.6021 14.2704 11.921 13.8812 11.376 13.3623C11.2398 13.2326 11.0354 13.1028 10.8991 12.9731C10.4223 12.5191 9.94545 12.0001 9.60493 11.4163L9.53677 11.2866C9.4687 11.2217 9.4687 11.1569 9.40054 11.0272C9.40054 10.8974 9.40054 10.7677 9.4687 10.7028C9.4687 10.7028 9.74116 10.3785 9.94545 10.1839C10.0818 10.0541 10.1498 9.85959 10.2861 9.72987C10.4223 9.53524 10.4905 9.2758 10.4223 9.08118C10.3542 8.75683 9.53677 7.00549 9.33247 6.61633C9.19615 6.4217 9.06001 6.35689 8.85562 6.29198H8.10632C7.96999 6.29198 7.83386 6.35689 7.69754 6.35689L7.62937 6.4217C7.49314 6.48661 7.35692 6.61633 7.22069 6.68114C7.08446 6.81095 7.0163 6.94058 6.88007 7.07039C6.40322 7.65418 6.13076 8.36768 6.13076 9.08118C6.13076 9.60006 6.26699 10.119 6.47138 10.5731L6.53955 10.7677C7.15262 12.0001 7.96999 13.1028 9.06001 14.0758L9.33247 14.3352C9.53677 14.5298 9.74116 14.6596 9.87739 14.8541C11.3079 16.0218 12.9428 16.865 14.782 17.319C14.9864 17.3839 15.2588 17.3839 15.4632 17.4488H16.1444C16.485 17.4488 16.8937 17.319 17.1662 17.1893C17.3705 17.0596 17.5068 17.0596 17.643 16.9299L17.7793 16.8001C17.9155 16.6704 18.0518 16.6055 18.188 16.4758C18.3242 16.3461 18.4605 16.2164 18.5286 16.0866C18.6648 15.8271 18.7329 15.5028 18.8011 15.1785V14.7245C18.8011 14.7245 18.7329 14.6596 18.5967 14.5948Z"
                        fill="white" />
                </svg>

                <span>Написать</span>
            </a>
              <a class="js-phone_link mobile-bottom-bar-call" href="tel:+{{wbDigitsOnly({{_var.phone}})}}">
                <svg width="17" height="24" viewBox="0 0 17 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M2.86957 0.526578L4.17612 0.113773C5.40254 -0.272631 6.71031 0.352576 7.23609 1.57419L8.27916 4.00782C8.7333 5.06743 8.48194 6.31425 7.65502 7.08946L5.35519 9.24708C5.49604 10.5383 5.93561 11.8091 6.67146 13.0595C7.37062 14.2694 8.30833 15.3283 9.42907 16.1736L12.1915 15.2616C13.2395 14.9171 14.3797 15.3144 15.0208 16.2468L16.518 18.4188C17.2648 19.5036 17.1312 20.9988 16.2047 21.918L15.2114 22.9032C14.223 23.8837 12.8108 24.2401 11.5055 23.8369C8.42244 22.8864 5.58833 20.0652 3.00192 15.3732C0.411876 10.6739 -0.502472 6.68505 0.260092 3.41141C0.580661 2.0338 1.57272 0.935783 2.86957 0.526578Z"
                        fill="#F8F8F8" />
                </svg>

                <span>Позвонить</span>
            </a>
        </div>
    </div>

<meta data-wb-role="include" src="template" data-wb-name="scripts.inc.php">
<!--meta data-wb-role="include" src="snippet" data-wb-name="cookies"-->