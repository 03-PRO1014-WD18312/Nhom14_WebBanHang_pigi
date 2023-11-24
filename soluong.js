
function plusDivs(n, id) {
    var x = document.getElementById(id);
    if (x.value.length < 4) {
        var numberIndex = new Number(x.value);
        numberIndex += n;

        if (numberIndex < 1) {
            numberIndex = 1;
        }
        x.value = numberIndex;
    }
    var y = document.getElementById('sumPrice');
    var a = "priceId=" + id;
    var z = document.getElementById(a);
    var price = new Number(z.innerHTML);
    var sumPriceOld = new Number(y.innerHTML);
    sumPrice = price * numberIndex + sumPriceOld - price;
    y.innerHTML = sumPrice;
}

function sumPrice() {
    var x = document.getElementById('sumPrice');
}
