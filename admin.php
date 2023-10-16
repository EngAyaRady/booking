<?php
session_start();
if( !isset($_SESSION['username']) ){
    header("location:../index.php");
}
elseif($_SESSION['usertype'] != 'admin'){
    header("location:out.php");
}
include "../master/sections/connect.php";
include "../master/sections/start.php";
include "../master/sections/links.php";
include "../master/sections/mid.php";

?>

<!-- page content -->
<div class="data">
            <!-- <link rel="stylesheet" href="./master/css/main.css"> -->

    <div class="page-title">Dashboard</div>

    <!-- data -->
    <div class="widgets">
        <div class="widget-3">
            <span>Available Rooms</span>
            <span>350</span>
            <span>View details </span>

        </div>
        <div class="widget-4">
            <span>Today checkouts</span>
            <span>350</span>
            <span>View details </span>

        </div>
        <div class="widget-6">
            <span>Cancellations</span>
            <span>350</span>
            <span>View details </span>

        </div>
        <div class="widget-3">
            <span>Enquires</span>
            <span>350</span>
            <span>View details </span>

        </div>
        <div class="widget-4">
            <span>Pending payments</span>
            <span>350</span>
            <span>View details </span>

        </div>
        <div class="widget-6">
            <span> Invoices </span>
            <span>350</span>
            <span>View details </span>

        </div>
    </div>
    
</div>

<?php include "../master/sections/foot.php"; ?>

<!-- custom script here -->

<?php include "../master/sections/end.php"; ?>