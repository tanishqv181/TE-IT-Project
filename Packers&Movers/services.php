<?php include "dbout.php"; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Packers And Movers</title>
    <link rel="stylesheet" href="service-style.css" />
  </head>

  <body>
    <nav>
      <div class="logo">
        <h3>Packers And Movers</h3>
      </div>

      <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="services.html">Services</a></li>
        <li><a href="booking.php">Booking</a></li>
        <li><a href="about.html">About</a></li>
        <!-- <li><a href="#">FAQ</a></li> -->
      </ul>

      <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
    </nav>

    <header class="showcase">
      <div class="image-container transit">
        <img src="Wall3.jpg" alt="Truck" />
      </div>
    </header>

    <hr class="straight">

    <section class="paragraph">
      <h3><strong>PACKERS & MOVERS</strong></h3>
      <p class="text-content">
        VAST strives to deliver perfection in everything we perform. Our quality
        services match the international standards, as we believe in maintaining
        long term business relationship with our customers. What separates us
        from other movers and packers is the unique combination of experience
        and personal service. We meet all the standards of perfection while
        handling the goods, packing, moving and during the transportation
        process at the most affordable rates from all destinations. The major
        services covered by packers and movers are – packing, loading,
        transporting, unloading, and unpacking.
      </p>
    </section>

    <div class="container">
      <?php
        $query = "SELECT * FROM services";
        $select_services = mysqli_query($connection,$query);

        while($row = mysqli_fetch_assoc($select_services)){
          $ser_image = $row['ser_image'];
          $title = $row['title'];
          $description = $row['description'];
          $cost = $row['cost'];
          ?>

          <div class="card">
            <div class="img-box">
              <img  src="<?php echo $ser_image;?>" alt="broken" />
            </div>
            <div class="content">
              <h2><?php echo $title ?></h2>
              <p class="description">
                <?php echo $description ?>
              </p>
              <h4 class="cost">Cost:           <?php echo $cost ?></h4>
            </div>
          </div>



        <?php } ?>

    </div>

<hr class="straight">

    <footer>
      <div class="bottom">
        <h3>
          <img
            src="location.png"
            alt="location"
            style="height: 25px; width: 25px"
            class="loc"
          />
          ADDRESS
        </h3>
        <h3>411030, Pune, Maharashtra</h3>
        <h3>---------India---------</h3>

        <div class="adress-bottom"></div>

        <div class="social">
          <a href="https://www.instagram.com/?hl=en"
            ><img
              src="Insta.png"
              alt="Insta"
              style="height: 35px; width: 35px"
              class="loc"
          /></a>
          <a href="https://www.facebook.com/"
            ><img
              src="Facebook.png"
              alt="Insta"
              style="height: 35px; width: 35px"
              class="loc"
          /></a>
          <a href="https://twitter.com/"
            ><img
              src="Twitter.png"
              alt="Insta"
              style="height: 35px; width: 35px"
              class="loc"
          /></a>
          <a href="https://youtu.be/huG3doPWXIY"
            ><img
              src="YouTube.png"
              alt="Insta"
              style="height: 35px; width: 35px"
              class="loc"
          /></a>
        </div>
        <div class="copyright">
          <p>VAST | &copy; All rights reserved</p>
        </div>
      </div>
    </footer>

    <script src="main.js"></script>
  </body>
</html>
