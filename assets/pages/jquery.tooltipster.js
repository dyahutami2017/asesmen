/**
* Theme: Amezia - Responsive Bootstrap 4 Admin Dashboard
* Author: Themesbrand
* Tooltips
*/

(function ($) {

    "use strict";

    tippy('.tippy-btn');       
    tippy('#myElement', {
        html: document.querySelector('#feature__html'), // DIRECT ELEMENT option
        arrow: true,
        animation: 'fade'
    });

})(jQuery);