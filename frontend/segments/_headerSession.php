

<div>
  <div id="carouselExampleSlidesOnly" class="carousel slide"  data-ride="carousel">
    <div class="carousel-inner" style="height: 100px;">
      <div class="carousel-item active">
        <img class="d-block h-100" src="img/header_pink.png" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block h-100" src="img/header_lime.png" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block h-100" src="img/header_blue.png" alt="Third slide">
      </div>
    </div>
  </div>
</div>

<!--Navbar-->
<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php?page=home">FriendsBook</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li id="navItemHome" class="nav-item">
        <a class="nav-link" href="index.php?page=home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li id="navItemEntry" class="nav-item">
        <a class="nav-link" href="index.php?page=newEntry">New Entry</a>
      </li>
      <li id="navItemDashboard" class="nav-item">
        <a class="nav-link" href="index.php?page=myFriendsBook">My FriendsBook</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <div class="btn-group" role="group" aria-label="Basic example">
        <!-- Button Logout -->
        <!-- <button id="btnLogout" onclick=window.location.href = 'http://www.google.com' type="button" class="btn btn-secondary">Logout</button> -->


        <form action="" method="post">
          <?php
            if(isset($_SESSION['username'])){
              echo('<input class="btn btn-secondary" type="button" value="Welcome back,  ' . $_SESSION['username'] . '"></input>');
            }
          ?>
          <input class="btn btn-danger" onClick="window.location.href = 'php/logout.php'" type="button" value="Logout"></input>

        </form>
      </div>
    </form>
  </div>
</nav>
