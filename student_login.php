<?php  
session_start();
// if (!isset($_SESSION['isStudent'])) {
//    $_SESSION['isStudent']='ture';
// }
 require_once ("config/config.php");
require_once ("config/db.php");

if (isset($_SESSION['semester_status']) && $_SESSION['semester_status']=='set') {
    header('Location:'.base_url('students.php'));
}
    


      // $pagePath=root('pages/'.$url);
require_once root('layouts/header.php');
?>


                   <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <h3><a href="<?=base_url('index.php')?>"> Go Back to Site</a></h3>
                        </div>
                        <div class="login-form">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label><b>Select Your Semesterr</b></label>
                                    <select class="form-control" name="semester" onchange="btnVisible(this.value)">
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
                               
                               
                                <div id="visibleBtn">
                                    
                                </div>
                               
                            </form>
                            <!-- <div class="register-link">
                                <p>
                                    Don't you have account?
                                    <a href="#">Sign Up Here</a>
                                </p>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
        function btnVisible(val){
      // alert(val);
       var xhr=new XMLHttpRequest();
      xhr.onreadystatechange=function(){

        if(this.readyState == 4 && this.status==200){
         document.getElementById('visibleBtn').innerHTML=this.responseText;

        }
      }
      xhr.open('GET','ajaxinstudentlogin.php?semester='+val,true);
      xhr.send();
    }
    </script>
    <?php 
require_once root('layouts/footer.php');
// require_once('includes/footer.php');
?>
