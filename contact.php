<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "includes/header.php" ?>
</head>

<body>
    <?php include "includes/navbar.php" ?>

    <section id="contact-header">
        <div class="container">
            <h1>Contact Us</h1>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 ">
                    <div data-aos="zoom-in" class="address curved-border box">
                        <h3>How to find us</h3>
                        <p>If you have any questions, just fill in the form, and we will answer you shortly. If you are living nearby, come visit Gaurik at our office.</p>
                        <h4>Our office</h4>
                        <div class="flex-row">
                            <i class="fas fa-map-marked-alt"></i>
                            <p>Narayana Road, Mahidpur, Ujjain, M.P (456443)</p>
                        </div>
                        <div class="flex-row">
                            <i class="fas fa-envelope"></i>
                            <p>info@gaurikmilk.com</p>
                        </div>
                        <div class="flex-row">
                            <i class="fas fa-phone"></i>
                            <div style="flex-direction: column;">
                                <p style="margin-bottom: 10px;">+91 6262 762 762</p>
                                <p>+91 6262 609 311</p>
                            </div>
                        </div>
                        <div class="social row">
                            <a href="https://www.instagram.com/gaurikmilk/"><i class="fab mx-3 fa-instagram"></i></a>
                            <a href="https://www.facebook.com/GaurikMilk/"><i class="fab mx-3 fa-facebook"></i></a>
                            <!-- <i class="fab mx-3 fa-linkedin"></i> -->
                        </div>
                    </div>
                </div>
                <div data-aos="zoom-in" class="col-lg-6">
                    <div class="form curved-border box">
                        <?php
                        if (isset($_SESSION['sent'])) {
                            $sent = $_SESSION['sent'];
                            if ($sent) {
                                echo "<h4 style='color: green;'>Message Sent!</h4 style='color: green;'>";
                            }
                        }
                        ?>
                        <h3>Get in touch</h3>
                        <form action="sendMail.php" method="post">
                            <div class="form-group">
                                <input class="form-control" type="text" name="name" placeholder="Name" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name="phone" placeholder="Phone Number (10 Digits)" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="6" name="message" placeholder="Message" required></textarea>
                            </div>
                            <div class="row justify-content-center">
                                <input type="submit" value="Submit" class="btn">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1784.1912964100486!2d75.65527936948737!3d23.474008128686155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3963809d4a7684c1%3A0xaa5a9cf5dae0278!2sSiddhi%20Vinayak%20Milk!5e0!3m2!1sen!2sin!4v1599812205209!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </section>

    <?php include "includes/footer.php" ?>
    <?php include "includes/scripts.php" ?>
</body>

</html>