<?php
    /**
     *  Topic: Include/Require Functions
     *  Author: Muhammad Afzal
     *  Class: e-Rozgaar Batch#11
     *  Date: 11th Jan 2021
     */
    require_once("helper.php");
  ?>
  <table border=1 cellpadding="5" cellspacing="0">
      <tr>
          <th>Roll#</th>
          <th>Name</th>
          <th>Intro To CS</th>
          <th>GPA</th>
          <th>DataBase</th>
          <th>GPA</th>
          <th>Networks</th>
          <th>GPA</th>
          <th>Crypto</th>
          <th>GPA</th>
      </tr>
      <?php foreach($result as $rollnumber=>$resultarray){ ?>
      <tr>
        <td><?php echo $rollnumber; ?></td>
        <td><?php echo $resultarray["Name"];?></td>
        <td><?php echo $resultarray["Intro to CS"];?></td>
        <td><?php echo CalcGPA($resultarray["Intro to CS"]);?></td>
        <td><?php echo $resultarray["DataBase"];?></td>
        <td><?php echo CalcGPA($resultarray["DataBase"]);?></td>
        <td><?php echo $resultarray["Networks"];?></td>
        <td><?php echo CalcGPA($resultarray["Networks"]);?></td>
        <td><?php echo $resultarray["Crypto"];?></td>
        <td><?php echo CalcGPA($resultarray["Crypto"]); ?></td>
      </tr>
      <?php }?>