<?php
		$this->load->view('admin\_header');
		$this->load->view('admin\_sidebar');
		
?>
<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Ürün Resim Galeri Ekleme </h1>
                        

                    </div>
                </div>
                <!-- /. ROW  -->
			<div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Eklenecek resimi seçiniz</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                 Yüklenecek resim dosyası türleri (gif|jpg|png) max size: 1024x1024, boyut:100kb
				<?php if ($this->session->flashdata("mesaj")) {?>
				<div class="btn btn-warning btn-block ">
					
						<p><?=$this->session->flashdata("mesaj")?></p>
				</div>
				<?php }?>
				<form role="form" method="post" enctype="multipart/form-data" action="<?=base_url()?>admin/urunler/galeri_kaydet/<?=$id?>">
                  <div class="box-body">
					
					<div class="form-group">                     
                      <input type="file" name="resim" class="form-control" id="exampleInputEmail1" placeholder="Yükleme için Gözat" onchange="this.form.submit()">
                    </div>
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Resim Yükle</button>					
                  </div>				  
                </form>
				<br>
				<?php foreach($veriler as $rs) {?>
					<img src="<?=base_url()?>uploads/<?=$rs->resim?>" height="100">
					<td><a href="<?=base_url()?>admin/urunler/galeri_sil/<?=$id?>/<?=$rs->Id?>" class="btn btn-xs btn-danger" onclick="return confirm('Silinecek Emin Misiniz?')">Sil</a>
				<?php }?>	
              </div>
                       
                

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
<?php
		$this->load->view('admin\_footer');
		
?>	