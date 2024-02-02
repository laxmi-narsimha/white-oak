
  <?php include('header.php'); ?>  

    <!-- Maincontent Start -->
    <main>
        <div class="bannermain">  
            <div class="slick-wrap banner-main-wrapper" data-slider-wrap="data-slider-wrap">
                <div class="home-slider" data-slider="data-slider">
                    <div class="slide">
                        <figure>
                            <img src="images/home-banner.jpg" width="1280" height="897" alt="banner img">
                        </figure>  
                    </div>
                </div>
            </div>
            <div class="banner-overlay"> 
                <div class="banner-inner-cont"> 
                    <h2> Welcome</h2>
                    <a class="btn btn-primary" href="#" aria-label="click to Request Appointment" role="button">Request Appointment</a>
                </div> 
            </div>  
        </div>

        <section class="about-main">
            <div class="container-fluid px-0">
                <div class="container">
                    <div class="about-grid-cont text-center">
                        <h2 class="heading1 text-center">About Us</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                    </div>
                    <div class="about-services-grid">
                        <div class="row">
                            <div class="col-6 col-sm-5 col-md-5">
                                <div class="about-service-left">
                                    <figure>
                                        <img src="images/home-service.jpg" width="412" height="557" alt="service img">
                                    </figure>
                                </div>
                            </div>
                            <div class="col-6 col-sm-7 col-md-7">
                                <div class="about-service-right-cont">
                                    <h3 class="heading1">Our Services</h3>
                                    <ul class="servcies-list">
                                        <li>Hair Cuts</li>
                                        <li>Hair Color</li>
                                        <li>Treatments</li>
                                        <li>Extensions</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <aside class="home-appt-main">
            <div class="container">
                <div class="home-appt-grid-cont text-center">
                    <h3 class="heading1">Schedule an Appointment </h3>
                    <p class="d-none d-sm-block">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                    <a class="btn btn-light" href="#" aria-label="click to Request an Appointment" role="button">Request to book appointment </a>
                </div>
            </div>
        </aside>
        <section class="home-contact-main">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-7 home-contact-left-col">
                        <div class="home-contact-left-inner">
                            <h3 class="heading1">Contact Us</h3>
                            <div class="row flex-column-reverse flex-md-row">
                                <div class="col-12 col-sm-12 col-md-5 contact-info-col">
                                    <div class="home-contact-left-info d-none d-sm-block">
                                        <h4 class="hm-contact-title text-center text-sm-start">Location:</h4>
                                        <p class="text-center text-sm-start">123 Road st. <br> City, state, zip code</p>
                                    </div>
                                    <div class="home-contact-left-info">
                                        <h4 class="hm-contact-title text-center text-sm-start">Phone:</h4>
                                        <p class="text-center text-sm-start"><a href="tel:000-000-0000">(000)-000-0000</a></p>
                                    </div>
                                    <div class="home-contact-left-info">
                                        <h4 class="hm-contact-title text-center text-sm-start">Email:</h4>
                                        <p class="text-center text-sm-start"><a href="mailto:email@address.com">email@address.com</a></p>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-7">
                                    <div class="home-contact-left-hours">
                                        <h4 class="hm-contact-title text-center text-sm-start">Business hours:</h4>
                                        <ul class="hours-list">
                                            <li><span class="days">Monday:</span> <small>00am-00pm</small> </li>
                                            <li><span class="days">Tuesday-Wednesday:</span> <small>00am-00pm</small> </li>
                                            <li><span class="days">Thursday:</span> <small>00am-00pm</small> </li>
                                            <li><span class="days">Friday:</span> <small>00am-00pm</small> </li>
                                            <li><span class="days">Saturday:</span> <small>00am-00pm</small> </li>
                                            <li><span class="days">Sunday:</span> <small>Closed</small> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-5 home-contact-right-col">
                        <div class="home-newsletter-cont">
                            <h4 class="heading1">Sign Up</h4>
                            <h5>For our blog</h5>
                            <p class="d-none d-sm-block">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet</p>
                            <div class="input-group newsletter-input">
                                <input type="text" class="form-control" placeholder="Enter Email Address" aria-label="Email Address" aria-describedby="button-addon2">
                                <button class="btn btn-primary" type="button" id="button-addon2">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <!-- Maincontent End -->

    
<?php include('footer.php') ?>
    
   
<script src="js/slick.min.js"></script>
<script>
$('.home-slider').slick({
    dots: false,
    infinite: true,
    speed: 2000,
    autoplay: false,
    autoplaySpeed: 0,
    pauseOnFocus: false, 
    pauseOnHover: false,
    draggable: false,
    swipeToSlide: false,
    swipe: false,
    prevArrow: null,
    nextArrow: null,
    slidesToShow: 1,
    slidesToScroll: 1,
});

</script> 

<!-- END: SCRIPTS -->

</body>
</html>