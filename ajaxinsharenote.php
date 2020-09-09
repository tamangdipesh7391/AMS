<?php
include('config/db.php');
$sem = $_GET['sem'];
$result = $obj->Select("subject_table","*","semester",array($sem));





?>
<label>Select Subject</label>
				<select class="form-control" name="subject" required="">
					<option selected disabled>Select Subject</option>
					<?php 
					foreach ($result as $key => $value) { ?>
						<option value="<?=$value['subject']?>"><?=$value['subject']?></option>
					<?php }

					?>

				</select>