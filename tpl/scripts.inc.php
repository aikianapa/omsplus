<script src="/tpl/src/js/jquery-3.1.1.min.js"></script>
<script data-wb-src="engine" data-wb-append="body"></script>
<script>
    $(document).on('wbapp', function() {
        setTimeout(function() {
            wbapp.loadScripts([
                "/engine/js/plugins/plugins.js",
                "/tpl/src/js/popper.min.js",
                "/tpl/src/js/bootstrap.min.js",
                "/tpl/src/js/iscroll-lite.js",
                "/tpl/src/js/slick.min.js",
                "/tpl/build/libs/raty/jquery.raty.min.js",
                "/tpl/build/libs/fotorama/fotorama.js",
                "/tpl/build/libs/bootstrap-select/bootstrap-select.min.js",
                "/tpl/build/libs/classie.js",
                "/tpl/src/js/svg4everybody.min.js",
                "/tpl/src/js/moment-ru.min.js",
                "/tpl/src/js/bootstrap-datetimepicker.min.js",
                "/tpl/src/js/owl.carousel.min.js",
                "/tpl/src/js/jquery.ui.touch-punch.min.js",
                "/tpl/src/js/lightcase.js",
                "https://unpkg.com/swiper@7/swiper-bundle.min.js",
                "/tpl/src/js/ractive.js",
                "/tpl/src/js/scripts.js"

            ], 'site-ready')
        }, 100)
    });
</script>
<script src="https://api-maps.yandex.ru/2.0/?load=package.full&lang=ru-RU"></script>
