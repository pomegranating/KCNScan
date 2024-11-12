// to get current year
function getYear() {
    var currentDate = new Date();
    var currentYear = currentDate.getFullYear();
    document.querySelector("#displayYear").innerHTML = currentYear;
}

getYear();


$('.custom_slick_slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    fade: true,
    adaptiveHeight: true,
    asNavFor: '.slick_slider_nav',
    responsive: [{
        breakpoint: 768,
        settings: {
            dots: false
        }
    }]
})

$('.slick_slider_nav').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.custom_slick_slider',
    centerMode: false,
    focusOnSelect: true,
    variableWidth: true
});


/** google_map js **/
// Function to pinpoint Nairobi Garage on Ngong Road
function myMap() {
    var mapProp = {
        center: new google.maps.LatLng(-1.302833, 36.780055),
        zoom: 20,
    };
    var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

    // Add a marker for Nairobi Garage
    var marker = new google.maps.Marker({
        position: { lat: -1.302833, lng: 36.780055 },
        map: map,
        title: "Nairobi Garage, Ngong Road"
    });
}




















