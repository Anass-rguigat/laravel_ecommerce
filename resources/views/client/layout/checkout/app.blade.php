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


<form action="{{ route('checkout.store') }}" method="POST" class="bg0 p-t-75 p-b-85">
    @csrf <!-- Laravel security token -->
    
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
                <div class="m-l-25 m-r--38 m-lr-0-xl">
                    <div class="wrap-table-shopping-cart">
                        <table class="table-shopping-cart">
                            <thead>
                                <tr class="table_head">
                                    <th class="column-1">Product</th>
                                    <th class="column-2"></th>
                                    <th class="column-3">Price</th>
                                    <th class="column-4">Quantity</th>
                                    <th class="column-5">Total</th>
                                </tr>
                            </thead>
                            <tbody id="cart-items">
                                <!-- Items will be inserted dynamically -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
                <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
                    <h4 class="mtext-109 cl2 p-b-30 bor12">Cart Totals</h4>

                    <!-- Hidden Inputs for Order Submission -->
					<input type="hidden" name="cart_data" id="cart-data">
                    <input type="hidden" name="product_id" id="product-id">
                    <input type="hidden" name="quantity" id="product-quantity">

                    <div class="flex-w flex-t bor12 p-t-15 p-b-30">
                        <div class="size-208 w-full-ssm">
                            <span class="stext-110 cl2">Shipping Details:</span>
                        </div>

                        <div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
                            <div class="p-t-15">
                                <div class="bor8 bg0 m-b-12">
                                    <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="client_name" placeholder="Full Name" required>
                                </div>

                                <div class="bor8 bg0 m-b-12">
                                    <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="client_phone" placeholder="Phone Number" required>
                                </div>

                                <div class="bor8 bg0 m-b-12">
                                    <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="client_address" placeholder="Address" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex-w flex-t p-t-27 p-b-33">
                        <div class="size-208">
                            <span class="mtext-101 cl2">Total:</span>
                        </div>

                        <div class="total size-209 p-t-1">
                            <span class="mtext-110 cl2" id="order-total">$0.00</span>
                        </div>
                    </div>

                    <button type="submit" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                        Place Order
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>

		
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

	<script>
		let totalContainer = document.querySelector(".total.size-209.p-t-1 .mtext-110.cl2");
		document.addEventListener("DOMContentLoaded", function () {
    function displayCart() {
		let cart = JSON.parse(localStorage.getItem("cart")) || [];
        let cartContainer = document.getElementById("cart-items");
        let totalContainer = document.getElementById("order-total");
        let cartDataInput = document.getElementById("cart-data");
        let totalPrice = 0;

        cartContainer.innerHTML = ""; // Clear existing cart

        if (cart.length > 0) {
            cartDataInput.value = JSON.stringify(cart); // Send cart data in form

            cart.forEach(product => {
                let productTotal = product.price * product.quantity;
                totalPrice += productTotal;

                let row = `
                    <tr class="table_row">
                        <td class="column-1">
                            <div class="how-itemcart1">
                                <img src="${product.image}" alt="${product.title}">
                            </div>
                        </td>
                        <td class="column-2">${product.title}</td>
                        <td class="column-3">$${product.price.toFixed(2)}</td>
                        <td class="column-4">${product.quantity}</td>
                        <td class="column-5">$${productTotal.toFixed(2)}</td>
                    </tr>
                `;
                cartContainer.innerHTML += row;
            });

            totalContainer.innerText = `$${totalPrice.toFixed(2)}`;
        } else {
            cartContainer.innerHTML = "<tr><td colspan='5' class='text-center'>No items in cart</td></tr>";
            totalContainer.innerText = "$0.00";
        }
    }

    function updateQuantity(event) {
    let cart = JSON.parse(localStorage.getItem("cart")) || [];
    let index = event.target.closest("button, input").dataset.index; 
    let product = cart[index];

    if (!product) return; // Éviter les erreurs si l'index est invalide

    if (event.target.classList.contains("increase")) {
        product.quantity += 1;
    } else if (event.target.classList.contains("decrease")) {
        if (product.quantity > 1) {
            product.quantity -= 1;
        }
    } else if (event.target.classList.contains("qty-input")) {
        let newQty = parseInt(event.target.value);
        if (!isNaN(newQty) && newQty > 0) {
            product.quantity = newQty;
        } else {
            event.target.value = product.quantity; // Remettre l'ancienne valeur si invalide
        }
    }

    // Sauvegarde dans localStorage
    localStorage.setItem("cart", JSON.stringify(cart));
    
}


    

    displayCart();
	updateQuantity();
});
	</script>
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