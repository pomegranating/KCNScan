$(document).ready(function () {
    // Define the URLs here
    var fetchCountriesURL = 'http://localhost:8080/admindashboard/fetch_countries';
    var fetchCountiesURL = 'http://localhost:8080/admindashboard/fetch_counties';
    var fetchSubCountiesURL = 'http://localhost:8080/admindashboard/fetch_sub_counties';

    // Fetch countries
    $.ajax({
        url: fetchCountriesURL,
        type: 'GET',
        dataType: 'json',
        success: function (response) {
            if (response.status === 'success') {
                var countries = response.data;
                var dropdowns = ['#countryOfResidence', '#country3'];
                dropdowns.forEach(function (dropdownSelector) {
                    var dropdown = $(dropdownSelector);
                    dropdown.empty();
                    dropdown.append($('<option></option>').attr('value', '').text('Select Country')); // Add placeholder option
                    countries.forEach(function (country) {
                        dropdown.append($('<option></option>').attr('value', country.id).text(country.country_name));
                    });
                    $('.select2').select2();
                });
            } else {
                console.error('Failed to fetch countries.');
            }
        },
        error: function (xhr, status, error) {
            console.error(error);
        }
    });

    // Fetch counties
    $.ajax({
        url: fetchCountiesURL,
        type: 'GET',
        dataType: 'json',
        success: function (response) {
            if (response.status === 'success') {
                var counties = response.data;
                var dropdowns = ['#countyOfResidence', '#county3'];
                dropdowns.forEach(function (dropdownSelector) {
                    var dropdown = $(dropdownSelector);
                    dropdown.empty();
                    dropdown.append($('<option></option>').attr('value', '').text('Select County')); // Add placeholder option
                    counties.forEach(function (county) {
                        dropdown.append($('<option></option>').attr('value', county.id).text(county.county_name));
                    });
                    $('.select2').select2();
                });
            } else {
                console.error('Failed to fetch counties.');
            }
        },
        error: function (xhr, status, error) {
            console.error(error);
        }
    });

    // Fetch sub-counties based on selected county
    $('#countyOfResidence, #county3').change(function () {
        var countyId = $(this).val();
        if (countyId !== '') {
            var dropdown = $(this).attr('id') === 'countyOfResidence' ? '#subCountyOfResidence' : '#subCounty3';
            $.ajax({
                url: fetchSubCountiesURL,
                type: 'POST',
                dataType: 'json',
                data: {
                    county_id: countyId
                },
                success: function (response) {
                    if (response.status === 'success') {
                        var subCounties = response.data;
                        var subCountyDropdown = $(dropdown);
                        subCountyDropdown.empty();
                        subCountyDropdown.append($('<option></option>').attr('value', '').text('Select Sub-County'));
                        subCounties.forEach(function (subCounty) {
                            subCountyDropdown.append($('<option></option>').attr('value', subCounty.id).text(subCounty.sub_county_name));
                        });
                        $('.select2').select2();
                    } else {
                        console.error('Failed to fetch sub-counties.');
                    }
                },
                error: function (xhr, status, error) {
                    console.error(error);
                }
            });
        } else {
            var subCountyDropdown = $(this).attr('id') === 'countyOfResidence' ? '#subCountyOfResidence' : '#subCounty3';
            $(subCountyDropdown).empty();
        }
    });
});