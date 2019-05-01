  <div class="container-fluid">

    <div class="row" style="background-color: #F5F5F5; padding-left: 20vh; padding-top: 7em; padding-right: 20vh; color: grey;">
      <small><a href="#" style="text-decoration: none; color: black;">HOME</a> / MY ACCOUNT</small>
    </div>
    <div class="row" style="background-color: #F5F5F5; padding-bottom: 5vh;padding-left: 20vh; padding-right: 20vh;">
      <h1 style="font-weight: bolder; color: black;"><strong><span style="border-bottom: 6px solid red;">MY</span> ACCOUNT</strong></h1>

    </div>
    <div class="row" style="padding-left: 20vh; padding-right: 20vh;padding-bottom: 5em; margin-top: 10vh;">
      <div class="col-md-6">
        <h2 style="font-weight: bolder; color: black;"><strong>Login</strong></h2>
        <?= form_open(base_url('Home/login')); ?>
        <form method="post">
          <div class="form-group">
            <label for="username">Username or email address</label>
            <input type="text" class="form-control" id="username_or_email" name="username_or_email">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
          </div>
          <div class="row">
            <div class="col-md-4">
              <button type="submit" name="login" class="btn btn-outline-dark" style="font-weight: bold; font-size: small;">LOG IN</button>              
            </div>
            <div class="col-md py-3 px-0">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="checkbox_remember_me">
                <label class="form-check-label" for="checkbox_remember_me" style="font-weight: bold;">Remember me</label>
              </div>              
            </div>
          </div>
          <div class="form-group">
            <a href="#" style="color: grey; text-decoration: none;"><small><u>Lost your password?</u></small></a>
          </div>
        </form>
      </div>
      <div class="col-md-5 py-3 offset-md-1 border border-grey rounded">
        <h2 style="font-weight: bolder; color: black; padding-top: 0.5em;"><strong>Register</strong></h2>
        <?= form_open(base_url('Home/register')); ?>
        <form method="post">
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="text" class="form-control" id="email" name="email">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="checkbox_policy">
            <label class="form-check-label" for="checkbox_policy">Privacy policy short description</label>
          </div>
          <button type="submit" name="login" class="btn btn-outline-dark" style="font-weight: bold; font-size: small;">REGISTER</button>              
        </form>
      </div>
    </div>
  </div>
