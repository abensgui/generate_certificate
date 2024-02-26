<?php

if(isset($_POST['add'])){
    $font = realpath('RobotoCondensed-BoldItalic.ttf');
    $font1 = realpath('arial.ttf');
    $image = imagecreatefromjpeg('cer.jpg');
    $color = imagecolorallocate($image,51, 51, 102);
    imagettftext($image, 100, 0, 500, 700, $color,$font, $_POST['studentName']);
    imagettftext($image, 40, 0, 430, 1100, $color,$font1, $_POST['studentName']);
    imagettftext($image, 40, 0, 1220, 1100, $color,$font1, $_POST['studentName']);
    imagejpeg($image, 'student/' . $_POST['studentName']  .'.jpg');
    imagedestroy ($image);
}
echo'<center>
        <h1> Certificate Generated Successfully </h1>
    </center> <br> 
     <center> 
        <a href="index.html"> Go Back </a> 
    </center>';
?>   