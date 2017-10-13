var Application = Application || {};

Application.system = function (exports, $) {

    'use strict';

    exports.init = function () {

        $('[data-toggle="tooltip"]').tooltip();

        $('nav .open-sidenav').on('click.system.module', _click_open_sidenav);

    };


    var _click_open_sidenav = function (e) {
        var $html = $('html');
        if (!$html.hasClass('sidenav-opened')) {
            $html.addClass('sidenav-opened');
        } else {
            $html.removeClass('sidenav-opened');
        }
        e.preventDefault();
    };

    return exports;

}(Application.system = (Application.system || {}), jQuery);


$(function () {
    Application.system.init();
});