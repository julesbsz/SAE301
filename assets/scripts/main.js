const cart = document.getElementById('cart-button');

const path = window.location.pathname
switch (path) {
    case "/panier":
        cart.style.display = "none";
        break;

    case "/paiement":
        cart.style.display = "none";
        break;

    default:
        cart.style.display = "flex";
        break;
}

cart.addEventListener('click', function() {
    document.location.href = '/panier';
});
