<section>
	<div class="container">
		<div class="row">
<div class="col-sm-9">
	<div class="blog-post-area">
		<h2 class="title text-center">Üye girişi</h2>
								
			<div class="col-sm-4 col-sm-offset-5">					
						<form class="form-horizontal loginFrm" method="post" action="<?=base_url()?>home/login">
						<h3> Uye Login </h3>
							<?php if ($this->session->flashdata("mesaj")) {?>
							<div class="callout callout-info">
								<p><?=$this->session->flashdata("mesaj")?></p>
							</div>
							<?php }?>
							<div class="control-group">
								<input type="email" class="span2" name="email" id="inputEmail" placeholder="Email">
							</div>	
							<div class="control-group">
								<input type="password" class="span2" name="sifre" id="inputPassword" placeholder="Şifre">
							</div>	
							<div class="control-group">
								<label class="checkbox">
								<input type="checkbox"> Beni Hatırla 
								</label>				
								<button type="submit" class="btn btn-default">Giriş Yap</button>
							</div>	
						</form>
					
</div>
	</div>
</div>