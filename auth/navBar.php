<!-- main header @s -->
<div class="nk-header nk-header-fluid is-theme">
    <div class="container-xl wide-lg">
        <div class="nk-header-wrap">
            <div class="nk-menu-trigger mr-sm-2 d-lg-none">
                <a href="#" class="nk-nav-toggle
                                    nk-quick-nav-icon" data-target="headerNav"><em class="icon ni ni-menu"></em></a>
            </div>
            <div class="nk-header-brand">
                <a href="index.php" class="logo-link">
                    <img class="logo-light logo-img" src="./images/rsz_logoexpert.png" srcset="./images/logo2x.png 2x" alt="logo">
                    <img class="logo-dark logo-img" src="./images/rsz_logoexpert.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">

                </a>
            </div><!-- .nk-header-brand -->
            <div class="nk-header-menu" data-content="headerNav">
                <div class="nk-header-mobile">
                    <div class="nk-header-brand">
                        <a href="index.php" class="logo-link">
                            <img class="logo-light logo-img" src="images/rsz_logoexpert.png" srcset="images/rsz_logoexpert.png 2x" alt="logo">
                            <img class="logo-dark logo-img" src="images/rsz_logoexpert.png" srcset="./images/rsz_logoexpert.png
                                                2x" alt="logo-dark">

                        </a>
                    </div>
                    <div class="nk-menu-trigger mr-n2">
                        <a href="#" class="nk-nav-toggle
                                            nk-quick-nav-icon" data-target="headerNav"><em class="icon ni ni-arrow-left"></em></a>
                    </div>
                </div>
                <!-- Menu -->
                <ul class="nk-menu nk-menu-main">
                    <li class="nk-menu-item">
                        <a href="auth/dashboard.php" class="nk-menu-link">
                            <span class="nk-menu-text">Overview</span>
                        </a>
                    </li>

                    <li class="nk-menu-item">
                        <a href="auth/profile.php" class="nk-menu-link">
                            <span class="nk-menu-text">Profile</span>
                        </a>
                    </li>

                </ul>
            </div><!-- .nk-header-menu -->
            <div class="nk-header-tools">
                <ul class="nk-quick-nav">
                    <li class="hide-mb-sm"><a href="logout.php" class="nk-quick-nav-icon"><em class="icon ni ni-signout"></em></a></li>
                    <li class="dropdown user-dropdown
                                        order-sm-first">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <div class="user-toggle">
                                <div class="user-avatar sm">
                                    <em class="icon ni
                                                        ni-user-alt"></em>
                                </div>
                                <div class="user-info d-none
                                                    d-xl-block">

                                    <div class="user-name
                                                        dropdown-indicator"><?php echo $_SESSION['username']; ?></div>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu
                                            dropdown-menu-md dropdown-menu-right
                                            dropdown-menu-s1 is-light">
                            <div class="dropdown-inner
                                                user-card-wrap bg-lighter d-none
                                                d-md-block">
                                <div class="user-card">
                                    <div class="user-avatar">
                                        <span>AB</span>
                                    </div>
                                    <div class="user-info">
                                        <span class="lead-text"><?php echo $_SESSION['username']; ?></span>
                                        <span class="sub-text">info@expertinvests.com</span>
                                    </div>
                                    <div class="user-action">
                                        <a class="btn btn-icon
                                                            mr-n2" href="html/invest/profile-setting.html"><em class="icon ni
                                                                ni-setting"></em></a>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li><a href="profile.php"><em class="icon ni
                                                                ni-user-alt"></em><span>View
                                                Profile</span></a></li>
                                    <li><a href="profile.php"><em class="icon ni
                                                                ni-setting-alt"></em><span>Account
                                                Setting</span></a></li>

                                </ul>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li><a href="logout.php"><em class="icon ni
                                                                ni-signout"></em><span>Sign
                                                out</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </li><!-- .dropdown -->
                </ul><!-- .nk-quick-nav -->
            </div><!-- .nk-header-tools -->
        </div><!-- .nk-header-wrap -->
    </div><!-- .container-fliud -->
</div>
<!-- main header @e -->