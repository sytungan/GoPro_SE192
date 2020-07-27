var questionAmount = 40;
var subject = document.getElementById("#subject").innerText;
var examName;
var author;

console.log(subject);

function next() {
    var quantity_temp = document.getElementById("questionOrder").innerText;
    var quantity_int = parseInt(quantity_temp, 10) + 1;
    console.log(questionAmount);
    if (quantity_int >= questionAmount) {
        document.getElementById("questionOrder").innerHTML = questionAmount;
        document.getElementById("submit").value = "Hoàn thành";

    } else {
        document.getElementById("questionOrder").innerHTML = quantity_int.toString();
        document.getElementById("submit").innerHTML = "submit";
    }
    document.getElementById('question').value = ""
    document.getElementById('ansA').value = "";
    document.getElementById('ansB').value = "";
    document.getElementById('ansC').value = "";
    document.getElementById('ansD').value = "";
    document.getElementById('key').value = "";
}


function previous() {
    var quantity_temp = document.getElementById("questionOrder").innerText;
    var quantity_int = parseInt(quantity_temp, 10) - 1;
    if (quantity_int < 1) document.getElementById("questionOrder").innerHTML = "1";
    else document.getElementById("questionOrder").innerHTML = quantity_int.toString();
    document.getElementById("submit").value = "Submit";
    document.getElementById('question').value = ""
    document.getElementById('ansA').value = "";
    document.getElementById('ansB').value = "";
    document.getElementById('ansC').value = "";
    document.getElementById('ansD').value = "";
    document.getElementById('key').value = ""
}

function popUpShow() {
    $('.popUpHover').show();
    $('.popupCloseButton').click(function() {
        $('.popUpHover').hide();
    });
}



$(function() {
    $('form').on('submit', function(e) {
        e.preventDefault();
        var submitType = $("#submit").val();
        if (submitType == "Tiếp tục") {
            subject = $("#subject").val();
            if (subject == "Toán") questionAmount = 50;
            else questionAmount = 40;
        } else {
            e.preventDefault();
            var question = $("#questionOrder").text();
            var content = $('textarea#question').val();
            var ansA = $("#ansA").val();
            var ansB = $("#ansB").val();
            var ansC = $("#ansC").val();
            var ansD = $("#ansD").val();
            var key = $("select#key").val();
            author = $("#name").val();
            subject = $("#subject").val();
            examName = $("#name").val();

            var dataString = 'question=' + question + '&content=' + content + '&ansA=' + ansA + '&ansB=' + ansB + '&ansC=' + ansC + '&ansD=' + ansD + '&key=' + key + '&subject=' + subject + '&author=' + author + '&name=' + examName;
            console.log(dataString);
            $.ajax({
                type: 'post',
                url: '../controller/post.php',
                data: dataString,
                success: function() {
                    next();
                }
            });
            if (question == 40) {
                console.log
                popUpShow();
            }
        }
    });
});