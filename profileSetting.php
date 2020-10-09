<?php include_once 'header.php' ?>;
<?php include_once 'navBar.php' ?>;


<!-- content @s -->
<div class="nk-content nk-content-lg nk-content-fluid">
    <div class="container-xl wide-lg">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head">
                    <div class="nk-block-head-content">
                        <div class="nk-block-head-sub"><a class="back-to" href="html/invest/profile.html"><em class="icon ni ni-arrow-left"></em><span>My Profile</span></a></div>
                        <h2 class="nk-block-title fw-normal">Account Setting</h2>
                        <div class="nk-block-des">
                            <p>You have full control to manage your own account setting. <span class="text-primary"><em class="icon ni ni-info"></em></span></p>
                        </div>
                    </div>
                </div><!-- .nk-block-head -->
                <ul class="nk-nav nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link" href="profile.php">Personal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profileSetting.php">Security<span class="d-none s-sm-inline"> Setting</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profileNotify.php">Notifications</a>
                    </li>

                </ul><!-- .nav-tabs -->
                <div class="nk-block">
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h5 class="nk-block-title">Security Settings</h5>
                            <div class="nk-block-des">
                                <p>These settings are helps you keep your account secure.</p>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->
                    <div class="card card-bordered">
                        <div class="card-inner-group">
                            <div class="card-inner">
                                <div class="between-center flex-wrap flex-md-nowrap g-3">
                                    <div class="nk-block-text">
                                        <h6>Save my Activity Logs</h6>
                                        <p>You can save your all activity logs including unusual activity detected.</p>
                                    </div>
                                    <div class="nk-block-actions">
                                        <ul class="align-center gx-3">
                                            <li class="order-md-last">
                                                <div class="custom-control custom-switch mr-n2">
                                                    <input type="checkbox" class="custom-control-input" checked="" id="activity-log">
                                                    <label class="custom-control-label" for="activity-log"></label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- .card-inner -->
                            <div class="card-inner">
                                <div class="between-center flex-wrap flex-md-nowrap g-3">
                                    <div class="nk-block-text">
                                        <h6>Change Password</h6>
                                        <p>Set a unique password to protect your account.</p>
                                    </div>
                                    <div class="nk-block-actions flex-shrink-sm-0" data-toggle="modal" data-target="#changePassword">
                                        <ul class="align-center flex-wrap flex-sm-nowrap gx-3 gy-2">
                                            <li class="order-md-last">
                                                <a href="#" class="btn btn-primary">Change Password</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div><!-- .card-inner -->

                        </div><!-- .card-inner-group -->
                    </div><!-- .card -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
<!-- content @e -->

<!-- @@ Profile Edit Modal @e -->
<div class="modal fade" tabindex="-1" role="dialog" id="changePassword">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-lg">
                <h5 class="title">Change Password</h5>
                <ul class="nk-nav nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#personal">Update</a>
                    </li>
                </ul><!-- .nav-tabs -->
                <div class="tab-content">
                    <div class="tab-pane active" id="personal">
                        <div class="nk-block invest-block">
                            <form action="#" class="invest-form">
                                <div class="row g-gs">
                                    <div class="col-lg-7">
                                        <div class="invest-field form-group">
                                            <div class="form-label-group">
                                                <label class="form-label">Old Password</label>
                                            </div>
                                            <div class="invest-amount-group g-2">
                                                <div class="invest-amount-item">
                                                    <input type="password" class="form-control form-control-lg" required>

                                                </div>
                                            </div>
                                        </div><!-- .invest-field -->
                                        <div class="invest-field form-group">
                                            <div class="form-label-group">
                                                <label class="form-label">New Password</label>
                                            </div>
                                            <div class="invest-amount-group g-2">
                                                <div class="invest-amount-item">
                                                    <input type="password" class="form-control form-control-lg" required>

                                                </div>
                                            </div>
                                        </div><!-- .invest-field -->
                                        <div class="invest-field form-group">
                                            <div class="form-label-group">
                                                <label class="form-label">Confirm New Password</label>
                                            </div>
                                            <div class="invest-amount-group g-2">
                                                <div class="invest-amount-item">
                                                    <input type="password" class="form-control form-control-lg" required>

                                                </div>
                                            </div>
                                        </div><!-- .invest-field -->
                                        <div class="invest-field form-group">
                                            <div class="nk-iv-wg4-sub text-center bg-lighter">
                                                <button href="#" class="btn btn-lg btn-primary ttu" data-toggle="modal" data-target="#invest-plan">
                                                    Update</button>
                                            </div><!-- .nk-iv-wg4-sub -->
                                        </div><!-- .invest-field -->
                                    </div><!-- .col -->

                                </div><!-- .row -->
                            </form>
                        </div><!-- .nk-block -->
                    </div><!-- .tab-pane -->

                </div><!-- .tab-content -->
            </div><!-- .modal-body -->
        </div><!-- .modal-content -->
    </div><!-- .modal-dialog -->
</div><!-- .modal -->




<?php include_once 'footer.php' ?>;