"use strict";

// Class definition
var KTAppEcommerceCategories = function () {
    // Shared variables
    var table;

    // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()


    // Delete cateogry
    var handleDeleteRows = () => {
        // Select all delete buttons
        const deleteButtons = table.querySelectorAll('[item-status-table="delete_row"]');

        deleteButtons.forEach(d => {
            // Delete button on click
            d.addEventListener('click', function (e) {
                e.preventDefault();

                // Select parent row
                const parent = e.target.closest('tr');
                var id = $(this).data('id');
                // Get category name
                const ItemStatus = parent.querySelector('[item-status-filter="item_status_title"]').innerText;

                // SweetAlert2 pop up --- official docs reference: https://sweetalert2.github.io/
                Swal.fire({
                    text: "Are you sure you want to delete " + ItemStatus + "?",
                    icon: "warning",
                    showCancelButton: true,
                    buttonsStyling: true,
                    confirmButtonText: "Yes, delete!",
                    cancelButtonText: "No, cancel",
                    customClass: {
                        confirmButton: "btn fw-bold btn-danger",
                        cancelButton: "btn fw-bold btn-active-light-primary"
                    }
                }).then(function (result) {
                    blockUI.block();
                    if (result.value) {
                        axios
                        .delete("/item-status/" + id +"/delete")
                        .then((response) => {
                          toastr.success(response.data.message);
                          $(parent).remove().draw();
                        })
                        .catch((error) => {
                          if (error.response.status == 400) {
                            toastr.error(error.response.data.message);
                          }
                        });
                    } else if (result.dismiss === 'cancel') {
                        Swal.fire({
                            text: ItemStatus + " was not deleted.",
                            icon: "error",
                            buttonsStyling: true,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary",
                            }
                        });
                    }
                }).finally(()=>blockUI.release());
            })
        });
    }
    // Public methods
    return {
        init: function () {
            table = document.querySelector('#item_status_table');
            if (!table) {
                return;
            }
            handleDeleteRows();

        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTAppEcommerceCategories.init();
});


