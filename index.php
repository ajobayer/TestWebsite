<?php
// PHP permanent URL redirection as we are deploying with ALB where conf.d/php.conf:DirectoryIndex index.php
header("Location: index.html", true, 301);
exit();
?>

