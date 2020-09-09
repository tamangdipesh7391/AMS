<?php

$result = $obj->Select("submitted_assignment","*");

// echo "<pre>";
// print_r($result);
?>


<hr>
<div class="container">
	<ul class="nav">
			<li style="margin-right: 10px;margin-bottom: 10px;"><a href="<?=base_url()."share_notes.php"?>" class="btn btn-info">Share Notes</a></li>
			<li><a href="<?=base_url()."login.php"?>" class="btn btn-info">Create Assignment</a></li>
		</ul>
	<h2 class="mobile-text"> <b>Student's Assignment</b></h2>
<div class="col-md-4">
		<form action="" method="post" class="form-group">
			<div class="form-group">
				<!-- <label>Select Subject</label> -->
				<select class="form-control" name="subject" onchange="changeAssignment(this.value)">
						<option selected disabled>Select Subject</option>
						<option value="Operating System">Operating System</option>
						<option value="DBMS">DBMS</option>
						<option value="PHP">PHP</option>
						<option value="Numericals">Numericals</option>
						<option value="Software Engineering">Software Engineering</option>


					</select>

					
			</div>
		</form>
	</div>
	<div id="assignment">
			<table class="table table-bordered" >
				<tr>
					<th>SN</th>
					<th>Subject</th>
					<th>Assignment Title</th>
					<th>File</th>
					<th>Submitted By</th>
					<th>Submitted Date</th>
					<th>Deadline</th>

				</tr>
				<?php  foreach ($result as $key => $value) { ?>
					<tr>
						<td><?=++$key;?></td>
						<td><?=$value['subject']?></td>
						<td><?=$value['post_heading']?></td>
						<td>
							
							<?php 
								$data = explode(',', $value['docs']);
								if (sizeof($data)>1) {
									$i = 0;
									for ($i=0; $i < sizeof($data); $i++) {  ?>
									<a download  class="btn btn-success btn-sm" style="margin: 2px;" href="<?= base_url()."assets/submittedDocs/".$data[$i];?>" width="20%" >
										<!-- <img src="<?= base_url()."assets/submittedDocs/".$data[$i];?>" width="20%"  alt="File"> -->
										Download
									</a>
									<?php }
								}else{ ?>
									<a download  class="btn btn-success btn-sm" style="margin: 2px;" href="<?= base_url()."assets/submittedDocs/".$value['docs'];?>" width="20%">Dodwnload</a>
								<?php }
								?>
						</td>
						<td><?=$value['username']?></td>
						<td><?=$value['submitted_Date']?></td>
						<td><?=$value['deadline']?></td>

					</tr>
				<?php } ?>
			</table>
</div>
</div>
