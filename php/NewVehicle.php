<?php
$db = new mysqli('smcse-stuproj00.city.ac.uk','adbt117','200012740','adbt117');
    if ($db->connect_error) {
        printf("Connection failed: %s/n" . $db->connect_error);
        exit();
    }

else{
          $VehicleRegistrationIDNumber = $_POST['vehiclereg'];
          $VehicleModel = $_POST['model'];
          $VehicleYear = $_POST['year'];
          $VehicleNumber = $_POST['number'];
          $VehicleEngineSerialNumber = $_POST['engineserialnum'];
          $VehicleChassisNumber = $_POST['chassisnumber'];
          $VehicleColour = $_POST['vehiclecolour'];
          $VehicleLastMOTDate = $_POST['lastmotdate'];
          $VehicleNextMOTDate = $_POST['nextmotdate'];
          $FK_CustomerCardID = $_POST['customerid'];
        
        $query_VehicleRegistrationIDNumber = "SELECT vehiclereg FROM GARITS_Vehicle WHERE vehiclereg ='$VehicleRegistrationIDNumber'";
        $reg_VehicleRegistrationIDNumber = mysql_query($db, $query_VehicleRegistrationIDNumber);
        
       /* $query_email = "SELECT email FROM UserDetails WHERE email ='$email'";
        $reg_email = mysql_query($db, $query_email);*/
        
        
       /* if(mysql_num_rows($reg_email) > 0){
            echo "<script language = 'javascript'>
            alert('.');
            window.location.href='https://smcse.city.ac.uk/student/abcd123/form.php';
            </script>";  }*/
       
         
        if(mysql_num_rows($reg_VehicleRegistrationIDNumber) > 0){
            echo "<script language = 'javascript'>
            alert('RegistrationID is already in the database.');
            window.location.href='https://smcse.city.ac.uk/student/abcd123/form.php';
            </script>";
        
        }
     

else{
        mysql_query($db, "INSERT INTO GARITS_Vehicle (vechiclereg, model, number, mobile, engineserialnum, chassisnumber, vehiclecolour, lastmotdate, nextmotdate, customerid)")
    }
?>