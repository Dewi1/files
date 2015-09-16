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
<link rel="stylesheet" type="text/css" href="crop/imgareaselect-default.css" />
<script src="crop/jquery-1.5.1.min.js"></script>
<script type="text/javascript" src="crop/jquery.imgareaselect.pack.js"></script>

<?php $name = $_POST["file_name"];?>
<center>
    <p>
        <img id="photo" src="/downloads/<?php echo $name;?>" alt="" title="" style="margin: 0 0 0 10px;" />
    </p>
    <form action="crop/crop.php" method="post">
        <input type="hidden" name="x1" value="" />
        <input type="hidden" name="y1" value="" />
        <input type="hidden" name="x2" value="" />
        <input type="hidden" name="y2" value="" />
        <input type="hidden" name="w" value="" />
        <input type="hidden" name="h" value="" />
        <input type="hidden" name="file_name" value="<?php echo $name;?>">
        <input type="submit" value="Обрезать" />
    </form>
</center>

<script type="text/javascript">
    function preview(img, selection) {
        var scaleX = 100 / (selection.width || 1);
        var scaleY = 100 / (selection.height || 1);
        $('#photo + div > img').css({
            width: Math.round(scaleX * 600) + 'px',
            height: Math.round(scaleY * 400) + 'px',
            marginLeft: '-' + Math.round(scaleX * selection.x1) + 'px',
            marginTop: '-' + Math.round(scaleY * selection.y1) + 'px'
        });
    }
    $(document).ready(function () {
        $('#photo').imgAreaSelect({
            handles: true,
            onSelectChange: preview,
            onSelectEnd: function ( image, selection ) {
                $('input[name=x1]').val(selection.x1);
                $('input[name=y1]').val(selection.y1);
                $('input[name=x2]').val(selection.x2);
                $('input[name=y2]').val(selection.y2);
                $('input[name=w]').val(selection.width);
                $('input[name=h]').val(selection.height);
            }
        });
    });
</script>
</html>

