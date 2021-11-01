 <?php
include("include/head.php");
include("include/nav.php");
include("include/header.php");
?>
<div class="container">
    <div class="row">
    <div class="col-lg-8">
        <div class="content">
            <div class="container-fluid">
                <div class="col-md-6">
              <form id="RegisterValidation" action="src/_actions/user_create.php" method="POST">
                <div class="card ">
                  <div class="card-header card-header-rose card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">mail_outline</i>
                    </div>
                    <h4 class="card-title">Register Form</h4>
                  </div>
                  <div class="card-body ">
                       <div class="form-group">
                      <label for="username" class="bmd-label-floating"> User Name *</label>
                      <input type="text" class="form-control" name="username" required="true">
                    </div>
                    <div class="form-group">
                      <label for="email" class="bmd-label-floating"> Email Address *</label>
                      <input type="email"  name="email" class="form-control" required="true">
                    </div>
                    <div class="form-group">
                      <label for="password" class="bmd-label-floating"> Password *</label>
                      <input type="password" class="form-control"  required="true" name="password">
                    </div>
                    <div class="form-group">
                      <label for="phone" class="bmd-label-floating"> Phone *</label>
                      <input type="text" name="phone" class="form-control"  required="true">
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <button type="submit" class="btn btn-rose">Register</button>
                  </div>
                </div>
              </form>
            </div>
            </div>
        </div>
    </div>

     <!-- Sidebar--> 
<?php include('include/right_sidebar.php') ?>
</div>
</div>
<?php include("include/footer.php");?>