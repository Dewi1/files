<?php
$dir = 'W:/domains/Files/downloads/';
$new_dir = 'W:/domains/Files/previews/';
$filename = $_POST["file_name"];

for($i=1;$i<100;$i++){
    $fullFileName = $new_dir."preview_".$i."_".$filename;
    if (!file_exists($fullFileName)) {
        $new_filename = "preview_".$i."_".$filename;
        break;
    }
}

$file_dir = $dir . $filename;
$new_file_dir = $new_dir . $new_filename;
//die(print_r($_POST));

list($current_width, $current_height) = getimagesize($file_dir);

$x1 = $_POST['x1'];
$y1 = $_POST['y1'];
$x2 = $_POST['x2'];
$y2 = $_POST['y2'];
$w = $_POST['w'];
$h = $_POST['h'];

//die(print_r($_POST));

$width = $x2-$x1;
$height = $y2-$y1;
while(1 != 2){
    if($width>=$height && $width>300 && $height!= 50){
        $width = $width - 1;
        $height = $height - 1;
    }elseif($height>$width && $height>300 && $width!= 50){
        $width = $width - 1;
        $height = $height - 1;
    }else{
        break;
    }
}

$crop_width = $width;
$crop_height = $height;

$new = imagecreatetruecolor($crop_width, $crop_height);
$current_image = imagecreatefromjpeg($file_dir);
imagecopyresampled($new, $current_image, 0, 0, $x1, $y1, $crop_width, $crop_height, $w, $h);
imagejpeg($new, $new_file_dir, 95);

header( 'Refresh: 0; url=/index.php?page=register' );
