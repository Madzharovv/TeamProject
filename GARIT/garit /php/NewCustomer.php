<?php
//connecting to the database//
  $db_host = '127.0.0.1';
  $db_user = 'root';
  $db_password = 'root';
  $db_db = 'information_schema';
  $db_port = 8889;

  $mysqli = new mysqli(
    $db_host,
    $db_user,
    $db_password,
    $db_db,
	$db_port
  );
	
  if ($mysqli->connect_error) {
    echo 'Errno: '.$mysqli->connect_errno;
    echo '<br>';
    echo 'Error: '.$mysqli->connect_error;
    exit();
  }

  echo 'Success: A proper connection to MySQL was made.';
  echo '<br>';
  echo 'Host information: '.$mysqli->host_info;
  echo '<br>';
  echo 'Protocol version: '.$mysqli->protocol_version;

  $mysqli->close();

    if ($db->connect_error) {
        printf("Connection failed: %s/n" . $db->connect_error);
        exit();
    }else{
//initialising the the php variables and linking them to the html ids//
$CARDID = $_POST['cardid'];
$NAME =$_POST['fullname'];
$CUSTOMERTYPE =$_POST['customertype'];
$MOBILENUMBER= $_POST['mobilenumber'];
$EMAIL = $_POST['email'];
$POSTCODE=$_POST['postcode'];
$HOUSENUMBER = $_POST['housenumber'];
$CARDISSUEDATE =$_POST['cardissuedate'];
$CUSTOMERFAXNUMBER= $_POST['customerfaxnumber'];


$query_CARDID = "SELECT CustomerCardID FROM GARITS_Customer WHERE CustomerCardID ='$CARDID'";
        $reg_CARDID = mysql_query($db, $query_CARDID);

$query_MOBILENUMBER= "SELECT CustomerMobileNumber FROM GARITS_Customer WHERE CustomerMobileNumber ='$MOBILENUMBER'";
    $reg_MOBILENUMBER = mysql_query($db, $query_MOBILENUMBER);

$query_CUSTOMERFAXNUMBER = "SELECT CustomerFaxNumber FROM GARITS_Customer WHERE CustomerFaxNumber ='$CUSTOMERFAXNUMBER'";
    $reg_CUSTOMERFAXNUMBER = mysql_query($db, $query_CUSTOMERFAXNUMBER);

        if(mysql_num_rows($reg_CARDID) > 0){
            echo "<script language = 'javascript'>
            alert('This Customer Card already in the database.');
            window.location.href='https://smcse.city.ac.uk/student/adbt117/form.php';
            </script>";


        }
        if(mysql_num_rows($reg_MOBILENUMBER) > 0){
            echo "<script language = 'javascript'>
            alert('This Mobile Number is already in the database.');
            window.location.href='https://smcse.city.ac.uk/student/adbt117/form.php';
            </script>";


        }
        if(mysql_num_rows($reg_CUSTOMERFAXNUMBER) > 0){
            echo "<script language = 'javascript'>
            alert('This Customer fax number is  already in the database.');
            window.location.href='https://smcse.city.ac.uk/student/adbt117/form.php';
            </script>";


        }
else{
        mysql_query($db, "INSERT INTO GARITS_Customer (CustomerCardID,CustomerName,CustomerMobileNumber,CustomerEmail,CustomerPostCode,CustomerHouseNumber,CustomerCardIssueDate,CustomerFaxNumber) VALUES ('".$CUSTOMERCARDID."', '".$NAME."','".$MOBILENUMBER."', '".$EMAIL."','".$POSTCODE."','".$HOUSENUMBER."' ,'".$CARDISSUEDATE."','".$CUSTOMERFAX."')"
    }
//the data inputed in the fields is inserted in the database// 



?>
