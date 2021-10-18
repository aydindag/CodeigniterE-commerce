<?php
		$this->load->view('admin\_header');
		$this->load->view('admin\_sidebar');
		
?>
<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Üye Düzenleme</h1>
                        

                    </div>
                </div>
                <!-- /. ROW  -->
			<div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Üye bilgilerini giriniz</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" action="<?=base_url()?>admin/uyeler/guncelle/<?=$veri[0]->Id?>">
                  <div class="box-body">
					
					<div class="form-group">
                      <label for="exampleInputEmail1">Adı Soyadı</label>
                      <input type="text" name="adsoy" value="<?=$veri[0]->adsoy?>" class="form-control" id="exampleInputEmail1" placeholder="Adı Soyadı">
                    </div>
					
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" name="email" value="<?=$veri[0]->email?>" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Şifre</label>
                      <input type="password" name="sifre" value="<?=$veri[0]->sifre?>" class="form-control" id="exampleInputPassword1" placeholder="Şifre">
                    </div>
					
					<div class="form-group">
                      <label for="exampleInputEmail1">Telefon</label>
                      <input type="text" name="tel" value="<?=$veri[0]->tel?>" class="form-control" id="exampleInputEmail1" placeholder="Telefon">
                    </div>
					
					<div class="form-group">
                      <label for="exampleInputEmail1">Adres</label>
                      <input type="text" name="adres" value="<?=$veri[0]->adres?>" class="form-control" id="exampleInputEmail1" placeholder="Adres">
                    </div>
					
					<div class="form-group">
						<label for="exampleInputEmail1">Şehir</label>
						<select class="form-control"name="sehir">
								<option><?=$veri[0]->sehir?></option>
                                <option>Ankara</option>
                                <option>İstanbul</option>
                                <option>Gaziantep</option>
                                <option>Kahramanmaraş</option>
								<option>Urfa</option>
								
                        </select>
                    </div>
					
                   <div class="form-group">
						<label for="exampleInputEmail1">Yetki</label>
						<select class="form-control"name="yetki">
								<option><?=$veri[0]->yetki?></option>
                                <option>uye</option>
                                <option>satici</option>
                                <option>yazar</option>
                                <option>yorumcu</option>
								
								
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