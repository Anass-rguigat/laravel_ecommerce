<header>
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">
						Free shipping for standard order over $100
					</div>
				</div>
			</div>

			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="{{route('landing')}}" class="logo h-auto">
						<img src="{{ asset('client/images/icons/logo-01.png') }}" alt="IMG-LOGO" style="">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li class="active-menu">
								<a href="{{route('landing')}}">Home</a>
							</li>

							<li>
								<a href="{{route('allProducts')}}">Shop</a>
							</li>

							<li>
								<a href="{{route('about')}}">About</a>
							</li>

							<li>
								<a href="{{route('contact')}}">Contact</a>
							</li>
						</ul>
					</div>	

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
    <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="0" id="cart-count-desktop">
        <i class="zmdi zmdi-shopping-cart"></i>
    </div>
</div>
				</nav>
			</div>	
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="{{route('landing')}}"><img src="{{ asset('client/images/icons/logo-01.png') }}" alt="IMG-LOGO"></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m">
    <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="0" id="cart-count-mobile">
        <i class="zmdi zmdi-shopping-cart"></i>
    </div>
</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="topbar-mobile">
				<li>
					<div class="left-top-bar">
						Free shipping for standard order over $100
					</div>
				</li>

				
			</ul>

			<ul class="main-menu-m">
				<li>
					<a href="{{route('landing')}}">Home</a>
					
				</li>

				<li>
					<a href="{{route('allProducts')}}">Shop</a>
				</li>

				<li>
					<a href="{{route('about')}}">About</a>
				</li>

				<li>
					<a href="{{route('contact')}}">Contact</a>
				</li>
			</ul>
		</div>

	</header>