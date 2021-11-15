<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer__item col-xl-3">
                <a href="/" class="footer__logo">
                    <img src="/tpl/build/img/svg/logo-footer.svg" alt="">
                </a>
            </div>
            <div class="footer__item col-md-4 col-xl-3" data-wb-role="formdata" data-wb-form="pages" data-wb-item="menu" data-wb-hide="wb">
                <div class="footer__title">
                    Меню
                </div>
                <ul class="footer__menu" data-wb-role="tree" data-wb-from="content" data-wb-branch="footer" data-wb-parent="false" data-wb-hide="wb">
                    <li>
                        <a href="{{data.link}}" class="footer__menu-link">{{name}}</a>
                    </li>
                </ul>
            </div>
            <div class="footer__item col-md col-lg-4 col-xl-3" data-wb-role="formdata" data-wb-form="pages" data-wb-item="services">
                <div class="footer__title">
                    Наша помощь
                </div>
                <ul class="footer__menu" data-wb-role="tree" data-wb-from="content" data-wb-branch="tabs" data-wb-parent="false" data-wb-children="false" data-wb-hide="wb">
                    <li>
                        <a href="/services/#service-{{id}}" class="footer__menu-link service">{{name}}</a>
                    </li>
                </ul>
            </div>
            <div class="footer__item col-md-auto col-lg-4 col-xl-3">
                <div class="footer__title">
                    Контакты
                </div>
                <ul class="footer__menu">
                    <li>
                        <span class="footer__menu-text">{{_sett.address}}</span>
                    </li>
                    <li>
                        <a href="/contacts/" class="footer__menu-link">ИНН {{_sett.inn}}</a>
                    </li>
                    <li>
                        <a href="/contacts/" class="footer__menu-link">ОГРН {{_sett.ogrn}}</a>
                    </li>
                    <li>
                        <a href="tel:{{_sett.mobile}}" class="footer__menu-link">{{_sett.mobile}}</a>
                    </li>
                    <li>
                        <a href="mailto:{{_sett.email}}" class="footer__menu-link">{{_sett.email}}</a>
                    </li>
                </ul>
            </div>
        </div>

<div id="button-up" data-wb-append="body">
    <img src="/tpl/build/img/svg/up.svg" alt="">
</div>

    </div>
    <div class="footer__bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="footer__copyright">
                        © 2019 ООО "Медпоиск"
                    </div>
                </div>
                <div class="col-sm-6 mt-3 mt-sm-0 text-sm-right">
                    <a href="http://idees.ru/" class="footer__id" target="_blank">
                        Создавайте сайты у нас
                        <svg xmlns="http://www.w3.org/2000/svg" width="13.472" height="15.782"
                             viewBox="0 0 13.472 15.782">
                            <g id="id-logo" transform="translate(-141.3 -499)">
                                <path id="Path_89" data-name="Path 89"
                                      d="M0,0V13.472H5.089c3.365,0,4.535-1.7,4.535-3.621V3.621C9.623,1.679,8.453,0,5.089,0ZM2.585,2.245H4.821c1.744,0,2.216.688,2.216,1.982V9.245c0,1.294-.472,1.982-2.216,1.982H2.585Z"
                                      transform="translate(154.772 505.159) rotate(90)"/>
                                <path id="Path_90" data-name="Path 90" d="M2.309,0H0V13.472H2.309Z"
                                      transform="translate(154.772 499) rotate(90)"/>
                            </g>
                        </svg>

                    </a>
                </div>
            </div>
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
                    <a class="nav-link active" id="profile-nav" data-toggle="tab" href="#autorization" role="tab">Войти
                        в личный кабинет</a>
                </li>
                <li class="nav-item d-none">
                    <a class="nav-link" id="password-nav" data-toggle="tab" href="#password-tab" role="tab">Забыли пароль?</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane" id="registration" role="tabpanel">
                    <div class="modal__desc">
                        Для регистрации личного кабинета вам нужно лишь ввести свой email адрес,
                        а пароль автоматически сгенерирует система и отправит вам его на вашу почту
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
                                <a href="/politics" target="_blank" class="link linkgreen">политикой конфиденциальности</a></label>
                        </div>
                        <div class="mb-4">
                            <button type="submit" class="button button--red button-radius btn-block" disabled>Зарегистрироваться</button>
                        </div>
                </form>
            </div>
                <div class="tab-pane active" id="autorization" role="tabpanel">
                <form class="form-white form-white--gray" action="/login" method="POST" autocomplete="off">
                    <div class="input form-white__input">
                        <input class="input__field" type="text" name="l" id="login-email"/>
                        <label class="input__label" for="login-email">
                            <span class="input__label-content">Ваш email</span>
                        </label>
                    </div>
                    <div class="input form-white__input">
                        <input class="input__field" type="password" name="p" id="login-password"/>
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
                    <form class="form-white form-white--gray" method="post" action="/login/"  autocomplete="off">
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
								<p>Приветствуем!</p><p>Для восстановления пароля на сайте {{_SETT[header]}}, перейдите по сыылке: <a href='{{link}}'>ВОССТАНОВИТЬ ПАРОЛЬ</a>.<br>Если вы не запрашивали восстановление пароля, ничего не делайте.</p>
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
					<form class="form-white form-white--gray" method="post" data-wb-where='"{{_ENV.route.mode}}" = "recovery" AND "{{_POST._token}}"=""' data-wb-hide="*">
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
							  <button value="password" name="recovery" disabled class="button button--red button-radius btn-block mg-t-10">Изменить пароль &nbsp; <i class="fa fa-gears"></i></button>
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
    <div class="modal fade" id="modal-welcome" tabindex="-1" role="dialog" aria-hidden="true"  data-wb-hide="wb" data-wb-where='"{{_route[tpl]}}" = "lk.php" AND "{{strtotime({{_created}})}}" > "{{time() - 15}}"'>
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal__close" data-dismiss="modal"></div>
                <div class="modal__title">
                    Регистрация прошла успешно
                </div>
                <p><span class="text-red">Внимание!</span> Пароль успешно сгенерирован и отправлен вам на указанную при регистрации почту. Сохраните его или поменяйте на свой в личном кабинете.</p>
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
                    <input class="input__field" type="text" id="question-theme"  data-label="Тема" required />
                    <label class="input__label" for="question-theme">
                        <span class="input__label-content">Введите тему вопроса</span>
                    </label>
                </div>
                <div class="input form-white__input">
                    <textarea class="input__field" id="question" cols="30" rows="auto" data-label="Вопрос" required ></textarea>
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
                        <select name="region" id="region" class="selectpicker form-white__select" placeholder="Выбрать регион..." data-label="Регион" data-wb-role="tree" data-wb-item="area" data-wb-hide="wb" required>
                            <option value="{{name}}" data-area="{{data.iso}}">{{name}}</option>
                        </select>
                        <meta data-wb-selector="#region option[data-area={{_route.area}}]" data-wb-attr="selected" value="true">

                        <div data-wb-hide="*" data-wb-role="formdata" data-wb-form="pages" data-wb-item="services">
                        <select name="service[]" id="service" class="selectpicker select--multi form-white__select" data-header="&nbsp;" title="Нужна помощь..." data-label="Нужна помощь" data-wb-role="tree" data-wb-from="content" data-wb-branch="tabs" data-wb-parent="false" data-wb-children="false" data-wb-hide="wb" required multiple>
                            <option value="{{name}}">
                                {{name}}
                            </option>
                        </select>
                        </div>
                        <div data-wb-where='"{{_sess.user_role}}" != "user"' data-wb-hide="*">
                            <div class="input-group input form-white__input">
                                <input class="input__field" type="text" id="order-name" name="client" data-label="Имя" required />
                                <label class="input__label" for="order-name">
                                    <span class="input__label-content">Ваше имя</span>
                                </label>
                            </div>
                            <div class="input form-white__input">
                                <input class="input__field" type="text" id="order-phone" type="mask" name="phone" data-wb-mask="+7 (999) 999-99-99" data-label="Телефон" required />
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
					<select name="region" id="region" class="selectpicker form-white__select"  placeholder="Выбрать регион..."  data-label="Регион" data-wb-role="tree" data-wb-item="area" data-wb-hide="wb" required>
						<option value="{{id}}">{{name}}</option>
					</select>

					<div data-wb-hide="*" data-wb-role="formdata" data-wb-form="pages" data-wb-item="services">
                    <select name="service[]" id="service" class="selectpicker select--multi form-white__select" data-header="&nbsp;" title="Нужна помощь..." data-label="Нужна помощь" data-wb-role="tree" data-wb-from="content" data-wb-branch="tabs" data-wb-parent="false" data-wb-children="false" data-wb-hide="wb" required multiple>
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
<meta data-wb-role="include" src="snippet" data-wb-name="cookies">