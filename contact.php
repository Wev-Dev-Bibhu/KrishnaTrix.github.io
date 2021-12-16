<?php
define('MYSITE', true);
include 'config.php';

error_reporting(0);
// For not showing any error

if (isset($_POST['submit'])) { // Check press or not Post Comment Button
    $rating = strip_tags($_POST['rate']); // Get Name from form
    $name = strip_tags($_POST['name']); // Get Email from form
    $message = strip_tags($_POST['message']); // Get Comment from form

    $sql = "INSERT INTO comments VALUES ('','$rating', '$name', '$message')";
    $result =  mysqli_query($conn, $sql);
    if ($result) {
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Succesfully Updated');
        window.location.href='http://localhost/couch%20ninja/contact.php';
        </script>");
    }
    // header('Location:contact.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Your description">
    <meta name="author" content="Your name">
    <meta name="keywords" content="HTML, CSS, JavaScript, Website developing, development, how to build website, website making company">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
    <meta property="og:site_name" content="E-Web Tech" /> <!-- website name -->
    <meta property="og:site" content="https://digitalpreneurservice.000webhostapp.com/" /> <!-- website link -->
    <meta property="og:title" content="Make your own Website Now easily with Us" />
    <!-- title shown in the actual shared post -->
    <meta property="og:description" content="Website Making Company. Efficient building developer." />
    <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>Contact to Us. Helping you with queries and your problems | E-Web Tech Pvt Ltd.</title>
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="./assets/images/favicon.png">
</head>

<body>


    <?php
    include('navbar.php');
    ?>
    <!-- Header -->
    <header class="ex-header pb-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 ">
                    <h1>Contact Us</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->
    <!-- Contact -->
    <section class="contact d-flex align-items-center py-0" id="contact">
        <div class="container-fluid text-light">
            <div class="row">
                <div class="col-lg-6 d-flex justify-content-center justify-content-lg-end align-items-center px-lg-5">
                    <div class="about-k">
                        <img src="./assets/images/K4.webp" alt="">
                    </div>
                    <form id="frmSubmit" class="needs-validation" name="myForm" novalidate>
                        <div style="width:90%">
                            <div class="text-center text-lg-start py-4 pt-lg-0">
                                <h2 class="py-2">Send your query</h2>
                                <p class="para-light">Send Us your queries or Message to improve ourself & to provide u
                                    the best Help related to your Problems.</p>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group py-2">
                                            <input type="text" name="name" class="form-control form-control-input field" id="validationCustomUsername" required placeholder="Enter Your name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group py-2">
                                            <input type="text" name="number" class="form-control form-control-input field" value="" required placeholder="Enter phone number">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group py-1">
                                    <input type="email" name="email" class="form-control form-control-input field" required placeholder="Enter email">
                                </div>
                                <div class="form-group py-1">
                                    <input type="text" name="company" class="form-control form-control-input field" required placeholder="Enter Your Company Name">
                                </div>
                                <div class="form-group py-2">
                                    <textarea style="resize: none;" name="message" class="form-control form-control-input field" rows="5" required placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="my-3">
                                <button class="btn form-control-submit-button" onclick="validateForm()" type="submit" id="btnSubmit" name="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                    <!-- end of div -->
                </div> <!-- end of col -->
                <div class="col-lg-6 d-flex align-items-center">
                    <img class="img-fluid d-none d-lg-block contact-img" src="./assets/images/contact.webp" alt="contact">
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section>
    <!-- end of contact -->

    <?php
    include('footer.php');
    ?>


    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/79ee746da7.js" crossorigin="anonymous"></script>
    <script src="./js/script.js"></script> <!-- Custom scripts -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        function validateForm() {
            let all = document.forms["myForm"]["name", "number", "company", "email", "message"].value;
            let name = document.forms["myForm"]["name"].value;
            let number = document.forms["myForm"]["number"].value;
            let company = document.forms["myForm"]["company"].value;
            let email = document.forms["myForm"]["email"].value;
            let message = document.forms["myForm"]["message"].value;
            if (all == "") {
                alert("Please Fill all Details!!");
                return false;
            } else if (name == "") {
                alert("Please Enter Valid Name!!");
                return false;
            } else if (number == "") {
                alert("Please Enter Valid Number!!");
                return false;

            } else if (company == "") {
                alert("Please Enter Valid Company Name!!");
                return false;

            } else if (email == "") {
                alert("Please Enter Valid Email!!");
                return false;

            } else if (message == "") {
                alert("Please Enter Valid Mssage!!");
                return false;

            } else {
                document.getElementById("btnSubmit").innerHTML = "Please Wait";
                jQuery('#frmSubmit').on('submit', function(e) {
                    e.preventDefault();
                    jQuery('#btnSubmit').attr('disabled', true);
                    jQuery.ajax({
                        url: 'https://script.google.com/macros/s/AKfycbywuZh_xy70DS5Ob9ThbC6fzS9fvF-4oDBXC3wo8rBJRBdq2VQYL-uWGg6qn0HDqwCi/exec',
                        type: 'post',
                        data: jQuery('#frmSubmit').serialize(),
                        success: function(result) {
                            jQuery('#frmSubmit')[0].reset();
                            jQuery('#frmSubmit').removeClass("was-validated");
                            // jQuery('#btnSubmit').value('Please wait');
                            jQuery('#btnSubmit').attr('disabled', false);
                            document.getElementById("btnSubmit").innerHTML = "Submit";
                            window.alert('Thanks for Contacting Us.. We will reach you Shortly!');
                            document.getElementById("btnSubmit").innerHTML = "Submit";
                            // window.location.href = 'index.php';
                        }
                    });


                });
            }
        };
    </script>


</body>

</html>