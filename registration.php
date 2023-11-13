<?php 
require_once "include/header.php";
require_once "include/navbar.php";
?>

    <div class="container">
      <div class="row">
          <div class="col-md-6 m-auto login_box pb-5 mt-5 ps-5 pe-5">
              <h2 class="mt-5 text-center pb-3">
                  Resistration Here
              </h2>
      <form action="login_data.php" method="post">
      <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">First Name</label>
          <input type="name" class="form-control" name="name">
          
      </div>
      <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Last Name</label>
          <input type="name" class="form-control" name="name">
      </div>
      <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Email</label>
          <input type="email" class="form-control" name="email">
      </div>
      <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Phone No</label>
          <input type="number" class="form-control" name="number">
      </div>
      <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" name="password">
      </div>
      <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Comfire Password</label>
          <input type="password" class="form-control" name="password">
      </div>
      <button type="submit" class="btn btn_box1 mt-3">Submit</button>
      </form>

          </div>
      </div>
  </div>

     <!-- footer strat -->
<?php 
require_once "include/footer.php";
?>