$("document").ready(function(){
    loadProd();
});

function loadProd() {
    //загружаю товары на страницу
    $.getJSON('products.json', function(data){
        console.log(data);
    });
}