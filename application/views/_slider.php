<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
							<li data-target="#slider-carousel" data-slide-to="3"></li>
						</ol>
						
						<div class="carousel-inner">
						<?php
						$say=0;
						$aktf=null;
						foreach($kampanya as $rs)
						{ $say++;
							if ($say==1)
								$aktf="active";
							else
								$aktf=null;
							?>
						<div class="item <?=$aktf?>">	
							<div class="col-sm-6">
							<br><br><br><br><br><br><br>
								<h4><?=$rs->adi?></h4>
								<p><span><?=$rs->description?></span></p>
								<a href="<?=base_url()?>home/urundetay/<?=$rs->Id?>"><button type="button" class="btn btn-default get">Simdi Al</button></a>	
							</div>
						 <div class="col-sm-6">	
							<img style="width:70%" src="<?=base_url()?>uploads/<?=$rs->resim?>" alt="boostrap ecommerce templates">				
						</div>
						</div>
						<?php }?>

						<br>
						</div>						
						<a href="#slider-carousel" class="left control-carousel" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
