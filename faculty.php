<?php
include "clientClass/ClientUniversity.php";

$client = new ClientUniversity();
$getfaculty = $client->getFaculty();

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Just+Another+Hand|Open+Sans:300,400" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- START: header -->

    <div class="probootstrap-loader"></div>

    <header role="banner" class="probootstrap-header">
        <div class="container">
            <a href="index.php" class="probootstrap-logo">Unipare<span>.</span></a>

            <a href="#" class="probootstrap-burger-menu visible-xs"><i>Menu</i></a>
            <div class="mobile-menu-overlay"></div>

            <nav role="navigation" class="probootstrap-nav hidden-xs">
                <ul class="probootstrap-main-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="cost.php">Cost</a></li>
                    <li><a href="waiver.php">Waiver</a></li>
                    <li><a href="service.php">Service</a></li>
                    <li><a href="faculty.php">Faculty</a></li>
                    <li><a href="details.php">Details</a></li>
                    <li><a href="findbest.php">Best for me</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>


                <div class="extra-text visible-xs">
                    <a href="#" class="probootstrap-burger-menu"><i>Menu</i></a>
                    <h5>Connect</h5>
                    <ul class="social-buttons">
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-facebook2"></i></a></li>
                        <li><a href="#"><i class="icon-instagram2"></i></a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- END: header -->



    <!-- Table  -->
    <section class="probootstrap-section">
        <div class="container">
            <div class="row">
                <!-- search bar -->
<!--                <div class="search-bar-head pull-right">-->
<!--                    <form>-->
<!--                        <input type="text" name="search" placeholder="Search..">-->
<!--                    </form>-->
<!--                    <div class="text-result float-right">-->
<!--                        Showing 5 results ....-->
<!--                    </div>-->
<!--                </div>-->
                <!-- end of search -->
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#Rank</th>
                            <th scope="col">University</th>
                            <th scope="col">Percentage of faculties qualifications</th>
                        </tr>
                    </thead>
                    <tbody style="background-color: #fff;">

                    <?php
                    $count = 0;
                    if($getfaculty){

                        while ($result = $getfaculty->fetch_assoc()){


                            ?>
                            <tr>
                                <th scope="row"><?php echo $count += 1 ?></th>
                                <td><?php echo $result['unvname']; ?></td>
                                <td><?php echo $result['faculty'].'%';
                                    if(($result['faculty'])>=90){
                                        echo "--Good";
                                    }elseif (($result['faculty'])<90){
                                        echo "--Average";
                                    } ?></td>
                            </tr>

                            <?php

                        }
                    }
                    else {
                        ?>
                        <tr>
                            <td></td>
                            <td style="color: blue">Please Select a Course!</td>
                            <td></td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>

            </div>
        </div>
    </section>

    <!-- End Table -->

    <footer class="probootstrap-bg">
        <div class="container">

            <div class="row copyright">
                <div class="col-md-6">
                    <div class="probootstrap-footer-widget">
                        <p>&copy; 2017 <a href="https://Unipare.com/">Unipare</a></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="probootstrap-footer-widget right">
                        <ul class="probootstrap-footer-social">
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-instagram2"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-chevron-thin-up"></i></a>
    </div>


    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>