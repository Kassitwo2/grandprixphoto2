<!DOCTYPE html>

<html lang="fr">
	<!--begin::Head-->
	<head>
		<title>Dashboard - Le Grand Prix de Photographie</title>
		<meta charset="utf-8" />
		<meta name="description" content="Le Grand Prix de Photographie By Darem Bouchentouf" />
		<meta name="keywords" content="Le Grand Prix de Photographie By Darem Bouchentouf" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="fr" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Le Grand Prix de Photographie By Darem Bouchentouf" />
		<meta property="og:site_name" content="Le Grand Prix de Photographie By Darem Bouchentouf" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<!--begin::Vendor Stylesheets(used for this page only)-->
		<link href="{{asset('assets-metronic/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="{{asset('assets-metronic/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets-metronic/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/exif-js"></script>

		<!--end::Global Stylesheets Bundle-->
		<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
		<!-- Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=G-HTBY5GDY31"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-HTBY5GDY31'); </script>



		<!-- Meta Pixel Code -->
		<script>
			!function(f,b,e,v,n,t,s)
			{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
			n.callMethod.apply(n,arguments):n.queue.push(arguments)};
			if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
			n.queue=[];t=b.createElement(e);t.async=!0;
			t.src=v;s=b.getElementsByTagName(e)[0];
			s.parentNode.insertBefore(t,s)}(window, document,'script',
			'https://connect.facebook.net/en_US/fbevents.js');
			fbq('init', '1003648677850338');
			fbq('track', 'PageView');
			</script>
			<noscript><img height="1" width="1" style="display:none"
			src="https://www.facebook.com/tr?id=1003648677850338&ev=PageView&noscript=1"
			/></noscript>
			
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled">
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::Main-->

		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-column flex-column-fluid">
				<!--begin::Header-->
				<div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
					<!--begin::Container-->
					<div class="header-top-container container-xxl sabi d-flex flex-grow-1 flex-stack">
						<!--begin::Header Logo-->
						<div class="d-flex align-items-center me-5">
							<!--begin::Heaeder menu toggle-->
							<div class="d-lg-none btn btn-icon btn-color-white w-30px h-30px me-2 ms-n2" id="kt_header_menu_toggle">
								<i class="ki-duotone ki-abstract-14 fs-2">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
							</div>
							<!--end::Heaeder menu toggle-->
							<!--begin::Logo-->
							<a href="https://grandprixphoto.ma/">
								<!--begin::Desktop modes-->
								<img src="{{asset('assets-metronic/media/logos/Concours-photo-SocialLogoTransicon.png')}}" class="d-none d-lg-inline-block h-55px"  alt="Logo">
								<img alt="Logo" src="{{asset('assets-metronic/media/logos/logo-gpp.png')}}" class="d-none d-lg-inline-block h-95px" />
								<!--end::Desktop modes-->
								<!--begin::Table & mobile modes-->
								<img src="{{asset('assets-metronic/media/logos/Concours-photo-SocialLogoTransicon.png')}}"class="d-lg-none h-55px" alt="Logo">
								<img alt="Logo" src="{{asset('assets-metronic/media/logos/logo-gpp.png')}}" class="d-lg-none h-95px" />
								<!--end::Table & mobile modes-->
							</a>
							<!--end::Logo-->
						</div>
						<!--end::Header Logo-->
						<!--begin::Toolbar wrapper-->
						<div class="topbar d-flex align-items-stretch flex-shrink-0" id="kt_topbar">
							<!--begin::User menu-->
							<div class="d-flex align-items-center ms-2 ms-lg-3">
								<!--begin::Menu- wrapper-->
								<div class="btn btn-icon btn-custom w-30px h-30px w-md-40px h-md-40px position-relative" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
									<i class="ki-duotone ki-user fs-2">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>
								</div>
								<!--begin::User account menu-->
								<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<div class="menu-content d-flex align-items-center px-3">
											<!--begin::Avatar-->
											<div class="symbol symbol-50px me-5">
												<img alt="Logo" src="{{ Auth::user()->photo }}" />
											</div>
											<!--end::Avatar-->
											<!--begin::Username-->
											<div class="d-flex flex-column">
												<div class="fw-bold d-flex align-items-center fs-8">{{ Auth::user()->name }}</div>
												<span class="fw-semibold text-muted text-hover-primary fs-9">{{ Auth::user()->email }}</span>
											</div>
											<!--end::Username-->
										</div>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu separator-->
									<div class="separator my-2"></div>
									<!--end::Menu separator-->
									<!--begin::Menu item-->
									<div class="menu-item px-5">
										<a href="https://grandprixphoto.ma/backoffice/profile" class="menu-link px-5">Mon profil</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-5">
										<a href="https://grandprixphoto.ma/backoffice/participations" class="menu-link px-5">
											<span class="menu-text">Mes participations</span>
											<span class="menu-badge">
												<span class="badge badge-light-danger badge-circle fw-bold fs-7">{{Auth::user()->participations()->count()}}</span>
											</span>
										</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<form method="POST" action="{{ route('logout') }}">
										@csrf
										<div class="menu-item px-5">
											<a :href="route('logout')"
												onclick="event.preventDefault();
															this.closest('form').submit();" class="menu-link px-5">
												<span class="menu-text">Logout</span>
											</a>
										</div>
									</form>
									<!--end::Menu item-->
								</div>
								<!--end::User account menu-->
								<!--end::Menu wrapper-->
							</div>
							<!--end::User menu-->

							<!--begin::Heaeder menu toggle-->
							<!--end::Heaeder menu toggle-->
						</div>
						<!--end::Toolbar wrapper-->
					</div>
					<!--end::Container-->
					<!--begin::Container-->
					<div class="header-menu-container d-flex align-items-stretch flex-stack w-100" id="kt_header_nav">
						<!--begin::Menu wrapper-->
						<div class="header-menu container-xxl flex-column align-items-stretch flex-lg-row" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
							<!--begin::Menu-->
							<div class="menu menu-column menu-lg-row menu-rounded menu-active-bg menu-title-gray-800 menu-state-primary menu-arrow-gray-500 fw-semibold my-5 my-lg-0 align-items-stretch flex-grow-1 px-2 px-lg-0" id="kt_header_menu" data-kt-menu="true">
								
								
								@if(Request::url() === 'https://grandprixphoto.ma/backoffice/dashboard')
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item here show">
										<!--begin:Menu link-->
										<span class="menu-link py-3">
											<span class="menu-title">Dashboard</span>
											<span class="menu-arrow d-lg-none"></span>
										</span>
										<!--end:Menu link-->
									</div>
									<!--end:Menu item-->
								@else
									<div class="menu-item m-0 p-0">
										<a class="menu-link py-3 px-4 " href="/backoffice/dashboard">
											<span class="menu-title">Dashboard</span>
										</a>
									</div>
								@endif


								@if(Request::url() === 'https://grandprixphoto.ma/backoffice/participations' || Request::url() === 'https://grandprixphoto.ma/backoffice/participation-form')
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item here show">
										<!--begin:Menu link-->
										<span class="menu-link py-3">
											<span class="menu-title">Mes participations</span>
											<span class="menu-arrow d-lg-none"></span>
										</span>
										<!--end:Menu link-->
									</div>
									<!--end:Menu item-->
								@else
									<!--begin:Menu item-->
									<div class="menu-item m-0 p-0">
										<a class="menu-link py-3 px-4 " href="/backoffice/participations">
											<span class="menu-title">Mes participations</span>
										</a>
									</div>
									<!--end:Menu item-->
								@endif


								@if(Request::url() === 'https://grandprixphoto.ma/backoffice/profile')
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item here show">
									<!--begin:Menu link-->
									<span class="menu-link py-3">
										<span class="menu-title">Mon profil</span>
										<span class="menu-arrow d-lg-none"></span>
									</span>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
								@else
								<!--begin:Menu item-->
								<div class="menu-item m-0 p-0">
									<a class="menu-link py-3 px-4 " href="/backoffice/profile">
										<span class="menu-title">Mon profil</span>
									</a>
								</div>
								<!--end:Menu item-->
								@endif


							</div>
							<!--end::Menu-->
						</div>
						<!--end::Menu wrapper-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Header-->

                @yield('content')   

				

			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
		<!--begin::Drawers-->
		<!--begin::Javascript-->
		<script>
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
		</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="{{asset('assets-metronic/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('assets-metronic/js/scripts.bundle.js')}}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used for this page only)-->
		<script src="{{asset('assets-metronic/plugins/custom/datatables/datatables.bundle.js')}}"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="{{asset('assets-metronic/js/custom/pages/user-profile/general.js')}}"></script>
		<script src="{{asset('assets-metronic/js/widgets.bundle.js')}}"></script>
		<script src="{{asset('assets-metronic/js/custom/widgets.js')}}"></script>
		<script src="{{asset('assets-metronic/js/custom/apps/chat/chat.js')}}"></script>
		<script src="{{asset('assets-metronic/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
		<script src="{{asset('assets-metronic/js/custom/utilities/modals/offer-a-deal/type.js')}}"></script>
		<script src="{{asset('assets-metronic/js/custom/utilities/modals/offer-a-deal/details.js')}}"></script>
		<script src="{{asset('assets-metronic/js/custom/utilities/modals/offer-a-deal/finance.js')}}"></script>
		<script src="{{asset('assets-metronic/js/custom/utilities/modals/offer-a-deal/complete.js')}}"></script>
		<script src="{{asset('assets-metronic/js/custom/utilities/modals/offer-a-deal/main.js')}}"></script>
		<script src="{{asset('assets-metronic/js/custom/utilities/modals/create-app.js')}}"></script>
		<script src="{{asset('assets-metronic/js/custom/utilities/modals/users-search.js')}}"></script>
		<script src="{{asset('assets-metronic/plugins/custom/formrepeater/formrepeater.bundle.js')}}"></script>
		<script src="{{asset('assets-metronic/js/custom/apps/ecommerce/catalog/save-product.js')}}"></script>


		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>





		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>