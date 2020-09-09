<?php
include('config/config.php');
include('config/db.php');
$title = $_GET['sub'];
$result = $obj->Select("submitted_assignment","*","subject",array($title));

?>
<br>
<table class="table table-bordered">
	<tr>
		<th>SN</th>
		<th>Subject</th>
		<th>Assignment Title</th>
		<th>File</th>
		<td>Submitted By</td>
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
									<a download  class="btn btn-success btn-sm" style="margin: 2px;" href="<?= base_url()."assets/submittedDocs/".$data[$i];?>"  >
										<!-- <img src="<?= base_url()."assets/submittedDocs/".$data[$i];?>"   alt="File"> -->
										Download
									</a>
									<?php }
								}else{ ?>
									<a download  class="btn btn-success btn-sm" style="margin: 2px;" href="<?= base_url()."assets/submittedDocs/".$value['docs'];?>" >Dodwnload</a>
								<?php }
								?>
						</td>
			<td><?=$value['username']?></td>
			<td><?=$value['submitted_Date']?></td>
			<td><?=$value['deadline']?></td>

		</tr>
	<?php } ?>
</table>