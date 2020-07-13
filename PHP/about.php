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
    <div class="container top">
      <div class="row">
        <div class="col-md-4">
          <div class="panel panel-default about">
            <div class="panel-body">
              <h2>WHO WE ARE</h2>
              <img src="../Img/who.jpg" class="img-responsive" alt="Who-We-Are">
              <br>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisis erat vel elementum placerat. Duis eget velit at purus pellentesque commodo. Aenean vitae neque quam. Sed id arcu in erat tristique aliquet. Donec vulputate suscipit erat id iaculis. Curabitur vel pretium dolor. Praesent ut orci imperdiet, interdum justo eu, pellentesque lacus. Suspendisse eu faucibus nisi.</p>
              <br>
              <p>Aliquam et turpis rhoncus, aliquet eros id, pulvinar nulla. Donec tempor iaculis est, egestas vehicula enim. Nulla ut odio nulla. Mauris mattis mattis ornare. Vestibulum rhoncus est non faucibus sagittis. Sed id dui non quam imperdiet eleifend. Aliquam fermentum eget neque a semper. Curabitur commodo eget libero in efficitur. Nam varius euismod orci sed fermentum. Quisque malesuada nisi ut nibh facilisis, et tincidunt elit sagittis. Sed lacinia facilisis dignissim. Vivamus in luctus nulla. Vestibulum condimentum malesuada dolor, at blandit dolor dictum vitae. Cras egestas urna vel arcu consequat, nec feugiat augue varius.</p>
            </div>              
          </div>
        </div>
        <div class="col-md-4">
          <div class="panel panel-default about">
            <div class="panel-body">
              <h2>OUR HISTORY</h2>
              <br>
              <p><strong>1998-</strong></p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisis erat vel elementum placerat. Duis eget velit at purus pellentesque commodo. Aenean vitae neque quam. Sed id arcu in erat tristique aliquet. Donec vulputate suscipit erat id iaculis. Curabitur vel pretium dolor. Praesent ut orci imperdiet, interdum justo eu, pellentesque lacus. Suspendisse eu faucibus nisi.</p>
              <p><strong>2002-</strong></p>
              <p>Suspendisse molestie viverra gravida. Curabitur sit amet ipsum ex. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean turpis ligula, rutrum eu lacus ut, maximus tincidunt sem. Vestibulum in mollis arcu, ac tristique sapien. Phasellus consequat lorem id nisi feugiat elementum. Curabitur viverra libero id volutpat blandit. Duis diam ex, condimentum vel ipsum eget, ullamcorper sodales nisl. Ut vel congue libero, in rutrum velit. Nam maximus lacus ac est condimentum semper.</p>
              <p><strong>2008-</strong></p>
              <p>Aliquam non enim felis. Suspendisse sit amet venenatis sem. In et lorem quis mi consectetur ullamcorper ac at tellus. Sed eu mi vel ex sagittis facilisis. Curabitur faucibus vehicula nisi, vitae tristique nisi molestie eu. Curabitur eget blandit augue. Sed vitae eros volutpat, sagittis nisi sit amet, luctus turpis. Morbi consectetur, odio non consectetur accumsan, lorem dolor blandit sapien, nec blandit felis lorem sed leo. Donec pulvinar lectus at turpis scelerisque sagittis. Praesent at facilisis quam. Aenean vitae sem erat. Sed fermentum tellus non purus tristique accumsan. Sed tincidunt magna tempus fermentum sollicitudin. Mauris gravida lorem nisi, at cursus eros tempor vitae.</p>
              <p><strong>2015-</strong></p>
              <p>Sed dignissim sem eget purus sagittis, quis luctus tellus consequat. Vivamus tempus fermentum tempus. Donec hendrerit vestibulum efficitur. Cras sagittis purus imperdiet libero convallis interdum. Integer sit amet odio rutrum, egestas libero a, pellentesque nunc. Praesent mauris augue, sodales eget consectetur placerat, finibus non tellus. Praesent pharetra quam odio, non venenatis orci ultrices vitae. Vivamus porttitor elit lectus, vel pharetra ligula luctus eget.</p>
            </div>              
          </div>
        </div>
        <div class="col-md-4">
          <div class="panel panel-default about">
            <div class="panel-body">
              <h2>OPPORTUNITIES</h2>
              <br>
              <p><strong>Available Roles</strong></p>
              <!-- <ol>
                <li>Jr./Sr. Web Developer [Full Time Role + also available as a 6 Months Internship]</li>
                <li>Business Apprentice [6 Months Internship]</li>
                <li>Manager at backend operations [Full Time Role + also available as a 6 Months Internship]</li>
              </ol> -->
              <p>1. Jr./Sr. Web Developer [Full Time Role + also available as a 6 Months Internship]</p>
              <p>2. Business Apprentice [6 Months Internship]</p>
              <p>3. Manager at backend operations [Full Time Role + also available as a 6 Months Internship]</p>
            </div>              
          </div>
        </div>
      </div>
    </div>
    <?php 
        include "../includes/Footer-Bot.php";
    ?>
</body>
</html>