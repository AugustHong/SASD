<?php
session_start();
session_destroy();
echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
?>