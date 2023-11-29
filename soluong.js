
// function plusDivs(n, id) {
//     var x = document.getElementById(id);
//     var y = document.getElementById('sumPrice');
//     var a = "priceId=" + id;
//     var z = document.getElementById(a);
//     var price = new Number(z.innerHTML);
//     var sumPriceOld = new Number(y.innerHTML);
//     if (x.value.length < 4) {
//         var numberIndex = new Number(x.value);
//         numberIndex += n;
//         if (n > 0) {
//             sumPrice = sumPriceOld + price;
//         }
//         if (numberIndex > 0 && n < 0) {
//             sumPrice = sumPriceOld - price;
//         }
//         if (numberIndex < 1) {
//             numberIndex = 1;
//         }

//         x.value = numberIndex;
//     }
//     y.innerHTML = sumPrice;
// }
function soLuong(n) {
    var x = document.getElementById("soluong");
    var y = document.getElementById("sumPrice");
    var z = document.getElementById("price");
    var price = new Number(z.value)
    var sumPrice = new Number(y.innerHTML)
    var soluong = new Number(x.value);
    soluong += n;
    if (soluong < 1) {
        soluong = 1;
    }
    sumPrice = price * soluong;
    x.value = soluong;
    y.innerHTML = sumPrice;

}