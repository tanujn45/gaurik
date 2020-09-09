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
                    <div class="address curved-border box">
                        <h3>How to find us</h3>
                        <p>If you have any questions, just fill in the form, and we will answer you shortly. If you are living nearby, come visit Gaurik at our office.</p>
                        <h4>Our office</h4>
                        <p>J/85/MIG Colony, 202 Surbhi appt<br>Indore, MP (452001)</p>
                        <p>Email: tanujn45@gmail.com</p>
                        <p>Phone: +91 7999427560</p>
                        <div class="social row">
                            <i class="fab mx-3 fa-instagram"></i>
                            <i class="fab mx-3 fa-facebook"></i>
                            <i class="fab mx-3 fa-linkedin"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form curved-border box">
                        <h3>Get in touch</h3>
                        <form action="contact.php" method="post">
                            <div class="form-group">
                                <input class="form-control" type="text" name="name" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="6" placeholder="Query"></textarea>
                            </div>
                            <div class="row justify-content-center">
                                <input type="submit" value="Submit" class="btn">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117763.55154163977!2d75.79380949777502!3d22.724115838560706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3962fcad1b410ddb%3A0x96ec4da356240f4!2sIndore%2C%20Madhya%20Pradesh!5e0!3m2!1sen!2sin!4v1599373635493!5m2!1sen!2sin" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </section>

    <?php include "includes/footer.php" ?>
    <?php include "includes/scripts.php" ?>
</body>

</html>