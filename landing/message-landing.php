<?php
$name = strip_tags($_POST['name']);
$email = strip_tags($_POST['email']);
$phoneNumber = strip_tags($_POST['phoneNumber']);
$message = strip_tags($_POST['message']);
$headers = "From: www.cntautocare.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$emailMessage = 
  "<table class='form-email-message'>
      <tr>
        <td>C &amp; T Auto</td>
      </tr>
      <tr>
        <td>$message</td>
      </tr>
      <tr>
        <td>From: $name</td>
      </tr>
      <tr>
        <td>Phone Number: $phoneNumber</td>
      </tr>
      <tr>
        <td>Email: $email</td>
      </tr>
    </table>";

$result = mail("ctautocare561@gmail.com", "C & T Auto Care", $emailMessage, $headers);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Thank you for messaging C & T Auto, we appreciate your business.">
    <meta name="author" content="C & T Auto">
    <meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
    <link rel="icon" type="image/x-icon" href="../img/wrench-gear-favicon-16-16.png" />
    <title>C &amp; T Auto Care | Message Received</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/heroic-features.min.css" rel="stylesheet">
  </head>
  <body>
    <?php require_once('../templates/navbar.html'); ?>
    <a  name="services"></a>
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-sm-6">
          <hr class="section-heading-spacer">
          <div class="clearfix"></div>
          <h1 class="section-heading text-center">Message Received</h1>
          <hr class="paragraph-divider">
          <h3 class="text-center">Thank you for your interest in C &amp; T Auto</h3>
          <h3 class="text-center"><a href="../index.php">Return to Home Page</a></h3>
        </div>
        <div class="col-lg-5 col-lg-offset-2 col-sm-6">
          <img class="img-responsive" src="../img/mail-received.png" alt="C & T Auto Care Message Received">
        </div>
      </div>
    </div>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="col-lg-6">
              <ul class="list-inline">
                <li>
                  <a href="../index.php">Home</a>
                </li>
                <li class="footer-menu-divider">&sdot;</li>
                <li>
                  <a href="../view/contact.phpc">Contact</a>
                </li>
                <li class="footer-menu-divider">&sdot;</li>
                <li>
                  <a target="_blank" href="https://www.google.com/maps/place/1260+Plaza+Cir,+West+Palm+Beach,+FL+33404/@26.783567,-80.035563,17z/data=!3m1!4b1!4m2!3m1!1s0x88d8d4f234f64211:0x4292d655348e98bb">
                    Map</a>
                </li>
              </ul>
              <p class="copyright text-muted small">Copyright &copy; C &amp; T Auto Care. All Rights Reserved</p>
            </div>
            <div class="col-lg-6">
              <p class="copyright text-muted medium pull-right">
                <img src="../img/kb-logo-v3-75x60.png" alt="KB Software Solutions Web Design">
                <a href="http://www.kbsoftwaresolutions.com" target="_blank">Website Development by KB Software Solutions</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>