<?php
include $_SERVER['DOCUMENT_ROOT']."/GoPro_SE192/searchPage"."/controller/searchExamController.php";
class searchExamForm {
    public $output = '';
    public function __construct() {
        
    }
    public function onClickExamView() {
        
    }
    public function onSearchButtonClick() {
        $ctrl = new searchExamController($_GET['search']);
        $result = $ctrl->searchExam();
        if ($result != null) {
            $this->output .= "<br>";
            $this->output .= "<table>
            <tr>
            <th>ID</th>
            <th>Đề</th>
            <th>Tác giả</th>
            </tr>";
            foreach ($result as $row) {
                $this->output .= "<tr>";
                $this->output .=  "<td>" .$row['id']. "</td>";
                $this->output .=  "<td><a href='view/examViewForm.php?subjectID=" . $row['id'] . "'target='_blank'>" . $row['name'] . "</a></td>";
                $this->output .=  "<td>" . $row['author'] . "</td>";
                $this->output .=  "</tr>";
            }  
        }              
        else $this->output = "<h4> Không tìm thấy </h4>";
    }
}
$output = '';
$search = new searchExamForm();
if(isset($_GET['search'])) {
    if ($_GET['search']) {
        $search->onSearchButtonClick();
        $output = '';
    }
    else $output = "<h4>Vui lòng nhập lại từ khóa</h4>";
}
?>
<form>
<input class="search" type="text" name="search" placeholder="Tìm kiếm">
</form>
<div class="result">
<?php
echo $output;
echo $search->output;
?>
</div>