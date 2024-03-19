// Define a global variable to store the cart items
let cart = [];

// Function to add an item to the cart
function addToCart(productName) {
    cart.push(productName);
    updateCart();
}

// Function to update the cart display
function updateCart() {
    // Find the cart display element
    let cartDisplay = document.getElementById('cart-display');
    
    // Clear the previous content of the cart display
    cartDisplay.innerHTML = '';
    
    // Loop through each item in the cart and display it
    cart.forEach(item => {
        let cartItem = document.createElement('li');
        cartItem.textContent = item;
        cartDisplay.appendChild(cartItem);
    });
}