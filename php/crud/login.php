<?php require_once("template/header.php"); ?>
    <div class="container-fluid">

        <div class="row justify-content-center">
            <div class="col-12 col-sm-12 col-md-8 col-lg-4 col-xl-4">
                <div class="card " style="width: 80%">
                    <img class="card-img-top" style="width:99%" src="https://icon-library.com/images/google-login-icon/google-login-icon-0.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Login</h5>
                    <div class="row justify-content-center mt-3">
                        <div class="col-6 text-right mt-auto">
                            <h5>UserName</h5>
                        </div>
                        <div class="col-6 text-left">
                            <input type="text" name="txtUserName" required class="form-control" />
                        </div>
                    </div>
                    <div class="row justify-content-center mt-3">
                        <div class="col-6 text-right mt-auto">
                            <h5>Password</h5>
                        </div>
                        <div class="col-6 text-left">
                            <input type="password" name="txtPassword" required class="form-control" />
                        </div>
                    </div>
                    <div class="row justify-content-center mt-3">
                        <div class="col-6 text-right mt-auto">
                            <input type="Reset" value="Clear" class="btn btn-danger" />
                        </div>
                        <div class="col-6 text-left">
                        <input type="submit" value="Login" class="btn btn-primary" />
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
<?php require_once("template/footer.php"); ?>