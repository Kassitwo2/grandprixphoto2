@extends('layouts.Dashboard-user.guest')
@section('content')
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid container-xxl" id="kt_wrapper">
					<!--begin::Toolbar-->
					<div class="toolbar d-flex flex-stack flex-wrap py-4 gap-2" id="kt_toolbar">
						<!--begin::Page title-->
						<div class="page-title d-flex flex-column">
							<!--begin::Breadcrumb-->
							<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 mb-1">
								<!--begin::Item-->
								<li class="breadcrumb-item text-gray-700 fw-bold lh-1">
									<a href="#" class="text-gray-600 text-hover-primary">
										<i class="ki-duotone ki-home text-gray-700 fs-6"></i>
									</a>
								</li>
								<!--end::Item-->
								<!--begin::Item-->
								<li class="breadcrumb-item">
									<i class="ki-duotone ki-right fs-7 text-gray-700 mx-n1"></i>
								</li>
								<!--end::Item-->
								<!--begin::Item-->
								<li class="breadcrumb-item text-gray-700 fw-bold lh-1">Dashboard</li>
								<!--end::Item-->
								<!--begin::Item-->
								<li class="breadcrumb-item">
									<i class="ki-duotone ki-right fs-7 text-gray-700 mx-n1"></i>
								</li>
								<!--end::Item-->
								<!--begin::Item-->
								<li class="breadcrumb-item text-gray-500 mx-n1">Profil</li>
								<!--end::Item-->
							</ul>
							<!--end::Breadcrumb-->
							<!--begin::Title-->
							<h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bolder fs-3 m-0">Détails du profil</h1>
							<!--end::Title-->
						</div>
						<!--end::Page title-->
					</div>
					<!--end::Toolbar-->


                    @include('profile.partials.delete-user-form')
                    
					<!--begin::Footer-->
					<div class="footer py-4 d-flex flex-column flex-md-row align-items-center justify-content-between" id="kt_footer">
						<!--begin::Copyright-->
						<div class="order-2 order-md-1">
							<span class="text-white opacity-75 fw-semibold me-1">2023&copy;</span>
							<a href="https://www.3wdev.ma/" target="_blank" class="text-white text-hover-primary opacity-75">Powered by 3wDev.ma</a>
						</div>
						<!--end::Copyright-->
						<!--begin::Menu-->
						<ul class="menu menu-white menu-hover-primary fw-semibold order-1 opacity-75">
							<li class="menu-item">
								<a href="https://grandprixphoto.ma/reglement-du-concours/" target="_blank" class="menu-link px-2">Règlement du concours.</a>
							</li>
						</ul>
						<!--end::Menu-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
@endsection