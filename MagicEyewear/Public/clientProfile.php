
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <title>Customer Profile</title>


<head>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="CSS/clientProfile.css?v=<?php echo time(); ?>">
  <script defer src="https://friconix.com/cdn/friconix.js"> </script>
</head>

<br>
<div class="container bootstrap snippet" style="margin:auto;">
    <div class="row">
  		<div class="col-sm-10">
         <p>Welcome, Name!</p>
      </div>
    </div>

<!---GENERAL INFO TAB--->
    <div class="container0">
      <div class="title">
            <div class="row">
              <div class="col-sm-4" >
                 <label for="first-name"><i class="fi-cnsuxl-info-solid"></i>&nbsp;General Information</label>
              </div>
                  <div class="col-sm-4" >
               <label for="first-name">&nbsp</label>
                  </div>
                  <div class="col-sm-3" >
               <label for="first-name">&nbsp;</label>
                  </div>
            </div><!--/row-->
      </div>

      <div class="labels">
        <div class="row">

          <div class="col-sm-4" >
             <br><p class="label">First name</p>
          </div>
              <div class="col-sm-4" >
                <br><p class="label">Last name</p>
              </div>
              <div class="col-sm-3" >
              <br><p class="label">Phone Number</p>
              </div>
        </div>
      </div>
      <div class="container4">

        <div class="row">

          <div class="col-sm-4" >
          <input type="text" name="" value="" placeholder="First Name" class="input">
          </div>
              <div class="col-sm-4" >
                <input type="text" name="" value="" placeholder="Last Name" class="input">
              </div>
              <div class="col-sm-3" >
              <input type="text" name="" value="" placeholder="Phone Number" class="input"><br>
              </div>
        </div>
      </div>

      <div class="container4">

        <div class="row">

          <div class="col-sm-4" >
            <br>
          </div>
              <div class="col-sm-4" >
                <br>
              </div>
              <div class="col-sm-3" >
              <br><input type="submit" name="save" value="Save" class="submit"><i class="fi-cwsuxl-check"></i>
              </div>
        </div>
      </div>
      <div class="container4">

        <div class="row">

          <div class="col-sm-4" >
            <br>
          </div>
              <div class="col-sm-4" >
                <br>
              </div>
              <div class="col-sm-3" >
              <br>
              </div>
        </div>
      </div>
    </div>
<br>

<!---SECURITY TAB--->
    <div class="container0">
      <div class="title">
            <div class="row">
              <div class="col-sm-4" >
                 <label for="first-name"><i class="fi-xnsuxl-lock-solid"></i>&nbsp;Security</label>
              </div>
                  <div class="col-sm-4" >
               <label for="first-name">&nbsp</label>
                  </div>
                  <div class="col-sm-3" >
               <label for="first-name">&nbsp;</label>
                  </div>
            </div>
      </div>

      <div class="labels">
        <div class="row">
          <div class="col-sm-4" >
             <br><p class="label">Username</p>
          </div>
              <div class="col-sm-4" >
                <br><p class="label">Email</p>
              </div>
              <div class="col-sm-3" >
              <br><p class="label">Password</p>
              </div>
        </div>
      </div>

      <div class="container4">
        <div class="row">
          <div class="col-sm-4" >
          <input type="text" name="" value="" placeholder="Username" class="input">
          </div>
              <div class="col-sm-4" >
                <input type="text" name="" value="" placeholder="Email" class="input">
              </div>
              <div class="col-sm-3" >
              <input type="text" name="" value="" placeholder="Password" class="input"><br>
              </div>
        </div>
      </div>

      <div class="container4">
        <div class="row">
          <div class="col-sm-4" >
            <br>
          </div>
              <div class="col-sm-4" >
                <br>
              </div>
              <div class="col-sm-3" >
              <br><input type="submit" name="save" value="Change Password" class="changePass">
              </div>
        </div>
      </div>

      <div class="container4">
        <div class="row">
          <div class="col-sm-4" >
            <br>
          </div>
              <div class="col-sm-4" >
                <br>
              </div>
              <div class="col-sm-3" >
              <br>
              </div>
        </div>
      </div>
    </div>

  </div>
  <br>
  <?php include "../../footer.php" ?>
</html>
