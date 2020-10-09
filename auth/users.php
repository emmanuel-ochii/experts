<?php include_once 'header.php' ?>;
<?php include_once 'navBar.php' ?>;

<?php
$userId = $_GET["id"];
echo $userId;
?>



<!-- content @s -->
<div class="nk-content nk-content-lg nk-content-fluid">
    <div class="container-xl wide-lg">
        <div class="nk-content-inner">
            <div class="nk-content-body">

                <div class="nk-block nk-block-lg">
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h4 class="title nk-block-title">Admin Input Fields</h4>
                            <div class="nk-block-des">
                                <p>You can input form details that displays for each users.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card card-bordered">
                        <div class="card-inner">
                            <div class="card-head">
                                <h5 class="card-title">Dashboard Input</h5>
                            </div>
                            <form action="#">
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label" for="full-name-1">Available Balance</label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control" id="full-name-1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label" for="email-address-1">Withdrawal</label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control" id="email-address-1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label" for="phone-no-1">Total Invested</label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control" id="phone-no-1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label" for="pay-amount-1">Total Profit</label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control" id="pay-amount-1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-lg btn-primary">Update Informations</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div><!-- .nk-block -->

                <div class="nk-block nk-block-lg">
                    <div class="card card-bordered">
                        <div class="card-inner">
                            <div class="card-head">
                                <h5 class="card-title">Invested Plan Input</h5>
                            </div>
                            <form action="#" method="post">
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label" for="full-name-1">Total Balance</label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control" id="full-name-1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-lg btn-primary">Update Informations</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div><!-- .nk-block -->

                <div class="nk-block nk-block-lg">
                    <div class="card card-bordered">
                        <div class="card-inner">
                            <div class="card-head">
                                <h5 class="card-title">Crypto Plan Input</h5>
                            </div>
                            <form action="#" method="post">
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label" for="full-name-1">Duration Input</label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control" id="full-name-1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label" for="full-name-1">Invested Amount</label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control" id="full-name-1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-lg btn-primary">Update Information</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div><!-- .nk-block -->

                <div class="nk-block nk-block-lg">
                    <div class="card card-bordered">
                        <div class="card-inner">
                            <div class="card-head">
                                <h5 class="card-title">Real Estate Input</h5>
                            </div>
                            <form action="#" method="post">
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label" for="full-name-1">Duration Input</label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control" id="full-name-1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label" for="full-name-1">Invested Amount</label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control" id="full-name-1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-lg btn-primary">Update Information</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div><!-- .nk-block -->

                <div class="nk-block nk-block-lg">
                    <div class="card card-bordered">
                        <div class="card-inner">
                            <div class="card-head">
                                <h5 class="card-title">NFP Input</h5>
                            </div>
                            <form action="#" method="post">
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label" for="full-name-1">Duration Input</label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control" id="full-name-1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label" for="full-name-1">Invested Amount</label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control" id="full-name-1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-lg btn-primary">Update Information</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div><!-- .nk-block -->

                <div class="nk-block nk-block-lg">
                    <div class="card card-bordered">
                        <div class="card-inner">
                            <div class="card-head">
                                <h5 class="card-title">Special Trade Input</h5>
                            </div>
                            <form action="#" method="post">
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label" for="full-name-1">Duration Input</label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control" id="full-name-1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label" for="full-name-1">Invested Amount</label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control" id="full-name-1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-lg btn-primary">Update Information</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div><!-- .nk-block -->

            </div>
        </div>
    </div>
</div>
<!-- content @e -->


<?php include_once 'footer.php' ?>;