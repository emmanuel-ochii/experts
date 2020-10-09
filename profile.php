<?php include_once 'header.php' ?>;
<?php include_once 'navBar.php' ?>;
<?php require_once 'libs/functions.inc.php'; ?>

<?php
if (isset($_SESSION['id'])) {
    require_once 'libs/functions.inc.php';
    $username = $_SESSION['username'];
    $email = $_SESSION['email'];
    $result = get_user($_SESSION['id']);
    if ($result !== false) {
        $fullname = $result['fullname'];
        $address = $result['address'];
        $phone = $result['phone'];
        $dob = $result['dob'];
        $password = $result['password'];


    }
    if (isset($_POST['update'])) {
        $response = update_profile($_POST, $password);
        if ($response === true) {
            echo "<div class='form'>
                      <h3>Successful</h3><br/>";
        } else{
            $errors = $response;
            foreach ($errors as $key => $error) {
                echo '<p style="color:red;">'.$error.'</p>';
            }
        }

        
        
    }
        
    


?>

<!-- content @s -->
<div class="nk-content nk-content-lg nk-content-fluid">
    <div class="container-xl wide-lg">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head">
                    <div class="nk-block-head-content">
                        <div class="nk-block-head-sub"><span>My Profile</span></div>
                        <h2 class="nk-block-title fw-normal">Account Info</h2>
                        <div class="nk-block-des">
                            <p>You have full control to manage your own account setting. <span class="text-primary"><em class="icon ni ni-info"></em></span></p>
                        </div>
                    </div>
                </div>
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
                            <h5 class="nk-block-title">Personal Information</h5>
                            <div class="nk-block-des">
                                <p>Basic info, like your name and address, that you use on Nio Platform.</p>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->
                    <div class="card card-bordered">
                        <div class="nk-data data-list">
                            <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                <div class="data-col">
                                    <span class="data-label">Full Name</span>
                                    <span class="data-value"><?php if (isset($fullname) && $fullname != 'null') {
                                        echo $fullname;
                                    }else{ ?>Not add yet <?php } ?></span>
                                </div>
                                <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                            </div>
                            <div class="data-item">
                                <div class="data-col">
                                    <span class="data-label">Email</span>
                                    <span class="data-value"><?php echo $email; ?></span>
                                </div>
                                <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span></div>
                            </div>
                            <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                <div class="data-col">
                                    <span class="data-label">Phone Number</span>
                                    <span class="data-value text-soft"><?php if (isset($phone) && $phone != 'null') {
                                        echo $phone;
                                    }else{ ?>Not add yet <?php } ?></span>
                                </div>
                                <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                            </div>
                            <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                <div class="data-col">
                                    <span class="data-label">Date of Birth</span>
                                    <span class="data-value"><?php if (isset($dob) && $dob != 'null') {
                                        echo $dob;
                                    }else{ ?>Not add yet <?php } ?></span>
                                </div>
                                <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                            </div>
                            <div class="data-item" data-toggle="modal" data-target="#profile-edit" data-tab-target="#address">
                                <div class="data-col">
                                    <span class="data-label">Address</span>
                                    <span class="data-value"><?php if (isset($address) && $address != 'null') {
                                        echo $address;
                                    }else{ echo 'Not add yet';}?></span>
                                </div>
                                <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                            </div>
                        </div><!-- .nk-data -->
                    </div><!-- .card -->

                    <!-- Another Section -->
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h5 class="nk-block-title">Personal Preferences</h5>
                            <div class="nk-block-des">
                                <p>Your personalized preference allows you best use.</p>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->
                    <div class="card card-bordered">
                        <div class="nk-data data-list">
                            <div class="data-item">
                                <div class="data-col">
                                    <span class="data-label">Language</span>
                                    <span class="data-value">English (United State)</span>
                                </div>
                                <div class="data-col data-col-end"><a href="#" data-toggle="modal" data-target="#profile-language" class="link link-primary">Change Language</a></div>
                            </div>
                            <div class="data-item">
                                <div class="data-col">
                                    <span class="data-label">Date Format</span>
                                    <span class="data-value">M d, YYYY</span>
                                </div>
                                <div class="data-col data-col-end"><a href="#" data-toggle="modal" data-target="#profile-language" class="link link-primary">Change</a></div>
                            </div>
                            <div class="data-item">
                                <div class="data-col">
                                    <span class="data-label">Timezone</span>
                                    <span class="data-value">Bangladesh (GMT +6)</span>
                                </div>
                                <div class="data-col data-col-end"><a href="#" data-toggle="modal" data-target="#profile-language" class="link link-primary">Change</a></div>
                            </div>
                        </div><!-- .nk-data -->
                    </div><!-- .card -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- content @e -->

<!-- @@ Profile Edit Modal @e -->
<form id="" action="profile.php#profile-edit" method="post">
<div class="modal fade" tabindex="-1" role="dialog" id="profile-edit">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-lg">
                <h5 class="title">Update Profile</h5>
                <ul class="nk-nav nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#personal">Personal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#passwordchange">Change Password</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#address">Address</a>
                    </li>
                </ul><!-- .nav-tabs -->
                <div class="tab-content">
                    <div class="tab-pane active" id="personal">
                        <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">Full Name</label>
                                        <input type="text" class="form-control form-control-lg" id="full-name" name="fullname" value="<?php if (isset($fullname) && $fullname != 'null') {
                                        echo $fullname;
                                    }?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="display-name">Display Name</label>
                                        <input type="text" class="form-control form-control-lg" id="display-name" name="username" value="<?php if (isset($username) && $username != 'null') {
                                        echo $username;
                                    }?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Phone Number</label>
                                        <input type="text" class="form-control form-control-lg" id="phone-no" name="phone" value="<?php if (isset($phone)&& $phone != 'null') {
                                        echo $phone;
                                    } ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="birth-day">Date of Birth</label>
                                        <input type="text" class="form-control form-control-lg date-picker" name="dob" id="birth-day" placeholder="Enter your name" value="<?php if (isset($dob) && $dob != 'null') {
                                        echo $dob;
                                    }?>">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="latest-sale" name="use_fullname">
                                        <label class="custom-control-label" for="latest-sale">Use full name to display </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <button class="btn btn-lg btn-primary" id="update" name="update" type="submit">Update Profile</button>
                                        </li>
                                        <li>
                                            <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                        </li>
                                    </ul>
                                </div>
                            <!-- scri -->
                        </div>
                    </div><!-- .tab-pane -->
                    <div class="tab-pane" id="passwordchange">
                        <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="password">Password</label>
                                        <input type="password" class="form-control form-control-lg" id="password" name="password"placeholder="Enter previous password">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="newpassword">New Password</label>
                                        <input type="password" class="form-control form-control-lg" id="newpassword" name="newpassword" placeholder="Enter new password">
                                    </div>
                                </div>
                                
                                
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <button class="btn btn-lg btn-primary" id="update" name="update" type="submit">Update Profile</button>
                                        </li>
                                        <li>
                                            <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                        </li>
                                    </ul>
                                </div>
                            <!-- scri -->
                        </div>
                    </div><!-- .tab-pane -->
                    
                    <div class="tab-pane" id="address">
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="address-l1">Address Line 1</label>
                                    <input type="text" class="form-control form-control-lg" id="address-l1" name="address" value="<?php if (isset($address) && $address !='null') {
                                        echo $address;
                                    }?>">
                                </div>
                            </div>
                            <!-- <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="address-l2">Address Line 2</label>
                                    <input type="text" class="form-control form-control-lg" id="address-l2" value="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="address-st">State</label>
                                    <input type="text" class="form-control form-control-lg" id="address-st" value="Kentucky">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="address-county">Country</label>
                                    <select class="form-select" id="address-county" data-ui="lg">
                                        <option>Canada</option>
                                        <option>United State</option>
                                        <option>United Kindom</option>
                                        <option>Australia</option>
                                        <option>India</option>
                                        <option>Bangladesh</option>
                                    </select>
                                </div>
                            </div> -->
                            <div class="col-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <button class="btn btn-lg btn-primary" id="update" name="update" type="submit">Update</button>
                                    <li>
                                        <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- .tab-pane -->
                    </form>
                    <script>
                        $(document).ready(function(){
                            $('#regForm').on('submit', function(event){
                                event.preventDefault();
                                if($('#email').val() != '' && $('#phone-no').val() != '' && $('#fullname').val() != ''&& $('#display-name').val() != '' && $('#birth-day').val() != ''&& $('#address').val() != ''){
                                    var form_data = $(this).serialize();
                                    $.ajax({
                                        url:"process.php",
                                        method:"POST",
                                        data:form_data,
                                        beforeSend: function() {
                                            $("#reg-roller").show();
                                        },
                                        success:function(data){
                                            $('#regForm')[0].reset();
                                            $('#successAlert').delay(5000).show(0); 
                                            $('#reg-roller').delay(5000).hide(0); 
                                            $('#successAlert').html('<p style="color: #285D23;">' + data + '</p>');
                                            $('#successAlert').fadeIn('slow', function() {
                                                $('#successAlert').delay(10000).fadeOut();
                                            });
                                        }
                                    });
                                }else{
                                    $("#warningAlert").css("display", "block");
                                    $('#warningAlert').fadeIn('slow', function() {
                                        $('#warningAlert').delay(2000).fadeOut();
                                    });
                                }
                            });
                        });
                    </script>
                </div><!-- .tab-content -->
            </div><!-- .modal-body -->
        </div><!-- .modal-content -->
    </div><!-- .modal-dialog -->
</div><!-- .modal -->
<?php } else{ ?>
    <h1>ERROR 404: PAGE NOT FOUND!</h1>
<?php } ?>

<?php include_once 'footer.php' ?>;