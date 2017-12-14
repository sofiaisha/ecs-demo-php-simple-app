<?php

$image = 'http://www.google.com/doodle4google/images/d4g_logo_global.jpg';
$imageData = base64_encode(file_get_contents($image));
echo '<img src="data:image/jpeg;base64,'.$imageData.'">';
?>
