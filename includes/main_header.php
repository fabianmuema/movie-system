<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7 no-js" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en" class="no-js">

<!-- homev206:52-->

<head>
    <!-- Basic need -->
    <title>Movies</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link rel="profile" href="#">

    <!--Google Font-->
    <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Dosis:400,700,500|Nunito:300,400,600' />
    <!-- Mobile specific meta -->
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone-no">

    <!-- CSS files -->
    <link rel="stylesheet" href="css/plugins.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!--login form popup-->
    <!-- TODO: remove and add profile page -->
    <div class="login-wrapper" id="login-content">
        <div class="login-content">
            <a href="#" class="close">x</a>
            <h3>Login</h3>
            <form method="post" action="#">
                <div class="row">
                    <label for="username">
                        Username:
                        <input type="text" name="username" id="username" placeholder="Hugh Jackman" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{8,20}$" required="required" />
                    </label>
                </div>

                <div class="row">
                    <label for="password">
                        Password:
                        <input type="password" name="password" id="password" placeholder="******" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
                    </label>
                </div>
                <div class="row">
                    <div class="remember">
                        <div>
                            <input type="checkbox" name="remember" value="Remember me"><span>Remember me</span>
                        </div>
                        <a href="#">Forget password ?</a>
                    </div>
                </div>
                <div class="row">
                    <button type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>
    <!--end of login form popup-->
    <!--signup form popup-->
    <div class="login-wrapper" id="signup-content">
        <div class="login-content">
            <a href="#" class="close">x</a>
            <h3>sign up</h3>
            <form method="post" action="#">
                <div class="row">
                    <label for="username-2">
                        Username:
                        <input type="text" name="username" id="username-2" placeholder="Hugh Jackman" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{8,20}$" required="required" />
                    </label>
                </div>

                <div class="row">
                    <label for="email-2">
                        your email:
                        <input type="password" name="email" id="email-2" placeholder="" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
                    </label>
                </div>
                <div class="row">
                    <label for="password-2">
                        Password:
                        <input type="password" name="password" id="password-2" placeholder="" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
                    </label>
                </div>
                <div class="row">
                    <label for="repassword-2">
                        re-type Password:
                        <input type="password" name="password" id="repassword-2" placeholder="" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
                    </label>
                </div>
                <div class="row">
                    <button type="submit">sign up</button>
                </div>
            </form>
        </div>
    </div>
    <!--end of signup form popup-->

    <!-- BEGIN | Header -->
    <header class="ht-header full-width-hd">
        <div class="row">
            <nav id="mainNav" class="navbar navbar-default navbar-custom">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header logo">
                    <div class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <div id="nav-icon1">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <a href="index.php"><img class="logo" src="images/logo1.png" alt="" width="119" height="58"></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse flex-parent" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav flex-child-menu menu-left">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li class="first">
                            <a class="btn btn-default lv1" href="index.php">
                                Home
                            </a>
                        </li>
                        <li class="dropdown first">
                            <a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
                                movies<i class="fa fa-angle-down" aria-hidden="true"></i>
                            </a>
                            <ul class="dropdown-menu level1">
                                <!-- <li class="dropdown">
									<a href="#">about us <i class="fa fa-caret-right" aria-hidden="true"></i></a>
									<ul class="dropdown-menu level2">
										<li><a href="aboutv1.php">About Us 01</a></li>
										<li><a href="aboutv2.php">About Us 02</a></li>
									</ul>
								</li> -->
                                <li><a href="moviegridfw.php">All</a></li>
                            </ul>
                        </li>
                        <li class="dropdown first">
                            <a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
                                Tv Shows<i class="fa fa-angle-down" aria-hidden="true"></i>
                            </a>
                            <ul class="dropdown-menu level1">
                                <!-- <li class="dropdown">
															<a href="#">about us <i class="fa fa-caret-right" aria-hidden="true"></i></a>
															<ul class="dropdown-menu level2">
																<li><a href="aboutv1.php">About Us 01</a></li>
																<li><a href="aboutv2.php">About Us 02</a></li>
															</ul>
														</li> -->
                                <li><a href="moviegridfw.php">All</a></li>
                            </ul>
                        </li>

                        <li class="dropdown first">
                            <a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
                                Profile <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </a>
                            <ul class="dropdown-menu level1">
                                <li><a href="userfavoritegrid.php">user favorite grid</a></li>
                                <li><a href="userprofile.php">user profile</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav flex-child-menu menu-right">

                        <li class="loginLink"><a href="#">LOG In</a></li>
                        <li class="btn signupLink"><a href="#">sign up</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
            <!-- search form -->
        </div>

    </header>
    <!-- END | Header -->
    