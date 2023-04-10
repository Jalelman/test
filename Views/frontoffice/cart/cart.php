<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ApnaTheatre | Web Series</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <!-- Font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../assets/Images/Logo/Title.jpeg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="cart.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
  </head>

<!------------------------Scroll to top button------------------------------------------------>

  <body style="background-color:black;" color="height:auto;">

          <section id="cart" class="section-p1">
              <table  width="100%">
                  <thead>
                      <tr> 
                          <td>image</td>
                          <td>Film</td>
                          <td>location</td>
                          <td>price</td>
                          <td>Number of tickets</td>
                          <td>Subtotal</td>
                          
                          <td>Remove</td>
                      </tr>
                  </thead>
                <tbody>
                <?php
                $total = 0;
                $qty = 0;
               
                foreach ($data['cart'] as $cart) ?>
                
                  <tr>
                    
                    <td><img src="<?php echo $cart->image_film ?>" alt=""></td>
                    <td><?php echo $cart->nom_film ?></td>
                    <td>
                      <select name="" id="">
                        <option value="">Ciné janim</option>
                        <option value="">Théâtre de la municipalité</option>
                        <option value="">l'Agora</option>
                        <option value="">ciné zafir</option>
                      </select>
                    </td>
                    <td><?php echo $cart->price_film ?></td>
                    <td><input type="number" value="<?php echo $cart->nbr_ticket ?>"></td>
                    <td>subtotal</td>
                      <td><a href="#"></a><i class="far fa-times-circle"></i></a></td>
                  </tr>
                  
                </tbody>
              </table>
          </section>





      <!-------------------------------Footer-------------------------------->
      <footer class="footer">
          <hr class="footer-hr">
          <div class="footer-content">
              <div class="footer-left">
                  <a href="../home/home.php"><img class="footer-logo" src="assets/Images/TheaterLogoFinal.png" alt="" width="30" height="24"></a>
                  <p class="footer-bottom-tagline">Watch! Chill! Repeat!</p>
              </div>
              <div class="footer-middle">
                  <h2 class="footer-heading">Follow Us</h2>
                  <ul class="footer-middle-list icons">
                      <a class="footer-links" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f facebook" style="color:red"></i></a>
                      <a class="footer-links" href="https://twitter.com/login?lang=en" target="_blank"><i class="fab fa-twitter twitter" style="color:red"></i></a>
                      <a class="footer-links" href="https://www.linkedin.com/login" target="_blank"><i class="fab fa-linkedin linkedin" style="color:red"></i></a>
                      <a class="footer-links" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram instagram" style="color:red"></i></a>
                      <a class="footer-links" href="https://github.com/QAZIMAAZARSHAD/Movie-Streaming-Website" target="_blank"><i class="fab fa-github github" style="color:red"></i></a>
                  </ul>
              </div>
              <div class="footer-middle">
                  <h2 class="footer-heading">Services</h2>
                  <ul class="footer-middle-list">
                      <li class="footer-middle-list-item"><a href="../home/home.php">Enjoy Latest Movies</a> </li>
                      <li class="footer-middle-list-item"><a href="web-series.html">Watch Web-Series</a> </li>
                      <li class="footer-middle-list-item"><a href="kids.html">Everything for Kids</a> </li>
                      <li class="footer-middle-list-item"><a href="news.html">Coming soon</a> </li>
                      <li class="footer-middle-list-item"><a href="premium.html">Get Premium Subscription</a> </li>
                      <li class="footer-middle-list-item"><a href="faq.html">FAQ</a> </li>
                  </ul>
              </div>
              <div class="footer-middle">
                  <h2 class="footer-heading">Try Our App</h2>
                  <ul class="footer-middle-list icons">
                      <a class="footer-links" href="#"><i class="fab fa-google-play" style="color:red"></i></a>
                      <a class="footer-links" href="#"><i class="fab fa-app-store-ios" style="color:red"></i></a>
                  </ul>
              </div>
              <div class="footer-right">
                  <p class="footer-links">
                      <h2 class="footer-heading">Contact Us</h2>
                      <p class="footer-bottom-tagline">Feel free to contact us.</p>
                      <a class="footer-contact-button" href="contactus.html">Contact</a>
                  </p>
              </div>
          </div>
          <hr class="footer-hr">
          <div class="footer-copyright">
              <p>Copyright &copy; and &reg; Since
                  <script>
                      document.write(new Date().getFullYear())
                  </script> Under ApnaTheatre.com : (Project Is Done By Qazi Maaz Arshad)</p>
          </div>
      </footer>

  <!----------------------scroll back to top button-->
  <button  id="scrollToTopButton" title="Go to top" class="ml-5" >
      <i class="fa fa-angle-double-up" aria-hidden="true"></i>
    </button>
    <script>
    $(document).ready(function(){
      var scrollTopButton = document.getElementById("scrollToTopButton");
      window.onscroll = function () { scrollFunction() };

      function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        scrollTopButton.style.display = "block";
      } else {
        scrollTopButton.style.display = "none";
      }
    }

    $("#scrollToTopButton").click(function(){
    $('html ,body').animate({scrollTop : 0},800)
    });
    });
    </script>
  <script>
  function logout(){
  window.location.replace("login.html");
  }
  </script>
  <!-- offcanva JS and footer js -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script src="https://daniellaharel.com/raindrops/js/raindrops.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src="../assets/js/main-min.js"></script>
  <script>
      jQuery('#waterdrop').raindrops({
          color: '#292c2f',
          canvasHeight: 150,
          density: 0.1,
          frequency: 20
      });
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <script src="../assets/static/script.js"></script>
  </body>

</html>
