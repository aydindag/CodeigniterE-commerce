<div class="col-sm-9 padding-right">
	<div class="features_items"><!--features_items-->
		<h2 class="title text-center">Sepetim</h2>
<div class="well well-small">

<form class="form-horizontal" method="post" action="<?=base_url()?>uye/siparis_tamamla">

			<?php if ($this->session->flashdata("mesaj")) {?>
				<div class="callout callout-info">
					<p><?=$this->session->flashdata("mesaj")?></p>
				</div>		
				<?php } ?>
					
	<div class="control-group">
				<label class="control-label" for="inputFname">Adınız Soyadı<sup>*</sup></label>
				<div class="controls">
					<input type="text" name="adsoy" value="<?=$uye[0]->adsoy?>" placeholder="Adınız Soyadınız">
				</div>	
			</div>
			<div class="control-group">
				<label class="control-label" for="inputFname">Telefon Numarası<sup>*</sup></label>
				<div class="controls">
					<input type="text" name="tel" value="<?=$uye[0]->tel?>" placeholder="Telefon">
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
					<input type="text" name="sehir" value="<?=$uye[0]->sehir?>" placeholder="Sifre">
				</div>	
			</div>
			<div class="control-group">
				<label class="control-label" for="inputFname">Toplam Tutar<sup>*</sup></label>
				<div class="controls">
					<input type="text" name="toplam" value="<?=$toplam?>">
				</div>	
			</div>			
		******************
		KREDİ KARTI BİLGİLERİ
		******************
		
		<div class="control-group">
			<label class="controls">
			<div class="controls">
				<input type="submit" name="submitAccount" value="SİPARİŞİ TAMAMLA" class="exclusive shopBtn">
			</div>	
	</div>	
	</div>
	<form>
</div>
</div>