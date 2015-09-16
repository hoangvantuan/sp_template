<div class="container">
    <div class="row">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">Sign in</h3>
            </div>
            <div class="panel-body">
                <div class="col-md-4 col-md-offset-3">
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
                        <button type="submit" class="btn btn-default" name="submit">Sign in</button>
                    </form>
                </div>
            </div>
            <!-- Link if dont have account -->
            <p class="text-center">
            <em>Don't have account Sign up <a href="#" title="">Here</a></em>
            </p>
        </div>
    </div>
</div>