<html>
<head>
    <title>Files Downloader</title>
    <style>
        a { text-decoration: none; }
        li { list-style-type: none; }
        textarea { resize: none; }
    </style>
</head>
<body>
    <div class="top_head" style="position:fixed; width:1580px; height: 60px; top:0px; left:0px; border: solid 1px black; background: #117700; font-size: 14px" align="center">
        <div style="position:fixed; top:0px; left:30px; text-align:center;">
            <font color="red" face="Zapf Chancery, cursive"><h2>Files Downloader</h2></font>
        </div>
    </div>
    <center>
        <div style="position:absolute;margin-left: 37%; width: 320px; border-radius:4px; background:#FFFFFF;" align="center">
            <a href="upload.php"><h3>��������� ���� �� ������<h3></a>
        </div><br>
    </center>
    <br><br><br><br>
    <?php
    echo "<center>";
    if ($handle = opendir('W:/domains/Files/downloads/')) {
        echo '<font color="#117700" face="Zapf Chancery, cursive"><h2>�����:</h2></font><br>';
        while (false !== ($entry = readdir($handle))) {
            if($entry != '.' && $entry != '..'){
                echo '<div style="position: absolute; margin-top: 20px; " align="left">';
                echo '<form action="download.php" method="post">
                        <input type="hidden" name="file_name" value="'.$entry.'">
                        <input type="submit" name="submit" value="�������">
                    </form>';
                echo '</div>';
                echo '<div style="position: absolute; margin-left: 80px; margin-top: 20px; " align="left">';
                echo '<form action="index.php" method="post">
                        <input type="hidden" name="file_name" value="'.$entry.'">
                        <input type="submit" name="delete" value="�������">
                     </form>';
                echo '</div>';
                echo '<div style="position: absolute; margin-left: 160px; " align="left">';
                echo '<h3> '.$entry .'</h3>';
                echo '</div><br><br>';
            }
        }
        closedir($handle);
    }
    echo "</center>";
    if($_POST['delete']=="�������"){
        $file_name = 'W:/domains/Files/downloads/'.$_POST["file_name"];
        unlink($file_name);
        echo '<meta http-equiv="refresh" content="0; url=index.php">';
    }
    ?>
</body>
</html>