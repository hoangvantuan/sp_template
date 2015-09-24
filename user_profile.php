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
        <!-- BEGIN: right content -->
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <!-- Title -->
                    <h3 class="panel-title"><i class="glyphicon glyphicon-user"></i>&nbsp;Account details</h3>
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
                        <p><strong>Full name: </strong>Hoang Van Tuan</p>
                        <p><strong>Address: </strong>Address here</p>
                        <p><strong>Email: </strong>hoangtuanbka93@gmail.com</p>
                        <p><strong>Join day: </strong>04/12/1993</p>
                        <p><strong>More about </strong></p>
                        <textarea name="info" cols="50" rows="10" disabled="true"></textarea><br>
                        <a href="#" data-toggle="modal" class="" data-target="#edit_user" title="">Edit</a>
                    </div>
                </div>
                <!-- End content -->
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