<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
   require_once("koneksi.php");
?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>smmrpl.web.id</title>
  <link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="loginv2.css">  
</head>
<body>
<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "<script>alert(Login gagal! username dan password salah!);
			window.location.href='login.php';
			</script>";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}
	}
	?> 
<form class="login" action="proseslogin.php" method="post">
  <input name="username" type="text" placeholder="username"/>
  <input name="password"type="password" placeholder="Password"/>
	  <button>Sign In</button>
</form>
  </body>