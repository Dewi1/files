<?php
if($_POST['submit']=="�������"){
    $filename = $_POST['file_name'];
    $file = ("downloads/".$filename);
    header ("Content-Type: application/octet-stream");
    header ("Accept-Ranges: bytes");
    header ("Content-Length: ".filesize($file));
    header ("Content-Disposition: attachment; filename=".$filename);
    readfile($file);
}else{
    echo '<center><font color="red" face="Zapf Chancery, cursive"><h2>������ �������� �����</h2></font>
    <a href="upload.php"><p>���������</p></a></center>';
}
