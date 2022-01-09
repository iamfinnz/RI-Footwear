 <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-left">
                <img src="<?= base_url('assets/') ?>user/images/banner1.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome di <br> R&I Footwear</strong></h1>
                            <p class="m-b-40">R&I Footwear adalah situs jual beli sepatu murah, berkualitas dan terjamin original
                                <br/>Temukan sepatu favoritmu disini!
                            </p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="<?= base_url('assets/') ?>user/images/banner2.png" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Murah dan <br> Berkualitas</strong></h1>
                            <p class="m-b-40">R&I Footwear bekerja sama dengan ratusan produsen sepatu agar dapat menjual
                                <br/>sepatu yang berkualitas dan murah</p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-right">
                <img src="<?= base_url('assets/') ?>user/images/banner3.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Terjamin<br> Original</strong></h1>
                            <p class="m-b-40">Kami menjunjung tinggi keaslian produk yang kami jual 
                                <br/>di R&I Footwear karena itu adalah motto kami
                                <br/> - CEO Randi & Ilham
                            </p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->

    <!-- Start Products  -->
    <div class="products-box">
        <div class="container">
			<h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
			<div class="row">
				<div class="col-md-12">
				<?= $this->session->flashdata('message');
				?>
				</div>
				<?php $i = 1; ?>
				<?php foreach ($sepatu as $us) : ?>
					<div class="col-lg-3 col-md-6 special-grid">
						<div class="products-single fix">
							<div class="box-img-hover">
								<img  class="img-fluid" src="<?= base_url('assets/dist/img/sepatu/') . $us['gambar']; ?>" style="width:300px">
								<div class="why-text">
                                <div class="tetxt-xs font-weight-bold text-gray-800"><?= $us['nama'] ?></div>
                                <div class="tetxt-xs font-weight-bold text-gray-800 float-right">Rp.<?= $us['harga'] ?></div>
                                <div>Ukuran <a class="badge badge-success"><?= $us['ukuran'] ?></a></div>
								<div>Stok <a class="badge badge-warning"><?= $us['stok'] ?></a></div>
                                <br/>
                                <a href="<?= base_url('Profil/keranjang/') . $us['id'] ?>" class="btn btn-danger badge-block">Beli</a>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
    <!-- End Products  -->


    <!-- Start Instagram Feed  -->
    <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
            <div class="item">
                <div class="ins-inner-box">
                    <img src="<?= base_url('assets/') ?>user/images/instagram-img-01.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="<?= base_url('assets/') ?>user/images/instagram-img-02.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="<?= base_url('assets/') ?>user/images/instagram-img-03.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="<?= base_url('assets/') ?>user/images/instagram-img-04.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="<?= base_url('assets/') ?>user/images/instagram-img-05.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="<?= base_url('assets/') ?>user/images/instagram-img-06.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="<?= base_url('assets/') ?>user/images/instagram-img-07.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="<?= base_url('assets/') ?>user/images/instagram-img-08.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="<?= base_url('assets/') ?>user/images/instagram-img-09.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="<?= base_url('assets/') ?>user/images/instagram-img-05.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Instagram Feed  -->
