<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg col-lg-6 my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg">
              <div class="p-5">
            <div class="text-center">
              <h1 class="h4 text-gray-900 mb-4">Ganti Password</h1>
            </div>
        <form method="post" action="<?php echo base_url('change/index') ?>" class="user">
          <div class="form-group">
            <label for="current_password">Current Password</label>
            <input type="password" class="form-control" id="current_password" name="current_password">
          </div>
          <div class="form-group">
            <label for="new_password1">New Password</label>
            <input type="password" class="form-control" id="new_password1" name="new_password1">
          </div>
          <div class="form-group">
            <label for="new_password2">Repeat Password</label>
            <input type="password" class="form-control" id="new_password2" name="new_password2">
          </div>
          <div class="form-group">
              <button type="submit" class="btn btn-primary">Change password</button>
          </div>
        </form>

      </div>
  </div>






</div>