<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('client/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('client/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('client/fonts/iconic/css/material-design-iconic-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('client/fonts/linearicons-v1.0.0/icon-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('client/vendor/animate/animate.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('client/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('client/vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('client/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('client/vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('client/vendor/slick/slick.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('client/vendor/MagnificPopup/magnific-popup.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('client/vendor/perfect-scrollbar/perfect-scrollbar.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('client/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('client/css/main.css') }}">
<!--===============================================================================================-->
</head>
<body class="animsition">
    

    @include('client.layout.component.secondHeader')
    
    @include('client.layout.component.cart')

<!-- Title page -->
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('{{ asset('client/images/about-01.jpg') }}');">
		<h2 class="ltext-105 cl0 txt-center">
			About
		</h2>
	</section>	


	<!-- Content page -->
	<section class="bg0 p-t-75 p-b-120">
		<div class="container">
			<div class="row p-b-148">
				<div class="col-md-7 col-lg-8">
					<div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
						<h3 class="mtext-111 cl2 p-b-16">
							Our Story
						</h3>

						<p class="stext-113 cl6 p-b-26">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus dicta voluptatibus suscipit enim maxime, repellat assumenda omnis laudantium deleniti nobis odio debitis et non neque reprehenderit, ad iusto eligendi ea.
						Tempore magni odit ea perspiciatis impedit eaque quod porro deserunt expedita. Sed, eos. Cumque eveniet incidunt neque, minima ipsum vel eius hic nobis omnis nostrum nesciunt obcaecati soluta tempora numquam?
						Ipsa impedit rerum veniam facere, ab ex alias voluptas nobis. A et tempore consequatur adipisci dolore cumque, quasi tempora tenetur iure, earum dolores dignissimos architecto molestiae error facere fuga nemo.	
						</p>

						<p class="stext-113 cl6 p-b-26">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste optio eos molestias odio, cupiditate natus? Aut laboriosam recusandae delectus eligendi fugiat ipsam, aspernatur mollitia? Soluta quisquam nobis ipsam exercitationem et?
							Delectus adipisci accusamus est autem nostrum nemo iure voluptatem perferendis totam. Magnam pariatur ipsa impedit maxime mollitia, soluta excepturi maiores praesentium ipsum nesciunt adipisci eius, ea expedita recusandae aut. Excepturi.	
						</p>

						<p class="stext-113 cl6 p-b-26">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat voluptatibus, consequatur minus laborum atque iure id laboriosam laudantium modi, exercitationem, reiciendis nulla quibusdam voluptas sequi! Nihil reiciendis nisi repellat pariatur.	
						</p>
					</div>
				</div>

				<div class="col-11 col-md-5 col-lg-4 m-lr-auto">
					<div class="how-bor1 ">
						<div class="hov-img0">
							<img src="{{ asset('client/images/about-01.jpg') }}" alt="IMG">
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="order-md-2 col-md-7 col-lg-8 p-b-30">
					<div class="p-t-7 p-l-85 p-l-15-lg p-l-0-md">
						<h3 class="mtext-111 cl2 p-b-16">
							Our Mission
						</h3>

						<p class="stext-113 cl6 p-b-26">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, accusamus? Iure eum possimus, commodi ullam magnam magni atque perspiciatis vero, eveniet assumenda quaerat animi dicta sequi culpa placeat tempore mollitia.
						Doloremque nemo quod quo, animi voluptatibus, quis suscipit repellendus optio maiores nostrum laboriosam sint reprehenderit rerum quidem, tempora quisquam delectus molestiae id accusamus blanditiis soluta earum similique enim. Ipsum, vero!	
						</p>

						<div class="bor16 p-l-29 p-b-9 m-t-22">
							<p class="stext-114 cl6 p-r-40 p-b-11">
							Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus corrupti iste voluptas sit aliquam suscipit illo quasi pariatur quaerat labore nisi assumenda eveniet temporibus dicta maxime repellat veniam, libero id.
							Dicta minima, aspernatur reprehenderit quasi atque veritatis ut quod laborum, optio consequatur neque hic dolores distinctio iste sint quia facere doloremque quis sequi est fuga, nostrum quas. Id, vel a?
							Iure quo quod dolorem repellat quas consequuntur, labore vitae ipsam dolor et, eos inventore natus debitis eaque vero libero nulla, aut architecto deserunt temporibus rerum. Dolores repellendus corrupti illo inventore.	
							</p>

							<span class="stext-111 cl8">
								- Anass Randy
							</span>
						</div>
					</div>
				</div>

				<div class="order-md-1 col-11 col-md-5 col-lg-4 m-lr-auto p-b-30">
					<div class="how-bor2">
						<div class="hov-img0">
							<img src="{{ asset('client/images/about-02.jpg') }}" alt="IMG">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>	

    <!-- Footer -->
	@include('client.layout.component.footer')

<!-- Back to top -->
<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>


<!--===============================================================================================-->	
<script src="{{ asset('client/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('client/vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('client/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('client/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="{{ asset('client/vendor/daterangepicker/moment.min.js') }}"></script>
	<script src="{{ asset('client/vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('client/vendor/slick/slick.min.js') }}"></script>
	<script src="{{ asset('client/js/slick-custom.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('client/vendor/parallax100/parallax100.js') }}"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="{{ asset('client/vendor/MagnificPopup/jquery.magnific-popup.min.js') }}"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
<!--===============================================================================================-->
	<script src="{{ asset('client/vendor/isotope/isotope.pkgd.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('client/vendor/sweetalert/sweetalert.min.js') }}"></script>
	<script>
		$('.js-addwish-b2').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	
	</script>
<!--===============================================================================================-->
	<script src="{{ asset('client/vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="{{ asset('client/js/main.js') }}"></script>

</body>
</html>