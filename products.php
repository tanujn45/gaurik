<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "includes/header.php" ?>
    <style>
        body {
            background-color: #045c8c;
            color: white;
        }
    </style>
</head>

<body>
    <?php include "includes/navbar.php" ?>

    <section id="products-header">
        <div class="container">
            <div class="row justify-content-center align-items-center ">
                <h1>Our Products</h1>
            </div>
        </div>
    </section>

    <section id="products">
        <div class="container">
            <?php
            include "includes/conn.php";
            $sql = "SELECT * FROM milk";
            $result = mysqli_query($conn, $sql);
            ?>
            <h3>Gaurik Milk</h3>
            <h6 class="mb-4">Swaad malwa ka</h6>
            <div class="row justify-content-center align-items-center">
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <div data-aos="fade-up" class="col-lg-3 col-md-4 col-sm-6">
                            <div class="mx-3 mb-5 milk">
                                <a href="productSingle.php?post=<?php echo $row['id'] ?>">
                                    <img src="img/milk/<?php echo $row['image'] ?>" alt="Milk Image" class="img-fluid">
                                    <p class="btn mt-3"><?php echo $row['name'] ?></p>
                                </a>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>

            <div class="row justify-content-center align-items-center mt-5">
                <div class="col-lg-2">
                </div>
                <div class="col-lg-3 px-3" data-aos="fade-up">
                    <img src="img/milk/ghee.png" class="img-fluid mb-3" alt="">
                </div>
                <div class="col-lg-5" data-aos="fade-up">
                    <h3 style="text-align: left">Gaurik desi ghee (15Kg tin)</h3>
                    <h6 style="text-align: left">Shudhata me no compromise</h6>
                    <a href="productSingle.php?post=20">
                        <p class="btn mt-3">desi ghee</p>
                    </a>
                </div>
                <div class="col-lg-2">
                </div>
            </div>

            <?php
            $sql = "SELECT * FROM buttermilk";
            $result = mysqli_query($conn, $sql);
            ?>
            <h3 class="mt-5">Gaurik Butter Milk</h3>
            <h6 class="mb-4">Refreshing</h6>
            <div class="row justify-content-center align-items-center">
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <div data-aos="fade-up" class="col-lg-3 col-md-4 col-sm-6">
                            <div class="mx-3 mb-5 milk">
                                <a href="productSingle.php?post=<?php echo $row['id'] ?>">
                                    <img src="img/milk/<?php echo $row['image'] ?>" alt="Milk Image" class="img-fluid">
                                    <p class="btn mt-3"><?php echo $row['name'] ?></p>
                                </a>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </section>

    <?php include "includes/footer.php" ?>
    <?php include "includes/scripts.php" ?>
</body>

</html>