<div class="col-sm-9">
	<div class="blog-post-area">
		<h2 class="title text-center">Hesap bilgilerim</h2>
							
			<form class="form-horizontal" method="post" action="<?=base_url()?>uye/uye_guncelle">
		
				<?php if ($this->session->flashdata("mesaj")) {?>
				<div class="callout callout-info">
					<p><?=$this->session->flashdata("mesaj")?></p>
				</div>		
				<?php } ?>
				
			<div class="control-group">
				<label class="control-label" for="inputFname">Adı Soyadı<sup>*</sup></label>
				<div class="controls">
					<input type="text" name="adsoy" value="<?=$uye[0]->adsoy?>" placeholder="Adınız Soyadınız">
				</div>	
			</div>
			<div class="control-group">
				<label class="control-label" for="inputFname">Telefon<sup>*</sup></label>
				<div class="controls">
					<input type="text" name="tel" value="<?=$uye[0]->tel?>" placeholder="Telefon">
				</div>	
			</div>
			<div class="control-group">
				<label class="control-label" for="inputFname">Email<sup>*</sup></label>
				<div class="controls">
					<input type="email" name="email" value="<?=$uye[0]->email?>" placeholder="Email">
				</div>	
			</div>
			<div class="control-group">
				<label class="control-label" for="inputFname">Şifre<sup>*</sup></label>
				<div class="controls">
					<input type="password" name="sifre" value="<?=$uye[0]->sifre?>" placeholder="Sifre">
				</div>	
			</div>
			<div class="control-group">
				<label class="control-label" for="inputFname">Adres<sup>*</sup></label>
				<div class="controls">
					<input type="text" name="adres" value="<?=$uye[0]->adres?>" placeholder="Adres">
				</div>	
			</div>
			<div class="control-group">
				<label class="control-label" for="inputFname">Şehir<sup>*</sup></label>
				<div class="controls">
					<input type="text" name="sehir" value="<?=$uye[0]->sehir?>" placeholder="Şehir">
				</div>	
			</div>
			<br>
			<br>
			 <div class="control-group">
				<div class="controls">
					<input type="submit" name="submitAccount" value="BİLGİLERİ GUNCELLE" class="exclusive shopBtn">
				</div>
			</div>
			</form>
			
	</div>
</div>
