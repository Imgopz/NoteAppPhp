<!-- start session -->
<!-- connect to the databse -->

<!-- Check user inputs -->
    <!-- Define error messages -->
    <!-- Get email -->
    <!-- Store erros in errors variables -->
    <!-- If there are any errors -->
        <!-- print error messages -->
    <!-- else: no errors -->
        <!-- prepare variables for the query -->
        <!-- run query to check if the email already exists in the user table -->
        <!-- If the email does not exist -->
            <!-- print the error message -->
        <!-- else -->
            <!-- get the user_id -->
            <!-- creaet a unique activation code -->
            <!-- insert user details and activation code in the forgotpassword table -->
            <!-- send email with link to resetpassowrd.php with user id and activation code -->
            <!-- if email sent successfully -->
                <!-- print success message -->
