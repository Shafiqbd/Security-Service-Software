<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>All-Round Security </title>
    <!-- Favicons
	================================================== -->
    <link rel="icon" href="img/favicon/favicon-32x32.html" type="image/x-icon" />

    <!-- CSS
	================================================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Template styles-->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive styles-->
    <link rel="stylesheet" href="css/responsive.css">
    
    <!-- Style Swicther -->
    <link id="style-switch" href="css/presets/preset3.css" media="screen" rel="stylesheet" type="text/css">


</head>

<body class="body-inner">
    <?php include "header.php";?>

    <section>
        <div id="banner-area">
            <img src="images/banner/banner2.jpg" alt="" />
            <div class="parallax-overlay"></div>
            <!-- Subpage title start -->
            <div class="banner-title-content">
                <div class="text-center">
                    <h2>Contact Us</h2>

                </div>
            </div>
        </div>
    </section>
    <!-- Banner area end -->

    <!-- Main container start -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <form id="contact-form" action="">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control f_input" name="name" id="name" placeholder="" type="text" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control f_input" name="email" id="email" placeholder="" type="email" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Subject</label>
                                    <input class="form-control f_input" name="subject" id="subject" placeholder="" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <textarea class="form-control f_input" name="message" id="message" placeholder="" rows="7" required></textarea>
                        </div>
                        <div class="text-right"><br>
                            <button class="btn btn-primary solid blank" type="submit">Send Message</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-5">
                    <div class="contact-info contact-mar">
                        <h3>Contact Details</h3>
                        <p>If you have any query please contact with us.</p>
                        <br>
                        <p><i class="fa fa-home info"></i> House #Ka-25, Jagannathpur, Bashundhara Gate-02 </p>
                        <p><i class="fa fa-phone info"></i> Shahid Abdul Aziz Sharok, Vatara-1229,Bangladesh. </p>
                        <p><i class="fa fa-envelope-o info"></i> safetygurd16@gmail.com </p>
                        <p><i class="fa fa-globe info"></i> www.allroundsecurity.com</p>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--/ Main container end -->
    <?php include "footer.php";?>
    
    <!-- initialize jQuery Library -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<!-- Bootstrap jQuery -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/load.js"></script>

</body>
</html>
