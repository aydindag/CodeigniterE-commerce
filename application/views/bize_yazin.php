<div class="col-sm-9">
	<div class="blog-post-area">
		<h2 class="title text-center">Bize iletmek istediklerinizi Yazınız</h2>
								
			<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="<?=base_url()?>home/mesaj_kaydet">
						<?php if ($this->session->flashdata("mesaj")) {?>
							<div class="btn btn-warning btn-block ">					
								<p><?=$this->session->flashdata("mesaj")?></p>
							</div>
						<?php }?>
						<br>
						<br>
				            <div class="form-group col-md-6">
				                <input type="text" name="adsoy" class="form-control" required="required" placeholder="Adınız Soyadınız">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="text" name="tel" class="form-control" required="required" placeholder="Telefon">
				            </div>
							<div class="form-group col-md-6">
				                <input type="email" name="eposta" class="form-control" required="required" placeholder="Email">
				            </div>
							
				            <div class="form-group col-md-12">
				                <input type="text" name="subject" class="form-control" required="required" placeholder="Subject">
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="mesaj" id="message" required="required" class="form-control" rows="8" placeholder="Mesajınız"></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="MESAJI GONDER">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Bağlantı Bilgileri</h2>
	    				<address>
	    					<p>Aydın-E Ticaret Inc.</p>
							<p>100.yıl Mahallesi 1077.Sokak </p>
							<p>Karabük</p>
							<p>Mobile: +505 939 70 66</p>
							<p>Fax: 1-714-252-0026</p>
							<p>Email: aydin6401@hotmail.com</p>
	    				</address>
	    				<div class="social-networks">
	    					<h2 class="title text-center">Sosyal Medya</h2>
							<ul>
								<li>
									<a href="https://www.facebook.com/aydndag"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="https://twitter.com/aydn_dag"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="https://twitter.com/aydn_dag"><i class="fa fa-google-plus"></i></a>
								</li>
								<li>
									<a href="https://www.facebook.com/aydndag"><i class="fa fa-youtube"></i></a>
								</li>
							</ul>
	    				</div>
	    			</div>
    			</div>    			
	    	</div>
	</div>
</div>