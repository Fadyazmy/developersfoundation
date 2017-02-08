/**
 * Created by: Jashan Shewakramani
 * Date: Friday, 3rd February 2017
 *
 * Description: Separate JS for handling gallery submission on website.php
 **/

$(document).ready(function() {

    // listen for gallery clicks
    $('.add-gallery-pic').click(function (event) {
        event.preventDefault();
        var element = event.target; // get the dom element that triggered the click

        var galleryName = element.getAttribute('data-gallery-name');

        if (element.files.length > 0) {
            var file = element.files[0];
            var parseFile = new Parse.File(file.name, file); // name doesn't really matter

            var Gallery = Parse.Object.extend("Gallery");

            var galleryObject = new Gallery();
            galleryObject.set('image', parseFile);

            galleryObject.save().then(function(galleryObj) {
                var photoUrl = galleryObj.url();
                addPhotoUrl(galleryName, photoUrl);

            },
            function(err) {
                alert("Error saving file: " + err);
            });
        }
    });

});

function addPhotoUrl(galleryName, url) {
    var Website = Parse.Object.extend('Website');
    var query = new Parse.Query(Website);

    var websiteid = document.getElementById('website-form').dataset.websiteid;

    query.get(websiteid).then(function(website) {
        var gallery = website.get('gallery');
        console.log('fetched gallery: ' + gallery);
    });
}