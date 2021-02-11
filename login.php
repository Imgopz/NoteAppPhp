<!-- Start session -->
<!-- Connect to the database -->

<!-- Check user inputs -->
    <!-- Define error messages -->
    <!-- Get email and password -->
    <!-- Store errors in errors variable -->
    <!-- If there are any errors -->
        <!-- print error messages -->
    <!-- else: no errors -->
        <!-- Prepare variables for the query -->
        <!-- Run query: check combination of email & password exists -->
        <!-- If emal & passowrd don't match print error -->
        <!-- else -->
            <!-- log the user in: session variables -->
            <!-- If remember me checked -->
                <!-- print success -->
            <!-- else -->
                <!-- Create two variables $authentificator1 and $authentificator2 -->
                <!-- store them in a cookie -->
                <!-- Run query to store them in rememberme table -->
                <!-- if query unsuccessful -->
                    <!-- print error -->
                <!-- else -->
                    <!-- print success -->