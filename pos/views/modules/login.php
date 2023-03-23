<div id="back"></div>

<div class="login-box">

  <div class="login-logo">

    <img class="img-responsive" src="views/img/template/logo-blanco-bloque.png" style="padding: 30px 100px 0 100px">
    <p class="font-weight-bold">HUNTERS GENERAL POS <p>

  </div>

  <div class="login-box-body">

    <p class="login-box-msg">Sign in to start your session</p>

    <form method="post">

      <div class="form-group has-feedback">

        <input type="text" class="form-control" placeholder="User" name="loginUser" required>

        <span class="glyphicon glyphicon-user form-control-feedback"></span>

      </div>

      <div class="form-group has-feedback">

        <input type="password" class="form-control" placeholder="Password" name="loginPass" required>

        <span class="glyphicon glyphicon-lock form-control-feedback"></span>

      </div>

      <div class="row">

        <div class="col-xs-4">

          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>

        </div>
       
      </div>

      <?php

        $login = new ControllerUsers();
        $login -> ctrUserLogin();

      ?>

    </form>
   
  </div>
  <br>
  <br>
</div>

<footer class="bg-light text-center text-lg-start" style="background-color: rgba(0, 0, 0, 0.5">
  <strong style ="font-color blue">
  <p class="font-weight-bold"> NAME: Joshua Lugaya    <p>
  <p class="font-weight-bold">  REG NO : 20/04326   <p>
  <p class="font-weight-bold">BISF : 2208   <p>
  <p class="font-weight-bold"> SUPERVISOR : Joseph Kuria   <p>
</strong>
</footer>
