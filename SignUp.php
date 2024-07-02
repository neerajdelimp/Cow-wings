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
                <h2 class="heading--h2">Sign Up</h2>
                <form action="">
                <div class="name-box">
                    <input class="input-box outerlinenone" type="tel" placeholder="First Name">
                    <input class="input-box outerlinenone" type="Email" placeholder="Last Name">
                  </div>
              
                  <div class="name-box">
                    <input class="input-box outerlinenone" type="Email" placeholder="Email">
                  </div>
                  <div class="name-box">
                    <input class="input-box outerlinenone" type="text" placeholder="Phone">
                  </div>
                  <div class="name-box">
                    <input class="input-box outerlinenone" type="text" placeholder="Address">
                  </div>
                  <!-- <div class="name-box">
                    <input class="input-box outerlinenone" type="Email" placeholder="Email">
                  </div> -->
    
                  <!-- <div class="name-box">
                    <input class="input-box outerlinenone" type="Password" placeholder="password">
                  </div> -->
                  <!-- <div class="name-box forget--box">
                  <p><a href="#">Forgot password?</a></p>
                  </div> -->
                
                  <input class="form--submit--btn f-Inter transiction outerlinenone" type="submit" value="Signup">
                  <div class="name-box singin--box">
                    <p><span>Already have an account?</span><a href="Signin.php">Login</a></p>
                
                    </div>
                </form>
              </div>
          </div>
    </section>

    <!-- Featured Products section end -->
    <!-- footer start -->

    <?php include 'includes/footer.php';?>
    <!-- footer end -->


</body>

</html>