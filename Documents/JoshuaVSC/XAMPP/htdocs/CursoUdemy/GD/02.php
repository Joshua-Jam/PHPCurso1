<?php

$image = imagecreatefromjpeg("certificado.jpg");

$titlecolor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 450, 150, "CERTIFIRCADO",$titlecolor);
imagestring($image, 5, 440, 350,"Divanei Aparecido", $titlecolor);
imagestring($image, 3, 440, 370, ("Concluído em: ").date("d/m/y"), $titlecolor);

header("Content-type:  image/jpeg");

imagejpeg($image, "certificado-".date("d/m/y").".jpg");

imagedestroy($image);

?>