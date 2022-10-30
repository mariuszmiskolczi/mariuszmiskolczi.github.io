<?php
include("../res/x5engine.php");
$nameList = array("wvr","akm","khv","38u","n7a","hh4","g2g","lud","zn3","cr7");
$charList = array("4","E","7","5","5","H","7","7","R","U");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
