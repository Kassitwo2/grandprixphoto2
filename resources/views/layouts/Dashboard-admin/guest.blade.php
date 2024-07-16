<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="../../"/>
		<title>Le Grand Prix de Photographie By Darem Bouchentouf</title>
		<meta charset="utf-8" />

		<meta property="og:type" content="article" />

		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<!--begin::Vendor Stylesheets(used for this page only)-->
		<link href="{{asset('assets-metronic-1/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="{{asset('assets-metronic-1/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets-metronic-1/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

		<!--end::Global Stylesheets Bundle-->
		<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::App-->
		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<!--begin::Page-->
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
				<!--begin::Header-->
				<div id="kt_app_header" class="app-header" data-kt-sticky="true" data-kt-sticky-activate="{default: true, lg: true}" data-kt-sticky-name="app-header-minimize" data-kt-sticky-offset="{default: '200px', lg: '0'}" data-kt-sticky-animation="false">
					<!--begin::Header container-->
					<div class="app-container container-fluid d-flex align-items-stretch justify-content-between" id="kt_app_header_container">
						<!--begin::Sidebar mobile toggle-->
						<div class="d-flex align-items-center d-lg-none ms-n3 me-1 me-md-2" title="Show sidebar menu">
							<div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
								<i class="ki-duotone ki-abstract-14 fs-2 fs-md-1">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
							</div>
						</div>
						<!--end::Sidebar mobile toggle-->
						<!--begin::Mobile logo-->
						<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
							<a href="#" class="d-lg-none">
								<img alt="Logo" src="{{asset('assets-metronic-1/media/logos/default-small.svg')}}" class="h-30px" />
							</a>
						</div>
						<!--end::Mobile logo-->
						<!--begin::Header wrapper-->
						<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
							<!--begin::Menu wrapper-->
							<div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
								<!--begin::Menu-->
								<div class="menu menu-rounded menu-column menu-lg-row my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0" id="kt_app_header_menu" data-kt-menu="true">


								</div>
								<!--end::Menu-->
							</div>
							<!--end::Menu wrapper-->
							<!--begin::Navbar-->
							<div class="app-navbar flex-shrink-0">

								<!--begin::User menu-->
								<div class="app-navbar-item ms-1 ms-md-4" id="kt_header_user_menu_toggle">
									<!--begin::Menu wrapper-->
									<div class="cursor-pointer symbol symbol-35px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
										<img src="{{asset('assets-metronic-1/media/avatars/300-3.jpg')}}" class="rounded-3" alt="user" />
									</div>
									<!--begin::User account menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<div class="menu-content d-flex align-items-center px-3">
												<!--begin::Avatar-->
												<div class="symbol symbol-50px me-5">
													<img alt="Logo" src="{{asset('assets-metronic-1/media/avatars/300-3.jpg')}}" />
												</div>
												<!--end::Avatar-->
												<!--begin::Username-->
												<div class="d-flex flex-column">
													<div class="fw-bold d-flex align-items-center fs-5"> {{ auth('admin')->user()->name }}
													<span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Admin</span></div>
													<a href="#" class="fw-semibold text-muted text-hover-primary fs-7"> {{ auth('admin')->user()->email }}</a>
												</div>
												<!--end::Username-->
											</div>
										</div>

										<!--begin::Menu item-->
										<form method="POST" action="{{ route('admin.logout') }}">
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

								<!--begin::Aside toggle-->
								<!--end::Header menu toggle-->
							</div>
							<!--end::Navbar-->
						</div>
						<!--end::Header wrapper-->
					</div>
					<!--end::Header container-->
				</div>
				<!--end::Header-->
				<!--begin::Wrapper-->
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
					<!--begin::Sidebar-->
					<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
						<!--begin::Logo-->
						<div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
							<!--begin::Logo image-->
							<a href="../../demo1/dist/index.html">
								<img alt="Logo" src="{{asset('assets-metronic/media/logos/GPPM-Logo-Banner.png')}}" class="h-100px app-sidebar-logo-default" />
								<img alt="Logo" src="{{asset('assets-metronic/media/logos/GPPM-Logo-Banner.png')}}" class="h-100px app-sidebar-logo-minimize" />
							</a>
							<!--end::Logo image-->
						</div>
						<!--end::Logo-->
						<!--begin::sidebar menu-->
						<div class="app-sidebar-menu overflow-hidden flex-column-fluid">
							<!--begin::Menu wrapper-->
							<div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper">
								<!--begin::Scroll wrapper-->
								<div id="kt_app_sidebar_menu_scroll" class="scroll-y my-5 mx-3" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
									<!--begin::Menu-->
									<div class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="{{route('admin.dashboard')}}">
												<span class="menu-icon">
													<i class="ki-duotone ki-element-11 fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
														<span class="path4"></span>
														<span class="path5"></span>
														<span class="path6"></span>
													</i>
												</span>
												<span class="menu-title">Dashboard</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										@if (Auth::guard('admin')->user()->is_Admin== 0)
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="{{route('admin.admins')}}">
												<span class="menu-icon">
													<i class="ki-duotone ki-user fs-2 fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
														<span class="path4"></span>
														<span class="path5"></span>
														<span class="path6"></span>
														<span class="path7"></span>

													</i>
												</span>
												<span class="menu-title">Admins</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										@endif



										@if (Auth::guard('admin')->user()->is_Admin == 0)
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="{{route('admin.juries')}}">
												<span class="menu-icon">
													<i class="ki-duotone ki-color-swatch fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
														<span class="path4"></span>
														<span class="path5"></span>
														<span class="path6"></span>
														<span class="path7"></span>
														<span class="path8"></span>
														<span class="path9"></span>
														<span class="path10"></span>
														<span class="path11"></span>
														<span class="path12"></span>
														<span class="path13"></span>
														<span class="path14"></span>
														<span class="path15"></span>
														<span class="path16"></span>
														<span class="path17"></span>
														<span class="path18"></span>
														<span class="path19"></span>
														<span class="path20"></span>
														<span class="path21"></span>
													</i>
												</span>
												<span class="menu-title">Jurys</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										@endif
 

										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-icon">
													<i class="ki-duotone ki-graph-up fs-1">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
														<span class="path4"></span>
														<span class="path5"></span>
														<span class="path6"></span>
														<span class="path7"></span>
													</i>
												</span>
												<span class="menu-title">Participations</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="/backoffice/admin/participations">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Stand by</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="/backoffice/admin/participations-approuve">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Approuvé</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="/backoffice/admin/participations-refuse">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Refusé</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->

											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="{{route('admin.ratings')}}">

												<span class="menu-icon">
													<i class="ki-duotone ki-abstract-23 fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
														<span class="path4"></span>
														<span class="path5"></span>
														<span class="path6"></span>
 													</i>
												</span>

												<span class="menu-title">Rating </span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->

										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="/backoffice/admin/presence-list">
												<span class="menu-icon">
													<i class="ki-duotone ki-screen fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
														<span class="path4"></span>
													</i>
												</span>
												<span class="menu-title">Présence formation </span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->

										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="{{route('admins.navigation')}}">
												<span class="menu-icon">
													<i class="ki-duotone ki-screen fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
														<span class="path4"></span>
													</i>
												</span>
												<span class="menu-title">Navigation</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										
										
									</div>
									<!--end::Menu-->
								</div>
								<!--end::Scroll wrapper-->
							</div>
							<!--end::Menu wrapper-->
						</div>
						<!--end::sidebar menu-->
					</div>
					<!--end::Sidebar-->
					<!--begin::Main-->
					<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">

							@yield('content')   
						</div>
						<!--end::Content wrapper-->
						<!--begin::Footer-->
						<div id="kt_app_footer" class="app-footer">
							<!--begin::Footer container-->
							<div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
								<!--begin::Copyright-->

								<div class="text-dark order-2 order-md-1">
									<span class="text-muted fw-semibold me-1">2024&copy;</span>
									<a href="https://www.3wdev.ma/" target="_blank" class="text-dark text-hover-primary opacity-75">Powered by 3wDev.ma</a>
								</div>
								<!--end::Copyright-->
								<!--begin::Menu-->
								<ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
									<li class="menu-item">
										<a href="https://grandprixphoto.ma/reglement-du-concours/" target="_blank" class="menu-link px-2">Règlement du concours.</a>
									</li>
								</ul>
								<!--end::Menu-->
							</div>
							<!--end::Footer container-->
						</div>
						<!--end::Footer-->

					</div>
					<!--end:::Main-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::App-->
		<!--begin::Javascript-->
		<script>
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
		</script>
		<script src="{{asset('assets-metronic-1/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('assets-metronic-1/js/scripts.bundle.js')}}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used for this page only)-->
		<script src="{{asset('assets-metronic-1/plugins/custom/datatables/datatables.bundle.js')}}"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="{{asset('assets-metronic-1/js/custom/pages/user-profile/general.js')}}"></script>
		<script src="{{asset('assets-metronic-1/js/widgets.bundle.js')}}"></script>
		<script src="{{asset('assets-metronic-1/js/custom/widgets.js')}}"></script>
		<script src="{{asset('assets-metronic-1/js/custom/apps/chat/chat.js')}}"></script>
		<script src="{{asset('assets-metronic-1/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
		<script src="{{asset('assets-metronic-1/js/custom/utilities/modals/create-app.js')}}"></script>
		<script src="{{asset('assets-metronic-1/js/custom/utilities/modals/offer-a-deal/type.js')}}"></script>
		<script src="{{asset('assets-metronic-1/js/custom/utilities/modals/offer-a-deal/details.js')}}"></script>
		<script src="{{asset('assets-metronic-1/js/custom/utilities/modals/offer-a-deal/finance.js')}}"></script>
		<script src="{{asset('assets-metronic-1/js/custom/utilities/modals/offer-a-deal/complete.js')}}"></script>
		<script src="{{asset('assets-metronic-1/js/custom/utilities/modals/offer-a-deal/main.js')}}"></script>
		<script src="{{asset('assets-metronic-1/js/custom/utilities/modals/create-campaign.js')}}"></script>
		<script src="{{asset('assets-metronic-1/js/custom/utilities/modals/users-search.js')}}"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
