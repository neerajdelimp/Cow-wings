<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cow Wings</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" />
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link rel="stylesheet" href="css/custom.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100..900;1,100..900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&display=swap');
    </style>
</head>
<body>


    <!-- header section start -->
    <?php include 'includes/product_header.php';?>
    <!-- header section end -->

    <div class="progress--bar">
      <img src="images/progressbar2.png" alt="">
   </div>

    <!-- Choose your box size start -->
    <section class="feature--pro--sec  pb--100 pt--100">
        <div class="custtom-contaner">
            <div class="Featured-heading---box">
                <h2 class="heading--h2">Choose your box size</h2>
                <p>Either size, shipping is always free!</p>
            </div>

            <div class="custm--plan--box">

                <div class="plan--box">
                    <div class="price--box"><h3>Classic Box</h3><span class="box--price">$146</span></div>
                    <p>Good for individuals and small families</p>
                    <ul>
                        <li>8-11 lbs of high quality meat</li>
                    </ul>
                    <button class="cust--btn add-item"><a href="">Select This</a></button>
                </div>

                <div class="plan--box">
                    <div class="price--box"><h3>Big Box</h3><span class="box--price">$269</span></div>
                    <p>Good for mid-size families and large freezers</p>
                    <ul>
                        <li>16-22 lbs of high quality meat</li>
                    </ul>
                    <button class="cust--btn add-item"><a href="">Select This</a></button>
                </div>

                <div class="plan--box">
                    <div class="price--box"><h3>Extra Large Box</h3><span class="box--price">$269</span></div>
                    <p>Good for mid-size families and large freezers</p>
                    <ul>
                        <li>16-22 lbs of high quality meat</li>
                    </ul>
                    <button class="cust--btn add-item"><a href="">Select This</a></button>
                </div>
            </div>


            <!-- How often section strat -->

             <div class="how--often--section">
                  <div class="how--often">
                    <div class="often-heading">
                        <h2 class="heading--h2">How often?</h2>
                        <p>We'll send you a box every month. (You can pause or cancel anytime.)</p>
                    </div>
                    <div class="every--week--box">
                           <div class="week--box">
                            <p>Every Two Weeks</p><button class="add-item"><a href="#">Select This</a></button>
                           </div>
                           <div class="week--box">
                            <p>Every Month</p><button class="add-item"><a href="#">Select This</a></button>
                           </div>
                           <div class="week--box">
                            <p>Every Six Weeks</p><button class="add-item"><a href="#">Select This</a></button>
                           </div>
                           <div class="week--box">
                            <p>Every Two Months</p><button class="add-item"><a href="#">Select This</a></button>
                           </div>

                         

                    </div>
                     
                  </div>

                  <div class="selact--date--sec">
                        <div class="selact--date">
                            <h3>Select date of every month</h3>
                            <div class="date--calender">
                                <div id="datepicker"></div>
                            </div>
                        </div>
                        <div class="selact--date ">
                            <h3>Select Time</h3>
                            <div class="time--calender">
                                <input type="time">
                            </div>
                        </div>

                  </div>
             </div>

            <!-- How often section end -->

            <button class="cust--btn"><a href="Select-6-Cuts.php">Next</a></button>
        </div>
    </section>

    <!-- Choose your box size end -->
    
  
    <!-- footer start -->
    <?php include 'includes/footer.php';?>
    <!-- footer end -->


</body>

</html>