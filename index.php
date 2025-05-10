


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>imrana's Kitchen</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <!--meta http-equiv="refresh" content="30"-->
  <!-- Favicons -->
  <link href="img/dish-regular-24.png" rel="icon">
  <!--link href="img/dish-solid-24.png" rel="apple-touch-icon"-->

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
 <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/aos/aos.css" rel="stylesheet">
  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="css/style.css" rel="stylesheet">

  <style>
    .hero-img img {
      border-radius: 50%; /* Makes the image a perfect circle */
      width: 287px; /* Ensure width and height are equal */
      height: 285px;
      object-fit: cover; /* Ensures the image fits within the circle */
      animation: moveUpDown 3s infinite ease-in-out; /* Adds the up-and-down movement */
    }

    @keyframes moveUpDown {
      0%, 100% {
        transform: translateY(0);
      }
      50% {
        transform: translateY(-20px);
      }
    }
  </style>

  <!-- =======================================================
  * Template Name: Yummy
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="data:image/png;base64,iVBORw0KGgoAAA
        ANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAd9JREFUSEu11U+oTVE
        Ux/HPS0JJYiYD/0teJCNGJEXyJzHBhIEiEsnAzERRhMLMQChh4E9KCcXASEI9RQkDE5EBAwp
        71b667zjn3X1v7p6c095r7+9av73W2gP6PAb6fL5uAGE7B6MwhN8lznUCTMIMfMEVLMqHPsNGTMRb
        fG6CNQGm4yKWlHiJx9iC91X7JsB9LKsYP8XWPHcJCyvrd7GyBDAZn7LhjiTRhSzTd7zL89MwNsuzHWf
        xCyHp13ZINYIxuIo1eJV0n1so0esk6Szcxgb8bO2rAk4kD/YlPWPDTRwoBIT+hzETx9v3VQEfMDV7HhF0M+
        alzHqZ7ukNZtdF8ABLuzlxBNuHrSRpjyAuZ8J/AsRZUSPDKvkFBjEf8d/LWIAowueI/2GAO1iFXTjXy+nYk
        1L1dKr4W1hbBexNYZ1MxfIEi3sEhPfh+W6cqQLG4yPiuy6naTecyP/rudCmIArzn266DefxLcv1qJCwPMsy
        Lveky02FFvNR9jvxI3lxEKc6QKIYj2B01j+k/jvqml30+2PYn61upMxY3wCJ1rA6rx1NTh3KPWlEQGtxc6rI
        6Jp1UrZsWo/OppTi1+qc6PTgFL1aNXdZFEEYlbSPe1jRdE+dIihMomazvgP+APzwThkph6ZMAAAAAElFTkSuQmCC" alt="Logo pic of a bowl"/>
        <h1 class="sitename">imrana's Kitchen</h1>
        <span>.</span>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home<br></a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#menu">Menu</a></li>
          <li><a href="#events">Events</a></li>
          <li><a href="#chefs">Chefs</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <!--<li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li>-->
          
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="index.php#book-a-table">Book a Table</a>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">

      <div class="container">
        <div class="row gy-4 justify-content-center justify-content-lg-between">
          <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up">Enjoy Your Healthy<br>Palatable Food</h1>
            <p data-aos="fade-up" data-aos-delay="100">We are team of talented cooks and chefs to service you.</p>
            <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
              <a href="#book-a-table" class="btn-get-started">Booka a Table</a>
              <!--a href="https://youtu.be/xPPLbEFbCAo?si=wMdP7zLzaG9z0AOf" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a-->
            </div>
          </div>
          <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
            <img src="img/hero-img 1.jpg" class="img-fluid" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About Us<br></h2>
        <p><span>Learn More</span> <span class="description-title">About Us</span></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
            <img src="img/about.jpg" class="img-fluid mb-4" alt="">
            <div class="book-a-table">
              <h3>Book a Table</h3>
              <p>+233 544626869</p>
            </div>
          </div>
          <div class="col-lg-5" data-aos="fade-up" data-aos-delay="250">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                imrana's Kitchen is a well known prestigious restaurant 
                which serve the people for the past three years.
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> <span>The passion for good food and exceptional service.</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>We have been dedicated to providing our customers with an unparalleled dining experience.</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Our staff are trained to provide attentive and friendly service.</span></li>
              </ul>
              <p>
                Our chefs use only the freshest ingredients to craft menus that blend traditional flavors with 
                modern twists. Our staff are trained to provide attentive and friendly service. 
              </p>

              <div class="position-relative mt-4">
                <img src="img/about-2.jpg" class="img-fluid" alt="">
                <a href="https://youtu.be/xPPLbEFbCAo?si=wMdP7zLzaG9z0AOf" class="glightbox pulsating-play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Why Us Section -->
    <section id="why-us" class="why-us section light-background">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="why-box">
              <h3>Why Choose imrana's Kitchen</h3>
              <p>
                Desire for a specific type of cuisine, such as italian, Chinese, or Mexican. Reputation for serving high-quality, fresh, and delicious food.
                Availability of a diverse range of dishes to cater to different tastes and dietary requirements. Presence of gluten-free, vegan, vegetarian, or other special dietary options.
                <strong>Try imrana's Kitchen Today!</strong>
              </p>
              <div class="text-center">
                <a href="#" class="more-btn"><span>Learn More</span> <i class="bi bi-chevron-right"></i></a>
              </div>
            </div>
          </div><!-- End Why Box -->

          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">

              <div class="col-xl-4">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-clipboard-data"></i>
                  <h4>Fast and Reliable Service</h4>
                  <p>Get your order delivered quickly and efficiently.</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-gem"></i>
                  <h4>Premium Quality </h4>
                  <p>Experience the highest quality ingredients and craftsmanship</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-inboxes"></i>
                  <h4>Delicious and Convenient</h4>
                  <p>Enjoy a tasty and hassle-free meal</p>
                </div>
              </div><!-- End Icon Box -->

            </div>
          </div>

        </div>

      </div>

    </section><!-- /Why Us Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section dark-background">

      <img src="img/stats-bg.jpg" alt="" data-aos="fade-in">

      <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Clients</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p>Workers</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- Menu Section -->
    <section id="menu" class="menu section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Our Menu</h2>
        <p><span>Check Our</span> <span class="description-title">kitchen Menu</span></p>
      </div><!-- End Section Title -->

      <div class="container">

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">

          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
              <h4>Starters</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
              <h4>Breakfast</h4>
            </a><!-- End tab nav item -->

          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
              <h4>Lunch</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-dinner">
              <h4>Dinner</h4>
            </a>
          </li><!-- End tab nav item -->

        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

          <div class="tab-pane fade active show" id="menu-starters">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Starters</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="img/starter/tastemagazine2108210427-mediterranean-pastry-172763-1.jpg" class="glightbox"><img src="img/starter/tastemagazine2108210427-mediterranean-pastry-172763-1.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Tuna empanadillas</h4>
                <p class="ingredients">
                  Olive oil, green capsicum, smoked paprika 
                </p>
                <p class="price">
                  $2.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="img/starter/prawn-and-ginger-dumplings-102062-1.jpeg" class="glightbox"><img src="img/starter/prawn-and-ginger-dumplings-102062-1.jpeg" class="menu-img img-fluid" alt=""></a>
                <h4>Prawn and ginger dumplings</h4>
                <p class="ingredients">
                  prawn, soy sauce, sesame oil, fresh ginger
                </p>
                <p class="price">
                  $7.00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="img/starter/roasted-stuffed-mushrooms-80629-1.jpeg" class="glightbox"><img src="img/starter/roasted-stuffed-mushrooms-80629-1.jpeg" class="menu-img img-fluid" alt=""></a>
                <h4>Roasted stuffed mushrooms</h4>
                <p class="ingredients">
                  Flat mushrooms, Olive oil spray , garlic cloves, balsamic vinegar.
                </p>
                <p class="price">
                  $5.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="img/starter/sweet-saganaki_digi_1980x1320-172761-1.jpg" class="glightbox"><img src="img/starter/sweet-saganaki_digi_1980x1320-172761-1.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Sweet fried saganaki</h4>
                <p class="ingredients">
                   Lemon, honey, cheese, mint leaves.
                </p>
                <p class="price">
                  $6.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="img/starter/beef-wellington-tart-173822-1.webp" class="glightbox"><img src="img/starter/beef-wellington-tart-173822-1.webp" class="menu-img img-fluid" alt=""></a>
                <h4>Beef Wellington tart</h4>
                <p class="ingredients">
                  Olive oil, Butter, Fresh thyme leaves.
                </p>
                <p class="price">
                  $10.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="img/starter/bacon-rings-103588-1.jpeg" class="glightbox"><img src="img/starter/bacon-rings-103588-1.jpeg" class="menu-img img-fluid" alt=""></a>
                <h4>Bacon rings</h4>
                <p class="ingredients">
                  Bacon rashes, string cheese, Paprika, to sprinkle.
                </p>
                <p class="price">
                  $3.95
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Starter Menu Content -->

          <div class="tab-pane fade" id="menu-breakfast">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Breakfast</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="img/breakfast/koko and bofrot.jpg" class="glightbox"><img src="img/breakfast/koko and bofrot.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Hausa Koko and Bafflot</h4>
                <p class="ingredients">
                  Corn dough, sugar, flour, 
                </p>
                <p class="price">
                  $4.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="img/breakfast/Lipton with brown bread1.jpg" class="glightbox"><img src="img/breakfast/Lipton with brown bread1.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Lipton with Brown bread.</h4>
                <p class="ingredients">
                  Lipton herb, brown bread, eggs.
                </p>
                <p class="price">
                  $4.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="img/breakfast/Tea with bread and sauage.webp" class="glightbox"><img src="img/breakfast/Tea with bread and sauage.webp" class="menu-img img-fluid" alt=""></a>
                <h4> Tea with bread & Sauage.</h4>
                <p class="ingredients">
                  Milk tea, sausage, baked beans, eggs, bread.
                </p>
                <p class="price">
                  $12.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="img/breakfast/Plantain & Eggs.webp" class="glightbox"><img src="img/breakfast/Plantain & Eggs.webp" class="menu-img img-fluid" alt=""></a>
                <h4>Plantain With Eggs</h4>
                <p class="ingredients">
                  Plantain, Eggs.
                </p>
                <p class="price">
                  $8.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="img/breakfast/Milk Tea with Eggs1.jpg" class="glightbox"><img src="img/breakfast/Milk Tea with Eggs1.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Milo & Fried egg, with bread.</h4>
                <p class="ingredients">
                  Milo, egg, bread.
                </p>
                <p class="price">
                  $2.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="img/breakfast/French fries with tilapia.jpg" class="glightbox"><img src="img/breakfast/French fries with tilapia.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>French fries with  Tilapia</h4>
                <p class="ingredients">
                  Yam, vegetables, Tilapia.
                </p>
                <p class="price">
                  $19.95
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Breakfast Menu Content -->

          <div class="tab-pane fade" id="menu-lunch">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Lunch</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="img/lunch/banku tilapia.jpg" class="glightbox"><img src="img/lunch/banku tilapia.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Banku Tilapia.</h4>
                <p class="ingredients">
                  Cassava, red and green pepper, Tilapia.
                </p>
                <p class="price">
                  $20.50
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="img/lunch/kenkey and egg.jpg" class="glightbox"><img src="img/lunch/kenkey and egg.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Kenkey</h4>
                <p class="ingredients">
                  Cassava, egg, vegetable pepper, fish.
                </p>
                <p class="price">
                  $17.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="img/lunch/plantain and pepper.jpg" class="glightbox"><img src="img/lunch/plantain and pepper.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Plantain with egg</h4>
                <p class="ingredients">
                  Plantain, egg, tomato sauce, pepper.
                </p>
                <p class="price">
                  $8.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="img/lunch/rice and beans.jpg" class="glightbox"><img src="img/lunch/rice and beans.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Rice and beans</h4>
                <p class="ingredients">
                  Rice, beans, meat, tomato stew.
                </p>
                <p class="price">
                  $10.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="img/lunch/rice and kontomire.jpg" class="glightbox"><img src="img/lunch/rice and kontomire.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Rice and kontomire</h4>
                <p class="ingredients">
                  Rice, kontomire, egg.
                </p>
                <p class="price">
                  $8.25
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="img/lunch/waakye.jpg" class="glightbox"><img src="img/lunch/waakye.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Waakye</h4>
                <p class="ingredients">
                  Rice, beans, plantain, spagetti, wele, Meat
                </p>
                <p class="price">
                  $14.99
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Lunch Menu Content -->

          <div class="tab-pane fade" id="menu-dinner">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Dinner</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="img/dinner/menu -item2.jpg" class="glightbox"><img src="img/dinner/menu -item1.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Kenkey</h4>
                <p class="ingredients">
                  Cassava, tomato pepper, onion, green pepper.
                </p>
                <p class="price">
                  $5.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="img/dinner/menu -item4.jpg" class="glightbox"><img src="img/dinner/menu -item2.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Vegetable rice with Stew</h4>
                <p class="ingredients">
                 Rice, Meat, tomato, stew, herbs.
                </p>
                <p class="price">
                  $15.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="img/dinner/menu -item4.jpg" class="glightbox"><img src="img/dinner/menu -item4.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Banku with Okra stew</h4>
                <p class="ingredients">
                  cassava, chicken, okro, tomato stew, wele.
                </p>
                <p class="price">
                  $11.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="img/dinner/menu -item5.jpg" class="glightbox"><img src="img/dinner/menu -item5.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Rice with Tilapia</h4>
                <p class="ingredients">
                  Rice, Pepper, vegetable, Tilapia.
                </p>
                <p class="price">
                  $22.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="img/dinner/menu -item6.jpg" class="glightbox"><img src="img/dinner/menu -item6.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Fufu with Light soup</h4>
                <p class="ingredients">
                 Cassava, light soup, chicken.
                </p>
                <p class="price">
                  $17.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="img/dinner/menu- item3.jpg" class="glightbox"><img src="img/dinner/menu- item3.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Fried Rice with Chicken</h4>
                <p class="ingredients">
                  Rice, Chicken, Vegetable.
                </p>
                <p class="price">
                  $13.95
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Dinner Menu Content -->

        </div>

      </div>

    </section><!-- /Menu Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>TESTIMONIALS</h2>
        <p>What Are They <span class="description-title">Saying About Us</span></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>The food is always fresh and delicious. I love their signature dishes, they're always a hit. The chef realyy knows how to bring out the flavors. Their menu is so diverse, there's something for everyone. The presentation is always beautiful, it's like a work of art.</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Saul Goodman</h3>
                      <h4>Ceo &amp; Founder</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="img/testimonials/testimonials-1.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>The staffs is always freindly and attentive. Our server was knowledgeable and made great recommendations. The service is always prompt and efficient. They really go above and beyond to make sure you're happy. The atmosphere is warm and welcoming, thanks to the staff..</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Sara Wilsson</h3>
                      <h4>Designer</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="img/testimonials/testimonials-2.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>The prices are very reasonable for the quality you get. The portions are generous, you definitely get your money's worth. They offer great deals and promotions, it's a fantastic value. The quality of the food and service is well worth the price.</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Jena Karlis</h3>
                      <h4>Store Owner</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="img/testimonials/testimonials-3.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>This is my go-to restaurant, i love it here. I've been coming here for years, and it never disappoints. The restaurant has a great reputation, and it's well-deserved. I've tried many restaurants in the area, but this one is the best best. .</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>John Larson</h3>
                      <h4>Entrepreneur</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="img/testimonials/testimonials-4.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Events Section -->
    <section id="events" class="events section">

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 1
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(img/events-1.jpg)">
              <h3>Custom Parties</h3>
              <div class="price align-self-start">$99</div>
              <p class="description">
                One can host your parties and get together here in our restaurant, where we have varoius varieties of foods.
              </p>
            </div><!-- End Event item -->

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(img/events-2.jpg)">
              <h3>Private Parties</h3>
              <div class="price align-self-start">$289</div>
              <p class="description">
                One can have their own private gathering, of their choice, seats, cocktails, foods, snacks and sweets all available to enjoy.
              </p>
            </div><!-- End Event item -->

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(img/events-3.jpg)">
              <h3>Birthday Parties</h3>
              <div class="price align-self-start">$499</div>
              <p class="description">
                All birthday parties are for any group of individual is allowed, we also do cakes for birthday persons, whether large or small size.
              </p>
            </div><!-- End Event item -->

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(img/events-4.jpg)">
              <h3>Wedding Parties</h3>
              <div class="price align-self-start">$899</div>
              <p class="description">
                We also cook, host and manage not only large wedding but mini ones too. We take engage of all the seats, drinks and welfare of the whole wedding.
              </p>
            </div><!-- End Event item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Events Section -->

    <!-- Chefs Section -->
    <section id="chefs" class="chefs section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>chefs</h2>
        <p><span>Our</span> <span class="description-title">Proffesional Chefs<br></span></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <div class="member-img">
                <img src="img/chef 1/download (1).jpg" class="img-fluid" alt="">
                <!--div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div-->
              </div>
              <div class="member-info">
                <h4>Chef Maame Boakye</h4>
                <span>Cook</span>
                <p>As a private chef who has lived in New York and Ghana for most of her life, Boakye used her mastery of bold, spicy flavors to do what she set out to do:  take home a $10,000 prize and the title of Chopped Champion for the three dishes she prepared. “They actually enjoyed it, and I could tell from the looks on their faces when they tasted the food,” says the chef. “That made me proud that I was able to take whatever was given to me to create something edible.</p>
              </div>
            </div>
          </div><!-- End Chef Team Member -->

          <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="img/chef 1/download.jpg" class="img-fluid" alt="">
                <!--div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div-->
              </div>
              <div class="member-info">
                <h4>Chen Guanghong</h4>
                <span>Patissier</span>
                <p>The restaurant is a household name among locals because of its authentic Chinese flavor. It could take in tens of thousands of Ghanaian diners yearly, including many Ghanaian officials and celebrities.

                  Naming the spicy tofu and fish stew, hot and sour soup, fried rice, and many other dishes as their favorites, Chen said some Ghanaian regulars have totally fallen in love with the Chinese food.
                  
                  "There is a young Ghanaian couple who are obsessed with Chinese steamed stuffed bun so that they come to our restaurant.</p>
              </div>
            </div>
          </div><!-- End Chef Team Member -->

          <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <div class="member-img">
                <img src="img/chef 1/images.jpg" class="img-fluid" alt="">
                <!--div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div-->
              </div>
              <div class="member-info">
                <h4>Kwame Annom Amfo-Akonnor</h4>
                <span>Master chef</span>
                <p>My name is Kwame Annom Amfo-Akonnor I am 22 and a final year business administration student. I am Ghanaian, born and raised in Ghana and resides in its capital city, Accra.

                  I am yet to receive a bachelor's degree in business management upon graduating in May this year. I am a self-taught chef. My love and passion for food begun at a very young age and at the age of 16 I wanted to own a chain of fine dining restaurants.</p>
              </div>
            </div>
          </div><!-- End Chef Team Member -->

        </div>

      </div>

    </section><!-- /Chefs Section -->

    <!-- Book A Table Section -->
    <section id="book-a-table" class="book-a-table section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Book A Table</h2>
        <p><span>Book Your</span> <span class="description-title">Stay With Us<br></span></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row g-0" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 reservation-img" style="background-image: url(img/Book\ now.jpg);"></div>

          <div class="col-lg-8 d-flex align-items-center reservation-form-bg" data-aos="fade-up" data-aos-delay="200">
            <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form">
              <div class="row gy-4">
                <div class="col-lg-4 col-md-6">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" required="">
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="date" name="date" class="form-control" id="date" placeholder="Date" required="">
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="time" class="form-control" name="time" id="time" placeholder="Time" required="">
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="number" class="form-control" name="people" id="people" placeholder="Number of people" required="">
                </div>
              </div>

              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
              </div>

              <div class="text-center mt-3">
                <div class="loading">Loading</div>
                <div class="error-message">
                  
                </div>
                <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
                <button type="submit">Book a Table</button>
              </div>
            </form>
          </div><!-- End Reservation Form -->

        </div>

      </div>

    </section><!-- /Book A Table Section -->

    <!-- Gallery Section -->
    <section id="gallery" class="gallery section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Gallery</h2>
        <p><span>Check</span> <span class="description-title">Our Gallery</span></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "centeredSlides": true,
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 0
                },
                "768": {
                  "slidesPerView": 3,
                  "spaceBetween": 20
                },
                "1200": {
                  "slidesPerView": 5,
                  "spaceBetween": 20
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="img/Gallery 2/gall 1.avif"><img src="img/Gallery 2/gall 1.avif" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="img/Gallery 2/gall 2.avif"><img src="img/Gallery 2/gall 2.avif" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="img/Gallery 2/gall 3.avif"><img src="img/Gallery 2/gall 3.avif" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="img/Gallery 2/gall 4.avif"><img src="img/Gallery 2/gall 4.avif" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="img/Gallery 2/gall 5.avif"><img src="img/Gallery 2/gall 5.avif" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="img/Gallery 2/gall 6.jpg"><img src="img/Gallery 2/gall 6.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="img/Gallery 2/gall 7.avif"><img src="img/Gallery 2/gall 7.avif" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="img/Gallery 2/gall 8.jpg"><img src="img/Gallery 2/gall 8.jpg" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Gallery Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p><span>Need Help?</span> <span class="description-title">Contact Us</span></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
              <i class="icon bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Address</h3>
                <p>Safari Street, kasoa, GC-5630</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="300">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+233 544626869</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="400">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>imranasalis17@gmail.com</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="500">
              <i class="icon bi bi-clock flex-shrink-0"></i>
              <div>
                <h3>Opening Hours<br></h3>
                <p><strong>Mon-Sat:</strong> 9AM - 23PM; <strong>Sunday:</strong> Closed</p>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>

        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="600">
          <div class="row gy-4">

            <div class="col-md-6">
              <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
            </div>

            <div class="col-md-6 ">
              <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
            </div>

            <div class="col-md-12">
              <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
            </div>

            <div class="col-md-12">
              <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
            </div>

            <div class="col-md-12 text-center">
              <div class="loading">Loading</div>
              <div class="error-message">

              </div>
              <div class="sent-message">Your message has been sent. Thank you!</div>

              <button type="submit">Send Message</button>
            </div>

          </div>
        </form><!-- End Contact Form -->

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer dark-background">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div class="address">
            <h4>Address</h4>
            <p>Safari Street</p>
            <p>Kasoa, Ghana</p>
            <p></p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Contact</h4>
            <p>
              <strong>Phone:</strong> <span>+233 544626869</span><br>
              <strong>Email:</strong> <span>imranasalis17@gmail.com</span><br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Opening Hours</h4>
            <p>
              <strong>Mon-Sat:</strong> <span>9AM - 23PM</span><br>
              <strong>Sunday</strong>: <span>Closed</span>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="https://x.com/imranasalis" class="twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="https://web.facebook.com/profile.php?id=61569568473599&sk=about_overview&viewas=100000686899395" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/imrana.salis/" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="http://www.linkedin.com/in/imrana-salis-a672a333b" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">imrana's kitchen</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://github.com/Imrana17"><i>IMRANA SALIS</i></a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!--script src="vendor/php-email-form/validate.js"></script-->
  <script src="vendor/aos/aos.js"></script>
  <script src="vendor/glightbox/js/glightbox.min.js"></script>
  <script src="vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="js/main.js"></script>

</body>

</html>