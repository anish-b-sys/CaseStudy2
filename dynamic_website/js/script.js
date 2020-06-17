
total = 0 //total price will show in my invoice

//add product to cart
function addProductToCart(e) {
    cart = $("#cartList");
    name1 = $(e).attr("name");
    price = $(e).attr("price");
    qty = $(e).prev().val();

    productTotal = Math.round((price)*Number(qty) * 100) / 100; // rounds to 2 d.p

    cart.append("<p>Name: "+name1+"</p>"); // seperates name /price + qty
    cart.append("<p>Price: $"+ productTotal +" Quantity: "+qty+"</p>");
    total = Math.round((total + Number(price)*Number(qty)) * 100) / 100;
    rotateCart() // cart trigger
}

//Popup Invoice

function invoice() {
    //Take everything from shopping cart

    $("#invoiceContent").empty();
    $("#invoiceContent").append($("#cartList").children());

    if (total > 300){ // shipping cost trigger
        $("#invoiceContent").append("<p>Shipping cost: $0</p>");
    }
    else if(total <=300){
        $("#invoiceContent").append("<p>Shipping cost: $5</p>");
        total = total + 5;
    }
    $("#invoiceContent").append("<p>Total: "+total+"</p>");
}



// Rotates cart icon right and left 2 times after item added to cart
function rotateCart() {
    target = document.getElementById("rotateImg");
    i=0;

    changeDir = false;
    iterations = 1;

    var id = setInterval(frame, 4);

    function frame(){

        if (iterations ==1 || iterations ==3){
            if(i==0 && changeDir == true ) {
                iterations +=1;
                changeDir = false;
            }
            else if(i==45 && changeDir == false){
                changeDir = true;}
            else if(changeDir == true){
                i = i-1
            }
            else{
                i=i+1;
            }}
        else if (iterations ==2 || iterations ==4){
            if(i==0 && changeDir == true ) {
                iterations +=1;
                changeDir = false;
            }
            else if(i==-45 && changeDir == false){
                changeDir = true;}
            else if(changeDir == true){
                i = i+1
            }
            else{
                i=i-1;
            }}
        else {
            clearInterval(id);
        }
        target.style.transform = 'rotate('+i+'deg)';
    }
}


//jQuery animations
function moveRight(){ // right
    $('#move').animate({right:'30%'}, 1000, moveLeft);
}
function moveLeft(){// left
    $('#move').animate({right:'89%'}, 1000, moveRight);
}