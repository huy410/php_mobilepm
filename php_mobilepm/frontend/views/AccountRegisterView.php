<!-- load file layout chung -->
<?php $this->layoutPath = "LayoutTrangTrong.php"; ?>

 <div class="animate form login_form">
          <section class="login_content">
            <form method="post" action="index.php?controller=account&action=registerPost">
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" name="name" placeholder="Username" required="" style="width: 60%; margin: auto;" />
              </div>
              <div>
                <input type="email" class="form-control" name="email" placeholder="Email" required="" style="width: 60%; margin: auto;margin-top: 20px;margin-bottom: 20px;"/>
              </div>
              <div>
                <input type="password" class="form-control" name="password" placeholder="Password" required="" style="width: 60%; margin: auto;margin-top: 20px;margin-bottom: 20px;"/>
              </div>
              <div>
                <input type="text" name="address" class="form-control" placeholder="Address" required="" style="width: 60%; margin: auto;margin-top: 20px;margin-bottom: 20px;"/>
              </div>
              <div>
                <input type="text" name="phone" class="form-control" placeholder="Phone" required="" style="width: 60%; margin: auto;margin-top: 20px;margin-bottom: 20px;"/>
              </div>
              <div>
                <input type="submit" value="Sign up" class="btn btn-info">
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="index.php?controller=account&action=login" class="to_register"> Log in </a>
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