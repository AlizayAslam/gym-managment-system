<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
    integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<style type="text/css">
  #inputbtn:hover {
    cursor: pointer;
  }

  .error {
    color: red;
    background-color: #f8d7da;
    border: 1px solid #f5c6cb;
    padding: 10px;
    border-radius: 5px;
  }
</style>

<body style="background:url('images/4.jpg'); background-size: cover;">
  <div class="container-fluid" style="margin-top:60px;margin-bottom:60px;color:#34495E;">
    <div class="row">
      <div class="col-md-1">
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="images/cardback.jpg" class="card-img-top">
      
          <div class="card-body">
            <center>
              <h5>  <img src="images/SIBA_Logo.jpg" alt="" width="80px" height="80px" > Admin Login</h5><br>
              <?php if (isset($_GET['error'])) { ?>
              <p class="error">
                <?php echo $_GET['error']; ?>
              </p>
              <?php } ?>
              <form class="form-group" method="POST" action="login.php">
                <div class="row">
                  <div class="col-md-4"><label>CMS: </label></div>
                  <div class="col-md-8"><input type="text" name="cms" class="form-control" placeholder="enter username"
                      required /></div><br><br>
                  <div class="col-md-4"><label>Password: </label></div>
                  <div class="col-md-8"><input type="password" class="form-control" name="password"
                      placeholder="enter password" required /></div><br><br><br>
                </div>
                <center><input type="submit" id="inputbtn" name="login_submit" value="Login" class="btn btn-primary">
                </center>
              </form>


            </center>
          </div>
        </div>
      </div>
      <div class="col-md-7">
        <div class="title">

          <h2 style="
          font-size: 50px;
          font-weight: 700;
          color: #fff;
          text-align: center;
          margin-top: 20%;
          background-color: #000;
          padding: 20px;

           ">
            Welcome to Sukkur IBA Gym Management System
          </h2>

        </div>
      </div>
    </div>
  </div>




  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
    integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
    integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
    crossorigin="anonymous"></script>
</body>

</html>