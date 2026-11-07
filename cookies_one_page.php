<?php

setcookie("username", "Raashed", time() + 3600);

?>

<!DOCTYPE html>
<html>
<body>

<h2>PHP Cookies Demo</h2>

<?php

if(isset($_COOKIE['username']))
{
    echo "Welcome " . $_COOKIE['username'];
}
else
{
    echo "Cookie has been created. Please refresh the page.";
}

?>

</body>
</html>