<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Contact C & T Auto Care to schedule appointments or ask any questions regarding your vehicle's reapirs.">
    <meta name="author" content="C & T Auto">
    <meta name="ROBOTS" content="INDEX, FOLLOW">
    <link rel="icon" type="image/x-icon" href="../img/wrench-gear-favicon-16-16.png" />
    <title>C &amp; T Auto Care | Contact</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/heroic-features.min.css" rel="stylesheet">
    <?php require_once('../templates/analytics-tracking.html');?>
    <style>
      .hidden {
        display: none;
      }
    </style>
  </head>
  <body>
    <?php require_once('../templates/navbar.html'); ?>
    <div class="container">
      <a name="top"></a>
      <div class="container contact">
        <div class="row">
          <div class="box">
            <div class="col-lg-12 contact-form">
              <!-- Place this tag where you want the widget to render. -->
              <div class="g-follow" data-annotation="bubble" data-height="20" data-href="//plus.google.com/u/0/113173493893409015902" data-rel="author"></div>
              <br>
              <h2 class="intro-text text-center">Contact C &amp; T Auto Care To Schedule Appointments and Ask Any Questions</h2>
              <hr class="paragraph-divier">
              <div class="col-lg-7">

              </div>
              <div class="col-lg-5"></div>
              <div class="col-lg-9">
                <form role="form" action="../landing/message-landing.php" method = "post"
                      onsubmit = "return onContactSubmit()">
                  <div class="row">
                    <div class="form-group col-lg-3">
                      <label>Name</label>
                      <input type="text" class="form-control" name = "name" id = "name" autofocus required>
                    </div>
                    <div class="form-group col-lg-3">
                      <label>Email Address</label>
                      <input type="email" class="form-control" name = "email" id = "email">
                    </div>
                    <div class="form-group col-lg-3">
                      <label>Phone Number</label>
                      <input type="tel" class="form-control" name = "phoneNumber" id = "phoneNumber">
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group col-lg-9">
                      <label>Message</label>
                      <textarea class="form-control" rows="6" name = "message" id = "message" required></textarea>
                    </div>
                    <div class="form-group col-lg-9 hidden">
                      <label>Comments</label>
                      <input type="text" class="form-control" name = "comments" id = "comments">
                    </div>
                    <div class="form-group col-lg-9">
                      <p class = "intro-text text-center" name = "errorElement" id = "errorElement"></p>
                    </div><br>
                    <div class="form-group col-lg-9 text-center">
                      <input type="hidden" name="save" value="contact">
                      <button type="submit" class="btn btn-primary btn-large">Send Message</button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-lg-3">
                <h3 class="text-center">Contact Information</h3>
                <div class="contact-info">
                  <p><strong>Phone: </strong>
                    <a href="tel:+15616297214" class="contact-link">561-629-7214</a>
                  </p>
                  <p><strong>Email: </strong>
                    <a href="mailto:candtautocare@yahoo.com" class="contact-link">candtautocare@yahoo.com</a>
                  </p>
                  <p><strong>Location:</strong>
                    <a class="contact-link" target="_blank"
                       href="https://www.google.com/maps/place/1260+Plaza+Cir,+West+Palm+Beach,+FL+33404/data=!4m2!3m1!1s0x88d8d4f234f64211:0x4292d655348e98bb?sa=X&ved=0CB0Q8gEwAGoVChMI0dLBtKexxwIVCJ2ACh12iQok">1260 Plaza Circle</a>
                  </p>
                  <p class="location-line-2">Singer Island, FL 33404</p>
                </div>
              </div>
              <div class="col-lg-3">
                <h3 class="text-center">Hours</h3>
                <div class="contact-info">
                  <p><strong>Monday - Friday: </strong>8:00am - 5:00pm</p>
                  <p><strong>Saturday: </strong>8:00am - 12:00pm</p>
                  <p><strong>Sunday: </strong>Closed</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php require_once('../templates/social-media.html');?>
      <?php require_once('../templates/footer.html'); ?>
      <script src = "../js/validate.js"></script>
      <!-- Place this tag in your head or just before your close body tag. -->
      <script src="https://apis.google.com/js/platform.js" async defer></script>
      </body>
    </html>