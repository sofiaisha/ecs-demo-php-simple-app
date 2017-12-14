<?php

$image = 'https://s3.amazonaws.com/sofy/2jD7ZHg.jpg';
$imageData = base64_encode(file_get_contents($image));
echo '<img src="data:image/jpeg;base64,'.$imageData.'">';
?>
