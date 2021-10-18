<div class="col-sm-9 padding-right">
	<div class="features_items"><!--features_items-->
		<h2 class="title text-center">Sepetim</h2>
<div class="well well-small">

			<?php if ($this->session->flashdata("mesaj")) {?>
				<div class="callout callout-info">
					<p><?=$this->session->flashdata("mesaj")?></p>
				</div>		
				<?php } ?>
					
					
	<table class="table table-bordered">
			   <tbody>     
						<tr>
							<th style="width: 10px">NR</th>
							<th>Resmi</th>
							<th>Adı Soyadı</th>
							<th>Fiyat</th>
							<th>Miktar</th>
							<th>Tutar</th>
							<th>Sil</th>			
						</tr>
					<?php
					$rn=0;
					$toplam=0;
					foreach ($veriler as $rs)
					{ $rn++;
					$tutar=$rs->satfiyat * $rs->adet;
					$toplam+=$tutar;
					?>			
					<tr>
							<td style="width: 10px"><?=$rn?></td>
							<td>
							<a href="<?=base_url()?>home/urundetay/<?=$rs->urun_id?>">
							<img src="<?=base_url()?>uploads/<?=$rs->urunresim?>" height="80" width="60"
							</a>
							</td>
							<td><?=$rs->urunadi?></td>
							<td><?=$rs->satfiyat?> TL</td>
							<td><?=$rs->adet?></td>
							<td><?=($rs->satfiyat * $rs->adet)?> TL *</td>
							
							<td><a href="<?=base_url()?>uye/sepetsil/<?=$rs->Id?>" class="btn btn-xs btn-danger" onclick="return confirm('Silinecek Emin Misiniz?')"><i class="btn btn-block btn-xs btn-remove">Sil</a></td>
						
						
						</tr>
					<?php 
					}?>
					</tbody> 
				</table>				
					Toplam :<?=$toplam?>
				<form  method="post" action="<?=base_url()?>uye/satinal">
					<input type="hidden" name="toplam" value="<?=$toplam?>" >
					
					<button type="submit" class="" value="Sepete Ekle"> Satın AL</button>
				</form>
				</div>
			</div>
</div>