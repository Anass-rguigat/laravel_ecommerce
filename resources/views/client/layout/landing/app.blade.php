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

	<!-- Header -->
	@include('client.layout.component.header')


	<!-- Cart -->
	@include('client.layout.component.cart')



	<!-- Slider -->
	<section class="section-slide">
		<div class="wrap-slick1">
			<div class="slick1">
				@foreach ($lands as $land)
				<div class="item-slick1" style="background-image: url('{{ asset('storage/' . $land->image) }}');">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									{{ $land->title }}
								</span>
							</div>

							<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
									{{ $land->subtitle }}
								</h2>
							</div>

							<div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
								<a href="{{route('allProducts')}}" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Shop Now
								</a>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</section>



	<!-- Banner -->
	<div class="sec-banner bg0 p-t-80 p-b-50">
		<div class="container">
			<div class="row">
				@foreach($categories as $category)
				<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
					<!-- Category Block -->
					<div class="block1 wrap-pic-w">
						<img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}">

						<a href="" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									{{ $category->name }}
								</span>

								<span class="block1-info stext-102 trans-04">
									{{ $category->description }}
								</span>
							</div>

							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									Shop Now
								</div>
							</div>
						</a>
					</div>
				</div>
				@endforeach


			</div>
		</div>
	</div>


	<!-- Product -->
	<section class="bg0 p-t-23 p-b-140 mb-8">
		<div class="container">
			<div class="p-b-10">
				<h3 class="ltext-103 cl5">
					Product Overview
				</h3>
			</div>

			<div class="row isotope-grid">
				@foreach($products as $product)
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}">

							<a href="{{ route('product.details', $product->id) }}"
								class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="{{ route('product.details', $product->id) }}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									{{ $product->title }}
								</a>

								<span class="stext-105 cl3">
									${{ number_format($product->price, 2) }}
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
									<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-cart">
										<i class="zmdi zmdi-shopping-cart"></i>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>

			<!-- Load more -->
			<div class="flex-c-m flex-w w-full p-t-45">
				<a href="{{route('allProducts')}}" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
					View More
				</a>
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
		$(".js-select2").each(function() {
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
					enabled: true
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
		$('.js-addwish-b2').on('click', function(e) {
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function() {
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function() {
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function() {
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function() {
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function() {
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function() {
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	</script>
	<!--===============================================================================================-->
	<script src="{{ asset('client/vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
	<script>
		$('.js-pscroll').each(function() {
			$(this).css('position', 'relative');
			$(this).css('overflow', 'hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function() {
				ps.update();
			})
		});
	</script>
	<!--===============================================================================================-->
	<script src="{{ asset('client/js/main.js') }}"></script>

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Function to add product to localStorage
			function addToCart(event) {
				event.preventDefault(); // Prevent default action

				// Find the closest product element
				let productElement = event.target.closest(".block2");

				// Get product details
				let productId = productElement.querySelector("a").getAttribute("href").split("/").pop();
				let productTitle = productElement.querySelector(".js-name-b2").innerText;
				let productPrice = productElement.querySelector(".stext-105").innerText.replace("$", "");
				let productImage = productElement.querySelector("img").src;

				// Get existing cart data from localStorage
				let cart = JSON.parse(localStorage.getItem("cart")) || [];

				// Check if product already exists in cart
				let existingProduct = cart.find(item => item.id === productId);

				if (existingProduct) {
					existingProduct.quantity += 1; // Increase quantity
				} else {
					// Add new product to cart
					cart.push({
						id: productId,
						title: productTitle,
						price: parseFloat(productPrice),
						image: productImage,
						quantity: 1
					});
				}

				// Save updated cart back to localStorage
				localStorage.setItem("cart", JSON.stringify(cart));

				// Show success message
				swal(productTitle, "is added to cart!", "success");

				// Refresh the cart display
				displayCart();
				updateCartCount();
			}

			// Function to display cart items
			function displayCart() {
				let cart = JSON.parse(localStorage.getItem("cart")) || [];
				let cartContainer = document.querySelector(".header-cart-wrapitem");
				let totalContainer = document.querySelector(".header-cart-total");
				let totalPrice = 0;

				// Clear existing cart items
				cartContainer.innerHTML = "";

				cart.forEach((product, index) => {
					totalPrice += product.price * product.quantity;

					let cartItemHTML = `
					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="${product.image}" alt="${product.title}">
						</div>
						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								${product.title}
							</a>
							<span class="header-cart-item-info">
								$${product.price.toFixed(2)}
							</span>
							<div class="quantity-container d-flex align-items-center">
    	<button class="qty-btn decrease btn  btn-sm" data-index="${index}">-</button>
				<input type="number" class="qty-input form-control text-center mx-2 border-0 shadow-none" 
						style="width: 50px; background-color: transparent;" 
						value="${product.quantity}" min="1" data-index="${index}">
					<button class="qty-btn increase btn  btn-sm" data-index="${index}">+</button>
				</div>

							<button class="remove-item" data-index="${index}">Remove</button>
						</div>
					</li>
				`;
					cartContainer.innerHTML += cartItemHTML;
				});

				// Update total price
				totalContainer.innerHTML = `Total: $${totalPrice.toFixed(2)}`;

				// Attach event listeners to quantity buttons
				document.querySelectorAll(".qty-btn").forEach(button => {
					button.addEventListener("click", updateQuantity);
				});

				// Attach event listeners to quantity inputs
				document.querySelectorAll(".qty-input").forEach(input => {
					input.addEventListener("change", updateQuantity);
				});

				// Attach event listeners to remove buttons
				document.querySelectorAll(".remove-item").forEach(button => {
					button.addEventListener("click", removeItem);
				});
			}

			// Function to update quantity
			function updateQuantity(event) {
				let cart = JSON.parse(localStorage.getItem("cart")) || [];
				let index = event.target.dataset.index;
				let product = cart[index];

				if (event.target.classList.contains("increase")) {
					product.quantity += 1;
				} else if (event.target.classList.contains("decrease") && product.quantity > 1) {
					product.quantity -= 1;
				} else if (event.target.classList.contains("qty-input")) {
					let newQty = parseInt(event.target.value);
					if (newQty > 0) {
						product.quantity = newQty;
					} else {
						product.quantity = 1; // Prevent negative or zero quantity
					}
				}

				// Save updated cart to localStorage
				localStorage.setItem("cart", JSON.stringify(cart));

				// Refresh cart display
				displayCart();
				updateCartCount();
			}

			// Function to remove an item from the cart
			function removeItem(event) {
				let cart = JSON.parse(localStorage.getItem("cart")) || [];
				let index = event.target.dataset.index;

				// Remove item from cart array
				cart.splice(index, 1);

				// Save updated cart to localStorage
				localStorage.setItem("cart", JSON.stringify(cart));

				// Refresh cart display
				displayCart();
				updateCartCount();
			}

			// Attach event listeners to all "Add to Cart" buttons
			document.querySelectorAll(".js-addwish-b2").forEach(button => {
				button.addEventListener("click", addToCart);
			});

			// Display cart items on page load
			displayCart();
			updateCartCount();
		});
	</script>
	<script>
		function updateCartCount() {
			// Retrieve cart from localStorage (parse JSON or set empty array if null)
			let cart = JSON.parse(localStorage.getItem("cart")) || [];

			// Calculate total quantity in cart
			let totalQuantity = cart.reduce((sum, item) => sum + item.quantity, 0);

			// Update both desktop and mobile cart icons
			document.getElementById("cart-count-desktop").setAttribute("data-notify", totalQuantity);
			document.getElementById("cart-count-mobile").setAttribute("data-notify", totalQuantity);
		}

		// Update cart count on page load
		document.addEventListener("DOMContentLoaded", updateCartCount);
	</script>

</body>

</html>