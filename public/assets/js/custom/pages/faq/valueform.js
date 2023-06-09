"use strict";

// Class definition
var KTSigninGeneral = function () {
    var table;
    // Elements
    var form = document.getElementById('faq_form');
    var submitButton = document.getElementById('submit');
    var addAttributeButton = document.getElementById('add_faq');

    var validator;
    // Handle form
    var handleForm = function (e) {


        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        validator = FormValidation.formValidation(
            form, {
                fields: {
                    title: {
                        validators: {
                            notEmpty: {
                                message: 'The Title field is required'
                            }
                        }
                    },
                    actical: {
                        validators: {
                            notEmpty: {
                                message: 'The Artical field is required'
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: '.fv-row',
                        eleInvalidClass: '', // comment to enable invalid state icons
                        eleValidClass: '' // comment to enable valid state icons
                    })
                }
            }
        );

        // Handle form submit
        submitButton.addEventListener('click', function (e) {
            // Prevent button default action
            e.preventDefault();
            validator.validate().then(function (status) {
                if (status == 'Valid') {
                    blockUI.block();

                    // Show loading indication
                    submitButton.setAttribute('data-kt-indicator', 'on');

                    // Disable button to avoid multiple click
                    submitButton.disabled = true;
                    axios.post(form.getAttribute("action"), new FormData(form)).then((response) => {
                        Swal.fire({
                            text: response.data.message,
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        }).then(function (result) {
                            if (result.value) {
                                window.location.reload();
                            }
                        })
                    }).catch((error) => {
                        if (error.response.status == 400) {
                            toastr.error(error.response.data.message);
                        }
                    }).finally(() => {
                        submitButton.disabled = false
                        submitButton.setAttribute('data-kt-indicator', 'off');
                        blockUI.release();

                    })
                } else {
                    // Show error popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                    Swal.fire({
                        text: "Sorry, looks like there are some errors detected, please try again.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    });
                }
            });
        });
    }
    var handleEditRows = () => {
        const editBtn = table.querySelectorAll('[faq-model-edit="edit_row"]');
        editBtn.forEach(d => {

            // Delete button on click
            d.addEventListener('click', function (e) {

                blockUI.block();


                var id = $(this).data('id');
                form.setAttribute("action", '/faqs-model/' + id + '/update');
                // Select all delete buttons
                const editBtn = table.querySelectorAll('[faq-model-edit="edit_row"]');
                e.preventDefault();
                // Select parent row
                axios.get("/faqs-model/" + id + "/edit")
                    .then((response) => {
                        // $("#attribut_value_id")[0].value = response.data.id
                        $("#faq_category_id").val(response.data.id)
                        $("#title").val(response.data.title)
                        $("#artical").val(response.data.artical)
                        $("#status").val(response.data.status)
                    }).finally(() => {
                        $('#status').select2().trigger('change');
                        const modalEl = document.querySelector("#faqModel");
                        const modal = new bootstrap.Modal(modalEl);
                        modal.show();
                        blockUI.release();

                    })
            });
        })

    }

    var addAttribute = () => {
        addAttributeButton.addEventListener("click", function () {
            document.getElementsByClassName("modal-title")[0].innerHTML  = 'Add FAQs Store';

            form.reset();
            form.setAttribute("action", '/faqs-model/store');
        });

    }
    var editAttribute = () => {
        addAttributeButton.addEventListener("click", function () {
            document.getElementsByClassName("modal-title")[0].innerHTML   = 'Edt faq Value';
            var id = (addAttributeButton).getAttribute("data-id");
            form.setAttribute("action", '/faqs-model/' + id + '/update');
        });
    }
    // Public functions
    return {
        // Initialization
        init: function () {
            table = document.querySelector('#faq_table');
            if (!table) {
                return;
            }
            form = document.querySelector('#faq_form');
            submitButton = document.querySelector('#submit');
            handleForm();
            editAttribute();
            addAttribute();
            handleEditRows();
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTSigninGeneral.init();

});
