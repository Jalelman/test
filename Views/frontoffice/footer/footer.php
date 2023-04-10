
<!-------------------------------Footer-------------------------------->
<div id="waterdrop"></div>
<footer class="footer">
    <hr class="footer-hr">
    <div class="footer-content">
        <div class="footer-left">
            <a href="../home/home.php"><img class="footer-logo" src="assets/Images/Logo/TheaterLogo.png" alt="" width="30"
                                            height="24"></a>
            <p class="footer-bottom-tagline">Buy! Watch! Chill! </p>
        </div>
        <div class="footer-middle">
            <h2 class="footer-heading">Follow Us</h2>
            <ul class="footer-middle-list icons">
                <a class="footer-links" href="https://www.facebook.com/" target="_blank"><i
                        class="fab fa-facebook-f facebook" style="color:red"></i></a>
                <a class="footer-links" href="https://twitter.com/login?lang=en" target="_blank"><i
                        class="fab fa-twitter twitter" style="color:red"></i></a>
                <a class="footer-links" href="https://www.linkedin.com/login" target="_blank"><i
                        class="fab fa-linkedin linkedin" style="color:red"></i></a>
                <a class="footer-links" href="https://www.instagram.com/" target="_blank"><i
                        class="fab fa-instagram instagram" style="color:red"></i></a>
                <a class="footer-links" href="https://github.com/QAZIMAAZARSHAD/Movie-Streaming-Website" target="_blank"><i
                        class="fab fa-github github" style="color:red"></i></a>
            </ul>
        </div>
        <div class="footer-middle">
            <h2 class="footer-heading">Services</h2>
            <ul class="footer-middle-list">
                <li class="footer-middle-list-item"><a href="../home/home.php">Enjoy Latest Movies</a> </li>
                <li class="footer-middle-list-item"><a onmouseover="booknow()" onmouseout="hideAlert()" href="../home/home.php">Book Your Ticket Now</a>
                    <script>
                        function booknow() {
                            var alertBox = document.createElement("div");
                            alertBox.id = "alert-box";
                            alertBox.innerHTML = "Pick a Movie First and then click Buy Now";
                            alertBox.style.backgroundColor = "red";
                            alertBox.style.color = "white";
                            alertBox.style.padding = "30px";
                            alertBox.style.borderRadius = "10px";
                            alertBox.style.textAlign = "center";
                            alertBox.style.position = "fixed";
                            alertBox.style.top = "16%";
                            alertBox.style.left = "50%";
                            alertBox.style.transform = "translateX(-50%)";
                            alertBox.style.zIndex = "9999";
                            document.body.appendChild(alertBox);
                        }
                        function hideAlert() {
                            var alertBox = document.getElementById("alert-box");
                            if (alertBox) {
                                alertBox.parentNode.removeChild(alertBox);
                            }
                        }
                    </script></li>
                <li class="footer-middle-list-item"><a href="kids.html">Everything for Kids</a> </li>
                <li class="footer-middle-list-item"><a href="news.html">Coming soon</a> </li>
                <li class="footer-middle-list-item"><a href="premium.html">Get Premium Subscription</a> </li>
                <li class="footer-middle-list-item"><a href="faq.html">FAQ</a> </li>
            </ul>
        </div>
        <div class="footer-middle">
            <p class="footer-links">
            <h2 class="footer-heading">Book Now</h2>
            <p class="footer-bottom-tagline"> Book your tickets now for an unforgettable cinematic experience.</p>
            <a class="footer-contact-button" onmouseover="booknow()" onmouseout="hideAlert()" >Book Now</a>
            </p>
            <script>
                function booknow() {
                    var alertBox = document.createElement("div");
                    alertBox.id = "alert-box";
                    alertBox.innerHTML = "Pick a Movie First and then click Buy Now";
                    alertBox.style.backgroundColor = "red";
                    alertBox.style.color = "white";
                    alertBox.style.padding = "30px";
                    alertBox.style.borderRadius = "10px";
                    alertBox.style.textAlign = "center";
                    alertBox.style.position = "fixed";
                    alertBox.style.top = "16%";
                    alertBox.style.left = "50%";
                    alertBox.style.transform = "translateX(-50%)";
                    alertBox.style.zIndex = "9999";
                    document.body.appendChild(alertBox);
                }
                function hideAlert() {
                    var alertBox = document.getElementById("alert-box");
                    if (alertBox) {
                        alertBox.parentNode.removeChild(alertBox);
                    }
                }
            </script>
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
            </script> Under Ticketeasy.com : (Project Is Done By Innovators)
        </p>
    </div>
</footer>

<!----------------------scroll back to top button-->
<button id="scrollToTopButton" title="Go to top">
    <i class="fa fa-angle-double-up" aria-hidden="true"></i>
</button>
<script>
    $(document).ready(function () {
        var scrollTopButton = document.getElementById("scrollToTopButton");
        window.onscroll = function () { scrollFunction() };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                scrollTopButton.style.display = "block";
            } else {
                scrollTopButton.style.display = "none";
            }
        }

        $("#scrollToTopButton").click(function () {
            $('html ,body').animate({ scrollTop: 0 }, 800)
        });
    });
</script>

<!-- footer scripts -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://daniellaharel.com/raindrops/js/raindrops.js"></script>

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
<script>
    function logout(){
        window.location.replace("login.html");
    }
</script>
<!-- bootsstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
<script src="../assets/static/script.js"></script>