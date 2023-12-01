<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MJE BOOK KEEPING</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="./images/favicon_io (1)/favicon.ico" type="image/x-icon">
</head>

<body>
    <section class="sub-header">
        <nav>
            <a href="index.html"><img src="./images/logo.png"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="offers.html">OFFERS</a></li>
                    <li><a href="blog.html">BLOG</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <h1>CONTACT US</h1>
    </section>

    <!-- CONTACT  US -->
    <section class="location">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125585.15710848429!2d123.76389372604112!3d10.378922809683655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a999258dcd2dfd%3A0x4c34030cdbd33507!2sCebu%20City%2C%206000%20Cebu!5e0!3m2!1sen!2sph!4v1699528301759!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <section class="contact-us">
        <div class="row">
            <div class="contact-col">
                <div>
                    <i class="fa fa-home"></i>
                    <span>
                        <h5>Street address</h5>
                        <p>Cebu City</p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-phone"></i>
                    <span>
                        <h5>+63 123456789</h5>
                        <p>Monday-Saturday, 8AM to 6PM</p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-envelope-o"></i>
                    <span>
                        <h5>@gmail.com</h5>
                        <p>Email us your query</p>
                    </span>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 offset-md-4 mail-form">
                        <h2 class="text-center">
                            Send Message
                        </h2>
                        <p class="text-center">
                            Send mail to anyone from localhost.
                        </p>
                        <!-- starting php code -->
                        <?php
                        //first we leave this input field blank
                        $recipient = "navales546@gmail.com";
                        //if user click the send button
                        if (isset($_POST['send'])) {
                            //access user entered data
                            $recipient = $_POST['email'];
                            $subject = $_POST['subject'];
                            $message = $_POST['message'];
                            $sender = "From: joelfranco.navales.23@usjr.edu.ph";
                            //if user leave empty field among one of them
                            if (empty($recipient) || empty($subject) || empty($message)) {
                        ?>
                                <!-- display an alert message if one of them field is empty -->
                                <div class="alert alert-danger text-center">
                                    <?php echo "All inputs are required!" ?>
                                </div>
                                <?php
                            } else {
                                // PHP function to send mail
                                if (mail($recipient, $subject, $message, $sender)) {
                                ?>
                                    <!-- display a success message if once mail sent sucessfully -->
                                    <div class="alert alert-success text-center">
                                        <?php echo "Your mail successfully sent to $recipient" ?>
                                    </div>
                                <?php
                                    $recipient = "";
                                } else {
                                ?>
                                    <!-- display an alert message if somehow mail can't be sent -->
                                    <div class="alert alert-danger text-center">
                                        <?php echo "Failed while sending your mail!" ?>
                                    </div>
                        <?php
                                }
                            }
                        }
                        ?> <!-- end of php code -->
                        <form action="contact.php" method="POST">
                            <div class="form-group">
                                <input class="form-control" name="email" type="email" placeholder="Recipients" value="<?php echo $recipient ?>">
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="subject" type="text" placeholder="Subject">
                            </div>
                            <div class="form-group">
                                <!-- change this tag name into textarea to show textarea field. Due to more textarea I got an error, so I change the name of this field -->
                                <textarea cols="30" rows="5" class="form-control textarea" name="message" placeholder="Compose your message.."></textarea>
                            </div>
                            <div class="form-group">
                                <input class="form-control button btn-primary" type="submit" name="send" value="Send" placeholder="Subject">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>
    <!-- Footer-->

    <section class="footer">
        <h4>About Us</h4>
        <p>Description</p>
        <div class="icons">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-envelope"></i>
            <i class="fa fa-linkedin"></i>
        </div>
        <p><i class="fa fa-copyright"></i>Copyright.<br>All rights Reserved.</p>
    </section>


    <!-- JAVASCRIPT FOR TOGGLE MENU -->
    <script>
        var navLinks = document.getElementById("navLinks");

        function showMenu() {
            navLinks.style.right = "0";

        }

        function hideMenu() {
            navLinks.style.right = "-200px";

        }
    </script>
</body>

</html>