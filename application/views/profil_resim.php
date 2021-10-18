<div class="col-sm-9">
	<div class="blog-post-area">
		<h2 class="title text-center">Bize iletmek istediklerinizi Yazınız</h2>
								
			<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Eklenecek resimi seçiniz</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                 Yüklenecek resim dosyası türleri (gif|jpg|png) max size: 1024x1024, boyut:100kb
				<?php if ($this->session->flashdata("mesaj")) {?>
				<div class="btn btn-warning btn-block  ">
					<h4>Hata!</h4>
						<p><?=$this->session->flashdata("mesaj")?></p>
				</div>
				<?php }?>
				<form role="form" method="post" enctype="multipart/form-data" action="<?=base_url()?>uye/resim_kaydet/<?=$id?>">
                  <div class="box-body">
					
					<div class="form-group">                     
                      <input type="file" name="resim" class="form-control" id="exampleInputEmail1" placeholder="Yükleme için Gözat">
                    </div>
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Resim Yükle</button>					
                  </div>				  
                </form>
				<br>
					<img src="<?=base_url()?>uploads/<?=$veri[0]->resim?>" height="250">
					
              </div>
					
	    		</div>
	    		
	    	</div>
	</div>
</div>