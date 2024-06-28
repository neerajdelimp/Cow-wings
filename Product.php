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
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&display=swap');
    </style>
</head>
<body>


    <!-- header section start -->
    <?php include 'includes/header.php';?>
    <!-- header section end -->


    <!-- hero slider section start -->
    <section class="hero--section about--hero--section" style="background-image: url('images/productbaner.png')">
        <div class="banner--txt">
            <h2>Products</h2>
        </div>
    </section>
    <!-- hero slider section end -->


    <!-- Featured Products section start -->

    <section class="feature--pro--sec  pb--100 pt--100">
        <div class="custtom-contaner">
            <div class="Featured-heading---box">
                <h2 class="heading--h2">Featured Products</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis </p>
            </div>

            <div class="tabing--section">
             <div class="tab--section">
                <div class="tab">
                    <button class="tablinks" onclick="openCity(event, 'custon_box')">CUSTOM BOX</button>
                    <button class="tablinks" onclick="openCity(event, 'beff_pork_box')">BEEF & PORK BOX</button>
                    <button class="tablinks" onclick="openCity(event, 'chiken')">BEEF, PORK & CHICKEN</button>
                    <button class="tablinks" onclick="openCity(event, 'pork_box')">BEEF, PORK & CHICKEN</button>
                  </div>
             </div>
          <div class="tab--cuntent--box">

                <!-- tab 1 -->
            <div id="custon_box" class="tabcontent">
                <h3>CUSTOM BOX</h3>
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
            <button class="cust--btn">
                <a class="transiction" href="#">Choose your plan</a>
            </button>
        </div>
    </section>

    <!-- Featured Products section end -->


    <!-- Choose your plan strat -->
    <section class="exp--pro--section chusyour--plan mb--100">
        <div class="exp--pro-wraper">
            <div class="exp--pro-text">
                <h2 class="heading--h2">Choose your plan for everyday delivery</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud</p>
                <button class="cust--btn">
                    <a class="transiction" href="#">Choose your plan</a>
                </button>
            </div>
            <div class="exp--pro-img">
                <img src="images/chuss.png" alt="peoduct image">
            </div>
        </div>
    </section>
    <!-- Choose your plan end -->


    <!-- How to start section start -->
    <section class="howwestart-section about--howwestar mb--100 mt--100">
        <div class="custtom-contaner">
            <div class="Featured-heading---box pb-80">
                <h2 class="heading--h2">How to start?</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna</p>
            </div>

            <div class="sleact--product--section mb--100 timeline">
                <div class="pro--img">
                    <img src="images/task--pro.png" alt="">
                </div>
                <div class="pro--txt-box">
                    <div class="task--list">

                        <svg width="16" height="19" viewBox="0 0 16 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.14844 7.9856H10.6148C11.2081 7.9856 11.6891 7.50464 11.6891 6.91138C11.6891 6.31812 11.2081 5.83716 10.6148 5.83716H6.14844C5.55518 5.83716 5.07422 6.31812 5.07422 6.91138C5.07422 7.50464 5.55518 7.9856 6.14844 7.9856Z" fill="black" />
                            <path d="M6.14844 12.6731H10.6148C11.2081 12.6731 11.6891 12.1921 11.6891 11.5989C11.6891 11.0056 11.2081 10.5247 10.6148 10.5247H6.14844C5.55518 10.5247 5.07422 11.0056 5.07422 11.5989C5.07422 12.1921 5.55518 12.6731 6.14844 12.6731Z" fill="black" />
                            <path d="M14.9258 0.00219727H1.83984C1.24658 0.00219727 0.765625 0.483154 0.765625 1.07642V17.4338C0.765625 18.0271 1.24658 18.5081 1.83984 18.5081H14.9258C15.519 18.5081 16 18.0271 16 17.4338V1.07642C16 0.483154 15.519 0.00219727 14.9258 0.00219727ZM13.8516 16.3596H2.91406V2.15063H13.8516V16.3596Z"
                            fill="black" />
                        </svg>

                        <svg width="16" height="19" viewBox="0 0 16 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.14844 7.9856H10.6148C11.2081 7.9856 11.6891 7.50464 11.6891 6.91138C11.6891 6.31812 11.2081 5.83716 10.6148 5.83716H6.14844C5.55518 5.83716 5.07422 6.31812 5.07422 6.91138C5.07422 7.50464 5.55518 7.9856 6.14844 7.9856Z" fill="black" />
                            <path d="M6.14844 12.6731H10.6148C11.2081 12.6731 11.6891 12.1921 11.6891 11.5989C11.6891 11.0056 11.2081 10.5247 10.6148 10.5247H6.14844C5.55518 10.5247 5.07422 11.0056 5.07422 11.5989C5.07422 12.1921 5.55518 12.6731 6.14844 12.6731Z" fill="black" />
                            <path d="M14.9258 0.00219727H1.83984C1.24658 0.00219727 0.765625 0.483154 0.765625 1.07642V17.4338C0.765625 18.0271 1.24658 18.5081 1.83984 18.5081H14.9258C15.519 18.5081 16 18.0271 16 17.4338V1.07642C16 0.483154 15.519 0.00219727 14.9258 0.00219727ZM13.8516 16.3596H2.91406V2.15063H13.8516V16.3596Z"
                            fill="black" />
                        </svg>

                        <svg width="16" height="19" viewBox="0 0 16 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.14844 7.9856H10.6148C11.2081 7.9856 11.6891 7.50464 11.6891 6.91138C11.6891 6.31812 11.2081 5.83716 10.6148 5.83716H6.14844C5.55518 5.83716 5.07422 6.31812 5.07422 6.91138C5.07422 7.50464 5.55518 7.9856 6.14844 7.9856Z" fill="black" />
                            <path d="M6.14844 12.6731H10.6148C11.2081 12.6731 11.6891 12.1921 11.6891 11.5989C11.6891 11.0056 11.2081 10.5247 10.6148 10.5247H6.14844C5.55518 10.5247 5.07422 11.0056 5.07422 11.5989C5.07422 12.1921 5.55518 12.6731 6.14844 12.6731Z" fill="black" />
                            <path d="M14.9258 0.00219727H1.83984C1.24658 0.00219727 0.765625 0.483154 0.765625 1.07642V17.4338C0.765625 18.0271 1.24658 18.5081 1.83984 18.5081H14.9258C15.519 18.5081 16 18.0271 16 17.4338V1.07642C16 0.483154 15.519 0.00219727 14.9258 0.00219727ZM13.8516 16.3596H2.91406V2.15063H13.8516V16.3596Z"
                            fill="black" />
                        </svg>
                    </div>
                    <div class="task--txt">
                        <h4 class="heading--h4">Select Product</h4>
                        <p>"Try Our Wellness Creations" Discover a range of carefully crafted dishes that focus on fresh ingredients, vibrant flavors, and balanced nutrition.</p>
                    </div>
                </div>
            </div>



            <div class="sleact--product--section  right--section mb--100 timeline-right">
                <div class="pro--img">
                    <img src="images/Ellipse 3.png" alt="">
                </div>
                <div class="pro--txt-box">
                    <div class="task--list">
                        <svg width="51" height="50" viewBox="0 0 51 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_379_398)">
                                <path d="M47.5703 32.4801V4.39453C47.5703 1.97139 45.5989 0 43.1758 0H10.8516C8.42842 0 6.45703 1.97139 6.45703 4.39453V5.95703H4.89453C2.47139 5.95703 0.5 7.92842 0.5 10.3516C0.5 12.7747 2.47139 14.7461 4.89453 14.7461H6.45703V20.6055H4.89453C2.47139 20.6055 0.5 22.5769 0.5 25C0.5 27.4231 2.47139 29.3945 4.89453 29.3945H6.45703V35.2539H4.89453C2.47139 35.2539 0.5 37.2253 0.5 39.6484C0.5 42.0716 2.47139 44.043 4.89453 44.043H6.45703V45.5078C6.45703 46.6753 6.90596 47.7878 7.72109 48.6405C8.55918 49.5172 9.671 50 10.8516 50H40.2461C45.9001 50 50.5 45.3563 50.5 39.6484C50.5 36.861 49.3814 34.3303 47.5703 32.4801ZM4.89453 11.8164C4.08682 11.8164 3.42969 11.1593 3.42969 10.3516C3.42969 9.54385 4.08682 8.88672 4.89453 8.88672H7.92188C8.72959 8.88672 9.38672 9.54385 9.38672 10.3516C9.38672 11.1593 8.72959 11.8164 7.92188 11.8164H4.89453ZM4.89453 26.4648C4.08682 26.4648 3.42969 25.8077 3.42969 25C3.42969 24.1923 4.08682 23.5352 4.89453 23.5352H7.92188C8.72959 23.5352 9.38672 24.1923 9.38672 25C9.38672 25.8077 8.72959 26.4648 7.92188 26.4648H4.89453ZM7.92188 41.1133H4.89453C4.08682 41.1133 3.42969 40.4562 3.42969 39.6484C3.42969 38.8407 4.08682 38.1836 4.89453 38.1836H7.92188C8.72959 38.1836 9.38672 38.8407 9.38672 39.6484C9.38672 40.4562 8.72959 41.1133 7.92188 41.1133ZM10.8516 47.0703C10.0713 47.0703 9.38672 46.3401 9.38672 45.5078V43.791C11.0917 43.1863 12.3164 41.5581 12.3164 39.6484C12.3164 37.7388 11.0917 36.1105 9.38672 35.5059V29.1426C11.0917 28.5379 12.3164 26.9097 12.3164 25C12.3164 23.0903 11.0917 21.4621 9.38672 20.8574V14.4941C11.0917 13.8895 12.3164 12.2612 12.3164 10.3516C12.3164 8.44189 11.0917 6.81367 9.38672 6.20898V4.39453C9.38672 3.58682 10.0438 2.92969 10.8516 2.92969H43.1758C43.9835 2.92969 44.6406 3.58682 44.6406 4.39453V30.3853C43.308 29.7505 41.8179 29.3945 40.2461 29.3945C34.5921 29.3945 29.9922 33.9944 29.9922 39.6484C29.9922 42.5566 31.1868 45.1881 33.1061 47.0703H10.8516ZM40.2461 47.0703C36.2075 47.0703 32.9219 43.7409 32.9219 39.6484C32.9219 35.6099 36.2075 32.3242 40.2461 32.3242C44.2847 32.3242 47.5703 35.6099 47.5703 39.6484C47.5703 43.7409 44.2847 47.0703 40.2461 47.0703Z"
                                fill="black" />
                                <path d="M40.2461 11.8164H31.457C30.648 11.8164 29.9922 12.4723 29.9922 13.2812C29.9922 14.0902 30.648 14.7461 31.457 14.7461H40.2461C41.0551 14.7461 41.7109 14.0902 41.7109 13.2812C41.7109 12.4723 41.0551 11.8164 40.2461 11.8164Z" fill="black" />
                                <path d="M40.2461 23.5352H31.457C30.648 23.5352 29.9922 24.191 29.9922 25C29.9922 25.809 30.648 26.4648 31.457 26.4648H40.2461C41.0551 26.4648 41.7109 25.809 41.7109 25C41.7109 24.191 41.0551 23.5352 40.2461 23.5352Z" fill="black" />
                                <path d="M43.1758 38.1836H41.7109V36.7188C41.7109 35.9098 41.0551 35.2539 40.2461 35.2539C39.4371 35.2539 38.7812 35.9098 38.7812 36.7188V39.6484C38.7812 40.4574 39.4371 41.1133 40.2461 41.1133H43.1758C43.9848 41.1133 44.6406 40.4574 44.6406 39.6484C44.6406 38.8395 43.9848 38.1836 43.1758 38.1836Z"
                                fill="black" />
                                <path d="M26.5355 9.31576C25.9635 8.74369 25.036 8.74369 24.464 9.31586L19.6404 14.1394L17.3346 11.8336C16.7626 11.2616 15.8351 11.2616 15.263 11.8336C14.691 12.4057 14.691 13.3331 15.263 13.9052L18.6046 17.2468C18.8906 17.5328 19.2655 17.6758 19.6404 17.6758C20.0153 17.6758 20.3902 17.5328 20.6761 17.2467L26.5355 11.3873C27.1076 10.8153 27.1076 9.88783 26.5355 9.31576Z"
                                fill="#DD0F00" />
                                <path d="M26.5355 21.0345C25.9635 20.4624 25.036 20.4624 24.464 21.0346L19.6404 25.8581L17.3346 23.5524C16.7626 22.9803 15.8351 22.9803 15.263 23.5524C14.691 24.1244 14.691 25.0519 15.263 25.624L18.6046 28.9656C18.8906 29.2516 19.2655 29.3946 19.6404 29.3946C20.0153 29.3946 20.3902 29.2516 20.6761 28.9655L26.5355 23.1061C27.1076 22.534 27.1076 21.6066 26.5355 21.0345Z"
                                fill="#DD0F00" />
                                <path d="M26.5355 32.7533C25.9635 32.1812 25.036 32.1812 24.464 32.7534L19.6404 37.5769L17.3346 35.2711C16.7626 34.6991 15.8351 34.6991 15.263 35.2711C14.691 35.8432 14.691 36.7706 15.263 37.3427L18.6046 40.6843C18.8906 40.9703 19.2655 41.1133 19.6404 41.1133C20.0153 41.1133 20.3902 40.9703 20.6761 40.6842L26.5355 34.8248C27.1076 34.2528 27.1076 33.3253 26.5355 32.7533Z"
                                fill="black" />
                            </g>
                            <defs>
                                <clipPath id="clip0_379_398">
                                    <rect width="50" height="50" fill="white" transform="translate(0.5)" />
                                </clipPath>
                            </defs>
                        </svg>



                    </div>
                    <div class="task--txt">
                        <h4 class="heading--h4">Take a Plan</h4>
                        <p>"Try Our Wellness Creations" Discover a range of carefully crafted dishes that focus on fresh ingredients, vibrant flavors, and balanced nutrition.</p>
                    </div>
                </div>
            </div>





            <div class="sleact--product--section">
                <div class="pro--img">
                    <img src="images/delevrry.png" alt="">
                </div>
                <div class="pro--txt-box">
                    <div class="task--list">
                        <svg width="68" height="50" viewBox="0 0 68 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.7885 7.89478C14.0622 7.89478 13.4727 8.48427 13.4727 9.21062C13.4727 9.93696 14.0622 10.5265 14.7885 10.5265C15.5148 10.5265 16.1043 9.93696 16.1043 9.21062C16.1043 8.48427 15.5148 7.89478 14.7885 7.89478Z" fill="#DD0F00" />
                            <path d="M62.2807 19.1484L60.3768 15.3405C59.7036 13.9941 58.3508 13.1579 56.846 13.1579H45.8407V3.94739C45.8407 1.77086 44.07 0 41.8933 0H4.26185C2.08518 0 0.314453 1.77073 0.314453 3.94739V38.1578C0.314453 40.3344 2.08518 42.1052 4.26185 42.1052H8.20924C8.20924 44.1256 8.97308 45.9705 10.2259 47.3683H1.63029C0.903555 47.3683 0.314453 47.9576 0.314453 48.6842C0.314453 49.4108 0.903555 50 1.63029 50H66.3671C67.0938 50 67.6829 49.4108 67.6829 48.6842C67.6829 47.9576 67.0938 47.3683 66.3671 47.3683H63.0346C64.2875 45.9704 65.0512 44.1256 65.0512 42.1052C65.0512 42.0302 65.0477 41.9556 65.0456 41.8807C66.58 41.3391 67.6828 39.8753 67.6828 38.1578V30.8841C67.6828 29.3487 67.9869 30.7821 62.2807 19.1484ZM60.2906 21.0525L64.238 28.9473H51.1038V21.0525H60.2906ZM2.946 31.5789H5.57756V34.2104H2.946V31.5789ZM16.1039 47.3683C13.2018 47.3683 10.8408 45.0072 10.8408 42.1052C10.8408 41.7468 10.8763 41.394 10.9474 41.051C11.4423 38.6122 13.6109 36.842 16.1039 36.842C18.5969 36.842 20.7657 38.612 21.2604 41.051C21.2608 41.0529 21.2612 41.0546 21.2616 41.0565C21.3316 41.3939 21.367 41.7468 21.367 42.1052C21.367 45.0073 19.006 47.3683 16.1039 47.3683ZM16.1039 34.2104C12.7326 34.2104 9.75733 36.3701 8.66044 39.4735H4.26185C3.53629 39.4735 2.946 38.8832 2.946 38.1577V36.8418H6.8934C7.62014 36.8418 8.20924 36.2526 8.20924 35.526V30.2629C8.20924 29.5363 7.62014 28.9471 6.8934 28.9471H2.946V3.94739C2.946 3.22184 3.53629 2.63155 4.26185 2.63155H41.8933C42.6189 2.63155 43.2092 3.22184 43.2092 3.94739C43.2092 4.92625 43.2092 36.3181 43.2092 39.4737H23.5467C22.4478 36.3685 19.4738 34.2104 16.1039 34.2104ZM21.9819 47.3683C23.2348 45.9704 23.9985 44.1256 23.9985 42.1052C25.0088 42.1052 48.8315 42.1052 49.2616 42.1052C49.2616 44.1256 50.0255 45.9705 51.2783 47.3683H21.9819ZM57.1564 47.3683C54.2543 47.3683 51.8933 45.0072 51.8933 42.1052C51.8933 41.7468 51.9289 41.394 51.9999 41.051C52.4948 38.6122 54.6634 36.842 57.1564 36.842C59.6494 36.842 61.8182 38.612 62.313 41.051C62.3133 41.0529 62.3137 41.0546 62.3141 41.0565C62.3841 41.3939 62.4195 41.7468 62.4195 42.1052C62.4197 45.0073 60.0585 47.3683 57.1564 47.3683ZM65.0512 38.1578C65.0512 38.5955 64.8355 38.9827 64.5059 39.2222C63.3386 36.2525 60.4346 34.2106 57.1564 34.2106C53.7851 34.2106 50.8099 36.3703 49.713 39.4737H45.8406V15.7894H56.8459C57.3475 15.7894 57.7984 16.0684 58.0229 16.5172L58.9748 18.421H49.7881C49.0614 18.421 48.4723 19.0102 48.4723 19.7368V30.2632C48.4723 30.9898 49.0614 31.579 49.7881 31.579H65.0512V38.1578Z"
                            fill="black" />
                            <path d="M36.6311 7.89478H20.0522C19.3254 7.89478 18.7363 8.48401 18.7363 9.21062C18.7363 9.93722 19.3254 10.5265 20.0522 10.5265H36.6311C37.3579 10.5265 37.947 9.93722 37.947 9.21062C37.947 8.48401 37.3577 7.89478 36.6311 7.89478Z" fill="#DD0F00" />
                            <path d="M36.6317 13.1577H25.3158C24.5891 13.1577 24 13.7469 24 14.4736C24 15.2002 24.5891 15.7894 25.3158 15.7894H36.6317C37.3584 15.7894 37.9475 15.2002 37.9475 14.4736C37.9475 13.7469 37.3583 13.1577 36.6317 13.1577Z" fill="#DD0F00" />
                            <path d="M57.1569 39.4734C55.7058 39.4734 54.5254 40.654 54.5254 42.1049C54.5254 43.556 55.706 44.7365 57.1569 44.7365C58.6081 44.7365 59.7885 43.5559 59.7885 42.1049C59.7885 40.6538 58.6081 39.4734 57.1569 39.4734Z" fill="black" />
                            <path d="M16.1042 39.4734C14.6531 39.4734 13.4727 40.654 13.4727 42.1049C13.4727 43.556 14.6532 44.7365 16.1042 44.7365C17.5553 44.7365 18.7358 43.5559 18.7358 42.1049C18.7358 40.6538 17.5553 39.4734 16.1042 39.4734Z" fill="black" />
                        </svg>
                    </div>
                    <div class="task--txt">
                        <h4 class="heading--h4">We Deliver until your cancelation </h4>
                        <p>"Try Our Wellness Creations" Discover a range of carefully crafted dishes that focus on fresh ingredients, vibrant flavors, and balanced nutrition.</p>
                    </div>
                </div>
            </div>



            <div class="chus--btn">

                <button class="cust--btn">
                    <a href="#">Choose your plan</a>
                </button>

            </div>
        </div>
    </section>
    <!-- How to start section end -->


    <!-- People love For Cowwings  section start -->
    <!-- Featured--section  -->
    <section class="cowwings-section mb--100">
        <div class="custtom-contaner">
            <div class="Featured-heading---box">
                <h2 class="heading--h2">People love For Cowwings</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidun.</p>
            </div>
            <div class="review--slider">
                <div class="reviewslider">

                    <!-- slide 1 -->
                    <div class="slide sider--box ">

                        <div class="feature-slide-img">
                            <img src="images/usersimg.png" alt="slide image one">
                        </div>
                        <div class="user--box">
                            <div class="user--image">
                                <img src="images/userlogo.png" alt="slide image one">
                            </div>
                            <div class="user--name--box">
                                <div class="user--name">
                                    <h4>John Matthews</h4>
                                    <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.23617 0.515169L8.2405 3.4971C8.3435 3.80383 8.64022 4.01227 8.97499 4.01227H12.2253C12.9744 4.01227 13.2857 4.93677 12.6799 5.36122L10.0499 7.20481C9.7789 7.39489 9.66582 7.73078 9.76882 8.03858L10.7732 11.0205C11.0049 11.7074 10.1898 12.2787 9.58408 11.8543L6.95402 10.0107C6.68306 9.82061 6.31694 9.82061 6.04598 10.0107L3.41592 11.8543C2.81019 12.2787 1.99508 11.7074 2.22685 11.0205L3.23118 8.03858C3.33418 7.73186 3.2211 7.39489 2.95014 7.20481L0.320079 5.36122C-0.285653 4.93677 0.0256103 4.01227 0.774658 4.01227H4.02501C4.35979 4.01227 4.65649 3.80383 4.7595 3.4971L5.76383 0.515169C5.99671 -0.171723 7.0044 -0.171723 7.23617 0.515169Z"
                                        fill="#FFB800" />
                                    </svg>
                                </div>
                                <div class="user--review">

                                </div>
                            </div>
                        </div>

                        <div class="slider--peragraph">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                                laoreet</p>
                        </div>
                    </div>

                    <!-- slide 1 -->
                    <div class="slide sider--box ">

                        <div class="feature-slide-img">
                            <img src="images/usersimg.png" alt="slide image one">
                        </div>
                        <div class="user--box">
                            <div class="user--image">
                                <img src="images/userlogo.png" alt="slide image one">
                            </div>
                            <div class="user--name--box">
                                <div class="user--name">
                                    <h4>John Matthews</h4>
                                    <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.23617 0.515169L8.2405 3.4971C8.3435 3.80383 8.64022 4.01227 8.97499 4.01227H12.2253C12.9744 4.01227 13.2857 4.93677 12.6799 5.36122L10.0499 7.20481C9.7789 7.39489 9.66582 7.73078 9.76882 8.03858L10.7732 11.0205C11.0049 11.7074 10.1898 12.2787 9.58408 11.8543L6.95402 10.0107C6.68306 9.82061 6.31694 9.82061 6.04598 10.0107L3.41592 11.8543C2.81019 12.2787 1.99508 11.7074 2.22685 11.0205L3.23118 8.03858C3.33418 7.73186 3.2211 7.39489 2.95014 7.20481L0.320079 5.36122C-0.285653 4.93677 0.0256103 4.01227 0.774658 4.01227H4.02501C4.35979 4.01227 4.65649 3.80383 4.7595 3.4971L5.76383 0.515169C5.99671 -0.171723 7.0044 -0.171723 7.23617 0.515169Z"
                                        fill="#FFB800" />
                                    </svg>
                                </div>
                                <div class="user--review">

                                </div>
                            </div>
                        </div>

                        <div class="slider--peragraph">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                                laoreet</p>
                        </div>
                    </div>

                    <!-- slide 1 -->
                    <div class="slide sider--box ">

                        <div class="feature-slide-img">
                            <img src="images/usersimg.png" alt="slide image one">
                        </div>
                        <div class="user--box">
                            <div class="user--image">
                                <img src="images/userlogo.png" alt="slide image one">
                            </div>
                            <div class="user--name--box">
                                <div class="user--name">
                                    <h4>John Matthews</h4>
                                    <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.23617 0.515169L8.2405 3.4971C8.3435 3.80383 8.64022 4.01227 8.97499 4.01227H12.2253C12.9744 4.01227 13.2857 4.93677 12.6799 5.36122L10.0499 7.20481C9.7789 7.39489 9.66582 7.73078 9.76882 8.03858L10.7732 11.0205C11.0049 11.7074 10.1898 12.2787 9.58408 11.8543L6.95402 10.0107C6.68306 9.82061 6.31694 9.82061 6.04598 10.0107L3.41592 11.8543C2.81019 12.2787 1.99508 11.7074 2.22685 11.0205L3.23118 8.03858C3.33418 7.73186 3.2211 7.39489 2.95014 7.20481L0.320079 5.36122C-0.285653 4.93677 0.0256103 4.01227 0.774658 4.01227H4.02501C4.35979 4.01227 4.65649 3.80383 4.7595 3.4971L5.76383 0.515169C5.99671 -0.171723 7.0044 -0.171723 7.23617 0.515169Z"
                                        fill="#FFB800" />
                                    </svg>
                                </div>
                                <div class="user--review">

                                </div>
                            </div>
                        </div>

                        <div class="slider--peragraph">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                                laoreet</p>
                        </div>
                    </div>

                    <!-- slide 1 -->
                    <div class="slide sider--box ">

                        <div class="feature-slide-img">
                            <img src="images/usersimg.png" alt="slide image one">
                        </div>
                        <div class="user--box">
                            <div class="user--image">
                                <img src="images/userlogo.png" alt="slide image one">
                            </div>
                            <div class="user--name--box">
                                <div class="user--name">
                                    <h4>John Matthews</h4>
                                    <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.23617 0.515169L8.2405 3.4971C8.3435 3.80383 8.64022 4.01227 8.97499 4.01227H12.2253C12.9744 4.01227 13.2857 4.93677 12.6799 5.36122L10.0499 7.20481C9.7789 7.39489 9.66582 7.73078 9.76882 8.03858L10.7732 11.0205C11.0049 11.7074 10.1898 12.2787 9.58408 11.8543L6.95402 10.0107C6.68306 9.82061 6.31694 9.82061 6.04598 10.0107L3.41592 11.8543C2.81019 12.2787 1.99508 11.7074 2.22685 11.0205L3.23118 8.03858C3.33418 7.73186 3.2211 7.39489 2.95014 7.20481L0.320079 5.36122C-0.285653 4.93677 0.0256103 4.01227 0.774658 4.01227H4.02501C4.35979 4.01227 4.65649 3.80383 4.7595 3.4971L5.76383 0.515169C5.99671 -0.171723 7.0044 -0.171723 7.23617 0.515169Z"
                                        fill="#FFB800" />
                                    </svg>
                                </div>
                                <div class="user--review">

                                </div>
                            </div>
                        </div>

                        <div class="slider--peragraph">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                                laoreet</p>
                        </div>
                    </div>

                    <!-- slide 1 -->
                    <div class="slide sider--box ">

                        <div class="feature-slide-img">
                            <img src="images/usersimg.png" alt="slide image one">
                        </div>
                        <div class="user--box">
                            <div class="user--image">
                                <img src="images/userlogo.png" alt="slide image one">
                            </div>
                            <div class="user--name--box">
                                <div class="user--name">
                                    <h4>John Matthews</h4>
                                    <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.23617 0.515169L8.2405 3.4971C8.3435 3.80383 8.64022 4.01227 8.97499 4.01227H12.2253C12.9744 4.01227 13.2857 4.93677 12.6799 5.36122L10.0499 7.20481C9.7789 7.39489 9.66582 7.73078 9.76882 8.03858L10.7732 11.0205C11.0049 11.7074 10.1898 12.2787 9.58408 11.8543L6.95402 10.0107C6.68306 9.82061 6.31694 9.82061 6.04598 10.0107L3.41592 11.8543C2.81019 12.2787 1.99508 11.7074 2.22685 11.0205L3.23118 8.03858C3.33418 7.73186 3.2211 7.39489 2.95014 7.20481L0.320079 5.36122C-0.285653 4.93677 0.0256103 4.01227 0.774658 4.01227H4.02501C4.35979 4.01227 4.65649 3.80383 4.7595 3.4971L5.76383 0.515169C5.99671 -0.171723 7.0044 -0.171723 7.23617 0.515169Z"
                                        fill="#FFB800" />
                                    </svg>
                                </div>
                                <div class="user--review">

                                </div>
                            </div>
                        </div>

                        <div class="slider--peragraph">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                                laoreet</p>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <!-- People love For Cowwings  section end -->


    <!-- counter section start -->
    <section class="counter--section" style="background-image: url('images/counterback.png');">
        <div class="custtom-contaner pt-80 pb-80">
            <div class="counet-box-wraper">
                <div class="counte-box">
                    <div class="counter-number">20</div>
                    <div class="counter-text">
                        <h3>Lorem ipsum</h3>
                        <p>Lorem ipsum dolor</p>
                    </div>
                </div>
                <div class="counte-box">
                    <div class="counter-number">45</div>
                    <div class="counter-text">
                        <h3>Lorem ipsum</h3>
                        <p>Lorem ipsum dolor</p>
                    </div>
                </div>
                <div class="counte-box">
                    <div class="counter-number">26</div>
                    <div class="counter-text">
                        <h3>Lorem ipsum</h3>
                        <p>Lorem ipsum dolor</p>
                    </div>
                </div>
                <div class="counte-box">
                    <div class="counter-number">55</div>
                    <div class="counter-text">
                        <h3>Lorem ipsum</h3>
                        <p>Lorem ipsum dolor</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="counter--section--mask"> <img src="images/hungrymas001k.png" alt=""></div>
    </section>
    <!-- counter section start -->


    <!-- Hungry For More start -->
    <section>
        <div class="hungry--section">
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

>
</body>

</html>