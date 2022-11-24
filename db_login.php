
<?php
//database connectivity
session_start();
$db = mysqli_connect("localhost","root","","db_evplug");

//connecting html form and php
if(isset($_POST['login'])){
	$email = $_POST['loginEmail'];
	$pwd = $_POST['loginPassword'];
	$pwd1 = md5($pwd);//encyrpting password

//fetching data from database
$query = "select * from tbl_login where email = '$email'"; 
$result = mysqli_query($db,$query);

//fetching username and password from query as object
$row = mysqli_fetch_assoc($result);
$loginId = $row['loginId'];

//checking password in database
if($row['type']==0){
	if($row['password']==$pwd1){
		unset($_SESSION['username']);
		$_SESSION['username']="Admin";
		$_SESSION['id']=$loginId;
		$_SESSION['email']=$email;
		 //echo"<script Type='text/javascript'>alert('Login Success')</script>";
		 echo"<script>window.location.href='http://localhost/NEW EVPLUG/Admin/app/index.php'</script>";
	}
	else{
		 echo"<script Type='text/javascript'>alert('Oops!...Login Failed')</script>";
		 echo"<script>window.location.href='http://localhost/NEW EVPLUG/index.html'</script>";
	}
}
else if($row['type']==1){
	//Add when Manager scenario added into project
	if($row['password']==$pwd1){
			unset($_SESSION['username']);
			$query2 = "select * from tbl_manager where loginId = '$loginId'";
			$result2 = mysqli_query($db,$query2);
			$row2 = mysqli_fetch_assoc($result2);
			$_SESSION['username']=$row2['managerName']; //Need to concatenate last name
			$_SESSION['id']=$loginId;
			$_SESSION['email']=$email;
			 // echo"<script Type='text/javascript'>alert('Login Success')</script>";
			 echo"<script>window.location.href='http://localhost/NEW EVPLUG/Manager/index.php'</script>"; //Add user home page location
		}
		else{
			 echo"<script Type='text/javascript'>alert('Oops!...Login Failed')</script>";
			 echo"<script>window.location.href='http://localhost/NEW EVPLUG/index.html'</script>";
		}
} 
else{
	if($row['type']==2){
		if($row['password']==$pwd1){
			$query1 = "select * from tbl_user where loginId = '$loginId'";
			$result1 = mysqli_query($db,$query1);
			$row1 = mysqli_fetch_assoc($result1);
			$_SESSION['username']=$row1['userFirstName']; //Need to concatenate last name
			$_SESSION['id']=$loginId;
			$_SESSION['email']=$email;
			 echo"<script Type='text/javascript'>alert('Login Success')</script>";
			 echo"<script>window.location.href='http://localhost/NEW EVPLUG/Customer/index.php'</script>"; //Add user home page location
		}
		else{
			 echo"<script Type='text/javascript'>alert('Oops!...Login Failed')</script>";
			 echo"<script>window.location.href='http://localhost/NEW EVPLUG/index.html'</script>";
		}
	}
}

}

?>