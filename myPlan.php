<?php include 'header.php' ?>;
<?php include 'navBar.php' ?>;

<!-- content @s -->
<div class="nk-content nk-content-lg nk-content-fluid">
    <div class="container-xl wide-lg">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head">
                    <div class="nk-block-head-content">
                        <div class="nk-block-head-sub"><span>My Plan</span></div>
                        <div class="nk-block-between-md g-4">
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title fw-normal">Investment Plans</h2>
                                <div class="nk-block-des">
                                    <p>Here is your current balance and your active investment plans.</p>
                                </div>
                            </div><!-- .nk-block-head-content -->
                            <div class="nk-block-head-content">
                                <ul class="nk-block-tools gx-3">
                                    <li><a href="withdraw.php" class="btn btn-primary"><span>Withdraw</span> <em class="icon ni ni-arrow-long-right d-none d-sm-inline-block"></em></a></li>
                                    <li><a href="invest.php" class="btn btn-white btn-light"><span>Invest More</span> <em class="icon ni ni-arrow-long-right d-none d-sm-inline-block"></em></a></li>

                                </ul>
                            </div><!-- .nk-block-head-content -->
                        </div>
                    </div>
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="card card-bordered">
                        <div class="card-inner-group">
                            <div class="card-inner">
                                <div class="row gy-gs">
                                    <div class="col-lg-5">
                                        <div class="nk-iv-wg3">
                                            <div class="nk-iv-wg3-title">Total Balance</div>
                                            <div class="nk-iv-wg3-group  flex-lg-nowrap gx-4">
                                                <div class="nk-iv-wg3-sub">
                                                    <div class="nk-iv-wg3-amount">
                                                        <div class="number">18,752.84 <small class="currency currency-usd">USD</small></div>
                                                    </div>
                                                    <div class="nk-iv-wg3-subtitle">Available Balance</div>
                                                </div>

                                            </div>
                                        </div>
                                    </div><!-- .col -->
                                </div><!-- .row -->
                            </div><!-- .card-inner -->

                        </div><!-- .card-inner-group -->
                    </div><!-- .card -->
                </div><!-- .nk-block -->
                <div class="nk-block nk-block-lg">
                    <div class="nk-block-head-sm">
                        <div class="nk-block-head-content">
                            <h5 class="nk-block-title">Active Plan <span class="count text-base"></span></h5>
                        </div>
                    </div>
                    <div class="nk-iv-scheme-list">
                        <div class="nk-iv-scheme-item">
                            <div class="nk-iv-scheme-icon is-running">
                                <em class="icon ni ni-coins"></em>
                            </div>
                            <div class="nk-iv-scheme-info">
                                <div class="nk-iv-scheme-name">Crypto Plan - </div>
                                <div class="nk-iv-scheme-desc">Invested Amount - <span class="amount">$250</span></div>
                            </div>

                            <div class="nk-iv-scheme-more">
                                <a class="btn btn-icon btn-lg btn-round btn-trans" href="myPlanDetail.php"><em class="icon ni ni-forward-ios"></em></a>
                            </div>
                            <div class="nk-iv-scheme-progress">
                                <div class="progress-bar" data-progress="30"></div>
                            </div>
                        </div><!-- .nk-iv-scheme-item -->
                        <div class="nk-iv-scheme-item">
                            <div class="nk-iv-scheme-icon is-running">
                                <em class="icon ni ni-home"></em>
                            </div>
                            <div class="nk-iv-scheme-info">
                                <div class="nk-iv-scheme-name">Real Estate - </div>
                                <div class="nk-iv-scheme-desc">Invested Amount - <span class="amount">$1,250</span></div>
                            </div>

                            <div class="nk-iv-scheme-more">
                                <a class="btn btn-icon btn-lg btn-round btn-trans" href="myPlanDetail.php"><em class="icon ni ni-forward-ios"></em></a>
                            </div>
                            <div class="nk-iv-scheme-progress">
                                <div class="progress-bar" data-progress="40"></div>
                            </div>
                        </div><!-- .nk-iv-scheme-item -->
                        <div class="nk-iv-scheme-item">
                            <div class="nk-iv-scheme-icon is-running">
                                <em class="icon ni ni-money"></em>
                            </div>
                            <div class="nk-iv-scheme-info">
                                <div class="nk-iv-scheme-name">Retirement Plan - </div>
                                <div class="nk-iv-scheme-desc">Invested Amount - <span class="amount">$3,150</span></div>
                            </div>
                            
                            <div class="nk-iv-scheme-more">
                                <a class="btn btn-icon btn-lg btn-round btn-trans" href="myPlanDetail.php"><em class="icon ni ni-forward-ios"></em></a>
                            </div>
                            <div class="nk-iv-scheme-progress">
                                <div class="progress-bar" data-progress="60"></div>
                            </div>
                        </div><!-- .nk-iv-scheme-item -->
                    </div><!-- .nk-iv-scheme-list -->
                </div><!-- .nk-block -->

            </div>
        </div>
    </div>
</div>
<!-- content @e -->



<?php include 'footer.php' ?>;