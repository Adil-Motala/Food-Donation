<?php
    require_once 'include/dataClass.php';
    $dc = new DataClass();
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
    <?php 
        if(isset($_POST['submit'])) {
            $name = $_POST['name'];
            $contact = $_POST['contact'];
            $address = $_POST['address'];
            $information = $_POST['information'];

            $sql = "insert into donor_info (fullname, contact, address, donation_info) values('$name', '$contact', '$address', '$information')";

            if ($dc->executeQuery($sql))
                echo('<script>alert("Data inserted succesfully. ThankYou For Your Initiative, Someone in need would contact you soon.");</script>');
            else
                echo('<script>alert("Failed T0 insert data.");</script>');
                
            header('index.html');
        }
    ?>
    <section class="register-photo" style="background: linear-gradient(rgb(148,171,194) 10%, rgb(40,56,72) 72%);">
        <div class="border rounded-pill form-container" style="border-style: none;">
            <div data-bss-hover-animate="pulse" class="image-holder"
                style="border-style: none;border-top-left-radius: 1rem;border-bottom-left-radius: 1rem;"></div>
            <form method="post"
                style="color: rgb(80,94,108);background: rgb(231,228,228);border-style: none;border-top-right-radius: 1rem;border-bottom-right-radius: 1rem;">
                <h2 class="text-center">Donor Information</h2>
                <div class="mb-3"><input id="name" class="border rounded-pill form-control" type="text" name="name"
                        placeholder="Full Name" required="" autocomplete="off"></div>
                <div class="mb-3"><input id="contact" class="border rounded-pill form-control" type="tel" name="contact"
                        placeholder="Contact No" inputmode="numeric" required="" minlength="10" maxlength="10"
                        autocomplete="off"></div>
                <div class="mb-3"><input id="address" class="border rounded-pill form-control form-control-lg" type="text" name="address"
                        placeholder="Address" required="" style="width: 349px;font-size: 16px;" autocomplete="off">
                </div><input id="information" class="border rounded-pill form-control" type="text" name="information" placeholder="Information"
                    required="" autocomplete="off">
                <div class="mb-3"><button class="btn btn-primary border rounded-pill d-block w-100" type="submit"
                        style="background: rgb(40,56,72);" name="submit" value="insert">SUBMIT</button></div>
            </form>
        </div>
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