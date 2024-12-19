jQuery(document).ready(function ($) {

    document.addEventListener('wpcf7mailsent', function(event) {
        if (event.detail.contactFormId == '9') {
            window.location.href = '/thank-you/';
        }
    }, false);

});