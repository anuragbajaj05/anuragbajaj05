<!DOCTYPE html>
<html lang="en">

<head>
  <title href="#" >KING SAAZ</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>

<body>
  <?php include 'menu.php';  ?>

  <div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/los.jpg" alt="Los Angeles" width="device-width" height="device-height">
        <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>We had such a great time in LA!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/chicago.png" alt="chicago" width="1100" height="500">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/nyc.jpg" alt="New York" width="1100" height="500">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>

  <section class="my-5">
    <div class="py-5">
      <h3 class="text-center">About us </h3>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
          <img src="images/image1.jpeg" class="img-fluid aboutimg">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <h2>KING SAAZ</h2>
          <p class="py-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est earum minus voluptates nisi. Recusandae labore odio tenetur distinctio hic, asperiores, ipsum beatae atque voluptas maiores voluptatem laboriosam, similique nobis nulla quaerat odit minus! Harum, veritatis quasi libero iure id quae fugiat aliquam, quos reprehenderit excepturi eligendi dolorem laudantium doloribus iusto.</p>
          <a href="about.php" class="btn btn-info">know more</a>
        </div>
      </div>
    </div>
  </section>

  <section class="my-5">
    <div class="py-5">
      <h3 class="text-center">Our services </h3>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
            <img class="card-img-top" src="images/space2.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">space man</h4>
              <p class="card-text">know about universe</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
            <img class="card-img-top" src="images/space3.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">space man</h4>
              <p class="card-text">know about universe</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
            <img class="card-img-top" src="images/space.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">space man</h4>
              <p class="card-text">know about universe</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
          </div>
        </div>


      </div>
    </div>
  </section>
  <section class="my-5">
    <div class="py-5">
      <h3 class="text-center">Our Gallary </h3>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/image2.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/image2.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/image2.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/image2.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/image2.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/image2.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/image2.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/image2.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/image2.jpg" class="img-fluid pb-4">
        </div>

      </div>
    </div>
  </section>

  <section class="my-5">
    <div class="py-5">
      <h3 class="text-center">Our Gallary </h3>
    </div>

    <div class="w-50 m-auto">
      <form action="userinfo.php" method="POST">
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="user" autocomplete="off" class="form-control" placeholder="username">
        </div>
        <div class="form-group">
          <label>Email ID</label>
          <input type="text" name="email" autocomplete="off" class="form-control" placeholder="email">
        </div>
        <div class="form-group">
          <label>Mobile NO.</label>
          <input type="text" name="mobile" autocomplete="off" class="form-control" placeholder="mobile">
        </div>
        <div class="form-group">
          <label>comment</label>
          <textarea class="form-control" name="comment" placeholder="Type your comment"></textarea>
        </div>
        <div class= "form-group">
          <button type="submit" class="btn btn-primary">Submit</button>
          </div>
      </form>
    
    </div>

  </section>

  <footer class="p-3 bg-dark text-white text-center">
    <p>@rappersaaz</p>
  </footer>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>