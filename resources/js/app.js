import './bootstrap';        
import 'bootstrap/dist/css/bootstrap.min.css'; 
import 'bootstrap';                


$(document).ready(function () {
    // details slider-------
    $('.toggle-details').on('click', function () {
        let $el = $(this);
        let productId = $el.data('product-id');
        let $details = $(`#product-id-${productId}`);

        $el.closest('.table-content').toggleClass('bg-offwhite bg-white');
        $details.slideToggle(300);

        //toggle icon
        let $icon = $el.find('i');
        $icon.toggleClass('bi-eye bi-eye-slash');
    });

    // sidbar toggle--------
    $('#sidebarToggle').on('click', function () {
        let $el = $(this);
        $el.closest('.sidebar').toggleClass('sidebar-toggle');
        $(".side-hidden").toggleClass('hide');
        $(".main-content").toggleClass('marginl');

        // toggle icon
        let $icon = $el.find('i');
        $icon.toggleClass('rotate');
    });
});