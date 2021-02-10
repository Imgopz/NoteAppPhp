<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Online Notes</title>
    <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="styling.css" rel="stylesheet">

  </head>
  <body>
    <!-- Navigation Bar -->
    <nav role="navigation" class="navbar navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="#" class="navbar-brand">Online Notes</a>
                <button type="button" class="navbar-toggle" data-target="#navbarCollapse" data-toggle="collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar" ></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse" id="navbarCollapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#loginModal" data-toggle="modal">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Jumbotron with sign up button -->
    <div class="jumbotron" id="myContainer">
        <h1>Online Notes App</h1>
        <p>Your notes with you wherever you go.</p>
        <p>Easy to use, protects all your notes</p>
        <button type="button" class="btn btn-lg green signup"  data-target="#signupModal" data-toggle="modal">Sign Up-It's free</button>
    </div>
    <!-- Login form -->
    <form method="post" id="loginform">
        <div class="modal" id="loginModal" role="dialog" aria-lablledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal">
                            &times;
                        </button>
                        <h4 id="myModalLable">
                            Login:
                        </h4>
                    </div>
                    <div class="modal-body">
                        <!-- Login message from php -->
                        <div class="loginmessage"></div>
                        <div class="form-group">
                            <label for="loginemail" class="sr-only">Email:</label>
                            <input type="email" class="form-control name="loginemail" id="loginemail" placeholder="Email" maxlength="50">    
                        </div>
                        <div class="form-group">
                            <label for="loginpassword" class="sr-only">Password:</label>
                            <input type="password" class="form-control name="loginpassword" id="loginpassword" placeholder="Password" maxlength="30">    
                        </div>
                        <div class="checkbox">
                            <label for=""><input type="checkbox" name="rememberme" id="rememberme">Remember me</label>
                            <a href="" class="pull-right" style="cursor: pointer" data-dismiss="modal" data-target="#forgotpasswordModal" data-toggle="modal">
                                Forgot Password?
                            </a>    
                        </div>
                        
                        <div class="modal-footer">
                            <button class="btn btn-default pull-left" type="button" data-dismiss="modal" data-target="#signupModal" data-toggle="modal">Register</button>
                            <input type="submit" class="btn green" name="login" value="LogIn">
                            <button class="btn btn-default" type="button" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- Sign up form -->
    <form method="post" id="signupform">
        <div class="modal" id="signupModal" role="dialog" aria-lablledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal">
                            &times;
                        </button>
                        <h4 id="myModalLable">
                            Sing Up today and Start using our Online Notes App!
                        </h4>
                    </div>
                    <div class="modal-body">
                        <!-- Sign up message from php -->
                        <div class="signupmessage"></div>
                        <div class="form-group">
                            <label for="username" class="sr-only">Username:</label>
                            <input type="text" class="form-control name="username" id="username" placeholder="Username" maxlength="30">    
                        </div>
                        <div class="form-group">
                            <label for="email" class="sr-only">Email:</label>
                            <input type="email" class="form-control name="email" id="email" placeholder="Email Adderss" maxlength="50">    
                        </div>
                        <div class="form-group">
                            <label for="password" class="sr-only">Choose a password:</label>
                            <input type="password" class="form-control name="password" id="password" placeholder="Choose a password" maxlength="30">    
                        </div>
                        <div class="form-group">
                            <label for="password2" class="sr-only">Confirm Password:</label>
                            <input type="password" class="form-control name="password2" id="password2" placeholder="Confirm password" maxlength="30">    
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn green" name="signup" value="Sign up">
                            <button class="btn btn-default" type="button" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- Forgot password form -->
    <form method="post" id="forgotpasswordform">
        <div class="modal" id="forgotpasswordModal" role="dialog" aria-lablledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal">
                            &times;
                        </button>
                        <h4 id="myModalLable">
                            Forgot Passowrd? Enter your email address:
                        </h4>
                    </div>
                    <div class="modal-body">
                        <!-- forgot password message from php -->
                        <div class="forgotpasswordmessage"></div>
                        <div class="form-group">
                            <label for="forgotemail" class="sr-only">Email:</label>
                            <input type="email" class="form-control name="forgotemail" id="forgotemail" placeholder="Email" maxlength="50">    
                        </div>                      
                        <div class="modal-footer">
                            <button class="btn btn-default pull-left" type="button" data-dismiss="modal" data-target="#signupModal" data-toggle="modal">Register</button>
                            <input type="submit" class="btn green" name="forgotpassword" value="Submit">
                            <button class="btn btn-default" type="button" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <p>gopzdemo.com Copyright &copy; 2020-<?php $today = date("Y"); echo $today ?></p>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>