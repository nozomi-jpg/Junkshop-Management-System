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
          <button class="nav-button" onclick="location.href='signup.php'">Sign Up</button>
        </div>

      </div>

      <div class="hamburger" id="hamburger-nav" onclick="openMobileNav()">
        <hr> <hr> <hr>
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

      function openMobileNav(){
        var hamburger = document.getElementById("hamburger-nav");
        var mobileNav = document.getElementById("mobile-nav");
        
        if(window.getComputedStyle(mobileNav).visibility === "hidden"){
          mobileNav.style.visibility = 'visible';
          mobileNav.style.width = '50%';
          mobileNav.style.height = '100vh'
        }
        else{
          mobileNav.style.visibility = 'hidden';
          mobileNav.style.width = '0';
          mobileNav.style.height = '0'
        }

      }

    </script>
  </nav>

  
  <div class="home">

    <section class="title-section">
        <div class="title-heading">
            <h1>JunKonnect</h1>
            <h3>Turn your Trash into Cash</h3>
        </div>

        <div class="title-button">
          <button class="titlebutton" onclick="location.href='sell.html';">GET STARTED</button>
        </div>
    </section>

    <section class="client-section">

      <div class="client-heading">
        <h2>Why Our Clients Love US!</h2>
        <hr>
      </div>

      <div class="client-card-row">
          <div class="client-card-container">
            <div class="img-bg">
              <svg width="95" height="95" viewBox="0 0 95 95" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="47.5" cy="47.5" r="46.875" fill="#23C686"/>
                <path d="M26.2475 26.9649C26.2684 27.0902 26.3658 27.7865 26.4633 28.5176C26.5608 29.2418 26.6583 29.9102 26.6792 29.9938L26.707 30.1539H46.8928H67.0716L67.2944 28.5664C67.4128 27.696 67.5103 26.9301 67.5103 26.8604C67.5103 26.749 66.4798 26.7421 46.858 26.7421H26.2057L26.2475 26.9649Z" fill="white"/>
                <path d="M26.9855 32.2917C26.9855 32.3474 27.0761 33.0159 28.0648 40.2156C28.3085 42.0121 28.7681 45.3334 29.0744 47.5964C29.6315 51.6767 30.2233 56.0147 30.8848 60.8261C31.0728 62.2048 31.3792 64.4191 31.5602 65.749L31.8875 68.1721H46.8789H61.8633L61.905 67.9423C61.9259 67.824 62.093 66.5776 62.288 65.178C62.476 63.7785 62.7893 61.4946 62.9773 60.095C63.1723 58.6955 63.5831 55.7014 63.8895 53.4453C64.1959 51.1824 64.6067 48.2022 64.7947 46.8096C65.6302 40.71 65.86 39.0458 66.2917 35.8985C66.5354 34.0603 66.7513 32.4867 66.7722 32.3962L66.7931 32.243H46.8928C35.94 32.243 26.9855 32.2639 26.9855 32.2917Z" fill="white"/>
              </svg> 
            </div>
            <h4>Declutter</h4>
            <p id="paragraph-client">
              Customers can clean their homes effectively while also being responsible for disposing of
              their waste and junk with us.
            </p>
          </div>

          <div class="client-card-container">
            <div class="img-bg">
              <svg width="95" height="95" viewBox="0 0 95 95" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="47.5" cy="47.5" r="46.875" fill="#23C686"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M71.7195 53.8712C71.5512 54.0379 71.3657 54.2047 71.1641 54.3714C70.1092 55.2942 68.9032 55.7387 67.5457 55.7054L63.17 55.6717L67.5457 55.7054C68.9032 55.7387 70.1092 55.2942 71.1641 54.3714C71.3661 54.2047 71.5512 54.0379 71.7195 53.8712L64.2471 65.6101C64.0566 65.8989 63.7759 66.1881 63.4057 66.4772C62.6541 67.0551 61.8348 67.3386 60.9485 67.3276L54.6543 67.2442L54.5701 72.0799L48.3937 61.4415L54.6038 50.0527L54.4695 55.6054L63.1704 55.6717L56.3712 43.9498L67.2768 37.7135L72.8137 47.3014C73.0268 47.7569 73.1783 48.2242 73.2681 48.7021C73.5711 50.2581 73.2681 51.6868 72.3593 52.9874C72.2133 53.2542 72.017 53.5267 71.7703 53.8045C71.7474 53.8265 71.7309 53.8492 71.7195 53.8712ZM36.6298 23.8069C37.819 22.7507 39.2104 22.2728 40.8035 22.3729L41.7797 22.5396L55.8997 22.6897L57.0946 22.9565C57.9808 23.29 58.6429 23.8345 59.0801 24.5906L62.2777 29.9765L66.5023 27.542L60.5106 38.2804L47.4509 38.9141L52.3315 36.1628L47.9221 28.7426L41.2744 40.5982L30.2342 34.5787L35.6533 24.9074C35.9341 24.5072 36.2595 24.1404 36.6298 23.8069ZM31.6314 55.2385H45.2465L45.2634 67.7278H34.6944C34.0774 67.7611 33.3928 67.6444 32.6412 67.3776C31.1491 66.8664 30.0605 65.8989 29.3762 64.4762C29.2191 64.2094 29.0844 63.9036 28.9723 63.5591C28.8939 63.3147 28.8266 63.0532 28.7704 62.7754C28.5011 61.4191 28.7142 60.1685 29.4099 59.0236L31.6314 55.2385L29.4099 59.024C28.7142 60.1689 28.5011 61.4195 28.7704 62.7758C28.8266 63.0536 28.8939 63.3147 28.9723 63.5595L22.3415 51.2036C22.1843 50.8921 22.0722 50.5086 22.0049 50.053C21.8703 49.1303 22.0328 48.2912 22.4929 47.5352L25.7074 42.1659L21.5 39.6814H33.9034L40.7699 50.6867L35.9734 47.802L31.6314 55.2385ZM41.7797 22.5396L42.5875 22.673C43.9002 23.1065 44.8931 23.9069 45.5663 25.0741L47.9225 28.7426L45.5663 25.0741C44.8931 23.9069 43.9002 23.1065 42.5875 22.673L41.7797 22.5396Z" fill="white"/>
              </svg>
            </div>
            <h4>Empower the 3Rs</h4>
            <p id="paragraph-client">
              The core of our website is that it strongly revolves around the concept of the 3Rs which 
              helps reduce the impact of people on our mother Earth.
            </p>
          </div>

          <div class="client-card-container">
            <div class="img-bg">
              <svg width="95" height="95" viewBox="0 0 95 95" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="47.5" cy="47.5" r="46.875" fill="#23C686"/>
                <rect x="27.822" y="27.5" width="48.2034" height="33.2881" rx="4" stroke="white" stroke-width="4"/>
                <rect x="16.5" y="32.2119" width="52.2034" height="37.2881" rx="6" fill="white"/>
                <path d="M42.3077 62.7269C41.8651 62.7269 41.4912 62.5708 41.1859 62.2586C40.8807 61.9465 40.7281 61.5563 40.7281 61.088V59.3555L41.4149 59.9877C40.3923 59.9408 39.5071 59.8082 38.7592 59.5897C38.0113 59.3712 37.4008 59.1526 36.9277 58.9341C36.5309 58.7468 36.2485 58.4815 36.0806 58.1381C35.928 57.7948 35.8669 57.4436 35.8975 57.0846C35.9433 56.7256 36.073 56.3978 36.2867 56.1013C36.5003 55.8047 36.7751 55.6096 37.1108 55.516C37.4619 55.4067 37.8663 55.4536 38.3242 55.6565C38.6295 55.8281 39.0873 56.0076 39.6978 56.1949C40.3236 56.3666 41.0944 56.4525 42.0101 56.4525C42.6512 56.4525 43.1548 56.39 43.5211 56.2652C43.9027 56.1403 44.1698 55.9764 44.3224 55.7735C44.4903 55.555 44.5742 55.3209 44.5742 55.0712C44.5742 54.837 44.5132 54.6419 44.3911 54.4859C44.2842 54.3142 44.1011 54.1659 43.8416 54.041C43.5822 53.9006 43.2235 53.7757 42.7656 53.6664L40.1786 53.1046C38.7592 52.7768 37.6984 52.2305 36.9964 51.4657C36.3096 50.6853 35.9661 49.6786 35.9661 48.4456C35.9661 47.5091 36.1875 46.6741 36.6301 45.9405C37.0879 45.1913 37.7213 44.5826 38.5303 44.1144C39.3544 43.6461 40.316 43.3496 41.4149 43.2247L40.7281 43.6227V42.0541C40.7281 41.5859 40.8807 41.1957 41.1859 40.8835C41.4912 40.5714 41.8651 40.4153 42.3077 40.4153C42.7656 40.4153 43.1472 40.5714 43.4524 40.8835C43.7577 41.1957 43.9103 41.5859 43.9103 42.0541V43.6227L43.2235 43.1779C43.8035 43.1935 44.4292 43.295 45.1008 43.4822C45.7724 43.6539 46.36 43.8959 46.8636 44.208C47.2147 44.3953 47.4589 44.6528 47.5962 44.9806C47.7489 45.3084 47.8023 45.644 47.7565 45.9873C47.726 46.3151 47.6039 46.6116 47.3902 46.877C47.1918 47.1423 46.917 47.3218 46.566 47.4155C46.2302 47.4935 45.8258 47.4311 45.3526 47.2282C45.0016 47.0721 44.6048 46.9472 44.1621 46.8536C43.7348 46.7443 43.1853 46.6897 42.5138 46.6897C41.7049 46.6897 41.0791 46.838 40.6365 47.1345C40.2091 47.4311 39.9955 47.8135 39.9955 48.2817C39.9955 48.5939 40.1176 48.8592 40.3618 49.0777C40.6212 49.2806 41.0867 49.4601 41.7583 49.6162L44.3682 50.2015C45.8181 50.5292 46.8865 51.0755 47.5733 51.8403C48.2754 52.5895 48.6265 53.565 48.6265 54.7668C48.6265 55.7033 48.4051 56.5305 47.9625 57.2485C47.5199 57.9664 46.9018 58.5517 46.1081 59.0044C45.3297 59.457 44.4216 59.7536 43.3838 59.894L43.9103 59.3321V61.088C43.9103 61.5563 43.7577 61.9465 43.4524 62.2586C43.1625 62.5708 42.7809 62.7269 42.3077 62.7269Z" fill="#23C686"/>
              </svg>               
            </div>
            <h4>Earn Money</h4>
            <p id="paragraph-client">
              Customers and Affiliated Junkshops can make money or profit for themselves just by 
              connecting with us as we connect them. 
            </p>
          </div>

        </div>

      <div class="client-footer">
        <h1>Let's turn your trash <br> into cash!</h1>
        <button class="client-button" onclick="location.href='sell.html';">Sell a Product</button>
      </div>

    </section>
   
    <section class="story-section" id="story-section">

      <div class="story-text">

          <h2>Our Story</h2>
          <hr>

          <p id="paragraph-story">
            JunKonnect is a simple story of a group of people wanting to help the community while also protecting our planet.  
          </p>

          <p id="paragraph-story">
            In early 2023, the developers were thinking of a way to serve the community while also serving our planet for the better. They thought of various ways to reach these goals and ultimately found an idea of an Online Junk Shop website.  
          </p>

          <p id="paragraph-story">
            With innovation and a deep understanding of teamwork, the group started working with junkshops and communities. 
            Not long after that, they were able to start the online junkshop website named JunKonnect which fits 
            the ideals of the group and not only serves the community but also the planet.
          </p>

          <p id="paragraph-story">
            With the help of junkshops and the community using the website, the website grew as they 
            reach goals that are committed to giving quality and trustworthy services that are sustainable.  
          </p>

          <p id="paragraph-story">
            Today, JunKonnect continues to serve, creating value out of scraps while making the planet 
            sustainable one junk at a time.
          </p>

          <div class="btn-container">
            <button class="read-more" onclick="location.href='about.html';">Read More</button>
          </div>


      </div>

      <div class="img-container">
        <img src="images/home/earth.png" alt="An image containing a globe.">
      </div>
      
    </section>

    <section class="recycle-section">


      <h2>Why Should We Recycle?</h2>
      <div class="line"><hr></div>
      


      <div class="recycle-container">

        <div class="recycle-left">

              <div class="recycle-card">
                <h4>Recycling conserves resources</h4>
                <img src="images/home/trees.png" alt="An image containing trees">
                <p id="paragraph-recycle">
                  When we recycle, materials are converted into new products, reducing the need to 
                  consume natural resources which will help to protect natural habitats for the future.
                </p>
              </div>

              <div class="recycle-card">
                <h4>Recycling protects the environment</h4>
                <img src="images/home/industial.png" alt="An image containing factories">
                <p id="paragraph-recycle">
                  Recycling reduces the need for extracting, refining and processing raw materials all of 
                  which create air and water pollution.
                </p>
              </div>

              <div class="recycle-card">
                <h4>Recycling saves energy</h4>
                <img src="images/home/industial2.png" alt="An image containing factories">
                <p id="paragraph-recycle">
                  Using recycled materials in the manufacturing process uses considerably less energy than 
                  that required for producing new products from raw materials.
                </p>
              </div>

              <div class="recycle-card">
                <h4>Recycling reduces landfill</h4>
                <img src="images/home/garbage.png" alt="An image containing junks">
                <p id="paragraph-recycle">
                  When we recycle, recyclable materials are reprocessed into new products, and as a 
                  result the amount of rubbish sent to landfill sites decreases which reduces emissions 
                  of methane, a powerful greenhouse gas.
                </p>
              </div>

        </div>

        <div class="recycle-right">
            <h4>Videos to Watch</h4>
            <iframe
            src="https://www.youtube.com/embed/xEFIcerI3HY">
            </iframe> 
            <iframe
            src="https://www.youtube.com/embed/G8MO_8Zfu3Q">
            </iframe> 
        </div>


      </div>

      <h5>
            To learn more about recycling and its benefits, visit https://www.brysonrecycling.org/
      </h5>

    </section>

    <section class="news-section">

        <div class="news-heading">
          <h2>Latest News</h2>
          <hr>
        </div>

        <div class="news-card-container">

          <div class="news-card">
            <img src="images/news/news-img-1.jpg" alt="An image containing junks.">
            <div class="news-info">
            <div class="news-date">
              <img src="images/home/date.png" alt="Calendar Logo.">
              <h5 id="news-heading-date">Jan 12, 2022</h5>
            </div>
            <a href="https://www.positivelyfilipino.com/magazine/cash-for-trash-bakal-bote-plastik-at-dyaryo" class="news-title" target="_blank">
              Cash For Trash: Bakal, Bote, Plastic At Dyaryo
            </a>
            <p id="paragraph-news">
              Garbage is definitely the smelliest challenge facing the planet. In one of the pioneering 
              analyses of plastics, the world’s scientists calculated that humanity has produced 
              8.3 billion metric tons of plastic, 75 percent ... 
            </p>
          </div>
          </div>

          <div class="news-card">
            <img src="images/news/news-img-2.jpg" alt="An image containing junks.">
            <div class="news-info">
            <div class="news-date">
              <img src="images/home/date.png" alt="Calendar Logo.">
              <h5 id="news-heading-date">Mar 17, 2022</h5>
            </div>
            <a href="https://sustainability.ph/solutions/intelligence/plastic-recycling-in-the-philippines" class="news-title" target="_blank">
              Plastic Recycling in the Philippines
            </a>
            <p id="paragraph-news">
              Filipinos consume a yearly average of 20kg of plastics, from which 15.43kg/cap/year becomes waste.
              The recycling rate of post-consumption plastic packaging among Filipinos is still relatively low. 
              Some of the major challenges ...
            </p>
          </div>
          </div>

          <div class="news-card">
            <img src="images/news/news-img-3.jpg" alt="An image containing junks.">
            <div class="news-info">
            <div class="news-date">
              <img src="images/home/date.png" alt="Calendar Logo.">
              <h5 id="news-heading-date">Feb 11, 2022</h5>
            </div>
            <a href="https://krishijagran.com/blog/most-profitable-recycling-business-ideas-for-huge-profits-in-2022-know-how-to-start-with-less-investment/" class="news-title" target="_blank">
              Most Profitable Recycling Business Ideas For Huge Profits In 2022; Know How To Start With Less Investment
            </a>
            <p id="paragraph-news">
              The amount of waste produced in various forms in today's modern society is increasing day 
              by day. The majority of us are aware of the negative consequences of not recycling ...
            </p>
          </div>
          </div>

          <div class="news-card">
            <img src="images/news/news-img-4.jpg" alt="An image containing junkshop.">
            <div class="news-info">
            <div class="news-date">
              <img src="images/home/date.png" alt="Calendar Logo.">
              <h5 id="news-heading-date">May 11, 2023</h5>
            </div>
            <a href="https://www.bria.com.ph/articles/a-junk-shop-and-scrap-business-at-home/" class="news-title" target="_blank">
              A Junk shop and Scrap Business at Home
            </a>
            <p id="paragraph-news">
              A junk shop and scrap business at home is pretty much a straightforward buy-and-sell 
              industry that few people give much thought to because the traded goods are dirty and 
              unpleasant. However, from a different ... 
            </p>
            </div>
          </div>

          <div class="news-card">
            <img src="images/news/news-img-5.jpg" alt="An image containing disposing garbage.">
            <div class="news-info">
            <div class="news-date">
              <img src="images/home/date.png" alt="Calendar Logo.">
              <h5 id="news-heading-date">Aug 7, 2019</h5>
            </div>
            <a href="https://www.earthday.org/the-recycling-problem-a-feel-good-story-thats-too-good-to-be-true/" class="news-title" target="_blank">
              The recycling problem: A feel-good story that’s too good to be true
            </a>
            <p id="paragraph-news">
              Recycling feels good. It seemingly gives us power to control our own habits for the 
              benefit of our planet. We can even call people out for not recycling (shame!), 
              reinforcing our own ...
            </p>
            </div>
          </div>

          <div class="news-card">
            <img src="images/news/news-img-6.png" alt="An image containing people.">
            <div class="news-info">
            <div class="news-date">
              <img src="images/home/date.png" alt="Calendar Logo.">
              <h5 id="news-heading-date">Jul 19, 2022</h5>
            </div>
            <a href="https://www.pna.gov.ph/articles/1179281" class="news-title" target="_blank">
              Trash can be cash in Manila recycling facility
            </a>
            <p id="paragraph-news">
              MANILA – The country’s capital city has partnered with the Department of Environment and 
              Natural Resources - Environmental Management Bureau - National Capital Region (DENR-EMB-NCR)
               to promote recycling and reduce environmental waste ...
            </p>
            </div>
          </div>
        </div>
      <div class="news-button">
        <button class="news-btn" onclick="location.href='news.html';">Read More</button>
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
                junkonnect@gmail.com
              </p>
            </div>
          </div>

          <div class="footer-about">
            <h3>ABOUT</h3>

            <div class="footer-about-container">
              <ul>
                <a href="index.html#story-section"><li>Our Story</li></a>
                <a href="about.html"><li>About Us</li></a>
                <a href="contact.html"><li>Contact Us</li></a>
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
        <h5>Copyright © 2023 JunKonnect. All rights reserved</h5>
      </div>

    </footer>



  </div>
</body>
</html>
