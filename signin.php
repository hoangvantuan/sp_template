<!-- BEIGIN: INCLUDE header -->
<?php require_once('header.php') ?>
<?php require_once('navigation.php') ?>
<!-- END: include Header -->

<!-- BEGIN: CONTENT -->
<div class="container">
    <div class="row">
        <!-- BEGIN Left - side bar -->
        <div class="col-md-4">
            <?php require_once('left_side_bar.php') ?>
        </div>
        <!-- END Left-side-bar -->

        <!-- BEGIN: panel -->
        <div class="col-md-8">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <!-- title -->
                    <h3 class="panel-title">Sign in</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="#">
                        <div class="form-group">
                            <label for="username" class="control-label">Account:</label>
                            <!-- Input: account -->
                            <input type="text" name="username" class="form-control" id="username" required="required" placehholder=""/>
                        </div>
                        <div class="form-group">
                            <!-- Input : password -->
                            <label for="pass" class="control-label">Password:</label>
                            <input type="password" class="form-control" name="pass" id="pass" required="required" placehholder=""/>
                        </div>
                        <!-- Input: Submit -->
                        <button type="submit" class="btn btn-default pull-right" name="submit">Sign in</button>
                    </form>
                </div>
                <!-- Link if dont have account -->
                <p class="text-center">
                <em>Don't have account Sign up <a href="#" title="">Here</a></em>
                </p>
            </div>
        </div>
        <!-- END Panel -->
    </div>
</div>
<!-- END CONTENT -->

<!-- BEGIN: FOOTER -->
<?php require_once('footer.php') ?>
<!-- END: FOOTER