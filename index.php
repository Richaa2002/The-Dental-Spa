<?php
$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number =  $_POST['number'];
    $date =  $_POST['date'];


    $insert = mysqli_query($conn, "INSERT INTO contact_form (name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

    if($insert){
        $message[] = 'appointment made successfully!';
    }
    else{
        $message[] = 'appointment failed';
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Dentist Website</title>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- stylesheet -->
    <link rel="stylesheet" href="style.css">

    <!-- bootstrap cdn link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <!-- header section start -->

    <header class="header fixed-top">
        <div class="container">
            <!-- <div class="row align-items-center justify-content-between"> -->
            <a href="#home" class="logo">The Dental <span>Spa.</span></a>

            <nav class="nav">
                <a href="#home">home</a>
                <a href="#about">about</a>
                <a href="#services">services</a>
                <a href="#reviews">reviews</a>
                <a href="#contact">contact</a>
            </nav>

            <a href="#contact" class="link-btn">Book appointment</a>

            <div id="menu-btn" class="fas fa-bars"></div>
            <!-- </div> -->
        </div>
    </header>
    <!-- header section end -->

    <!-- home section starts -->

    <section class="home" id="home">
        <div class="container">
            <div class="content">
                <h3>Let us brighten your smile</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem consequuntur quibusdam,
                    eligendi aspernatur animi officiis optio quas tenetur assumenda nisi! Dolorum corporis dicta commodi
                    modi porro laborum perferendis neque nemo?
                </p>
                <a href="#contact" class="link-btn">Book Appointment</a>
            </div>
        </div>
    </section>

    <!-- home section ends -->


    <!-- about section starts -->
    <section class="about" id="about">
        <div class="container" style="padding:20px 0;">
            <div class="row align-items-center">
                <div class=" col-md-6 image">
                    <img src="img/about_img.jpg" class="w-100 mb-5 mb-md-0" alt="">
                </div>
                <div class=" col-md-6 content">
                    <a href="#"><span>about us</span></a>
                    <h3>True Healthcare For Your Family</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Sapiente numquam placeat consectetur ex eligendi, odit rem enim
                        magni magnam. Atque officiis facilis earum consequatur ratione
                        molestias aperiam voluptatum harum consequuntur?
                    </p>
                    <a href="#contact" class="link-btn">Book appointment</a>

                </div>
            </div>
        </div>
    </section>

    <!-- about section ends -->

    <!--  services section start  -->
    <section class="services" id="services" style="padding:20px 0;">
        <h1 class="heading">Our services</h1>
        <div class="box-container container">
            <div class="box">
                <img src="img/ali.png" alt="">
                <h3>Alignment Specialist</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. fugiat, non?</p>
            </div>

            <div class="box">
                <img src="img/cosemetic.png" alt="">
                <h3>Cosmetic Dentistry</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. fugiat, non?</p>
            </div>

            <div class="box">
                <img src="img/oral.png" alt="">
                <h3>Oral Hygiene Experts</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. fugiat, non?</p>
            </div>
            <div class="box">
                <img src="img/root1.png" alt="">
                <h3>Root Canal Specialist</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. fugiat, non?</p>
            </div>

            <div class="box">
                <img src="img/live1.png" alt="">
                <h3>Live Dental Advisory</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. fugiat, non?</p>
            </div>

            <div class="box">
                <img src="img/cavity.png" alt="">
                <h3>Cavity Inspection</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. fugiat, non?</p>
            </div>
        </div>

    </section>

    <!--  services section ends  -->

    <!--  process section starts -->
    <section class="process" style="padding:20px 0;">
        <h1 class="heading">Work process</h1>
        <div class="box-container container">
            <div class="box">
                <img src="img/process.png" alt="">
                <h3>Cosmetic Dentistry</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic, officiis?</p>
            </div>

            <div class="box">
                <img src="img/process1.png" alt="">
                <h3>pediatric Dentistry</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic, officiis?</p>
            </div>

            <div class="box">
                <img src="img/process2.png" alt="">
                <h3>Dental Implants</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic, officiis?</p>
            </div>
        </div>
    </section>
    <!--  process section ends -->

    <!-- review section starts -->
    <section class="reviews" id="reviews" style="padding:20px 0;">
        <h1 class="heading">Satisfied Clients</h1>
        <div class="box-conainer container">
            <div class="box">
                <img src="img/review.png" alt="">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum dolore ducimus saepe ab
                    ullam veniam dicta inventore harum, nihil repellat.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Jack</h3>
                <span>Satisfied Clients</span>
            </div>

            <div class="box">
                <img src="img/review1.png" alt="">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum dolore ducimus saepe ab
                    ullam veniam dicta inventore harum, nihil repellat.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Reha</h3>
                <span>Satisfied Clients</span>
            </div>

            <div class="box">
                <img src="img/review2.png" alt="">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum dolore ducimus saepe ab
                    ullam veniam dicta inventore harum, nihil repellat.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Alex</h3>
                <span>Satisfied Clients</span>
            </div>
        </div>
    </section>
    <!-- review section ends -->

    <!-- contact section starts -->

    <section class="contact" id="contact" style="padding:20px 0;">
        <h1 class="heading">Book appointment</h1>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <?php 
       if(isset($message)){
         foreach($message as $message){
            echo '<p class ="message">'.$message. '</p>';
         }
       }
     ?>
            <span>Your name:</span>
            <input type="text" name="name" placeholder="enter your name" class="box" required>
            <span>Your email:</span>
            <input type="email" name="email" placeholder="enter your email" class="box" required>
            <span>Your number:</span>
            <input type="number" name="number" placeholder="enter your number" class="box" required>
            <span>appointment date:</span>
            <input type="datetime-local" name="date" class="box" required>
            <input type="submit" value="Book appointment" name="submit" class="link-btn">
        </form>
    </section>
    <!-- contact section ends -->

    <!-- footer setion starts -->
    <section class="footer">
        <div class="box-container container">

            <div class="box">
                <i class="fas fa-phone"></i>
                <h3>phone number</h3>
                <p>+123-555-8765</p>
                <p>+111-888-3333</p>
            </div>

            <div class="box">
                <i class="fas fa-map-marker-alt"></i>
                <h3>our address</h3>
                <p>jaipur,India - 302017</p>
            </div>

            <div class="box">
                <i class="fas fa-clock"></i>
                <h3>opening hours</h3>
                <p>00:07am to 10:00pm</p>
            </div>

            <div class="box">
                <i class="fas fa-envelope"></i>
                <h3>email address</h3>
                <p>richa123@gmail.com</p>
                <p>bulbul345@gmail.com</p>
            </div>
        </div>

        <div class="credit"> &copy; copyright @ <?php echo date('y');?> by<span> Richa kumari </span> </div>
    </section>
    <!-- footer section ends -->



    <!-- js link -->
    <script src="script.js"></script>
    <!-- js cdn link -->.
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>