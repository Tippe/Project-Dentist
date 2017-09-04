<div class="container"> <!-- iets met een class/  -->
    <div class="row">   <!-- class van bootstrap  -->
        <div class="col-md-6 col-md-offset-3"> <!-- colum/ medium screen size, buiten kanten zijn dan 3 (6 intotaal) -->

           <form action="" method="post" name="Login_Form" class="form-signin">
            <!-- action waar ale data naar toe gaat -->
              <fieldset>
                <div id="legend">
                  <legend class="">Login</legend>
                </div>
                <div class="control-group">
                  <!-- Username -->
                  <label class="control-label"  for="username">Username</label>
                  <div class="controls">
                    <input type="text" id="username" name="username" placeholder="" class="input-xlarge">
                  </div>
                </div>
                <div class="control-group">
                  <!-- Password-->
                  <label class="control-label" for="password">Password</label>
                  <div class="controls">
                    <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
                  </div>
                </div>
                <div class="control-group">
                  <!-- Button -->
                  <div class="controls">
                    <button class="btn btn-success">Login</button>
                  </div>
                </div>
              </fieldset>
            </form>
        </div>
    </div>
</div>