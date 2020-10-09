<?php include_once 'header.php' ?>
<?php include_once 'navBar.php' ?>


<?php
if (isset($_POST["submit"])) {
    $recipient = "support@expertinvests.com";
    $plan = $_POST["plan"];
    $senderEmail = $_POST["email"];
    $subject = "$plan Withdrawal Form";
    $amount = $_POST["amount"];
    $payment_mthd = $_POST["payment_mthd"];
    # $senderEmail= filter_email_header($senderEmail);

    $mailBody = "Plan Name: $plan\n\nEmail: $senderEmail\n\nAmount To Withdraw: $amount\n\nPayment Method: $payment_mthd";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");
    echo '<script>alert("Kindly note that your withdrawal form has been sent successfully and is being processed")</script>';
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

                    <form method="post" action="" class="withdraw-form">
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
                                        <label class="form-label">Kindly Select Your Plan</label>
                                    </div>
                                    <select class="coin-info form-control form-control-amount form-control-lg " name="plan" data-placeholder="Select a option" required>
                                        <option value="no-plan">Select a plan</option>
                                        <option value="real-estate">Real Estate</option>
                                        <option value="forex">Forex</option>
                                        <option value="crypto">Crypto</option>
                                        <option value="nfp">NFP</option>
                                        <option value="retirement">Retirement</option>
                                        <option value="special-trade">Special Trade</option>
                                    </select>

                                </div><!-- .invest-field -->
                                <div class="invest-field form-group">
                                    <div class="form-label-group">
                                        <label class="form-label">Enter Your Amount To Withdraw</label>
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
                                        <button class="btn btn-lg btn-primary ttu" type="submit" name="submit" data-toggle="modal" data-target="#invest-plan">
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



<?php include_once 'footer.php' ?>;