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
            <th scope='header'>ID</th>
            <th scope='header'>Đề thi</th>
            <th scope='header'>Tác giả</th>
            </tr>";
            foreach ($result as $row) {
                $this->output .= "<tr>";
                $this->output .=  "<td id='idx'>" .$row['id']. "</td>";
                $this->output .=  "<td id='name'><a href='view/examViewForm.php?subjectID=" . $row['id'] . "'target='_blank'>" . $row['name'] . "</a></td>";
                $this->output .=  "<td id='author'>" . $row['author'] . "</td>";
                $this->output .=  "</tr>";
            }
            $this->output .= "</table>";  
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
<form id="searchForm">
<input class="search" type="text" name="search" placeholder="Tìm kiếm">
</form>
<div class="result">
<?php
echo $output;
echo $search->output;
?>
</div>