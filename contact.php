<!DOCTYPE html>
<html lang="en-us">
<head>

    <?php require './includes/header.php' ?>

</head>

<body>

<!-- Start of navbar -->
<nav class="navbar navbar-default">
    <div class="container-fluid navbar-custom">

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#" id="logo">Your Name</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right navbar-right-custom">
                <li><a href="contact.php">Contact</a></li><span class="pipe"></span>
                <li><a href="projects.php">Portfolio</a></li><span class="pipe"></span>
                <li><a href="index.php">About</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<!-- End of navbar -->

<!-- Start of content wrap -->
<div class="wrap">
    <div class="container">
        <section class="row">
            <div class="col-md-8">
                <form class="contact-form">
                    <h1 class="contact-form-header">Contact</h1>
                    <hr class="contact-hr"/>
                    <div class="form-group">
                        <label class="label-name" for="name">Name</label>
                        <input type="text" id="name_input" name="user_name" />
                    </div>
                    <div class="form-group">
                        <label class="label-mail" for="mail">E-mail</label>
                        <input type="email" id="mail_input" name="user_mail" />
                    </div>
                    <div class="form-group">
                        <label class="label-msg" for="msg">Message</label><br />
                        <textarea id="msg" name="user_message_input" cols=600></textarea>
                    </div>
                    <button class="submit-btn">Submit</button>
                </form>
            </div>
            <div class="col-md-4">

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