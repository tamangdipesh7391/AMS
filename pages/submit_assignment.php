<?php
// echo "<pre>";
// print_r($_POST);
// echo "<pre/>";
// print_r($_FILES);
// echo "here is the size of filename";
// 		      		echo sizeof($_FILES['image']['name']);

 

if (isset($_SESSION['semester'])) {
						$sem = $_SESSION['semester'];
					}
$resultSub = $obj->Select("subject_table","*","semester",array($sem));


	if (isset($_POST['submit'])) {
		if ($_POST['submit']=='submit') {
	
			$filename = $_FILES['image']['name'];
			if (sizeof($filename)<2) {
				$tmp_name = $_FILES['image']['tmp_name'][0];
				$imageFileType = strtolower(pathinfo($filename[0],PATHINFO_EXTENSION));


				if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		      && $imageFileType != "gif" && $imageFileType!=""&&$imageFileType !="txt"&&$imageFileType !="docx"&&$imageFileType !="pdf"&& $imageFileType!="html"&& $imageFileType!="zip"&& $imageFileType!="sql"&& $imageFileType!="pptx") {
					echo "Sorry, only JPG, JPEG, PNG , GIF,txt,docx,pdf,html,zip,sql & pptx files are allowed.";
		          
		      }else{
		      	
		      		
		      		$location='C:\xampp\htdocs\AMS\assets\submittedDocs'.'/'.$filename[0];
		      		move_uploaded_file($tmp_name, $location);//upload file
		      		array_pop($_POST);//popping submit form post
			        if (sizeof($_FILES['image']['name'])>1) {
		
					$a=implode(',',$_FILES['image']['name'] );
							$_POST['docs'] = $a;
					}
					else{
						$_POST['docs']=$filename[0];
					}
		        //insert filename in post variable
					if (isset($_SESSION['semester'])) {
						$_POST['semester'] = $_SESSION['semester'];
					}
		        $obj->Insert("submitted_assignment",$_POST);//insert query
		        $_SESSION['submit']="Assignment Submitted successfully!";
		      	}

			}


			else{
				
				for ($j=0; $j <sizeof($filename) ; $j++) { 
					$tmp_name = $_FILES['image']['tmp_name'][$j];
					// echo $tmp_name;
					$imageFileType = strtolower(pathinfo($filename[$j],PATHINFO_EXTENSION));



					if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		      && $imageFileType != "gif" && $imageFileType!=""&&$imageFileType !="txt"&&$imageFileType !="docx"&&$imageFileType !="pdf"&& $imageFileType!="html"&& $imageFileType!="zip"&& $imageFileType!="sql"&& $imageFileType!="pptx") {
		          echo "Sorry, only JPG, JPEG, PNG , GIF,txt,docx,pdf,html,zip,sql & pptx files are allowed.";

		          
		      }else{
		      	
		      		
		      		$location='C:\xampp\htdocs\AMS\assets\submittedDocs'.'/'.$filename[$j];
		      		move_uploaded_file($tmp_name, $location);//upload file
		      		array_pop($_POST);//popping submit form post
			        if (sizeof($_FILES['image']['name'])>1) {
		
					$a=implode(',',$_FILES['image']['name'] );
							$_POST['docs'] = $a;
					}
					else{
						$_POST['docs']=$filename[0];
					}
		        //insert filename in post variable
		       
		      	}


				}
				if (isset($_SESSION['semester'])) {
						$_POST['semester'] = $_SESSION['semester'];
					}
				 $obj->Insert("submitted_assignment",$_POST);//insert query
		        $_SESSION['submit']="Assignment submitted successfully!";
			}
			
			
			
		        
		      
			
		}
	}


?>


<div class="container"><br>
	<?php 
					if (isset($_SESSION['submit'])) { ?>
						<div class="alert alert-success">
							<?=$_SESSION['submit'];?>
						</div>
				<?php	}else{ ?>

					<!-- <div class="alert alert-danger">
							<?php echo"There is some error!"?>
						</div> -->
				

			<?php	} ?>
	<ul class="nav">
			<li style="margin-right: 10px;margin-bottom: 10px;"><a href="<?=base_url()."get_notes.php"?>" class="btn btn-info">Get Notes</a></li>
			<li><a href="<?=base_url()."view_assignment.php"?>" class="btn btn-info">View Assignment</a></li>
		</ul>
	<div class="post-heading">
		<h2 class="mobile-text">Submit Assignment </h2>
		
	</div>
	<div class="col-md-5">
		<form action="" method="post" class="form-group" enctype="multipart/form-data">
			<!-- <div class="form-group">
				<label>Select Semester</label>
				<select class="form-control" name="semester" onchange="selectSub(this.value)">
					<option selected="" disabled="">Select Semester</option>
					<option value="1st Semester">1st Semester</option>
					<option value="2nd Semester">2nd Semester</option>
					<option value="3rd Semester">3rd Semester</option>
					<option value="4th Semester">4th Semester</option>
					<option value="5th Semester">5th Semester</option>
					<option value="6th Semester">6th Semester</option>
					<option value="7th Semester">7th Semester</option>
					<option value="8th Semester">8th Semester</option>

				</select>
			</div> -->
			<div class="form-group">
				<label>Select Subject</label>
				<select class="form-control" name="subject" >
					<option selected disabled>Select Subject</option>
					<?php 
					foreach ($resultSub as $key => $value) { ?>
						<option value="<?=$value['subject']?>"><?=$value['subject']?></option>
					<?php }

					?>

				</select>
			</div>
			<div class="form-group">
				<label>Assignment Title</label>
				<select class="form-control" required="" name="post_heading" id="assignmentTitle" onchange="addDeadline(this.value)">
					<option selected disabled>Select Title</option>
				</select>
			</div>
			<div class="form-group">
				<label>File/Images</label>
				<input type="file" name="image[]" multiple="" class="form-control" required="">
			</div>
			<div class="form-group">
				<label>Submitted Date</label>
				<input type="date" name="submitted_Date" value="<?php echo date('Y-m-d')?>" class="form-control">
			</div>
			<div class="form-group" id="deadline">
				<label>Deadline </label>
				<input type="date" name="deadline"  class="form-control">
			</div>
			<div class="form-group" id="deadline">
				<label>Username </label>
				<input type="text" name="username"  class="form-control" required="">
			</div>
			<button class="btn btn-success" name="submit" value="submit"> Submit </button>
		</form>
	</div>
</div>