/**
 * Created by harrisonchow on 7/10/16.
 */

var debug = true;
if (debug) console.debug("Debug mode is ON");

/* Doc Ready Functions */
$(document).ready(function () {

    // initialize Parse connection as soon as doc ready
    Parse.initialize("developers-foundation-db", "unused");
    Parse.serverURL = 'https://developers-foundation-db.herokuapp.com/parse';

    $("#web-logo").change(function () {
        readURL(this);
    });

    $("#add-exec").click(function (e) {
        e.preventDefault();
        addExec();
    });

    $('#make-section-button').click(function(e) {
        e.preventDefault();
        promptNewSection();
    });

    /* Dropzone override TODO-michael: this does ignites the dropzone div */
    Dropzone.autoDiscover = false;
    $("div#galleryDrop").dropzone({url: "website.php"});
});

/* On form submit function */
function formSubmit(theForm) {
    var submitButton = document.getElementById('website-form-submit');
    submitButton.disabled = true;

    var parseUser = theForm.dataset.parseuser,
        parsePwd = theForm.dataset.parsepw;


    var websiteID = theForm.dataset.websiteid;
    var formWebTitle = document.getElementById('web-title').value,
        formWebNick = document.getElementById('web-nick').value,
        formWebDesc = document.getElementById('web-description').value,
        formWebUrl = document.getElementById('web-url').value,
        formWebLogo = document.getElementById('web-logo-preview').src;

    var formWebExec = [],
        execBlocks = document.getElementsByClassName('exec-group');
    for (var i = 0; i < execBlocks.length; i++) {
        formWebExec[i] = {};
        formWebExec[i].pictureid = execBlocks[i].getElementsByClassName('input-exec-img')[0].dataset.parsedb;
        formWebExec[i].name = execBlocks[i].getElementsByClassName('exec-name')[0].value;
        formWebExec[i].position = execBlocks[i].getElementsByClassName('exec-name')[0].value;
        formWebExec[i].desc = execBlocks[i].getElementsByClassName('exec-description')[0].value;
    }

    // Save current edits first
    switchSection(document.getElementsByClassName('content-select')[0]);
    var contentFields = document.getElementsByClassName('content-field'),
        formWebContent = {"data":[]};
    for (var i = 0; i < contentFields.length; i++) {
        formWebContent.data[i] = {};
        formWebContent.data[i].name = contentFields[i].dataset.namefield;
        formWebContent.data[i].content = contentFields[i].innerHTML;
    }

    Parse.User.logIn(parseUser, parsePwd).then(function (u) {
        if (debug) console.log("User Logged In");
        if (debug) console.log(u);

        var Websites = Parse.Object.extend("Website");
        var query = new Parse.Query(Websites);
        return query.get(websiteID);
    }).then(function (obj) {
        if (debug) console.log("Website Query OK");
        // Promise system to make async
        var promise = Parse.Promise.as();

        obj.set('name', formWebTitle);
        obj.set('nickname', formWebNick);
        obj.set('description', formWebDesc);
        obj.set('url', formWebUrl);
        obj.set('exec',formWebExec);
        obj.set('content', formWebContent);

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
                return Parse.Promise.error("File size too large.");
            }

            var formWebLogoFilename = theFile.name;
            var parseFile = new Parse.File(formWebLogoFilename, theFile);
            promise = promise.then(function () {
                return parseFile.save();
            }).then(function (img) {
                var tempUrl = img.url();
                tempUrl = (tempUrl.indexOf('https') == 0) ? tempUrl : "https" + tempUrl.substr(4);
                //console.log(tempUrl);

                // Add parse file to obj
                obj.set('logo', parseFile);
                obj.set('logoUrl', tempUrl);
                return;
            }, function (err) {
                console.log(err);
            });
        }

        promise = promise.then(function () {
            if (debug) console.log("Saving:");
            if (debug) console.log(obj);
            return obj.save();
        });

        if (debug) console.log("Save done");
        return promise;
    }).then(function (obj) {
        if (debug) console.log("Save OK");
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
                text: 'Failed to submit form :(\nError ' + error.code + ': ' + error.message,
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

/* Profile Picture */
function triggerProfilePicUpload(e, self) {
    e.preventDefault();
    self.parentNode.getElementsByClassName('input-exec-img')[0].click();
    return false;
}

function fileSubmit(self) {
    var file = self.value;
    var fileName = file.split("\\");
    if (fileName == "") fileName = "Upload Picture";
    self.parentNode.getElementsByClassName('btn')[0].innerHTML = fileName[fileName.length - 1];

    readURL(self);
    uploadExecPic(self);
    return false;
}


// deletes the executive at position index by removing the accompanying dom element
function removeExecutive(e, index) {
    e.preventDefault();
    document.getElementById('exec-info-' + index).remove();
}


function uploadExecPic(self) {
    var theForm = document.getElementById('website-form'),
        parseUser = theForm.dataset.parseuser,
        parsePwd = theForm.dataset.parsepw;

    Parse.initialize("developers-foundation-db", "unused");
    Parse.serverURL = 'https://developers-foundation-db.herokuapp.com/parse';

    var theFile = self.files[0];

    Parse.User.logIn(parseUser, parsePwd).then(function () {
        var promise = Parse.Promise.as();

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
            return Parse.Promise.error("File size too large.");
        }

        var ExecPhoto = Parse.Object.extend("ExecPhoto");
        var execPhotoObj = new ExecPhoto();

        var parseFile = new Parse.File(theFile.name, theFile);
        promise = promise.then(function () {
            return parseFile.save();
        }).then(function (img) {
            var tempUrl = img.url();
            tempUrl = (tempUrl.indexOf('https') == 0) ? tempUrl : "https" + tempUrl.substr(4);

            // Add parse file to obj
            execPhotoObj.set('picture', parseFile);
            execPhotoObj.set('pictureUrl', tempUrl);
            return execPhotoObj.save();
        }).then(function(rtnObj) {
            //console.log(rtnObj);
            self.dataset.parsedb = rtnObj.id;
        }, function (err) {
            console.log(err);
        });

        return promise;
    }, function (err) {
        console.log(err);
        $(function () {
            new PNotify({
                title: 'Oh No!',
                text: err.message,
                type: 'error',
                nonblock: {
                    nonblock: true
                },
                styling: 'bootstrap3'
            });
        });
    });
}

// Auto preview uploads
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
        };

        reader.readAsDataURL(input.files[0]);
    }
}

/* Add exec */
function addExec() {
    var currentExecCount = document.getElementById('website-step-2').dataset.execcount,
        container = document.getElementById('website-step-2'),
        addButton = document.getElementById('add-exec'),
        newDiv = document.createElement('DIV');

    currentExecCount++;

    var inner = '<div class="row">\
        <div class="col-md-3">\
        <div class="col-md-12">\
        <img src="production/images/user.png" alt="..." class="img-circle profile_img preview-exec-img' + currentExecCount + '" width="100%">\
        <br/>\
        <br/>\
        </div>\
        <div class="col-md-12" style="text-align: center">\
        <button class="btn btn-success" name="picturePlaceHolder' + currentExecCount + '" onclick="triggerProfilePicUpload(event, this);">Upload Picture</button>\
        <input type="file" name="pictureToUpload' + currentExecCount + '" class="input-exec-img" data-role="magic-overlay" data-target="#pictureBtn"\
        data-edit="insertImage" data-preview=".preview-exec-img' + currentExecCount + '" data-parsedb="-1" style="display: none;" onchange="fileSubmit(this);"/>\
        </div>\
        </div>\
        <div class="col-md-9">\
        <div class="col-md-10 col-md-offset-2">\
        <br/>\
        <input type="text" id="exec-name' + currentExecCount + '" required class="form-control col-md-7 col-xs-12 exec-name" placeholder="Name">\
        </div>\
        <div class="col-md-10 col-md-offset-2">\
        <br/>\
        <input type="text" id="exec-position' + currentExecCount + '" required class="form-control col-md-7 col-xs-12 exec-position" placeholder="Position">\
        </div>\
        <div class="col-md-10 col-md-offset-2">\
        <br/>\
        <textarea id="exec-description' + currentExecCount + '" name="exec-description" class="form-control col-md-7 col-xs-12 exec-description" rows="5" placeholder="Information goes here"></textarea>\
        </div>\
        </div>\
        </div>\
        <div class="clearfix"></div>';

    newDiv.innerHTML = inner;
    newDiv.className = "form-group exec-group";
    newDiv.dataset.exec = "" + currentExecCount;

    container.insertBefore(newDiv, addButton);
    document.getElementById('website-step-2').dataset.execcount = currentExecCount;
}

/* Switch fetch sections */
function switchSection(self) {
    var editor = document.getElementById('editor'),
        oldField = editor.dataset.contentold,
        oldData = editor.innerHTML,
        newField = self.value;
    oldField = oldField.indexOf(" ") == -1 ? oldField : oldField.substr(0, oldField.indexOf(" "));
    newField = newField.indexOf(" ") == -1 ? newField : newField.substr(0, newField.indexOf(" "));
    var oldFieldDiv = document.querySelectorAll('[data-namefield~="' + oldField + '"]')[0];
    oldFieldDiv.innerHTML = oldData;

    var newFieldDiv = document.querySelectorAll('[data-namefield~="' + newField + '"]')[0];
    editor.innerHTML = newFieldDiv.innerHTML;
    editor.dataset.contentold = newField;
    return;
}


/**
 * @param title The title of the new section
 * @description Allows clients to add new sections to the website
 */
function makeSection(title) {
    // this div will have no inner html as new sections have no content
    var newSectionDiv = document.createElement('div');
    newSectionDiv.setAttribute('class', 'content-field');
    newSectionDiv.setAttribute('style', 'display: none;');
    newSectionDiv.setAttribute('data-namefield', title);

    // add up the div to the document for useful referencing
    document.body.appendChild(newSectionDiv);

    // add the section as an option to the selector
    var newSectionOption = document.createElement('option');
    newSectionOption.setAttribute('value', title);
    newSectionOption.innerHTML = title;

    document.getElementById('heard').appendChild(newSectionOption);

    // switch the heard option selector to the new section
    document.getElementById('heard').value = title;

    // switch to the new section, the same way it worked before
    switchSection(newSectionOption);
}


/**
 * @description Prompts the user to create a new section on the website
 */
function promptNewSection() {
    swal({
        title: 'New Section',
        text: 'Please enter the title for the new section',
        type: 'input',
        showCancelBUtton: true,
        animation: 'slide-from-top',
        inputPlaceHolder: 'Enter your new title...'
    }, function(inputValue) {
        if (inputValue === false)
            return false;

        if (inputValue === '') {
            swal.showInputError('You need to enter a title');
            return false;
        }

        // create the new section with the given title
        makeSection(inputValue);
    })
}

// add functionality to create new gallery
function promptNewGallery(e) {
    e.preventDefault();
    swal({
        title: 'Create New Gallery',
        text: 'Please enter the title for the new gallery',
        type: 'input',
        showCancelButton: true,
        animation: 'slide-from-top',
        inputPlaceHolder: 'Gallery Name...'
    }, function(galleryName) {
        if (galleryName == false)
            return false;

        if (galleryName == '') {
            swal.showInputError('You need to enter a title');
            return false;
        }

        makeGallery(galleryName);
    })
}

function makeGallery(galleryName) {
    var Website = Parse.Object.extend('Website');
    var query = new Parse.Query(website);

    var websiteid = document.getElementById('website-form').dataset.websiteid;

    var newGalleryObj = {name: galleryName, files: []};

    query.get(websiteid).then(function(website) {
        var gallery = website.get('gallery');
        gallery['galleries'].push(newGalleryObj);

        return gallery.save();
    }).then(
        function(done) {
            console.log('gallery successfully created');
        },
        function(err) {
            console.log('error creating gallery object: ' + err);
    });
}