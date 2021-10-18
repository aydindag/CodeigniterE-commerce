<script src="<?=base_url()?>ckeditor/ckeditor.js"></script>
<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Site Ayarları</h1>
                        <div class="col-md-6 col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Ayarlar
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#genel" data-toggle="tab">Genel</a>
                                </li>
                                <li class=""><a href="#email" data-toggle="tab">E-mail</a>
                                </li>
                                <li class=""><a href="#sosyal" data-toggle="tab">Sosyal</a>
                                </li>
                                <li class=""><a href="#hakkimizda" data-toggle="tab">Hakkimizda</a>
                                </li>
								<li class=""><a href="#iletisim" data-toggle="tab">İletisim</a>
                                </li>
                            </ul>
							<form method="post" action="<?=base_url()?>admin/home/ayarlar_guncelle/<?=$veri[0]->Id?>" class="form-horizontal">
                            <div class="tab-content">
								<!--1.tab -->
                                <div class="tab-pane fade active in" id="genel">
                                    <h4>Genel ayarlar</h4>
									<div class="form-group">
										<label for="inputName" class="col-sm-2 control-label">Adı</label>
										<div class="col-sm-10">
											<input type="text" name="adi" value="<?=$veri[0]->adi?>" class="form-control" id="inputName"
											placeholder="Name">
										</div>
									</div>
									<div class="form-group">
										<label for="inputName" class="col-sm-2 control-label">Description</label>
										<div class="col-sm-10">
											<input type="text" name="description" value="<?=$veri[0]->description?>" class="form-control" id="inputName"
											placeholder="Name">
										</div>
									</div>
									<div class="form-group">
										<label for="inputName" class="col-sm-2 control-label">Keywords</label>
										<div class="col-sm-10">
											<input type="text" name="keywords" value="<?=$veri[0]->keywords?>" class="form-control" id="inputName"
											placeholder="Name">
										</div>
									</div>
									<div class="form-group">
										<label for="inputName" class="col-sm-2 control-label">Adres</label>
										<div class="col-sm-10">
											<input type="text" name="adres" value="<?=$veri[0]->adres?>" class="form-control" id="inputName"
											placeholder="Name">
										</div>
									</div>
									<div class="form-group">
										<label for="inputName" class="col-sm-2 control-label">Telefon</label>
										<div class="col-sm-10">
											<input type="text" name="tel" value="<?=$veri[0]->tel?>" class="form-control" id="inputName"
											placeholder="Name">
										</div>
									</div>
									<div class="form-group">
										<label for="inputName" class="col-sm-2 control-label">Şehir</label>
										<div class="col-sm-10">
											<input type="text" name="sehir" value="<?=$veri[0]->sehir?>" class="form-control" id="inputName"
											placeholder="Name">
										</div>
									</div>
									
								</div>
								<!--2.tab -->
                                <div class="tab-pane fade" id="email">
                                    <h4>Email ayarları</h4>
									<div class="form-group">
										<label for="inputName" class="col-sm-2 control-label">Smtp Server</label>
										<div class="col-sm-10">
											<input type="text" name="smtpserver" value="<?=$veri[0]->smtpserver?>" class="form-control" id="inputName"
											placeholder="Name">
										</div>
									</div>
									<div class="form-group">
										<label for="inputName" class="col-sm-2 control-label">Smtp Email</label>
										<div class="col-sm-10">
											<input type="text" name="smtpemail" value="<?=$veri[0]->smtpemail?>" class="form-control" id="inputName"
											placeholder="Name">
										</div>
									</div>
									<div class="form-group">
										<label for="inputName" class="col-sm-2 control-label">Port</label>
										<div class="col-sm-10">
											<input type="text" name="smtpport" value="<?=$veri[0]->smtpport?>" class="form-control" id="inputName"
											placeholder="Name">
										</div>
									</div>
								</div>
								<!--3.tab -->
                                <div class="tab-pane fade" id="sosyal">
                                    <h4>Sosyal medya ayarları</h4>
									<div class="form-group">
										<label for="inputName" class="col-sm-2 control-label">Facebook</label>
										<div class="col-sm-10">
											<input type="text" name="facebook" value="<?=$veri[0]->facebook?>" class="form-control" id="inputName"
											placeholder="Name">
										</div>
									</div>
									<div class="form-group">
										<label for="inputName" class="col-sm-2 control-label">Twitter</label>
										<div class="col-sm-10">
											<input type="text" name="twitter" value="<?=$veri[0]->twitter?>" class="form-control" id="inputName"
											placeholder="Name">
										</div>
									</div>
									<div class="form-group">
										<label for="inputName" class="col-sm-2 control-label">Pinterest</label>
										<div class="col-sm-10">
											<input type="text" name="pinterest" value="<?=$veri[0]->pinterest?>" class="form-control" id="inputName"
											placeholder="Name">
										</div>
									</div>
								</div>
                                <div class="tab-pane fade" id="hakkimizda">
                                    <h4>Hakkımızda Bilgileri</h4>
									
										<textarea name="hakkimizda" id="editor1" rows="10" cols="80"><?=$veri[0]->hakkimizda?></textarea>
											<script>
											
											// Replace the <textarea id="editor1"> with a CKEditor
											// instance, using default configuration.
											CKEDITOR.replace('editor1')
											</script>
                    
									 </div>
								<div class="tab-pane fade" id="iletisim">
                                    <h4>İletisim Tab</h4>
									
                                     <textarea name="iletisim" id="editor2" rows="10" cols="80"><?=$veri[0]->iletisim?></textarea>
											<script>
											// Replace the <textarea id="editor1"> with a CKEditor
											// instance, using default configuration.
											CKEDITOR.replace('editor2')
											</script>   
									</div>
                            </div>
							<div class="row">
							<div class="form-group">
										<div class="col-sm-offset-2 col-sm-10">
											<button type="submit" class="btn btn-danger">GUNCELLE</button>
										</div>
									</div>
							</div>
							</form>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
                <!-- /. ROW  -->
                

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
	