<?php
		$this->load->view('admin\_header');
		$this->load->view('admin\_sidebar');
		
?>
<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Ürünler Listesi</h1>
						<h4><p class="text-yellow"><?= $this->session->flashdata("mesaj")?></p>
						 </h4>              
						
                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="<?=base_url()?>admin/urunler/ekle" class="btn btn-sm btn-primary"><i class="fa fa-plus-square"></i> Yeni Ürün Ekle
							</a>
							
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    
                                        <tr>
                                            <th style="width: 75px">Sıra No</th>
                                            <th>Adı</th>
                                            <th>Kategori</th>
                                            <th>Alış Fiyatı</th>
											<th>Satış Fiyatı</th>
											<th>Resim</th>
											<th>Galeri</th>
											<th>Durum</th>
											<th>Düzenle</th>
											<th>Sil</th>
                                        </tr>
									<?php
									$sno=0;
									foreach ($veriler as $rs)
									{ $sno++;
									?>			
									
							
                                    <tr>
                                            <td style="width: 75px"><?=$sno?></td>
                                            <td><?=$rs->adi?></td>
                                            <td><?=$rs->katadi?></td>
                                            <td><?=$rs->afiyat?></td>
											<td><?=$rs->sfiyat?></td>
											<td>
											
											<?php if ($rs->resim) { ?>
												<a href="<?=base_url()?>admin/urunler/resim_yukle/<?=$rs->Id?>" ><i class="fa fa-edit"></i><img src="<?=base_url()?>uploads/<?=$rs->resim?>" height="50">
												</a>
											
											<?php } else { ?>
											<a href="<?=base_url()?>admin/urunler/resim_yukle/<?=$rs->Id?>" class="btn btn-primary"><i class="fa fa-edit"></i>Resim ekle
											</a>
											<?php } ?>
											</td>
											<td>
											<a href="<?=base_url()?>admin/urunler/galeri_yukle/<?=$rs->Id?>" class="btn btn-primary"><i class="fa fa-edit"></i>Galeriye Yükle
											</a>
											
											</td>
											<td><?=$rs->durum?></td>
											<td><a href="<?=base_url()?>admin/urunler/duzenle/<?=$rs->Id?>" class="btn btn-primary"><i class="fa fa-edit"></i>Düzenle</a></td>
											<td><a href="<?=base_url()?>admin/urunler/sil/<?=$rs->Id?>" class="btn btn-xs btn-danger" onclick="return confirm('Silinecek Emin Misiniz?')"><i class="fa fa-remove">Sil</a></td>
                                        
										
										</tr>
                                    <?php }?>
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