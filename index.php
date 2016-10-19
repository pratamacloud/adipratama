<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>adipratama.com</title>

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,400i,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Miriam+Libre:400,700" rel="stylesheet">

    <link rel="stylesheet" href="css\bootstrap.min.css" media="screen" title="no title">
    <link rel="stylesheet" href="assets\css\style.css" media="screen" title="no title">
    <link rel="stylesheet" href="assets\css\mstyle.css" media="screen" title="no title">
  </head>
  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <nav class="navbar navbar-default navbar-fixed-top apnavbarcustom">
      <div class="container ap-containercustom">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand page-scroll aplogo" href="http://adipratama.com/">Adi Pratama</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right collnavright">
            <li><a class="page-scroll" href="#intro">Home</a></li>
            <li><a class="page-scroll" href="#service">Service</a></li>
            <li><a class="page-scroll" href="#portofolio">Portofolio</a></li>
            <li><a class="page-scroll" href="#contact">Contact</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <section class="intro" id="intro">
      <div class="container ap-containercustom">
        <div class="apuserpic">
          <img src="assets\img\profiles\adipratama.JPG" alt="..." class="img-circle ">
        </div>
        <p class="apname">
          <span class="apnametext">ADI PRATAMA</span>
        </p>
        <div class="apskilldesc">
          IT NETWORK AND PHP DEVELOPER
        </div>
      </div>
    </section>

    <section class="service" id="service">
      <div class="container ap-containercustom">
        <div class="callout">
          <span class="text">SERVICE</span>
        </div>

        <div class="service-title">
          What am I doing ?
        </div>

        <div class="row">
          <div class="col-md-6 colcustom">
            <div class="aprow">
              <div class="callout-head">
                <h3 class="callout-title">IT Network</h3>
                <img class="callout-icon" src="assets\img\network.png" alt="" />
              </div>
              <p class="ptitle">
                Install and Configure the server, the Internet, WAN, LAN, configuration RouterBoard MikroTik and Cisco, Switch, Firewall and Security, Web Server, Port Fordwarding, DDNS, Mail Server and Trobleshoot.
              </p>
            </div>
          </div>
          <div class="col-md-6 colcustom">
            <div class="aprow">
              <div class="callout-head">
                <h3 class="callout-title">PHP Developer</h3>
                <img class="callout-icon" src="assets\img\code.png" alt="" />
              </div>
              <p class="ptitle">
                Create a Website using the Framework and the latest Technology with a Professional appearance and Responsive.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="portofolio" id="portofolio">
      <div class="container ap-containercustom">
        <div class="calloutportofolio">
          <span class="textportofolio">PORTOFOLIO</span>
        </div>
      </div>
    </section>

    <section class="contact" id="contact">
      <div class="container ap-containercustom">
        <div class="callout">
          <span class="text">CONTACT</span>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="callout-contactleft">
              <div class="media">
                <div class="media-left media-middle">
                  <a href="#">
                    <img class="media-object icon-contact" src="assets\img\location.png" alt="...">
                  </a>
                </div>
                <div class="media-body">
                  Jl. Flamboyan No 44 - Srengseng, Kebon Jeruk - Jakarta Barat, 11630
                </div>
              </div>
              <div class="media">
                <div class="media-left media-middle">
                  <a href="#">
                    <img class="media-object icon-contact" src="assets\img\email.png" alt="...">
                  </a>
                </div>
                <div class="media-body">
                  pratamacloud@gmail.com
                </div>
              </div>
              <div class="media">
                <div class="media-left media-middle">
                  <a href="#">
                    <img class="media-object icon-contact" src="assets\img\phone.png" alt="...">
                  </a>
                </div>
                <div class="media-body">
                  +6285692809066
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="callout-contactright">
              <form method="post" action="controller\sendemail.php">
                <div class="form-group">
                  <input type="name" name="name" class="form-control" id="exampleInputNames1" placeholder="Name">
                </div>
                <div class="form-group">
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="subject"  name="subject" class="form-control" id="exampleInputSubject1" placeholder="Subject">
                </div>
                <div class="form-group">
                  <textarea name="message" class="form-control" rows="5" placeholder="Message"></textarea>
                </div>
                <button type="submit" class="btn btn-default btn-lg btn-block">Send</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer">
      <div class="container ap-containercustom">
        <div class="callout-footer">
          <p>
            &copy; 2016 adipratama.com. All Rights Reserved.
          </p>
          <p>
            Adi Pratama
          </p>
        </div>
        </div>
    </footer>

    <script src="js\jquery.min.js" charset="utf-8"></script>
    <script src="js\bootstrap.min.js" charset="utf-8"></script>

    <!-- scrolling -->
    <script src="assets\js\jquery.easing.min.js" charset="utf-8"></script>
    <script src="assets\js\scrolling-nav.js" charset="utf-8"></script>
  </body>
</html>
