<html>
<head>
    <title>Загрузка файлов на сервер</title>
    <style>
        a { text-decoration: none; }
        li { list-style-type: none; }
        textarea { resize: none; }
    </style>
</head>
<body>
<div style="position:fixed; top:20px; left:40px; width: 100px; align=left">
    <a href="index.php"><h2>Главная</h2></a>
</div><br>
<br><br><br><br><center>
    <h2><p><b> Форма для загрузки файлов </b></p></h2>
    <form action="upload_check.php" method="post" enctype="multipart/form-data">
        <input type="file" name="filename"><br><br>
        <input type="submit" value="Загрузить"><br>
    </form>
    <center><font color="red" face="Zapf Chancery, cursive"><h4>Размер изображений не должен превышать 10 мб. </h4></font>
    <center><font color="red" face="Zapf Chancery, cursive"><h4>Допустимые форматы: png, jpeg, jpg. </h4></font>
</center>
</body>
</html>