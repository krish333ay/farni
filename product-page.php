<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="product.css" />
    <title>Product Page | furni.shop</title>
  </head>
  <body>
    <!-- Search Bar -->
    <section class="search__container">
  <input type="text" id="searchInput" placeholder="Search for products..." />
  <button id="searchBtn"><i class="ri-search-line"></i></button>
</section>

    <!-- Product List -->
    <section class="section__container product__container" id="product-list">
      <h2 class="section__header">Our Products</h2>
      <div class="product__grid" id="productGrid">
        <!-- Product Cards -->
        <div class="product__card" data-name="Stackable Chair">
          <h4>Stackable Chair</h4>
          <p>$87.00</p>
          <img src="product-1.png" alt="Stackable Chair" />
          <button class="buy__btn">Buy Now</button>
        </div>
        <div class="product__card" data-name="Lamp Tool">
          <h4>Lamp Tool</h4>
          <p>$35.00</p>
          <img src="product-2.png" alt="Lamp Tool" />
          <button class="buy__btn">Buy Now</button>
        </div>
        <div class="product__card" data-name="Dining Chair">
          <h4>Dining Chair</h4>
          <p>$55.00</p>
          <img src="product-3.png" alt="Dining Chair" />
          <button class="buy__btn">Buy Now</button>
        </div>
        <div class="product__card" data-name="Hand Base Lamp">
          <h4>Hand Base Lamp</h4>
          <p>$35.00</p>
          <img src="product-4.png" alt="Hand Base Lamp" />
          <button class="buy__btn">Buy Now</button>
        </div>
        <div class="product__card" data-name="Stylish Chair">
          <h4>Stylish Chair</h4>
          <p>$45.00</p>
          <img src="product-5.png" alt="Stylish Chair" />
          <button class="buy__btn">Buy Now</button>
        </div>
        <div class="product__card" data-name="Vintage Chair">
          <h4>Vintage Chair</h4>
          <p>$65.00</p>
          <img src="product-6.png" alt="Vintage Chair" />
          <button class="buy__btn">Buy Now</button>
        </div>
      </div>
    </section>

    <!-- JavaScript -->
    <script src="product.js"></script>
  </body>
</html>
