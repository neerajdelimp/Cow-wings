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
    <!-- header section start --> <?php include 'includes/product_header.php';?>
    <!-- header section end -->
    <div class="progress--bar">
      <img src="images/cheqoutprogress.png" alt="">
    </div>
    <!-- Choose your box size start -->
    <section class="cowwings-section pt--100 pb--100">
      <div class="custtom-contaner">
        <div class="get--tuch--box checkout--section">
          <div class="shipping--address">
            <div class="Featured-heading---box">
              <h2 class="heading--h2">Make The Payment Done</h2>
              <p>Your order ships in 1-3 days</p>
            </div>
            <div class="pb-30">
              <h3>Shipping Address</h3>
            </div>
            <div class="form--box">
              <form action="">
                <div class="name-box">
                  <select class="input-box outerlinenone" id="country" required="">
                    <option value="">Country/region</option>
                    <option>United States</option>
                  </select>
                </div>
                <div class="name-box">
                  <input class="input-box outerlinenone" type="tel" placeholder="First Name">
                  <input class="input-box outerlinenone" type="Email" placeholder="Last Name">
                </div>
                <div class="name-box">
                  <input class="input-box outerlinenone" type="text" placeholder="Address">
                </div>
                <div class="name-box">
                  <input class="input-box outerlinenone" type="text" placeholder="Apartment">
                </div>
                <div class="name-box">
                  <select class="input-box outerlinenone" id="country" required="">
                    <option value="">City</option>
                    <option>United States</option>
                  </select>
                  <select class="input-box outerlinenone" id="country" required="">
                    <option value="">State</option>
                    <option>United States</option>
                  </select>
                  <input class="input-box outerlinenone" type="text" placeholder="Zip Code">
                </div>
                <div class="name-box">
                  <input class="input-box outerlinenone" type="text" placeholder="Phone">
                </div>
                <input class="form--submit--btn f-Inter transiction outerlinenone" type="submit" value="Continue To Shipping">
              </form>
            </div>
          </div>
          <div class="selected--boxes">
        <div class="section">
            <h3 class="pb-30">Your Selected Boxes</h3>
            <div class="item">
                <img src="images/chck--01.png" alt="Sirloin Tips">
                <div class="details">
                    <h3 class="font-18"><b>Sirloin Tips</b></h3>
                    <p>2 lbs (6 x 5.3 oz patties)</p>
                    <p>Qty: 2</p>
                </div>
            </div>
            <div class="item">
                <img src="images/chck--01.png" alt="Sirloin Tips">
                <div class="details">
                    <h3 class="font-18"><b>Sirloin Tips</b></h3>
                    <p>2 lbs (6 x 5.3 oz patties)</p>
                    <p>Qty: 1</p>
                </div>
            </div>
            <div class="item">
                <img src="images/chck--01.png" alt="Sirloin Tips">
                <div class="details">
                    <h3 class="font-18"><b>Sirloin Tips</b></h3>
                    <p class="font-14">2 lbs (6 x 5.3 oz patties)</p>
                    <p>Qty: 2</p>
                </div>
            </div>
            <div class="item">
                <img src="images/chck--01.png" alt="Sirloin Tips">
                <div class="details">
                    <h3 class="font-18"><b>Sirloin Tips</b></h3>
                    <p>2 lbs (6 x 5.3 oz patties)</p>
                    <p>Qty: 1</p>
                </div>
            </div>
            <div class="strip--line"></div>
        </div>

        <div class="section">
        <h3 class="pb-30">Free Box</h3>
            <div class="item">
                <img src="images/chck--01.png" alt="Sirloin Tips">
                <div class="details">
                    <h3 class="font-18"><b>Sirloin Tips</b></h3>
                    <p>2 lbs (6 x 5.3 oz patties)</p>
                    <p>Qty: 1</p>
                </div>
            </div>
            <div class="strip--line"></div>
        </div>

        <div class="section">
        <h3 class="pb-30">Addons</h3>
            <div class="item">
                <img src="images/chck--01.png" alt="Sirloin Tips">
                <div class="details">
                    <h3 class="font-18">Sirloin Tips</h3>
                    <p>2 lbs (6 x 5.3 oz patties)</p>
                    <p>Qty: 1</p>
                </div>
                <p class="price">$10.50</p>
            </div>
            <div class="item">
                <img src="images/chck--01.png" alt="Sirloin Tips">
                <div class="details">
                    <h3 class="font-18">Sirloin Tips</h3>
                    <p>2 lbs (6 x 5.3 oz patties)</p>
                    <p>Qty: 1</p>
                </div>
                <p class="price">$10.50</p>
            </div>
        </div>

        <div class="summary">
        <div class="item">
  <div class="details">
    <p class="font-18">Subtotal</p>
  </div>
  <p class="font-18 price">$160.00</p>
</div>

<div class="item">
  <div class="details">
    <p class="font-18">Shipping Charges</p>
  </div>
  <p class="font-18 price">Free</p>
</div>
        </div>
        <div class="summary">
        <div class="item">
  <div class="details">
    <p class="font-18">Total</p>
  </div>
  <p class="font-18 price">$160.00</p>
</div>
        </div>
    </div>
        </div>
      </div>
    </section>  
      <!-- Choose your box size end -->
      <!-- footer start --> <?php include 'includes/footer.php';?>
      <!-- footer end -->
  </body>
</html>