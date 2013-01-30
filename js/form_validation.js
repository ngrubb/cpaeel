/*
 * This file changes default funcionality of the validation plugin to integrate it with
 * our desired bootstrap styles.
 *
 * @author  Noah Grubb
*/

// Set the Validator Default to print the custom message under the form in an alert box
$(document).ready(function() {
    setValidatorDefaults('.errorHandler', '<div class="alert alert-error"><strong>Oops!</strong> A name and a message is required.</div>');
});


/* Integrate Validation Plugin to work with Bootstrap styles */
function setValidatorDefaults(errorHandler, message){
    $.validator.setDefaults({
        showErrors: function(errorMap, errorList) {
            var validation = this;
            if(validation.numberOfInvalids() > 0)
                $(errorHandler).html(message);
 
            $(errorList).each(function() {
                var error = this;
                validation.settings.highlight(error.element);
            })
 
            for (var i = 0, elements = this.validElements(); elements[i]; i++) {
                validation.settings.unhighlight(elements[i], validation.settings.errorClass, validation.settings.validClass);
            }
        },
        highlight: function(element) {
            $(element).parents('.control-group').addClass("error");
        },
        unhighlight: function(element) {
            $(element).parents('.control-group').removeClass("error");
        },
        onfocusout: false,
        onkeyup: false,
        onclick: false
    });
}

