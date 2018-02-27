<?php
/*include_once('header.php');
include_once('sidebar.php');*/
?>
<!-- Content Wrapper-->
<div class="content-wrapper">
    <?php if(isset($_SESSION['ack']['error'])) { print_r($_SESSION);die;?>
    <div class="alert alert-danger alert-dismissible">
        <h4 class="text-center">
            <?php 
                echo $_SESSION['ack']['error'];
                unset($_SESSION['ack']['error']);
            ?>
        </h4>
    </div>
    <?php } ?>
    <?php if(isset($_SESSION['ack']['success'])) { ?>
    <div class="alert alert-success alert-dismissible">
        <h4 class="text-center">
            <?php 
                echo $_SESSION['ack']['success'];
                unset($_SESSION['ack']['success']);
            ?>
        </h4>
    </div>
    <?php } ?>
    <section class="content admin_account">
        <div class="col-md-8 col-sm-8 ">
            <img style="height: 95px;" src="img/logo.png">
        </div>
        <p class="login-box-msg text-uppercase">welcome</p>
        <div class="register-box">
            <div class="register-box-body">
                <div class="row">
                    <div class="col-md-6 col-sm-6  col-sm-offset-3 col-md-offset-3">
                        <form action="../controller/Results_Controller.php" class="defaultForm" method="post" autocomplete="off">
                            <p>Date to View</p>
                            <input type="date" id="searchDate" name="searchDate" value="Date" />
                            <br>
                            <br>
                            <p>Choose Lottery Type:</p>
                            <select name="luckType">
                                <option value="rose">Rose</option>
                                <option value="lilly">Lilly</option>
                                <option value="lotus">lotus</option>
                                <option value="lotus">Jasmine</option>
                                <option value="lotus">kurinji</option>
                                <option value="lotus">marigold</option>
                            </select>
                            <br>
                            <br>
                            <div class="col-md-4 col-sm-4 ">
                                <input type="submit" style="font-size:18pt" id="View"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- /.content-wrapper -->
<?php
include_once('footer.php');
?>
