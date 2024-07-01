<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cow Wings</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link rel="stylesheet" href="css/custom.css">
    <style>
   @import url('https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100..900;1,100..900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&display=swap');
    </style>
</head>
<body>


    <!-- header section start -->
    <?php include 'includes/header.php';?>
    <!-- header section end -->


    <!-- hero slider section start -->
    <section class="hero--section about--hero--section" style="background-image: url('images/contactbg.png')">
        <div class="banner--txt">
            <h2>Contact</h2>
        </div>
    </section>
    <!-- hero slider section end -->


    <!-- Get in touch start -->
    <section class="cowwings-section pt--100 pb--100">
        <div class="custtom-contaner">
            <div class="get--tuch--box">
                <div class="get-txt--box">
                    <h2 class="heading--h2">Get in touch</h2>

                    <div class="email">
                        <div class="email--txt">
                            <h5>Email us here</h5>
                            <a href="mailto:support@cowwings.com">support@cowwings.com</a>
                        </div>
                        <div class="email--img">
                            <img src="images/email.png" alt="">
                        </div>
                    </div>

                    <div class="email">
                        <div class="email--txt">
                            <h5>Phone</h5>
                            <a href="tel:+000000000000">+00 0000 000000</a>
                        </div>
                        <div class="email--img">
                            <img src="images/call.png" alt="">
                        </div>
                    </div>

                    <div class="email social--icon--footer">
                        <div class="email--txt">
                            <h5>Reach out</h5>
                        </div>
                        <div class="social--img">
                            <span>
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                         </span>
                            <span>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                         </span>
                            <span>
                            <a href="#">
                                <i class="fa-brands fa-linkedin-in"></i></a>
                         </span>
                        </div>
                    </div>


                </div>

                <div class="get--img">
                    <img src="images/contactcow.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Get in touch end -->


    <!-- map section start -->
    <section class="map--section start">
        <div class="map--box">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d92220.7957005566!2d-79.59788560453343!3d43.75417612611278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b322ec4918c75%3A0xfb330d877abf7e3d!2sNorth%20York%2C%20ON%2C%20Canada!5e0!3m2!1sen!2sin!4v1719399835503!5m2!1sen!2sin"
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="visit--us--sec">
            <h2 class="heading--h2">Visit to us!</h2>
            <p>Address 12345 Building name number, City name, State Name, Building Name, Canada</p>
            <button class="cust--btn">
                <a href="#">Visit Now</a>
            </button>
        </div>
    </section>
    <!-- map section end -->


    <!-- Still have a question section start -->
    <section class="have--quction--section pt--100 pb--100">
        <div class="havequction--box">
            <h2 class="heading--h2">Still have a question?</h2>
            <div class="form--box">
                <form action="">
                    <div class="name-box">
                        <input class="input-box outerlinenone" type="text" placeholder="First Name">
                        <input class="input-box outerlinenone" type="text" placeholder="Last Name">
                    </div>
                    <input class="input-box outerlinenone" type="tel" placeholder="Phone">
                    <input class="input-box outerlinenone" type="Email" placeholder="Email">
                    <textarea class="textarea-box outerlinenone" placeholder="Message"></textarea>
                    <input class="form--submit--btn f-Inter transiction outerlinenone" type="submit" value="Submit">
                </form>
            </div>
        </div>
    </section>
    <!-- Still have a question section end -->


    <!-- Hungry For More start -->
    <section>
        <div class="hungry--section contact--hungry">
            <div class="hungey--box">
                <div class="hungry--img">
                    <img src="images/hungry--bowal.png" alt="hungry bowal">
                    <h2 class="Hungry--txt">Hungry For More?</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- Subscribe Us stction start -->
    <div class="newslatter--section pt--100 pb--100">
        <p class="newslatter-txt f-Inter">Stay up to date with all things La Madeleine! Sign up for our email list or connect with us on social media for menu highlights, giveaways, and more!</p>
        <div class="sub--form">
            <form action="">
                <input class="outerlinenone" type="email" placeholder="Enter Your Email">
                <input class="form--submit--btn f-Inter transiction outerlinenone" type="submit" value="Subscribe Us">
            </form>
        </div>
    </div>
    <!-- Subscribe Us stction end -->
    <!-- Hungry For More end -->


    <!-- footer start -->
    <?php include 'includes/footer.php';?>
    <!-- footer end -->


</body>

</html>