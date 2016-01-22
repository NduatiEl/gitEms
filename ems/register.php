<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LABS</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div id="empty"></div>

<div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a href="#">GRACE LABS EMS</a></li>
            <li><a href="index.php" >Home</a></li>
            <li><a href="signup.php">register  </a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="contacts.php">Contact</a></li>
            <li><a href="events.php">Events</a></li>
            <li><a href="login.php">Login</a></li>

        </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->

    <div id="page-content-wrapper0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1>EMS</h1>


                    <p>GRACE LABS CONSOLIDATE</p>
                    <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>


                </div>
            </div>
        </div>
    </div>
</div>
<div id="page-content-wrapper1">
    <h6>profile update</h6>
    <div class="container-fluid">
        <form action="register.php" method="post">
            <div class="explanation">
                <div id="form">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group">
                                first name<input type="text" class="form-control" name="fname" value="">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                middle name<input type="text" class="form-control" name="sname" value="">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                sur name<input type="text" class="form-control" name="surname" value="">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                date of birth<input type="date" class="form-control" name="DOB" value="">
                            </div>
                        </div>
                    </div>
                    <!--end of row-->
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group">
                                email address<input type="text" class="form-control" email="email" value="">
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-group">
                                postal address<input type="int" class="form-control" name="postAddress" value="">
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-group">
                                postal code<input type="int" class="form-control" name="postcode" value="">
                            </div></div>
                        <div class="col-lg-2">
                            <div class="form-group">
                                postal region<input type="text" class="form-control" name="postR" value="">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                telephone<input type="text" class="form-control" name="telNo" value="">
                            </div>
                        </div>
                    </div>
                    <!--end of row-->
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group">
                                former employer<input type="text" class="form-control" name="femp" value="">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                date of employement<input type="date" class="form-control" name="DOE" value="">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                former supervisor<input type="text" class="form-control" name="fsupervisor" value="">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                department<input type="text" class="form-control" name="depart" value="">
                            </div>
                        </div>
                    </div>
                    <!--end of row-->
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group">
                                national id number<input type="int" class="form-control" name="NID" value="">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                nihf number<input type="text" class="form-control" name="nhif" value="">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                pin number<input type="text" class="form-control" name="pin" value="">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                social security number<input type="int" class="form-control" name="ssn" value="">
                            </div>
                        </div>
                    </div>
                    <!--end of row-->
                    <div class="row">
                        <div class="col-lg-1">
                            <input type="submit"value="update" >
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<br>
<br>
<!-- /#page-content-wrapper -->


<!-- /#wrapper -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

<script type="text/javascript">
    var currentIndex = 0,
        items = $('.container div'),
        itemAmt = items.length;

    function cycleItems() {
        var item = $('.container div').eq(currentIndex);
        items.hide();
        item.css('display','inline-block');
    }

    var autoSlide = setInterval(function() {
        currentIndex += 1;
        if (currentIndex > itemAmt - 1) {
            currentIndex = 0;
        }
        cycleItems();
    }, 3000);

    $('.next').click(function() {
        clearInterval(autoSlide);
        currentIndex += 1;
        if (currentIndex > itemAmt - 1) {
            currentIndex = 0;
        }
        cycleItems();
    });

    $('.prev').click(function() {
        clearInterval(autoSlide);
        currentIndex -= 1;
        if (currentIndex < 0) {
            currentIndex = itemAmt - 1;
        }
        cycleItems();
    });</script>
<div id="footer">
    <p> <center> GRACE LABS  &#169 2015    </center> </p>
</div>
</div>

</div>

</body>

</html>
