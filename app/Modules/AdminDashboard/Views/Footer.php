<script src="<?= base_url('assets/js/vendors.bundle.js') ?>"></script>
<script src="<?= base_url('assets/js/app.bundle.js') ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('assets/js/popper.min.js') ?>"></script>
<script src="<?= base_url('assets/js/slim.min.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/js/select2.bundle.js') ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('assets/js/idleTimer.js') ?>"></script>
<script src="<?= base_url('assets/js/submitAllForms.js') ?>"></script>
<script src="<?= base_url('assets/js/sweetalert2.bundle.js') ?>"></script>
<script src="<?= base_url('assets/js/dataSubmissionModals.js') ?>"></script>
<script src="<?= base_url('assets/js/datatables.bundle.js') ?>"></script>
<script src="<?= base_url('assets/js/PopulateDropdown.js') ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var mobileNavToggle = document.getElementById('mobile-nav-toggle');
        var sidebar = document.querySelector('.sidebar');

        mobileNavToggle.addEventListener('click', function(event) {
            event.preventDefault();
            toggleSidebar();
        });

        document.body.addEventListener('click', function(event) {
            var target = event.target;
            var isSidebarVisible = document.body.classList.contains('mobile-nav-on');

            if (isSidebarVisible && !sidebar.contains(target) && target !== mobileNavToggle) {
                toggleSidebar();
            }
        });

        function toggleSidebar() {
            document.body.classList.toggle('mobile-nav-on');

            var isVisible = sidebar.style.left === '0px';

            if (isVisible) {
                sidebar.style.left = '-250px';
            } else {
                sidebar.style.left = '0';
            }
        }
    });
</script>
<script>
    $(document).ready(function() {
        $('.theme-settings-toggle').click(function(e) {
            e.preventDefault();
            $(this).find('.theme-settings-icon').toggleClass('opened');
            $(this).next('.theme-settings-content').toggle();

            $(this).find('.fa-angle-down').toggle();
            $(this).find('.fa-angle-up').toggle();
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#dt-basic-example').dataTable({
            responsive: true
        });
        $('.js-thead-colors a').on('click', function() {
            var theadColor = $(this).attr("data-bg");
            console.log(theadColor);
            $('#dt-basic-example thead').removeClassPrefix('bg-').addClass(theadColor);
        });
        $('.js-tbody-colors a').on('click', function() {
            var theadColor = $(this).attr("data-bg");
            console.log(theadColor);
            $('#dt-basic-example').removeClassPrefix('bg-').addClass(theadColor);
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#dt-newsletter-table').dataTable({
            responsive: true
        });
        $('.js-thead-colors a').on('click', function() {
            var theadColor = $(this).attr("data-bg");
            console.log(theadColor);
            $('#dt-newsletter-table thead').removeClassPrefix('bg-').addClass(theadColor);
        });
        $('.js-tbody-colors a').on('click', function() {
            var theadColor = $(this).attr("data-bg");
            console.log(theadColor);
            $('#dt-newsletter-table').removeClassPrefix('bg-').addClass(theadColor);
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#dt-gender-role').dataTable({
            responsive: true
        });
        $('.js-thead-colors a').on('click', function() {
            var theadColor = $(this).attr("data-bg");
            console.log(theadColor);
            $('#dt-gender-role thead').removeClassPrefix('bg-').addClass(theadColor);
        });
        $('.js-tbody-colors a').on('click', function() {
            var theadColor = $(this).attr("data-bg");
            console.log(theadColor);
            $('#dt-gender-role').removeClassPrefix('bg-').addClass(theadColor);
        });
    });
</script>

<script>
    function downloadReceipt() {
        const options = {
            filename: 'receipt.pdf',
            image: {
                type: 'jpeg',
                quality: 0.98
            },
            html2canvas: {
                scale: 2
            },
            jsPDF: {
                unit: 'in',
                format: 'a4',
                orientation: 'portrait'
            }
        };

        const element = document.getElementById('receipt');

        html2pdf()
            .set(options)
            .from(element)
            .save();
    }
</script>
<script>
    $(document).ready(function() {
        $('#panel-tag').on('click', function() {
            var $container = $('.custom-form-container');
            if ($container.is(':visible')) {
                $container.slideUp();
                $(this).text('Click Here To Add Gender Roles');
            } else {
                $container.slideDown();
                $(this).text('Click here to close');
            }
            $('#gender').val('');
            $('#description').val('');
        });
        $('#add-btn').on('click', function(e) {
            e.preventDefault();

            // Show the modal
            $('#AddGenderModal').modal('show');
        });

        // Handle confirmation button click in the modal
        $('#confirmAddButton').on('click', function() {
            var gender = $('#gender').val();
            var description = $('#description').val();

            // Send data to backend
            $.ajax({
                url: '/admindashboard/gender',
                method: 'POST',
                contentType: 'application/json',
                data: JSON.stringify({
                    gender: gender,
                    description: description
                }),
                success: function(response) {
                    console.log('Gender added successfully');
                    fetchGenders();
                    $('#AddGenderModal').modal('hide');
                },
                error: function(xhr, status, error) {
                    console.error('Error adding gender:', error);
                    alert('Failed to add gender. Please try again.');
                }
            });
        });

        $('#AddGenderModal').on('hidden.bs.modal', function() {
            $('.custom-form-container').slideUp();
            $('#panel-tag').text('Click Here To Add Gender Roles');

        });

        fetchGenders();
        // $('#add-btn').click(function() {
        // $('.custom-form-container').slideUp();
        // });

        // Fetch Genders

        function fetchGenders() {
            $.ajax({
                url: '/admindashboard/gender',
                method: 'GET',
                success: function(response) {
                    $('#dt-gender-role tbody').empty();
                    response.data.forEach(function(gender, index) {
                        $('#dt-gender-role tbody').append(`
                            <tr data-id="${gender.id}">
                                <td style="text-align:center;">${index + 1}</td>
                                <td>${gender.gender}</td>
                                <td>${gender.description}</td>
                                <td>
                                    <button class="edit-button" style="width: 80px;color: white; background-color:#2196f3;border:none; padding:5px 10px; border-radius:5px;cursor:pointer; ">
                                        <i class="fas fa-pencil-alt"></i> Edit
                                    </button>
                                    <button class="delete-gender" style="color: white; background-color:#fd1381; border: none; padding: 5px 10px; border-radius: 5px">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>

                                </td>

                            </tr>
                        `);
                    });
                }
            });
        }
        fetchGenders();
        $(document).on('click', '.edit-button', function() {
            var row = $(this).closest('tr');
            var id = row.data('id');
            var gender = row.find('td:eq(1)').text();
            var description = row.find('td:eq(2)').text();

            $('#edit-gender').val(gender);
            $('#edit-description').val(description);
            $('.form-container').show();
            $('.custom-form-container').slideUp();

            $('#save-button').data('id', id);
        });

        $('#save-button').on('click', function() {
            // Open the modal
            $('#EditGenderModal').modal('show');

            // Store the id in a data attribute of the modal
            var id = $(this).data('id');
            $('#EditGenderModal').data('id', id);
        });

        $('#confirmEditButton').on('click', function() {
            var id = $('#EditGenderModal').data('id');
            var gender = $('#edit-gender').val();
            var description = $('#edit-description').val();

            $.ajax({
                url: '/admindashboard/gender',
                method: 'PUT',
                contentType: 'application/json',
                data: JSON.stringify({
                    id: id,
                    gender: gender,
                    description: description
                }),
                success: function(response) {
                    var row = $('tr[data-id="' + id + '"]');
                    row.find('td:eq(1)').text(gender);
                    row.find('td:eq(2)').text(description);
                    $('.form-container').hide();
                    // Close the modal after successful edit
                    $('#EditGenderModal').modal('hide');
                },
                error: function(xhr, status, error) {
                    console.error('Error updating gender:', error);
                }
            });
        });

        fetchGenders();
        $(document).on('click', '.delete-gender', function() {
            var genderId = $(this).closest('tr').data('id');
            $('#DeleteGenderModal').modal('show');
            $('#confirmDeleteGenderButton').unbind().click(function() {
                $.ajax({
                    url: '/admindashboard/gender',
                    method: 'DELETE',
                    data: JSON.stringify({
                        id: genderId
                    }),
                    contentType: 'application/json',
                    success: function(response) {
                        fetchGenders(); // Update table after successful deletion
                        $('#DeleteGenderModal').modal('hide');
                    },
                    error: function(xhr, status, error) {
                        // Handle error
                        console.error(error);
                    }
                });
            });
        });


    });

    fetchGenders();
</script>
<script>
    $(document).ready(function() {
        var autoSave = $('#autoSave');
        var interval;

        var timer = function() {
            interval = setInterval(function() {
                if (autoSave.prop('checked')) {
                    saveToLocal();
                }
                clearInterval(interval);
            }, 3000);
        };

        var saveToLocal = function() {
            localStorage.setItem('summernoteData', $('#saveToLocal').summernote("code"));
            console.log("saved");
        }

        var removeFromLocal = function() {
            localStorage.removeItem("summernoteData");
            $('#saveToLocal').summernote('reset');
        }

        $('#saveToLocal').summernote({
            height: 200,
            tabsize: 2,
            placeholder: "Type here...",
            dialogsFade: true,
            toolbar: [
                ['style', ['style']],
                ['font', ['strikethrough', 'superscript', 'subscript', 'bold', 'italic', 'underline', 'clear']],
                ['fontsize', ['fontsize']],
                ['fontname', ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ],
            callbacks: {
                onInit: function(e) {
                    $('#saveToLocal').summernote("code", localStorage.getItem("summernoteData"));
                },
                onChange: function(contents, $editable) {
                    clearInterval(interval);
                    timer();
                }
            }
        });
    });
</script>
<script>
    $('#js_change_tab_direction input').on('change', function() {
        var newclass = $('input[name=radioNameTabDirection]:checked', '#js_change_tab_direction').val();
        $('#js_change_tab_direction').parent('.panel-tag').next('.nav.nav-tabs').removeClass().addClass(newclass);
    });
    $('#js_change_pill_direction input').on('change', function() {
        var newclass = $('input[name=radioNamePillDirection]:checked', '#js_change_pill_direction').val();
        $('#js_change_pill_direction').parent('.panel-tag').next('.nav.nav-pills').removeClass().addClass(newclass);
    });
</script>
<script>
    function toggleCollapse(collapseId, iconId) {
        var collapse = $('#' + collapseId);
        var icon = $('#' + iconId);
        collapse.collapse('toggle');
        icon.toggleClass('fa-angle-down fa-angle-up');
    }

    $(document).ready(function() {
        function fetchAndPopulateModules(packageId) {
            $.ajax({
                url: '/admindashboard/fetch_modules',
                method: 'POST',
                data: {
                    package_id: packageId
                },
                success: function(response) {
                    var modules = response.modules;
                    populateModules(modules);
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching modules:', error);
                }
            });
        }

        function populateModules(modules) {
            var tabContainer = $('#v-pills-tab');
            tabContainer.empty();
            modules.forEach(function(module, index) {
                var tabLinkId = 'v-pills-module' + module.id + '-tab';
                var tabLinkHtml = '<a  class="nav-link' + (index === 0 ? ' active' : '') + '" id="' + tabLinkId + '" data-toggle="pill" href="#v-pills-module' + module.id + '" role="tab" aria-controls="v-pills-module' + module.id + '" aria-selected="' + (index === 0 ? 'true' : 'false') + '">' +
                    '<span class="hidden-sm-down ml-1">' + module.name + '</span>' +
                    '</a>';
                tabContainer.append(tabLinkHtml);
            });
        }

        $('#packageTabs').on('click', '.nav-link', function() {
            var packageId = $(this).attr('id').replace('-tab', '');
            fetchAndPopulateModules(packageId);
            $('#topicAccordion').empty();
        });

        $('#topicModal').on('shown.bs.modal', function() {
            var activeTabId = $('#packageTabs .nav-link.active').attr('id');
            var packageId = activeTabId.replace('-tab', '');
            fetchAndPopulateModules(packageId);
            $('#topicAccordion').empty();

            // Trigger click event on the first module tab
            $('#v-pills-tab .nav-link:first').click();
        });

        $('#v-pills-tab').on('click', '.nav-link', function() {
            var moduleId = $(this).attr('id').replace('v-pills-module', '').replace('-tab', '');
            console.log('Module ID:', moduleId);
            $.ajax({
                url: '/admindashboard/fetch_topics_and_subtopics',
                method: 'POST',
                data: {
                    module_id: moduleId
                },
                success: function(response) {
                    console.log('Topics and Subtopics:', response);
                    $('#topicAccordion').empty();

                    if (response.module_topics.length === 0) {
                        $('#topicAccordion').append('<div class="alert alert-info" role="alert">No topics available for this module.</div>');
                    } else {
                        response.module_topics.forEach(function(topic, index) {
                            var topicHtml = '<div class="card">' +
                                '<div class="card-header" id="heading' + index + '">' +
                                '<h5 class="mb-0">' +
                                '<button style="text-decoration:none;" class="btn btn-link" data-toggle="collapse" data-target="#collapse' + index + '" aria-expanded="true" aria-controls="collapse' + index + '">' +
                                topic.name +
                                '</button>' +
                                '</h5>' +
                                '</div>' +
                                '<div id="collapse' + index + '" class="collapse" aria-labelledby="heading' + index + '" data-parent="#topicAccordion">' +
                                '<div class="card-body">' +
                                '<ul style="list-style: none;">';

                            if (topic.sub_topics.length === 0) {
                                topicHtml += '<li>No subtopics available for this topic.</li>';
                            } else {
                                topic.sub_topics.forEach(function(subtopic) {
                                    topicHtml += '<li>' +
                                        '<span style="color: #007bff; font-size: 1.2em;">&rarr;</span> ' +
                                        subtopic.name +
                                        '</li>';
                                });
                            }
                            topicHtml += '</ul>' +
                                '</div>' +
                                '</div>' +
                                '</div>';

                            $('#topicAccordion').append(topicHtml);
                        });
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching topics and subtopics:', error);
                }
            });
        });
        $('#topicModal').on('show.bs.modal', function() {
            var packageId = $('#packageTabs .nav-link:first').attr('id').replace('-tab', '');
            fetchAndPopulateModules(packageId);
        });
    });
</script>

</body>

</html>