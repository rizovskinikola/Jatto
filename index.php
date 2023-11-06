<?php
if (!defined("SITE_URL"))
    define("SITE_URL", "http://jatto.co/");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="navbar/navbar.css">
    <link rel="stylesheet" href="footer/footer.css">
    <link rel="stylesheet" href="styles.css">
    <link href="bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <title>Jatto</title>
</head>

<body>

    <div class="bg">
        <div class="navbar-wrapper">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <a class="navbar-brand" href=""><img src="navbar/logo.png" alt="Jatto logo"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle
                                navigation">
                            <img src="images/hamburger-icon.svg" alt="Hamburger
                                    icon">
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a href="<?php echo SITE_URL; ?>find-talent">
                                Find Talent
                            </a>
                        </li>
                        <li class="nav-item">
                        <a href="<?php echo SITE_URL; ?>about-us">
                               About us
                            </a>
                        </li>
                        <li class="nav-item">
                        <a href="<?php echo SITE_URL; ?>blog">
                             Blog
                            </a>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <button class="resume-btn">Your resume</button>
                    </div>
                </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="header">
            <div class="container">
                <div class="blur-header">
                    <h1><span class="title-gradient">Recruit junior level
                            vetted tech talent</span>
                        from Southern
                        Europe for 0% cost. Shift to Skills-based approach
                        when
                        hiring!
                    </h1>
                    <a href="https://calendly.com/creativehubacademy/30min?back=1&month=2022-11" target="_blank">
                        <button class="zoom-hover">Schedule a call to hire
                            talent</button></a>
                </div>
            </div>
            <img src="images/header-circles.svg" class="header-circles
                    d-none d-lg-block" alt="Circles">
        </div>



        <div class="container section-m based text-center reveal">
            <h2>We are a <span class="title-gradient"> US-EU based
                    recruitment agency</span> <br>
                with offices in Miami, Skopje and Pristina.
            </h2>
            <h4> We believe in the human approach <br>
                of hiring and vetting candidates, <br>
                and we have individually screened <br>
                all the candidates and the skills they possess. </h4>
        </div>

        <div class="logos-wrapper section-m logos-wrapper reveal">
            <div class="container text-center">
                <h3 class="title-gradient">Trusted by:</h3>
                <h4>All of the companies that worked with us:</h4>
                <img src="images/all-logos.png" class="responsive" alt="Logos">

            </div>
        </div>

        <div class="section-m container text-center reveal">
            <h3 class="title-gradient fw-bold">Hire remote candidates </h3>
            <h4 class="fw-bold">for any tech position or have <br>
                us hire them for you</h4>
            <div class="d-flex flex-column flex-lg-row
                    justify-content-center align-items-center">
                <div class="hire-card">
                    <img src="images/hire1.png" class="responsive" alt="Hire">
                    <div>
                        <h4>
                            500+ <br>
                            <span>Candidates placed!</span>
                        </h4>
                    </div>
                </div>
                <div class="hire-card">
                    <img src="images/hire2.png" class="responsive" alt="Hire">
                    <div>
                        <h4>
                            100+ <br>
                            <span>Expert - vetted talent in pipeline!</span>
                        </h4>
                    </div>
                </div>
            </div>
        </div>


        <div class="section-m services-wrapper reveal">
            <h3 class="title-gradient fw-bold">Services</h3>
            <div class="services">
                <h5>Recruitment <br> Strategy </h5>
                <h5>Interview & <br>
                    Selections</h5>
                <h5>Employer <br>
                    Branding</h5>
                <h5>Enterprise <br>
                    Trainings</h5>
            </div>
            <img src="images/circles-gradient-smaller.svg" alt="Circles">
        </div>

        <div class="section-m process reveal">
            <h3 class="fw-bold">The <span class="title-gradient">process</span></h3>
            <div class="process-wrapper">
                <div class="process-card">
                    <img src="images/candidates-icon.svg" alt="Candidates">
                    <div>
                        <p>7 days process for your account to find your
                            candidates</p>
                    </div>
                </div>
                <img src="images/process-arrow.svg" class="first-arrow
                        d-none d-lg-block" alt="Arrow">
                <img src="images/arrow-down-process.svg" class="d-block
                        d-lg-none process-arrow-down" alt="Arrow">
                <div class="process-card middle-card-m">
                    <img src="images/call-icon.svg" alt="Candidates">
                    <div>
                        <p>Schedule a call</p>
                    </div>
                </div>
                <img src="images/process-arrow.svg" class="second-arrow
                        d-none d-lg-block" alt="Arrow">
                <img src="images/arrow-down-process.svg" class="d-block
                        d-lg-none" alt="Arrow">
                <div class="process-card end-card-m">
                    <img src="images/hanshake-icon.svg" alt="Candidates">
                    <div>
                        <p>Hire the one you choose!</p>
                    </div>
                </div>
            </div>
            <a href="https://calendly.com/creativehubacademy/30min?back=1&month=2022-11" target="_blank"> <button
                    class="zoom-hover">Schedule a call to hire talent</button></a>
        </div>

        <div class="section-m expertise">
            <h3 class="fw-bold">Areas of <span class="title-gradient">expertise</span></h3>
            <h4 class="fw-bold mb-5">NFT artists, Digital Marketers, UX UI
                Designers, Developers,
                we can source you with talent for any tech career.
            </h4>

            <div class="expertise-cards-wrapper">
                <div class="expertise-card">
                    <div class="expert-name">
                        <img src="images/arbnor.png" alt="Expert">
                        <div>
                            Arbnor H <br>
                            <span class="fw-bold">Data Science</span>
                        </div>
                    </div>
                    <h5 class="fw-bold">Skills & expertise:</h5>
                    <div class="d-flex flex-wrap">
                        <h6>SQL</h6>
                        <h6>Database</h6>
                        <h6>Python</h6>
                        <h6>Python</h6>
                        <h6>Data Visualization</h6>
                        <h6>Machine Learning</h6>
                    </div>
                    <h5 class="fw-bold">Tools:</h5>
                    <div class="d-flex flex-wrap">
                        <h6>MATLAB</h6>
                        <h6>Power BI</h6>
                        <h6>Excel</h6>
                    </div>
                </div>
                <div class="expertise-card expertise-shadow">
                    <div class="expert-name">
                        <img src="images/anea.png" alt="Expert">
                        <div>
                            Anea B.<br>
                            <span class="fw-bold">Digital Marketing</span>
                        </div>
                    </div>
                    <h5 class="fw-bold">Skills & expertise:</h5>
                    <div class="d-flex flex-wrap">
                        <h6>Social Media</h6>
                        <h6>Photo Edit</h6>
                        <h6>Creativity</h6>
                        <h6>Python</h6>
                        <h6>Content Creation</h6>
                        <h6>Basic Design</h6>
                    </div>
                    <h5 class="fw-bold">Tools:</h5>
                    <div class="d-flex flex-wrap">
                        <h6>Photoshop</h6>
                        <h6>Facebook Ads</h6>
                        <h6>Google AdWords</h6>
                        <h6>Google Analytics</h6>
                    </div>
                </div>
                <div class="expertise-card">
                    <div class="expert-name">
                        <img src="images/doruntine.png" alt="Expert">
                        <div>
                            Doruntine K. <br>
                            <span class="fw-bold">HR</span>
                        </div>
                    </div>
                    <h5 class="fw-bold">Skills & expertise:</h5>
                    <div class="d-flex flex-wrap">
                        <h6>Recruiting</h6>
                        <h6>Employee Engagement</h6>
                        <h6>Employement Laws</h6>
                        <h6>Training</h6>
                    </div>
                    <h5 class="fw-bold">Tools:</h5>
                    <div class="d-flex flex-wrap">
                        <h6>Performance Managment</h6>
                        <h6>Tools to manage talent</h6>
                        <h6>APS</h6>
                    </div>
                </div>
            </div>
            <div class="expertise-cards-wrapper">
                <div class="expertise-card expertise-shadow">
                    <div class="expert-name">
                        <img src="images/simona.png" alt="Expert">
                        <div>
                            Simona K. <br>
                            <span class="fw-bold">UX UI Design</span>
                        </div>
                    </div>
                    <h5 class="fw-bold">Skills & expertise:</h5>
                    <div class="d-flex flex-wrap">
                        <h6>Empathy</h6>
                        <h6>Team work</h6>
                        <h6>Creativity</h6>
                        <h6>Collaboration</h6>
                        <h6>Wireframing</h6>
                    </div>
                    <h5 class="fw-bold">Tools:</h5>
                    <div class="d-flex flex-wrap">
                        <h6>Photoshop</h6>
                        <h6>Illustrator</h6>
                        <h6>Figma</h6>
                        <h6>Adobe XD</h6>
                    </div>
                </div>
                <div class="expertise-card">
                    <div class="expert-name">
                        <img src="images/igor.png" alt="Expert">
                        <div>
                            Igor Z. <br>
                            <span class="fw-bold">Graphic Design</span>
                        </div>
                    </div>
                    <h5 class="fw-bold">Skills & expertise:</h5>
                    <div class="d-flex flex-wrap">
                        <h6>Creativity</h6>
                        <h6>Photo Edit</h6>
                        <h6>Ad
                            design</h6>
                        <h6>Python</h6>
                        <h6>Logo Creation</h6>
                        <h6>Color sense</h6>
                    </div>
                    <h5 class="fw-bold">Tools:</h5>
                    <div class="d-flex flex-wrap">
                        <h6>Photoshop</h6>
                        <h6>Illustrator</h6>
                        <h6>Adobe XD</h6>
                        <h6>Adobe InDesign</h6>
                        <h6>Adobe Lightroom</h6>
                    </div>
                </div>
                <div class="expertise-card expertise-shadow">
                    <div class="expert-name">
                        <img src="images/anea2.png" alt="Expert">
                        <div>
                            Anea B. <br>
                            <span class="fw-bold">Recruiter</span>
                        </div>
                    </div>
                    <h5 class="fw-bold">Skills & expertise:</h5>
                    <div class="d-flex flex-wrap">
                        <h6>Social Media</h6>
                        <h6>Photo Edit</h6>
                        <h6>Creativity</h6>
                        <h6>Content Creation</h6>
                        <h6>Basic Design</h6>
                    </div>
                    <h5 class="fw-bold">Tools:</h5>
                    <div class="d-flex flex-wrap">
                        <h6>Photoshop</h6>
                        <h6>Facebook Ads</h6>
                        <h6>Google AdWords</h6>
                        <h6>Google Analytics</h6>
                    </div>
                </div>
            </div>
            <!-- Button trigger modal -->
            <button type="button" class="zoom-hover load-more-btn" data-bs-toggle="modal"
                data-bs-target="#exampleModal">
                Load more
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <button type="button" class="btn-close p-2" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="modal-body">
                            <h3>In order to see
                                our full list of candidates
                                reach out to us.
                            </h3>
                            <form method="POST" action="https://akoskarova.activehosted.com/proc.php" id="_form_338_"
                                class="_form _form_338 _inline-form  _dark" novalidate>
                                <input type="hidden" name="u" value="338" />
                                <input type="hidden" name="f" value="338" />
                                <input type="hidden" name="s" />
                                <input type="hidden" name="c" value="0" />
                                <input type="hidden" name="m" value="0" />
                                <input type="hidden" name="act" value="sub" />
                                <input type="hidden" name="v" value="2" />
                                <input type="hidden" name="or" value="3f39cc040393268d8af1e0e33499463b" />
                                <div class="_form-content">
                                    <div class="_form_element _x09293087 _full_width ">
                                        <label for="fullname" class="_form-label">
                                            Name and Surname
                                        </label>
                                        <div class="_field-wrapper">
                                            <input type="text" id="fullname" name="fullname"
                                                placeholder="Type your name" required />
                                        </div>
                                    </div>
                                    <div class="_form_element _x76118709 _full_width ">
                                        <label for="email" class="_form-label">
                                            E-mail
                                        </label>
                                        <div class="_field-wrapper">
                                            <input type="text" id="email" name="email" placeholder="Type your email"
                                                required />
                                        </div>
                                    </div>
                                    <div class="_form_element _x66488457 _full_width ">
                                        <label for="field[7]" class="_form-label">
                                            Company name
                                        </label>
                                        <div class="_field-wrapper">
                                            <input type="text" id="field[7]" name="field[7]" value="" placeholder=""
                                                required />
                                        </div>
                                    </div>
                                    <div class="_form_element _x38884059 _full_width ">
                                        <label for="field[16]" class="_form-label">
                                            Company website
                                        </label>
                                        <div class="_field-wrapper">
                                            <input type="text" id="field[16]" name="field[16]" value="" placeholder=""
                                                required />
                                        </div>
                                    </div>
                                    <div class="_button-wrapper _full_width text-center">
                                        <button id="_form_338_submit" class="_submit zoom-hover" type="submit">
                                            Submit
                                        </button>
                                    </div>
                                    <div class="_clear-element">
                                    </div>
                                </div>
                                <div class="_form-thank-you" style="display:none;">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-m reveal">
            <h3 class="text-center">What makes us
                <span class="title-gradient">different from the others?</span>
            </h3>
            <div class="different-circles">
                <p>0% cost for the
                    <span class="title-gradient">company</span>
                </p>
                <p>0% cost for the
                    <span class="title-gradient">candidate</span>
                </p>
            </div>
            <div class="d-flex justify-content-center">
                <img src="images/different-img.png" class="responsive d-none
                        d-lg-block" alt="Different">
                <img src="images/different-img-mobile.png" class="responsive
                        d-block d-lg-none" alt="">
            </div>

            <div class="different-cards-wrapper">
                <div class="different-card">
                    <div class="d-flex mb-3">
                        <img src="images/skills.svg" alt="Skills">
                        <h4>SKILLS</h4>
                    </div>
                    <p>All of the candidates have been vetted and they
                        possess skills that have been tested for.
                    </p>
                </div>
                <div class="different-card">
                    <div class="d-flex mb-3">
                        <img src="images/hiring.svg" alt="Skills">
                        <h4>HIRING</h4>
                    </div>
                    <p>Hiring from Southern Europe is 1/10 of the cost than
                        hiring from anywhere in the world.
                    </p>
                </div>
                <div class="different-card">
                    <div class="d-flex mb-3">
                        <img src="images/benefits.svg" alt="Skills">
                        <h4>BENEFITS</h4>
                    </div>
                    <p>Full-time or contract-based remote work and save on
                        overhead rate by employee ( health benefits,
                        vacation pay, pension and retirement benefits ).
                    </p>
                </div>
                <div class="different-card">
                    <div class="d-flex mb-3">
                        <img src="images/recruters.svg" alt="Skills">
                        <h4>RECRUITERS</h4>
                    </div>
                    <p>We don’t use matching platforms, we have real
                        recruiters matching our candidates for you based on
                        your needs.
                    </p>
                </div>
            </div>
        </div>

        <div class="section-m forbes reveal">
            <h3 class="text-center">Read more from our founder on <span class="title-gradient">Forbes</span></h3>
            <div class="forbes-cards-wrapper">
                <div class="forbes-card zoom-hover">
                    <a href="https://www.forbes.com/sites/forbesbusinesscouncil/2022/08/09/the-importance-of-performance-management/?sh=58be326c6c7b"
                        target="_blank">
                        <img src="images/forbes1.png" class="responsive" alt="Forbes">
                        <h4 class="fw-bold">The importance of preformance
                            management</h4>
                        <div class="d-flex align-items-center">
                            <p class="m-0 pe-2">Click and read more on </p>
                            <img src="images/forbes-logo.png" alt="Forbes logo">
                        </div>
                    </a>
                </div>

                <div class="forbes-card zoom-hover">
                    <a href="https://www.forbes.com/sites/forbesbusinesscouncil/2022/05/17/16-high-level-metrics-every-business-should-track/?sh=538806f9c460"
                        target="_blank">
                        <img src="images/forbes2.png" class="responsive" alt="Forbes">
                        <h4 class="fw-bold">High level metrics every business
                            should track</h4>
                        <div class="d-flex align-items-center">
                            <p class="m-0 pe-2">Click and read more on </p>
                            <img src="images/forbes-logo.png" alt="Forbes logo">
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="call section-m reveal">
            <div class="d-block text-center d-lg-flex align-items-center
                    justify-content-center">
                <img src="images/call-angela.svg" alt="Call">
                <h3>Schedule a call, <br class="d-block d-lg-none"> it’s
                    free!</h3>
            </div>
            <div class="calendly-wrapper">
                <div class="container d-flex justify-content-between
                        align-items-center">
                    <div class="d-block d-lg-flex">
                        <img src="images/angela-calendly.png" alt="Creative
                                Hub
                                Stojancho">
                        <p>Meet Angela our Lead Recruiter and
                            let her find the best talent for you.
                        </p>
                    </div>
                    <a href="https://calendly.com/creativehubacademy/30min?back=1&month=2022-11" target="blank"> <button
                            class="calendly-btn zoom-hover">Schedule a call
                            to hire talent</button></a>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <img src="images/circles-bottom.svg" class="d-none
                        d-lg-block" alt="">
            </div>
        </div>

        <div class="footer">
    <div class="container">
        <div class="footer-logo"> <img src="images/logo.png" alt="Jatto"></div>
        <div class="d-flex flex-column-reverse flex-lg-row
                        justify-content-lg-between
                        align-lg-items-center my-3">

            <h4>151 SE 1st Street, <br>
                33131 Miami Florida </h4>
            <hr class="d-block d-lg-none">
            <div class="d-flex flex-lg-row flex-column align-items-lg-center navigation-links">
                <a href="<?php echo SITE_URL; ?>find-talent">
                    <h4>Find Talent</h4>
                </a>
                <a href="<?php echo SITE_URL; ?>blog">
                    <h4>Blog</h4>
                </a>
                <a href="<?php echo SITE_URL; ?>about-us">
                    <h4>About Us</h4>
                </a>
            </div>
        </div>
        <h4>786 479 9779</h4>
        <div class="d-flex align-items-center media">
            <a href="" target="_blank"> <img src="images/fb.png" alt="Facebook icon"></a>
            <a href="https://www.instagram.com/jattorecruiter/" target="_blank"><img src="images/insta.png" alt="Instagram icon"></a>
            <a href="https://www.linkedin.com/company/jatto-recruitment-agency/" target="_blank"><img src="images/linkedin.png" alt="Linkedin icon"></a>
        </div>
        <hr>
        <div class="d-block text-center d-lg-flex justify-content-lg-between">
            <p>All rights reserved</p>
            <p>Privacy Policy</p>
        </div>
    </div>
</div>
    </div> <!-- Whole bg div -->
</body>
<script src="main.js"></script>

</html>