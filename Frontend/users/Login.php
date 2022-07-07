<html>
    <head>   
       <?php include('../components/Header.php'); ?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script> 
    </head>

    <body>
      <div class="container" style="padding: 65px;">
        <div class="col mx-auto d-flex justify-content-center">
          
          <div class="card shadow lg" style="width: 50rem; padding: 55px;">
            <div class="card-body">
              <h2 class="card-title col-md-auto">Login</h2>
              <form class="needs-validation" >
                <div class="col-md-auto">
                  <label for="validationTooltipUsernamePrepend" class="form-label">Username</label>
                    <div class="input-group">
                  <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                <input type="text" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
                <!-- <div class="invalid-tooltip">
        Please choose a unique and valid username.
      </div> -->
              </div>
            </div>
              <div class="col-md-auto">
                <label for="validationDefault03" class="form-label">Password</label>
                  <input type="password" class="form-control" id="validationDefault03" required>
               </div>
                <div class="col-md-auto">
                  <div class="form-check">
                   <input class="form-check-input" type="checkbox" value="" id="remember me">
                  <label class="form-check-label">
                        Remember Me
                  </label>
              </div>
            </div>
              <div class="col-md-auto" style="padding: 5px;">
                <button class="btn btn-primary btn-lg" type="submit" >Login</button>
             </div>
            </form>
           </div>
          </div>
        </div>
      </div>
    
    </body>
    
</html>
