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
                <h2 class="heading--h2">Select 6 Cuts</h2>
                <p>You can change your cuts month-to-month through your account page</p>
            </div>


            <!-- Select 6 Cuts section start -->


            <div class="tabing--section cut--tabbing">
             <div class="tab--section">
                <div class="tab">
                    <button class="tablinks" onclick="openCity(event, 'custon_box')">CUSTOM BOX</button>
                    <button class="tablinks" onclick="openCity(event, 'beff_pork_box')">BEEF & PORK BOX</button>
                    <button class="tablinks" onclick="openCity(event, 'chiken')">BEEF, PORK & CHICKEN</button>
                    <button class="tablinks" onclick="openCity(event, 'pork_box')">BEEF, PORK & CHICKEN</button>
                  </div>
             </div>
          <div class="Select-Cuts--box">

                <!-- tab 1 -->
            <div id="custon_box" class="tabcontent ">
               <div class="Select-Cuts-content">

                  <div class="cut--box">
                      <div class="pro--img"><img src="images/productcut.png" alt=""></div>
                      <div class="cut-pro-dis">
                        <h3>Sirloin Tips</h3>
                        <p>2 lbs (6 x 5.3 oz patties)</p>
                      </div>
                      <div class="add--btn--box"> 
                        <span class="cart--minus"><i class="fa fa-minus" aria-hidden="true"></i></span><button class="addtocart--btn">+Add To Box</button> <span class="cart--plus"><i class="fa fa-plus" aria-hidden="true"></i></span>
                      <div>
                      </div>  
                </div>
                </div>
                <div class="cut--box">
                    <div class="pro--img"><img src="images/productcut.png" alt=""></div>
                    <div class="cut-pro-dis">
                      <h3>Sirloin Tips</h3>
                      <p>2 lbs (6 x 5.3 oz patties)</p>
                    </div>
                    <div class="add--btn--box"> 
                      <span>-</span><button>+Add To Box</button> <span>+</span>
                    <div>
                    </div>  
              </div>
              </div>
              <div class="cut--box">
                <div class="pro--img"><img src="images/productcut.png" alt=""></div>
                <div class="cut-pro-dis">
                  <h3>Sirloin Tips</h3>
                  <p>2 lbs (6 x 5.3 oz patties)</p>
                </div>
                <div class="add--btn--box"> 
                  <span>-</span><button>+Add To Box</button> <span>+</span>
                <div>
                </div>  
          </div>
          </div>
          <div class="cut--box">
            <div class="pro--img"><img src="images/productcut.png" alt=""></div>
            <div class="cut-pro-dis">
              <h3>Sirloin Tips</h3>
              <p>2 lbs (6 x 5.3 oz patties)</p>
            </div>
            <div class="add--btn--box"> 
              <span>-</span><button>+Add To Box</button> <span>+</span>
            <div>
            </div>  
      </div>
      </div>
      <div class="cut--box">
        <div class="pro--img"><img src="images/productcut.png" alt=""></div>
        <div class="cut-pro-dis">
          <h3>Sirloin Tips</h3>
          <p>2 lbs (6 x 5.3 oz patties)</p>
        </div>
        <div class="add--btn--box"> 
          <span>-</span><button>+Add To Box</button> <span>+</span>
        <div>
        </div>  
  </div>
  </div>
  <div class="cut--box">
    <div class="pro--img"><img src="images/productcut.png" alt=""></div>
    <div class="cut-pro-dis">
      <h3>Sirloin Tips</h3>
      <p>2 lbs (6 x 5.3 oz patties)</p>
    </div>
    <div class="add--btn--box"> 
      <span>-</span><button>+Add To Box</button> <span>+</span>
    <div>
    </div>  
</div>
</div>




              </div>
              
               <!-- tab 2 -->
              <div id="beff_pork_box" class="tabcontent">
                <h3>BEEF & PORK BOX</h3>
                <div class="tab--box-sec">
       
                    <div class="featur--box">
                      <div class="tab--img">
                          <img src="images/slide1.png" alt="">
                     </div>
                  <div class="Featured--box--left">
                      <p>Enjoy a curated selection of 100% grass-fed beef and pork raised crate-free.</p>
                      <ul>
                          <li>8-11 lbs of high-quality meat</li>
                          <li>$146 per month</li>
                          <li>Free shipping, cancel anytime</li>
                      </ul>
                  </div>
                  <div class="Featured--box--right">
                      <p>A SAMPLE BOX COULD INCLUDE</p>
                      <ul>
                          <li>2 lbs of Ground Beef</li>
                          <li>2 New York Strip Steaks</li>
                          <li>4 Top Sirloin Steaks</li>
                          <li>1 lb of Whole Pork Tenderloin</li>
                          <li>4 Boneless Pork Chops</li>
                      </ul>
                      <div class="note--box">
                          <span>Note:</span>
                          <p>Specific cuts may vary by region and availability</p>
                      </div>
                  </div>
              </div>
              </div>
              </div>
              

         <!-- tab 3 -->
              <div id="chiken" class="tabcontent">
                <h3>BEEF, PORK & CHICKEN</h3>
                <div class="tab--box-sec">
       
                    <div class="featur--box">
                      <div class="tab--img">
                          <img src="images/slide1.png" alt="">
                     </div>
                  <div class="Featured--box--left">
                      <p>Enjoy a curated selection of 100% grass-fed beef and pork raised crate-free.</p>
                      <ul>
                          <li>8-11 lbs of high-quality meat</li>
                          <li>$146 per month</li>
                          <li>Free shipping, cancel anytime</li>
                      </ul>
                  </div>
                  <div class="Featured--box--right">
                      <p>A SAMPLE BOX COULD INCLUDE</p>
                      <ul>
                          <li>2 lbs of Ground Beef</li>
                          <li>2 New York Strip Steaks</li>
                          <li>4 Top Sirloin Steaks</li>
                          <li>1 lb of Whole Pork Tenderloin</li>
                          <li>4 Boneless Pork Chops</li>
                      </ul>
                      <div class="note--box">
                          <span>Note:</span>
                          <p>Specific cuts may vary by region and availability</p>
                      </div>
                  </div>
              </div>
              </div>
              </div>

               <!-- tab 4 -->
              <div id="pork_box" class="tabcontent">
                <h3>BEEF & PORK BOX</h3>
                <div class="tab--box-sec">
       
                    <div class="featur--box">
                      <div class="tab--img">
                          <img src="images/slide1.png" alt="">
                     </div>
                  <div class="Featured--box--left">
                      <p>Enjoy a curated selection of 100% grass-fed beef and pork raised crate-free.</p>
                      <ul>
                          <li>8-11 lbs of high-quality meat</li>
                          <li>$146 per month</li>
                          <li>Free shipping, cancel anytime</li>
                      </ul>
                  </div>
                  <div class="Featured--box--right">
                      <p>A SAMPLE BOX COULD INCLUDE</p>
                      <ul>
                          <li>2 lbs of Ground Beef</li>
                          <li>2 New York Strip Steaks</li>
                          <li>4 Top Sirloin Steaks</li>
                          <li>1 lb of Whole Pork Tenderloin</li>
                          <li>4 Boneless Pork Chops</li>
                      </ul>
                      <div class="note--box">
                          <span>Note:</span>
                          <p>Specific cuts may vary by region and availability</p>
                      </div>
                  </div>
              </div>
              </div>
              </div>

          </div>

            </div>

            <!-- Select 6 Cuts section end -->


        </div>
    </section>

    <!-- Choose your box size end -->
    
  
    <!-- footer start -->
    <?php include 'includes/footer.php';?>
    <!-- footer end -->


</body>

</html>