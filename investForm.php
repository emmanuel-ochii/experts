<?php include_once 'header.php' ?>;
<?php include_once 'navBar.php' ?>;
<?php require_once 'libs/functions.inc.php'; ?>

<?php
$arr = ['real estate', 'retirement', 'special trades', 'nfp', 'forex-crypto'];
if ((isset($_GET['plan-iv']) && in_array($_GET['plan-iv'], $arr)) || isset($_POST['submit-invest'])) {


    if (isset($_POST['submit-invest'])) {
        $result = invest($_POST);
        if ($result === true) {
            echo "<script>alert('Please, check mail for next steps');</script>";
        } else {
            $errors = $result;
        }
    }


?>

    <!-- content @s -->
    <div class="nk-content nk-content-lg nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-lg">
                        <div class="nk-block-head-content">
                            <div class="nk-block-head-sub"><a href="invest.php" class="back-to"><em class="icon ni ni-arrow-left"></em><span>Back to plan</span></a></div>
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title fw-normal">Please Fill The Form Below.</h2>
                            </div>
                        </div>
                    </div><!-- nk-block-head -->
                    <div class="nk-block invest-block">
                        <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" class="invest-form">
                            <div class="row g-gs">
                                <div class="col-lg-7">
                                    <div class="invest-field form-group">
                                        <div class="form-label-group">
                                            <label class="form-label">Kindly enter your email</label>
                                        </div>
                                        <div class="invest-amount-group g-2">
                                            <div class="invest-amount-item">
                                                <input type="email" class="form-control form-control-lg" name="email" required>

                                            </div>
                                        </div>
                                    </div><!-- .invest-field -->
                                    <div class="invest-field form-group">
                                        <div class="form-label-group">
                                            <label class="form-label">Enter your Plan</label>
                                        </div>
                                        <div class="invest-amount-group g-2">
                                            <div class="invest-amount-item">
                                                <input type="text" class="form-control form-control-lg" name="plan" readonly value="<?php if (isset($_GET['plan-iv'])) {
                                                                                                                                        echo ($_GET['plan-iv']);
                                                                                                                                    } elseif (isset($_POST['plan'])) {
                                                                                                                                        echo ($_POST['plan']);
                                                                                                                                    } ?>" required>

                                            </div>
                                        </div>
                                    </div><!-- .invest-field -->
                                    <div class="invest-field form-group">
                                        <div class="form-label-group">
                                            <label class="form-label">Enter Your Amount</label>
                                        </div>
                                        <div class="form-control-group">
                                            <div class="form-info">USD</div>
                                            <input type="text" class="form-control form-control-amount form-control-lg" name="amount" id="custom-amount" value="100.00" required>

                                        </div>
                                    </div><!-- .invest-field -->
                                    <div class="invest-field form-group">
                                        <div class="form-label-group">
                                            <label class="form-label">Choose Payment Method</label>
                                        </div>
                                        <select class="coin-info form-control form-control-amount form-control-lg " id="fv-topics" name="payment_mthd" data-placeholder="Select a option" required readonly>
                                            <option value="btc">BTC</option>
                                            <option value="eth">ETH</option>
                                        </select>
                                    </div><!-- .invest-field -->
                                    <div class="invest-field form-group">
                                        <div class="custom-control custom-control-xs custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checkbox" required>
                                            <label class="custom-control-label" for="checkbox">I agree the <a href="#">terms and &amp; conditions.</a></label>
                                        </div>
                                    </div><!-- .invest-field -->
                                    <div class="invest-field form-group">
                                        <div class="nk-iv-wg4-sub text-center bg-lighter">
                                            <button href="#" class="btn btn-lg btn-primary ttu" type="submit" name="submit-invest" data-toggle="modal" data-target="#invest-plan">
                                                Submit</button>
                                        </div><!-- .nk-iv-wg4-sub -->
                                    </div><!-- .invest-field -->
                                </div><!-- .col -->

                            </div><!-- .row -->
                        </form>
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
    <!-- content @e -->
<?php } ?>


<?php include_once 'footer.php' ?>;