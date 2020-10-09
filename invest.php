<?php include_once 'header.php' ?>;
<?php include_once 'navBar.php' ?>;

<!-- content @s -->
<div class="nk-content nk-content-lg nk-content-fluid">
    <div class="container-xl wide-lg">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head text-center">
                    <div class="nk-block-head-content">
                        <div class="nk-block-head-sub"><span>Choose an Option</span></div>
                        <div class="nk-block-head-content">
                            <h2 class="nk-block-title fw-normal">Investment Plan</h2>
                            <div class="nk-block-des">
                                <p>Choose your investment plan and start earning.</p>
                            </div>
                        </div>
                    </div>
                </div><!-- nk-block -->
                <div class="nk-block">
                    <form action="investForm.php" class="plan-iv">

                        <div class="plan-iv-list nk-slider nk-slider-s2">
                            <ul class="plan-list slider-init" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "infinite":false, "responsive":[
						{"breakpoint": 992,"settings":{"slidesToShow": 2}},
						{"breakpoint": 768,"settings":{"slidesToShow": 1}}
					]}'>
                                <li class="plan-item">
                                    <input type="radio" id="plan-iv-1" name="plan-iv" class="plan-control" value="real estate">
                                    <div class="plan-item-card">
                                        <div class="plan-item-head">
                                            <div class="plan-item-heading">
                                                <h4 class="plan-item-title card-title title">Real Estate Plan</h4>
                                                <p class="sub-text">Enjoy entry level of invest & earn money.</p>
                                            </div>
                                            <div class="plan-item-summary card-text">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <span class="lead-text">7%</span>
                                                        <span class="sub-text">Monthly Interest</span>
                                                    </div>
                                                    <div class="col-6">
                                                        <span class="lead-text">12</span>
                                                        <span class="sub-text">Term Months</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="plan-item-body">
                                            <div class="plan-item-desc card-text">
                                                <ul class="plan-item-desc-list">
                                                    <li><span class="desc-label">Min Deposit</span> - <span class="desc-data">$100,000</span></li>
                                                    <li hidden><span class="desc-label">Max Deposit</span> - <span class="desc-data">$1,999</span></li>
                                                    <!-- <li><span class="desc-label">Deposit Return</span> - <span class="desc-data">Yes</span></li> -->

                                                </ul>
                                                <div class="plan-item-action">
                                                    <label for="plan-iv-1" class="plan-label">
                                                        <span class="plan-label-base">Choose this plan</span>
                                                        <span class="plan-label-selected">Plan Selected</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li><!-- .plan-item -->
                                <li class="plan-item">
                                    <input type="radio" id="plan-iv-3" name="plan-iv" class="plan-control" value="retirement">
                                    <div class="plan-item-card">
                                        <div class="plan-item-head">
                                            <div class="plan-item-heading">
                                                <h4 class="plan-item-title card-title title">Retirement Plan</h4>
                                                <p class="sub-text">Advance level of invest & earn to quickly.</p>
                                            </div>
                                            <div class="plan-item-summary card-text">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <span class="lead-text">5.5%</span>
                                                        <span class="sub-text">Monthly Interest</span>
                                                    </div>
                                                    <div class="col-6">
                                                        <span class="lead-text">24</span>
                                                        <span class="sub-text">Term Months</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="plan-item-body">
                                            <div class="plan-item-desc card-text">
                                                <ul class="plan-item-desc-list">
                                                    <li><span class="desc-label">Min Deposit</span> - <span class="desc-data">$50,000</span></li>
                                                    <li hidden><span class="desc-label">Max Deposit</span> - <span class="desc-data">$20,000</span></li>
                                                    <!-- <li><span class="desc-label">Deposit Return</span> - <span class="desc-data">Yes</span></li> -->

                                                </ul>
                                                <div class="plan-item-action">
                                                    <label for="plan-iv-3" class="plan-label">
                                                        <span class="plan-label-base">Choose this plan</span>
                                                        <span class="plan-label-selected">Plan Selected</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li><!-- .plan-item -->
                                <li class="plan-item">
                                    <input type="radio" id="plan-iv-4" name="plan-iv" class="plan-control" value="special trades">
                                    <div class="plan-item-card">
                                        <div class="plan-item-head">
                                            <div class="plan-item-heading">
                                                <h4 class="plan-item-title card-title title">Special Trades</h4>
                                                <p class="sub-text">Enjoy entry level of invest & earn money.</p>
                                            </div>
                                            <div class="plan-item-summary card-text">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <span class="lead-text">20%</span>
                                                        <span class="sub-text">Monthly Interest</span>
                                                    </div>
                                                    <div class="col-6">
                                                        <span class="lead-text">1</span>
                                                        <span class="sub-text">Term Month</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="plan-item-body">
                                            <div class="plan-item-desc card-text">
                                                <ul class="plan-item-desc-list">
                                                    <li><span class="desc-label">Min Deposit</span> - <span class="desc-data">$250,000</span></li>
                                                    <li hidden><span class="desc-label">Max Deposit</span> - <span class="desc-data">$1,999</span></li>
                                                    <!-- <li><span class="desc-label">Deposit Return</span> - <span class="desc-data">Yes</span></li> -->

                                                </ul>
                                                <div class="plan-item-action">
                                                    <label for="plan-iv-4" class="plan-label">
                                                        <span class="plan-label-base">Choose this plan</span>
                                                        <span class="plan-label-selected">Plan Selected</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li><!-- .plan-item -->
                                <li class="plan-item">
                                    <input type="radio" id="plan-iv-5" name="plan-iv" class="plan-control" value="nfp">
                                    <div class="plan-item-card">
                                        <div class="plan-item-head">
                                            <div class="plan-item-heading">
                                                <h4 class="plan-item-title card-title title">NFP Plan</h4>
                                                <p class="sub-text">Best plan for user to invest & earn money.</p>
                                            </div>
                                            <div class="plan-item-summary card-text">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <span class="lead-text">10%</span>
                                                        <span class="sub-text">Monthly Interest</span>
                                                    </div>
                                                    <div class="col-6">
                                                        <span class="lead-text">12</span>
                                                        <span class="sub-text">Term Months</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="plan-item-body">
                                            <div class="plan-item-desc card-text">
                                                <ul class="plan-item-desc-list">
                                                    <li><span class="desc-label">Min Deposit</span> - <span class="desc-data">$50,000</span></li>

                                                    <!-- <li><span class="desc-label">Deposit Return</span> - <span class="desc-data">Yes</span></li> -->
                                                </ul>
                                                <div class="plan-item-action">
                                                    <label for="plan-iv-5" class="plan-label">
                                                        <span class="plan-label-base">Choose this plan</span>
                                                        <span class="plan-label-selected">Plan Selected</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li><!-- .plan-item -->
                                <li class="plan-item">
                                    <input type="radio" id="plan-iv-2" name="plan-iv" class="plan-control" value="forex-crypto">
                                    <div class="plan-item-card">
                                        <div class="plan-item-head">
                                            <div class="plan-item-heading">
                                                <h4 class="plan-item-title card-title title">Forex/Crypto Plan</h4>
                                                <p class="sub-text">Best plan for user to invest & earn money.</p>
                                            </div>
                                            <div class="plan-item-summary card-text">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <span class="lead-text">6.5%</span>
                                                        <span class="sub-text">Monthly Interest</span>
                                                    </div>
                                                    <div class="col-6">
                                                        <span class="lead-text">12</span>
                                                        <span class="sub-text">Term Months</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="plan-item-body">
                                            <div class="plan-item-desc card-text">
                                                <ul class="plan-item-desc-list">
                                                    <li><span class="desc-label">Min Deposit</span> - <span class="desc-data">$1,000</span></li>
                                                    <!-- <li><span class="desc-label">Deposit Return</span> - <span class="desc-data">Yes</span></li> -->
                                                </ul>
                                                <div class="plan-item-action">
                                                    <label for="plan-iv-2" class="plan-label">
                                                        <span class="plan-label-base">Choose this plan</span>
                                                        <span class="plan-label-selected">Plan Selected</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li><!-- .plan-item -->

                            </ul><!-- .plan-list -->
                        </div>
                        <div class="plan-iv-actions text-center">
                            <button class="btn btn-primary btn-lg"> <span>Continue to Invest</span> <em class="icon ni ni-arrow-right"></em></button>
                        </div>
                    </form>
                </div><!-- nk-block -->
            </div>
        </div>
    </div>
</div>
<!-- content @e -->


<?php include_once 'footer.php' ?>;