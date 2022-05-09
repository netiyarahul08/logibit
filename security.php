<?php 
include 'koneksi.php';
session_start();
$UserName = $_SESSION['UserName'];
// mengaktifkan session

// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if(isset($_SESSION['LogiStatus']) and ($_SESSION['LogiStatus'] =="login")){
	$login = mysqli_query($koneksi, "select * from userlist where StatusActive='1' and (UserName='$UserName')");
	while($y=mysqli_fetch_array($login)){
		$UserID=$y[0];
		$UserName=$y[1];
		$UserFullName=$y[2];
		$UserStatusActive=$y[5];
		$UserCreDate=$y[4];
		$UserLastLogin=$y[7];
		$UserTerminal=$_SESSION['LogiTerminal'];
			$tml = mysqli_query($koneksi, "select * from masterterminal where TerminalID='$UserTerminal' and TerminalStatus='1'");
			if($yy=mysqli_fetch_array($tml)){
				$UserTerminalCode=$yy[1];
				$UserTerminalName=$yy[2];
				$UserTerminalCompanyID=$yy[5];
			}
			
			$com = mysqli_query($koneksi, "select * from mastercompany where CompanyID='$UserTerminalCompanyID' and Status='1'");
			if($yy=mysqli_fetch_array($com)){
				$UserCompanyCode=$yy[1];
				$UserCompanyName=$yy[2];
			}
	
	
		//$UserName=$y[1];
		
	}


}
else
	{
	header("location:index.php?s=n");
}

// menampilkan pesan selamat datang
// echo "Hai, selamat datang ". $_SESSION['email'];
?>