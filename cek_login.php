<?php 
include 'koneksi.php';

$UserName = $_POST['UserName'];
$UserPass = $_POST['UserPass'];

$login = mysqli_query($koneksi, "select * from userlist where StatusActive='1' and (UserName='$UserName' and UserPass='$UserPass')");

$cek = mysqli_num_rows($login);

if($cek > 0){
	$updatelogin = mysqli_query($koneksi, "update userlist set lastlogin=NOW() where UserName='$UserName'");
	$login = mysqli_query($koneksi, "select * from userlist where StatusActive='1' and (UserName='$UserName' and UserPass='$UserPass')");
	while($y=mysqli_fetch_array($login)){

		session_start();
		$_SESSION['UserName'] = $UserName;
		$_SESSION['LogiStatus'] = "login";
		$_SESSION['LogiTerminal'] = $y[6];

		$UserID=$y[0];
		$UserName=$y[1];
		$UserFullName=$y[2];
		$UserStatusActive=$y[5];
		$UserTerminal=$_SESSION['LogiTerminal'];
		$UserCreDate=$y[4];
		$UserLastLogin=$y[7];
		$tml = mysqli_query($koneksi, "select * from masterterminal where TerminalID='$UserTerminal' and TerminalStatus='1'");
		if($yy=mysqli_fetch_array($tml)){
			$UserTerminalCode=$yy[1];
			$UserTerminalName=$yy[2];
			$UserTerminalCompanyID=$yy[5];
		}


		$com = mysqli_query($koneksi, "select * from mastercompany where CompanyID='$UserTerminalCompanyID' and TerminalStatus='1'");
			while($yy=mysqli_fetch_array($com)){
				$UserCompanyCode=$yy[1];
				$UserCompanyName=$yy[2];
			}

		header("location:menu.php");
		//$UserName=$y[1];
		
	}
	//header("location:admin/transaksi.php");
	//echo "<script type='text/javascript'>";
	//echo "window.location = 'menu.php';";
	//echo "alert('Hello! Welcome to Administrator Webpage.')";
	//echo "</script>";
}
else{
	//header("location:index.php#failed");
	echo "<script type='text/javascript'>";
	echo "window.location = 'index.php?s=f';";
	echo "alert('Incorrect Password! Try to Put the right Password, Please.')";
	echo "</script>";
}
?>