<?php
    
    require_once 'include/dataClass.php';
    $dc = new DataClass();
    header('request.php');

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>food</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ranchers">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
</head>

<body>
    <section class="row contact-clean" style="background: linear-gradient(black, rgb(148,171,194) 0%, rgb(40,56,72));">
        <?php 
            $sql = "select * from donor_info";
            $fetch=$dc->executeQuery($sql);
            while($row=mysqli_fetch_array($fetch))
            {
        ?>
        <form class="col-3" method="post" style="background: rgb(231,228,228);border-radius: 1rem;margin: 25px 100px 25px 100px">
            <h2 class="text-center" style="font-size: 24px;">Request For Food</h2>
            <p>Name: <?= $row['fullname'];?></p>
            <p>Contact No: +91<?= $row['contact'];?></p>
            <p>Address: <?= $row['address'];?></p>
            <p>Information: <?= $row['donation_info'];?></p>
            <button class="btn btn-primary" type="button" style="background: rgb(40,56,72);border-radius: 0.5rem;">request</button>         
        </form>
        <?php
            }
        ?>
    </section>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-secondary text-uppercase" id="mainNav"
        style="height: 52px;">
        <div class="container"><a class="navbar-brand text-uppercase" data-bss-hover-animate="pulse" href="index.html"
                style="color: rgb(231,115,19);background: rgb(44,62,80);border-radius: 0px;font-size: 35px;font-family: Ranchers, cursive;text-shadow: 04px 0px rgb(7,3,0);border: 0px none var(--bs-dark);height: 52px;margin: 0px 16px 10px -70px;">donate
                food</a><button class="navbar-toggler text-white bg-primary navbar-toggler-right text-uppercase rounded"
                data-bs-toggle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation" data-bs-target="#navbarResponsive"><i class="fa fa-bars"></i></button>
        </div>
    </nav>
    
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="assets/js/freelancer.js"></script>
</body>

</html>