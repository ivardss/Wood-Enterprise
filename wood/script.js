

const hamburgerMenu = document.querySelector(".hamburger-menu");
const container = document.querySelector(".container");

hamburgerMenu.addEventListener("click", () => {
    container.classList.toggle("active");
});


let cart = [];
let isCartOpen = false;

function addToCart(itemName, itemPrice) {
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

    cartItemsElement.innerHTML = '';

    let total = 0;
    cart.forEach(item => {
        const listItem = document.createElement('li');
        listItem.textContent = `${item.name} x${item.quantity} - $${item.price * item.quantity}`;
        cartItemsElement.appendChild(listItem);

        total += item.price * item.quantity;
    });

    cartTotalElement.textContent = total.toFixed(2);

    isCartOpen = true;
    document.getElementById('cart').classList.add('active');
}

function cancelOrder() {
    cart = [];
    updateCart();
    isCartOpen = false;
    document.getElementById('cart').classList.remove('active');
}

function placeOrder() {
    alert('Order placed successfully!');
    cart = [];
    updateCart();
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