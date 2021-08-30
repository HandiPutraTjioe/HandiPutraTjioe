<section class="content-header">
      <h1>
        item
        <small>Item / Barang</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">item</li>
      </ol>
    </section>

    <section class="content">
    <?php $this->view('messages');?>
      <div class="box">
          <div class="box-header">
              <h3 class="box-title"><?=ucfirst($page)?> item</h3>
              <div class="pull-right">
                  <a href="<?=site_url('item')?>" class="btn btn-warning btn-flat">
                      <i class="fa fa-undo"></i> Back
                  </a>
              </div>
          </div>

          <div class="box-body">
              <div class="row">
                  <div class="col-md-4 col-md-offset-4">

                  <?php echo form_open_multipart('item/process')?>
                      <!-- <form action="<?=site_url('item/process')?>" method="post"> -->
                          <div class="form-group">
                              <input type="hidden" name="id" value="<?=$row->item_id?>" class="form-control">

                              <label>Barcode *</label>
                              <input type="text" name="barcode" placeholder="Kode Barang" value="<?=$row->barcode?>" class="form-control"  required>
                          </div>

                          <div class="form-group">
                              <label for="nama_barang">Nama Barang *</label>
                              <input type="text" name="nama_barang" id="nama_barang" placeholder="Nama Barang" value="<?=$row->nama?>" class="form-control" required>
                          </div>

                          <div class="form-group">
                              <label>Category *</label>
                              <select name="category" class="form-control" id="" required>
                                  <option value="">- Pilih -</option>
                                  
                                  <?php 
                                  foreach($category->result() as $key => $data) { 
                                  ?>
                                        <option value="<?=$data->category_id?>" <?=$data->category_id == $row->category_id ? "selected" : null?>><?=$data->nama?></option>
                                  <?php 
                                    } 
                                  ?>
                              </select>
                          </div>

                          <div class="form-group">
                              <label>Unit *</label>
                              <?php echo form_dropdown('unit', $unit, $selectedunit, 
                                    ['class' => 'form-control', 'required' => 'required'])?>
                          </div>

                          <div class="form-group">
                              <label>Harga Barang *</label>
                              <input type="int" name="harga" placeholder="Harga Barang" value="<?=$row->harga?>" class="form-control" required>
                          </div>

                          <div class="form-group">
                              <label>Gambar Barang</label>
                                <?php if ($page == 'edit') { 
                                    if ($row->image != null) { ?>  
                                      <div style="margin-bottom:5px;">
                                        <img src="<?=base_url('uploads/product/'.$row->image)?>" style="width:80%;">
                                      </div>  
                                <?php } } ?>
                              <input type="file" name="image" class="form-control">
                              <small>(Biarkan kosong jika tidak <?=$page == 'edit' ? 'diganti' : 'ada'?>)</small>
                          </div>

                          <br />

                          <div class="form-group">
                              <button type="submit" name="<?=$page?>" class="btn btn-success btn-flat"><i class="fa fa-paper-plane"></i> Save</button> &nbsp;
                              <button type="reset" class="btn btn-flat">Reset</button>
                          </div>
                      <!-- </form> -->

                      <?php echo form_close() ?>
                  </div>
              </div>
          </div>
      </div>
      
    </section>