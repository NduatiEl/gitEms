<?php
@session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php
include 'includes/head.php'
?>
<body>
<div id="empty"></div>

<div id="wrapper">

    <?php

    include 'includes/sidebar.php'
    ?>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->

    <div id="page-content-wrapper0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1>EMS</h1>


                    <p>  <?php echo $_SESSION['surname']." ". $_SESSION['firstname']." ".$_SESSION['secondname'];?> <br>Welcome to GRACE LABS CONSOLIDATE</p>
                    <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>


                </div>
            </div>
        </div>
    </div>
</div>
<div id="page-content-wrapper1">
    <div id="prof">
        <h6>profile update</h6>
    </div>
    <div class="container-fluid">
        <form action="register.php" method="post">
            <div class="explanation">