<?php
    include("connection.php");
    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $subj = $_POST['subject'];
        $msg = $_POST['msg'];

        if(!empty($name) && !empty($email) && !empty($phone) && !empty($subj) && !empty($msg) )
        {
            $query = "insert into contact_us (name,email,phone,subject,msg) values ('$name','$email','$phone','$subj','$msg')";

            mysqli_query($con,$query);
            /* Mail Code Start */
            $to = "mdmarufnishan@gmail.com";
            $subject = $subj;
            
            $message = "
            <html>
            <head>
            <title>portfolio.nishanbd.com</title>
            </head>
            <body>
            <p>Message : $msg</p>
            <table style='border-collapse: 20px;padding:5px;'>
                <tr>
                <th style='padding:5px;font-size: large;border-bottom: 2px solid black;'>Name</th>
                <th style='padding:5px;font-size: large;border-bottom: 2px solid black;'>Email</th>
                <th style='padding:5px;font-size: large;border-bottom: 2px solid black;'>Phone</th>
                </tr>
                <tr>
                <td style='border-radius: 10px;background-color: aquamarine;color: rgb(185, 50, 50);border-collapse: collapse;font-size: large;padding:5px;'>$name</td>
                <td style='border-radius: 10px;background-color: aquamarine;color: rgb(185, 50, 50);border-collapse: collapse;font-size: large;padding:5px;'>$email</td>
                <td style='border-radius: 10px;background-color: aquamarine;color: rgb(185, 50, 50);border-collapse: collapse;font-size: large;padding:5px;'>$phone</td>
                </tr>
            </table>
            </body>
            </html>
            ";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            
            $headers .= 'From: <mdmarufnishan@nishanbd.com>' . "\r\n";
            $headers .= 'Cc: mdnishan102@gmail.com' . "\r\n";
            
            mail($to,$subject,$message,$headers);
            /* Mail Code End */
            
        }else
        {
            echo("Please Enter Some Valid information");
        }

        header("Location: index.php");
        die();
        
        
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Maruf Nishan Portfolio</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/partials/_variables.css">
    <link rel="stylesheet" href="css/partials/_global.css">
    <link rel="stylesheet" href="css/typinganm.css">
</head>

<body class="bg-white">
    <!-- Navbar Start -->
    <nav class="navbar navbar-light bg-dark fixed-top shadow-sm">
        <div class="container-lg">
            <a class="navbar-brand text-light fw-bold fs-4" href="/">NISHAN</a>
            <div class="dropdown">
                <button class="btn btn-secondary btn-light px-3" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-bars"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#home">Home</a></li>
                    <li><a class="dropdown-item" href="#about">About</a></li>
                    <li><a class="dropdown-item" href="#education">Education</a></li>
                    <li><a class="dropdown-item" href="#service">Services</a></li>
                    <li><a class="dropdown-item" href="#project">Projects</a></li>
                    <li><a class="dropdown-item" href="#reviews">Reviews</a></li>
                    <li><a class="dropdown-item" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Home Section Start -->
    <section class="home py-5" id="home">
        <div class="container-lg">
            <div class="row  mt-lg-5 mt-md-0 align-items-center align-content-center">
                <div class="col-md-6 mt-3 mt-md-0">
                    <div class="home-img text-center">
                        <img src="img/profile1.png" class="rounded-circle mw-100" alt="profile img">
                    </div>
                </div>
                <div class="col-md-6 mt-3 mt-md-0">
                    <br class="home-text">
                    <h4><span class="elementor-drop-cap-letter">H</span></h4></br>
                    <h4 class="text-muted mb-1">ello I'm...</h4>
                    <h1 class="title-h1 text-danger ">Md. Maruf Ibna Nasim Nishan</h1>


                    <div class="wrapper d-flex flex-column">
                        <div class="static-txt ">I'm a</div>
                        <div>
                            <ul class="dynamic-txts">
                                <li><span class="title-h1 fs-5">
                                        < / Laravel Web Application Developer />
                                    </span></li>
                                <li><span class="title-h1 fs-5">
                                        < / Vue.js Developer />
                                    </span></li>
                                <li><span class="title-h1 fs-5">
                                        < / Web Designer />
                                    </span></li>
                                <li><span class="title-h1 fs-5">
                                        < / WordPress Theme Customizer />
                                    </span></li>
                            </ul>
                        </div>
                    </div>


                    <div class="social-links">
                        <a href="https://www.facebook.com/mdmaruf.nishan" target="_blank" class="text-dark me-2"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/maruf_nishan/" target="_blank" class="text-dark me-2"><i
                                class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/maruf-ibna-nasim-nishan-9b123617b/" target="_blank"
                            class="text-dark me-2"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://github.com/marufnishan" target="_blank" class="text-dark me-2"><i
                                class="fab fa-github"></i></a>
                    </div>
                    <a href="#project" class="btn btn-outline-success px-3 mt-3"><b>MY WORKS</b></a>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Home Section End -->

    <!-- About Section Start -->
    <section class="about py-5" id="about">
        <div class="container-lg py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h2 class="title-h1 mt-lg-5">About Me</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center align-content-center">
                <div class="col-md-6 mt-5">
                    <div class="about-text">
                        <h1 class="title-h1 ">I Make <br> professional and<br> creative Web Application</h1>
                        <p class="text-muted">Hello,I am Md Maruf Ibna Nasim Nishan.I just want few minutes
                            of your time to present myself along with telling what value
                            I can add to your company.At present I am Studying at Daffodil
                            International University.I want to build a successful career as
                            a Computer Science Engineer.I want to see myself in a multinational
                            company as a Software Engineer after 7 years.I worked on some projects
                            using Laravel And Vue.js.I have deep Knowledge in various
                            programming languages like C , Java ,PHP ,Python and also
                            have problem solving skills. I specialize in Laravel framework
                            and Vue.js .I am experienced using Version Control System
                            (Git,GitHub),RestApi And Web API(Third Party API Integration).I am used to using operating system like Windows
                            and Linux.I can handle Microsoft office and Google Apps easily .</p>
                    </div>
                    <div class="row text-center text-uppercase my-3">
                        <div class="col-sm-4">
                            <div class="fact-item">
                                <h4 class="fs-1 fw-bold">100</h4>
                                <p class="text-muted">Projects Completed</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="fact-item">
                                <h4 class="fs-1 fw-bold">90</h4>
                                <p class="text-muted">Happy Clients</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="fact-item">
                                <h4 class="fs-1 fw-bold">95</h4>
                                <p class="text-muted">Positive Reviews</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 d-flex align-items-center">
                            <a href="https://drive.google.com/file/d/1Eir8VCTUe-HUckaSfJzjSyMCqPLaHwLm/view?usp=sharing" target="_blank" class="btn px-3 btn-success me-5">Download CV</a>
                            <div class="social-links">
                                <a href="https://www.facebook.com/mdmaruf.nishan" target="_blank"
                                    class="text-dark me-2"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/maruf_nishan/" target="_blank"
                                    class="text-dark me-2"><i class="fab fa-instagram"></i></a>
                                <a href="https://www.linkedin.com/in/maruf-ibna-nasim-nishan-9b123617b/" target="_blank"
                                    class="text-dark me-2"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://github.com/marufnishan" target="_blank" class="text-dark me-2"><i
                                        class="fab fa-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-5 mt-md-0">
                    <div class="skill-item mb-4 mt-5">
                        <h3 class="fs-5">Html</h3>
                        <div class="progress" style="height: 5px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 80%;"
                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill-item mb-4">
                        <h3 class="fs-5">CSS</h3>
                        <div class="progress" style="height: 5px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 75%;"
                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill-item mb-4">
                        <h3 class="fs-5">BOOTSTRAP</h3>
                        <div class="progress" style="height: 5px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 70%;"
                                aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill-item mb-4">
                        <h3 class="fs-5">JAVASCRIPT</h3>
                        <div class="progress" style="height: 5px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 50%;"
                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill-item mb-4">
                        <h3 class="fs-5">Vue.js</h3>
                        <div class="progress" style="height: 5px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 70%;"
                                aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill-item mb-4">
                        <h3 class="fs-5">MYSQL</h3>
                        <div class="progress" style="height: 5px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 70%;"
                                aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill-item mb-4">
                        <h3 class="fs-5">WORDPRESS</h3>
                        <div class="progress" style="height: 5px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 75%;"
                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill-item mb-4">
                        <h3 class="fs-6">LARAVEL ( PHP )</h3>
                        <div class="progress" style="height: 5px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 80%;"
                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Circle Progressbar Started -->
    <div class="container text-center">
        <div class="col">
            <div class="row">
                <div class="div mt-5">
                    <h1 class="title-h1 mb-4 mt-4">Professional Skills</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5 mt-5 justify-content-around" id="circular">
        <div class="box">
            <div class="chart" data-percent="70">70%</div>
            <h2>Vue.js (SPA)</h2>
        </div>
        <div class="box">
            <div class="chart" data-percent="85">85%</div>
            <h2>MySQL</h2>
        </div>
        <div class="box">
            <div class="chart" data-percent="70">70%</div>
            <h2>WordPress</h2>
        </div>
        <div class="box">
            <div class="chart" data-percent="90">90%</div>
            <h2>Laravel (PHP)</h2>
        </div>
    </div>
    <!-- Circle Progressbar Started -->

    <!-- Education Section Start -->
    <section class="education py-5" id="education">
        <div class="container-lg py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h2 class="title-h1 mb-5">Education</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="education-item">
                        <img src="img/tgbhs.jpg" class="w-100 img-thumbnail" alt="">
                        <h3 class="text-capitalize fs-5 my-2">Secondary School Certificate ( SSC )</h3>
                        <p class="mb-4"><a href="www.shop.nishanbd.com"
                                class="text-success text-decoration-none">Thakurgaon Government Boys High School</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="education-item">
                        <img src="img/ndcm.jpg" class="w-100 img-thumbnail" alt="">
                        <h3 class="text-capitalize fs-5 my-2">Higher Secondary Certificate ( HSC )</h3>
                        <p class="mb-4"><a href="www.shop.nishanbd.com" class="text-success text-decoration-none"> Notre
                                Dame College Mymensingh</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="education-item">
                        <img src="img/diu.jpg" class="w-100 img-thumbnail" alt="">
                        <h3 class="text-capitalize fs-5 my-2">Computer Science and Engineering ( BSc )</h3>
                        <p class="mb-4"><a href="www.shop.nishanbd.com"
                                class="text-success text-decoration-none">Daffodil International University</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Education Section End -->

    <!--  Service Section Start -->

    <section class="services bg-white py-5" id="service">
        <div class="container-lg py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h2 class="title-h1 mb-5">What I Do ?</h2>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="service-item shadow-sm p-4 rounded bg-white">
                        <div class="icon my-3 text-success fs-2">
                            <i class="fas fa-code"></i>
                        </div>
                        <h3 class="fs-5 py-2">Web Application</h3>
                        <p class="text-muted">I am specialize in Laravel framework ( PHP )
                            and Vue.js (SPA)</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="service-item shadow-sm p-4 rounded bg-white">
                        <div class="icon my-3 text-success fs-2">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h3 class="fs-5 py-2">Creative Design</h3>
                        <p class="text-muted">I am specialize in Bootstrap framework
                            and WordPress Template Customization</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="service-item shadow-sm p-4 rounded bg-white">
                        <div class="icon my-3 text-success fs-2">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <h3 class="fs-5 py-2">Dynamic Websites</h3>
                        <p class="text-muted">I make professional and creative Websites With API's</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  Service Section End -->

    <!-- Latest Work Section Started -->
    <section class="project-area bg-light">
        <div class="container-lg py-5" id="project">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="title-h1 text-dark mb-4">Recently Done Project</h2>
                    <p class="title-h1 text-dark fs-5">Quality Work</p>

                </div>
            </div>
        </div>
        <div class="container">
            <div class="button-group">
                <button type="button" class="active" id="btn1" data-filter="*">All</button>
                <button type="button" data-filter=".popular">Popular</button>
                <button type="button" data-filter=".latest">Latest</button>
                <button type="button" data-filter=".upcoming">Upcoming</button>
            </div>

            <div class="row grid bg-white">
                <div class="col-lg-4 col-md-6 col-sm-12 element-item latest">
                    <div class="our-project">
                        <div class="img">
                            <a class="test-popup-link" href="www.shop.nishanbd.com">
                                <img src="./img/Online-Store.jpg" alt="portfolio-1" class="img-fluid">
                            </a>
                        </div>
                        <div class="title py-4">
                            <h4 class="text-uppercase">E-commerce</h4>
                            <span class="text-secondary">Laravel Boostrap E-Commerce</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 element-item upcoming">
                    <div class="our-project">
                        <div class="img">
                            <a class="test-popup-link" href="./img/portfolio/p4.jpg">
                                <img src="./img/Portfolio.jpg" alt="portfolio-4" class="img-fluid">
                            </a>
                        </div>
                        <div class="title py-4">
                            <h4 class="text-uppercase">Portfolio</h4>
                            <span class="text-secondary">Upcoming, Portfolio</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 element-item popular">
                    <div class="our-project">
                        <div class="img">
                            <a class="test-popup-link" href="./img/portfolio/p3.jpg">
                                <img src="./img/e-commerce.jpg" alt="portfolio-3" class="img-fluid">
                            </a>
                        </div>
                        <div class="title py-4">
                            <h4 class="text-uppercase">E-Commerce</h4>
                            <span class="text-secondary">Laravel Tailwind E-commerce</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 element-item upcoming">
                    <div class="our-project">
                        <div class="img">
                            <a class="test-popup-link" href="./img/portfolio/p9.jpg">
                                <img src="./img/Tamplate.PNG" alt="portfolio-9" class="img-fluid">
                            </a>
                        </div>
                        <div class="title py-4">
                            <h4 class="text-uppercase">Tamplate Practic</h4>
                            <span class="text-secondary">Html,CSS Template</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 element-item upcoming">
                    <div class="our-project">
                        <div class="img">
                            <a class="test-popup-link" href="./img/portfolio/p5.jpg">
                                <img src="./img/chatbot.png" alt="portfolio-5" class="img-fluid">
                            </a>
                        </div>
                        <div class="title py-4">
                            <h4 class="text-uppercase">Chat Bot</h4>
                            <span class="text-secondary">Javascript,Chat Bot</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 element-item upcoming">
                    <div class="our-project">
                        <div class="img">
                            <a class="test-popup-link" href="./img/portfolio/p6.jpg">
                                <img src="./img/home-service.jpg" alt="portfolio-6" class="img-fluid">
                            </a>
                        </div>
                        <div class="title py-4">
                            <h4 class="text-uppercase">Home Services</h4>
                            <span class="text-secondary">Laravel Home Service Project</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 element-item upcoming">
                    <div class="our-project">
                        <div class="img">
                            <a class="test-popup-link" href="./img/portfolio/p7.jpg">
                                <img src="./img/Html CSS Tamplate.PNG" alt="portfolio-7" class="img-fluid">
                            </a>
                        </div>
                        <div class="title py-4">
                            <h4 class="text-uppercase">Tamplate Practice</h4>
                            <span class="text-secondary">Html,CSS Template</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 element-item popular">
                    <div class="our-project">
                        <div class="img">
                            <a class="test-popup-link" href="www.nishanbd.com">
                                <img src="./img/Portfollio1.jpg" alt="portfolio-2" class="img-fluid">
                            </a>
                        </div>
                        <div class="title py-4">
                            <h4 class="text-uppercase">Portfolio</h4>
                            <span class="text-secondary">Wardpress, Portfolio</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 element-item upcoming">
                    <div class="our-project">
                        <div class="img">
                            <a class="test-popup-link" href="./img/portfolio/p8.jpg">
                                <img src="./img/tamplate2.jpg" alt="portfolio-8" class="img-fluid">
                            </a>
                        </div>
                        <div class="title py-4">
                            <h4 class="text-uppercase">Tamplate Practic</h4>
                            <span class="text-secondary">Html,CSS Template</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Work Section End -->

    <!-- Freelancer Available Section Start -->
    <div class="freelancer-available py-5 bg-light">
        <div class="container-lg py-5 ">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <p class="title-h1 text-dark fs-5">Do you have any project ?</p>
                    <h2 class="title-h1 text-dark mb-4">I'm Available For Freelancer Projects</h2>
                    <a href="#contact" class="btn btn-outline-success">Hire Me</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Freelancer Available Section End -->

    <!-- Review Section Start -->
    <section class="reviews" id="reviews">
        <div class="container-lg py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h2 class="title-h1 mb-5">Reviews</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col">
                    <div id="carousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carousel" data-bs-slide-to="0"
                                class="active bg-success" aria-current="true" aria-label="Slide 1"></button>
                            <button class="bg-success" type="button" data-bs-target="#carousel" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button class="bg-success" type="button" data-bs-target="#carousel" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner p-1">
                            <!-- review items start -->
                            <div class="review-item carousel-item active bg-white shadow-sm rounded p-4 mb-5">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="review-author-info d-flex align-items-center">
                                                <div class="div">
                                                    <img src="img/testimonial/1.jpg"
                                                        class="img-thumbnail rounded-circle" alt="author img">
                                                </div>
                                                <div class="author ms-3">
                                                    <h3 class="fs-6 mb-1">Murad Kabir</h3>
                                                    <p class="text-muted m-0">Seo Manager</p>
                                                </div>
                                            </div>
                                            <p class="text-muted mt-3">Lorem ipsum dolor sit amet consectetur
                                                adipisicing elit.
                                                Atque
                                                voluptatibus iste fugit
                                                perferendis quae provident, soluta suscipit cum nobis saepe!</p>
                                            <div class="rating text-dark">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-6 d-none d-md-block">
                                            <div class="review-author-info d-flex align-items-center">
                                                <div class="div">
                                                    <img src="img/testimonial/2.jpg"
                                                        class="img-thumbnail rounded-circle" alt="author img">
                                                </div>
                                                <div class="author ms-3">
                                                    <h3 class="fs-6 mb-1">Tusar Kumar</h3>
                                                    <p class="text-muted m-0">Seo Manager</p>
                                                </div>
                                            </div>
                                            <p class="text-muted mt-3">Lorem ipsum dolor sit amet consectetur
                                                adipisicing elit.
                                                Atque
                                                voluptatibus iste fugit
                                                perferendis quae provident, soluta suscipit cum nobis saepe!</p>
                                            <div class="rating text-dark">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- review items end -->
                            <!-- review items start -->
                            <div class="review-item carousel-item bg-white shadow-sm rounded p-4 mb-5">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="review-author-info d-flex align-items-center">
                                                <div class="div">
                                                    <img src="img/testimonial/1.jpg"
                                                        class="img-thumbnail rounded-circle" alt="author img">
                                                </div>
                                                <div class="author ms-3">
                                                    <h3 class="fs-6 mb-1">Sekh Abdullah</h3>
                                                    <p class="text-muted m-0">Seo Manager</p>
                                                </div>
                                            </div>
                                            <p class="text-muted mt-3">Lorem ipsum dolor sit amet consectetur
                                                adipisicing elit.
                                                Atque
                                                voluptatibus iste fugit
                                                perferendis quae provident, soluta suscipit cum nobis saepe!</p>
                                            <div class="rating text-dark">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-6 d-none d-md-block">
                                            <div class="review-author-info d-flex align-items-center">
                                                <div class="div">
                                                    <img src="img/testimonial/2.jpg"
                                                        class="img-thumbnail rounded-circle" alt="author img">
                                                </div>
                                                <div class="author ms-3">
                                                    <h3 class="fs-6 mb-1">Murad Kabir</h3>
                                                    <p class="text-muted m-0">Seo Manager</p>
                                                </div>
                                            </div>
                                            <p class="text-muted mt-3">Lorem ipsum dolor sit amet consectetur
                                                adipisicing elit.
                                                Atque
                                                voluptatibus iste fugit
                                                perferendis quae provident, soluta suscipit cum nobis saepe!</p>
                                            <div class="rating text-dark">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- review items end -->
                            <!-- review items start -->
                            <div class="review-item carousel-item bg-white shadow-sm rounded p-4 mb-5">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="review-author-info d-flex align-items-center">
                                                <div class="div">
                                                    <img src="img/testimonial/1.jpg"
                                                        class="img-thumbnail rounded-circle" alt="author img">
                                                </div>
                                                <div class="author ms-3">
                                                    <h3 class="fs-6 mb-1">Murad Kabir</h3>
                                                    <p class="text-muted m-0">Seo Manager</p>
                                                </div>
                                            </div>
                                            <p class="text-muted mt-3">Lorem ipsum dolor sit amet consectetur
                                                adipisicing elit.
                                                Atque
                                                voluptatibus iste fugit
                                                perferendis quae provident, soluta suscipit cum nobis saepe!</p>
                                            <div class="rating text-dark">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-6 d-none d-md-block">
                                            <div class="review-author-info d-flex align-items-center">
                                                <div class="div">
                                                    <img src="img/testimonial/2.jpg"
                                                        class="img-thumbnail rounded-circle" alt="author img">
                                                </div>
                                                <div class="author ms-3">
                                                    <h3 class="fs-6 mb-1">Kabbo Saha</h3>
                                                    <p class="text-muted m-0">Seo Manager</p>
                                                </div>
                                            </div>
                                            <p class="text-muted mt-3">Lorem ipsum dolor sit amet consectetur
                                                adipisicing elit.
                                                Atque
                                                voluptatibus iste fugit
                                                perferendis quae provident, soluta suscipit cum nobis saepe!</p>
                                            <div class="rating text-dark">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- review items end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Review Section End -->

    <!-- Contact Section Start -->
    <section class="contact" id="contact">
        <div class="container-fluid bg-dark">
            <div class="container-lg py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title text-center">
                            <h2 class="title-h1 text-light mb-5">Contact Me</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="contact-item d-flex mb-3">
                            <div class="icon fs-4 text-success">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="text ms-3">
                                <h3 class="fs-5 text-light">Email</h3>
                                <p class="text-white">marufnishan@gmail.com</p>
                            </div>
                        </div>
                        <div class="contact-item d-flex mb-3">
                            <div class="icon fs-4 text-success">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="text ms-3">
                                <h3 class="fs-5 text-light">Phone</h3>
                                <p class="text-white">+88 01718863771</p>
                            </div>
                        </div>
                        <div class="contact-item d-flex mb-3">
                            <div class="icon fs-4 text-success">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="text ms-3">
                                <h3 class="fs-5 text-light">Location</h3>
                                <p class="text-white">Daffodil International University <br> Ashulia , Savar , Dhaka .
                                </p>
                            </div>
                        </div>
                        <div class="social-links mb-4">
                            <a href="https://www.facebook.com/mdmaruf.nishan" target="_blank"
                                class="fs-5 text-light me-3"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/maruf_nishan/" target="_blank"
                                class="fs-5 text-light me-3"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/maruf-ibna-nasim-nishan-9b123617b/" target="_blank"
                                class="fs-5 text-light me-3"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://github.com/marufnishan" target="_blank" class="fs-5 text-light me-3"><i
                                    class="fab fa-github"></i></a>
                            <a href="#" target="_blank" class="fs-5 text-light me-3"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="contact-form">
                            <form action="/" method="post">
                                <div class="row mb-4 d-flex">
                                    <div class="col-lg-6 mb-4">
                                        <input type="text" name="name" placeholder="Your Name"
                                            class="form-control form-control-lg fs-6 border-0 shadow-sm" required>
                                    </div>
                                    <div class="col-lg-6 mb-4">
                                        <input type="text" name="email" placeholder="Your Email"
                                            class="form-control form-control-lg fs-6 border-0 shadow-sm" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 mb-4">
                                        <input type="text" name="phone" placeholder="Phone "
                                            class="form-control form-control-lg fs-6 border-0 shadow-sm" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 mb-4">
                                        <input type="text" name="subject" placeholder="Subject"
                                            class="form-control form-control-lg fs-6 border-0 shadow-sm" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 mb-4">
                                        <textarea rows="5" name="msg" placeholder="Your Message"
                                            class="form-control form-control-lg fs-6 border-0 shadow-sm" required></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <button type="submit" name="submit" class="btn btn-success px-3">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <!-- Contact Section End-->
    <!-- Footer Section Start -->
    <div class="footer  bg-dark py-4">
        <div class="container-lg border-top  text-white ">
            <div class="row mt-5">
                <div class="col-lg-12">
                    <p class="m-0 text-center">© 2021 Copyright by Nishan BD. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Section End -->

    <script src="js/jquery.3.4.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js"
        charset="utf-8"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript">
        $(function () {
            $('.chart').easyPieChart({
                size: 160,
                barColor: "#198754",
                scaleLength: 0,
                lineWidth: 15,
                trackColor: "#525151",
                lineCap: "circle",
                animate: 2000,
            });
        });
    </script>
</body>

</html>