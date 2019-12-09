var Contactus = function () {

    var list = function () {
        var form = $('#contact-form');
        var rules = {
            name: {required: true},
            email: {required: true},
            address: {required: true},
            phone: {required: true},
            msg: {required: true},
        };
        handleFormValidate(form, rules, function (form) {
            handleAjaxFormSubmit(form, true);
        });
    }
    return{
        init: function () {
            list();
        }
    }
}();