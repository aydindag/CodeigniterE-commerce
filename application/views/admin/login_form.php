<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="<?=base_url()?>assets/admin/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="<?=base_url()?>assets/admin/assets/css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body style="background-color: #E2E2E2;">
    <div class="container">
        <div class="row text-center " style="padding-top:100px;">
            <div class="col-md-12">
                <img src="<?=base_url()?>assets/admin/assets/img/logo-invoice.png" />
            </div>
        </div>
         <div class="row ">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                           
                            <div class="panel-body">
                                <form action="<?=base_url()?>admin/login/login_ol" method="post">
                                    <hr/>
                                    <h1>ADMİN PANELİ</h1>
									<?php if ($this->session->flashdata("mesaj"))
									{?>
									<div class="btn btn-warning btn-block  ">
										<h4>Hata!</h4>
										<p><?=$this->session->flashdata("mesaj")?></p>
									</div>
									<br>
                                    <?php } ?>
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" name="email" required class="form-control" placeholder="Email" />
                                        </div>
                                                                              <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" name="sifre" required class="form-control"  placeholder="Şifre" />
                                        </div>
                                    <div class="form-group">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" /> Beni Hatırla
                                            </label>
                                            <span class="pull-right">
                                                   <a href="index.html" >Şifremi Unuttum ? </a> 
                                            </span>
                                        </div>
                                     
                                     <button type="submit" class="btn btn-primary btn-block btn-flat ">Giriş Yap</button>
                                    <hr />
                                    Kayıtlı Değil Misin ? <a href="index.html" >Yeni Kayıt Oluştur </a> ya da <a href="index.html">Anasayfa</a> 
                                    </form>
                            </div>
                          
                        </div>
                
                
        </div>
    </div>

</body>
</html>
