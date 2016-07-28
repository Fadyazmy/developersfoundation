/**
 * Created by harrisonchow on 7/10/16.
 */

function formSubmit(theForm) {
    var submitButton = document.getElementById('website-form-submit');
    submitButton.disabled = true;

    Parse.initialize("developers-foundation-db", "unused");
    Parse.serverURL = 'https://developers-foundation-db.herokuapp.com/parse';

    var websiteID = theForm.dataset.websiteid;
    var formWebTitle = document.getElementById('web-title').value,
        formWebNick = document.getElementById('web-nick').value,
        formWebDesc = document.getElementById('web-description').value,
        formWebUrl = document.getElementById('web-url').value,
        formWebLogo = document.getElementById('web-logo-preview').src;

    var Websites = Parse.Object.extend("Website");
    var query = new Parse.Query(Websites);
    query.equalTo("objectId", websiteID);
    query.limit(1);
    query.find().then(function (obj) {
        obj = obj[0];
        // The object was retrieved successfully.
        console.log(obj);

        obj.set('name', formWebTitle);
        obj.set('nickname', formWebNick);
        obj.set('description', formWebDesc);
        obj.set('url', formWebUrl);

        if (formWebLogo.indexOf('http') != -1) {
            // Logo is hosted
            obj.set('logoUrl', formWebLogo);
        } else {
            // Logo was just uploaded and is in base64
            // Removing html trash first
            //formWebLogo = formWebLogo.substr(formWebLogo.indexOf('base64,') + 7);

            var theFile = document.getElementById('web-logo').files[0];

            // First check file size (limit is 10mb)
            if (theFile.size > 10485759) {
                new PNotify({
                    title: 'Oh No!',
                    text: 'File size limit is 10mb. Sorry!',
                    type: 'error',
                    nonblock: {
                        nonblock: true
                    },
                    styling: 'bootstrap3'
                });
                return;
            }

            var formWebLogoFilename = theFile.name;
            var parseFile = new Parse.File(formWebLogoFilename, theFile);
            parseFile.save().then(function () {
            }, function (err) {
                console.log(err);
            });

            // Add parse file to obj
            obj.set('logo', parseFile);
            obj.set('logoUrl', parseFile.url);
        }

        console.log(obj);

        return obj.save();
    }).then(function(obj) {
        // Object saved
        new PNotify({
            title: 'Success',
            text: 'That thing that you were trying to do actually worked! heheh',
            type: 'success',
            nonblock: {
                nonblock: true
            },
            styling: 'bootstrap3'
        });
    }, function (error) {
        // The object was not retrieved successfully.
        // error is a Parse.Error with an error code and message.
        console.log(error);

        new PNotify({
            title: 'Oh No!',
            text: 'Failed to submit form :( Error ' + error.code + ': ' + error.message,
            type: 'error',
            nonblock: {
                nonblock: true
            },
            styling: 'bootstrap3'
        });
    });

    submitButton.disabled = false;
}

function readURL(input) {
    if (input.files && input.files[0] && input.files[0].size > 10485759) {
        new PNotify({
            title: 'Oh No!',
            text: 'File size limit is 10mb. Sorry!',
            type: 'error',
            nonblock: {
                nonblock: true
            },
            styling: 'bootstrap3'
        });
        return;
    }

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#web-logo-preview').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#web-logo").change(function () {
    readURL(this);
});