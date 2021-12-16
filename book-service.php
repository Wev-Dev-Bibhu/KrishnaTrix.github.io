<?php
define('MYSITE', true);
include 'config.php';

error_reporting(0);
// For not showing any error

if (isset($_POST['submit'])) { // Check press or not Post Comment Button
    $rating = $_POST['rate']; // Get Name from form
    $name = $_POST['name']; // Get Email from form
    $message = $_POST['message']; // Get Comment from form

    $sql = "INSERT INTO comments VALUES ('','$rating', '$name', '$message')";
    mysqli_query($conn, $sql);
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
    <title>E-Web Tech Pvt Ltd.| The best Website Design for newly startup Companies or bloggers. </title>
    <!-- Styles -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="./css/style.css" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="./assets/images/favicon.webp">
    </style>
</head>
<style>
    .info p {
        text-align: center;
        color: #999;
        text-transform: none;
        font-weight: 600;
        font-size: 15px;
        margin-top: 2px
    }

    .info i {
        color: #F6AA93;
    }

    .book_header form {
        border-radius: 5px;
        max-width: 700px;
        width: 100%;
        margin: 5% auto;
        background-color: #FFFFFF;
        overflow: hidden;
    }

    .col-md-6 p span {
        color: #F00;
    }

    .col-md-6 p {
        margin: 0px;
        font-weight: 500;
        line-height: 2;
        color: #333;
    }

    .serv_header {
        font-size: 20px;
        background: #F6AA93 none repeat scroll 0% 0%;
        padding: 22px 25px;
        border-radius: 5px 5px 0px 0px;
        margin: auto;
        text-shadow: none;
        text-align: center;
        color: #fff;
    }

    .book_header input {
        border-radius: 0px 5px 5px 0px;
        border: 1px solid grey;
        margin-bottom: 15px;
        width: 75%;
        height: 40px;
        float: left;
        padding: 0px 15px;
        outline: none;
    }

    .book_header textarea {
        border-radius: 0px 5px 5px 0px;
        border: 1px solid grey;
        outline: none;
        margin: 0;
        width: 75%;
        height: 130px;
        float: left;
        padding: 0px 15px;
        resize: none;
    }

    .icon-case {
        width: 35px;
        float: left;
        border-radius: 5px 0px 0px 5px;
        background: #eeeeee;
        height: 42px;
        position: relative;
        text-align: center;
        line-height: 40px;
    }

    .serv_header i {
        color: #555;
    }

    .serv_header .contentform {
        display: flex;
        padding: 40px 30px;
    }

    .bouton-contact {
        background-color: #81BDA4;
        color: #FFF;
        text-align: center;
        width: 100%;
        border: 0;
        padding: 17px 25px;
        border-radius: 0px 0px 5px 5px;
        cursor: pointer;
        margin-top: 40px;
        font-size: 18px;
    }

    .leftcontact {
        width: 49.5%;
        float: left;
        border-right: 1px dotted #CCC;
        box-sizing: border-box;
        padding: 0px 15px 0px 0px;
    }

    .rightcontact {
        width: 49.5%;
        float: right;
        box-sizing: border-box;
        padding: 0px 0px 0px 15px;
    }
</style>

<body>

    <?php
    include('navbar.php');
    ?>
    <!-- Header -->
    <header class="ex-header pb-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 ">
                    <h1>Book Your Service</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->
    <section class="book_header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form>
                        <h1 class="serv_header">Should you have any questions, please do not hesitate to contact us :</h1>

                        <div class="contentform row">
                            <div class="col-md-6">
                                <p>Name <span>*</span></p>
                                <span class="icon-case"><i class="fa fa-user"></i></span>
                                <input type="text" name="name" id="prenom" />

                            </div>

                            <div class="col-md-6">
                                <p>E-mail <span>*</span></p>
                                <span class="icon-case"><i class="fa fa-envelope-o"></i></span>
                                <input type="email" name="email" id="email" data-rule="email">

                            </div>

                            <div class="col-md-6">
                                <p>Company <span>*</span></p>
                                <span class="icon-case"><i class="fa fa-home"></i></span>
                                <input type="text" name="society" id="society" />

                            </div>

                            <div class="col-md-6">
                                <p>Company Address <span>*</span></p>
                                <span class="icon-case"><i class="fa fa-location-arrow"></i></span>
                                <input type="text" name="adresse" id="adresse" />

                            </div>

                            <div class="col-md-6">
                                <p>Postcode <span>*</span></p>
                                <span class="icon-case"><i class="fa fa-map-marker"></i></span>
                                <input type="text" name="postal" id="postal">

                            </div>
                            <div class="col-md-6">
                                <p>City <span>*</span></p>
                                <span class="icon-case"><i class="fa fa-building-o"></i></span>
                                <input type="text" name="ville" id="ville">

                            </div>

                            <div class="col-md-6">
                                <p>Phone number <span>*</span></p>
                                <span class="icon-case"><i class="fa fa-phone"></i></span>
                                <input type="text" name="phone" id="phone" data-rule="maxlen:10">

                            </div>

                            <div class="col-md-6">
                                <p>Function <span>*</span></p>
                                <span class="icon-case"><i class="fa fa-info"></i></span>
                                <input type="text" name="fonction" id="fonction">

                            </div>

                            <div class=" col-md-6">
                                <p>Subject <span>*</span></p>
                                <span class="icon-case"><i class="fa fa-comment-o"></i></span>
                                <input type="text" name="sujet" id="sujet">

                            </div>

                            <div class="col-md-6">
                                <p>Message <span>*</span></p>
                                <span class="icon-case"><i class="fa fa-comments-o"></i></span>
                                <textarea name="message" rows="14"></textarea>

                            </div>
                            <!-- </div> -->
                        </div>
                        <button type="submit" class="bouton-contact">Send</button>

                    </form>

                </div>

            </div>
        </div>
    </section>
    <?php
    include('footer.php');
    ?>
</body>

</html>