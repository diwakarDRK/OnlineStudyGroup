<?php
$x="diwakar";
$x=preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$x);
echo $x;
?>