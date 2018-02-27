<?php
include_once('header.php');
include_once('sidebar.php');
?>
<!-- Content Wrapper-->
<div class="content-wrapper">  
    <section class="content change_password">    
        <div class="login-box">
            <div class="login-logo">
                <a href="login.php"><img src="img/login_logo.png" class="img-responsive"></a>
            </div>           
            <div class="login-box-body">
                <p class="login-box-msg">Change password</p>
                <form action="index.php" method="post" class="defaultForm">
                    <div class="row form-group has-feedback">
                        <div class="col-md-3">
                            <label>New Password</label>
                        </div>
                        <div class="col-md-8">
                            <input type="password" class="form-control" placeholder="New Password" name="new_password" data-bv-trigger="keyup" required data-bv-notempty-message="Enter New Password">                        
                        </div>
                    </div>
                    <div class="row form-group has-feedback">
                        <div class="col-md-3">
                            <label>Confirm Password</label>
                        </div>
                        <div class="col-md-8">
                             <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password" data-bv-trigger="keyup" required data-bv-notempty-message="Enter Confirm Password">                                        
                        </div>                      
                    </div>
                    <div class="row"> 
                        <div class="col-xs-12 col-sm-4 col-md-4 col-sm-offset-4 col-md-offset-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Submit</button>
                        </div>                                        
                    </div>                  
                </form>               
            </div>           
        </div>       
    </section>  
</div>
<!-- /.content-wrapper -->
<?php
include_once('footer.php');
?>