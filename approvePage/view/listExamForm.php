<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>
<?php
class listExamForm {
    public function onChooseSubject($_subject){
        
    }
    public function onClickExamView() {

    }
}
?>
<html>
<div id="subjectList">
<label for="subs">Môn đang duyệt:</label>
<input type="text" list="subject" name="subject"> 
    <datalist id="subject">
        <option value="Toán">
        <option value="Lý">
        <option value="Hóa">
        <option value="Sinh">
        <option value="Sử">
        <option value="Địa">
        <option value="Anh">
        <option value="GDCD">
    </datalist>
</div>
<script>
    $(document).on('change', 'input', function(){
        var options = $('datalist')[0].options;
        var val = $(this).val();
        for (var i = 0; i < options.length; i++){
            if (options[i].value === val) {
                $("#listExamOfSubject").load("model/pendingExamDB.php", {subject: val}, doneTask());
                break;
            }
        }
    });
    function doneTask(){}
</script>
<div id="listExamOfSubject">

</div>
</html>