$(document).ready(function () {
    var currentTab = 0;
    // multi step script on the edit modal
    $('#editTabs a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        var targetTab = $(e.target).attr("href"); // activated tab
        if (targetTab === "#personal") {
            $('#nextBtn').show();
            $('#prevBtn').hide();
            $('#saveBtn').hide();
        } else if (targetTab === "#emergency") {
            $('#prevBtn').show();
            $('#nextBtn').show();
            $('#saveBtn').hide();
        } else if (targetTab === "#insurance") {
            $('#prevBtn').show();
            $('#nextBtn').hide();
            $('#saveBtn').show();
        }
    });

    $('#nextBtn').click(function () {
        if (currentTab < 2) {
            currentTab++;
            $('#editTabs li:eq(' + currentTab + ') a').tab('show');
        }
    });

    $('#prevBtn').click(function () {
        if (currentTab > 0) {
            currentTab--;
            $('#editTabs li:eq(' + currentTab + ') a').tab('show');
        }
    });
    // if progress bar is less than 100, show the profile completion link else if its 100 it hides the complete link

    var progressValue = 100;
    if (progressValue === 100) {
        $("#profileCompletionLink").hide();
    } else {
        $("#profileCompletionLink").show();
    }
});

document.getElementById('submitAllFormsBtn').addEventListener('click', function () {
    var personalForm = document.getElementById('personalForm');
    var emergencyForm = document.getElementById('emergencyForm');
    var insuranceForm = document.getElementById('insuranceForm');

    if (!validateForm(personalForm)) {
        Swal.fire({
            type: 'error',
            target: '#editModal .modal-body',
            title: 'Error',
            text: 'Please fill in all fields in the Personal form',
            showConfirmButton: false,
            timer: 2000,
            position: 'top-end'
        });
        return;
    }

    // Check if all fields in emergencyForm are filled
    if (!validateForm(emergencyForm)) {
        Swal.fire({
            type: 'error',
            target: '#editModal .modal-body',
            title: 'Error',
            text: 'Please fill in all fields in the Emergency form.',
            showConfirmButton: false,
            timer: 2000,
            position: 'top-end'
        });
        return;
    }

    // Check if all fields in insuranceForm are filled
    if (!validateForm(insuranceForm)) {
        Swal.fire({
            type: 'error',
            target: '#editModal .modal-body',
            title: 'Error',
            text: 'Please fill in all fields in the Insurance form..',
            showConfirmButton: false,
            timer: 2000,
            position: 'top-end'
        });
        return;
    }

    var formData = new FormData(personalForm);
    formData.append('action', 'submit_all_forms');

    var personalFormData = new FormData(emergencyForm);
    for (var pair of personalFormData.entries()) {
        formData.append(pair[0], pair[1]);
    }

    var insuranceFormData = new FormData(insuranceForm);
    for (var pair of insuranceFormData.entries()) {
        formData.append(pair[0], pair[1]);
    }

    fetch('', {
        method: 'POST',
        body: formData
    })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                Swal.fire({
                    target: '#editModal .modal-body',
                    type: 'success',
                    title: data.message,
                    showConfirmButton: false,
                    timer: 1500,
                    position: 'top-end'
                });
                setTimeout(function () {
                    location.reload();
                }, 1000);
            }
            if (data.status === 'error') {
                Swal.fire({
                    type: 'error',
                    target: '#editModal .modal-body',
                    title: 'Error',
                    text: data.message,
                    showConfirmButton: false,
                    timer: 2000,
                    position: 'top-end'
                });
            }
        })
});

function validateForm(form) {
    var inputs = form.querySelectorAll('input, select, textarea');
    for (var i = 0; i < inputs.length; i++) {
        if (inputs[i].hasAttribute('required') && !inputs[i].value.trim()) {
            return false;
        }
    }
    return true;
}