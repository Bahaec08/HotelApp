<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sona Template">
    <meta name="keywords" content="Sona, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>El Mouradi Gammarth</title>
    <link rel="icon" href="img/logo.gif">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <!-- <div class="offcanvas-menu-overlay"></div>
    <div class="canvas-open">
        <i class="icon_menu"></i>
    </div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="icon_close"></i>
        </div>
        <div class="search-icon  search-switch">
            <i class="icon_search"></i>
        </div>
        <div class="header-configure-area">
            
            <a href="#" class="bk-btn">Booking Now</a>
        </div>
        <nav class="mainmenu mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">Home</a></li>
                <li><a href="./rooms.html">Rooms</a></li>
                <li><a href="./about-us.html">About Us</a></li>
                <li><a href="./pages.html">Pages</a>
                    <ul class="dropdown">
                        <li><a href="./room-details.html">Room Details</a></li>
                        <li><a href="#">Deluxe Room</a></li>
                        <li><a href="#">Family Room</a></li>
                        <li><a href="#">Premium Room</a></li>
                    </ul>
                </li>
                <li><a href="./blog.html">News</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav> 
        <div id="mobile-menu-wrap"></div>
        <div class="top-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-tripadvisor"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
        <ul class="top-widget">
            <li><i class="fa fa-phone"></i> (216) 71 274 300</li>
            <li><i class="fa fa-envelope"></i>res.gammarth@elmouradi.com</li>
        </ul>
    </div> -->
    <!-- Offcanvas Menu Section End -->

    <?php include './header.php'; ?>

    <!-- Hero Section Begin -->
    <section id="home" class="hero-section page-section active">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hero-text">
                        <h1>El Mouradi Hotel</h1>
                        <p>El Mouradi Gammarth is located along a beautiful beach. The hotel is partially renovated, set in a charming and relaxing environment</p>
                        <p class="primary-btn discover">Discover Now</p>
                        <!-- <a href="#" class="primary-btn">Discover Now</a> -->
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 offset-xl-2 offset-lg-1">
                    <div class="booking-form">
                        <h3>Booking Your Hotel</h3>
                        <form id="booking-form">
                            <div class="check-date">
                                <label for="date-in">Check In:</label>
                                <input type="text" class="date-input" id="date-in" required>
                                <i class="icon_calendar"></i>
                            </div>
                            <div class="check-date">
                                <label for="date-out">Check Out:</label>
                                <input type="text" class="date-input" id="date-out" required>
                                <i class="icon_calendar"></i>
                            </div>
                            <div class="select-option">
                                <label for="guest">Guests:</label>
                                <select id="guest">
                                    <option value="2">2 Adults</option>
                                    <option value="3">3 Adults</option>
                                </select>
                            </div>
                            <div class="select-option">
                                <label for="room">Room:</label>
                                <select id="room">
                                    <option value="1">1 Room</option>
                                    <option value="2">2 Room</option>
                                </select>
                            </div>
                            <button type="submit">Check Availability</button>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="img/hero/hero-1.jpg"></div>
            <div class="hs-item set-bg" data-setbg="img/hero/hero-2.jpg"></div>
            <div class="hs-item set-bg" data-setbg="img/hero/hero-3.png"></div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- About Us Section Begin -->
    <section id="about" class="aboutus-section spad page-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-text">
                        <div class="section-title">
                            <span>About Us</span>
                            <h2>EL MOURADI<br /> Hotel</h2>
                        </div>
                        <p class="f-para">El Mouradi Hotels blends Tunisian hospitality with diverse luxury 
                            stays from beaches to deserts, 5 star resorts to all-inclusive clubs. Guests enjoy 
                            top-tier service, tailored experiences (wellness, adventure, business), and authentic
                            local charm. Loyalty isn’t assumed; it’s earned through Tunisia’s beauty, safety, 
                            and warm traditions.</p>
                        <a href="#" class="primary-btn about-btn">Read More</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-pic">
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="img/about/about-1.jpg" alt="">
                            </div>
                            <div class="col-sm-6">
                                <img src="img/about/about-2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Section End -->

    <!-- Services Section End -->
    <section id="services" class="services-section spad page-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>What We Do</span>
                        <h2>Discover Our Services</h2>
                    </div>
                </div>
            </div>
            <div class="row fixx">
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-036-parking"></i>
                        <!--<img src="https://cdn-icons-png.flaticon.com/128/1324/1324854.png" loading="lazy" alt="Dumbell " title="Dumbell " width="60" height="60">-->
                        <h4>Gym</h4>
                        <p>Maintain your wellness routine in our fully equipped, state-of-the-art fitness center, available exclusively for our guests</p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-036-parking"></i>
                        <!--<img src="https://cdn-icons-png.flaticon.com/128/1324/1324854.png" loading="lazy" alt="Dumbell " title="Dumbell " width="60" height="60">-->
                        <h4>Thlasso & Spa</h4>
                        <p>Surrender to relaxation in our spa sanctuary, offering bespoke treatments that blend ancient traditions with modern therapies</p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-036-parking"></i>
                        <!--<img src="https://cdn-icons-png.flaticon.com/128/1324/1324854.png" loading="lazy" alt="Dumbell " title="Dumbell " width="60" height="60">-->
                        <h4>Free parcking</h4>
                        <p>Begin your relaxation the moment you arrive with our hassle-free private parking—always included, always available</p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-033-dinner"></i>
                        <h4>Catering Service</h4>
                        <p>Elevate every occasion with our artfully prepared catering - where flavor, quality and service excellence come together</p>
                    </div>
                </div>
                <!-- <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-026-bed"></i>
                        <h4>Babysitting</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna.</p>
                    </div>
                </div> -->
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-024-towel"></i>
                        <h4>Laundry</h4>
                        <p>Enjoy crisp, fresh garments with our professional laundry service - carefully handled with same-day return for your convenience</p>
                    </div>
                </div>
                <!-- <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-044-clock-1"></i>
                        <h4>Hire Driver</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna.</p>
                    </div>
                </div> -->
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-012-cocktail"></i>
                        <h4>Bar & Drink</h4>
                        <p>From morning espresso to midnight nightcaps, our bars serve premium beverages across the property at your convenience</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Home Room Section Begin -->
    <section id="rooms" class="hp-room-section page-section">
        <div class="container-fluid">
            <div class="hp-room-items">
                <div class="section-title">
                    <span>Residence</span>
                    <h2>Rooms Overview</h2>
                </div>
                <div class="row">                  
                    <div class="col-lg-6 col-md-6">
                        <div class="hp-room-item set-bg" data-setbg="img/room/room-b1.jpg">
                            <div class="hr-text">
                                <h3>Stander Room</h3>
                                <h2>199$<span>/Pernight</span></h2>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">Size:</td>
                                            <td>30 ft</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Capacity:</td>
                                            <td>Max persion 3</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Bed:</td>
                                            <td>King Beds</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Services:</td>
                                            <td>Wifi, Television, Bathroom,...</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="./pages/Standard.php" class="primary-btn" hx-get="./pages/Standard.php" hx-target="#content-container">More Details</a>
                                <!-- <a href="./pages/Standard.php" class="primary-btn">More Details</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="hp-room-item set-bg" data-setbg="img/room/room-b4.jpg">
                            <div class="hr-text">
                                <h3>Business  Room</h3>
                                <h2>299$<span>/Pernight</span></h2>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">Size:</td>
                                            <td>30 ft</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Capacity:</td>
                                            <td>Max persion 3</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Bed:</td>
                                            <td>King Beds</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Services:</td>
                                            <td>Wifi, Television, Bathroom,...</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="./pages/Business.php" class="primary-btn" hx-get="./pages/Business.php" hx-target="#content-container">More Details</a>
                                <!-- <a href="#" class="primary-btn">More Details</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="hp-room-item set-bg" data-setbg="img/room/room-b2.jpg">
                            <div class="hr-text">
                                <h3>Superior Room</h3>
                                <h2>159$<span>/Pernight</span></h2>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">Size:</td>
                                            <td>30 ft</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Capacity:</td>
                                            <td>Max persion 3</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Bed:</td>
                                            <td>King Beds</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Services:</td>
                                            <td>Wifi, Television, Bathroom,...</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="./pages/Superior.php" class="primary-btn" hx-get="./pages/Superior.php" hx-target="#content-container">More Details</a>
                                <!-- <a href="#" class="primary-btn">More Details</a> -->
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-6 col-md-6">
                        <div class="hp-room-item set-bg" data-setbg="img/room/room-b3.jpg">
                            <div class="hr-text">
                                <h3>Executive Suite</h3>
                                <h2>198$<span>/Pernight</span></h2>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">Size:</td>
                                            <td>30 ft</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Capacity:</td>
                                            <td>Max persion 3</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Bed:</td>
                                            <td>King Beds</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Services:</td>
                                            <td>Wifi, Television, Bathroom,...</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="./pages/Suite.php" class="primary-btn" hx-get="./pages/Suite.php" hx-target="#content-container">More Details</a>
                                <!-- <a href="#" class="primary-btn">More Details</a> -->
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Home Room Section End -->


    <!-- Testimonial Section End -->

    <!-- Blog Section Begin -->
    <section id="events" class="blog-section spad page-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Hotel News</span>
                        <h2>Our Event & Blog </h2>
                        <p>
                            The hotel has 7 meeting rooms including two plenary rooms with audiovisual equipment, spacious lounges and a team on hand to guarantee your event is a complete success.
                            
                            Broadband Internet connection and WiFi are available in the reception, guest rooms, meeting rooms and public areas. Two private car parks are available for guests</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="blog-item set-bg" data-setbg="img/blog/blog-1.jpg">
                        <div class="bi-text">
                            <span class="b-tag">Travel Trip</span>
                            <h4><a href="#">Tremblant In Canada</a></h4>
                            <div class="b-time"><i class="icon_clock_alt"></i> 15th April, 2019</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="blog-item set-bg" data-setbg="img/blog/blog-2.jpg">
                        <div class="bi-text">
                            <span class="b-tag">Camping</span>
                            <h4><a href="#">Choosing A Static Caravan</a></h4>
                            <div class="b-time"><i class="icon_clock_alt"></i> 15th April, 2019</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->


    <!-- Testimonial Section Begin -->
    <section class="testimonial-section spad page-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Testimonials</span>
                        <h2>What Customers Say?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="testimonial-slider owl-carousel">
                        <div class="ts-item">
                            <p>After a construction project took longer than expected, my husband, my daughter and I
                                needed a place to stay for a few nights. As a Chicago resident, we know a lot about our
                                city, neighborhood and the types of housing options available and absolutely love our
                                vacation at Sona Hotel.</p>
                            <div class="ti-author">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star-half_alt"></i>
                                </div>
                                <h5> - Alexander Vasquez</h5>
                            </div>
                            <img src="img/testimonial-logo.png" alt="">
                        </div>
                        <div class="ts-item">
                            <p>After a construction project took longer than expected, my husband, my daughter and I
                                needed a place to stay for a few nights. As a Chicago resident, we know a lot about our
                                city, neighborhood and the types of housing options available and absolutely love our
                                vacation at Sona Hotel.</p>
                            <div class="ti-author">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star-half_alt"></i>
                                </div>
                                <h5> - Alexander Vasquez</h5>
                            </div>
                            <img src="img/testimonial-logo.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


  <!--  <section class="testimonial-section spad page-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Testimonials</span>
                        <h2>What Customers Say?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div id="TA_cdswritereviewlg399" class="TA_cdswritereviewlg">
                        <ul id="yhHKmP" class="TA_links QsQBQO">
                            <li id="1vx5gX" class="hKQmsC">
                                <a target="_blank" href="https://www.tripadvisor.com/">
                                    <img src="https://www.tripadvisor.com/img/cdsi/img2/branding/medium-logo-29834-2.png" alt="TripAdvisor"/>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <script async src="https://www.jscache.com/wejs?wtype=cdswritereviewlg&uniq=399&locationId=YOUR_HOTEL_ID&lang=en_US&border=true&shadow=true&display_version=2"></script>
                </div>
            </div>
        </div>
    </section>
-->


    

<?php include './footer.php'; ?>

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://unpkg.com/htmx.org@1.9.10"></script>
    <script>
        // SPA Navigation
        $(document).ready(function() {
            // Show home section by default
            $('.page-section').removeClass('active');
            $('#home').addClass('active');
            
            // Handle menu clicks
            $('.nav-menu a').click(function(e) {
                e.preventDefault();
                
                // Get target section ID
                var target = $(this).attr('href');
                
                // Update active menu item
                $('.nav-menu a').removeClass('active');
                $(this).addClass('active');
                
                // Hide all sections
                $('.page-section').removeClass('active');
                
                // Show target section
                $(target).addClass('active');
                
                // Scroll to top of section
                $('html, body').animate({
                    scrollTop: $(target).offset().top - 100
                }, 500);
            });
            
            // Booking form script
            document.getElementById('booking-form').addEventListener('submit', function(event) {
                event.preventDefault();
                
                function formatDateForBooking(inputDate) {
                    const months = {
                        'January': '01', 'February': '02', 'March': '03', 'April': '04',
                        'May': '05', 'June': '06', 'July': '07', 'August': '08',
                        'September': '09', 'October': '10', 'November': '11', 'December': '12'
                    };
                    
                    const parts = inputDate.split(' ');
                    const day = parts[0].padStart(2, '0');
                    const month = months[parts[1].replace(',', '')];
                    const year = parts[2];
                    
                    return `${year}-${month}-${day}`;
                }
            
                const checkinDate = formatDateForBooking(document.getElementById('date-in').value);
                const checkoutDate = formatDateForBooking(document.getElementById('date-out').value);
                const guests = document.getElementById('guest').value;
                const rooms = document.getElementById('room').value;
                
                let bookingUrl = "https://www.booking.com/hotel/tn/el-mouradi-gammath.fr.html?" +
                    "aid=356980&" +
                    "label=gog235jc-1FCAso4gFCEmthcnRoYWdvLWxlLXBhbGFjZUgNWANo4gGIAQGYAQ24ARfIAQ_YAQHoAQH4AQKIAgGoAgO4AtSomr8GwAIB0gIkOThkYzAzZDYtNDA3My00MGE1LTliNGMtZTM3YjQyYWJiZDNi2AIF4AIB&" +
                    "sid=259cec02e98e5a1c66ace5e3d8d025f5&" +
                    "all_sr_blocks=0_0_2_0_0&" +
                    `checkin=${checkinDate}&` +
                    `checkout=${checkoutDate}&` +
                    "dest_id=-727847&" +
                    "dest_type=city&" +
                    "dist=0&" +
                    `group_adults=${guests}&` +
                    "group_children=0&" +
                    "hapos=1&" +
                    "highlighted_blocks=0_0_2_0_0&" +
                    "hpos=1&" +
                    "matching_block_id=0_0_2_0_0&" +
                    `no_rooms=${rooms}&` +
                    `req_adults=${guests}&` +
                    "req_children=0&" +
                    "room1=A%2CA&" +
                    "sb_price_type=total&" +
                    "sr_order=popularity&" +
                    "sr_pri_blocks=0_0_2_0_0__8511&" +
                    "srepoch=1743164546&" +
                    "srpvid=fa2b56fb44f302e8&" +
                    "type=total&" +
                    "ucfs=1";
                
                window.open(bookingUrl, '_blank');
                this.reset();
            });
        });
    </script>
</body>

</html>