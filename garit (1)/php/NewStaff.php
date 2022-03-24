<?php
//connecting to the database//
$db = new mysqli('smcse-stuproj00.city.ac.uk','adbt117','200012740','adbt117');
    if ($db->connect_error) {
        printf("Connection failed: %s/n" . $db->connect_error);
        exit();
    }else{
//initialising the the php variables and linking them to the html ids//
$STAFFID = $_POST['staffid'];
$NAME =$_POST['firstname'];
$SURNAME= $_POST['lastname'];
$ROLE = $_POST['email'];
$HOURLYRATE=$_POST['dob'];
$USERNAME  = $_POST['username'];
$PASSWORD =$_POST['psw'];//encryption of the password//


$query_STAFFID = "SELECT StaffID FROM GARITS_Staff WHERE StaffID ='$STAFFID'";
        $reg_STAFFID = mysql_query($db, $query_STAFFID);

$query_USERNAME= "SELECT StaffUsername FROM GARITS_Staff WHERE StaffUsername ='$USERNAME'";
    $reg_USERNAME = mysql_query($db, $query_USERNAME);



        if(mysql_num_rows($reg_STAFFID) > 0){
            echo "<script language = 'javascript'>
            alert('This StaffID is already in the database.');
            window.location.href='https://smcse.city.ac.uk/student/adbt117/form.php';
            </script>";


        }
        if(mysql_num_rows($reg_USERNAME) > 0){
            echo "<script language = 'javascript'>
            alert('This Username is already in the database.');
            window.location.href='https://smcse.city.ac.uk/student/adbt117/form.php';
            </script>";


        }
        

else{
        mysql_query($db, "INSERT INTO GARITS_Staff (StaffID, StaffName, StaffSurname, StaffRole, StaffHourlyRate, StaffUsername, StaffPassword) VALUES ('".$STAFFID."', '".$NAME."','".$SURNAME."', '".$ROLE."','".$HOURLYRATE."','".$USERNAME."','".$PASSWORD."')")
    }
    print_r ($info);
//the data inputed in the fields is inserted in the database// 

?>
