<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soil Farming Agent</title>
    <!doctype html>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
<nav class="navbar background h-nav-resp">
        <ul class="nav-list v-class-resp">
            <div class="logo"><img src="img/logo.png" alt="logo"></div>
            <li><a href="#home"> Home</a></li>
            <li><a href="#about"> About</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="#contact"> Contact Us</a></li>
        </ul>
        <div class="rightNav v-class-resp">
            <input type="text" name="search" id="search">
            <button class="btn btn-sm">Search</button>
        </div>
        <div class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>

    </nav>
    <section class="background firstSection" id="Home">
        <div class="box-main">
            <div class="firstHalf">
                <p class="text-big">Soil Farming Agent</p>
                <p class="text-small">Soil is a crucial component in agriculture. There are various types of soil. Diff erent sorts of crops thrive on diff erent types of soils, and each type of soil has its own set of characteristics. To understand which crops grow best in which soil types, we need to grasp the traits and characteristics of distinct soil types. The proposed application admin would update the information in the portal and crop/seed distributor details with the help of soil and crop specialists. These soil and distributor details can be viewed by the user.</p>
                <div class="buttons">
                    <button class="btn">Subscribe</button>
                    <button class="btn">Watch Vedio</button>
                </div>
            </div>

           
        </div>
    </section>
    <section class="section" >
        <div class="paras">
        <p class="sectionTag text-big">The end of search is here</p>
        <p class="sectionSubTag text-small">
          The braod categories of soil are present in our country which are having the unique and specific charachteristics of growing a certain type of the crop or plants .
          Thus to grow efficiently thorough knowledge of soil becomes mandatory . Here is your Agrimitra who does this .  
        </div>
        <div class="thumbnail">
            <img src="img/sec1.webp" alt="Laptop image" class="imgFluid">
        </div>
    </section>
    <section class="section  section-left" id="about">
        <div class="paras">
        <p class="sectionTag text-big">Pesticides and Fertilizers</p>
        <p class="sectionSubTag text-small">The use and the information regarding pesticides as well as fertilizers that helps in increasing the fertility of the soil as well as pesticides which protects the crops from different pests and worms is also mandatory . After anaysing your soil we will provide you with the detailed information of which type of fertilizers and pesticides are needed in the genuine rate .</div>
        <div class="thumbnail">
            <img src="img/sec2.jpg" alt="Laptop image" class="imgFluid">
        </div>
    </section>
    

    <section class="contact" id="contact" >
        <h1 class="text-center">Contact Us</h1>
        <div class="form">
           <input class="form-input" type="text" name="name" id="name" placeholder="Enter your name"><br>
           <input class="form-input" type="text" name="phone" id="phone" placeholder="Enter your phone number"><br>
           <input class="form-input" type="text" name="email" id="email" placeholder="Enter your e-mail"><br>
           <textarea class="form-input"  name="text" id="" cols="30" rows="10" class="text" placeholder="Elaborate your concern"></textarea><br>
           <button class="btn btn-sm btn-dark">Submit</button>  
        </div>
    </section>
    <footer class="background">
        <p class="text-footer">
        Copyright &copy; 2027  www.iEducate.com- All rights reserved
        </p>
    </footer>
    <script src="resp.js"></script>
    
    
</body>
</html>