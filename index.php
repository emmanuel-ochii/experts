<?php  
require('authDB.php');
                    // require_once 'authDB.php';
                    session_start();

?>

<!DOCTYPE html>
<html lang="en" class="js">

<head>
    <base href="./">
    <meta charset="utf-8">
    <meta name="author" content="ExpertInvest">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="@@page-discription">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favico.png">
    <!-- Page Title  -->
    <title>Login | ExpertInvests Portal</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="./assets/css/dashlite.css?ver=1.4.0">
    <link id="skin-default" rel="stylesheet" href="./assets/css/theme.css?ver=1.4.0">
</head>

<body class="nk-body npc-crypto ui-clean pg-auth">
    <!-- app body @s -->
    <div class="nk-app-root">
        <div class="nk-split nk-split-page nk-split-md">
            <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container">
                <div class="absolute-top-right d-lg-none p-3 p-sm-5">
                    <a href="#" class="toggle btn-white btn btn-icon btn-light" data-target="athPromo"><em class="icon ni ni-info"></em></a>
                </div>
                <div class="nk-block nk-block-middle nk-auth-body">
                    <div class="brand-logo pb-5">
                        <a href="http://expertinvest.com" class="logo-link">
                            <img class="logo-light logo-img logo-img-lg" src="./images/Picture2.png" srcset="./images/Picture2.png 2x" alt="logo">
                            <img class="logo-dark logo-img logo-img-lg" src="./images/Picture2.png" srcset="./images/Picture2.png 2x" alt="logo-dark">
                        </a>
                    </div>
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h5 class="nk-block-title">Sign-In</h5>
                            <div class="nk-block-des">
                                <p>Access your panel using your email and password.</p>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->

                    <?php

                    // When form submitted, check and create user session.
                    if (isset($_POST['username'])) {
                        $username = stripslashes($_REQUEST['username']);    // removes backslashes
                        $username = mysqli_real_escape_string($con, $username);
                        $password = stripslashes($_REQUEST['password']);
                        $password = mysqli_real_escape_string($con, $password);
                        // Check user is exist in the database
                        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
                        $result = mysqli_query($con, $query) or die(mysql_error());
                        $rows = mysqli_num_rows($result);
                        $record = mysqli_fetch_array($result); 
                        if ($rows == 1) {
                            $_SESSION['id'] = $record['id'];
                            $_SESSION['email'] = $record['email'];
                            $_SESSION['username'] = $username;
                            // Redirect to user dashboard page
                            header("Location: dashboard.php");
                        } else {
                            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='index.php'>Login</a> again.</p>
                  </div>";
                        }
                    } else {
                    ?>
                        <form method="post" name="login">
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label class="form-label" for="default-01">Username</label>
                                    <a class="link link-primary link-sm" tabindex="-1" href="#">Need Help?</a>
                                </div>
                                <input type="text" class="form-control form-control-lg" id="username" name="username" placeholder="Enter your username">
                            </div><!-- .foem-group -->
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label class="form-label" for="password">Password</label>
                                    <a class="link link-primary link-sm" tabindex="-1" href="forgetPass.php">Forgot Password?</a>
                                </div>
                                <div class="form-control-wrap">
                                    <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch" data-target="password">
                                        <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                        <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                    </a>
                                    <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Enter your passcode">
                                </div>
                            </div><!-- .foem-group -->
                            <div class="form-group">
                                <button class="btn btn-lg btn-primary btn-block">Sign in</button>
                            </div>
                        </form><!-- form -->
                    <?php
                    }
                    ?>


                    <div class="form-note-s2 pt-4"> New on our platform? <a href="signup.php">Create an account</a>
                    </div>

                </div><!-- .nk-block -->
                <div class="nk-block nk-auth-footer">
                    <div class="nk-block-between">
                        <ul class="nav nav-sm">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Terms & Condition</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Privacy Policy</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Help</a>
                            </li>
                            <li class="nav-item dropup">
                                <a class="dropdown-toggle dropdown-indicator has-indicator nav-link" data-toggle="dropdown" data-offset="0,10"><small>English</small></a>
                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                    <ul class="language-list">
                                        <li>
                                            <a href="#" class="language-item">
                                                <img src="./images/flags/english.png" alt="" class="language-flag">
                                                <span class="language-name">English</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="language-item">
                                                <img src="./images/flags/spanish.png" alt="" class="language-flag">
                                                <span class="language-name">Español</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="language-item">
                                                <img src="./images/flags/french.png" alt="" class="language-flag">
                                                <span class="language-name">Français</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="language-item">
                                                <img src="./images/flags/turkey.png" alt="" class="language-flag">
                                                <span class="language-name">Türkçe</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul><!-- .nav -->
                    </div>
                    <div class="mt-3">
                        <p>&copy; 2020 Expert Invests. All Rights Reserved.</p>
                    </div>
                </div><!-- .nk-block -->
            </div><!-- .nk-split-content -->
            <div class="nk-split-content nk-split-stretch bg-lighter d-flex toggle-break-lg toggle-slide toggle-slide-right" data-content="athPromo" data-toggle-screen="lg" data-toggle-overlay="true">
                <div class="slider-wrap w-100 w-max-550px p-3 p-sm-5 m-auto">
                    <div class="slider-init" data-slick='{"dots":true, "arrows":false}'>
                        <div class="slider-item">
                            <div class="nk-feature nk-feature-center">
                                <div class="nk-feature-img">
                                    <img class="round" src="./images/slides/promo-a.png" srcset="./images/slides/promo-a2x.png 2x" alt="">
                                </div>
                                <div class="nk-feature-content py-4 p-sm-5">
                                    <h4>ExpertInvests</h4>
                                    <p>You can start to create your products easily with its user-friendly design & most completed responsive layout.</p>
                                </div>
                            </div>
                        </div><!-- .slider-item -->
                        <div class="slider-item">
                            <div class="nk-feature nk-feature-center">
                                <div class="nk-feature-img">
                                    <img class="round" src="./images/slides/promo-b.png" srcset="./images/slides/promo-b2x.png 2x" alt="">
                                </div>
                                <div class="nk-feature-content py-4 p-sm-5">
                                    <h4>ExpertInvests</h4>
                                    <p>You can start to create your products easily with its user-friendly design & most completed responsive layout.</p>
                                </div>
                            </div>
                        </div><!-- .slider-item -->
                        <div class="slider-item">
                            <div class="nk-feature nk-feature-center">
                                <div class="nk-feature-img">
                                    <img class="round" src="./images/slides/promo-c.png" srcset="./images/slides/promo-c2x.png 2x" alt="">
                                </div>
                                <div class="nk-feature-content py-4 p-sm-5">
                                    <h4>ExpertInvests</h4>
                                    <p>You can start to create your products easily with its user-friendly design & most completed responsive layout.</p>
                                </div>
                            </div>
                        </div><!-- .slider-item -->
                    </div><!-- .slider-init -->
                    <div class="slider-dots"></div>
                    <div class="slider-arrows"></div>
                </div><!-- .slider-wrap -->
            </div><!-- .nk-split-content -->
        </div><!-- .nk-split -->
    </div><!-- app body @e -->
    <!-- JavaScript -->
    <script src="./assets/js/bundle.js?ver=1.4.0"></script>
    <script src="./assets/js/scripts.js?ver=1.4.0"></script>
</body>

</html>