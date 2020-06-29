function next() {
    var quantity_temp = document.getElementById("questionOrder").innerText;
    var quantity_int = parseInt(quantity_temp, 10) + 1;
    document.getElementById("questionOrder").innerHTML = quantity_int.toString();
}

function previous() {
    var quantity_temp = document.getElementById("questionOrder").innerText;
    var quantity_int = parseInt(quantity_temp, 10) - 1;
    document.getElementById("questionOrder").innerHTML = quantity_int.toString();
}