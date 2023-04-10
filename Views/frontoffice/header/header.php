
<?php
require '../../../db.class.php';
$DB = new DB('');

?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Ticketeasy</title>
    <link rel="shortcut icon" href="../assets/Images/Logo/titlee.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="../assets/static/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
          integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="../assets/static/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/static/style-min.css">
    <link rel="stylesheet" href="../home/home.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <!-- Include jQuery library -->
    <script src="jquery-ui-1.13.2\jquery-ui-1.13.2\external\jquery\jquery.js"></script>

    <!-- Include jQuery UI library -->
    <script src="jquery-ui-1.13.2\jquery-ui-1.13.2\jquery-ui.js"></script>

    <!-- Include raindrops.js -->
    <script src="raindrops-master/raindrops-master/raindrops.js"></script>

</head>

<!------------------------Scroll to top button------------------------------------------------>
<style>
    .poster {
        box-shadow: 0 0 15px red !important;

    }
    .buddy{
        cursor: pointer;
    }
    #scrollToTopButton {
        position: fixed;
        bottom: 40px;
        right: 25px;
        font-size: 25px;
        z-index: 99;
        width: 50px;
        height: 50px;
        background-color: red;
        color: black;
        border: none;
        cursor: pointer;
        outline: none;
        padding: 6px;
        border-radius: 50%;
    }

    #scrollToTopButton:hover,i:hover {
        background-color: white;
        color: red;
    }

    .navbar-nav{
        display: flex;
        align-items: center;
        padding: 0px 7.5px;
    }




    .maincontainer h3 {
        color: white;
        text-align: center;
    }

    .container {
        text-align: center;
    }
    #navbarNav.nav-item.nav-link a:hover{
        color: red;
    }
    .nav-link:hover{
        color: red;
    }
    .nav-item :hover{
        margin-bottom: 10px;
        /* background-color: aquamarine; */
        border-bottom: 3px;
        border-color: red;
        border-bottom-style: solid;
    }

    #header-nav .nav-link a:hover{
        color: red;
    }
    #alert-box
    {
        background-color: red;
        color: white;
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        position: fixed;
        top: 16%;
        left: 50%;
        transform: translateX(-50%);
        z-index: 9999;
    }
</style>
<script>
    setTimeout(function () {
        $('.section').fadeToggle();
    }, 4000);

</script>






<div class="scroll-bar">
    <!-- navbar starts -->

    <nav class="navbar navbar-expand-lg navbar-light bg-dark" id="header-nav">
        <div class="container-fluid">
            <a class="navbar-brand" href="../home/home.php"><img class="logo" src="assets/Images/Logo/TheaterLogo.png" alt="" width="30"
                                                                 height="24"></a>
            <button id="nav" class="navbar-toggler" id="nav" style="background-color:#8b0000" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="background-color:dark-grey;"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item ">
                        <a class="nav-link active s" aria-current="page" href="../home/home.php" onMouseOver="this.style.color='red'" onMouseOut="this.style.color='white'">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="movies.html" onMouseOver="this.style.color='red'" onMouseOut="this.style.color='white'">Movies</a>
                    </li>
                    <!--reservation-->
                    <li class="nav-item">
                        <a class="nav-link" href="kids.html" onMouseOver="this.style.color='red'" onMouseOut="this.style.color='white'">Kids</a>
                    </li>
                    <li class="nav-item">
                        <a href="../cart/cart.php" onMouseOver="this.style.color='red'" onMouseOut="this.style.color='white'">
                            <img src="../assets/Images/bagg.png" alt="shopping bag" width="30" height="30">
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contactus.html"  onMouseOver="this.style.color='red'" onMouseOut="this.style.color='white'">Contact Us</a>
                    </li>
                    <li>
                        <!-- Genre dropdown starts-->
                        <div>
                            <div class="dropdown" style="position: relative; disPlay: inline-block; padding-top: 5px; padding-left: 15px;">
                                <button class="btn btn-outline-danger dropdown-toggle" type="button" id="dropdownMenuButton" style="font-size:20px;">
                                    Genres
                                </button>
                                <div class="dropdown-content" style="color: white;">
                                    <a href="crime.html">Crime</a>
                                    <a href="suspense.html">Suspense & Thriller</a>
                                    <a href="action.html">Action</a>
                                    <a href="fantasy.html">Sci-Fi & Fantasy</a>
                                    <a href="documentary.html">Documentary</a>
                                    <a href="horror.html">Horror</a>
                                    <a href="drama.html">Drama</a>
                                    <a href="war.html">War & Politics</a>
                                    <a href="comedy.html">Comedy</a>
                                    <a href="romance.html">Romance</a>

                                </div>
                            </div>
                        </div>
                        <!-- Genre dropdown ends-->
                    </li>
                    <div style="position: relative; display: inline-block; padding-top: 5px; padding-left: 15px;">
                        <li>
                            <button  type="button" class="btn btn-light" onclick="logout()"  onMouseOver="this.style.color='red'" onMouseOut="this.style.color='white'">Logout</button>
                        </li>
                    </div>
                </ul>
                <form id="searchForm" class="d-flex">
                    <input class="form-control me-2" type="text" id="searchText" placeholder="Search" aria-label="Search">
                    <button class="btn btn-danger" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- navbar ends -->
