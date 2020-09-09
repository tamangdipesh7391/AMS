<?php  
 require_once ("config/config.php");
require_once ("config/db.php");
 session_start();

 if (isset($_SESSION['login'])) {
    if ($_SESSION['login']=='yes') {
    header('Location:'.base_url('teachers.php'));
 }
 }

     if(!empty($_POST) && $_POST['submit']=='submit'){
        $username=$_POST['username'];
        $password=md5($_POST['password']);
        $user_select=$obj->Query("SELECT * FROM admin_pannel WHERE username='$username' and password='$password'");

      if($user_select){
       $user_select= $user_select[0];
      
        $_SESSION['users_data']=$user_select;
        $_SESSION['id']=$user_select->id;
        $_SESSION['status']="Success";
        $_SESSION['login']='yes';
        header('Location:'.base_url('teachers.php'));

      }else {
        echo "invalid acccess";
      }


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
                            <h3>Login Here</h3>
                        </div>
                        <div class="login-form">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" name="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                               <!--  <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>
                                    <label>
                                        <a href="#">Forgotten Password?</a>
                                    </label>
                                </div> -->
                                <button class="au-btn au-btn--block au-btn--green m-b-20"  name="submit" value="submit">sign in</button>
                               
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
    <?php 
require_once root('layouts/footer.php');
?>