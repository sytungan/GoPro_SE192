function next() {
    var quantity_temp = document.getElementById("questionOrder").innerText;
    var quantity_int = parseInt(quantity_temp, 10) + 1;
    if (quantity_int > 50) document.getElementById("questionOrder").innerHTML = "50";
    else document.getElementById("questionOrder").innerHTML = quantity_int.toString();
    document.getElementById('question').value = ""
    document.getElementById('ansA').value = "";
    document.getElementById('ansB').value = "";
    document.getElementById('ansC').value = "";
    document.getElementById('ansD').value = "";
    document.getElementById('key').value = ""

}

function previous() {
    var quantity_temp = document.getElementById("questionOrder").innerText;
    var quantity_int = parseInt(quantity_temp, 10) - 1;
    if (quantity_int < 1) document.getElementById("questionOrder").innerHTML = "1";
    else document.getElementById("questionOrder").innerHTML = quantity_int.toString();

    document.getElementById('question').value = ""
    document.getElementById('ansA').value = "";
    document.getElementById('ansB').value = "";
    document.getElementById('ansC').value = "";
    document.getElementById('ansD').value = "";
    document.getElementById('key').value = ""
}


$(function() {
    $('form').on('submit', function(e) {
        e.preventDefault();
        var question = $("#questionOrder").text();
        var content = $('textarea#question').val();
        var ansA = $("#ansA").val();
        var ansB = $("#ansB").val();
        var ansC = $("#ansC").val();
        var ansD = $("#ansD").val();
        var key = $("select#key").val();




        var dataString = 'question=' + question + '&content=' + content + '&ansA=' + ansA + '&ansB=' + ansB + '&ansC=' + ansC + '&ansD=' + ansD + '&key=' + key;
        console.log(dataString);
        $.ajax({
            type: 'post',
            url: 'post.php',
            data: dataString,
            success: function() {
                alert('form was submitted');
            }
        });

    });
});