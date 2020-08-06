var questionAmount = 40;
var subject = document.getElementById("subject").textContent;
var examName = document.getElementById("name").textContent;
var author = document.getElementById("author").textContent;
var usrLv = document.getElementById("usrLv").textContent;
var typeEx = "";
if (usrLv == 1) typeEx = document.getElementById("typeEx").textContent;

var confirmVar = 0;

if (subject == "Toán" || subject == "Anh") questionAmount = 50;

function next() {
    var quantity_temp = document.getElementById("questionOrder").innerText;
    var quantity_int = parseInt(quantity_temp, 10) + 1;

    if (quantity_int > questionAmount) {
        document.getElementById("questionOrder").innerHTML = questionAmount;
        document.getElementById("submit").value = "Hoàn thành";
        confirmVar = 1;
        return;

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
    confirmVar = 0;
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
        var question = $("#questionOrder").text();
        var content = $('textarea#question').val();
        var ansA = $("#ansA").val();
        var ansB = $("#ansB").val();
        var ansC = $("#ansC").val();
        var ansD = $("#ansD").val();
        var key = $("select#key").val();
        
        content = content.replace("+","[plus]");
        ansA = ansA.replace("+","[plus]");
        ansB = ansB.replace("+","[plus]");
        ansC = ansC.replace("+","[plus]");
        ansD = ansD.replace("+","[plus]");

        var dataString = 'question=' + question + '&content=' + content + '&ansA=' + ansA + '&ansB=' + ansB + '&ansC=' + ansC + '&ansD=' + ansD + '&key=' + key + '&subject=' + subject + '&author=' + author + '&name=' + examName + '&submit=' + confirmVar;
        if (usrLv == 1) dataString = 'question=' + question + '&content=' + content + '&ansA=' + ansA + '&ansB=' + ansB + '&ansC=' + ansC + '&ansD=' + ansD + '&key=' + key + '&subject=' + subject + '&author=' + author + '&name=' + examName + '&submit=' + confirmVar + '&typeEx=' + typeEx;
        console.log(dataString);
        $.ajax({
            type: 'post',
            url: '../controller/post.php',
            data: dataString,
            success: function() {
                if (confirmVar == 0) next();
                else { popUpShow(); }
            }
        });
    });
});