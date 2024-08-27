<?php 
 $con = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, NULL, NULL, NULL);
mysqli_real_connect($conn, "dongho.mysql.database.azure.com", "dongho", "Hieu0411!", "watchshop", 3306, MYSQLI_CLIENT_SSL);
?>
