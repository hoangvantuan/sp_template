<!-- BEIGIN: INCLUDE header -->
<?php require_once('header.php') ?>
<?php require_once('navigation.php') ?>
<!-- END: include Header -->

<!-- BEGIN: CONTENT -->
<div class="container">
    <div class="row">
        <!-- Load side bar category -->
        <div class="col-md-4">
            <?php require_once('left_side_bar.php') ?>
        </div>
        <!-- END load side bar -->
        <!-- BEGIN: Right content -->
        <div class="col-md-8">
            <!-- BEGIN info of 1 product -->
            <div class="row">
                <div class="col-md-3">
                    <div class="thumbnail">
                        <img src="#" alt="product" class="img-responsive">
                        <div class="caption">
                            <p>this is description</p>
                            <p><a href="#" class="btn btn-default" role="button">Swap</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: info of 1 product -->
            <!-- BEGIN Pagination -->
            <div class="row text-center">
                <nav>
                    <ul class="pagination">
                        <li>
                            <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- END Pagination -->
            </div>
        </div>
        <!-- END: Right content -->
    </div>
</div>
<!-- END: CONTENT -->
<!-- BEGIN: FOOTER -->
<?php require_once('footer.php') ?>
<!-- END: FOOTER