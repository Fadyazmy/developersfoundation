/**
 * Created by harrisonchow on 7/10/16.
 */

function formSubmit(theForm) {
    console.log(theForm);

    Parse.initialize("developers-foundation-db", "unused");
    Parse.serverURL = 'https://developers-foundation-db.herokuapp.com/parse';
}