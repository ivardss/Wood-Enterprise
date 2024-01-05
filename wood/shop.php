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
    <title>Home</title>

            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="" href="style.css">
</head>
<body>
    

    <button id="home-button" onclick="goToHome()">Home</button>
   
    <h1 class="text-center">CHAIR'S</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 py-5">

        <!-- Card 1 -->
        <div class="col">
            <div class="card">
                <img src="images/1chair.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">SUNNY CARVED WOODEN</h5>
                    <p class="card-text">We are involved in delivering a wide series of Carved Wooden Chair.</p>
                </div>
                <div class="mb-5 d-flex justify-content-around">
                    <h3>250$</h3>
                    <button class="btn btn-primary" onclick="addToCart('Sunny Carved Wooden', 250)">Buy Now</button>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col">
            <div class="card">
                <img src="images/2chair.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">CLASSIC DINER UPHOLSTERED</h5>
                    <p class="card-text">The perfect modern dining chair, with so many ways to make it your own.</p>
                </div>
                <div class="mb-5 d-flex justify-content-around">
                    <h3>300$</h3>
                    <button class="btn btn-primary" onclick="addToCart('Classic Diner Upholstered', 300)">Buy Now</button>
                </div>
            </div>
        </div>

                <!-- Card 3 -->
                <div class="col">
            <div class="card">
                <img src="images/3chair.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">WOODEN ROASTERY ARM REST</h5>
                    <p class="card-text">Arm Chair for Dining and living room with Handmade canning work and upholstered.</p>
                </div>
                <div class="mb-5 d-flex justify-content-around">
                    <h3>100$</h3>
                    <button class="btn btn-primary" onclick="addToCart('Wooden Roastery Arm Rest', 100)">Buy Now</button>
                </div>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="col">
            <div class="card">
                <img src="images/4chair.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">CARVING ARM REST CHAIR</h5>
                    <p class="card-text">Sheesham seat upholstered and Carving panel Comfortable made with fabric.</p>
                </div>
                <div class="mb-5 d-flex justify-content-around">
                    <h3>180$</h3>
                    <button class="btn btn-primary" onclick="addToCart('Carving Arm Rest Chair', 180)">Buy Now</button>
                </div>
            </div>
        </div>

        <!-- Card 5 -->
        <div class="col">
            <div class="card">
                <img src="images/5chair.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">ASMINE DINING CHAIR</h5>
                    <p class="card-text">Chair with Jute fabric upholstery on seat with designer leg and tilted back.</p>
                </div>
                <div class="mb-5 d-flex justify-content-around">
                    <h3>200$</h3>
                    <button class="btn btn-primary" onclick="addToCart('Asmine Dining Chair', 200)">Buy Now</button>
                </div>
            </div>
        </div>

        <!-- Card 6 -->
        <div class="col">
            <div class="card">
                <img src="images/6chair.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">ROCOCO DESIGN WOODEN</h5>
                    <p class="card-text">This chair is handmade using premium quality wood by skilled craftsmen.</p>
                </div>
                <div class="mb-5 d-flex justify-content-around">
                    <h3>800$</h3>
                    <button class="btn btn-primary" onclick="addToCart('Rococo Design Wooden', 800)">Buy Now</button>
                </div>
            </div>
        </div>
    </div>
</div>

<h1 class="text-center">TABLE'S</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4 py-5">

        <div class="col">
    <div class="card">
        <img src="images/7chair.webp" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">MERRITT ROUND SOLID WOOD</h5>
            <p class="card-text">A sculptural showstopper inspired by Italian design.</p>
        </div>
        <div class="mb-5 d-flex justify-content-around">
            <h3>650$</h3>
            <button class="btn btn-primary" onclick="addToCart('MERRITT ROUND SOLID WOOD', 650)">Add to Cart</button>
        </div>
    </div>
</div>

<div class="col">
    <div class="card">
        <img src="images/8chair.webp" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">FONTENELLE EXENDTABLE ROUND</h5>
            <p class="card-text">The pedestal base of this table was inspired by timber frame architecture.</p>
        </div>
        <div class="mb-5 d-flex justify-content-around">
            <h3>190$</h3>
            <button class="btn btn-primary" onclick="addToCart('FONTENELLE EXENDTABLE ROUND', 190)">Add to Cart</button>
        </div>
    </div>
</div>


<div class="col">
    <div class="card">
        <img src="images/9chair.webp" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">ELLIPSE ROUND STABLE</h5>
            <p class="card-text">This Ellipse Round Wood Table is a great complimentary piece.</p>
        </div>
        <div class="mb-5 d-flex justify-content-around">
            <h3>850$</h3>
            <button class="btn btn-primary" onclick="addToCart('ELLIPSE ROUND STABLE', 850)">Add to Cart</button>
        </div>
    </div>
</div>
<div class="col">
    <div class="card">
        <img src="images/2table.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">ALVEA 8 SEATER SQUARE</h5>
            <p class="card-text">Modern Contemporary style dining set with wooden base in walnut.</p>
        </div>
        <div class="mb-5 d-flex justify-content-around">
            <h3>1200$</h3>
            <button class="btn btn-primary" onclick="addToCart('ALVEA 8 SEATER SQUARE', 1200)">Add to Cart</button>
        </div>
    </div>
</div>

<div class="col">
    <div class="card">
        <img src="images/1table.webp" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">MID-CENTURY MODERN</h5>
            <p class="card-text">Mid-century modern design was at its height from the 1930s through the 1960s.</p>
        </div>
        <div class="mb-5 d-flex justify-content-around">
            <h3>700$</h3>
            <button class="btn btn-primary" onclick="addToCart('MID-CENTURY MODERN', 700)">Add to Cart</button>
        </div>
    </div>
</div>

<div class="col">
    <div class="card">
        <img src="images/4table.webp" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">MARBLE DINING TABLE</h5>
            <p class="card-text">A handsome walnut finish distinguishes this extension table.</p>
        </div>
        <div class="mb-5 d-flex justify-content-around">
            <h3>600$</h3>
            <button class="btn btn-primary" onclick="addToCart('MARBLE DINING TABLE', 600)">Add to Cart</button>
        </div>
    </div>
</div>


       

    </div>
</div>
<h1 class="text-center">COUCHS</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4 py-5">

   <div class="col">
    <div class="card">
        <img src="images/1couch.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">ONBAY CONVERTIBLE</h5>
            <p class="card-text">The cushions you sit on are nice and firm. You'll never have to worry about sinking in.</p>
        </div>
        <div class="mb-5 d-flex justify-content-around">
            <h3>400$</h3>
            <button class="btn btn-primary" onclick="addToCart('ONBAY CONVERTIBLE', 400)">Add to Cart</button>
        </div>
    </div>
</div>

<div class="col">
    <div class="card">
        <img src="images/2couch.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">NORDIC JAPANESE STYLE</h5>
            <p class="card-text">Japanese Style Solid Wood Sofa Small Apartment Double Three Seats Fabric sofa.</p>
        </div>
        <div class="mb-5 d-flex justify-content-around">
            <h3>450$</h3>
            <button class="btn btn-primary" onclick="addToCart('NORDIC JAPANESE STYLE', 450)">Add to Cart</button>
        </div>
    </div>
</div>

<div class="col">
    <div class="card">
        <img src="images/3couch.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">MODERN MINIMALIST</h5>
            <p class="card-text">Solid Wood Sofa Combination Fabric five-Seat Small New Chinese Style Sofa.</p>
        </div>
        <div class="mb-5 d-flex justify-content-around">
            <h3>1000$</h3>
            <button class="btn btn-primary" onclick="addToCart('MODERN MINIMALIST', 1000)">Add to Cart</button>
        </div>
    </div>
</div>

<div class="col">
    <div class="card">
        <img src="images/4couch.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">TEAK WOOD LEATHERITE</h5>
            <p class="card-text">Finely crafted from the best quality teak wood and superior quality.</p>
        </div>
        <div class="mb-5 d-flex justify-content-around">
            <h3>2800$</h3>
            <button class="btn btn-primary" onclick="addToCart('TEAK WOOD LEATHERITE', 2800)">Add to Cart</button>
        </div>
    </div>
</div>

<div class="col">
    <div class="card">
        <img src="images/5couch.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">RED WOOD THICK</h5>
            <p class="card-text">Simple And Modern Wooden Sofa Cushion Set Red Solid Wood Thick Non-Slip Single.</p>
        </div>
        <div class="mb-5 d-flex justify-content-around">
            <h3>610$</h3>
            <button class="btn btn-primary" onclick="addToCart('RED WOOD THICK', 610)">Add to Cart</button>
        </div>
    </div>
</div>

<div class="col">
    <div class="card">
        <img src="images/6couch.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">FAS GRADE WHITE OAK</h5>
            <p class="card-text">The main frame is made of FAS-grade white oak imported with clear texture.</p>
        </div>
        <div class="mb-5 d-flex justify-content-around">
            <h3>430$</h3>
            <button class="btn btn-primary" onclick="addToCart('FAS GRADE WHITE OAK', 430)">Add to Cart</button>
        </div>
    </div>
</div>


        </div>
    </div>

    <h1 class="text-center">WALL ART'S AND CRAFT'S</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4 py-5">

        <div class="col">
    <div class="card">
        <img src="images/2art.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">AZTEC WOOD WALL ART</h5>
            <p class="card-text">The Aztecs created many stunning things and are known for their architectural brilliance.</p>
        </div>
        <div class="mb-5 d-flex justify-content-around">
            <h3>4500$</h3>
            <button class="btn btn-primary" onclick="addToCart('AZTEC WOOD WALL ART', 4500)">Add to Cart</button>
        </div>
    </div>
</div>

<div class="col">
    <div class="card">
        <img src="images/1art.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">OCEAN BLUE WALL ART</h5>
            <p class="card-text">This stunning pine wood wall art is hand-painted interior decor and will be perfect.</p>
        </div>
        <div class="mb-5 d-flex justify-content-around">
            <h3>7500$</h3>
            <button class="btn btn-primary" onclick="addToCart('OCEAN BLUE WALL ART', 7500)">Add to Cart</button>
        </div>
    </div>
</div>

<div class="col">
    <div class="card">
        <img src="images/3art.webp" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">SHINE OVER SNOWY MOUNTAIN</h5>
            <p class="card-text">Forest Nature Wilderness Wood Panels Modern Art Rustic Landscape.</p>
        </div>
        <div class="mb-5 d-flex justify-content-around">
            <h3>3500$</h3>
            <button class="btn btn-primary" onclick="addToCart('SHINE OVER SNOWY MOUNTAIN', 3500)">Add to Cart</button>
        </div>
    </div>
</div>

<div class="col">
    <div class="card">
        <img src="images/4art.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">CUSTOM SONG WALL ART</h5>
            <p class="card-text">Artist Claudia Moldovan turns your favorite tune into a stunning customized wooden art.</p>
        </div>
        <div class="mb-5 d-flex justify-content-around">
            <h3>5000$</h3>
            <button class="btn btn-primary" onclick="addToCart('CUSTOM SONG WALL ART', 5000)">Add to Cart</button>
        </div>
    </div>
</div>

<div class="col">
    <div class="card">
        <img src="images/5art.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">PEGASUS WALL</h5>
            <p class="card-text">The vector file 'Laser Cut Pegasus Wall Decor Free Vector' is a Coreldraw cdr.</p>
        </div>
        <div class="mb-5 d-flex justify-content-around">
            <h3>5300$</h3>
            <button class="btn btn-primary" onclick="addToCart('PEGASUS WALL', 5300)">Add to Cart</button>
        </div>
    </div>
</div>

<div class="col">
    <div class="card">
        <img src="images/6art.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">WOOD SQUARE DIMENSIONAL</h5>
            <p class="card-text">This grand Graphic Wood Wall Art adds pattern and texture to spaces in need of some drama.</p>
        </div>
        <div class="mb-5 d-flex justify-content-around">
            <h3>3900$</h3>
            <button class="btn btn-primary" onclick="addToCart('WOOD SQUARE DIMENSIONAL', 3900)">Add to Cart</button>
        </div>
    </div>
</div>
</div>

<h1 class="text-center">UTENSIL'S</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4 py-5">

        <div class="col">
    <div class="card">
        <img src="images/1ut.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">MUGS</h5>
            <p class="card-text">Raise your spirits with our Viking-Style Wood Mugs.</p>
        </div>
        <div class="mb-5 d-flex justify-content-around">
            <h3>100$</h3>
            <button class="btn btn-primary" onclick="addToCart('MUGS', 100)">Add to Cart</button>
        </div>
    </div>
</div>

<div class="col">
    <div class="card">
        <img src="images/2ut.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">PLATES</h5>
            <p class="card-text">Dinner plates and side plate sets handmade from wood.</p>
        </div>
        <div class="mb-5 d-flex justify-content-around">
            <h3>80$</h3>
            <button class="btn btn-primary" onclick="addToCart('PLATES', 80)">Add to Cart</button>
        </div>
    </div>
</div>

<div class="col">
    <div class="card">
        <img src="images/3ut.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">SPOONS</h5>
            <p class="card-text">Wooden Spoon Soup Ice Cream Dessert Honey Spoons Cutlery Utensils Tableware.</p>
        </div>
        <div class="mb-5 d-flex justify-content-around">
            <h3>50$</h3>
            <button class="btn btn-primary" onclick="addToCart('SPOONS', 50)">Add to Cart</button>
        </div>
    </div>
</div>

<div class="col">
    <div class="card">
        <img src="images/4ut.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">CHOPPING BOARD</h5>
            <p class="card-text">Williams Sonoma End-Grain Cutting Board Acacia.</p>
        </div>
        <div class="mb-5 d-flex justify-content-around">
            <h3>120$</h3>
            <button class="btn btn-primary" onclick="addToCart('CHOPPING BOARD', 120)">Add to Cart</button>
        </div>
    </div>
</div>

<div class="col">
    <div class="card">
        <img src="images/5ut.webp" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">TURNERS</h5>
            <p class="card-text">These tools are suitable for all cookware, including non-stick.</p>
        </div>
        <div class="mb-5 d-flex justify-content-around">
            <h3>45$</h3>
            <button class="btn btn-primary" onclick="addToCart('TURNERS', 45)">Add to Cart</button>
        </div>
    </div>
</div>

<div class="col">
    <div class="card">
        <img src="images/6ut.webp" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">MORTAR AND PESTLE</h5>
            <p class="card-text">A beautiful kitchenware this stunning mortar and pestle is exquisitely crafted.</p>
        </div>
        <div class="mb-5 d-flex justify-content-around">
            <h3>70$</h3>
            <button class="btn btn-primary" onclick="addToCart('MORTAR AND PESTLE', 70)">Add to Cart</button>
        </div>
    </div>
</div>


        </div>
    </div>
        <!-- Repeat similar structure for other cards -->
    </div>

    <!-- Cart Icon -->
    <div id="cart-icon" class="text-center">
        <i class="fas fa-shopping-cart fa-2x" onclick="toggleCart()"></i>
    </div>

    <!-- Shopping Cart -->
    <div id="cart">
        <h2>Shopping Cart</h2>
        <ul id="cart-items"></ul>
        <p>Total: $<span id="cart-total">0</span></p>
        <button class="btn btn-secondary" onclick="cancelOrder()">Cancel</button>
        <button class="btn btn-success" onclick="placeOrder()">Place Order</button>
    </div>
</div>
<!-- Add Font Awesome for the cart icon -->
<script src="https://kit.fontawesome.com/your-fontawesome-kit-id.js" crossorigin="anonymous"></script>
    
<style>
     body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #d5db76;
        }
.home-button {
            position: fixed;
            left: 20px;
            top: 20px;
            padding: 10px;
            background-color: #d5db76;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
.card-img-top{
    border-radius: 50px;
    padding: 20px;
}
.card{
    border-radius: 30px;
    box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;
}
.card-body{
    padding: 25px;
    margin-top: -15px;
}
.btn-primary{
    border-radius: 50px;
    width: 120px;
    background-color: #d5db76;
}
.btn-primary:hover{
    background-color: #534304;
    border: none;
}
h3,h5{
    color: rgb(206, 209, 15);
}

#cart-icon {
    position: fixed;
    top: 20px;
    right: 20px;
    cursor: pointer;
    z-index: 1000;
}
#cart {
    display: none;
    position: fixed;
    top: 70px;
    right: 20px;
    width: 300px;
    padding: 15px;
    background-color: #fff;
    border: 1px solid #ddd;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    z-index: 999;
}

#cart.active {
    display: block;
}

#cart-items {
    list-style: none;
    padding: 0;
}

#cart-items li {
    margin-bottom: 10px;
    border-bottom: 1px solid #ddd;
    padding-bottom: 5px;
}

#cart-total {
    font-weight: bold;
}

.card {
    border: none;
    transition: transform 0.2s;
}

.card:hover {
    transform: scale(1.05);
}
</style>
<script>
    let cart = [];
    let isCartOpen = false;

    function addToCart(itemName, itemPrice) {
        // Check if the item is already in the cart
        const existingItem = cart.find(item => item.name === itemName);

        if (existingItem) {
            existingItem.quantity++;
        } else {
            cart.push({ name: itemName, price: itemPrice, quantity: 1 });
        }

        updateCart();
    }

    function updateCart() {
        const cartItemsElement = document.getElementById('cart-items');
        const cartTotalElement = document.getElementById('cart-total');

        // Clear existing cart items
        cartItemsElement.innerHTML = '';

        // Update cart items and total
        let total = 0;
        cart.forEach(item => {
            const listItem = document.createElement('li');
            listItem.textContent = `${item.name} x${item.quantity} - $${item.price * item.quantity}`;
            cartItemsElement.appendChild(listItem);

            total += item.price * item.quantity;
        });

        // Update total in the cart
        cartTotalElement.textContent = total.toFixed(2);

        // Open the cart when items are added
        isCartOpen = true;
        document.getElementById('cart').classList.add('active');
    }

    function cancelOrder() {
        // Clear the cart
        cart = [];
        updateCart();

        // Close the cart
        isCartOpen = false;
        document.getElementById('cart').classList.remove('active');
    }

    function placeOrder() {
        // Implement logic to place the order (can be a server-side request)
        // For simplicity, just show an alert here
        alert('Order placed successfully!');
        // Clear the cart after placing the order
        cart = [];
        updateCart();

        // Close the cart
        isCartOpen = false;
        document.getElementById('cart').classList.remove('active');
    }

    function toggleCart() {
        isCartOpen = !isCartOpen;
        const cartElement = document.getElementById('cart');
        if (isCartOpen) {
            cartElement.classList.add('active');
        } else {
            cartElement.classList.remove('active');
        }
    }
    function goToHome() {
    window.location.href = 'home.php';
}
</script>

<!-- Add Bootstrap JS and Popper.js scripts if using Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php
} else {
    // User is not logged in, redirect to index.php
    header("Location: index.php");
    exit();
}
?>