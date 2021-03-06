
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>HMC ASSETS</title>

        <!-- Bootstrap core CSS -->
        <link href="./assets/css/bootstrap.css" rel="stylesheet">
        <link href="./assets/css/bootstrap-theme.css" rel="stylesheet">
        <link href="./assets/css/admin_main.css" rel="stylesheet">

        <script type="text/javascript" src="assets/js/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/admin_main.js"></script>

    </head>
    <body>
        <div class="wrapper" id="login_page">
            <header class="navbar navbar-collapse">
                <div class="container">
                    <div class="navbar-header col-xs-4">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="admin_login.php"><img id="logo" src="assets/img/logo.png" alt="HMC Assets" /></a>
                    </div>
                    <div class="navbar-collapse collapse navigation col-xs-8">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#">Home</a></li>
                            <li><a href="#about">About Us</a></li>
                            <li><a href="#contact">Financing</a></li>
                            <li><a href="#contact">Contact</a></li>
                            <li class="active"><a href="#contact">Client Access</a></li>
                        </ul>
                    </div><!--/.navbar-collapse -->
                </div>
            </header>
            <section class="main">
                <div class="container">
                    <div class="col-xs-6">
                    </div>
                    <div class="col-xs-6">
                        <div class="col-xs-9 login-form-wrapper">
                            <div class="form-item">
                                <div class="col-xs-7">
                                    <img class="login_text" src="./assets/img/admin_login_text.png" alt="" />
                                </div>
                            </div>
                            <form id="frm_login" name="frm_login" action="admin_dashboard.php">
                                <div class="col-xs-12 form-item form-input-item">
                                    <input type="text" id="inputName" placeholder="Username">
                                </div>
                                <div class="col-xs-12 form-item form-input-item">
                                    <input type="password" id="inputPassword" placeholder="Password">
                                </div>
                                <div class="col-xs-12 form-item">
                                    <input type="image" src="./assets/img/btn_login_hover.png" name="login" id="login" alt="Login"/>
                                </div>
                                <div class="col-xs-12 forgot-password form-item">
                                    <p><a href="javascript:alert('Sorry, now we are under development of this feature.')">Forgot your username and <br/> password? Click here</a></p>
                                </div>
                            </form>
                        </div>
                        <div class="col-xs-3"></div>
                    </div>
                </div>
            </section>
            <footer class="footer">
                <div class="container">
                    <div class="navbar-collapse navigation col-xs-12 col-lg-12">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a>|</a></li>
                            <li><a href="#about">About Us</a></li>
                            <li><a>|</a></li>
                            <li><a href="#contact">Financing</a></li>
                            <li><a>|</a></li>
                            <li><a href="#contact">Contact</a></li>
                            <li><a>|</a></li>
                            <li><a href="#contact">Register</a></li>
                            <li><a>|</a></li>
                            <li><a href="#contact">Client Access</a></li>
                            <li><a>|</a></li>
                            <li><a href="#contact">Download Center</a></li>
                        </ul>
                    </div><!--/.navbar-collapse -->
                    <div class="clear"></div>
                    <div class="navbar-collapse copyright col-xs-12 col-lg-12">
                        <ul class="nav navbar-nav">
                            <li><a>© 2010-2014. HMC Assets, LLC.</a></li>
                            <li><a>|</a></li>
                            <li><a href="#">Terms of Use</a></li>
                            <li><a>|</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div><!--/.navbar-collapse -->
                </div>
            </footer>
        </div><!--wrapper-->
    </body>
</html>
