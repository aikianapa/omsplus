$(function() {

    geopos();

    $("[data-wb-ajax='/ajax/mail/']").on("click", function() {
        $(this).on("wb_mail_done", function(ev, el, ajax, data) {
            data = $.parseJSON(data);
            var type = "success";
            if (data.error && $(el).parents("form").find(".form-fail").length) {
                $(el).parents("form").find(".form-body").addClass("d-none");
                $(el).parents("form").find(".form-fail").removeClass("d-none");
            } else if (!data.error && $(el).parents("form").find(".form-success").length) {
                $(el).parents("form").find(".form-body").addClass("d-none");
                $(el).parents("form").find(".form-success").removeClass("d-none");
            } else {
                if (data.error) {
                    type = "danger";
                }
                wbapp.baloon(data.msg, type);
            }
            $(el).parents("form").find("[data-wb-ajax]").addClass("d-none");
        });
    });

    $('#promocodeEnter').on('change', function() {
        $.post('/ajax/checkPromocode', { promo: $(this).val() }, function(data) {
            data.result == true ? document.location.reload() : null;
        })
    })


    $(document).on("wb_ajax_done", function(ev, el, ajax, data) {
        if (ajax == "/orders/create/_new/") {
            $(".steps").addClass("steps--4");
        }
    });

    if ($("#modal-welcome").length) {
        $("#modal-welcome").modal("show");
    }

    $("*:contains('+7 (')").each(function() {
        if ($(this).find("*:contains('+7 (')").length) return;
        let tel = $(this).text();
        tel = tel.replace(/\D+/g, "");
        $(this).attr('href', 'tel:+' + tel);
        $(this).addClass('js-phone_link');
    });



    $(document).unbind("wb_required_false");
    $(document).bind("wb_required_false", function(event, that) {

        var label = $(that).wbGetInputLabel();
        var delay = 2000;
        var text = $(that).data("error");
        if (!text > "") {
            text = wbapp.sysmsg.fill_field + ": " + label;
        }
        $(that).after('<div class="input-error"><span>' + text + '</span></div>');
        console.log("Trigger: require_false");
        setTimeout(function() {
            $(that).next(".input-error").remove();
        }, delay);
    });


    $(document).on("comments_after_formsave", function(ev, el, ajax, data) {
        $("#review-form .form-body").addClass("d-none");
        $("#review-form .form-success").removeClass("d-none");
    });

    $("#modal-order-reg select[name=service]").on("change", function() {
        var price = $(this).find("option:selected").attr("data-price");
        if (price == undefined) {
            price = "";
        } else {
            price += ' <i class="fa fa-rub"></i>';
        }
        $("#modal-order-reg .data-price").html(price);
    });

    $("#customCheck2").on("change", function() {
        if ($(this).prop("checked")) {
            $(this).parents("form").find(".button").removeAttr("disabled");
        } else {
            $(this).parents("form").find(".button").prop("disabled", true);
        }
    });

    $(".history-page .sort__dropdown .dropdown-menu .dropdown-item").on("click", function() {
        var href = explode("/", document.location.pathname);
        var month, year;
        if (href[2] !== undefined) year = href[2];
        if (href[3] !== undefined) month = href[3];
        if ($(this).parent(".dropdown-menu").is(".month")) month = intval($(this).text());
        if ($(this).parent(".dropdown-menu").is(".years")) {
            year = intval($(this).text());
            if (year == 0) month = 0;
        }
        if (month !== undefined && month > 0) {
            year = $(".history-page .dropdown-menu.years .dropdown-item:eq(1)").text();
        }

        href = ["history"];
        if (year !== undefined && year > 0) {
            href.push(year);
            if (month !== undefined && month > 0) {
                href.push(month);
            }
        }
        document.location.href = "/" + implode("/", href) + "/";
    });


    $("[data-module=pdfdoc]").on("click", function() {
        if ($(this).parents(".lk__downloads").hasClass("on")) {
            var data1 = $("#userProfileForm1").serializeArray();
            var data2 = $("#userProfileForm2").serializeArray();
            var data = {};
            $.each(data1, function(i, item) {
                data[item.name] = item.value;
            });
            $.each(data2, function(i, item) {
                data[item.name] = item.value;
            });
        } else if ($(this).parents(".history__list").length) {
            var order_id = $(this).attr("data-order");
            var data1 = wbapp.func("wbItemRead", ["orders", order_id]);
            var data = {
                id: data1.id,
                created: data1._created,
                name: data1.name,
                total: data1.total
            };
        }
        var url = "/module/pdfdoc/src/" + $(this).attr("data-url") + "?data=" + urlencode(json_encode(data));
        $(this).attr("href", url);

        //get_ajax_post(url,data);

    });

    var pathname = document.location.pathname;
    pathname = pathname.split("/");
    pathname = "/" + pathname[1] + "/";
    if ($(".collapse-menu__nav").find("a[href='" + pathname + "']").length) {
        $(".collapse-menu__nav").find("a[href='" + pathname + "']").parent("li").addClass("collapse-menu__item--active");
    }

    $(".menu-left__link").click(function() {
        var _href = $(this).attr("href");
        $("html, body").animate({
            scrollTop: $(_href).offset().top + "px"
        });
        return false;
    });
    svg4everybody();

});
//endregion


//region Слайдеры
$('.home-services__slider').slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 4,
    centerMode: false,
    variableWidth: true,
    prevArrow: '<button type="button" class="slick-prev"><img src="build/img/svg/prev.svg" alt=""></button>',
    nextArrow: '<button type="button" class="slick-next"><img src="build/img/svg/next.svg" alt=""></button>',
    responsive: [{
            breakpoint: 1390,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                variableWidth: false,
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                adaptiveHeight: true,
                variableWidth: false,
            }
        },

    ]
});

$('.home-reviews__slider').slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 3,
    centerMode: false,
    variableWidth: true,
    prevArrow: '<button type="button" class="slick-prev"><img src="build/img/svg/prev.svg" alt=""></button>',
    nextArrow: '<button type="button" class="slick-next"><img src="build/img/svg/next.svg" alt=""></button>',
    responsive: [{
            breakpoint: 1390,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                variableWidth: false,
            }
        },
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 1,
                adaptiveHeight: true,
                slidesToScroll: 1,
                variableWidth: false,
            }
        },

    ]
});


$(".partnerSlider").slick({
    dots: false,
    infinite: true,
    variableWidth: false,
    adaptiveHeight: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    prevArrow: '<button type="button" class="slick-prev"><img src="build/img/svg/prev.svg" alt=""></button>',
    nextArrow: '<button type="button" class="slick-next"><img src="build/img/svg/next.svg" alt=""></button>',
    responsive: [{
            breakpoint: 767,
            settings: {
                variableWidth: false,
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 991,
            settings: {
                variableWidth: false,
                slidesToShow: 2,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 1399,
            settings: {
                variableWidth: false,
                slidesToShow: 3,
                slidesToScroll: 1,
            }
        }
    ]
});

//endregion

$(function() {
    $('[data-toggle="tooltip"]').tooltip();
});

//region Меню
$(document).on('click', '.call-back', function() {
    if ($('body').hasClass('modal-open')) {
        $(document).one('hidden.bs.modal', '#modal-menu', function() {
            $('#modal-call-back').modal('show');
        });
        $('#modal-menu').modal('hide');
    } else {
        $('#modal-call-back').modal('show');
    }
});

$(document).on('click', '#modal-login-button', function() {
    if ($('body').hasClass('modal-open')) {
        $(document).one('hidden.bs.modal', '#modal-menu', function() {
            $('#modal-login').modal('show');
        });
        $('#modal-menu').modal('hide');
    } else {
        $('#modal-login').modal('show');
    }
});
const loggedUserMenuBlock = $('.logged-user-menu');
$(document).on('click', () => {
    loggedUserMenuBlock.hide();
})
loggedUserMenuBlock.on('click', '#logged-user-menu-button', function(event) {
    event.stopPropagation();
    event.stopImmediatePropagation();
});
$(document).on('click', '#logged-user-menu-button', function(event) {
    event.stopPropagation();
    event.stopImmediatePropagation();
    if (loggedUserMenuBlock.is(":visible")) {
        loggedUserMenuBlock.hide();
    } else {
        loggedUserMenuBlock.show();
    }
});
//endregion

$('.star-only').raty({
    readOnly: true,
    score: function() {
        return $(this).attr('data-rating');
    }
});

$('#review-form-rating').raty();

//region Прокрутка навигации
/*

var myScroll;

// function loaded () {
if ($('#nav-scroll').length) {
    myScroll = new IScroll('#nav-scroll', {
        scrollX: true,
        scrollY: false,
        mouseWheel: true
    });
} // }
*/


//endregion


//region Фиксированное меню при прокрутке
$(window).on("scroll", function() {
    // Если высота больше 200px
    // Добавляем классу header класс fixed
    if ($(window).scrollTop() > 0) {
        $('.modal-menu').addClass('modal-menu--trans');
        $('.modal-menu').addClass('fixed');
    } else {
        $('.modal-menu').removeClass('fixed');
    }
});

$('#modal-menu').on('show.bs.modal', function(e) {
    $('.modal-menu').removeClass('modal-menu--trans');
});

//endregion

//region наверх
$(document).ready(function() {
    /**
     * При прокрутке страницы, показываем или срываем кнопку
     */
    $(window).scroll(function() {
        // Если отступ сверху больше 50px то показываем кнопку "Наверх"
        var heightBody = $("body").height() - $(window).height() - 50;
        if ($(this).scrollTop() > 100 && $(this).scrollTop() < heightBody) {
            $('#button-up').fadeIn();
        } else {
            $('#button-up').fadeOut();
        }
    });


    /** При нажатии на кнопку мы перемещаемся к началу страницы */
    $('#button-up').click(function() {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });

});
//endregion

$(window).on('load', () => {
    let iOS = !!navigator.platform && /iPad|iPhone|iPod/.test(navigator.platform);
    if (iOS)
        $('[role="tablist"] .nav-link').each((i, e) => {
            if (!$(e).attr('href'))
                $(e).attr('href', $(e).data('target'));
        })
});

//region Выбор города на странице Clinics
$(document).on('click', '.participant__sort .dropdown-item', function() {
    $(this).closest('.participant__sort').find('.dropdown-custom__link').text($(this).text());

    if ($("#clinicsListview").length) {
        $.get("/clinics/listview/" + $(this).attr("data-region"), function(data) {
            $("#clinicsListview").replaceWith(data);
            wb_delegates();
        });

    }

});
$(document).on('changed.bs.select', '#service', function(e, clickedIndex, newValue, oldValue) {
    //console.log(this.value);
    //console.log(clickedIndex);
    //console.log(this.value, clickedIndex, newValue, oldValue);
    var item = $(this).closest('.bootstrap-select').find('ul.dropdown-menu li:nth-child(' + (clickedIndex + 1) + ')');
    var itemLink = item.find('.dropdown-item');
    var itemCounter = item.find('.select-counter');
    var counterHtml = '\t<div class="select-counter">\n' +
        '                        <span class="select-counter__minus"></span>\n' +
        '                        <input type="number" class="select-counter__count" name="qty[]" value="1" readonly>\n' +
        '                        <span class="select-counter__plus"></span>\n' +
        '                    </div>'
    if (!itemCounter.length) {
        // item.append('<div class="select-counter">select-counter</div>');
        item.append(counterHtml);
    }
    if (!item.hasClass('selected')) {
        itemCounter.remove();
    }
});


// счетчик

$(document).ready(function() {
    $('.select-counter__count').prop('readonly', true);
    $(document).on('click', '.select-counter__plus', function(e) {
        var selectCount = $(this).closest('.select-counter').find('.select-counter__count');
        selectCount.val(parseInt(selectCount.val()) + 1);
        if (selectCount.val() == 100) {
            selectCount.val(99);
        }
        e.preventDefault;
        return false;
    });
    $(document).on('click', '.select-counter', function(e) {
        e.preventDefault;
        return false;
    });
    $(document).on('click', '.select-counter__minus', function(e) {
        var selectCount = $(this).closest('.select-counter').find('.select-counter__count');
        selectCount.val(parseInt(selectCount.val()) - 1);
        if (selectCount.val() == 0) {
            selectCount.val(1);
        }
        e.preventDefault;
        return false;
    });


    /*
        var url = "http://geoplugin.net/json.gp";
        
        $.get(url,function(data){
            data = json_decode(data);
            if (data !== undefined) {
                var code = data.geoplugin_regionCode;
                var areas = wbapp.getTree("area");
                $.each(areas,function(i,area){
                  if (area.data.iso == code) {
                      if (area.data.phone > "") $(".local_phone").html(area.data.phone);
                      if (area.data.email > "") $(".local_email").html(area.data.email);
                      $("form select[name=region] option[data-area='"+code+"']").prop("selected",true).attr("selected",true);
                  }
                });
            }
        });
    */

    var regionText = $("#popup-select-region .region-list__item--active .region-list__text").text();
    $(".region-selection .region-js").text(regionText);

});
//endregion


//region Выбор региона

function closePopupRegion() {
    $('.popup-custom').removeClass('popup-custom--show');
    $('body').removeClass('popup-bg');
    $('body, .header, .first-screen').removeAttr("style");
}

function openPopupRegion(popupSelector) {
    popupSelector.addClass('popup-custom--show');
    $('body').addClass('popup-bg');
    $('.popup-bg, .popup-bg .header').css("paddingRight", getScrollbarWidth() + "px");
    $('.popup-bg .first-screen').css({
        "paddingRight": getScrollbarWidth() + "px",
        "marginRight": "-" + getScrollbarWidth() + "px"
    });
}

$(document).on('click', '#region-open', function() {
    openPopupRegion($('#popup-confirm-region'));
    $('.modal-menu').modal('hide');
});

$(document).on('click', '#selectRegion', function() {
    closePopupRegion();
    openPopupRegion($('#popup-select-region'));
    $('.region-search__input').focus();
});

$(document).on('click', '#confirmRegion, .popup-custom__close', function() {
    closePopupRegion();
});

$(document).click(function(event) {
    //console.log($(event.target));
    //console.log(getScrollbarWidth());
    //console.log($(event.target).closest(".popup-custom").length);
    //console.log($(".popup-custom--show").length);
    if ($(event.target).closest("#region-open").length) return;
    if ($(event.target).closest(".popup-custom").length) return;
    closePopupRegion();
    event.stopPropagation();
});

document.addEventListener('DOMContentLoaded', function() {
    const mobileBottomBar = document.querySelector('.mobile-bottom-bar');

    const checkAndChangeDisplayValue = () => {
        if (window.innerWidth < 992) {
            if (window.scrollY > 0) {
                mobileBottomBar.style.display = 'flex';
            } else {
                mobileBottomBar.style.display = 'none';
            }
        }
    }
    document.addEventListener('scroll', checkAndChangeDisplayValue);
    checkAndChangeDisplayValue();
    mobileBottomBar.querySelector('.mobile-bottom-bar-top').addEventListener('click', () => {
        window.scroll({ top: 0, behavior: 'smooth' });
    })

    new Swiper(".home-page-block-6-swiper", {
        slidesPerView: 1,
        spaceBetween: 10,
        loop: !0,
        loopFillGroupWithBlank: !0,
        navigation: { nextEl: ".home-page-block-6-swiper-button-next", prevEl: ".home-page-block-6-swiper-button-prev" },
        breakpoints: {
            576: { slidesPerView: 2, spaceBetween: 30 },
            960: { slidesPerView: 3, spaceBetween: 30 },
            1360: { slidesPerView: 4, spaceBetween: 30 }
        }
    }), new Swiper(".home-page-block-9-swiper", {
        slidesPerView: 1,
        spaceBetween: 10,
        loop: !0,
        loopFillGroupWithBlank: !0,
        navigation: { nextEl: ".home-page-block-9-swiper-button-next", prevEl: ".home-page-block-9-swiper-button-prev" },
        breakpoints: {
            576: { slidesPerView: 2, spaceBetween: 30 },
            960: { slidesPerView: 3, spaceBetween: 30 },
            1360: { slidesPerView: 4, spaceBetween: 30 }
        }
    });

    const infoBlock = document.querySelector('.home-page-block-1-info');

    if (!localStorage.getItem('cookie')) {
        infoBlock.classList.remove('d-none');
    }

    window.hideCookieBlock = () => {
        localStorage.setItem('cookie', '-');
        infoBlock.classList.add('d-none');
    }
});


function getScrollbarWidth() {

    // Creating invisible container
    const outer = document.createElement('div');
    outer.style.visibility = 'hidden';
    outer.style.overflow = 'scroll'; // forcing scrollbar to appear
    outer.style.msOverflowStyle = 'scrollbar'; // needed for WinJS apps
    document.body.appendChild(outer);

    // Creating inner element and placing it in the container
    const inner = document.createElement('div');
    outer.appendChild(inner);

    // Calculating difference between container's full width and the child width
    const scrollbarWidth = (outer.offsetWidth - inner.offsetWidth);

    // Removing temporary elements from the DOM
    outer.parentNode.removeChild(outer);

    return scrollbarWidth;

}

$(document).on('click', '.region-list__item', function() {
    var regionText = $(this).find('.region-list__text').text();
    var regionText = $(this).find('.region-list__text').text();
    $('.region-list__item--active').removeClass('region-list__item--active');
    $(this).addClass('region-list__item--active');
    $('.region-js').text(regionText);
    setCookie("area", $(this).attr("data-area"));
    closePopupRegion();
    document.location.href = document.location.href;
});
//endregion

//region фильтрация списка городов по вводу в инпуте

jQuery.expr[':'].Contains = function(a, i, m) {
    return (a.textContent || a.innerText || "").toUpperCase().indexOf(m[3].toUpperCase()) >= 0;
};

$(document).on('change', '.region-search__input', function() {
    var filter = $(this).val();
    console.log(filter);
    if (filter) {
        $matches = $(".region-list__wrap").find('.region-list__item:Contains(' + filter + ')');
        $('.region-list__item').not($matches).hide();
        $matches.show();

    } else {
        $('.region-list__item').show();
    }

    if ($('.region-list__item:visible').length) {
        $('.region-list__error').hide();
        $('.region-list__wrap').removeClass('region-list__wrap--not-col');
        return false;
    }
    $('.region-list__wrap').addClass('region-list__wrap--not-col');
    if ($('.region-list__error').length) {
        $('.region-list__error').show();
        return false;
    }

    var errorRegionSearch = "<li class='region-list__error'>Ничего не найдено. <span id='show-all-region' class='region-list__link'>Показать все регионы.</span></li>";
    $('.region-list__wrap').append(errorRegionSearch);
    return false;
});

$(document).on('keyup', '.region-search__input', function(event) {
    $(this).change();
    if (event.keyCode == 13) {
        event.preventDefault();
        $(this).blur();
    }
});

$(document).on('submit', '.region-search__form', function(event) {
    console.log('submittt');
    event.preventDefault();
});

$(document).on('click', '#show-all-region', function() {
    $('.region-search__input').val('').change().focus();
});
//endregion
function setCookie(name, value, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

function eraseCookie(name) {
    document.cookie = name + '=; Max-Age=-99999999;';
}

function geopos() {
    return; // не работает по https без подписки
    if (getCookie("area") > "") return;
    $.get("/ajax/geourl", function(data) {
        data = $.parseJSON(data);
        $.get(data.link, function(data) {
            data = $.parseJSON(data);
            if (data.geoplugin_regionCode !== undefined) {
                let area = data.geoplugin_regionCode;
                let region = $(".region-list__wrap [data-area='" + area + "'] .region-list__text");
                if (region.length) {
                    setCookie("area", area);
                    $(".region-list__wrap [data-area]").removeClass("region-list__item--active");
                    $(region).parent("li").addClass("region-list__item--active");
                    $(".region-js").text($(region).text());
                    $("#region-open").trigger("click");
                }
            }
        });
    });
}