<?php
		$this->load->view('admin\_header');
		$this->load->view('admin\_sidebar');
		
?>
<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Siparişler Listesi</h1>
						<h4><p class="text-yellow"><?= $this->session->flashdata("mesaj")?></p>
						 </h4>              
						
                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="<?=base_url()?>admin/urunler/ekle" class="btn btn-sm btn-primary"><i class="fa fa-plus-square"></i> Sipariş Ekle
							</a>
							
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">

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
							
							<td><a href="<?=base_url()?>siparis/siparis_iptal/<?=$rs->Id?>" class="btn btn-xs btn-danger" onclick="return confirm('İptal Edilecek Emin Misiniz?')"><i class="fa fa-remove">İptal</a></td>
						
						
						</tr>
					<?php 
					}?>
					</tbody> 
				</table>				
				Sipariş	Toplamı :<?=$toplam?> TL
				<form  method="post" action="<?=base_url()?>admin/siparisler/guncelle/<?=$siparisid?>">
				
					Kargo Bilgileri: <input class="form-control" value="<?=$veri[0]->kargo?>" type="text" name="kargo">
					İşlem:<br>
					<select name="siparisdurumu" class="form-control">
						<option><?=$veri[0]->siparisdurumu?></option>
						<option>Onaylandi</option>
						<option>İptal</option>
						<option>Kargoda</option>
						<option>Tamamlandi</option>
					</select>
					
					Açıklama :		
					<textarea class="form-control" name="aciklama"  rows="8" cols=100><?=$veri[0]->aciklama?> </textarea>  
					<br>
					<button type="submit" class="" value="Sepete Ekle">GUNCELLE</button>
				</form>
                            </div>
                        </div>
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