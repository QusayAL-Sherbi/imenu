<?php
  
  require_once('./includes/functions/db-conn.php');

  $user_name = $_POST['username'];
  $user_email = $_POST['email'];
  $user_password = $_POST['password'];

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "INSERT INTO users (user_name, user_email, user_password)
  VALUES ('$user_name', '$user_email', '$user_password')";

  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>iMenu</title>
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
    <!-- Start Landing Page -->
    <div class="landing-page">
      <div class="overlay"></div>
      <div class="container">
        <div class="header-aria">
          <div class="logo">
            <h2>iMenu</h2>
          </div>
          <div class="links-container">
            <ul class="links">
              <li><a href="#" class="active">Home</a></li>
              <li><a href="#" data-section=".about-us">About US</a></li>
              <li><a href="#" data-section=".features">Features</a></li>
              <li><a href="#" data-section=".works">Works</a></li>
              <li><a href="#" data-section=".testimonials">Testimonials</a></li>
              <li><a href="#" data-section=".login">Login</a></li>
              <li><a href="#">Login/Register</a></li>
            </ul>
            <button class="toggle-menu">
              <span></span>
              <span></span>
              <span></span>
            </button>
          </div>
        </div>
      </div>
      <div class="introduction-text">
        <h1><span>iMenu</span></h1>
        <p>Build Your Own Menu For Your Resturant's</p>
      </div>
    </div>
    <!-- End Landing Page -->

    <!-- Start About -->
    <div class="container">
      <section class="about-us">
        <div class="info-box">
          <h2 class="text-center">About US</h2>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur error doloribus explicabo obcaecati culpa.</p>
        </div>
        <div class="image-box">
          <img src={require('../../images/about-us-image.svg')} alt="" />
        </div>
      </section>
    </div>
    <!-- End About -->

    <!-- Start Features Section -->
    <section class="features">
      <h2>Features</h2>
      <div class="container">
        <div class="feat-box">
          <img src={require('../../images/programming.svg')} alt="" />
          <h4>Easy To Create</h4>
          <p>We Are Creative, We Are Creative, We Are Creative, We Are Creative, We Are Creative, We Are Creative</p>
        </div>
        <div class="feat-box">
          <img src="./images/advertising.svg" alt="" />
          <h4>Avaliable 24/7</h4>
          <p>We Are Creative, We Are Creative, We Are Creative, We Are Creative, We Are Creative, We Are Creative</p>
        </div>
        <div class="feat-box">
          <img src="./images/hosting-icon.svg" alt="" />
          <h4>Modern Designs</h4>
          <p>We Are Creative, We Are Creative, We Are Creative, We Are Creative, We Are Creative, We Are Creative</p>
        </div>
        <div class="clear-fix"></div>
      </div>
    </section>
    <!-- End Features Section -->

    <!-- Start Works Section -->
    <section class="works">
      <div class="container">
        <h2>Works</h2>
        <div class="images-box">
          <img src='https://www.fivesquid.com/pics/t2/1617381368-167764-1-1.jpg' alt="Image One" />
          <img src='https://www.paperpapers.com/news/wp-content/uploads/2018/06/0057dd698f5fcc2.jpg' alt="Image Two" />
          <img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQChOizx88WxMY-TJoL7iXtszqUcqfMoXFAy1kQzNU7zhcl6eXhvjJ1P1LFj7AbXB0qsY&usqp=CAU' alt="Image Three" />
          <img src='https://cdn1.vectorstock.com/i/1000x1000/67/95/breakfast-menu-template-for-restaurant-and-cafe-vector-30246795.jpg' alt="Image Four" />
          <img src='https://mir-s3-cdn-cf.behance.net/project_modules/disp/74b70617145469.562b65721a67f.jpg' alt="Image Five" />
          <img src='https://gfx4arab.com/wp-content/uploads/2020/11/Modern-restaurant-menu-for-burgers-Free-Vector.jpg' alt="Image Six" />
          <img src='https://thumbs.dreamstime.com/z/yellow-restaurant-menu-template-186710349.jpg' alt="Image Seven" />
          <img src='https://miro.medium.com/max/1200/1*qrn5wA1So5pkGmsLOHWSUQ.jpeg' alt="Image eight" />
          <img src='https://st2.depositphotos.com/4312111/7268/v/950/depositphotos_72689107-stock-illustration-vintage-and-art-restaurant-menu.jpg' alt="Image Nine" />
          <img src='https://image.shutterstock.com/image-vector/menu-restaurant-hipster-style-600w-263631041.jpg' alt="Image Ten" />
        </div>
      </div>
    </section>
    <!-- End Works Section -->

    <!-- Start Testimonials Section -->
    <section class="testimonials">
      <div class="container">
        <h2 class="">Testimonials</h2>
        <div class="ts-box">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat ut quaerat ad labore, ullam sequi tempore autem provident a nam! Fugiat expedita, odit praesentium perspiciatis possimus commodi natus nam et.</p>
          <div class="person-info">
            <img src="http://placehold.it/80/DDD" alt="" />
            <h4>Thaer AbuShawar</h4>
            <p>CEO At Company</p>
          </div>
        </div>
        <div class="ts-box">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat ut quaerat ad labore, ullam sequi tempore autem provident a nam! Fugiat expedita, odit praesentium perspiciatis possimus commodi natus nam et.</p>
          <div class="person-info">
            <img src="http://placehold.it/80/EEE" alt="" />
            <h4>Rafat Al-Kadash</h4>
            <p>CEO At Company</p>
          </div>
        </div>
        <div class="ts-box">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat ut quaerat ad labore, ullam sequi tempore autem provident a nam! Fugiat expedita, odit praesentium perspiciatis possimus commodi natus nam et.</p>
          <div class="person-info">
            <img src="http://placehold.it/80/AAA" alt="" />
            <h4>Hani Wael</h4>
            <p>CEO At Company</p>
          </div>
        </div>
      </div>
      <div class="clear-fix"></div>
    </section>
    <!-- End Testimonials Section -->

    <!-- Start Contact Section -->
    <section class="contact-us">
      <div class="overlay"></div>
      <h2 class="section-title">Contact US</h2>
      <form>
        <div class="left">
          <input type="text" name="username" id="" placeholder="Your Name" />
          <input type="email" name="email" id="" placeholder="Your Email" />
          <input
            type="number"
            name="phonenumber"
            id=""
            placeholder="Phone Number"
          />
          <input type="text" name="subject" id="" placeholder="Subject" />
        </div>
        <div class="right">
          <div class="right">
            <textarea name="message" placeholder="Type Your Message"></textarea>
            <input type="submit" value="Send" />
          </div>
        </div>
      </form>
    </section>
    <!-- End Contact Section -->

    <!-- Start Login Section -->
    <div class="contact-us">
      <h2 class="section-title">Login</h2>  
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="left">
          <input type="email" name="useremail"
            id="" placeholder="Your Email" 
            autocomplete="off" />

          <input
            type="password" name="userpasswrod"
            id="" placeholder="Password"
            autocomplete="new-password"
          />
          <button type="submit" class="btn">Login</button>
        </div>
      </form>
    </div>
    <!-- End Login Section -->

    <!-- Start Register Section -->
    <div class="contact-us">
      <h2 class="section-title">Register</h2>  
      <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <div class="left">
          <input type="text" name="username" id="" placeholder="Your Name" />
          <input type="email" name="email" id="" placeholder="Your Email" />
          <input
            type="password"
            name="password"
            id=""
            placeholder="Password"
          />
          <button class="btn">Register</button>
        </div>
      </form>
    </div>
    <!-- End Register Section -->

    <script src="js/script.js"></script>
  </body>
</html>
