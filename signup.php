<!-- BEIGIN: INCLUDE header -->
<?php
require_once ('header.php') ?>
<?php
require_once ('navigation.php') ?>
<!-- END: include Header -->

<!-- BEGIN: CONTENT -->
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <?php require_once('left_side_bar.php'); ?>
        </div>
        <div class="col-md-8">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <!-- Title -->
                    <h3 class="panel-title">Sign up</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="#">
                        <div class="form-group">
                            <label for="username" class="control-label">Account:</label>
                            <!-- Input: Account -->
                            <input type="text" name="username" class="form-control" id="username" placeholder="" required="required"/>
                        </div>
                        <div class="form-group">
                            <!-- Input: password -->
                            <label for="pass" class="control-label">Password:</label>
                            <input type="password" class="form-control" name="pass" id="pass" placeholder="" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email </label>
                            <!-- Input Email -->
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="" name="email" required="required"/>
                        </div>
                        <!-- Input: Submit -->
                        <button type="submit" class="btn btn-default pull-right" name="submit">Sign up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: CONTENT -->

<!-- BEGIN: FOOTER -->
<?php
require_once ('footer.php') ?>
<!-- END: FOOTER