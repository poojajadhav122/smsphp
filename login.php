<?php 

 session_start();
 if(isset($_SESSION['sms'])){ // this all we write because when we login that time its goes no the index page only if we manually type loginthen also it should open index.php page
  //echo "yes";
  header("location:index.php");
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
        <div class="card-header">Register an Account</div>
        <div class="card-body">
          <form id="login_form">
            
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" name="useremail" id="inputEmail" class="form-control" placeholder="Email address" >
                <label for="inputEmail">Email address</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-12">
                  <div class="form-label-group">
                    <input type="password" name="userpass" id="inputPassword" class="form-control" placeholder="Password" >
                    <label for="inputPassword">Password</label>
                  </div>
                </div>
                
              </div>
            </div>
            <button class="btn btn-primary btn-block btn-login" type="button">Login</button>
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
    