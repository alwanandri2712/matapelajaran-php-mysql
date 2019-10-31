<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:loginv2.php'); 
} else { 
   $username = $_SESSION['username']; 
}
?>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MAPEL XI RPL</title>
    <link rel="icon" href="https://smpbaktiidhata.files.wordpress.com/2017/05/cropped-bakdhatlogo.png">
    <link rel="stylesheet" type="text/css" href="button.css">
    <link rel="stylesheet" type="text/css" href="dash.css">
    <link rel="stylesheet" type="text/css" href="gradient.css">
    <div class="header"></div>
<input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
<label for="openSidebarMenu" class="sidebarIconToggle">
<div class="spinner diagonal part-1"></div>
<div class="spinner horizontal"></div>
<div class="spinner diagonal part-2"></div>
</label>
<div id="sidebarMenu">
  <ul class="sidebarMenuInner">
    <li>Alwan Putra <span>Junior Programmer</span></li>
    <li><a href="https://www.gataungoding.id">Website</a></li>
    <li><a href="https://www.instagram.com/alwanandri_/">Instagram</a></li>
    <li><a href="https://app.schoology.com/login">Schology</a></li>
    <li><a href="https://api.whatsapp.com/send?phone=6282114971457">Whatsapp</a></li>
    <li><a href="http://line.me/ti/p/alwanandri" target="_blank">Line</a></li>
  </ul>
</div>
    <div align="center">
      <br />
      <br />
      <br />
      <br />
      <br />
      <div align='center'><b><font size="4">Selamat Datang  <b><?php echo $username;?></b></font>
    <br>
    <br>
    <a href="logout.php" class="button4" style="background-color:#9a4ef1">logout</a>
    <br>
</head>
<body>
    <br />
<form name="Tick">
<input type="text" size="11" name="Clock">
</form>
<script>
function show(){
var Digital=new Date()
var hours=Digital.getHours()
var minutes=Digital.getMinutes()
var seconds=Digital.getSeconds()
var dn="AM" 
if (hours>12){
dn="PM"
hours=hours-12
}
if (hours==0)
hours=12
if (minutes<=9)
minutes="0"+minutes
if (seconds<=9)
seconds="0"+seconds
document.Tick.Clock.value=hours+":"+minutes+":"
+seconds+" "+dn
setTimeout("show()",1000)
}
show()
</script>
<div class="lds-dual-ring"></div>
    <br />
    <div align="center">
    <table bordercolor="#49beb7" bgcolor="#badfdb" border="5" cellspacing="0">
    <tr>
        <th colspan="6"><font size="5"> Jadwal Mata Pelajaran XI RPL SMK BAKTI IDHATA</th>
    </tr>
    <tr>
        <th><b><font size="4">Senin</th>
        <th><b><font size="4">Selasa</th>
        <th><b><font size="4">Rabu</th>
        <th><b><font size="4">Kamis</th>
        <th><b><font size="4">Jumat</th>
    </tr>
    <tr>
        <td><b><font size="3">PENJASOR</td> 
        <td><b><font size="3">Produktif RPL & TKJ</td>
        <td><b><font size="3">PAI</td>
        <td><b><font size="3">Pak Siswanto</td>
        <td><b><font size="3">Pak Siswanto</td>
    </tr>
    <tr> 
        <td><b><font size="3">PENJASOR</td>
        <td><b><font size="3">Produktif RPL & TKJ</td>
        <td><b><font size="3">PAI</td>
        <td><b><font size="3">Pak Siswanto</td>
        <td><b><font size="3">Pak Siswanto</td>
    </tr>
    <tr>
        <td><b><font size="3">Produktif RPL & TKJ</td>
        <td><b><font size="3">Produktif RPL & TKJ</td>
        <td><b><font size="3">PAI</td>
        <td><b><font size="3">Pak Siswanto</td>
        <td><b><font size="3">Pak Siswanto</td>
    </tr>
    <tr>
        <td><b><font size="3">Produktif RPL & TKJ</td>
        <td><b><font size="3">Produktif RPL & TKJ</td>
        <td><b><font size="3">Produktif RPL & TKJ</td>
        <td><b><font size="3">B.Indo</td>
        <td><b><font size="3">Pak Siswanto</td>
    </tr>
    <tr>
        <th colspan="5"><b><font size="4">ISTIRAHAT</th>
    </tr>
    <tr>
        <td><b><font size="3">Produktif RPL & TKJ</td>
        <td><b><font size="3">Produktif RPL & TKJ</td>
        <td><b><font size="3">Produktif RPL & TKJ</td>
        <td><b><font size="3">B.Indo</td>
        <td><b><font size="3">MTK</td>
    </tr>
    <tr>
        <td><b><font size="3">Produktif RPL & TKJ</td>
        <td><b><font size="3">B.inggris</td>
        <td><b><font size="3">Produktif RPL & TKJ</td>
        <td><b><font size="3">B.Indo</td>
        <td><b><font size="3">MTK</td>
    </tr>
    <tr>
        <td><b><font size="3">Produktif RPL & TKJ</td>
        <td><b><font size="3">B.inggris</td>
        <td><b><font size="3">Produktif RPL & TKJ</td>
        <td><b><font size="3">Produktif RPL & TKJ</td>
        <td><b><font size="3">MTK</td>
    </tr>
    <tr>
        <td><b><font size="3">Produktif RPL & TKJ</td>
        <td><b><font size="3">B.inggris</td>
        <td><b><font size="3">Produktif RPL & TKJ</td>
        <td><b><font size="3">Produktif RPL & TKJ</td>
        <td><b><font size="3">MTK</td>
    </tr>
    <tr>
        <th colspan="5"><b><font size="4">ISTIRAHAT</th>
    </tr>
    <tr>
        <td><b><font size="3">PKN</td>
        <td><b><font size="3">Dasar Desgin</td>
        <td><b><font size="3">Produktif RPL & TKJ</td>
        <td><b><font size="3">B.Indo</td>
        <td></td>
    </tr>
    <tr>
        <td><b><font size="3">PKN</td>
        <td><b><font size="3">Dasar Desgin</td>
        <td><b><font size="3">Produktif RPL & TKJ</td>
        <td><b><font size="3">B.Indo</td>
        <td></td>
    </tr>
</table>
<div>
    <div id="footer"><p><font color="white"><b>Copyright &copy; 2019 - Alwan Putra All Rights Reserved | Design By  <a href="http://gataungoding.id"><b><font color="white">Alwan Putra</p></div>
</div>
<script type='text/javascript'>
function redirectCU(e) {
  if (e.ctrlKey && e.which == 85) {
    window.location.replace("https://1.bp.blogspot.com/-dga_jqUeBBk/WgT4KM7RDCI/AAAAAAAAAIg/59F4AWU87HUKZFwmc8pJmDgNV0UFgpM3QCLcBGAs/s1600/membuat%2BTulisan%2Bdi%2BBlog%2BTidak%2BBisa%2Bdi%2BcoPas.png");
    return false;
  }
}
document.onkeydown = redirectCU;


function redirectKK(e) {
  if (e.which == 3) {
    window.location.replace("https://1.bp.blogspot.com/-dga_jqUeBBk/WgT4KM7RDCI/AAAAAAAAAIg/59F4AWU87HUKZFwmc8pJmDgNV0UFgpM3QCLcBGAs/s1600/membuat%2BTulisan%2Bdi%2BBlog%2BTidak%2BBisa%2Bdi%2BcoPas.png");
    return false;
  }
}
document.oncontextmenu = redirectKK;
//]]>
</script>
</body>
