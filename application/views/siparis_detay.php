<div class="col-sm-9 padding-right">
	<div class="features_items"><!--features_items-->
		<h2 class="title text-center">Sipariş Detay</h2>
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
							<th>Adı </th>
							<th>Fiyat</th>
							<th>Miktar</th>
							<th>Tutar</th>
							<th>İptal</th>			
						</tr>
					<?php
					$rn=0;
					$toplam=0;
					foreach ($veriler as $rs)
					{ $rn++;					
						$toplam+=$rs->tutar;
					?>			
						<tr>
							<td style="width: 10px"><?=$rn?></td>

							<td><?=$rs->adi?></td>
							<td><?=$rs->fiyat?> TL</td>
							<td><?=$rs->adet?></td>
							<td><?=$rs->tutar?> TL </td>
							
							<td><a href="<?=base_url()?>uye/siparis_iptal/<?=$rs->Id?>" class="btn btn-xs btn-danger" onclick="return confirm('İptal Edilecek Emin Misiniz?')"><i class="fa fa-remove">İptal</a></td>
						
						
						</tr>
					<?php 
					}?>
					</tbody> 
				</table>				
				Sipariş	Toplamı :<?=$toplam?> TL
				
				</div>
			</div>
</div>