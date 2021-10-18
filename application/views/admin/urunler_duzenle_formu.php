<?php
		$this->load->view('admin\_header');
		$this->load->view('admin\_sidebar');
		
?>
<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Ürünler Düzenleme</h1>
                        

                    </div>
                </div>
                <!-- /. ROW  -->
			<div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Ürünler bilgilerini giriniz</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" action="<?=base_url()?>admin/urunler/guncelle/<?=$veri[0]->Id?>">
                  <div class="box-body">
					
					<div class="form-group">
                      <label for="exampleInputEmail1">Ürün Adı</label>
                      <input type="text" name="adi" value="<?=$veri[0]->adi?>" class="form-control" id="exampleInputEmail1" placeholder="Adı">
                    </div>
					
                  
                    <div class="form-group">
                      <label for="exampleInputPassword1">Alış fiyatı</label>
                      <input type="text" name="afiyat" value="<?=$veri[0]->afiyat?>" class="form-control" id="exampleInputPassword1" placeholder="Alış Fiyatı">
                    </div>
					
					<div class="form-group">
                      <label for="exampleInputEmail1">Satış Fiyatı</label>
                      <input type="text" name="sfiyat" value="<?=$veri[0]->sfiyat?>" class="form-control" id="exampleInputEmail1" placeholder="Satış Fiyatı">
                    </div>
					
					
					
					
					<div class="form-group">
						<label for="exampleInputEmail1">Kategorisi</label>
						<select class="form-control" name="kategori">
							<option value="<?=$veri[0]->kategori?>"><?=$veri[0]->katadi?></option>                                                          
							<?php foreach($veriler as $rs) {?>
								<option value="<?=$rs->Id?>"><?=$rs->adi?></option>
							<?php }?>	
								
                        </select>
                    </div>
					

					<div class="form-group">
						<label for="exampleInputEmail1">Durum</label>
						<select class="form-control"name="durum">
								<option><?=$veri[0]->durum?></option>  
                                <option>aktif</option>             
                                <option>pasif</option>
                                
								
                        </select>
                    </div>
					<div class="form-group">
                      <label for="exampleInputEmail1">Açıklama</label>
						<script src="<?=base_url()?>ckeditor/ckeditor.js"></script>
							<textarea name="aciklama" id="editor3" rows="10" cols="80"><?=$veri[0]->aciklama?></textarea>
															
						<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace('editor3')
						</script>
                    </div>

                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Guncelle</button>
					
                  </div>
				  
                </form>
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


