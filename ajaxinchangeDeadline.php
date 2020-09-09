<?php
include('config/db.php');
$title = $_GET['title'];
$result = $obj->Select("create_assignment","*","post_heading",array($title));
?>
<label>Deadline </label>
<input type="date" name="deadline"  class="form-control" value="<?=$result[0]['submissionDate']?>">