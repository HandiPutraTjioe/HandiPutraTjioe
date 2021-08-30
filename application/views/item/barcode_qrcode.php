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
              <h3 class="box-title">Barcode Generator <i class="fa fa-barcode"></i></h3>
              <div class="pull-right">
                  <a href="<?=site_url('item')?>" class="btn btn-warning btn-flat btn-sm">
                      <i class="fa fa-undo"></i> Back
                  </a>
              </div>
          </div>

          <div class="box-body">
              <?php
                $generator = new \Picqer\Barcode\BarcodeGeneratorPNG();
                echo '<img src="data:image/png;base64,' .base64_encode($generator->getBarcode($row->barcode, $generator::TYPE_CODE_128)). '">';                
              ?>
              <br />
              <?=$row->barcode?>
              
              <br/><br/>

              <a href="<?=site_url('item/barcode_print/'.$row->item_id)?>" target="_blank" class="btn btn-default btn-sm">
                  <i class="fa fa-print"></i> Print Barcode
              </a>
          </div>
      </div>

      <div class="box">
          <div class="box-header">
              <h3 class="box-title">QR Code Generator <i class="fa fa-qrcode"></i></h3>
          </div>

          <div class="box-body">
              <?php
                // $qrCode = new Endroid\QrCode\QrCode('123456');
                // $qrCode->writeFile('uploads/qr-code/item-'.$row->barcode.'.png');
              ?>
          </div>
      </div>
      
    </section>