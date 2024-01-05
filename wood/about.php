<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="about.css">
</head>
<body>

    <h1>ABOUT US</h1>

    <div class="card">
        <img class="card-img" src="about/pi3.jpg" alt="Card Image">
        <div class="card-content">
            <h2>OUR PURPOSE</h2>
            <p> At Wooden Interprise, our purpose is to redefine the way you experience wooden goods. We believe in the beauty of natural materials and the artistry of skilled hands, and it reflects in every piece we create. Our mission is to seamlessly blend functionality with aesthetics, offering you products that not only serve a purpose but also tell a story.</p>
        </div>
    </div>

    <div class="card">
        <img class="card-img" src="about/pi4.webp" alt="Card Image">
        <div class="card-content">
            <h2>UNIQUENESS OF OUR PRODUCT</h2>
            <p>What sets our wooden creations apart is the meticulous attention to detail and the passion infused into every step of the crafting process. Each item is a testament to the unique characteristics of the wood it's made from, ensuring that no two pieces are exactly alike. We embrace the imperfections and variations, turning them into distinctive features that make our products truly one-of-a-kind.</p>
        </div>
    </div>

    <div class="card">
        <img class="card-img" src="about/pi5.jpg" alt="Card Image">
        <div class="card-content">
            <h2>THE STORY BEHIND WOODEN INTERPRISE</h2>
            <p>Our journey began with a deep-rooted love for woodworking and a vision to share the timeless appeal of wooden items with the world. Every product at [Your Company Name] is born out of this passion, combined with a commitment to sustainability. We source our wood responsibly, often using reclaimed or repurposed materials, to minimize our impact on the environment.</p>
        </div>
    </div>

</body>
</html>
<?php
} else {
    // User is not logged in, redirect to index.php
    header("Location: index.php");
    exit();
}
?>