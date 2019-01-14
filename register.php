<?php  
  require_once 'header.php';
?>
      <div id="content-wrapper">
        <div class="container-fluid">
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Register Page</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>


          <div class="card card-register mx-auto mt-5">
        <div class="card-header">Register an Account</div>
        <div class="card-body">
          <form id="register_form">
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" name="username" id="firstName" class="form-control" placeholder="First name"  autofocus="autofocus">
                    <label for="firstName">name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" name="usermobile" id="lastName" class="form-control" placeholder="Last name" >
                    <label for="lastName">mobile</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" name="useremail" id="inputEmail" class="form-control" placeholder="Email address" >
                <label for="inputEmail">Email address</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" name="userpass" id="inputPassword" class="form-control" placeholder="Password" >
                    <label for="inputPassword">Password</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" name="usercpass" id="confirmPassword" class="form-control" placeholder="Confirm password" >
                    <label for="confirmPassword">Confirm password</label>
                  </div>
                </div>
              </div>
            </div>
            <button class="btn btn-primary btn-block btn-register" type="button">Register</button>
          </form>
          <div class="text-cesnter msg">
            
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
    