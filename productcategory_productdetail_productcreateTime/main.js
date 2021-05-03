let carts = document.querySelectorAll('.add-cart');

let products = [ 
    {
        name: "Cotton flannel shirt",
        tag: "cottonflannelshirt",
        price: 299000,
        inCart: 0
    },
    {
        name: "Cotton white shirt",
        tag: "cottonwhiteshirt",
        price: 399000,
        inCart: 0
    },
    {
        name: "Cotton flannel shirt",
        tag: "cottonflannelshirt",
        price: 299000,
        inCart: 0
    },
    {
        name: "Cotton white shirt",
        tag: "cottonwhiteshirt",
        price: 399000,
        inCart: 0
    }
];

for(let i=0; i< carts.length; i++) {
    carts[i].addEventListener('click', () => {
        cartNumbers(products[i]);
        totalCost(products[i]);
    });
}

function onLoadCartNumbers() {
    let productNumbers = localStorage.getItem('cartNumbers');
    if( productNumbers ) {
        document.querySelector('.cart span').textContent = productNumbers;
    }
}

function cartNumbers(product, action) {
    let productNumbers = localStorage.getItem('cartNumbers');
    productNumbers = parseInt(productNumbers);

    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);

    if( action ) {
        localStorage.setItem("cartNumbers", productNumbers - 1);
        document.querySelector('.cart span').textContent = productNumbers - 1;
        console.log("action running");
    } else if( productNumbers ) {
        localStorage.setItem("cartNumbers", productNumbers + 1);
        document.querySelector('.cart span').textContent = productNumbers + 1;
    } else {
        localStorage.setItem("cartNumbers", 1);
        document.querySelector('.cart span').textContent = 1;
    }
    setItems(product);
}

function setItems(product) {
    // let productNumbers = localStorage.getItem('cartNumbers');
    // productNumbers = parseInt(productNumbers);
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);

    if(cartItems != null) {
        let currentProduct = product.tag;
    
        if( cartItems[currentProduct] == undefined ) {
            cartItems = {
                ...cartItems,
                [currentProduct]: product
            }
        } 
        cartItems[currentProduct].inCart += 1;

    } else {
        product.inCart = 1;
        cartItems = { 
            [product.tag]: product
        };
    }

    localStorage.setItem('productsInCart', JSON.stringify(cartItems));
}

function totalCost( product, action ) {
    let cart = localStorage.getItem("totalCost");

    if( action) {
        cart = parseInt(cart);

        localStorage.setItem("totalCost", cart - product.price);
    } else if(cart != null) {
        
        cart = parseInt(cart);
        localStorage.setItem("totalCost", cart + product.price);
    
    } else {
        localStorage.setItem("totalCost", product.price);
    }
}
function changeValue( e){
    // localStorage.setItem("cartNumbers", val);
    // var cartItems = JSON.parse(cartItems);
    console.log(e.target)
}


function displayCart() {
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);

    let cart = localStorage.getItem("totalCost");
    cart = parseInt(cart);

    let productContainer = document.querySelector('.products');
    
    if( cartItems && productContainer ) {
        productContainer.innerHTML = '';
        Object.values(cartItems).map( (item, index) => {
            productContainer.innerHTML += 
            `<div class="product"><ion-icon name="close-circle"></ion-icon><img src="./store/${item.tag}.jpg" />
                <span class="sm-hide item-name-long">${item.name}</span>
                
            </div>
            
            <div class="price sm-hide">${item.price} VND</div>
            <div class="quantity">
                <ion-icon class="decrease " name="arrow-dropleft-circle"></ion-icon>
                    <form style="width:30%"><input type="text" style="width:100%" placeholder=${item.inCart} value=${item.inCart} id="changeQuantity" class="iinputQuantity"><span></span></input></form>
                <ion-icon class="increase" name="arrow-dropright-circle"></ion-icon>   
            </div>
            <div class="total">${item.inCart * item.price} VND</div>`;
        });
        var sub_total = cart + ' VND';
        var other_total = parseInt(cart) + ' VND';
        document.getElementById("sub_total").innerHTML = sub_total;
        document.getElementById("other_total").innerHTML = other_total;
        deleteButtons();
        Quantity();
    }
}   

function checkCoupon(other_total){
    var coupon_code = document.getElementById("coupon_code").value;
    if (coupon_code == "COSC2430-HD") {
        let cart = localStorage.getItem("totalCost");
        cart = parseInt(cart);
        var mycoupon = 20 + '%';
        totalcart = cart - (cart * (20/100)) + ' VND';
        document.getElementById("mycoupon").innerHTML = mycoupon;
        document.getElementById("other_total").innerHTML = totalcart;
    } else if (coupon_code == "COSC2430-DI"){
        let cart = localStorage.getItem("totalCost");
        cart = parseInt(cart);
        var mycoupon = 10 + '%';
        totalcart = cart - (cart * (10/100)) + ' VND';
        document.getElementById("mycoupon").innerHTML = mycoupon;
        document.getElementById("other_total").innerHTML = totalcart;
    }
}

function Quantity() {
    let decreaseButtons = document.querySelectorAll('.decrease');
    let increaseButtons = document.querySelectorAll('.increase');
    let currentQuantity = 0;
    let currentProduct = '';
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);

    for(let i=0; i < increaseButtons.length; i++) {
        decreaseButtons[i].addEventListener('click', () => {
            document.getElementById("mycoupon").innerHTML = "0%";
            console.log(cartItems);
            currentQuantity = decreaseButtons[i].parentElement.querySelector('span').textContent;
            console.log("alo: ", currentQuantity);
            currentProduct = decreaseButtons[i].parentElement.previousElementSibling.previousElementSibling.querySelector('span').textContent.toLocaleLowerCase().replace(/ /g,'');
            console.log(currentProduct);
            console.log("alo: ", currentProduct);
            if( cartItems[currentProduct].inCart > 1 ) {
                cartItems[currentProduct].inCart -= 1;
                cartNumbers(cartItems[currentProduct], "decrease");
                totalCost(cartItems[currentProduct], "decrease");
                localStorage.setItem('productsInCart', JSON.stringify(cartItems));
                displayCart();
            }
        });

        increaseButtons[i].addEventListener('click', () => {
            document.getElementById("mycoupon").innerHTML = "0%";
            console.log(cartItems);
            currentQuantity = increaseButtons[i].parentElement.querySelector('span').textContent;
            console.log(currentQuantity);
            currentProduct = increaseButtons[i].parentElement.previousElementSibling.previousElementSibling.querySelector('span').textContent.toLocaleLowerCase().replace(/ /g,'');
            console.log(currentProduct);
            valueCart = parseInt(cartItems[currentProduct].inCart);
            valueCart += 1;
            cartItems[currentProduct].inCart = valueCart;
            cartNumbers(cartItems[currentProduct]);
            totalCost(cartItems[currentProduct]);
            localStorage.setItem('productsInCart', JSON.stringify(cartItems));
            displayCart();
        });
    }}

function changeQuantity() {
    let valueChange = getElementById('changeQuantity').value
    console.log(valueChange);    
    }

function deleteButtons() {
    let deleteButtons = document.querySelectorAll('.product ion-icon');
    let productNumbers = localStorage.getItem('cartNumbers');
    let cartCost = localStorage.getItem("totalCost");
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);
    let productName;
    console.log(cartItems);

    for(let i=0; i < deleteButtons.length; i++) {
        deleteButtons[i].addEventListener('click', () => {
            productName = deleteButtons[i].parentElement.textContent.toLocaleLowerCase().replace(/ /g,'').trim();
           
            localStorage.setItem('cartNumbers', productNumbers - cartItems[productName].inCart);
            localStorage.setItem('totalCost', cartCost - ( cartItems[productName].price * cartItems[productName].inCart));

            delete cartItems[productName];
            localStorage.setItem('productsInCart', JSON.stringify(cartItems));

            displayCart();
            onLoadCartNumbers();
        })
    }
}

onLoadCartNumbers();
displayCart();

const cbox = document.querySelectorAll(".iinputQuantity");
console.log("A: ",cbox);
let cartItems = localStorage.getItem('productsInCart');
cartItems = JSON.parse(cartItems);
let cartNumbersTotal = localStorage.getItem('cartNumbers');
let cartTotalCost = localStorage.getItem("totalCost");
 for (let i = 0; i < cbox.length; i++) {
     cbox[i].addEventListener("change", function(e) {
        // console.log(e.target.placeholder)
        Object.values(cartItems).map( (item, index)=>{
            console.log("aaa: ", Object.keys(cartItems))
            console.log(e.target.placeholder, item.inCart, e.target.placeholder == item.inCart)
            if(e.target.placeholder == item.inCart){
                console.log(item.tag)
                var product = document.querySelector('.item-name-long').textContent.toLocaleLowerCase().replace(/ /g,'');
                console.log("product: ",product)
                cartItems[item.tag].inCart = parseInt(e.target.value);
                console.log(cartItems[product].inCart)
                console.log(cartNumbersTotal);
                console.log(e.target.value);
                console.log(e.target.placeholder);
                cartNumbersTotal = parseInt(cartNumbersTotal) + (parseInt(e.target.value) -  parseInt(e.target.placeholder));
                console.log(cartNumbersTotal);
                cartTotalCost = parseInt(cartTotalCost) +  (((parseInt(e.target.value) -  parseInt(e.target.placeholder))*cartItems[item.tag].price));
                localStorage.setItem('productsInCart', JSON.stringify(cartItems));
                localStorage.setItem('cartNumbers', cartNumbersTotal);
                localStorage.setItem('totalCost', cartTotalCost);
            }
            // console.log("a: ", cartItems['cottonwhiteshirt'].inCart)
            //console.log("getItem: ", localStorage.getItem("productsInCart"))
        })
     });
 }


