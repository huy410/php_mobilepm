<!-- load file layout chung -->
<?php $this->layoutPath = "LayoutTrangTrong.php"; ?>


<div class="animate form login_form">
          <section class="login_content">
            <form method="post" action="index.php?controller=account&action=loginPost">
              <h1>Login</h1>
              <div>
                <input type="email" name="email" class="form-control" placeholder="Email" required="" style="width: 60%; margin: auto;" />
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required="" style="width: 60%; margin: auto;margin-top: 20px;margin-bottom: 20px;"/>
              </div>
              <div>
                <input type="submit" value="Login" class="btn btn-info">
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="index.php?controller=account&action=register" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-mobile"></i> Mobile CC</h1>
                  <p>© Mobile CC: the biggest tech website in the world.</p>
                </div>
              </div>
            </form>
          </section>
        </div>