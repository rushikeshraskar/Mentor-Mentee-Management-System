<?php
session_start();
echo "session ended..!";
session_destroy();
session_unset();
header("Location: index.php"); /* Redirect browser */
/* Make sure that code below does not get executed when we redirect. */
exit;
?>