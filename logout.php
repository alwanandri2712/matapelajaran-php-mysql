<?php
   session_start();
   session_destroy();
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>logout</title>  
</head>
<body>
<div align="center">
  <div class="alert alert-secondary" role="alert">
  ANDA BERHASIL LOGOUT
</div>
</br>
</br>
  <a class="btn btn-outline-success" href="loginv2.php" role="button">login</a>
  </br>
  </br>
  </br>
  <a class="btn btn-primary" href="../index.php" role="button">Home</a>
</div>
</body>