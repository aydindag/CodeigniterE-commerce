<div class="col-sm-9 padding-right">
	<div class="features_items"><!--features_items-->
		<h2 class="title text-center">Siparişlerim</h2>
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
							<th>Tarih </th>
							<th>Adı </th>
							<th>Tutar</th>
							<th>şehir</th>
							<th>Durumu</th>
							<th>Detay</th>			
						</tr>
					<?php
					$rn=0;
					
					foreach ($veriler as $rs)
					{ $rn++;
			
					?>			
						<tr>
							<td style="width: 10px"><?=$rn?></td>
							<td><?=$rs->tarih?></td>
							<td><?=$rs->adsoy?> TL</td>
							<td><?=$rs->tutar?></td>
							<td><?=$rs->sehir?></td>
							<td>
							<?php if ($rs->siparisdurumu=="kargoda")
							{?>
								<a href="<?=$rs->kargo?>" class="btn btn-block btn-xs btn-success">Kargo Takip</a>
							<?php }?>	
							<?=$rs->siparisdurumu?>
							</td>
							<td><a href="<?=base_url()?>uye/siparisdetay/<?=$rs->Id?>" class="btn btn-block btn-xs btn-success"><i class="fa fa-remove">Detay</a></td>
						
						
						</tr>
					<?php 
					}?>
					</tbody> 
				</table>				
				
				
				</div>
			</div>
</div>