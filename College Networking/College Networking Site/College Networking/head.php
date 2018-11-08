<?php
include_once("mysql.php");

if(isset($_POST["btnlogin"]))
{
	$logres = mysqli_query("SELECT * FROM stuacc WHERE email='$_POST[txtemail]' AND password='$_POST[txtpass]' ");

	if(mysqli_num_rows($logres) == 1)
	{
		$_SESSION["logid"] = $_POST["txtemail"];
	header("Location: profile.php");
	}
	else
	{
header("Location: login.php");
	}
}
?>
<div class=head><div style="padding-top: 50px"><div style="background-image: url(images/logo.png); background-repeat: no-repeat; height: 80px;"> <div style="position: relative; left: 100px; top: -20px; text-align: left;">
<!--	<table width=75% >
	<tr>
		<td width="60%" style="text-align: left; font: 25px arial; color: #000000;"><h2 width="273" height="87" >"Social Networking"</td>
            </h2>
		<td width="40%" align=right>&nbsp;</td>
	</tr>
	</table>-->
                <p style="font-size:40px;">College Networking</p>
</div></div></div></div>