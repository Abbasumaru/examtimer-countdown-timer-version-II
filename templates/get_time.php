<?php
require('../../../config.php');
global $DB;

$id = $_POST['id'];

$result = $DB->get_record_select('course_modules','id=?', array($id));
$course_id = $result->course;

$timer = $DB->get_record_select('examtimer','course=?', array($result->course));
$examtimer = $timer->duedate;
echo date('r',$timer->duedate);

 exit();


?>
