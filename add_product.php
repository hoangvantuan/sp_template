<!-- BEIGIN: INCLUDE header -->
<?php require_once('header.php') ?>
<?php require_once('navigation.php') ?>
<!-- END: include Header -->
<!-- BEGIN CONTENT -->
<div class="container">
    <div class="panel panel-info">
        <div class="panel-heading">
            <!-- title -->
            <h3 class="panel-title">Add Product</h3>
        </div>
        <div class="panel-body">
            <form action="" method="POST" role="form" enctype="multipart/form-data">
                <div class="form-group">
                    <!-- Upload image product -->
                    <label for="uploadImage">Image</label>
                    <input type="file" name="uploadImage" value="uploadImage" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <!-- Enter Product name -->
                    <label for="productName">Product name:</label>
                    <input type="text" name="productName" value="" placeholder="" required="required" class="form-control">
                </div>
                <div class="form-group">
                    <!-- Select category of product -->
                    <label for="category">Category:</label><br>
                    <select name="category">
                        <option value="" selected>category 1</option>
                        <option value="">category 2</option>
                        <option value="">category 3</option>
                    </select>
                </div>
                <div class="form-group">
                    <!-- Price of product -->
                    <label for="price">About price:</label><br>
                    <input type="number" name="price" required value="" placeholder="">
                </div>
                <div class="form-group">
                    <!-- Description of product -->
                    <label for="description">More about product:</label><br>
                    <textarea name="description" cols="70" rows="10"></textarea>
                </div>
                <button type="reset" class="btn btn-warning pull-right">Reset All</button>
                <button type="submit" class="btn btn-primary pull-right">Add product</button>
            </form>
        </div>
    </div>
</div>
<!-- END CONTENT -->
<!-- BEGIN: FOOTER -->
<?php require_once('footer.php') ?>
<!-- END: FOOTER