<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="styles.css" />
    <title>Web Design BK | furni.shop</title>
  </head>
  <body>
    <nav>
      <div class="nav__header">
        <div class="nav__logo">
          <a href="#" class="logo">furni.shop</a>
        </div>
        <div class="nav__menu__btn" id="menu-btn">
          <i class="ri-menu-line"></i>
        </div>
      </div>
      <ul class="nav__links" id="nav-links">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#product">Products</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
      <div class="nav__search" id="nav-search">
        <input type="text" placeholder="Search" />
        <span><i class="ri-search-2-line"></i></span>
      </div>
    </nav>

    <header class="section__container header__container" id="home">
      <div class="header__image">
        <img src="header.jpg" alt="header" />
      </div>
      <div class="header__content">
        <div>
          <h1>We Help You Make Modern Interior</h1>
          <p>
            We will help you to make an elegant and luxurious interior designed
            by professional interior designer.
          </p>
        </div>
      </div>
    </header>

    <section class="section__container deals__container">
      <div class="deals__card">
        <h2 class="section__header">Hot 🔥 deals for you</h2>
        <p>Online shopping for retail sales direct to consumers</p>
      </div>
      <div class="deals__card">
        <span><i class="ri-cash-line"></i></span>
        <h4>1.5% cashback</h4>
        <p>Earn a 5% cashback reward on every furniture purchase you make!</p>
      </div>
      <div class="deals__card">
        <span><i class="ri-calendar-schedule-line"></i></span>
        <h4>30 day terms</h4>
        <p>
          Take advantage of our 30-day payment terms, completely interest-free!
        </p>
      </div>
      <div class="deals__card">
        <span><i class="ri-money-rupee-circle-line"></i></span>
        <h4>Save money</h4>
        <p>
          Discover unbeatable prices and save big money on top-quality
          furniture!
        </p>
      </div>
    </section>

    <section class="section__container about__container" id="about">
      <div class="about__header">
        <div>
          <h2 class="section__header">About us</h2>
          <p class="section__description">
            Our passion for exceptional craftsmanship drives us to curate the
            best pieces for every room in your house.
          </p>
        </div>
        <button class="about__btn">Learn More</button>
      </div>
      <div class="about__content">
        <div class="about__image">
          <img src="about.png" alt="about" />
        </div>
        <div class="about__grid">
          <div class="about__card">
            <h3>1.</h3>
            <h4>Who we are</h4>
            <p>
              You get a 2-week free trail to kick the Smaert tries. We want you
              to.
            </p>
          </div>
          <div class="about__card">
            <h3>2.</h3>
            <h4>What do we do</h4>
            <p>
              We give you a free course that guides you through the process.
            </p>
          </div>
          <div class="about__card">
            <h3>3.</h3>
            <h4>How do we help</h4>
            <p>Use our multimedis lectures, videos, and coaching sessions.</p>
          </div>
          <div class="about__card">
            <h3>4.</h3>
            <h4>Create success story</h4>
            <p>
              With access to online learning resources anyone can transform.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="section__container product__container" id="product">
      <h2 class="section__header">Products</h2>
      <div class="product__grid">
        <div class="product__card">
          <h4>Stackable Chair</h4>
          <p>$87.00</p>
          <img src="product-1.png" alt="product" />
        </div>
        <div class="product__card">
          <h4>Lamp Tool</h4>
          <p>$35.00</p>
          <img src="product-2.png" alt="product" />
        </div>
        <div class="product__card">
          <h4>Dining Chair</h4>
          <p>$55.00</p>
          <img src="product-3.png" alt="product" />
        </div>
        <div class="product__card">
          <h4>Hand Base Lamp</h4>
          <p>$35.00</p>
          <img src="product-4.png" alt="product" />
        </div>
        <div class="product__card">
          <h4>Stylish Chair</h4>
          <p>$45.00</p>
          <img src="product-5.png" alt="product" />
        </div>
        <div class="product__card">
          <h4>Vintage Chair</h4>
          <p>$65.00</p>
          <img src="product-6.png" alt="product" />
        </div>
      </div>
    </section>

    <section class="section__container client__container">
      <div class="client__content">
        <h2 class="section__header">What our happy client say</h2>
        <p class="section__description">
          Testimonials Highlighting Our Commitment to Quality, Exceptional
          Service, and Customer Satisfaction
        </p>
        <!-- Slider main container -->
        <div class="swiper">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
              <div class="client__card">
                <img src="user-1.jpg" alt="user" />
                <div>
                  <p>
                    Furni.shop transformed my living space with their beautiful
                    and affordable furniture. The 5% cashback was a delightful
                    bonus!
                  </p>
                  <h4>David Miller</h4>
                  <h5>Real Estate Agent</h5>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="client__card">
                <img src="user-2.jpg" alt="user" />
                <div>
                  <p>
                    Exceptional quality and service! The furniture is stunning,
                    and the 30-day payment terms made it incredibly convenient.
                  </p>
                  <h4>Sarah Thompson</h4>
                  <h5>Interior Designer</h5>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="client__card">
                <img src="user-3.jpg" alt="user" />
                <div>
                  <p>
                    The 30-day terms made it easy for us to furnish our new home
                    without financial stress. Highly recommended!
                  </p>
                  <h4>Michael Lee</h4>
                  <h5>Entrepreneur</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer" id="contact">
      <div class="section__container footer__container">
        <div class="footer__col">
          <div class="footer__logo">
            <a href="#" class="logo">furni.shop</a>
          </div>
          <p>
            Join us in transforming your living spaces with furniture that
            blends elegance and practicality seamlessly.
          </p>
          <ul class="footer__socials">
            <li>
              <a href="#"><i class="ri-facebook-fill"></i></a>
            </li>
            <li>
              <a href="#"><i class="ri-twitter-fill"></i></a>
            </li>
            <li>
              <a href="#"><i class="ri-linkedin-fill"></i></a>
            </li>
            <li>
              <a href="#"><i class="ri-pinterest-fill"></i></a>
            </li>
          </ul>
        </div>
        <div class="footer__col">
          <h4>Services</h4>
          <ul class="footer__links">
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Press</a></li>
            <li><a href="#">Payrol</a></li>
            <li><a href="#">Library</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Help Center</a></li>
          </ul>
        </div>
        <div class="footer__col">
          <h4>Resources</h4>
          <ul class="footer__links">
            <li><a href="#">Pricing</a></li>
            <li><a href="#">FAQs</a></li>
            <li><a href="#">Contact Support</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms</a></li>
          </ul>
        </div>
        <div class="footer__col">
          <h4>Support</h4>
          <ul class="footer__links">
            <li><a href="#">Contact</a></li>
            <li><a href="#">Affiliates</a></li>
            <li><a href="#">Sitemap</a></li>
            <li><a href="#">Cancelation Policy</a></li>
            <li><a href="#">Security</a></li>
          </ul>
        </div>
      </div>
      <div class="footer__bar">
        Copyright © 2024 Web By BK. All rights reserved.
      </div>
    </footer>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="web.js"></script>
  </body>
</html>