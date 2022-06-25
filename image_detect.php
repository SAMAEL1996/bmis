<?php

$img = new ImageTag('./pp.jpg');
$img->resize(Resize::thumbnail()->width(200)
->height(200)
->gravity(
Gravity::focusOn(
FocusOn::face()))
);

?>