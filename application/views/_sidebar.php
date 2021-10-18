<section>
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<div class="left-sidebar">
					<h2>KATEGORİLER</h2>
						<?php foreach ($kategoriler as $rs) {?>
							<li><a href="<?=base_url()?>kategori/<?=$rs->Id?>"<span class="icon-chevron-right"></span><?=$rs->adi?></li></a>
							</li>
						<?php }?>
		</div>
</div>