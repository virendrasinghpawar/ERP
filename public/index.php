<?php
require("../includes/config.php"); 
$resul=query("select * from profile where roll_no=?",$_SESSION["id"]);
$result=$resul[0];

render("index.php", ["title" => "Dashboard"]);




?>
