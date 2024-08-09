<?php
include 'db_connection.php';

$product_nameErr = $junk_typeErr = $descriptionErr = $weightErr = $image_pathErr = "";
$user_id = $product_name = $junk_type = $description = $weight = $image_path = "";

if (!empty($_SESSION["user_id"])) {
  $user_id = $_SESSION["user_id"];
  $result = mysqli_query($conn, "SELECT * FROM user WHERE user_id = $user_id");
  $row = mysqli_fetch_assoc($result);
}
if (isset($_POST["submit"])) {

  $product_name = $_POST["product_name"];
  $junk_type = $_POST["junk_type"];
  $description = $_POST["description"];
  $weight = $_POST['weight'];
  $image_path = $_POST['image_path'];

  if ($user_id && $product_name && $junk_type && $description && $weight && $image_path) {

    $query = mysqli_query($conn, "INSERT INTO transaction (user_id,product_name,type_of_junk, description,estimated_weight, img_path,date_of_pickup)VALUES('$user_id','$product_name', '$junk_type', '$description','$weight', '$image_path', DATE_ADD(CURDATE(), INTERVAL 3 DAY))");
    echo 
    "
  <script> alert('Data Saved Successfully'); </script>
  "; echo $_POST = array();
  } else {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      if (empty($_POST["product_name"])) {
        $product_nameErr = "Product name is required";
      } else {
        $product_name = $_POST["product_name"];
      }
    }

    if (empty($_POST["junk_type"])) {
      $junk_typeErr = "Type of junk is required";
    } else {
      $junk_type = $_POST["junk_type"];
    }

    if (empty($_POST["description"])) {
      $descriptionErr = "Description is required";
    } else {
      $description = $_POST["description"];
    }

    if (empty($_POST["weight"])) {
      $weightErr = "Weight is required";
    } else {
      $weight = $_POST["weight"];
    }

    if (empty($_POST["image_path"])) {
      $image_pathErr = "Image is required";
    } else {
      $image_path = $_POST["image_path"];
    }
  }
}

?>

<style>
  .error {
    color: red;
  }
</style>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JunKonnect</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="icon" href="images/home/#" type="image/png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<!-- BODY -->

<body>

  <!-- NAVIGATION BAR -->
  <nav>
    <!-- NAVBAR TOP -->
    <section class="nav-top">

      <div class="logo-box">
        <div class="img-bg" onclick="location.href='index.html';"><img src="images/home/nav-junkonnect.png" alt="Online Junkshop Logo"></div>
      </div>

      <div class="web-elem">

        <div class="socmed-button">
          <i href="#" class="fa fa-facebook"></i>
          <i href="#" class="fa fa-instagram"></i>
          <i href="#" class="fa fa-twitter"></i>
        </div>

        <div class="login-signup">
          <button class="nav-button" onclick="location.href='signin.html'">Log In</button>
          <button class="nav-button" onclick="location.href='signup.html'">Sign Up</button>
        </div>

      </div>

      <div class="hamburger" id="hamburger-nav" onclick="openMobileNav()">
        <hr>
        <hr>
        <hr>
      </div>

    </section>


    <!-- NAVBAR BOTTOM -->
    <section class="nav-bot">
      <ul>
        <li>
          <img src="images/home/nav-sell.png" alt="News Logo">
          <a href="sell.html">Sell a Product</a>
        </li>
        <li>
          <img src="images/home/nav-news.png" alt="News Logo">
          <a href="news.html">News</a>
        </li>
        <li>
          <img src="images/home/nav-info.png" alt="Information Logo">
          <a href="faq.html">FAQ</a>
        </li>
        <li>
          <img src="images/home/nav-about.png" alt="About Logo">
          <a href="about.html">About Us</a>
        </li>
        <li>
          <img src="images/home/nav-contact.png" alt="Contact Logo">
          <a href="contact.html">Contact</a>
        </li>
      </ul>
    </section>

    <section class="mobile-nav" id="mobile-nav">

      <ul class="top">
        <li>
          <a href="signin.html">Log In</a>
        </li>
        <li>
          <a href="signup.html">Sign Up</a>
        </li>
      </ul>

      <ul class="bot">
        <li>
          <img src="images/home/nav-sell.png" alt="News Logo">
          <a href="sell.html">Sell a Product</a>
        </li>
        <li>
          <img src="images/home/nav-news.png" alt="News Logo">
          <a href="news.html">News</a>
        </li>
        <li>
          <img src="images/home/nav-info.png" alt="Information Logo">
          <a href="faq.html">FAQ</a>
        </li>
        <li>
          <img src="images/home/nav-about.png" alt="About Logo">
          <a href="about.html">About Us</a>
        </li>
        <li>
          <img src="images/home/nav-contact.png" alt="Contact Logo">
          <a href="contact.html">Contact</a>
        </li>
      </ul>
    </section>

    <script>
      function openMobileNav() {
        var hamburger = document.getElementById("hamburger-nav");
        var mobileNav = document.getElementById("mobile-nav");

        if (window.getComputedStyle(mobileNav).visibility === "hidden") {
          mobileNav.style.visibility = 'visible';
          mobileNav.style.width = '50%';
          mobileNav.style.height = '100vh'
        } else {
          mobileNav.style.visibility = 'hidden';
          mobileNav.style.width = '0';
          mobileNav.style.height = '0'
        }

      }
    </script>
  </nav>


  <!-- SELL PAGE -->
  <div class="sell-page">

    <!-- DON'T THROW SECTION -->
    <section class="dont-throw-section">
      <div class="dont-throw-box">

        <div class="dont-throw-text">
          <h1>DON'T THROW IT OUT</h1>
          <h3>earn from your junk with us!</h3>

        </div>
      </div>
    </section>

    <!-- CLUTTER SECTION -->
    <section class="clutter-section">

      <div class="clutter-container">
        <h1>Cash for Clutter Form</h1>

        <div class="clutter-box">


          <div class="clutter-seller">

            <div class="seller-heading">
              <h2>Seller's Information </h2>
            </div>

            <hr>

            <div class="seller-info-container">
              <ul class="seller-label">
                <li>Name:</li>
                <li>Contact No: </li>
                <li>Address: </li>
              </ul>

              <ul class="seller-detail">
                <li><?php echo $row["first_name"] . "  " . $row["last_name"]; ?></li>
                <li><?php echo $row["phone"]; ?></li>
                <li><?php echo $row["address"]; ?></li>
              </ul>
            </div>

          </div>

          <div class="clutter-product">

            <h2>Product Description</h2>

            <hr>

            <div class="product-content">


              <form class="" action="" method="post" autocomplete="off" id="product-form">

                <label for="" id="name-label">PRODUCT NAME
                  <input type="text" value="<?php echo $_POST['name'] ?? ''; ?>" name="product_name" placeholder="Enter your product" required>
                  </input>
                  <span class="error"><?php echo $product_nameErr; ?></span>
                </label>

                <label for="" id="type-label">TYPE OF JUNK
                  <select name="junk_type" value="<?php echo $_POST['junk_type'] ?? ''; ?>">
                    <option name="" value="" class="option-label"> --Select-- </option>
                    <option value="Paper" class="option-label">Paper</option>
                    <option value="Plastic" class="option-label">Plastic</option>
                    <option value="Metal" class="option-label">Metal</option>
                    <option value="Electronic Waste" class="option-label">Electronic Waste</option>
                    <option value="Glass" class="option-label">Glass</option>
                  </select>
                  <span class="error"><?php echo $junk_typeErr; ?></span>
                </label>

                <label for="" id="description-label">DESCRIPTION</label>
                <input type="text" value="<?php echo $_POST['description'] ?? ''; ?>" name="description" placeholder="Type Here">
                </input>
                <span class="error"><?php echo $descriptionErr; ?></span>

                <label for="" id="weight-label">ESTIMATED WEIGHT (KG)
                  <input type="number" value="<?php echo $_POST['weight'] ?? ''; ?>" name="weight" min="0" max="50" placeholder="0" required>
                  </input>
                  <span class="error"><?php echo $weightErr; ?></span>
                </label>

                <label for="" id="image-label">PRODUCT IMAGE:
                  <input type="file" value="<?php echo $_POST['image_path'] ?? ''; ?>" name="image_path"></input>
                  <span class="error"><?php echo $image_pathErr; ?></span>
                  <!-- <input type="submit" value="Submit"> -->
                </label>

                <div class="clutter-submit">
                  <button type="submit" name="submit" class="submit-button">Submit</button>
                </div>
                <a href="logout.php">Logout</a>
              </form>

            </div>

          </div>

          <hr>

        </div>

      </div>

    </section>

    <!-- FOOTER -->
    <footer>

      <div class="footer-container">

        <div class="footer-left">
          <div class="img-container">
            <img src="images/home/nav-junkonnect.png" alt="Online Junkshop Logo">
          </div>
          <h5>Turn your Trash into Cash</h5>
        </div>

        <div class="footer-vertical-line"></div>

        <div class="footer-right">

          <div class="footer-contact">
            <h3>CONTACT</h3>
            <div class="footer-contact-container">
              <div class="contact-details">
                <img src="images/home/location-logo.png" alt="Location Logo">
                <p id="paragraph-footer">
                  General Tinio Street, Sto.<br>Nino Gapan Nueva Ecija
                </p>
              </div>

              <div class="contact-details">
                <img src="images/home/phone-logo.png" alt="Phone Logo">
                <p id="paragraph-footer">
                  (044) 486-0527
                </p>
              </div>
            </div>

            <div class="contact-details">
              <img src="images/home/email-logo.png" alt="Email Logo">
              <p id="paragraph-footer">
                namengwebsite@gmail.com
              </p>
            </div>
          </div>

          <div class="footer-about">
            <h3>ABOUT</h3>

            <div class="footer-about-container">
              <ul>
                <a href="index.html#story-section">
                  <li>Our Story</li>
                </a>
                <a href="about.html">
                  <li>About Us</li>
                </a>
                <a href="contact.html">
                  <li>Contact Us</li>
                </a>
              </ul>
            </div>
          </div>

          <div class="footer-follow">
            <h3>FOLLOW US</h3>
            <i href="#" class="fa fa-facebook"></i>
            <i href="#" class="fa fa-instagram"></i>
            <i href="#" class="fa fa-twitter"></i>
          </div>

        </div>

      </div>

      <div class="footer-disclaimer">
        <h5>Copyright © 2023 | JunKonnect | All rights reserved</h5>
      </div>

    </footer>



  </div>
</body>

</html>