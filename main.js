
let productList = document.getElementsByClassName("product");
let mainDiv = document.getElementById("main");
let widthMainDiv = mainDiv.offsetWidth - 20;

[].forEach.call(productList, function (product) {
    product.style.height = 250 + "px";
    product.style.width = widthMainDiv + "px";
});


let productImageList = document.getElementsByClassName("productImage");

[].forEach.call(productImageList,function (image) {
    image.style.width = mainDiv.offsetWidth/3 +"px";
    image.style.height = 250 +"px";
});
