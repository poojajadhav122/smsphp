<?php 

 session_start();
 if(!isset($_SESSION['sms'])){ //if user login that time it sholud go to library page
  header("location:logout.php");// if user not login so it sholud go to logout page
 } 
  require_once 'header.php';
?>
      <div id="content-wrapper">
        <div class="container-fluid">
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Login Page</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>


          <div class="card card-register mx-auto mt-5">
        <div class="card-header">Add Library</div>
        <div class="card-body">
          <form id="library_form">
            
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" name="libname" id="inputEmail" class="form-control" placeholder="Email address" >
                <label for="inputEmail">Library name - holi</label>
              </div>
            </div>
          
            <button class="btn btn-primary btn-block btn-library" type="button">Add</button>
          </form>
          <div class="text-center msg"> <!-- here write msg because we using js --> 
            
          </div>
        </div>
      </div>
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- /.content-wrapper -->
<?php  
  require_once 'footer.php';
?>
    