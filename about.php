<?php
define('MYSITE', true);
include 'config.php';
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
    <title>E-Web Tech Pvt Ltd.</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="./css/style.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="./assets/images/favicon.png">
    <style>
        img[alt="www.000webhost.com"] {
            display: none;
        }
    </style>
</head>

<body>


    <?php
    include('navbar.php');
    ?>
    <!-- Img Header Starts-->
    <section>
        <div class="bg-img">
        </div>
        <div class="about-box">
            <div class="box-1">
                <div class="box-icon">
                    <i class="far fa-gem"></i>
                </div>
                <div class="box-h2">
                    <h2>Heading</h2>
                </div>
                <p class="box-text">
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                </p>
            </div>
            <div class="box-2">
                <div class="box-icon">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <div class="box-h2">
                    <h2>Heading</h2>
                </div>
                <p class="box-text">
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                </p>
            </div>
            <div class="box-3">
                <div class="box-icon">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <div class="box-h2">
                    <h2>Heading</h2>
                </div>
                <p class="box-text">
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                </p>
            </div>
            <div class="box-4">
                <div class="box-icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="box-h2">
                    <h2>Heading</h2>
                </div>
                <p class="box-text">
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                </p>
            </div>

        </div>
    </section>
    <!-- Img Header Ends -->

    <!-- Header -->
    <header class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <h1>About Us</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->
    <div class="d-flex testimonial text-light">
        <div class="container">
            <div class="row">

                <div class="col-md-9">
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam facilis mollitia consequatur nihil inventore similique. Delectus, pariatur quis, est ipsam iste atque aliquam commodi nam aperiam, fuga debitis doloremque in.
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam facilis mollitia consequatur nihil inventore similique. Delectus, pariatur quis, est ipsam iste atque aliquam commodi nam aperiam, fuga debitis doloremque in.
                        , est ipsam iste atque aliquam commodi nam aperiam, fuga debitis doloremque in.
                        Cupiditate ab ipsum corporis, earum a eaque et sit minus. Eaque delectus consequuntur debitis magni temporibus similique itaque recusandae numquam fugit esse maxime quis totam perspiciatis veniam, quisquam nam excepturi.</p>
                </div>
                <!-- <div class="col-3">
                    <img src="./assets/images/about.webp" alt="" class="img-fluid">
                </div> -->
            </div>
        </div>
    </div>
    <!-- About Team -->
    <div class="d-flex testimonial text-light">
        <div class="col-12 text-align-center">
            <h2 class="text-primary my-2">Our Team</h2>
        </div>
    </div>
    <div class=" d-flex testimonial text-light">
        <div class="container">
            <div class="row text-align-center">
                <div class="col-md-4 px-4 my-4  reveal">
                    <img src="./assets/images/aparna.webp" alt="img" class="img-fluid">
                    <h3 class="text-secondary my-2">Anshu Singh</h3>
                    <h5>Project Manager</h5>
                    <a href="https://instagram.com/eerie.life4__?utm_medium=copy_link"> <i class="fab fa-instagram fa-2x py-2 m-3"></i></a>
                    <a href="https://www.facebook.com/aparna.mandal.1293"> <i class="fab fa-facebook-f fa-2x py-2 m-3"></i></a>
                    <a href="#"> <i class="fab fa-linkedin fa-2x py-2 m-3"></i></a>
                </div>
                <div class="col-md-4 px-4 my-4  reveal">
                    <img src="./assets/images/bibhu.webp" alt="img" class="img-fluid">
                    <h3 class="text-secondary my-2">Bibhuti Ranjan Das</h3>
                    <h5>Developer</h5>
                    <a href="https://instagram.com/eerie.life4__?utm_medium=copy_link"> <i class="fab fa-instagram fa-2x py-2 m-3"></i></a>
                    <a href="https://www.facebook.com/aparna.mandal.1293"> <i class="fab fa-facebook-f fa-2x py-2 m-3"></i></a>
                    <a href="#"> <i class="fab fa-linkedin fa-2x py-2 m-3"></i></a>
                </div>
                <div class="col-md-4 px-4 my-4  reveal">
                    <img src="./assets/images/arup.webp" alt="img" class="img-fluid">
                    <h3 class="text-secondary my-2">Arup Padhi</h3>
                    <h5> Developer</h5>
                    <a href="https://instagram.com/arupkumar_padhi?utm_medium=copy_link"> <i class="fab fa-instagram fa-2x py-2 m-3"></i></a>
                    <a href="https://www.facebook.com/arupkumar.padhi.5"> <i class="fab fa-facebook-f fa-2x py-2 m-3"></i></a>
                    <a href="https://www.linkedin.com/in/arup-kumar-padhi-452b35210"> <i class="fab fa-linkedin fa-2x py-2 m-3"></i></a>
                </div>

            </div>

        </div>
    </div>
    <div class="d-flex testimonial text-light">
        <div class="container reveal">
            <div class="row text-align-center">
                <div class="col-md-6 reveal">
                    <img src="./assets/images/aparna.webp" alt="img" class="img-fluid">
                    <h3 class="text-secondary my-2">Aparna Mondal</h3>
                    <h5>Content Writer</h5>
                    <a href="https://instagram.com/eerie.life4__?utm_medium=copy_link"> <i class="fab fa-instagram fa-2x py-2 m-3"></i></a>
                    <a href="https://www.facebook.com/aparna.mandal.1293"> <i class="fab fa-facebook-f fa-2x py-2 m-3"></i></a>
                    <a href="#"> <i class="fab fa-linkedin fa-2x py-2 m-3"></i></a>
                </div>
                <div class="col-md-6 reveal">
                    <img src="./assets/images/aparna.webp" alt="img" class="img-fluid">
                    <h3 class="text-secondary my-2">Deepak Kumar</h3>
                    <h5>Designer</h5>
                    <a href="https://instagram.com/eerie.life4__?utm_medium=copy_link"> <i class="fab fa-instagram fa-2x py-2 m-3"></i></a>
                    <a href="https://www.facebook.com/aparna.mandal.1293"> <i class="fab fa-facebook-f fa-2x py-2 m-3"></i></a>
                    <a href="#"> <i class="fab fa-linkedin fa-2x py-2 m-3"></i></a>
                </div>
            </div>

        </div>
    </div>
    <!-- End of About Team -->

    <section class="strategy">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mt-5">
                    <h2>BRAND STRATEGY</h2>
                    <p>
                        Recruitment Agency that strives to help businesses put together a staff of highly efficient and skilled professionals, and also serve employees by opening up new vistas of job opportunities for them.
                    </p>
                    <li><i class="fas fa-minus"> &nbsp;</i>Brand equity audit</li>
                    <li><i class="fas fa-minus"> &nbsp;</i>Audience analysis</li>
                    <li><i class="fas fa-minus"> &nbsp;</i>Competitive review</li>
                    <li><i class="fas fa-minus"> &nbsp;</i>Strategic direction</li>



                </div>
                <div class="col-md-6 bg-primary mt-5">

                    <h2>COMMUNICATION STRATEGY</h2>
                    <p>
                        Recruitment Agency that strives to help businesses put together a staff of highly efficient and skilled professionals, and also serve employees by opening up new vistas of job opportunities for them.
                    </p>
                    <li><i class="fas fa-minus"> &nbsp;</i> Visual positioning</li>
                    <li><i class="fas fa-minus"> &nbsp;</i>Visual identity system</li>
                    <li><i class="fas fa-minus"> &nbsp;</i>Icon & illustration guides</li>
                    <li><i class="fas fa-minus"> &nbsp;</i>Brand application</li>

                </div>
            </div>
        </div>
    </section>

    <?php
    include('footer.php');
    ?>
</body>

</html>