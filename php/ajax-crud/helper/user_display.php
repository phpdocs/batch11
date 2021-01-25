<?php
    require_once("auth_helper.php");
    require_once("user_helper.php");
?>
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
                            <td><a href="#?Ops=Edit&UserID=<?php echo $row['User_ID'];?>" class="btn-info btn">Edit</a></td>
                            <td><button class="btn btn-danger btn-delete" xmltag="UserID" xmlvalue="<?php echo $row['User_ID'];?>">Delete</button></td>
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
            <script>
                $(document).ready(function(){
                    $(".btn-delete").click(function(){
                            var txtUserID=$(this).attr("xmlvalue");
                            $.post("helper/user_helper.php",
                            {
                                Ops:"Delete",
                                UserID:txtUserID
                            },
                            function(data,status){
                                if(status=="success"){
                                    $("#UsersMessage").text(data);
                                }
                            });
                    });
                });
            </script>
                