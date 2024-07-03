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
    <section class="hero--section about--hero--section" style="background-image: url('images/productbaner.png')">
        <div class="banner--txt">
            <!-- <h2>Products</h2> -->
        </div>
    </section>
    <!-- hero slider section end -->


    <!-- Featured Products section start -->

    <section class="feature--pro--sec singin--section  pb--100 pt--100">
        <div class="custtom-contaner">
            <!-- <div class="Featured-heading---box ">
           
            </div> -->


            <div class="form--box">
              <div class="form--heading--box">
                <h2 class="heading--h2">Reset Password</h2>
</div>
                <form action="">
                <div class="name-box singin">
                  <label for=""><i class="fa fa-key" aria-hidden="true"></i><span>Password <sup class="mandatory--field">*</sup></span></label>
                    <input class="input-box outerlinenone" type="Password">
                  </div>
                  <div class="name-box singin">
                  <label for=""><i class="fa fa-key" aria-hidden="true"></i><span>Confirm Password <sup class="mandatory--field">*</sup></span></label>
                    <input class="input-box outerlinenone" type="Password">
                  </div>
          
                  <input class="form--submit--btn f-Inter transiction outerlinenone" type="submit" value="Reset Password">
              
                </form>
              </div>
<!-- 

              <div class="form--box">
                <form action="">
            
                  <input class="form--submit--btn f-Inter transiction outerlinenone" type="submit" value="Submit">
                </form>
              </div> -->
          </div>
    </section>

    <!-- Featured Products section end -->
    <!-- footer start -->

    <?php include 'includes/footer.php';?>
    <!-- footer end -->


</body>

</html>