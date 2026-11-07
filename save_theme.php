<?php

$theme = "dark";

setcookie(
    "theme",
    $theme,
    time()+86400*30
);

echo "Theme Saved";

?>