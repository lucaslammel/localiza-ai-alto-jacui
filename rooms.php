<?php
include __DIR__ . '/includes/header.php';
?>

<!-- Offcanvas Menu Begin -->
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="offcanvas__logo">
        <a href="./index.html"><img src="img/logo.png" alt=""></a>
    </div>
    <nav class="offcanvas__menu mobile-menu">
        <ul>
            <li class="active"><a href="./index.html">Home</a></li>
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
            <li><a href="./contact.html">Contact</a></li>
        </ul>
    </nav>
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
                            <ul>
                                <li><a href="./index.html">Home</a></li>
                                <li class="active"><a href="./rooms.html">Rooms</a></li>
                                <li><a href="./about.html">About Us</a></li>
                                <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="./about.html">About Us</a></li>
                                        <li><a href="./room-details.html">Room Details</a></li>
                                        <li><a href="./blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="./blog.html">News</a></li>
                                <li><a href="./contact.html">Contact</a></li>
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

<!-- Breadcrumb Begin -->
<div class="breadcrumb-option set-bg" data-setbg="img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h1>Our Room</h1>
                    <div class="breadcrumb__links">
                        <a href="./index.html">Home</a>
                        <span>Rooms</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Rooms Section Begin -->
<section class="rooms spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 p-0 order-lg-2 order-md-2 col-md-6">
                <div class="room__pic__slider owl-carousel">
                    <div class="room__pic__item set-bg" data-setbg="img/rooms/room-1.jpg"></div>
                    <div class="room__pic__item set-bg" data-setbg="img/rooms/room-2.jpg"></div>
                    <div class="room__pic__item set-bg" data-setbg="img/rooms/room-3.jpg"></div>
                    <div class="room__pic__item set-bg" data-setbg="img/rooms/room-4.jpg"></div>
                </div>
            </div>
            <div class="col-lg-6 p-0 order-lg-1 order-md-1 col-md-6">
                <div class="room__text">
                    <h3>Premium King Room</h3>
                    <h2><sup>$</sup>99<span>/day</span></h2>
                    <ul>
                        <li><span>Size:</span>30 ft</li>
                        <li><span>Capacity:</span>Max persion 3</li>
                        <li><span>Bed:</span>King Beds</li>
                        <li><span>Services:</span>Wifi, Television, Bathroom,...</li>
                        <li><span>View:</span>Sea View</li>
                    </ul>
                    <a href="#">View Details</a>
                </div>
            </div>
            <div class="col-lg-6 p-0 order-lg-3 order-md-3 col-md-6">
                <div class="room__pic__slider owl-carousel">
                    <div class="room__pic__item set-bg" data-setbg="img/rooms/room-2.jpg"></div>
                    <div class="room__pic__item set-bg" data-setbg="img/rooms/room-3.jpg"></div>
                    <div class="room__pic__item set-bg" data-setbg="img/rooms/room-4.jpg"></div>
                    <div class="room__pic__item set-bg" data-setbg="img/rooms/room-1.jpg"></div>
                </div>
            </div>
            <div class="col-lg-6 p-0 order-lg-4 order-md-4 col-md-6">
                <div class="room__text right__text">
                    <h3>Deluxe Room</h3>
                    <h2><sup>$</sup>86<span>/day</span></h2>
                    <ul>
                        <li><span>Size:</span>30 ft</li>
                        <li><span>Capacity:</span>Max persion 3</li>
                        <li><span>Bed:</span>King Beds</li>
                        <li><span>Services:</span>Wifi, Television, Bathroom,...</li>
                        <li><span>View:</span>Sea View</li>
                    </ul>
                    <a href="#">View Details</a>
                </div>
            </div>
            <div class="col-lg-6 p-0 order-lg-6 order-md-6 col-md-6">
                <div class="room__pic__slider owl-carousel">
                    <div class="room__pic__item set-bg" data-setbg="img/rooms/room-3.jpg"></div>
                    <div class="room__pic__item set-bg" data-setbg="img/rooms/room-4.jpg"></div>
                    <div class="room__pic__item set-bg" data-setbg="img/rooms/room-2.jpg"></div>
                    <div class="room__pic__item set-bg" data-setbg="img/rooms/room-1.jpg"></div>
                </div>
            </div>
            <div class="col-lg-6 p-0 order-lg-5 order-md-5 col-md-6">
                <div class="room__text">
                    <h3>Double Room</h3>
                    <h2><sup>$</sup>71<span>/day</span></h2>
                    <ul>
                        <li><span>Size:</span>30 ft</li>
                        <li><span>Capacity:</span>Max persion 3</li>
                        <li><span>Bed:</span>King Beds</li>
                        <li><span>Services:</span>Wifi, Television, Bathroom,...</li>
                        <li><span>View:</span>Sea View</li>
                    </ul>
                    <a href="#">View Details</a>
                </div>
            </div>
            <div class="col-lg-6 p-0 order-lg-7 order-md-7 col-md-6">
                <div class="room__pic__slider owl-carousel">
                    <div class="room__pic__item set-bg" data-setbg="img/rooms/room-4.jpg"></div>
                    <div class="room__pic__item set-bg" data-setbg="img/rooms/room-1.jpg"></div>
                    <div class="room__pic__item set-bg" data-setbg="img/rooms/room-2.jpg"></div>
                    <div class="room__pic__item set-bg" data-setbg="img/rooms/room-3.jpg"></div>
                </div>
            </div>
            <div class="col-lg-6 p-0 order-lg-8 order-md-8 col-md-6">
                <div class="room__text right__text">
                    <h3>Luxury Room</h3>
                    <h2><sup>$</sup>79<span>/day</span></h2>
                    <ul>
                        <li><span>Size:</span>30 ft</li>
                        <li><span>Capacity:</span>Max persion 3</li>
                        <li><span>Bed:</span>King Beds</li>
                        <li><span>Services:</span>Wifi, Television, Bathroom,...</li>
                        <li><span>View:</span>Sea View</li>
                    </ul>
                    <a href="#">View Details</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="pagination__number">
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">Next <span class="arrow_right"></span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Rooms Section End -->

<?php
include __DIR__ . '/includes/footer.php';
?>