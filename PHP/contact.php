<?php 
  require "../includes/common.php";
  if(isset($_SESSION['email'])) {
    header('location: home.php');
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>About Us | E-Store</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <?php 
    include "../includes/header.php";
  ?>
    <div class="container-fluid top">
      <div class="row">
        <div class="col-sm-9">
          <h2>Live Support</h2>
          <div>
            <h4>24 hours | 7 days a week | 365 days a year Live Technical Support</h4>
            <p>Aliquam et turpis rhoncus, aliquet eros id, pulvinar nulla. Donec tempor iaculis est, egestas vehicula enim. Nulla ut odio nulla. Mauris mattis mattis ornare. Vestibulum rhoncus est non faucibus sagittis. Sed id dui non quam imperdiet eleifend. Aliquam fermentum eget neque a semper. Curabitur commodo eget libero in efficitur. Nam varius euismod orci sed fermentum. Quisque malesuada nisi ut nibh facilisis, et tincidunt elit sagittis. Sed lacinia facilisis dignissim. Vivamus in luctus nulla. Vestibulum condimentum malesuada dolor, at blandit dolor dictum vitae. Cras egestas urna vel arcu consequat, nec feugiat augue varius.</p>
          </div>
        </div>
        <div class="col-sm-3">
          <img src="../Img/contact.jpg" class="img-responsive" alt="Customer Care">
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-sm-8">
          <h2>Contact US</h2>
          <form method="post" action="#">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Name" minlength="3" pattern="[A-Za-z\s]+" required>
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" class="form-control" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" class="form-control" rows="10" cols="50" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary down">Submit</button>
        </form>
        </div>
        <div class="col-sm-4">
          <h2>Company Information</h2>
          <p>500 Lorem Ipsum Dolor Sit,</p>
          <p>22-56-2-9 Sit Amet, Lorem,</p>
          <p>USA</p>
          <p>Phone: (00) 222 666 444</p>
          <p>Fax: (000) 000 00 00 0</p>
          <p>Email: info@mycompany.com</p>
          <p>Follow on: Facebook, Twitter</p>
        </div>
      </div>
    </div>
    <?php 
        include "../includes/Footer-Bot.php";
    ?>
</body>
</html>