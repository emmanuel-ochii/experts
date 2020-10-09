<?php include_once 'header.php' ?>;
<?php include_once 'navBar.php' ?>;


<!-- content @s -->
<div class="nk-content nk-content-lg nk-content-fluid">
    <div class="container-xl wide-lg">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head">
                    <div class="nk-block-between-md g-3">
                        <div class="nk-block-head-content">
                            <div class="nk-block-head-sub"><span>Welcome!</span></div>
                            <div class="align-center flex-wrap pb-2 gx-4 gy-3">
                                <div>
                                    <h2 class="nk-block-title fw-normal"><?php echo $_SESSION['username']; ?></h2>
                                </div>
                                <div><a href="myPlan.php" class="btn btn-white btn-light">My Plans <em class="icon ni ni-arrow-long-right ml-2"></em></a></div>
                            </div>
                            <div class="nk-block-des">
                                <p>At a glance summary of your investment account. Have fun!</p>
                            </div>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->

                <div class="nk-block">
                    <div class="row gy-gs">
                        <div class="col-md-6 col-lg-3">
                            <div class="nk-wg-card is-dark card card-bordered">
                                <div class="card-inner">
                                    <div class="nk-iv-wg2">
                                        <div class="nk-iv-wg2-title">
                                            <h6 class="title">Available Balance <em class="icon ni ni-info"></em></h6>
                                        </div>
                                        <div class="nk-iv-wg2-text">
                                            <div class="nk-iv-wg2-amount"> 105.94
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .card -->
                        </div><!-- .col -->
                        <div class="col-md-6 col-lg-3">
                            <div class="nk-wg-card is-s1 card card-bordered">
                                <div class="card-inner">
                                    <div class="nk-iv-wg2">
                                        <div class="nk-iv-wg2-title">
                                            <h6 class="title">Total Invested <em class="icon ni ni-info"></em></h6>
                                        </div>
                                        <div class="nk-iv-wg2-text">
                                            <div class="nk-iv-wg2-amount"> 509,850.90
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .card -->
                        </div><!-- .col -->
                        <div class="col-md-12 col-lg-3">
                            <div class="nk-wg-card is-s3 card card-bordered">
                                <div class="card-inner">
                                    <div class="nk-iv-wg2">
                                        <div class="nk-iv-wg2-title">
                                            <h6 class="title">Total Profits <em class="icon ni ni-info"></em></h6>
                                        </div>
                                        <div class="nk-iv-wg2-text">
                                            <div class="nk-iv-wg2-amount"> 50,600.48
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .card -->
                        </div><!-- .col -->
                        <div class="col-md-12 col-lg-3">
                            <div class="nk-wg-card is-s2 card card-bordered">
                                <div class="card-inner">
                                    <div class="nk-iv-wg2">
                                        <div class="nk-iv-wg2-title">
                                            <h6 class="title">Withdrawals <em class="icon ni ni-info"></em></h6>
                                        </div>
                                        <div class="nk-iv-wg2-text">
                                            <div class="nk-iv-wg2-amount"> 50,600.48
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .card -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .nk-block -->

                <div class="nk-block">
                    <div class="card card-bordered">
                        <div class="nk-refwg">
                            <div class="nk-refwg-invite card-inner">
                                <div class="nk-refwg-head g-3">
                                    <div class="nk-refwg-title">
                                        <h5 class="title">Refer Us & Earn</h5>
                                        <div class="title-sub">Use the bellow link to invite your friends.</div>
                                    </div>
                                    <div class="nk-refwg-action">
                                        <a href="#" class="btn btn-primary">Invite</a>
                                    </div>
                                </div>
                                <div class="nk-refwg-url">
                                    <div class="form-control-wrap">
                                        <div class="form-clip clipboard-init" data-clipboard-target="#refUrl" data-success="Copied" data-text="Copy Link"><em class="clipboard-icon icon ni ni-copy"></em> <span class="clipboard-text">Copy Link</span></div>
                                        <div class="form-icon">
                                            <em class="icon ni ni-link-alt"></em>
                                        </div>
                                        <input type="text" class="form-control copy-text" id="refUrl" value="https://expertinvests.com/?ref=4945KD48">
                                    </div>
                                </div>
                            </div>
                            <div class="nk-refwg-stats card-inner bg-lighter">
                                <div class="nk-refwg-group g-3">
                                    <div class="nk-refwg-name">
                                        <h6 class="title">My Referral <em class="icon ni ni-info" data-toggle="tooltip" data-placement="right" title="Referral Informations"></em></h6>
                                    </div>
                                    <div class="nk-refwg-info g-3">
                                        <div class="nk-refwg-sub">
                                            <div class="title">394</div>
                                            <div class="sub-text">Total Joined</div>
                                        </div>
                                        <div class="nk-refwg-sub">
                                            <div class="title">548.49</div>
                                            <div class="sub-text">Referral Earn</div>
                                        </div>
                                    </div>

                                </div>
                                <div class="nk-refwg-ck">
                                    <canvas class="chart-refer-stats" id="refBarChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div><!-- .card -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
<!-- content @e -->


<?php include_once 'footer.php' ?>;