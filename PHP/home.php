<?php 
    require "../includes/common.php";
    if(!isset($_SESSION['email'])) {
        header('location: index.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>E-Store</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php 
        include "../includes/header.php";
        include "../includes/check_if_added.php";
    ?>
    <div>
        <div class="container-fluid top">
            <div class="jumbotron">
                <h1>Welcome to our E-Store!</h1>
                <p>We have the best mobile deals for you. No need to hunt around, we have all in one place.</p>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">Mobile 1</div>
                        <div class="panel-body">
                            <center>
                                <img src="../Img/1.jpg" class="img-responsive" alt="Phone">
                            </center>
                        </div>
                        <div class="panel-footer">
                            <h4>Redmi Note 9 Pro Max</h4>
                            <p>Price: ₹ 17,000 </p>
                            <p>Xiaomi Redmi Note 9 Pro Max smartphone runs on Android v10 (Q) operating system. The phone is powered by Octa core (2.3 GHz, Dual core, Kryo 465 + 1.8 GHz, Hexa Core, Kryo 465) processor. It runs on the Qualcomm Snapdragon 720G Chipset. It has 6 GB RAM and 64 GB internal storage.</p>
                            <?php if(check_if_added_to_cart(1)) {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else { ?>
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">Mobile 2</div>
                        <div class="panel-body">
                            <center>
                                <img src="../Img/2.jpg" class="img-responsive" alt="Phone">
                            </center>
                        </div>
                        <div class="panel-footer">
                            <h4>Redmi Note 9 Pro</h4>
                            <p>Price: ₹ 14,000 </p>
                            <p>It has a 6.67-inch LCD screen with a 60Hz refresh rate and hole-punch front camera at the top. The processor is a Qualcomm Snapdragon 720G which is surprisingly powerful for this segment. ... There's also an 8-megapixel wide-angle camera, a 5-megapixel macro camera, and a 2-megapixel depth sensor.</p>
                            <?php if(check_if_added_to_cart(2)) {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else { ?>
                                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">Mobile 3</div>
                        <div class="panel-body">
                            <center>
                                <img src="../Img/3.jpg" class="img-responsive" alt="Phone">
                            </center>
                        </div>
                        <div class="panel-footer">
                            <h4>Redmi 8A Dual</h4>
                            <p>Price: ₹ 9,000 </p>
                            <p>Redmi 8A Dual is powered by a 1.45GHz octa-core Qualcomm Snapdragon 439 processor that features 4 cores clocked at 1.95GHz and 4 cores clocked at 1.45GHz. It comes with 2GB of RAM. The Redmi 8A Dual runs Android 9.0 and is powered by a 5000mAh battery. It is very cheap and affordable also.</p>
                            <?php if(check_if_added_to_cart(3)) {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else { ?>
                                    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">Mobile 4</div>
                        <div class="panel-body">
                            <center>
                                <img src="../Img/4.jpg" class="img-responsive" alt="Phone">
                            </center>
                        </div>
                        <div class="panel-footer">
                            <h4>iPhone XR</h4>
                            <p>Price: ₹ 53,000 </p>
                            <p>The phone comes with a 6.10-inch touchscreen display with a resolution of 828x1792 pixels at a pixel density of 326 pixels per inch (ppi) and an aspect ratio of 19.5:9. Apple iPhone XR is powered by a hexa-core Apple A12 Bionic processor. It comes with 3GB of RAM. It is a very good product.</p>
                            <?php if(check_if_added_to_cart(4)) {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else { ?>
                                    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">Mobile 5</div>
                        <div class="panel-body">
                            <center>
                                <img src="../Img/5.jpg" class="img-responsive" alt="Phone">
                            </center>
                        </div>
                        <div class="panel-footer">
                            <h4>iPhone XS Max</h4>
                            <p>Price: ₹ 69,000 </p>
                            <p>The Apple iPhone XS Max is a smartphone that was tested with the iOS 12.0 operating system. This model weighs 7.4 ounces, has a 6.5 inch touch screen display, 12-megapixel main camera, and 7-megapixel selfie camera. It comes with 4GB of RAM. It was tested with 64GB of storage.</p>
                            <?php if(check_if_added_to_cart(5)) {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else { ?>
                                    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">Mobile 6</div>
                        <div class="panel-body">
                            <center>
                                <img src="../Img/6.jpg" class="img-responsive" alt="Phone">
                            </center>
                        </div>
                        <div class="panel-footer">
                            <h4>iPhone 11</h4>
                            <p>Price: ₹ 69,000 </p>
                            <p>iPhone 11 features. The camera has wide and ultra-wide lenses, rather than wide and telephoto like many people had predicted. The front-facing camera has been updated to 12 MP with wide-angle selfie support when the phone is in landscape. You can also take 4K video at 60 fps, as well as slow-mo videos.</p>
                            <?php if(check_if_added_to_cart(6)) {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else { ?>
                                    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php }
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>