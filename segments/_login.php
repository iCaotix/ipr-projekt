<p></p>
<div class="container">
  <div class="row">

    <div class="col-12">
<div class="alert alert-dark" role="alert">
  <h4> Login into your FriendsBook Account!</h4>
</div>
<hr />
<!--Login-->
<form id="login-form" action="index.php" method="post">

<div class="input-group input-group-sm mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-sm">Username</span>
  </div>
  <input type="text" class="form-control" name="loginName" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
</div>
<div class="input-group input-group-sm mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-sm">Password</span>
  </div>
  <input type="password" class="form-control" name="loginPassword" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
</div>
<hr />
<button id="btnLogin" type="submit" style="float: right;" class="btn btn-primary">Login</button>
<div id="login-status"></div>
</div>
</div>
</div> <!-- Ende container login -->