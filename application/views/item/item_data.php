<section class="content-header">
      <h1>
        Items
        <small>Item / Barang</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Item</li>
      </ol>
    </section>

    <section class="content">
    <?php $this->view('messages');?>
      <div class="box">
          <div class="box-header">
              <h3 class="box-title">Data Item</h3>
              <div class="pull-right">
                  <a href="<?=site_url('item/add')?>" class="btn btn-primary btn-flat">
                      <i class="fa fa-user-plus"></i> Create Product Item
                  </a>
              </div>
          </div>

          <div class="box-body table-responsive">
              
              

              <table class="table table-bordered table-striped" id="table1">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Kode Barang</th>
                          <th>Gambar Barang</th>
                          <th>Nama Barang</th>
                          <th>Kategori</th>
                          <th>Unit</th>
                          <th>Stok Barang</th>
                          <th>Harga Barang</th>
                          <th>Actions</th>
                      </tr>
                  </thead>

                  <tbody>
<!-- 
                      <?php 
                        $i = 1;
                        foreach($row->result() as $key => $data) {
                      ?>
                        <tr>
                            <td style="width:5%;"><?=$i++?></td>
                            <td>
                                <?=$data->barcode?> <br/>

                                <a href="<?=site_url('item/barcode_qrcode/'.$data->item_id)?>" class="btn btn-default btn-xs">
                                    Generate <i class="fa fa-barcode"></i> 
                                </a>
                            </td>
                            <td>
                                <?php if ($data->image != null) { ?>
                                    <img src="<?=base_url('uploads/product/'.$data->image)?>" style="width:100px;">
                                <?php } else { ?>
                                    No Photo
                                <?php } ?>
                            </td>
                            <td><?=$data->nama?></td>
                            <td><?=$data->category_name?></td>
                            <td><?=$data->unit_name?></td>
                            <td><?=$data->stock?></td>
                            <td>Rp <?=number_format($data->harga)?></td>
                            <td class="text-center" width="160px">
                                <a href="<?=site_url('item/edit/'.$data->item_id)?>" class="btn btn-warning btn-xs">
                                        <i class="fa fa-pencil"></i> Update
                                </a>

                                <a href="<?=site_url('item/del/'.$data->item_id)?>" 
                                    onclick="return confirm('Yakin Hapus Data ?')" class="btn btn-danger btn-xs">
                                        <i class="fa fa-trash"></i> Delete
                                </a>
                                <!-- <input type="hidden" name="user_id" value="<?=$data->user_id?>"> -->
                            </td>
                        </tr>
                      <!-- <?php 
                        } ?> -->
                      
                  </tbody>
              </table>
          </div>
      </div>

    </section>

    <script>
        $(document).ready(function() {
            $('#table1').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": {
                    "url": "<?=site_url('item/get_ajax')?>",
                    "type": "POST"
                },
                "columnDefs": [
                    {
                        "targets": [6, 7],
                        "className": 'text-right'
                    },
                    {
                        "targets": [7, -1],
                        "className": 'text-center'
                    },
                    {
                        "targets": [0, 7, -1],
                        "orderable": false
                    }
                ],
                "order": []
            })
        })
    </script>