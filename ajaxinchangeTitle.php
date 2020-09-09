<?php
include('config/db.php');
$sid = $_GET['subject'];
$result = $obj->Select("create_assignment","*","subject",array($sid));
?>

<select class="form-control" >
	<option selected disabled>Select Title</option>
	<?php foreach ($result as $key => $value) { ?>
		<option value="<?=$value['post_heading']?>"><?=$value['post_heading']?></option>
	<?php } ?>
</select>