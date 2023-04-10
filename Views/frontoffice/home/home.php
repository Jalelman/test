<?php require '../header/header.php'; ?>
<?php

var_dump($DB->query('SELECT * FROM products'));
?>
<marquee>Welcome To <i>Ticketeasy</i>.com<sup>&reg;</sup></marquee>
<label class="online">Book Your Movies Ticket Now!</label>
<div class="buddy">
  <div class="slider">
    <div class="slide_track">
      <div class="slide">
        <img src="../assets/Images/apharan.jpg" alt="" />
      </div>
      <div class="slide">
        <img src="../assets/Images/bat.jpg" alt="" />
      </div>
      <div class="slide">
        <img src="../assets/Images/breaking.jpg" alt="" />
      </div>
      <div class="slide">
        <img src="../assets/Images/criminal.jpg" alt="" />
      </div>
      <div class="slide">
        <img src="../assets/Images/got.jpg" alt="" />
      </div>
      <div class="slide">
        <img src="../assets/Images/infinity.jpg" alt="" />
      </div>
      <div class="slide">
        <img src="../assets/Images/kota.jpg" alt="" />
      </div>
      <div class="slide">
        <img src="../assets/Images/mirzapur.jpg" alt="" />
      </div>
      <div class="slide">
        <img src="../assets/Images/sacred.jpg" alt="" />
      </div>
      <div class="slide">
        <img src="../assets/Images/scam.jpg" alt="" />
      </div>
      <div class="slide">
        <img src="../assets/Images/apharan.jpg" alt="" />
      </div>
      <div class="slide">
        <img src="../assets/Images/bat.jpg" alt="" />
      </div>
      <div class="slide">
        <img src="../assets/Images/breaking.jpg" alt="" />
      </div>
      <div class="slide">
        <img src="../assets/Images/criminal.jpg" alt="" />
      </div>
      <div class="slide">
        <img src="../assets/Images/got.jpg" alt="" />
      </div>
      <div class="slide">
        <img src="../assets/Images/infinity.jpg" alt="" />
      </div>
      <div class="slide">
        <img src="../assets/Images/kota.jpg" alt="" />
      </div>
      <div class="slide">
        <img src="../assets/Images/mirzapur.jpg" alt="" />
      </div>
      <div class="slide">
        <img src="../assets/Images/sacred.jpg" alt="" />
      </div>
      <div class="slide">
        <img src="../assets/Images/scam.jpg" alt="" />
      </div>
    </div>
  </div>
</div>
<div class="maincontainer">
  <h2>Movies</h2>
  <hr>
  <div class="container">
      <div id="movies" class="row"></div>
  </div>
  <div class="container" id="Movies">
    <h3>Hollywood</h3>
    <hr>
    <div class="poster">
      <div class="flip-card_i">
        <div class="flip-card-inner_i">
          <div class="flip-card-front_i">
              <img src="../assets/Images/inception.jpg" alt="Avatar" style="width:250px;height:360px;">
          </div>
          <div class="flip-card-back_i">
            <h1>Inception</h1>
              <button class="btn_i b3_i"  title="Year" style="color:white">2010</button>
              <button class="btn_i b2_i"  title="Minutes" style="color:white">2h42m</button>
              <button class="btn_i b1_i"  title="IMDb" style="color:white">8.8</button>
            </span>
            <br />
            <br />
            <p class="para_i">Cobb steals information from his targets by entering their dreams. Saito offers to wipe clean Cobb's criminal history as payment for performing an inception on his sick competitor's son.</p>
            <button class="trailer_i" type="submit" value="" onclick="openWin()">▶Trailer</button>
              <script type="text/javascript">
                function openWin(){
                  window.open("https://www.youtube.com/embed/YoHD9XEInc0?autoplay=1&controls=0&showinfo=0&modestbranding=1&loop=1&playlist=YoHD9XEInc0","_blank","top=1000,left=10,height=315,width=560,channelmode=no,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");}
              </script><br><br>
            <button class="btn_i b4_i" type="submit" value="" onclick="openMovieWin11('Inception')" style=" height: 0.75cm; width:2.5cm; ">
              <img src="Images\Logo\11.png" alt="Ticket" style="height: 80%; width: auto;">
              Buy Now
            </button>                  
            <script type="text/javascript">
              function openMovieWin11(movieName){
                var url = "Book Now.php?movie=" + encodeURIComponent(movieName);
                    window.location.href = url;                      }
            </script>
          </div>
        </div>
        <div class="flim">
          <b>Inception</b><br>IMDb - 8.8
        </div>
      </div>
    </div>
  </div>
</div>
<?php require '../footer/footer.php'; ?>



</body>
</html>
