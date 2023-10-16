<?php
session_start();
if( !isset($_SESSION['username']) ){
    header("location:../index.php");
}
elseif($_SESSION['usertype'] != 'user'){
    header("location:out.php");
}
include "../master/sections/connect.php";
include "../master/sections/start.php";
include "../master/sections/links.php";
include "../master/sections/mid.php";
?>

<!-- page content -->
<div class="data">
    <div class="page-title">Dashboard</div>

    <!-- data -->

</div>

<?php include "../master/sections/foot.php"; ?>

<!-- custom script here -->

<?php include "../master/sections/end.php"; ?>