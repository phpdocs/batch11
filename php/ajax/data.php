<?php
    //Return the Country/State/City Data
    require_once("helper/db_helper.php");

    //return Country list
    if(isset($_REQUEST['country'])){
        $CountriesList="";
        OpenConn($conn);
        $SelectCountry="SELECT name,iso2 FROM countries";
        $result=$conn->query($SelectCountry);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $CountriesList.=$row['iso2'].":".$row['name'].",";
            }
            echo $CountriesList;
        }else{
            echo "No Record Found";
        }   
        CloseConn($conn);
    }

    //Select States
    if(isset($_REQUEST['state'])){
        $state=$_REQUEST['state'];
        $CountriesList="";
        OpenConn($conn);
        $SelectCountry="SELECT id,name FROM states where country_code='$state'";
        $result=$conn->query($SelectCountry);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $CountriesList.=$row['id'].":".$row['name'].",";
            }
            echo $CountriesList;
        }else{
            echo "No Record Found";
        }   
        CloseConn($conn);
    }

    //Select City
    if(isset($_REQUEST['city'])){
        $city=$_REQUEST['city'];
        $CountriesList="";
        OpenConn($conn);
        $SelectCountry="SELECT id,name FROM cities where state_id=$city";
        $result=$conn->query($SelectCountry);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $CountriesList.=$row['id'].":".$row['name'].",";
            }
            echo $CountriesList;
        }else{
            echo "No Record Found";
        }   
        CloseConn($conn);
    }



?>