// import { initAddToCart } from './cart';


function initAddToCart(){

    var addToCartBtn = document.querySelector('#addToCart');
    if (addToCartBtn) {
        addToCartBtn.addEventListener('click',function(){
            var quantityInput = document.querySelector('input[name="quantity"]');
            if(quantityInput){
                var quantity = parseInt(Cookies.get("quantity")) || 0
                var addQuantity = parseInt(quantityInput.value) || 0
                var newQuantity = quantity + addQuantity
                Cookies.set("quantity", newQuantity)
                alert('購物車內有' + newQuantity + '件' + productName)
            }
        })
    }
}

// function printMessage( message ){
//     document.getElementById('message').innerHTML = message
// }
//window.printMessage = printMessage
//window.initAddToCart = initAddToCart