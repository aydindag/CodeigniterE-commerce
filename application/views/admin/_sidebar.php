<nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="<?=base_url()?>uploads/<?=$this->session->admin_session["resim"]?>" class="img-thumbnail" />

                            <div class="inner-text">
                                <?=$this->session->admin_session["adsoy"]?>
                            <br />
                                Yetki: <small><?=$this->session->admin_session["yetki"]?> </small>
                            </div>
                        </div>

                    </li>


                    <li>
                        <a  href="<?=base_url()?>admin"><i class="fa fa-dashboard "></i>ANA MENU</a>
                    </li>
                    <li>
                        <a  href="<?=base_url()?>admin/uyeler"><i class="fa fa-users "></i>Üyeler</a>
                    </li>
					<li>
                        <a  href="<?=base_url()?>admin/urunler"><i class="fa fa-barcode "></i>Ürünler</a>
                    </li>
					
                     <li>
                        <a href="#"><i class="fa fa-shopping-cart "></i>SİPARİŞLER <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="<?=base_url()?>admin/siparisler/liste/yeni"><i class="fa fa-circle-o"></i>Yeni</a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>admin/siparisler/liste/onaylandi"><i class="fa fa-circle-o"></i>Onaylananlar</a>
                            </li>
							 <li>
                                <a href="<?=base_url()?>admin/siparisler/liste/iptal"><i class="fa fa-circle-o"></i>İptal Edilenler</a>
                            </li>
                              <li>
                                <a href="<?=base_url()?>admin/siparisler/liste/kargoda"><i class="fa fa-circle-o"></i>Kargo Alınacaklar</a>
                            </li>
                              <li>
                                <a href="<?=base_url()?>admin/siparisler/liste/tamamlandi"><i class="fa fa-circle-o"></i>Tamamlananlar</a>
                            </li>

                        </ul>
                    </li>
					<li>
                        <a  href="<?=base_url()?>admin/home/mesajlar"><i class="fa fa-barcode "></i>Gelen Web Mesajlar</a>
                    </li>
                    
                   <li>
                        <a  href="<?=base_url()?>admin/home/ayarlar"><i class="fa fa-barcode "></i>Ayarlar</a>
                    </li>
                              
                </ul>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->