<?php



include_once 'connectdb.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

/* all usernames and passwords are selected from the database and compared to the info in the login form to see if there is a match*/

$query = "SELECT * FROM GARITS_Staff WHERE StaffUsername = '$username' AND StaffPassword = '$password'";
$result = mysqli_query($db, $query);

/*if the username or password does not match to the database you will be redirected to contact.html and an error message will pop up*/

if ($result->num_rows == 0) {
    echo "<script language = 'javascript'>
            alert('Invalid Username or Password.');
            window.location.href='Login.html';
            </script>";
}

/*if login is succesfull an message logged in is displayed and you are taken to booking.html*/

else{
    echo   "<script language = 'javascript'>
        alert('Logged in.');
            window.location.href='booking.html';
            </script>";
}