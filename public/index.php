<?php
/*include_once('header.php');
include_once('sidebar.php');*/
include_once('../controller/Index_Controller.php');
?>
<!-- Content Wrapper-->
<div class="content-wrapper">  
    <section class="content admin_account">   
       <div class="col-md-8 col-sm-8 "> 
        <img style="height: 95px;" src="img/logo.png">
           <span>MIZORAM LOTTERIES</span>
        </div>
        <canvas id="canvas" width="100" height="100"
style="background-color:#333">
</canvas>
      
        <p class="login-box-msg text-uppercase"><STRONG>MIZORAM LOTTERIES</STRONG></p>
         <marquee behavior="alternate" bgcolor="#DAF7A6"><div><span class="ws12" style="color: #0000FF;"><strong>::: Mizoram Next Bumper &gt;&gt;&gt;&gt;</strong></span><span class="ws12"><strong>&nbsp; : </strong></span><a href="http://www.Mizoramlotteryresult.net/2018/01/summer-bumper-prize-structure-2018-on-21-03-2018.html" target="_blank"><span class="ws12" style="color: #ff00ff;"><strong>[ 21.04.2018 Summer Bumper MR 60 ] </strong></span> <span class="ws12" style="color: #3366ff;"><strong>(MR-57)</strong></span><span class="ws12"><strong> Prize Structure&gt;&gt;&gt; www.Mizoramlotteryresult.net</strong></span></a></div></marquee>
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
                                    <div class="result1">
                                      <marquee ><p style="font-family: Impact; font-size: 18pt; color: red">the result of today 1.30pm</p></marquee>
                                    <div class="col-md-4 col-sm-4  col-sm-offset-3 col-md-offset-3">
                                  <div class="col-md-8 col-sm-8 ">      
                                 <input type="image" src="img/pdfdownload.jpg" value="PDF">
                                      </div>
                                        <br>
                                           <div class="col-md-8 col-sm-8 ">      
                                  <a href="uploads/results/<?php echo $file['rose']; ?>" target="_blank" style="font-size:18pt"><u>View</u></a>
                                        </div>
                                           <div class="col-md-8 col-sm-8 ">      
                                         <a href="uploads/results/<?php echo $file['rose']; ?>" target="_blank" style="font-size:18pt"><u>Download</u></a>
                                        </div>
                                    </div>
                                </div>
                                    
                                </div>
                                <div role="tabpanel" class="tab-pane " id="lilly">
                                    <h1>lilly</h1>
                                      <div class="result2">
                                      <marquee ><p style="font-family: Impact; font-size: 18pt; color: red">the result of today 2.30pm</p></marquee>
                                    <div class="col-md-4 col-sm-4  col-sm-offset-3 col-md-offset-3">
                                  <div class="col-md-8 col-sm-8 ">      
                                 <input type="image" src="img/pdfdownload.jpg" value="PDF">
                                      </div>
                                        <br>
                                           <div class="col-md-8 col-sm-8 ">      
                                            <a href="uploads/results/<?php echo $file['lilly']; ?>" target="_blank" style="font-size:18pt"><u>View</u></a>
                                        </div>
                                           <div class="col-md-8 col-sm-8 ">      
                                            <a href="uploads/results/<?php echo $file['lilly']; ?>" target="_blank" style="font-size:18pt"><u>Download</u></a>
                                            </div>
                                    </div>
                                </div>
                                </div>

                                <div role="tabpanel" class="tab-pane " id="lotus">
                                    <h1>lotus</h1>
                                        <div class="result1">
                                      <marquee ><p style="font-family: Impact; font-size: 18pt; color: red">the result of today 3.30pm</p></marquee>
                                    <div class="col-md-4 col-sm-4  col-sm-offset-3 col-md-offset-3">
                                  <div class="col-md-8 col-sm-8 ">      
                                 <input type="image" src="img/pdfdownload.jpg" value="PDF">
                                      </div>
                                        <br>
                                           <div class="col-md-8 col-sm-8 ">      
                                  <a href="uploads/results/<?php echo $file['lotus']; ?>" target="_blank" style="font-size:18pt"><u>View</u></a>
                                        </div>
                                           <div class="col-md-8 col-sm-8 ">      
                                         <a href="uploads/results/<?php echo $file['lotus']; ?>" target="_blank" style="font-size:18pt"><u>Download</u></a>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                
                                <div role="tabpanel" class="tab-pane " id="jasmine">
                                    <h1>Jasmine</h1>
                                    <div class="result4">
                                      <marquee ><p style="font-family: Impact; font-size: 18pt; color: red">the result of today 4.30pm</p></marquee>
                                    <div class="col-md-4 col-sm-4  col-sm-offset-3 col-md-offset-3">
                                  <div class="col-md-8 col-sm-8 ">      
                                 <input type="image" src="img/pdfdownload.jpg" value="PDF">
                                      </div>
                                        <br>
                                           <div class="col-md-8 col-sm-8 ">      
                                  <a href="uploads/results/<?php echo $file['jasmine']; ?>" target="_blank" style="font-size:18pt"><u>View</u></a>
                                        </div>
                                           <div class="col-md-8 col-sm-8 ">      
                                         <a href="uploads/results/<?php echo $file['jasmine']; ?>" target="_blank" style="font-size:18pt"><u>Download</u></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                
                                <div role="tabpanel" class="tab-pane " id="kurinji">
                                    <h1>kurinji</h1>
                                    <div class="result1">
                                      <marquee ><p style="font-family: Impact; font-size: 18pt; color: red">the result of today 5.30pm</p></marquee>
                                    <div class="col-md-4 col-sm-4  col-sm-offset-3 col-md-offset-3">
                                  <div class="col-md-8 col-sm-8 ">      
                                 <input type="image" src="img/pdfdownload.jpg" value="PDF">
                                      </div>
                                        <br>
                                           <div class="col-md-8 col-sm-8 ">      
                                  <a href="uploads/results/<?php echo $file['kurinji']; ?>" target="_blank" style="font-size:18pt"><u>View</u></a>
                                        </div>
                                           <div class="col-md-8 col-sm-8 ">      
                                         <a href="uploads/results/<?php echo $file['kurinji']; ?>" target="_blank" style="font-size:18pt"><u>Download</u></a>
                                        </div>
                                    </div>
                                </div>
                                    
                                   
                    </div>
                                <div role="tabpanel" class="tab-pane " id="marigold">
                                    <h1>Marigold</h1>
                                    <div class="result1">
                                      <marquee ><p style="font-family: Impact; font-size: 18pt; color: red">the result of today 6.30pm</p></marquee>
                                    <div class="col-md-4 col-sm-4  col-sm-offset-3 col-md-offset-3">
                                  <div class="col-md-8 col-sm-8 ">      
                                 <input type="image" src="img/pdfdownload.jpg" value="PDF">
                                      </div>
                                        <br>
                                           <div class="col-md-8 col-sm-8 ">      
                                  <a href="uploads/results/<?php echo $file['marigold']; ?>" target="_blank" style="font-size:18pt"><u>View</u></a>
                                        </div>
                                           <div class="col-md-8 col-sm-8 ">      
                                         <a href="uploads/results/<?php echo $file['marigold']; ?>" target="_blank" style="font-size:18pt"><u>Download</u></a>
                                        </div>
                                    </div>
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