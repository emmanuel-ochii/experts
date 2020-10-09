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

                            </div>
                            <div class="nk-block-des">
                                <p>At a glance summary of your dashboard. Have fun!</p>
                            </div>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->

                <div class="nk-block">
                    <div class="row gy-gs">
                        <div class="col-md-6 col-lg-4">
                            <div class="nk-wg-card is-dark card card-bordered">
                                <div class="card-inner">
                                    <div class="nk-iv-wg2">
                                        <div class="nk-iv-wg2-title">
                                            <h6 class="title">Total User <em class="icon ni ni-info"></em></h6>
                                        </div>
                                        <div class="nk-iv-wg2-text">
                                            <div class="nk-iv-wg2-amount"> $105.94
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .card -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .nk-block -->
                <div class="nk-block nk-block-lg">
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h4 class="nk-block-title text-center">Users Listing</h4>

                        </div>
                    </div>
                    <div class="card card-bordered card-preview">
                        <div class="card-inner">
                            <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                                <thead>
                                    <tr class="nk-tb-item nk-tb-head">

                                        <th class="nk-tb-col"><span class="sub-text">User ID</span></th>
                                        <th class="nk-tb-col tb-col-mb"><span class="sub-text">Name</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Email</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Total balance</span></th>
                                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Status</span></th>
                                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Action</span></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $servername = "localhost";
                                    $username = "root";
                                    $password = "";
                                    $dbname = "Abel_1";

                                    // Create connection
                                    $conn = mysqli_connect($servername, $username, $password, $dbname);
                                    // Check connection
                                    if (!$conn) {
                                        die("Connection failed: " . mysqli_connect_error());
                                    }

                                    $sql = "SELECT * FROM users";
                                    $result = mysqli_query($conn, $sql);

                                    ?>


                                    <?php


                                    if (mysqli_num_rows($result) > 0) {
                                        // output data of each row
                                        while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                            <tr class="nk-tb-item">

                                                <td class="nk-tb-col">
                                                    <div class="user-card">

                                                        <div class="user-info">
                                                            <span class="tb-lead"> <?php echo $row["id"] ?> <span class="dot dot-success d-md-none ml-1"></span></span>

                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="nk-tb-col tb-col-mb">
                                                    <span class="tb-amount"> <?php echo $row["fullname"] ?> </span>
                                                </td>
                                                <td class="nk-tb-col tb-col-md">
                                                    <span> <?php echo $row["email"] ?></span>
                                                </td>
                                                <td class="nk-tb-col tb-col-md">
                                                    <span>500</span>
                                                </td>

                                                <td class="nk-tb-col tb-col-md">
                                                    <span class="tb-status text-info">Active</span>
                                                </td>
                                                <td class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-1">
                                                        <li class="nk-tb-action-hidden">
                                                            <a href="auth/users.php?id= <?php echo $row["id"] ?> " class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                <em class="icon ni ni-opt-dot-alt"></em>

                                                        </li>

                                                        <li class="nk-tb-action-hidden">
                                                            <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                <em class="icon ni ni-user-cross"></em>
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </td>
                                            </tr><!-- .nk-tb-item  -->
                                    <?php
                                           
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div><!-- .card-preview -->
                </div> <!-- nk-block -->


            </div>
        </div>
    </div>
</div>
<!-- content @e -->


<?php include_once 'footer.php' ?>;