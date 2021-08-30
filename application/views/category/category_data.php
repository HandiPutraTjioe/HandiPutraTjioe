<section class="content-header">
      <h1>
        Categories
        <small>Kategori Barang</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Category</li>
      </ol>
    </section>

    <section class="content">
    <?php $this->view('messages');?>
      <div class="box">
          <div class="box-header">
              <h3 class="box-title">Data Categories</h3>
              <div class="pull-right">
                  <a href="<?=site_url('category/add')?>" class="btn btn-primary btn-flat">
                      <i class="fa fa-user-plus"></i> Add Category
                  </a>
              </div>
          </div>

          <div class="box-body table-responsive">
              
              <!-- <?php print_r($row->result()) ?> -->

              <table class="table table-bordered table-striped" id="table1">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Nama Kategori</th>
                          <th>Actions</th>
                      </tr>
                  </thead>

                  <tbody>
                      <?php 
                        $i = 1;
                        foreach($row->result() as $key => $data) {
                      ?>
                        <tr>
                            <td style="width:5%;"><?=$i++?></td>
                            <td><?=$data->category_nama?></td>
                            <td class="text-center" width="160px">
                                <a href="<?=site_url('category/edit/'.$data->category_id)?>" class="btn btn-warning btn-xs">
                                        <i class="fa fa-pencil"></i> Update
                                </a>

                                <a href="<?=site_url('category/del/'.$data->category_id)?>" 
                                    onclick="return confirm('Yakin Hapus Data ?')" class="btn btn-danger btn-xs">
                                        <i class="fa fa-trash"></i> Delete
                                </a>
                                <!-- <input type="hidden" name="user_id" value="<?=$data->user_id?>"> -->
                            </td>
                        </tr>
                      <?php } ?>
                  </tbody>
              </table>
          </div>
      </div>

    </section>