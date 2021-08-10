<?php
include __DIR__ . '/includes/header.php';
?>

<!-- Offcanvas Menu Begin -->
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="offcanvas__logo">
        <a href="./index.html"><img src="img/logo.png" alt=""></a>
    </div>
    <div id="mobile-menu-wrap"></div>
    <div class="offcanvas__btn__widget">
        <a href="#">Book Now <span class="arrow_right"></span></a>
    </div>
    <div class="offcanvas__widget">
        <ul>
            <li><span class="icon_pin_alt"></span> 96 Ernser Vista Suite 437, NY, US</li>
            <li><span class="icon_phone"></span> (123) 456-78-910</li>
        </ul>
    </div>
    <div class="offcanvas__language">
        <img src="img/lan.png" alt="">
        <span>English</span>
        <i class="fa fa-angle-down"></i>
        <ul>
            <li>English</li>
            <li>Bangla</li>
        </ul>
    </div>
    <div class="offcanvas__auth">
        <ul>
            <li><a href="#">Login</a></li>
            <li><a href="#">Register</a></li>
        </ul>
    </div>
</div>
<!-- Offcanvas Menu End -->

<!-- Header Section Begin -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <ul class="header__top__widget">
                        <li><span class="icon_pin_alt"></span> 96 Ernser Vista Suite 437, NY, US</li>
                        <li><span class="icon_phone"></span> (123) 456-78-910</li>
                    </ul>
                </div>
                <div class="col-lg-5">
                    <div class="header__top__right">
                        <div class="header__top__auth">
                            <ul>
                                <li><a href="#">Login</a></li>
                                <li><a href="#">Register</a></li>
                            </ul>
                        </div>
                        <div class="header__top__language">
                            <img src="img/lan.png" alt="">
                            <span>English</span>
                            <i class="fa fa-angle-down"></i>
                            <ul>
                                <li>English</li>
                                <li>Bangla</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header__nav__option">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="header__nav">
                        <nav class="header__menu">
                            <ul class="menu__class">
                                <li><a href="./index.html">Home</a></li>
                                <li><a href="./rooms.html">Rooms</a></li>
                                <li><a href="./about.html">About Us</a></li>
                                <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="./about.html">About Us</a></li>
                                        <li><a href="./room-details.html">Room Details</a></li>
                                        <li><a href="./blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="./blog.html">News</a></li>
                                <li class="active"><a href="./contact.html">Contact</a></li>
                            </ul>
                        </nav>
                        <div class="header__nav__widget">
                            <a href="#">Book Now <span class="arrow_right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <span class="fa fa-bars"></span>
            </div>
        </div>
    </div>
</header>
<!-- Header Section End -->

<!-- Map Begin -->
<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2942.5524090066037!2d-71.10245469994108!3d42.47980730490846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e3748250c43a43%3A0xe1b9879a5e9b6657!2sWinter%20Street%20Public%20Parking%20Lot!5e0!3m2!1sen!2sbd!4v1577299251173!5m2!1sen!2sbd" height="600" style="border:0;" allowfullscreen=""></iframe>
</div>
<!-- Map End -->

<!-- Contact Section Begin -->
<section class="contact spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-5">
                <div class="contact__widget">
                    <div class="contact__widget__item">
                        <h4>Contact Us</h4>
                        <ul>
                            <li>(123) 456-78-910</li>
                            <li>Info.colorlib@gmail.com</li>
                        </ul>
                    </div>
                    <div class="contact__widget__item">
                        <h4>Address</h4>
                        <p>96 Ernser Vista Suite 437, NY, <br />United Stated</p>
                    </div>
                    <div class="contact__widget__time">
                        <h4>Opentime</h4>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="contact__widget__time__item">
                                    <ul>
                                        <li>Monday - Friday</li>
                                        <li><span>8 am - 9 pm</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="contact__widget__time__item">
                                    <ul>
                                        <li>Saturday - Sunday</li>
                                        <li><span>8 am - 9 pm</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1 col-md-6 col-sm-7">
                <div class="contact__form">
                    <h2>Your question?</h2>
                    <form action="#">
                        <input type="text" placeholder="Your Name">
                        <input type="text" placeholder="Email">
                        <textarea placeholder="Your Message"></textarea>
                        <button type="submit">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->

<?php
include __DIR__ . '/includes/footer.php';
?>