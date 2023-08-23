<?php 
require('dbconnection.php');

//delete
if(isset($_GET['delid']))
{
$rid=intval($_GET['delid']);
$sql=mysqli_query($con,"delete from tblusers where ID=$rid");
echo "<script>alert('Data deleted');</script>"; 
echo "<script>window.location.href = 'index.php'</script>";     
}

//edit
if(isset($_POST['submit']))
  {
  	$eid=$_GET['editid'];
  	//Getting Post Values
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $contno=$_POST['contactno'];
    $email=$_POST['email'];
    $add=$_POST['address'];

     $query=mysqli_query($con, "update  tblusers set FirstName='$fname',LastName='$lname', MobileNumber='$contno', Email='$email', Address='$add' where ID='$eid'");
     
    if ($query) {
    echo "<script>alert('You have successfully update the data');</script>";
    echo "<script type='text/javascript'> document.location ='index.php'; </script>";
  }
  else
    {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}

//create
if(isset($_POST['submit']))
  {
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $contno=$_POST['contactno'];
    $email=$_POST['email'];
    $add=$_POST['address'];

     $query=mysqli_query($con, "insert into tblusers(FirstName,LastName, MobileNumber, Email, Address) value('$fname','$lname', '$contno', '$email', '$add' )");
    if ($query) {
    echo "<script>alert('You have successfully inserted the data');</script>";
    echo "<script type='text/javascript'> document.location ='index.php'; </script>";
  }
  else
    {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}

?>










<?php  
//session_start();
//require "connection.php";


	//$firstname = mysqli_real_escape_string($con, ucwords(strtolower($_POST["fname"])));


//	if (!empty($firstname)&&!empty($lastname)&&!empty($mobile)&&!empty($pwd)&&!empty($pwd_confirm)&&!empty($terms)) {
			
//			if ($add_user_account && $add_employee_info) {
//			echo '<script>window.location.href="add_employee.php?msg=add-user-scc"</script>';
//			}
//	}

//Sign in
// if (isset($_POST["login_user"])) {
//	$email_address = mysqli_real_escape_string($con, $_POST["email"]);
//	$user_password = mysqli_real_escape_string($con, $_POST["password"]);
//	$password_encry = md5($user_password);
//	if (!empty($email_address)&&!empty($user_password)) {
//		$auth_user_account = mysqli_query($con, "SELECT * FROM registration WHERE user_email='$email_address' AND user_pwd='$password_encry'");
//		if (mysqli_num_rows($auth_user_account)>0) {
//			$row_user_auth = mysqli_fetch_assoc($auth_user_account);
//			$login_id = uniqid();
//			$add_login = mysqli_query($con, "INSERT INTO logins_activity(user_email, user_autoid, user_login) VALUES ('$email_address', '$login_id', CURRENT_TIMESTAMP)");
//	}}}

?>
