<?php
include("mysql.php");
if(isset($_POST["button2"]))
{
$sql="INSERT INTO qpaper (papername,subject,section,description,upload,uploadtext)
VALUES
('$_POST[textfield]','$_POST[select]','$_POST[select2]',
'$_POST[textarea]','$_POST[fileField]','$_POST[textarea2]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  else
  {
echo "Question paper uploaded Successfully";
  }

}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Question Paper page</title>
</head>

<body>
<form id="form1" name="form1"  method="post" action="Qpaper.php">
<table width="958" height="401">
  <tr>
    <td width="69" height="70"><strong>Article Name</strong>:</td>
    <td width="608"><input name="textfield" type="text" id="textfield" size="40" /></td>
  </tr>
  <tr>
    <td>Article</td>
    <td>
      <label for="textarea2"></label>
      <textarea class="ckeditor" cols="20" id="editor1" name="editor1" rows="10"></textarea>
  </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
      <input type="submit" name="button2" id="button2" value="Upload Article" />
    </td>
  </tr>
</table></form>
</body>
</html>
