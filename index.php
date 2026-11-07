<?php

$bg = "white";
$text = "black";

if(isset($_COOKIE['theme']))
{
    if($_COOKIE['theme'] == "dark")
    {
        $bg = "black";
        $text = "white";
    }
}

?>

<!DOCTYPE html>
<html>
<body style="background-color:<?php echo $bg; ?>;
             color:<?php echo $text; ?>">

<h1>PHP Cookies Demo</h1>

</body>
</html>