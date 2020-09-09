<?php 
session_start();
$sem = $_SESSION['semester'];
// echo $sem;
$key = 0;
include('config/config.php');
include('config/db.php');
$sid = $_GET['sub'];
$result = $obj->Select("create_assignment","*","subject",array($sid)," AND semester = '".$sem."' ORDER BY issueDate DESC");

?>
<br>
<table class="table table-bordered table-stripped">
	<tr>
		<td>SN</td>
		<td>Subject</td>
		<td>Assignment Title</td>
		<td>File</td>
		<td>Issued Date</td>
		<td>Submisstion Date</td>

	</tr>
	
	<?php foreach ($result as $key => $value) { ?>
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
									<a download class="btn btn-success btn-sm" style="margin: 2px;" href="<?= base_url()."assets/docs/".$data[$i];?>" width="20%" >
										<!-- <img src="<?= base_url()."assets/docs/".$data[$i];?>" width="20%"  alt="File"> -->
										Download
									</a>
									<?php }
								}else{ ?>
									<a download class="btn btn-success btn-sm" style="margin: 2px;" href="<?= base_url()."assets/docs/".$value['docs'];?>" width="20%">Dodwnload</a>
								<?php }
								?>
			</td>
		<td><?=$value['issueDate']?></td>
		<td><?=$value['submissionDate']?></td>

	</tr>
	<?php } ?>


</table>
