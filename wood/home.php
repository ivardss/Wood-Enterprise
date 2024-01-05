<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
<body>
    
    
        <div class="container" id="container">
        <div class="navbar">
            <div class="menu">
                <h3 class="logo">WOODCARE</h3>
                <div class="hamburger-menu" id="hamburger-menu">
                    <div class="bar"></div>
                </div>
            </div>
        </div>
  

   
    <div class="main-container">
        <div class="main">
            <header>
                <div class="overlay">
                    <div class="gallery">
                        <span style="--i: 1"><img src="home/1F.jpg" alt=""></span>
                        <span style="--i: 2"><img src="home/coffee.jpg" alt=""></span>
                        <span style="--i: 3"><img src="home/ladle.jpg" alt=""></span>
                        <span style="--i: 4"><img src="home/mug.jpg" alt=""></span>
                        <span style="--i: 5"><img src="home/plates.jpg" alt=""></span>
                        <span style="--i: 6"><img src="home/cabinet.jpg" alt=""></span>
                        <span style="--i: 7"><img src="home/box.jpg" alt=""></span>
                        <span style="--i: 8"><img src="home/tables.jpg" alt=""></span>
                    </div>
                        
                    
                </div> 
            </header>
        </div>
    </div>
    <div class="links">
        <ul>
            <li><a href="home.php" style="--i: 0.05s" >Home</a></li>
            <li><a href="shop.php" style="--i: 0.1s" >Shop</a></li>
            <li><a href="about.php" style="--i: 0.15s" >ABOUT</a></li>
            <li><a href="ratings.php" style="--i: 0.2s" >RATINGS</a></li>
            <li><a href="logout.php" style="--i: 0.25s" >LOG OUT</a></li>
               
        </ul>
    </div>
</div>
</body>

<script src="script.js"></script>
</html>
<?php
} else {
    
    header("Location: index.php");
    exit();
}
?>