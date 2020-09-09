<div style="height: 40vh;">
  
</div><!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>AMS</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Reveal
      -->
        Designed by <a href="https://tamangdipesh.com.np/" target="_blank">Dipesh Tamang Jr</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Vendor JS Files -->
<script>
  // alert('clicked');
</script>
 <script>
  
    function changeSubject(val){
      // alert(val);
       var xhr=new XMLHttpRequest();
      xhr.onreadystatechange=function(){

        if(this.readyState == 4 && this.status==200){
         document.getElementById('subject').innerHTML=this.responseText;

        }
      }
      xhr.open('GET','ajaxinchangeSubject.php?sub='+val,true);
      xhr.send();
    }

     function filterAssignment(val){
      // alert(val);
       var xhr=new XMLHttpRequest();
      xhr.onreadystatechange=function(){

        if(this.readyState == 4 && this.status==200){
         document.getElementById('assignmentTitle').innerHTML=this.responseText;

        }
      }
      xhr.open('GET','ajaxinchangeTitle.php?subject='+val,true);
      xhr.send();
    }
      function addDeadline(val){
      // alert(val);
       var xhr=new XMLHttpRequest();
      xhr.onreadystatechange=function(){

        if(this.readyState == 4 && this.status==200){
         document.getElementById('deadline').innerHTML=this.responseText;

        }
      }
      xhr.open('GET','ajaxinchangeDeadline.php?title='+val,true);
      xhr.send();
    }
    
     function changeAssignment(val){
      // alert(val);
       var xhr=new XMLHttpRequest();
      xhr.onreadystatechange=function(){

        if(this.readyState == 4 && this.status==200){
         document.getElementById('assignment').innerHTML=this.responseText;

        }
      }
      xhr.open('GET','ajaxinchangeAssignment.php?sub='+val,true);
      xhr.send();
    }

     function selectSub(val){
      // alert(val);
       var xhr=new XMLHttpRequest();
      xhr.onreadystatechange=function(){

        if(this.readyState == 4 && this.status==200){
         document.getElementById('selectSub').innerHTML=this.responseText;

        }
      }
      xhr.open('GET','ajaxinselectsubject.php?sem='+val,true);
      xhr.send();
    }


  
     function shareNoteSemChange(val){
      // alert(val);
       var xhr=new XMLHttpRequest();
      xhr.onreadystatechange=function(){

        if(this.readyState == 4 && this.status==200){
         document.getElementById('shareNoteSemChange').innerHTML=this.responseText;

        }
      }
      xhr.open('GET','ajaxinsharenote.php?sem='+val,true);
      xhr.send();
    }

  
     function getNotes(val){
      // alert(val);
       var xhr=new XMLHttpRequest();
      xhr.onreadystatechange=function(){

        if(this.readyState == 4 && this.status==200){
         document.getElementById('notes').innerHTML=this.responseText;

        }
      }
      xhr.open('GET','ajaxingetnotes.php?sub='+val,true);
      xhr.send();
    }


  </script>

  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/wow/wow.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/superfish/superfish.min.js"></script>
  <script src="assets/vendor/hoverIntent/hoverIntent.js"></script>
  <script>
    $(document).ready(function(){
      setTimeout(function(){
        $('.alert').hide('fast')
      },3000);
    })
  </script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
<script src="assets/vendor/jquery//jquery.bxslider.js"></script>
  <script>
  $(function(){
    $('.bxslider').bxSlider({
    mode: 'fade',
    captions: true,
    slideWidth: 768,
    auto: true,
    });
  });
</script>
</body>

</html>