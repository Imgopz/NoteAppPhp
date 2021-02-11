// Ajax call for the sign up form
// once the form is submitted
$("#signupform").submit(function(event){
    // prevent default php processing
    event.preventDefault();
    // collect user inputs
    var datatopost = $(this).serializeArray();
    console.log(datatopost);

    // send them to signup.php using AJAX
})
    
    
    // send them to signup.php using AJAX
        // AJAX Call Successful: show error or success message
        // AJAX call fails: show Ajax call error

// Ajax call for the login form
// once the form is submitted
    // prevent default php processing
    // collect user inputs
    // send them to login.php using AJAX
        // AJAX Call Successful: 
            // if php file returns "sucess": redirect the user to the notes page
            // otherwise show error message
        // AJAX call fails: show Ajax call error

// Ajax call for the forgot password form
// once the form is submitted
    // prevent default php processing
    // collect user inputs
    // send them to login.php using AJAX
        // AJAX Call Successful: show error or success message
        // AJAX call fails: show Ajax call error