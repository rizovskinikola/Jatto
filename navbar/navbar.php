<?php
if (!defined("SITE_URL"))
    define("SITE_URL", "http://jatto.co/");
?>
<div class="navbar-wrapper">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="http://jatto.co/"><img src="../navbar/logo.png" alt="Jatto logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle
                                navigation">
                    <img src="../images/hamburger-icon.svg" alt="Hamburger
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