// Exempel på JavaScript för att hantera interaktivitet som att lägga till produkter i kundvagnen, sökfunktionen osv.
// Denna kod skulle vanligtvis integreras i HTML-dokumentet i en <script> -tagg eller separat JavaScript-fil.

// Exempel på kod för att lägga till produkt i kundvagnen
document.querySelectorAll('.product-card button').forEach(button => {
    button.addEventListener('click', addToCart);
});

function addToCart(event) {
    const product = event.target.parentElement;
    const productName = product.querySelector('h3').textContent;
    alert(`Lade till ${productName} i kundvagnen.`);
}
