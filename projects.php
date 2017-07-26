<!DOCTYPE html>
<html lang="en-us">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Bootstrap Basic Portfolio</title>

    <!-- Boostrap Stylesheet -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" media="screen">

    <!-- Our own CSS stylesheet -->
    <link rel="stylesheet" href="assets/css/styles.css" media="screen">

</head>

<body>
<!-- Start of navbar -->
<nav class="navbar navbar-default">
    <div class="container-fluid navbar-custom">

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="row">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="col-xs-12 phone-nav">
                    <a class="navbar-brand" href="#" id="logo">Matthew Triantafellu</a>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right navbar-right-custom">
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="projects.php">Portfolio</a></li>
                    <li><a href="about.php">About</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </div><!-- /.container-fluid -->
</nav>
<!-- End of navbar -->

<!-- Start of content wrap -->
<div class="wrap">
    <div class="container">
        <section class="row">
            <div class="col-md-7">
                <section id="portfolio-area">
                    <h1 class="port-header">Portfolio</h1>
                    <hr class="port-hr"/>
                    <img class="port-imgs" src="http://lorempixel.com/223/166" alt="">
                    <img class="port-imgs" src="http://lorempixel.com/233/166" alt="">
                    <img class="port-imgs" src="http://lorempixel.com/233/166" alt="">
                    <img class="port-imgs" src="http://lorempixel.com/233/166" alt="">
                    <img class="port-imgs" src="http://lorempixel.com/233/166" alt="">
                </section>
            </div>
            <div class="col-md-5">

                <!-- Start of Connect With Me Area -->
                <section id="connect-with-me-area">
                    <div class="connect-with-me-content">
                        <h1 class="connect-with-me-header">Connect With Me</h1>
                        <hr />
                        <div id="images">
                            <img src="assets/imgs/github.png" alt="" class="connect-with-me-photo">
                            <img src="assets/imgs/linkedin.png" alt="" class="connect-with-me-photo">
                            <img src="assets/imgs/stackover2.png" alt="" class="connect-with-me-photo">
                        </div>
                    </div>
                </section>

                <!-- End of the Connect With Me Area -->
            </div>
        </section>
    </div>
</div>
<!-- End of content wrap -->

<!-- Start of footer -->
<footer class="footer">

    <?php require './includes/footer.php' ?>

</footer>
<!-- End of footer -->

<!-- jQuery CDN -->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>

<!-- Bootstrap CDN -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</body>

</html>
