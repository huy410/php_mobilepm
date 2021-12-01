<!-- load file layout chung -->
<?php $this->layoutPath = "Layout.php"; ?>
                    <div class="col-md-12">  
                    	<?php if(isset($_GET["notify"]) && $_GET["notify"] == "emailExists"): ?>
                    		<script type="text/javascript">alert('Email đã tồn tại!');</script>
                    	<?php endif; ?>
   
    <div class="animate form login_form">
          <section class="login_content">
            <form method="post" action="<?php echo $action; ?>">
              <<h1>Add/Edit User</h1>
              <div>
                <h5 style="float: left;">Name</h5>
                <input type="text" class="form-control" value="<?php echo isset($record->name) ? $record->name:''; ?>" name="name" placeholder="Username" required="" />
              </div>
              <div>
                <h5 style="float: left;">Email</h5>
                <input type="email" class="form-control" value="<?php echo isset($record->email) ? $record->email:''; ?>" name="email" <?php if(isset($record->email)): ?> disabled <?php else: ?> required <?php endif; ?> placeholder="Email" />
              </div>
              <div>
                <h5 style="float: left;">Password</h5>
                <input type="password" class="form-control" <?php if(isset($record->email)): ?> placeholder="Không đổi password thì không nhập thông tin vào ô textbox này" <?php else: ?> required <?php endif; ?> name="password"  placeholder="Password" required="" />
              </div>
              <div>
                   <a><input type="submit" value="Submit" class="btn btn-success"></a>
              </div>

              <div class="clearfix"></div>
            </form>
          </section>
        </div>

 <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">