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
              <h3 class="box-title">Data Users</h3>
              <div class="pull-right">
                  <a href="<?=site_url('user/add')?>" class="btn btn-primary btn-flat">
                      <i class="fa fa-user-plus"></i> Add User
                  </a>
              </div>
          </div>

          <div class="box-body table-responsive">
              
              <!-- <?php print_r($row->result()) ?> -->

              <table class="table table-bordered table-striped" id="table1">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Username</th>
                          <th>Name</th>
                          <th>Address</th>
                          <th>Level</th>
                          <th>Actions</th>
                      </tr>
                  </thead>

                  <tbody>
                      <?php 
                        $i = 1;
                        foreach($row->result() as $key => $data) {
                      ?>
                        <tr>
                            <td><?=$i++?></td>
                            <td><?=$data->username?></td>
                            <td><?=$data->name?></td>
                            <td><?=$data->address?></td>
                            <td><?=$data->level == 1 ? "Admin" : "Kasir" ?></td>
                            <td class="text-center" width="160px">
                              <form action="<?=site_url('user/del')?>" method="post">
                                    <a href="<?=site_url('user/edit/'.$data->user_id)?>" class="btn btn-info btn-xs">
                                        <i class="fa fa-pencil"></i> Update
                                    </a>

                                    <input type="hidden" name="user_id" value="<?=$data->user_id?>">

                                    <button onclick="return confirm('Yakin Hapus Data ?')" class="btn btn-danger btn-xs">
                                      <i class="fa fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                      <?php } ?>
                  </tbody>
              </table>
          </div>
      </div>
      
      <!-- <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-th"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Items</span>
              <span class="info-box-number">90</span>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-truck"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Suppliers</span>
              <span class="info-box-number">8</span>
            </div>
          </div>
        </div>

        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-users"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Customers</span>
              <span class="info-box-number">180</span>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-plus"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Users</span>
              <span class="info-box-number">3</span>
            </div>
          </div>
        </div>
      </div> -->

    </section>