/**
 * Created by harrisonchow on 7/10/16.
 */

function formSubmit(theForm) {
    console.log(theForm);

    Parse.initialize("developers-foundation-db", "unused");
    Parse.serverURL = 'https://developers-foundation-db.herokuapp.com/parse';

    var formWebTitle = document.getElementById('web-title');
    var formWebDesc = document.getElementById('web-description');
    var formWebUrl = document.getElementById('web-url');
    
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

$("#web-logo").change(function(){
    readURL(this);
});