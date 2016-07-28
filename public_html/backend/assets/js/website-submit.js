/**
 * Created by harrisonchow on 7/10/16.
 */

function formSubmit(theForm) {
    var submitButton = document.getElementById('website-form-submit');
    submitButton.disabled = true;
    console.log(theForm);

    Parse.initialize("developers-foundation-db", "unused");
    Parse.serverURL = 'https://developers-foundation-db.herokuapp.com/parse';

    var websiteID = theForm.dataset.websiteid;
    var formWebTitle = document.getElementById('web-title').value;
    var formWebDesc = document.getElementById('web-description').value;
    var formWebUrl = document.getElementById('web-url').value;

    console.log(websiteID);

    var Websites = Parse.Object.extend("Website");
    var query = new Parse.Query(Websites);
    query.get(websiteID, {
        success: function (obj) {
            // The object was retrieved successfully.
            console.log(obj);

            new PNotify({
                title: 'Regular Success',
                text: 'That thing that you were trying to do actually worked! HAHAHA',
                type: 'success',
                styling: 'bootstrap3'
            });
        },
        error: function (obj, error) {
            // The object was not retrieved successfully.
            // error is a Parse.Error with an error code and message.
            console.log(error);

            new PNotify({
                title: 'Oh No!',
                text: 'Failed to submit form :( Error ' + error.code + ': ' + error.message,
                type: 'error',
                styling: 'bootstrap3'
            });
        }
    });

    submitButton.disabled = false;
}

function readURL(input) {
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