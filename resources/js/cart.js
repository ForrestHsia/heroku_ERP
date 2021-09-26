function initCart(){
    return getCart()
}

function getCart(){
    var cart = Cookies.get('cart')
    // 以下是寫法1，還是太長了
    // if (!cart){
    //     cart = {}
    // }else{
    //     cart = JSON.parse(cart)
    // }
    // return cart
    //

    
    //以下是寫法2
    return (!cart) ? {} : JSON.parse(cart)
}

function saveCart(cart){
    Cookies.set('cart', JSON.stringify(cart))
}

function updateProductToCart(productId,newQuantity){
    var cart = getCart()
    cart[productId] = newQuantity
    saveCart(cart)
}

function addProductToCart(productId,quantity){
    var cart = getCart()
    var currentQuantity = parseInt(cart[productId]) || 0
    var addQuantity = parseInt(quantity) || 0
    var newQuantity = currentQuantity + addQuantity
    updateProductToCart(productId,newQuantity)
}


function alertProductQuantity(productId){
    // 測試性功能，後續delete
    var cart = getCart()
    var quantity = parseInt(cart[productId]) || 0
    alert(quantity)
}


function initAddToCart(productId){
var addToCartBtn = document.querySelector('#addToCart');
    var productName = '{{$product["name"]}}'
    
    if(addToCartBtn) {
        addToCartBtn.addEventListener('click',function(){
            var quantityInput = document.querySelector('input[name="quantity"]');
            if(quantityInput){
                addProductToCart(productId, quantityInput.value)
                alertProductQuantity(productId)
                // var quantity = parseInt(Cookies.get('quantity')) || 0
                // var addQuantity = parseInt(quantityInput.value) || 0
                // var newQuantity = quantity + addQuantity
                // Cookies.set('quantity',newQuantity)
                // alert("購物車內有"+newQuantity+"件"+productName)
            }
        })
    }
}

export {initAddToCart}