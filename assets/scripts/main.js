// let cookies = document.cookie;
//
// if(cookies.length > 0) {
//     cookies = JSON.parse(cookies);
// } else {
//     cookies = [];
// }
//
// let cart = 0;
// cookies.forEach(function(event) {
//     cart += cookies.event;
// });

const cart = document.getElementById('cart-button');

if(window.location.pathname === "/panier") {
    cart.style.display = "none";
} else {
    cart.style.display = "flex";
}

cart.addEventListener('click', function() {
    document.location.href = '/panier';
});