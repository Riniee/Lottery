<?php
include_once('header.php');
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
        <canvas id="canvas" width="150" height="150"
style="background-color:#333">
</canvas>
        <div class="register-box">
            <div class="register-box-body">
                <div class="row">
                    <div class="col-md-6">
                        <!-- Nav tabs -->
                        <div class="card">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#rose" aria-controls="rose" role="tab" data-toggle="tab">Rose</a></li>
                                <li role="presentation"><a href="#lilly" aria-controls="lilly" role="tab" data-toggle="tab">Lilly</a></li>
                                <li role="presentation"><a href="#lotus" aria-controls="lotus" role="tab" data-toggle="tab">Lotus</a></li>
                                 <li role="presentation"><a href="#jasmine" aria-controls="jasmine" role="tab" data-toggle="tab">Jasmine</a></li>
                                <li role="presentation"><a href="#kurinji" aria-controls="kurinji" role="tab" data-toggle="tab">Kurinji</a></li>
                                <li role="presentation"><a href="#marigold" aria-controls="marigold" role="tab" data-toggle="tab">Marigold</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="rose">
                                    <h1>Rose</h1>
                                    <div class="col-md-6 col-sm-6 col-sm-offset-3 col-md-offset-3">

                                        <form action="../controller/Admin_Controller.php" class="defaultForm" method="post" enctype="multipart/form-data" autocomplete="off">
                                            <p>Date to View</p>
                                            <input type="date" id="txtDate" name="txtDate" value="Date" />
                                            <br>
                                            <br>
                                            <p>Upload your pdf file :</p>
                                            <input type="file" name="releaseDate" accept="application/pdf,application/vnd.ms-excel" />
                                            <br>
                                            <p>Submit to finish</p>
                                            <input type="hidden" id="luckType" name="luckType" value="rose" />
                                            <input type="submit" id="rose"/>
                                            <br>
                                        </form>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="lilly">
                                    <h1>lilly</h1>
                                      <div class="col-md-6 col-sm-6 col-sm-offset-3 col-md-offset-3">
                                        <form action="../controller/Admin_Controller.php" class="defaultForm" method="post" enctype="multipart/form-data" autocomplete="off">
                                            <p>Date to View</p>
                                            <input type="date" id="txtDate" name="txtDate" value="Date" />
                                            <br>
                                            <br>
                                            <p>Upload your pdf file :</p>
                                            <input type="file" name="releaseDate" accept="application/pdf,application/vnd.ms-excel" />
                                            <br>
                                            <p>submit to finish</p>
                                            <input type="hidden" id="luckType" name="luckType" value="lilly" />
                                            <input type="submit" id="" name="lilly" />
                                            <br>
                                        </form>
                                    </div>
                                </div>

                                <div role="tabpanel" class="tab-pane" id="lotus">
                                    <h1>lotus</h1>
                                        <div class="col-md-6 col-sm-6 col-sm-offset-3 col-md-offset-3">
                                        <form action="../controller/Admin_Controller.php" class="defaultForm" method="post" enctype="multipart/form-data" autocomplete="off">
                                            <p>Date to View</p>
                                            <input type="date" id="txtDate" name="txtDate" value="Date" />
                                            <br>
                                            <br>
                                            <p>Upload your pdf file :</p>
                                            <input type="file" name="releaseDate" accept="application/pdf,application/vnd.ms-excel" />
                                            <br>
                                            <p>submit to finish</p>
                                            <input type="hidden" id="luckType" name="luckType" value="lotus" />
                                            <input type="submit" id="" name="lotus" />
                                            <br>
                                        </form>
                                        </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="jasmine">
                                    <h1>jasmine</h1>
                                        <div class="col-md-6 col-sm-6 col-sm-offset-3 col-md-offset-3">
                                        <form action="../controller/Admin_Controller.php" class="defaultForm" method="post" enctype="multipart/form-data" autocomplete="off">
                                            <p>Date to View</p>
                                            <input type="date" id="txtDate" name="txtDate" value="Date" />
                                            <br>
                                            <br>
                                            <p>Upload your pdf file :</p>
                                            <input type="file" name="releaseDate" accept="application/pdf,application/vnd.ms-excel" />
                                            <br>
                                            <p>submit to finish</p>
                                            <input type="hidden" id="luckType" name="luckType" value="jasmine" />
                                            <input type="submit" id="" name="jasmine" />
                                            <br>
                                        </form>
                                        </div>
                                </div>
                                
                                <div role="tabpanel" class="tab-pane" id="kurinji">
                                    <h1>kurinji</h1>
                                        <div class="col-md-6 col-sm-6 col-sm-offset-3 col-md-offset-3">
                                        <form action="../controller/Admin_Controller.php" class="defaultForm" method="post" enctype="multipart/form-data" autocomplete="off">
                                            <p>Date to View</p>
                                            <input type="date" id="txtDate" name="txtDate" value="Date" />
                                            <br>
                                            <br>
                                            <p>Upload your pdf file :</p>
                                            <input type="file" name="releaseDate" accept="application/pdf,application/vnd.ms-excel" />
                                            <br>
                                            <p>submit to finish</p>
                                            <input type="hidden" id="luckType" name="luckType" value="kurinji" />
                                            <input type="submit" id="" name="kurinji" />
                                            <br>
                                        </form>
                                        </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="marigold">
                                    <h1>marigold</h1>
                                        <div class="col-md-6 col-sm-6 col-sm-offset-3 col-md-offset-3">
                                        <form action="../controller/Admin_Controller.php" class="defaultForm" method="post" enctype="multipart/form-data" autocomplete="off">
                                            <p>Date to View</p>
                                            <input type="date" id="txtDate" name="txtDate" value="Date" />
                                            <br>
                                            <br>
                                            <p>Upload your pdf file :</p>
                                            <input type="file" name="releaseDate" accept="application/pdf,application/vnd.ms-excel" />
                                            <br>
                                            <p>submit to finish</p>
                                            <input type="hidden" id="luckType" name="luckType" value="marigold" />
                                            <input type="submit" id="" name="marigold" />
                                            <br>
                                        </form>
                                        </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
    
            </div>
        </div>
    </section>
</div>
    <!-- <script>


$(document).ready(function() {

    $('#txtDate').datepicker({ 
        dateFormat: 'dd-mm-yy',
        showOn: "button",
        buttonImage: "images/calendar.gif",
        buttonImageOnly: true,
        buttonText: "Select date"});

    $('#txtDate').datepicker('setDate', new Date());
});

  </script>-->
    <!-- /.content-wrapper -->
<script>
var canvas = document.getElementById("canvas");
var ctx = canvas.getContext("2d");
var radius = canvas.height / 2;
ctx.translate(radius, radius);
radius = radius * 0.90
setInterval(drawClock, 1000);

function drawClock() {
  drawFace(ctx, radius);
  drawNumbers(ctx, radius);
  drawTime(ctx, radius);
}

function drawFace(ctx, radius) {
  var grad;
  ctx.beginPath();
  ctx.arc(0, 0, radius, 0, 2*Math.PI);
  ctx.fillStyle = 'white';
  ctx.fill();
  grad = ctx.createRadialGradient(0,0,radius*0.95, 0,0,radius*1.05);
  grad.addColorStop(0, '#333');
  grad.addColorStop(0.5, 'white');
  grad.addColorStop(1, '#333');
  ctx.strokeStyle = grad;
  ctx.lineWidth = radius*0.1;
  ctx.stroke();
  ctx.beginPath();
  ctx.arc(0, 0, radius*0.1, 0, 2*Math.PI);
  ctx.fillStyle = '#333';
  ctx.fill();
}

function drawNumbers(ctx, radius) {
  var ang;
  var num;
  ctx.font = radius*0.15 + "px arial";
  ctx.textBaseline="middle";
  ctx.textAlign="center";
  for(num = 1; num < 13; num++){
    ang = num * Math.PI / 6;
    ctx.rotate(ang);
    ctx.translate(0, -radius*0.85);
    ctx.rotate(-ang);
    ctx.fillText(num.toString(), 0, 0);
    ctx.rotate(ang);
    ctx.translate(0, radius*0.85);
    ctx.rotate(-ang);
  }
}

function drawTime(ctx, radius){
    var now = new Date();
    var hour = now.getHours();
    var minute = now.getMinutes();
    var second = now.getSeconds();
    //hour
    hour=hour%12;
    hour=(hour*Math.PI/6)+
    (minute*Math.PI/(6*60))+
    (second*Math.PI/(360*60));
    drawHand(ctx, hour, radius*0.5, radius*0.07);
    //minute
    minute=(minute*Math.PI/30)+(second*Math.PI/(30*60));
    drawHand(ctx, minute, radius*0.8, radius*0.07);
    // second
    second=(second*Math.PI/30);
    drawHand(ctx, second, radius*0.9, radius*0.02);
}

function drawHand(ctx, pos, length, width) {
    ctx.beginPath();
    ctx.lineWidth = width;
    ctx.lineCap = "round";
    ctx.moveTo(0,0);
    ctx.rotate(pos);
    ctx.lineTo(0, -length);
    ctx.stroke();
    ctx.rotate(-pos);
}
</script>
<?php
include_once('footer.php');
?>
