<section class="content-header">
      <h1>
        Users
        <small>Pengguna</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Users</li>
      </ol>
    </section>

    <section class="content">

      <div class="box">
          <div class="box-header">
              <h3 class="box-title">Add User</h3>
              <div class="pull-right">
                  <a href="<?=site_url('user')?>" class="btn btn-warning btn-flat">
                      <i class="fa fa-undo"></i> Back
                  </a>
              </div>
          </div>

          <div class="box-body">
              <div class="row">
                  <div class="col-md-4 col-md-offset-4">

                   <!-- <?php echo validation_errors(); ?> -->

                      <form action="" method="post">
                          <div class="form-group <?=form_error('fullname') ? 'has-error' : null ?>">
                              <label for="*">Name *</label>
                              <input type="text" name="fullname" id="" placeholder="Fullname" value="<?=set_value('fullname')?>" class="form-control" autofocus>
                              <?=form_error('fullname')?>
                          </div>

                          <div class="form-group <?=form_error('username') ? 'has-error' : null ?>">
                              <label for="*">Username *</label>
                              <input type="text" name="username" id="" placeholder="Username" value="<?=set_value('username')?>" class="form-control">
                              <?=form_error('username')?>
                          </div>

                          <div class="form-group <?=form_error('password') ? 'has-error' : null ?>">
                              <label for="*">Password *</label>
                              <input type="password" name="password" id="" placeholder="Password" value="<?=set_value('password')?>" class="form-control">
                              <?=form_error('password')?>
                          </div>

                          <div class="form-group <?=form_error('passconf') ? 'has-error' : null ?>">
                              <label for="*">Confirm Password *</label>
                              <input type="password" name="passconf" id="" placeholder="Confirm Password" value="<?=set_value('passconf')?>" class="form-control">
                              <?=form_error('password')?>
                          </div>

                          <div class="form-group">
                              <label for="*">Address</label>
                              <textarea name="address" id="" cols="30" rows="3" placeholder="Your Address" class="form-control">
                                <?=set_value('address')?>
                              </textarea>
                              <?=form_error('address')?>
                          </div>

                          <div class="form-group <?=form_error('level') ? 'has-error' : null ?>">
                              <label for="*">Level *</label>
                              <select name="level" class="form-control">
                                  <option value="">-- Pilih --</option>
                                  <option value="1" <?=set_value('level') == 1 ? "selected" : null ?>>Admin</option>
                                  <option value="2" <?=set_value('level') == 2 ? "selected" : null ?>>Kasir</option>
                              </select>
                              <?=form_error('level')?>
                          </div>

                          <br />

                          <div class="form-group">
                              <button type="submit" name="save" class="btn btn-success btn-flat"><i class="fa fa-paper-plane"></i> Save</button> &nbsp;
                              <button type="reset" class="btn btn-flat">Reset</button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
      
    </section>