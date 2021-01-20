<?php require_once("template/header.php"); ?>
<?php require_once("helper/user_helper.php"); ?>

    <!--Container Area Start-->
    <div class="container-fluid">
        <div class="row my-2">
            <div class="col-12 text-center">
                <h2>User Management</h2>
                <?php if(!empty($Message)){ ?>
                    <div class="alert alert-info" role="alert">
                        <?php echo $Message; ?>
                    </div>
                <?php } ?>
            </div>
        </div>
        <!--User Add Form Start-->
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                <input type="hidden" name="txtUserID" value="<?php echo $txtUserID; ?>" />
            <div class="row justify-content-center mb-2">
                <div class="col-1 my-auto">
                    <h6>User Name</h6>
                </div>
                <div class="col-2">
                    <input type="text" name="txtUserName" value="<?php echo $txtUserName; ?>" required  class="form-control" />
                </div>
            </div>
            <div class="row justify-content-center mb-2">
                <div class="col-1 my-auto">
                    <h6>Password</h6>
                </div>
                <div class="col-2">
                    <input type="password" name="txtPassword" required class="form-control" />
                </div>
            </div>
            <div class="row justify-content-center mb-2">
                <div class="col-1 my-auto">
                    <h6>Re-type Password</h6>
                </div>
                <div class="col-2">
                    <input type="password" name="txtRePassword" required  class="form-control" />
                </div>
            </div>
            <div class="row justify-content-center mb-2">
                <div class="col-1 my-auto">
                    <h6>Enabled?</h6>
                </div>
                <div class="col-2 my-auto">
                    <input type="checkbox" <?php echo $txtED==1?'checked':''; ?> name="txtED" class="form-control" />
                </div>
            </div>
            <div class="row justify-content-center my-2">
                <div class="col-1 text-right">
                    <input type="reset" value="Clear" class="btn btn-danger" />
                </div>
                <div class="col-1 text-left">
                    <input type="submit" name="btnUserSubmit" value="Save" class="btn btn-primary" />
                </div> 
            </div>
        </form>
        <!--User Add Form End-->

        <!--Create Grid for Users Start-->
        <div class="row justify-content-center">
            <div class="col-12 col-sm-12 col-md-8 col-xl-8 col-lg-8">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>User Name</th>
                            <th>Enable/Disable</th>
                            <th>Creation Date</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        if($result->num_rows>0){
                            while($row=$result->fetch_assoc()){
                    ?>
                        <tr>
                            <td scope="row"><?php echo $row['User_ID']; ?></td>
                            <td><?php echo $row['User_Name']; ?></td>
                            <td><?php echo $row['User_ED']==1?'Yes':'No'; ?></td>
                            <td><?php echo $row['User_Creation']; ?></td>
                            <td><a href="?Ops=Edit&UserID=<?php echo $row['User_ID'];?>" class="btn-info btn">Edit</a></td>
                            <td><a href="?Ops=Delete&UserID=<?php echo $row['User_ID'];?>" class="btn-danger btn">Delete</a></td>
                        </tr>
                        <?php 
                            }
                         }
                        else {
                            echo "<tr><td colspan='5'>No Records Found</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
                
            </div>
        </div>
    <!--Create Grid for Users End
    </div>
    <!--Container Area End-->
<?php require_once("template/footer.php"); ?>