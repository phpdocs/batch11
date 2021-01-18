<?php
    /**
     *  Topic: PHP/MySQL Delete
     *  Author: Muhammad Afzal
     *  Class: e-Rozgaar Batch#11
     *  Date: 18th Jan 2021
     */

    require_once("db_helper.php");

    //Open Connection
    OpenConn($conn);

    //Select Query
    $SelectQuery="SELECT User_ID,User_Name,User_ED,User_Creation FROM users";
    $result=$conn->query($SelectQuery);

    if($result->num_rows>0){
?>
    <table border="1" cellpadding="5" cellspacing="0">
            <tr>
                <th>ID#</th>
                <th>User Name</th>
                <th>User E/D</th>
                <th>Creation Date</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
<?php
        while($row=$result->fetch_assoc()){
?>
    <tr>
            <td><?php echo $row['User_ID']; ?></td>
            <td><?php echo $row['User_Name']; ?></td>
            <td><?php echo $row['User_ED']; ?></td>
            <td><?php echo $row['User_Creation']; ?></td>
            <td><a href="crud.php?User_ID=<?php echo $row['User_ID']; ?>&Ops=Edit">Edit</a></td>
            <td><a href="crud.php?User_ID=<?php echo $row['User_ID']; ?>&Ops=Delete">Delete</a></td>
    </tr>
<?php
    }
    echo "</table>";
    }else{
        echo "There is No Record.";
    }

    //Close Connection
    CloseConn($conn);
?>