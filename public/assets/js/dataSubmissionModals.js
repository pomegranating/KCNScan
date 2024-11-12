document.getElementById('emergencyContactForm').addEventListener('submit', function (e) {
    e.preventDefault();


    fetch('', {
        method: 'POST',
        body: new FormData(this)
    })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                Swal.fire({
                    target: '#editEmergencydetailsModal .modal-body',
                    type: 'success',
                    title: data.message,
                    showConfirmButton: false,
                    position: 'top-end'
                });
                setTimeout(function () {
                    location.reload();
                }, 1000);
            }
            if (data.status === 'error') {
                Swal.fire({
                    type: 'error',
                    title: 'Error',
                    target: '#editEmergencydetailsModal .modal-body',
                    text: data.message,
                    showConfirmButton: false,
                    timer: 2000,
                    position: 'top-end'
                });
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
});

document.getElementById('insuranceDetailsForm').addEventListener('submit', function (e) {
    e.preventDefault();
    $('#editInsuranceDetailsModal').modal('hide');
    fetch('', {
    method: 'POST',
    body: new FormData(this)
})

    .then(response => response.json())
    .then(data => {
    if (data.status === 'success'){
        $('#editInsuranceDetailsModal').modal('hide');
    Swal.fire({
    type: 'success',
    title: data.message,
    showConfirmButton: false,
    position: 'top-end'
});

    setTimeout(function() {
    location.reload();
}, 1000);
}
    if (data.status === 'error') {
    Swal.fire({
    type: 'error',
    title: 'Error',
    target: '#editInsuranceDetailsModal .modal-body',
    text: data.message,
    showConfirmButton: false,
    timer: 2000,
    position: 'top-end'
});
}
})
    .catch(error => {
    console.error('Error:', error);
});
});

document.getElementById('profileForm').addEventListener('submit', function (event) {
    event.preventDefault();

    fetch('', {
        method: 'POST',
        body: new FormData(this)
    })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                Swal.fire({
                    target: '#editConfirmationModal .modal-body',
                    type: 'success',
                    title: data.message,
                    showConfirmButton: false,
                    position: 'top-end'
                });

                setTimeout(function () {
                    location.reload();
                }, 2000);
            } else {
                Swal.fire({
                    type: 'error',
                    title: 'Error',
                    target: '#editConfirmationModal .modal-body',
                    text: data.message,
                    showConfirmButton: false,
                    position: 'top-end',
                    timer: 2000
                });
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
});

document.getElementById('profileDetails').addEventListener('submit', function (event) {
    event.preventDefault();

    fetch('', {
        method: 'POST',
        body: new FormData(this)
    })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                Swal.fire({
                    target: '#editpersonaldetailModal .modal-body',
                    type: 'success',
                    title: data.message,
                    showConfirmButton: false,
                    position: 'top-end'
                });

                setTimeout(function () {
                    location.reload();
                }, 2000);
            } else {
                Swal.fire({
                    type: 'error',
                    title: 'Error',
                    target: '#editpersonaldetailModal .modal-body',
                    text: data.message,
                    showConfirmButton: false,
                    position: 'top-end',
                    timer: 2000
                });
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
});