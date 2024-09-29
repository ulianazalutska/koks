<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="assets/img/marihuana.png" type="image/x-icon">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/styles1.css">

              <!--=============== REMIXICONS ===============-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">

        <title>KO | KS</title>
    </head>
    <body>
      <img src="assets/img/shape-bg.png" alt="" class="shape__bg">
        <!--==================== MAIN ====================-->
        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home" id="home">
              <div class="shape__small"></div>
              <div class="shape__big"></div>


              <div class="home__container container">
                <div class="home__data">
                  <h1 class="home__title">
                    <span>KOKS</span>
                    <img src="assets/img/stars.png" alt="home image" class="home__title-img-1">
                    <img src="assets/img/stars.png" alt="home image" class="home__title-img-2">
                  </h1>

                  <a href="#products" class="button">View More!!!</a>
                </div>

                <img src="assets/img/homemarih1.png" alt="home image" class="home__tree-1">
                <img src="assets/img/homemarih2.png" alt="home image" class="home__tree-2">
              </div>
            </section>

            <!--==================== PRODUCTS ====================-->
            <section class="products section" id="products">
              <div class="shape__small"></div>
              <h2 class="section__title">
                    PRODUCTS
              </h2>

              <div class="products__container container grid">
                <?php
                require('./conndb/conn.php');

                $sql = "SELECT * FROM products";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                  while($row = mysqli_fetch_assoc($result)) {
                ?>
                  <div class="products__card">
                    <img src="assets/img/<?php echo $row["img"] ?>" alt="products image" class="products__img">

                    <h3 class="products__title"><?php echo $row["name"] ?></h3>
                    <p class="products__description"><?php echo $row["description"] ?></p>

                    <img src="assets/img/stars.png" alt="" class="products__star">
                  </div>
               <?php
                  }
                }
               ?>
              </div> 
            </section>
        </main>
         <!-- scroll top -->
  <a href="#" class="scrollup" id="scroll-up">
    <i class="ri-arrow-up-line scrollup__icon"></i> 
  </a> 
        <!--=============== SCROLLREVEAL ===============-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main1.js"></script>
    </body>
</html>