/**
 * Created by harrisonchow on 7/10/16.
 */

function formSubmit(theForm) {
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
        },
        error: function (obj, error) {
            // The object was not retrieved successfully.
            // error is a Parse.Error with an error code and message.
            console.log(error);
        }
    });
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