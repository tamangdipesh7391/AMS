<?php 
// print_r($_SESSION);
$sem=$_SESSION['semester'];
$resultNote = $obj->Select("subject_table","*","semester",array($sem));
$result = $obj->Select("shared_notes","*","semester",array($sem));
// $result = $obj->Select("create_assignment  ORDER BY issueDate DESC ","*");


?>



<div class="container">
	<br>
	
		<ul class="nav">
			<li style="margin-right: 10px;margin-bottom: 10px;"><a href="<?=base_url()."view_assignment.php"?>" class="btn btn-info">View Students Assignment</a></li>
			<li><a href="<?=base_url()."submit_assignment.php"?>" class="btn btn-info">Submit Assignment</a></li>
		</ul>
	<h1 class="mobile-text"><b>Notes and Books</b></h1>
	<div class="col-md-4">
		<form action="" method="post" class="form-group">
			<div class="form-group">
				<!-- <label>Select Subject</label> -->
				<select class="form-control" name="subject" onchange="getNotes(this.value)">
						<option selected disabled>Select Subject</option>
						<?php 
					foreach ($resultNote as $key => $value) { ?>
						<option value="<?=$value['subject']?>"><?=$value['subject']?></option>
					<?php }

					?>


					</select>

					
			</div>
		</form>
	</div>
	<div id="notes">
		<table class="table table-bordered table-stripped">
				<tr>
					<td>SN</td>
					<!-- <td>Semester</td> -->
					<td>Subject</td>
					<td>File</td>
					<td>Shared Date</td>

				</tr>
				<?php foreach ($result as $key => $value) { ?>
					<tr>
					<td><?=++$key;?></td>
					<!-- <td><?=$value['semester']?></td> -->
					<td><?=$value['subject']?></td>
					<td>
										
										<?php 
											$data = explode(',', $value['docs']);
											if (sizeof($data)>1) {
												$i = 0;
												for ($i=0; $i < sizeof($data); $i++) {  ?>
												<a download class="btn btn-success btn-sm" style="margin: 2px;" href="<?= base_url()."assets/notes/".$data[$i];?>"  >
													<!-- <img src="<?= base_url()."assets/docs/".$data[$i];?>" width="20%"  alt="File"> -->
													Download
												</a>
												<?php }
											}else{ ?>
												<a download class="btn btn-success btn-sm" style="margin: 2px;" href="<?= base_url()."assets/notes/".$value['docs'];?>" >Dodwnload</a>
											<?php }
											?>
						</td>
					<td><?=$value['shared_date']?></td>
					

				</tr>
				<?php } ?>


		</table>
						
	</div>
</div>