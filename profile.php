<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>My Profile</title>
    <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="styling.css" rel="stylesheet">
    <style>
        #container {
            margin-top: 100px;
        }

        #allNotes, #done, #notePad {
            display: none;
        }

        .buttons {
            margin-bottom: 20px;
        }

        tr {
            cursor: pointer;
        }
        
        textarea{
            width: 100%;
            max-width: 100%;
            font-size: 16px;
            line-height: 1.5em;
            border-left-width: 20px;
            border-color: #ca3dd9;
            color: #ca3dd9;
            background-color: #FBEFFF;
            padding: 10px;
        }

    </style>
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
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li class="active"><a href="#">My Notes</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Logged in as <strong>UserName</strong></a></li>
                    <li><a href="#">Log Out</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Container -->
    <div class="container" id="container">
        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <h2>General Account Settings:</h2>
                <div class="table-responsive">
                    <table class="table table-hover table-condensed table-bordered">
                        <tr data-target="#updateusername" data-toggle="modal">
                            <td>Username</td>
                            <td>Value</td>
                        </tr>
                        <tr data-target="#updateemail" data-toggle="modal">
                            <td>Email</td>
                            <td>Value</td>
                        </tr>
                        <tr data-target="#updatepassword" data-toggle="modal">
                            <td>Password</td>
                            <td>hidden</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Update username form -->
    <form method="post" id="updateusernameform">
        <div class="modal" id="updateusername" role="dialog" aria-lablledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal">
                            &times;
                        </button>
                        <h4 id="myModalLable">
                            Edit Username:
                        </h4>
                    </div>
                    <div class="modal-body">
                        <!-- Login message from php -->
                        <div class="loginmessage"></div>
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" class="form-control" name="username" id="username" maxlength="30" value="usernamevalue">    
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn green" name="updateusername" value="Submit">
                            <button class="btn btn-default" type="button" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- Update email form -->
    <form method="post" id="updatemailform">
        <div class="modal" id="updateemail" role="dialog" aria-lablledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal">
                            &times;
                        </button>
                        <h4 id="myModalLable">
                            Edit Email:
                        </h4>
                    </div>
                    <div class="modal-body">
                        <!-- Login message from php -->
                        <div class="loginmessage"></div>
                        <div class="form-group">
                            <label for="loginemail">Email:</label>
                            <input type="email" class="form-control" name="email" id="email" maxlength="50" value="emailvalue">    
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn green" name="updateemail" value="Submit">
                            <button class="btn btn-default" type="button" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- Update password form -->
    <form method="post" id="updatepasswordform">
        <div class="modal" id="updatepassword" role="dialog" aria-lablledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal">
                            &times;
                        </button>
                        <h4 id="myModalLable">
                            Enter current password & new password:
                        </h4>
                    </div>
                    <div class="modal-body">
                        <!-- Login message from php -->
                        <div class="loginmessage"></div>
                        <div class="form-group">
                            <label for="currentpassword" class="sr-only">Current:</label>
                            <input type="password" class="form-control" name="currentpassword" id="currentpassword" maxlength="50" placeholder="Current Password">    
                        </div>
                        <div class="form-group">
                            <label for="password" class="sr-only">Choose a Password:</label>
                            <input type="password" class="form-control" name="password" id="password" maxlength="50" placeholder="Choose a Password">    
                        </div>
                        <div class="form-group">
                            <label for="password2" class="sr-only">Confirm Password:</label>
                            <input type="password" class="form-control" name="password2" id="password2" maxlength="50" placeholder="Confirm Password">    
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn green" name="updateemail" value="Submit">
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