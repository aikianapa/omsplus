<div class="modal-menu-wrap header--main">
    <div class="modal modal-menu" id="modal-menu" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="header header--main">
                    <div class="container">
                        <div class="w-100 row align-items-center gutters-xs-10 position-relative">
                            <div class="col-auto d-flex">
                                <a href="/" class="header__logo">
                                    <img src="/tpl/build/img/svg/logo-footer.svg" alt="">
                                </a>
                            </div>
                            <div class="col col-md-auto ml-auto mr-auto text-center position-static">
                                <div class="region-selection">
                                    <div id="region-open" class="region-selection__btn">
                                        <div class="region-selection__text region-js">Новосибирская область</div>
                                    </div>
                                    <div id="popup-confirm-region" class="popup-custom popup-region">
                                        <div class="popup-region__title">
                                            Ваш регион:
                                            <span class="region-js">Новосибирская область</span>?
                                        </div>
                                        <hr>
                                        <div class="row gutters-xs-10">
                                            <div class="col-6">
                                                <div id="confirmRegion" class="popup-custom__btn popup-custom__btn--active">
                                                    Да, всё верно
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div id="selectRegion" class="popup-custom__btn">
                                                    Выбрать другой
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="popup-select-region" class="popup-custom popup-region popup-custom--550">
                                        <div class="popup-custom__close"></div>
                                        <div class="popup-region__title">
                                            Выбор региона
                                        </div>
                                        <div class="popup-region__subtitle">
                                            Всего 84 региона
                                        </div>
                                        <div class="region-search">
                                            <div class="region-search__icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                    <path id="Search_Icon" data-name="Search Icon" d="M14,16a.994.994,0,0,1-.707-.293L10.586,13A7.03,7.03,0,1,1,13,10.586l2.707,2.707a1,1,0,0,1,0,1.414l-1,1A.993.993,0,0,1,14,16ZM7,2a5,5,0,1,0,5,5A5.006,5.006,0,0,0,7,2Z"
                                                        transform="translate(0 0)" fill="#d4d8e8">

                                                    </path>
                                                </svg>
                                            </div>
                                            <form class="region-search__form">
                                                <input type="text" class="region-search__input" placeholder="Поиск региона">
                                            </form>
                                        </div>
                                        <hr>
                                        <div class="region-list custom-scroll">
                                            <ul class="region-list__wrap" data-wb-role="tree" data-wb-item="area" data-wb-hide="wb">
                                                <li data-area="{{data.iso}}" class="region-list__item">
                                                    <span class="region-list__number">{{_ndx}}.</span>
                                                    <span class="region-list__text">{{name}}</span>
                                                </li>
                                            </ul>
                                            <meta data-wb-selector="#popup-select-region li[data-area={{_route.area}}]" data-wb-addclass="region-list__item--active">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto order-lg-last text-right lk-wrap">
                                <span class="link-lk" data-toggle="modal" data-target="#modal-login">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                        <path id="ic_person_24px" d="M12,12A4,4,0,1,0,8,8,4,4,0,0,0,12,12Zm0,2c-2.67,0-8,1.34-8,4v2H20V18C20,15.34,14.67,14,12,14Z"
                                            transform="translate(-4 -4)"></path>
                                    </svg>
                                    <span>Личный кабинет</span>
                                </span>
                                <span class="header__menu-open" data-toggle="modal" data-target="#modal-menu">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25.001" height="10" viewBox="0 0 25.001 10">
                                        <g id="Group_3250" data-name="Group 3250" transform="translate(-1281.999 -42)">
                                            <rect id="Rectangle_67" data-name="Rectangle 67" width="25.001" height="2" rx="1" transform="translate(1281.999 42)"></rect>
                                            <rect id="Rectangle_69" data-name="Rectangle 69" width="25.001" height="2" rx="1" transform="translate(1281.999 50)"></rect>
                                        </g>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="collapse-menu" id="collapseMenu">
                        <div class="container collapse-menu__container" data-wb-role="formdata" data-wb-form="pages" data-wb-item="menu" data-wb-hide="wb">
                            <ul class="collapse-menu__nav" data-wb-role="tree" data-wb-from="content" data-wb-branch="header" data-wb-parent="false"
                                data-wb-hide="wb">
                                <li class="collapse-menu__item">
                                    <a href="{{data.link}}" class="collapse-menu__link link-default">{{name}}</a>
                                </li>
                            </ul>

                            <div class="collapse-menu__bg"></div>
                        </div>
                        <hr class="collapse-menu__hr">
                        <div class="container">
                            <div class="collapse-menu__contacts">
                                <a href="tel:74952220003" class="link-default">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                        <path id="ic_call_24px" d="M6.218,9.924a13.465,13.465,0,0,0,5.858,5.858l1.956-1.956a.884.884,0,0,1,.907-.213,10.14,10.14,0,0,0,3.173.507.892.892,0,0,1,.889.889v3.1a.892.892,0,0,1-.889.889A15.11,15.11,0,0,1,3,3.889.892.892,0,0,1,3.889,3H7a.892.892,0,0,1,.889.889A10.1,10.1,0,0,0,8.4,7.062a.892.892,0,0,1-.222.907Z"
                                            transform="translate(-3 -3)"></path>
                                    </svg>
                                    <span href="tel:{{text2tel({{_SETT[phone]}})}}" class="js-phone_link">{{_SETT[phone]}}</span>
                                </a>
                                <a href="mailto:{{_SETT[email]}}" class="link-default">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12.8" viewBox="0 0 16 12.8">
                                        <path id="ic_email_24px" d="M16.4,4H3.6A1.6,1.6,0,0,0,2.008,5.6L2,15.2a1.6,1.6,0,0,0,1.6,1.6H16.4A1.6,1.6,0,0,0,18,15.2V5.6A1.6,1.6,0,0,0,16.4,4Zm0,3.2-6.4,4-6.4-4V5.6l6.4,4,6.4-4Z"
                                            transform="translate(-2 -4)"></path>
                                    </svg>
                                    <span>{{_SETT[email]}}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<meta data-wb-where='"{{_item}}"!="home"' data-wb-selector=".header--main" data-wb-removeclass="header--main">