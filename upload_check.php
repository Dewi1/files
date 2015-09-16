<?php
header('Content-Type: text/html; charset=utf-8');
setlocale(LC_ALL, 'ru_RU.65001', 'rus_RUS.65001', 'Russian_Russia. 65001', 'russian');
?>
<html>
<head>
    <title>Результат загрузки файла</title>
</head>
<body>
<?php
echo '<br><br><br><br><br><br>';
if($_FILES["filename"]["size"] > 1024*10*1024)
{
    echo '<center><font color="red" face="Zapf Chancery, cursive"><h2>Размер файла превышает сорок мегабайт</h2></font>
    <a href="upload.php"><p>Вернуться</p></a></center>';
    exit;
}

if($_FILES["filename"]["type"] == "image/jpeg"){
    $check = 1;
    echo $_FILES["filename"]["type"];
}elseif($_FILES["filename"]["type"] == "image/jpg"){
    $check = 1;
}elseif($_FILES["filename"]["type"] == "image/png"){
    $check = 1;
}else{
    $check = 0;
}

if(is_uploaded_file($_FILES["filename"]["tmp_name"]) && $check == 1)
{
    move_uploaded_file($_FILES["filename"]["tmp_name"], "W:/domains/Files/downloads/".$_FILES["filename"]["name"]);
    echo '<center><font color="#7cfc00" face="Zapf Chancery, cursive"><h2>Загрузка завершена успешно</h2></font>
    <a href="upload.php"><p>Вернуться</p></a></center>';
}else{
    echo '<center><font color="red" face="Zapf Chancery, cursive"><h2>Ошибка загрузки файла</h2></font>
    <a href="upload.php"><p>Вернуться</p></a></center>';
}
?>
</body>
</html>