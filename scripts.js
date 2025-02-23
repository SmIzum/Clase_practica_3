let cart = [];

function addToCart(productId) {
    const product = products.find(p => p.id === productId);
    cart.push(product);
    displayCart();
}

function displayCart() {
    const cartContainer = document.getElementById('cart');
    if (cart.length === 0) {
        cartContainer.innerHTML = '<p>El carrito está vacío.</p>';
    } else {
        cartContainer.innerHTML = '';
        cart.forEach(product => {
            const productElement = document.createElement('div');
            productElement.className = 'cart-item';
            productElement.innerHTML = `
                <p>${product.name} - $${product.price.toFixed(2)}</p>
            `;
            cartContainer.appendChild(productElement);
        });
    }
}