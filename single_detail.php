<?php

include "clientClass/ClientSubjects.php";

$client = new ClientSubjects();

if (!isset($_GET['uniId']) || $_GET['uniId'] == null){
    echo "<script>window.location = 'details.php'; </script>";
}else{
    $id = $_GET['uniId'];
    $get_uni_details = $client->getUuniversityDetails($id);
//    var_dump($get_uni_details->fetch_assoc());
    $result = $get_uni_details->fetch_assoc();
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Just+Another+Hand|Open+Sans:300,400" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
                    <li ><a href="index.php">Home</a></li>
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

    <!-- section with university details and name -->
    <div class="container">
        <div class="row jumbotron">

            <div class="contenct-section">
                <h3><?php echo $result['unvname'];?></h3>
                <p><?php echo $result['details'];?></p>
                <p> Offered Subjects</p>
                <ul>
                   <?php while($result = $get_uni_details->fetch_assoc()){ ?>
                    <li><?php echo $result['courseName'];?></li>
<?php } ?>
                </ul>
                
            </div>
            <div class="tab-scetion">
                <ul class="nav nav-tabs">

                    <li><a href="#home">CSE</a></li>


                </ul>

                <div class="tab-content">


                    <div id="home" class="tab-pane fade in">
                        <h3>CSE</h3>
                        <h5>Semester Details</h5>
                        <p>Total 4 years (12 Semseters)</p>
                        <!-- Semester  -->
                        <div class="semster-detail">
                            
                            <table class="table table-bordered">
                                <h4>Semester 1</h4>
                                <thead>
                                    <tr>
                                        <th>Subject Name</th>
                                        <th>Credit</th>
                                        <th>Cost</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Subject 1</td>
                                        <td>3</td>
                                        <td>3000</td>
                                    </tr>
                                    <tr>
                                        <td>Subject 1</td>
                                        <td>3</td>
                                        <td>3000</td>
                                    </tr>
                                    <tr>
                                        <td>Subject 1</td>
                                        <td>3</td>
                                        <td>3000</td>
                                    </tr>
                                    <tr>
                                        <td><b>Total</b></td>
                                        <td><b>9 credit</b></td>
                                        <td><b>9000</b></td>
                                    </tr>
                                </tbody>
                                
                            </table>

                                
                        </div>
                        <!-- end semester -->
                    </div>



                </div>
            </div>
            
        </div>
    </div>

    <!-- end section -->

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

<script>
    $(document).ready(function () {
        $(".nav-tabs a").click(function () {
            $(this).tab('show');
        });
    });
</script>
    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>