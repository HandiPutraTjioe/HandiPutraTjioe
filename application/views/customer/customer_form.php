<section class="content-header">
      <h1>
        Customer
        <small>Pelanggan / pembeli</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Customers</li>
      </ol>
    </section>

    <section class="content">

      <div class="box">
          <div class="box-header">
              <h3 class="box-title"><?=ucfirst($page)?> Customer</h3>
              <div class="pull-right">
                  <a href="<?=site_url('customer')?>" class="btn btn-warning btn-flat">
                      <i class="fa fa-undo"></i> Back
                  </a>
              </div>
          </div>

          <div class="box-body">
              <div class="row">
                  <div class="col-md-4 col-md-offset-4">

                      <form action="<?=site_url('customer/process')?>" method="post">
                          <div class="form-group">
                              <input type="hidden" name="id" value="<?=$row->customer_id?>" class="form-control">

                              <label for="*">Nama Customer *</label>
                              <input type="text" name="customer_name" placeholder="Nama Customer" value="<?=$row->nama?>" class="form-control" autofocus required>
                          </div>

                          <div class="form-group">
                              <label for="*">Gender</label>
                              <select name="gender" id="" class="form-control">
                                  <option value="">- Pilih Gender -</option>
                                  <option value="L" <?=$row->gender == 'L' ? 'selected' : ''?>>Laki-laki</option>
                                  <option value="P" <?=$row->gender == 'P' ? 'selected' : ''?>>Perempuan</option>
                              </select>
                          </div>

                          <div class="form-group">
                              <label for="*">Phone *</label>
                              <input type="number" name="phone" placeholder="No. Phone" value="<?=$row->phone?>" class="form-control" required>
                          </div>
                          
                          <div class="form-group">
                              <label for="*">Alamat *</label>
                              <textarea name="addr" id="" class="form-control" required>
                                 <?=$row->address?>
                              </textarea>
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