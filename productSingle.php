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

    <section id="product-single">
        <div class="container">
            <?php
            if (isset($_GET['post'])) {
                $id = $_GET['post'];
            } else {
                header("Location: products.php");
            }
            include "includes/conn.php";

            if ($id < 10) {
                $sql = "SELECT * FROM milk WHERE id = $id";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
            ?>
                        <div class="row justify-content-center align-items-center">
                            <div data-aos="zoom-in-up" class="col-lg-4 mb-3">
                                <img class="img-fluid" src="img/milk/<?php echo $row['image'] ?>" alt="">
                            </div>
                            <div data-aos="zoom-in-up" class="col-lg-5 mb-3">
                                <h4><?php echo $row['name'] ?></h4>
                                <table>
                                    <tr>
                                        <td class="heading">energy</td>
                                        <td><?php echo $row['energy'] ?> Kcal</td>
                                    </tr>

                                    <tr>
                                        <td class="heading">total fat</td>
                                        <td><?php echo $row['totfat'] ?>g</td>
                                    </tr>
                                    <tr>
                                        <td class="heading">saturated fat</td>
                                        <td><?php echo $row['satfat'] ?>g</td>
                                    </tr>
                                    <tr>
                                        <td class="heading">cholesterol</td>
                                        <td><?php echo $row['chol'] ?>mg</td>
                                    </tr>
                                    <tr>
                                        <td class="heading">total carbohydrate</td>
                                        <td><?php echo $row['totcarb'] ?>g</td>
                                    </tr>
                                    <tr>
                                        <td class="heading">protein</td>
                                        <td><?php echo $row['protein'] ?>g</td>
                                    </tr>
                                    <tr>
                                        <td class="heading">calcium</td>
                                        <td><?php echo $row['calcium'] ?>mg</td>
                                    </tr>
                                    <tr>
                                        <td class="heading">added sugar</td>
                                        <td><?php echo $row['addsugar'] ?>g</td>
                                    </tr>
                                    <tr>
                                        <td class="heading">trans fat</td>
                                        <td><?php echo $row['addsugar'] ?>g</td>
                                    </tr>
                                    <tr>
                                        <td class="heading">fat</td>
                                        <td><?php echo $row['fatper'] ?>% Minimum</td>
                                    </tr>
                                    <tr>
                                        <td class="heading">snf</td>
                                        <td><?php echo $row['snf'] ?>% Minimum</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    <?php
                    }
                }
            } elseif ($id >= 10 && $id < 19) {
                $sql = "SELECT * FROM buttermilk WHERE id = $id";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <div class="row justify-content-center align-items-center">
                            <div data-aos="zoom-in-up" class="col-lg-4 mb-3">
                                <img class="img-fluid" src="img/milk/<?php echo $row['image'] ?>" alt="">
                            </div>
                            <div data-aos="zoom-in-up" class="col-lg-5 mb-3">
                                <h4><?php echo $row['name'] ?></h4>
                                <table>
                                    <tr>
                                        <td class="heading">energy</td>
                                        <td><?php echo $row['energy'] ?> Kcal</td>
                                    </tr>
                                    <tr>
                                        <td class="heading">total fat</td>
                                        <td><?php echo $row['totfat'] ?>g</td>
                                    </tr>
                                    <tr>
                                        <td class="heading">saturated fat</td>
                                        <td><?php echo $row['satfat'] ?>g</td>
                                    </tr>
                                    <tr>
                                        <td class="heading">cholesterol</td>
                                        <td><?php echo $row['transfat'] ?>g</td>
                                    </tr>
                                    <tr>
                                        <td class="heading">total carbohydrate</td>
                                        <td><?php echo $row['totcarb'] ?>g</td>
                                    </tr>
                                    <tr>
                                        <td class="heading">added sugar</td>
                                        <td><?php echo $row['addsugar'] ?>g</td>
                                    </tr>
                                    <tr>
                                        <td class="heading">protein</td>
                                        <td><?php echo $row['protein'] ?>g</td>
                                    </tr>
                                    <tr>
                                        <td class="heading">calcium</td>
                                        <td><?php echo $row['calcium'] ?>g</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                <?php
                    }
                }
            } elseif ($id == 20) {
                ?>
                <div class="row justify-content-center align-items-center">
                    <div data-aos="zoom-in-up" class="col-lg-4 mb-3">
                        <img class="img-fluid" src="img/milk/ghee.png" alt="">
                    </div>
                    <div data-aos="zoom-in-up" class="col-lg-5 mb-3">
                        <h4>Desi Ghee (15Kg tin)</h4>
                        <table>
                            <tr>
                                <td class="heading">total energy</td>
                                <td>898.2 Kcal</td>
                            </tr>
                            <tr>
                                <td class="heading">carbohydrates (sugar: nil)</td>
                                <td>0g</td>
                            </tr>
                            <tr>
                                <td class="heading">protein</td>
                                <td>0g</td>
                            </tr>
                            <tr>
                                <td class="heading">fat</td>
                                <td>99.80g</td>
                            </tr>
                            <tr>
                                <td class="heading">saturated fat</td>
                                <td>65.5g</td>
                            </tr>
                            <tr>
                                <td class="heading">polyunsaturated fat</td>
                                <td>1.8g</td>
                            </tr>
                            <tr>
                                <td class="heading">monounsaturated fat</td>
                                <td>25.8g</td>
                            </tr>
                            <tr>
                                <td class="heading">cholesterol</td>
                                <td>250mg</td>
                            </tr>
                            <tr>
                                <td class="heading">trans fat</td>
                                <td>2.0g</td>
                            </tr>
                            <tr>
                                <td class="heading">calcium</td>
                                <td>0.02g</td>
                            </tr>
                            <tr>
                                <td class="heading">phosphorus</td>
                                <td>0.05g</td>
                            </tr>
                            <tr>
                                <td class="heading">vitamin A</td>
                                <td>1500mcg</td>
                            </tr>
                            <tr>
                                <td class="heading">vitamin B</td>
                                <td>94mcg</td>
                            </tr>
                            <tr>
                                <td class="heading">vitamin K</td>
                                <td>5.6mcg</td>
                            </tr>
                            <tr>
                                <td class="heading">vitamin E</td>
                                <td>15mcg</td>
                            </tr>
                        </table>
                    </div>
                </div>
            <?php

            }
            ?>
        </div>
    </section>

    <?php include "includes/footer.php" ?>
    <?php include "includes/scripts.php" ?>
</body>

</html>