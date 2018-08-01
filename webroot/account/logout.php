<?php
session_start();
session_unset();
session_destroy();
/*header("Location: /");*/
echo '<script>window.location.href = "../index.php";</script>';
?>