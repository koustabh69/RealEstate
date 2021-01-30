 
<!DOCTYPE html>
<html lang="en" style="width: 100%;">
<head>
    <title>Zayne - Homepage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@300;400&family=Archivo+Black&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&family=Raleway&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/421f97763e.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="main6.css" rel=stylesheet>        
    </head>

<style>
    .stxt a{padding: 10px 20px;}
    h1{font-size: 2.5em;}
.overlay{position: relative;width: 100%;height: 100%;background-color: rgba(0,0,0,0.8);display: block;}
    .htxt{display: flex;align-items: center;width: 100%;}
 
.swrap i{font-style: normal;color: #67BC44;}
    .nav .lnk a:hover{color: #FE0000;}
    .hero{overflow: hidden;}
    .herotxt{width: 100%;}
    @-webkit-keyframes pulse{0%{-webkit-transform:scaleX(1);transform:scaleX(1)}25%, 75%{-webkit-transform:scale3d(1.2,1.2,1.2);transform:scale3d(1.2,1.2,1.2)}to{-webkit-transform:scaleX(1);transform:scaleX(1)}}
    @keyframes pulse{0%,50%{-webkit-transform:scaleX(1);transform:scaleX(1)}25%, 75%{-webkit-transform:scale3d(1.2,1.2,1.2);transform:scale3d(1.2,1.2,1.2)}to{-webkit-transform:scaleX(1);transform:scaleX(1)}}
    @keyframes slideIn {
        0%{opacity: 0;left: -700px;}
        65%{opacity: 0;left: -350px;}
        100%{opacity: 1;left: 0;}
    }
    .teamimg2{width: 100%;text-align: center;display: none;}
    .tmcon{height: 500px;background-color: #67BC44;}
    .lgo{height: 90px;}
    .founimg{width: 300px;}
    .minnav{padding: 15px;display: none;float: right;border: none;background-color: transparent;outline: none;}
    .dropcon{display: none;position: absolute;box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);background-color: #fff;right: 30px;top: 70px;padding: 5px;width: 200px;}
    .dropcon a{display: block;padding: 12px;}
    .dropcon a:hover{color: #FE0000;}
    .minnav:hover{color: #FE0000;outline: #FE0000;}
    .gobot{position: absolute;bottom: 130px;left: 50%;font-size: 1.3em;font-weight: bold;width: 500px;}
    .gobot p{padding: 0px;margin: 0px;}
    .gobot .l1{animation: slide 8s ease-in-out;}
    .gobot .l2{animation: slideb 9s ease-in-out;width: 500px;}
    .gobot i{font-style: normal;color: #FE0000;font-weight: bold;font-size: 1.5em;}
    .btt{background-color: #fff;}
    .hero{height: 300px;}
    h1{color: #015A2E;}
.stxt{color: #FE0000;}
.serv{width: 25%;height: 570px;position: relative;}
.servcon{position: relative;}
.serv button{background: transparent;border: 1px solid #fe0000;border-radius: 50px;padding: 12px;color: #fe0000;font-weight: bold;cursor: pointer;position: absolute;left: 50%;bottom: 40px;transform: translateX(-50%);}
.serv button:hover{box-shadow: 0px 3px 10px rgba(0,0,0,0.6);}
.hdcrt{display: none;}
    @media only screen and (max-width: 600px){
        .contain{padding: 50px 10px;}
        .lgo{height: 50px;}
        .swrap{font-size: .7em;height: 30px;}
        .abt h1{font-size: 1.5em;}
        .abt p{font-size: 1em;}
        .abt{width: 100%;padding: 35px 20px;}
        .abt2{display: none;}
        .serv{width: 100%;height: auto;padding: 15px;text-align: center}
        .servcon{width: 100%;height: auto;background-color: #fff;padding: 25px;}
        .servtxt{width: 100%;height: auto;border: 1px solid #ccc;padding: 15px 10px;}
        .servtxt p{letter-spacing: 1px;color: #777;}
        .prom{padding: 35px 20px;}
        .prom h1{font-size: 1.5em;}
        .prom p{letter-spacing: 1px;font-size: 1em;color: #777;}
        .team h1{font-size: 1.5em;}
        .team p{letter-spacing: 1px;font-size: .9em;color: #fff;}
        .teamtxt{width: 100%; padding: 20px;}
        .teamimg{width: 100%;text-align: center;display: none;}
        .teamimg2{width: 100%;text-align: center;display: block;}
        .tmcon{height: auto;}
        .founimg{width: 200px;}
        .contact .col{width: 100%;}
        .confrm{padding: 0 20px;}
        .hero{height:200px; font-size: .7em;}
        .herotxt{padding: 30px 10px;width: 100%;}
        .nav .lnk{padding: 10px 0;}
        .nav .lnk a{font-size: 1em;}
        @keyframes swrap {
        0%{margin-top: 0px;}
        3%{margin-top: 0px;}
        30%{margin-top: -33px;}
        33%{margin-top: -33px;}
        60%{margin-top: -68px;}
        73%{margin-top: -68px;}
        90%{margin-top: -95px;}
        93%{margin-top: -95px;}
        100%{margin-top: -115px;}
    }
    .serv button{position: relative;left: 25%;bottom: 0;transform: translateX(-50%);}
    .minnav{display: block;}
    .lrghd{display: none;}    
    } 
    .scroll-downs {
  position: absolute;
  left: 50%;
  bottom: 140px;  
  width :34px;
  height: 55px;
  transform: translate(-50%,0%);
}
.mousey {
  width: 3px;
  padding: 10px 15px;
  height: 35px;
  border: 2px solid #fff;
  border-radius: 25px;
  opacity: 0.75;
  box-sizing: content-box;
}
.scroller {
  width: 3px;
  height: 10px;
  border-radius: 25%;
  background-color: #fff;
  animation-name: scroll;
  animation-duration: 1.5s;
  animation-timing-function: cubic-bezier(.15,.41,.69,.94);
  animation-iteration-count: infinite;
}
@keyframes scroll {
  0% { opacity: 0; }
  10% { transform: translateY(0); opacity: 1; }
  100% { transform: translateY(15px); opacity: 0;}
}
    .swrap{font-size: 1.3em;font-weight: bold;position: relative;left: 50%;top: 50%;transform: translate(-50%,30%);}
    .swrap a{color: #fff;text-decoration: none;}
  

</style>
<body>
    <div class="nav" style="box-shadow: 0px 5px 5px rgba(0,0,0,0.6);background-color: #F7F7F7;">    
        <a href="" style="" class="lnkimg"><img src="logo4.jpeg" style="" alt="logo" class="lgo">
        <div class="lnk">
        <a href="index.php" class="lrghd">Home</a>
        <a href="index.php#about" class="lrghd">About</a>
        <a href="#service" class="lrghd">Services</a>
        <a href="#contact" class="lrghd">Contact</a>
        <button class="minnav" id="minnav"><i class="fas fa-bars"></i></button>
        <div class="dropcon" id="dropcon">
            <a href="">Home</a>
            <a href="#about">About</a>
            <a href="#service">Services</a>
            <a href="#contact">Contact</a>
        </div>
        </div>
    </div>
    <div class="btt">
            <a href="#home"><center><img src="btt.png" style="height: 40px;" alt="bttlogo"></center></a>
        </div>
    <div class="hero" id="home">
        <div class="overlay">
            <div class="herotxt">
                <div class="htxt">
                    <div class="swrap">
                        <div class="stxt"> <a href="index.php">Home</a> >&nbsp;&nbsp;&nbsp; Services</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="background-color: #eee;" id="service">
    <div class="contain">
        <center><h1>What we offer ?</h1></center>
        <div class="row">
            <div class="col serv">
                <div class="servcon">
                    <div class="servtxt">
                        <center><div style="height: 100px;width: 100px;"><img src="propertythin.png" style="height: 100px;" alt="propertylogo"></div></center>
                        <h3>Property management</h3>
                        <p>Inventory checks both interior & exterior at the time of tenant move-in and exit, minor and regular repair/maintenance, six monthly inspection visits and upkeep of the property, Providing real time video and photos to owners.</p>
                        <button id="viucrt1">View Flowchart</button>
                    </div>
                </div>
            </div>
            <div class="col serv">
                <div class="servcon">
                    <div class="servtxt">
                        <center><div style="height: 100px;width: 100px;"><img src="rent.png" style="height: 100px;" alt="rentlogo"></div></center>
                        <h3>Tenant management</h3>
                        <p>Tenant search, facilitate tenant move-in/out, police verification, legal documentations and society formalities, seamless renewal agreement or tenant replacement</p>
                        <button id="viucrt2">View Flowchart</button>
                    </div>
                </div>
            </div>
            <div class="col serv">
                <div class="servcon">
                    <div class="servtxt">
                        <center><div style="height: 100px;width: 100px;"><img src="tenantpng.png" style="height: 100px;" alt="tenantlogo"></div></center>
                        <h3>Rent &amp; Deposit management</h3>
                        <p>Collection of security deposit & monthly rent. Rent transfer, bill payment and society payment. Exit settlement</p>
                        <button id="viucrt3">View Flowchart</button>
                    </div>
                </div>
            </div>
            <div class="col serv">
                <div class="servcon">
                    <div class="servtxt">
                        <center><div style="height: 100px;width: 100px;"><img src="control.png" style="height: 100px;" alt="propertycontrollogo"></div></center>
                        <h3>Your Property - Your Control</h3>
                        <p>Tenants are finalised post your approval. All expenses, including minor one are approved by you.<br>Our agreements are simple with no hidden charges and detailed account statements will be provided preodically.</p>
                        <button id="viucrt4">View Flowchart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="contain" id="all">
        <img src="new7.jpg" style="width: 100%;" alt="flochart">
    </div>
    <div class="contain hdcrt" id="propmg">
        <img src="propmg.png" style="width: 100%;" alt="flochart">
    </div>
    <div class="contain hdcrt" id="tntmg">
        <img src="tntmg.png" style="width: 100%;" alt="flochart">
    </div>
    <div class="contain hdcrt" id="ypycmg">
        <img src="ypycmg.png" style="width: 100%;" alt="flochart">
    </div>
    <div class="contain" id="contact"  style="background-color: #eee;">
        <div class="contact row">
            <center><h1>Get in Touch</h1>
                <p>For more info or inquiry about out services, pricing please feel free to drop a message</p></center>
                <br><br>
            <div class="col confrm">
                <br><br>
            <form>
                <input type="text" name="" placeholder="Name">
                <input type="email" name="" placeholder="Email">
                <textarea name="" rows="7" placeholder="Enter your message"></textarea>
                <button>SEND</button>
            </form>
            </div>
            <div class="col">
                <div class="contxt">
                    <p><i class="fas fa-phone-alt"></i> 99888-83143</p>
                    <p><i class="far fa-map"></i> DS Mansion, Ground floor, RG Baruah road, Ghy - 781005</p>
                    <p><i class="fas fa-at"></i> email address</p>
                    <a href="https://www.google.com/maps/place/DS+Mansion/@26.1627592,91.7804625,19.25z/data=!4m12!1m6!3m5!1s0x375a59f96e44bc49:0xb59f2a8e2d66ccbe!2sDS+Mansion!8m2!3d26.1627074!4d91.7810183!3m4!1s0x375a59f96e44bc49:0xb59f2a8e2d66ccbe!8m2!3d26.1627074!4d91.7810183" target="_blank"><img src="maps3.jpg" style="width: 100%;height: 300px;object-fit: cover;" alt="map"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="contain2">
        <div class="footer">
            <div class="slink">
                <a href=""><i class="fab fa-facebook" style=""></i></a>
                <a href=""><i class="fab fa-instagram" style=""></i></a>
                <a href=""><i class="fab fa-twitter" style=""></i></a>
            </div>
           <p>&copy; 2020 ZAYNE. All rights reserved.</p> 
        </div>
    </div>
<script>
$(document).ready(function() {
  $('#minnav').click(function() {
    $("#dropcon").toggle();
  });
});
$(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 600) {
    $('.btt').fadeIn();
  } else {
    $('.btt').fadeOut();
  }
});
$(document).ready(
    function(){
        $("#viucrt1").click(function () {
            $("#all").addClass("hdcrt");
            $("#tntmg").addClass("hdcrt");
            $("#ypycmg").addClass("hdcrt");
            $("#propmg").removeClass("hdcrt");
            
        });

    });
    $(document).ready(
    function(){
        $("#viucrt2").click(function () {
            $("#all").addClass("hdcrt");
            $("#tntmg").removeClass("hdcrt");
            $("#ypycmg").addClass("hdcrt");
            $("#propmg").addClass("hdcrt");
        });

    });
    $(document).ready(
    function(){
        $("#viucrt3").click(function () {
            $("#all").addClass("hdcrt");
            $("#tntmg").addClass("hdcrt");
            $("#ypycmg").addClass("hdcrt");
            $("#propmg").addClass("hdcrt");
        });

    });
    $(document).ready(
    function(){
        $("#viucrt4").click(function () {
            $("#all").addClass("hdcrt");
            $("#tntmg").addClass("hdcrt");
            $("#ypycmg").removeClass("hdcrt");
            $("#propmg").addClass("hdcrt");
        });

    });
</script>

</body>
</html>
