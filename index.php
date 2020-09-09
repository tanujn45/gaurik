<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "includes/header.php" ?>
</head>

<body>
    <?php include "includes/navbar.php" ?>

    <!-- Hero -->
    <section id="hero">
        <div class="container">
            <div class="row justify-content-center align-items-center full-height">
                <div class="mx-1">
                    <h1>Tag line for Gaurik Dairy</h1>
                </div>
            </div>
        </div>
    </section>

    <section id="workers">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div data-aos="fade-right" class="col-lg-4">
                    <h3>The Gaurik Family</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium dignissimos facere inventore nemo? Fuga, facilis. Illo quisquam sit totam optio!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum delectus quod expedita molestiae recusandae possimus natus alias sit?</p>
                    <button class="btn">About Us</button>
                </div>
                <div data-aos="zoom-in" class="col-lg-8">
                    <img class="img-fluid curved-border" src="img/company/team.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="sold">
        <div class="container">
            <div data-aos="zoom-in-up" class="row justify-content-center">
                <div class="col-lg-7 sold-container curved-border">
                    <h1><span class="counter">30,000</span></h1>
                    <h4>Litres of milk sold</h4>
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid">
        <section id="commitment">
            <div class="container">
                <div data-aos="zoom-in-down" data-aos-delay="500" class="row justify-content-center align-items-center full-height">
                    <h3>At Gaurik Dairy, we aim to be the most trusted source of wholesome, delicious dairy products for every occasion. We never forget how fortunate we are to be invited into your home. And we earn our place by holding ourselves to the highest standards.</h3>
                </div>
            </div>
        </section>
    </div>

    <section id="home-products">
        <div data-aos="zoom-out-up" class="container">
            <div class="owl-carousel owl-theme">
                <div class="item"><img src="img/milk/milk1.jpg" alt=""></div>
                <div class="item"><img src="img/milk/milk2.jpg" alt=""></div>
                <div class="item"><img src="img/milk/milk3.jpg" alt=""></div>
                <div class="item"><img src="img/milk/milk4.jpg" alt=""></div>
                <div class="item"><img src="img/milk/milk5.jpg" alt=""></div>
                <div class="item"><img src="img/milk/milk6.jpg" alt=""></div>
            </div>
            <div class="justify-content-center row">
                <a href="products.php" class="btn">Products</a>
            </div>
        </div>
    </section>

    <?php include "includes/footer.php" ?>
    <?php include "includes/scripts.php" ?>
</body>

</html>