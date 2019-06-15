<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://www.gstatic.com/firebasejs/3.3.0/firebase.js"></script>
    <!--<script type="text/javascript" src="admin.js"></script>-->
    <script src="https://cdn.firebase.com/libs/firebaseui/3.5.2/firebaseui.js"></script>
    <link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/3.5.2/firebaseui.css" />

    <title>Admin Sign Up</title>
  </head>
  <body>
    <div class="main_wrapper" style="background-color: #5F9EA0;height:670px">
      <div class="header_wrapper" style="background-color: #6495ED;height: 150px">
        <h1 style="text-align: center;font-family: times new roman;font-size: 75px">Sign Up Admin Here!!</h1>
      </div>
      <div class="content_wrapper" style="height: 200px">
        <input type="email" class="form-control" id="email_field" placeholder="Enter your email">
        <input type="password" class="form-control" id="password_field" placeholder="Enter your password">
        <button type="submit" class="btn btn-primary" id="btnSignUp" onclick="btnSignUp()">Sign Up</button>
        <script type="text/javascript" src="admin.js"></script>
        <!-- <form class="col-8 offset-4 mt-5" method="post" action="index.html">
          <div class="form-group row">
            <label for="exampleInputEmail1" class="col-2">Email address</label>
            <div class="col-5">
              
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputPassword1" class="col-2">Password</label>
            <div class="col-5">
              
            </div>
          </div>
          <div class="form-group row">
            <label class="col-2"></label>
            <div class="col-5">
              
            </div>
          </div>
          
        </form>-->
      </div>
    </div>
  </body>
</html>