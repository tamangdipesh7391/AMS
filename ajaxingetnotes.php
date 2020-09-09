<?php
include('config/config.php');
include('config/db.php');
$sub = $_GET['sub'];
$result = $obj->Select("shared_notes","*","subject",array($sub));

?>
	<table class="table table-bordered table-stripped">
				<tr>
					<td>SN</td>
					<td>Semester</td>
					<td>Subject</td>
					<td>File</td>
					<td>Shared Date</td>

				</tr>
				<?php foreach ($result as $key => $value) { ?>
					<tr>
					<td><?=++$key;?></td>
					<td><?=$value['semester']?></td>
					<td><?=$value['subject']?></td>
					<td>
										
										<?php 
											$data = explode(',', $value['docs']);

											if (sizeof($data)>1) {
												$i = 0;
												for ($i=0; $i < sizeof($data); $i++) {  ?>
												<a download class="btn btn-success btn-sm" style="margin: 2px;" href="<?= base_url()."assets/notes/".$data[$i];?>" width="20%" >
													<!-- <img src="<?= base_url()."assets/docs/".$data[$i];?>" width="20%"  alt="File"> -->
													Download
												</a>
												<?php }
											}else{ ?>
												<a download class="btn btn-success btn-sm" style="margin: 2px;" href="<?= base_url()."assets/notes/".$value['docs'];?>" width="20%">Dodwnload</a>
											<?php }
											?>
						</td>
					<td><?=$value['shared_date']?></td>
					

				</tr>
				<?php } ?>


		</table>