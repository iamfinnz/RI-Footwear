<!-- Start Footer  -->
<footer>
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>Tentang R&I Footwear</h4>
                            <p>R&I Footwear adalah website jual beli sepatu online terlengkap dan berkualitas di Indonesia
                                </p>
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4>Informasi</h4>
                            <ul>
                                <li><a href="">Tentang Kami</a></li>
                                <li><a href="">Syarat dan Ketentuan</a></li>
                                <li><a href="">Kebijakan dan Privasi</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Hubungi Kami</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Alamat: Jl. Umban Sari (Patin) No. 1 Rumbai <br>Pekanbaru-Riau<br> 28265 </p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Telepon: <a href="">+6285158465119 / +6287833306286</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="rifootwear@gmail.com">rifootwear@gmail.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->

    <!-- Start copyright  -->
    <div class="footer-copyright">
        <p class="footer-company">All Rights Reserved &copy; 2021 <a href="">R&I Footwear</a> Design By : Randi & Ilham</p>
    </div>
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    
    <script src="<?= base_url('assets/') ?>user/js/jquery-3.2.1.min.js"></script>
    <script src="<?= base_url('assets/') ?>user/js/popper.min.js"></script>
    <script src="<?= base_url('assets/') ?>user/js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="<?= base_url('assets/') ?>user/js/jquery.superslides.min.js"></script>
    <script src="<?= base_url('assets/') ?>user/js/bootstrap-select.js"></script>
    <script src="<?= base_url('assets/') ?>user/js/inewsticker.js"></script>
    <script src="<?= base_url('assets/') ?>user/js/bootsnav.js."></script>
    <script src="<?= base_url('assets/') ?>user/js/images-loded.min.js"></script>
    <script src="<?= base_url('assets/') ?>user/js/isotope.min.js"></script>
    <script src="<?= base_url('assets/') ?>user/js/owl.carousel.min.js"></script>
    <script src="<?= base_url('assets/') ?>user/js/baguetteBox.min.js"></script>
    <script src="<?= base_url('assets/') ?>user/js/form-validator.min.js"></script>
    <script src="<?= base_url('assets/') ?>user/js/contact-form-script.js"></script>
    <script src="<?= base_url('assets/') ?>user/js/custom.js"></script>
    <script>
$('.custom-file-input').on('change', function(){
    let fileName = $(this).val().split('\\').pop();
    $(this).next('.custom-file-label').addClass("selected").html(fileName);
})
$(document).ready(function() {
		$("#jumlah").on('keydown keyup change blur', function() {
			var harga = $("#harga").val();
			var jumlah = $("#jumlah").val();

			var total = parseInt(harga) * parseInt(jumlah);
			$("#total").val(total);
			if (parseInt($('input[name="stok"]').val()) <= parseInt(jumlah)) {
				alert('stok tidak tersedia! stok tersedia : ' + parseInt($('input[name="stok"]').val()))
				reset()
			}
		});

		function reset() {
			$('input[name="jumlah"]').val('')
			$('input[name="total"]').val('')
		}
	});
</script>
</body>

</html>