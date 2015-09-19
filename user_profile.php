<!-- BEIGIN: INCLUDE header -->
<?php require_once('header.php') ?>
<?php require_once('navigation.php') ?>
<!-- Modal for edit user -->
<?php require_once('edit_user_modal.php') ?>
<!-- END: include Header -->

<!-- BEGIN: CONTENT -->
<div class="container">
    <!-- BEGIN: above content info -->
    <div class="row">
        <!-- Load side bar -->
        <div class="col-md-4">
            <?php require_once('left_side_bar.php') ?>
        </div>
        <!-- END load side bar -->

        <!-- BEGIN: right content -->
        <div class="col-md-8">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <!-- Title -->
                  git   <h3 class="panel-title"><i class="glyphicon glyphicon-user"></i>&nbsp;Account details</h3>
                </div>
                <!-- CONTENT -->
                <div class="panel-body">
                    <!-- Left info : image, avatar -->
                    <div class="col-md-4">
                        <img src="#" alt="avatar" class="img-responsive img-circle">
                    </div>
                    <!-- Right info: more about: name, day... -->
                    <div class="col-md-8">
                        <p><strong>Account: </strong>tuankatty</p>
                        <p><strong>Email: </strong>hoangtuanbka93@gmail.com</p>
                        <p><strong>Join day: </strong>04/12/1993</p>
                        <a href="#" data-toggle="modal" data-target="#edit_user" title="">Edit</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END right content -->
    </div>
    <!-- END: above content info -->
</div>
</div>
<!-- END: CONTENT -->

<!-- BEGIN: FOOTER -->
<?php require_once('footer.php') ?>
<!-- END: FOOTER