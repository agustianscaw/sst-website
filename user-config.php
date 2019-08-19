<?php	
session_start();
	include 'db.php';
	
	if (isset($_POST['l-action']) == 'submit-login')
	{ 	
		$email = $_POST['lemail'];
		$password = $_POST['lpassword'];
		$result = $koneksi->query("SELECT * FROM user WHERE email = '$email' and password = '$password'");

		if($result->num_rows)
		{
			while($row = $result->fetch_object())
				if($row->email == $email && $row->password == $password)
				{
					$_SESSION['username'] = $row->username;
					$_SESSION['user_type'] = $row->user_type;
					$_SESSION['nama'] = $row->nama;
					$_SESSION['email'] = $row->email;
					$_SESSION['password'] = $row->password;
					$_SESSION['telepon'] = $row->telepon;
					
					echo 'sukses';
				}	
		}
		else
		{
           echo "gagal";
		}
	}

	
	else if (isset($_GET['action']) == 'logOut')
	{
		unset($_SESSION['username']);
		unset($_SESSION['user_type']);
		session_destroy();
		header("Location: index.php");
	}
		

	else if (isset($_POST['r-action']) == 'submit-register'){

		$nama = $_POST['rnama'];
		$username = $_POST['rusername'];
		$email = $_POST['remail'];
		$pass = $_POST['rpassword'];
		$telepon = $_POST['rtelepon'];
		$type = $_POST['ruser-type'];
		$sql = "INSERT INTO user
				VALUES('','$nama','$username','$email','$pass','$telepon', '$type')";
		$hasil = $koneksi->query($sql);
		
		if ($hasil==true)
		{
			echo 'sukses';
		}
		else
		{
			echo 'gagal';
		}
	}


 ?>