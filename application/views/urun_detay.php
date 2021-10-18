				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">				
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								    <div class="carousel-inner">
										<div class="item active">
										  <img src="<?=base_url()?>uploads/<?=$veri[0]->resim?>" alt="" />
										</div>
										
										<?php
										foreach($resimler as $rs)
										{
										?>
										<div class="item">
										  <img src="<?=base_url()?>uploads/<?=$rs->resim?>" alt="" />
										</div>
										<?php }?>
									</div>

								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->		
								<h3>ADI: <?=$veri[0]->adi?></h3>
								<form class="form-horizontal qtyFrm" method="post" action="<?=base_url()?>uye/sepete_ekle">
								<div class="control-group">
									<label class="control-label"><span>Fiyat: <?=$veri[0]->sfiyat?> TL</span></label>
								<div class="controls">
									<input type="hidden" name="urunid" value="<?=$veri[0]->Id?>" class="span6">
									<label class="control-label"><span>Stok Miktarı: <?=$veri[0]->stok?> Adet</span></label>
									<input type="number" name="miktar" value="1" class="span6" placeholder="Qty." min="1" max="<?=$veri[0]->stok?>"> Adet
									</div>
								</div>
								<div class="control-group">
									<label class="control-label"><span>Color</span></label>
									<div class="controls">
										<select class="span11">
											<option>Red</option>
											<option>Blue</option>
											<option>Purple</option>
											<option>Yellow</option>
											</select>											
									</div>
								</div>
								<div class="control-group">
									<label class="control-label"><span>Materials</span></label>
									<div class="controls">
										<select class="span11">
											<option>Material 1 </option>
											<option>Material 2</option>
											<option>Material 3</option>
											<option>Material 4</option>
											</select>											
									</div>
								</div>
								<h4>Kategorisi: <?=$veri[0]->katadi?></h4>
								<p><?=$veri[0]->description?></p>

									<button type="submit" class="btn btn-fefault cart" value="Sepete Ekle">
										<i class="fa fa-shopping-cart"></i>
										Sepete Ekle
									</button>
								
								</form>
								
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#reviews" data-toggle="tab">Reviews (5)</a></li>
									<li><a href="#details" data-toggle="tab">Details</a></li>
							</ul>
						</div>
						<div class="tab-content">
							
	
							<div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12">
									<ul>
										<li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
										<li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
										<li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
									</ul>
									<p><?=$veri[0]->description?></p>
									<p><b>Write Your Review</b></p>
									
									<form action="#">
										<span>
											<input type="text" placeholder="Your Name"/>
											<input type="email" placeholder="Email Address"/>
										</span>
										<textarea name="" ></textarea>
										<b>Rating: </b> <img src="images/product-details/rating.png" alt="" />
										<button type="button" class="btn btn-default pull-right">
											Submit
										</button>
									</form>
								</div>
							</div>
							
							<div class="tab-pane fade" id="details" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery1.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery2.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery3.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery4.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div><!--/category-tab-->
					
					
					
				</div>