<section class="content-header">
      <h1>
        Supplier
        <small>Supplier</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Suppliers</li>
      </ol>
    </section>

    <section class="content">

      <div class="box">
          <div class="box-header">
              <h3 class="box-title"><?=ucfirst($page)?> Supplier</h3>
              <div class="pull-right">
                  <a href="<?=site_url('supplier')?>" class="btn btn-warning btn-flat">
                      <i class="fa fa-undo"></i> Back
                  </a>
              </div>
          </div>

          <div class="box-body">
              <div class="row">
                  <div class="col-md-4 col-md-offset-4">

                      <form action="<?=site_url('supplier/process')?>" method="post">
                          <div class="form-group">
                              <input type="hidden" name="id" value="<?=$row->supplier_id?>" class="form-control">

                              <label for="*">Nama Supplier *</label>
                              <input type="text" name="supplier_name" placeholder="Nama Supplier" value="<?=$row->nama?>" class="form-control" autofocus required>
                          </div>

                          <div class="form-group">
                              <label for="*">Phone *</label>
                              <input type="number" name="phone" placeholder="No. Phone" value="<?=$row->no_hp?>" class="form-control" required>
                          </div>
                          
                          <div class="form-group">
                              <label for="*">Alamat *</label>
                              <textarea name="addr" id="" class="form-control" required>
                                 <?=$row->alamat?>
                              </textarea>
                          </div>
                            
                          <div class="form-group">
                              <label for="*">Deskripsi</label>
                              <input type="text" name="deskripsi" placeholder="Deskripsi" value="<?=$row->deskripsi?>" class="form-control">
                          </div>

                          <br />

                          <div class="form-group">
                              <button type="submit" name="<?=$page?>" class="btn btn-success btn-flat"><i class="fa fa-paper-plane"></i> Save</button> &nbsp;
                              <button type="reset" class="btn btn-flat">Reset</button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
      
    </section>