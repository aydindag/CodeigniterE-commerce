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
							<td><?=$rs->adsoy?></td>
							<td><?=$rs->tutar?></td>
							<td><?=$rs->sehir?> TL </td>
							<td><?=$rs->siparisdurumu?></td>
							<td><a href="<?=base_url()?>admin/siparisler/siparisdetay/<?=$rs->Id?>" class="btn btn-block btn-xs btn-success"><i class="fa fa-remove">Detay</a></td>
						
						
						</tr>
					<?php 
					}?>
					</tbody> 
					</table>
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