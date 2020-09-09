<?php
// echo "<pre>";
// print_r($_POST);
// echo "<pre/>";
// print_r($_FILES);
// echo "here is the size of filename";
// 		      		echo sizeof($_FILES['image']['name']);



	if (!isset($_SESSION['login'])) {
	header('location:home.php');
    }




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
		      	
		      		
		      		$location='C:\xampp\htdocs\AMS\assets\docs'.'/'.$filename[0];
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
		        $obj->Insert("create_assignment",$_POST);//insert query
		        $_SESSION['create']="Assignment added successfully!";
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
		      	
		      		
		      		$location='C:\xampp\htdocs\FreePaid\assets\docs'.'/'.$filename[$j];
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
				 $obj->Insert("create_assignment",$_POST);//insert query
		        $_SESSION['create']="Assignment added successfully!";
			}
			
			
			
		        
		      
			
		}
	}


?>


<div class="container"><br>
	<?php 
					if (isset($_SESSION['create'])) { ?>
						<div class="alert alert-success">
							<?=$_SESSION['create'];?>
						</div>
				<?php	}else{ ?>

					<!-- <div class="alert alert-danger">
							<?php echo"There is some error!"?>
						</div> -->
				

			<?php	} ?>

		<ul class="nav">
			<li style="margin-right: 10px;margin-bottom: 10px;"><a href="<?=base_url()."view_students_assignment.php"?>" class="btn btn-info">View Students Assignment</a></li>
			<li><a href="<?=base_url()."share_notes.php"?>" class="btn btn-info">Share Notes</a></li>
		</ul>
		
		




	<div class="post-heading">
		<h2 class="mobile-text">Create Assignment </h2>
		
	</div>
	<div class="col-md-5">
		<form action="" method="post" class="form-group" enctype="multipart/form-data">
			<div class="form-group">
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
			</div>
			<div class="form-group" id="selectSub">
				
				<label>Select Subject</label>
				<select class="form-control" name="subject" required="">
					<option selected disabled>Select Subject</option>
					<!-- <option value="Operating System">Operating System</option>
					<option value="DBMS">DBMS</option>
					<option value="PHP">PHP</option>
					<option value="Numericals">Numericals</option>
					<option value="Software Engineering">Software Engineering</option> -->

				</select>
			</div>
			<div class="form-group">
				<label>Assignment Title</label>
				<input type="text" name="post_heading" class="form-control" required="">
			</div>
			<div class="form-group">
				<label>File/Images</label>
				<input type="file" name="image[]" multiple="" class="form-control" required="">
			</div>
			<div class="form-group">
				<label>Issued Date</label>
				<input type="date" name="issueDate" value="<?php echo date('Y-m-d')?>" class="form-control">
			</div>
			<div class="form-group">
				<label>Submission Date</label>
				<input type="date" name="submissionDate"  class="form-control">
			</div>
			<button class="btn btn-success" name="submit" value="submit"> Post </button>
		</form>
	</div>
</div>