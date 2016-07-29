/**
 * Created by harrisonchow on 7/10/16.
 */

function formSubmit(theForm) {
    var submitButton = document.getElementById('website-form-submit');
    submitButton.disabled = true;

    var parseUser = theForm.dataset.parseuser,
        parsePwd = theForm.dataset.parsepw;

    Parse.initialize("developers-foundation-db", "unused");
    Parse.serverURL = 'https://developers-foundation-db.herokuapp.com/parse';

    var websiteID = theForm.dataset.websiteid;
    var formWebTitle = document.getElementById('web-title').value,
        formWebNick = document.getElementById('web-nick').value,
        formWebDesc = document.getElementById('web-description').value,
        formWebUrl = document.getElementById('web-url').value,
        formWebLogo = document.getElementById('web-logo-preview').src;

    Parse.User.logIn(parseUser, parsePwd).then(function () {
        var Websites = Parse.Object.extend("Website");
        var query = new Parse.Query(Websites);
        return query.get(websiteID);
    }).then(function (obj) {
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
                $(function () {
                    new PNotify({
                        title: 'Oh No!',
                        text: 'File size limit is 10mb. Sorry!',
                        type: 'error',
                        nonblock: {
                            nonblock: true
                        },
                        styling: 'bootstrap3'
                    });
                });
                return;
            }

            var formWebLogoFilename = theFile.name;
            var parseFile = new Parse.File(formWebLogoFilename, theFile);
            var tempUrl = "";
            parseFile.save().then(function(img) {
                tempUrl = img.url();
                tempUrl = (tempUrl.indexOf('https') == 0) ? tempUrl : "https" + tempUrl.substr(4);
            }, function(err) {
                console.log(err);
            });

            // Add parse file to obj
            obj.set('logo', parseFile);
            // Need to switch url to https
            obj.set('logoUrl', tempUrl);
        }

        return obj.save();
    }).then(function (obj) {
        // Object saved
        $(function () {
            new PNotify({
                title: 'Success',
                text: 'That thing that you were trying to do actually worked! heheh',
                type: 'success',
                nonblock: {
                    nonblock: true
                },
                styling: 'bootstrap3'
            });
        });
    }, function (error) {
        // The object was not retrieved successfully.
        // error is a Parse.Error with an error code and message.
        console.log(error);

        $(function () {
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
    });

    submitButton.disabled = false;
}

function readURL(input) {
    if (input.files && input.files[0] && input.files[0].size > 10485759) {
        $(function () {
            new PNotify({
                title: 'Oh No!',
                text: 'File size limit is 10mb. Sorry!',
                type: 'error',
                nonblock: {
                    nonblock: true
                },
                styling: 'bootstrap3'
            });
        });
        return;
    }

    if (input.files && input.files[0]) {
        // Get destination of preview
        var preview = input.dataset.preview;
        var reader = new FileReader();

        reader.onload = function (e) {
            $(preview).attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#web-logo").change(function () {
    readURL(this);
});

/* Profile Picture */
function triggerProfilePicUpload(e, self) {
    e.preventDefault();
    var parent = self.parentNode;
    document.getElementsByName('pictureToUpload1')[0].click();
    return false;
}
function fileSubmit(self) {
    var file = self.value;
    var fileName = file.split("\\");
    if (fileName == "") fileName = "Upload Picture";
    document.getElementsByName("picturePlaceHolder1")[0].innerHTML = fileName[fileName.length - 1];

    readURL(self);
    return false;
}