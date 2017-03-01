/**
 * Created by: Jashan Shewakramani
 * Date: Friday, 3rd February 2017
 *
 * Description: Separate JS for handling gallery submission on website.php
 **/

// event is only triggered when the input field values change
$('.add-gallery-pic').change(function(e) {
    var clickedElem = e.target;
    uploadGallery(clickedElem);
});


// listen for gallery clicks
var uploadGallery = function (element) {

    var galleryName = element.getAttribute('data-gallery-name');

    if (element.files.length > 0) {
        var file = element.files[0];
        var parseFile = new Parse.File(file.name, file); // name doesn't really matter

        var Gallery = Parse.Object.extend("Gallery");

        var galleryObject = new Gallery();
        galleryObject.set('image', parseFile);

        galleryObject.save().then(function(galleryObj) {
                var photoUrl = galleryObj.get('image').url();
                addPhotoUrl(galleryName, photoUrl);

            },
            function(err) {
                alert("Error saving file: " + err);
            });
    }
};

function addPhotoUrl(galleryName, url) {
    var Website = Parse.Object.extend('Website');
    var query = new Parse.Query(Website);

    var websiteid = document.getElementById('website-form').dataset.websiteid;


    query.get(websiteid).then(function(website) {
        var gallery = website.get('gallery');
        console.log('fetched gallery: ' + gallery);

        var galleries = gallery.galleries;
        console.log('galleries: ' + galleries);


        // add url to website
        for (var i = 0; i < galleries.length; i++) {
            if (galleries[i].name === galleryName)
                galleries[i].files.push(url);
        }

        // finally save with updated changes
        website.save();
    });
}

