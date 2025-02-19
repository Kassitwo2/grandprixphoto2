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
									<a class="text-gray-600 text-hover-primary">
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
								<li class="breadcrumb-item text-gray-500 mx-n1">Dashboard</li>
								<!--end::Item-->
							</ul>
							<!--end::Breadcrumb-->
							<!--begin::Title-->
							<h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bolder fs-3 m-0">Dashboard</h1>
							<!--end::Title-->
						</div>
						<!--end::Page title-->

					</div>
					<!--end::Toolbar-->




					
					<!--begin::Main-->
					<div class="d-flex flex-row flex-column-fluid align-items-stretch">
						<!--begin::Content-->
						<div class="content flex-row-fluid" id="kt_content">


							<!--begin::Notice-->
								<div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-5 p-6">
									<!--begin::Icon-->
										<i class="ki-duotone ki-information fs-2tx text-warning me-4">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
										</i>
									<!--end::Icon-->
									<!--begin::Wrapper-->
									<div class="d-flex flex-stack flex-grow-1">
									<!--begin::Content-->
									<div class="fw-semibold">
									<h4 class="text-gray-900 fw-bold">Notification</h4>
									<div class="fs-6 text-gray-700">Cher utilisateur, nous sommes ravis de vous informer que le concours débutera le <b> 1er mars 2025.</b> Nous avons hâte de vous voir participer et espérons que vous rejoindrez cet événement exceptionnel !</div>
										<br>
									<div class="fs-6 text-gray-700 text-end" dir="rtl" >عزيزي المستخدم، يسعدنا إبلاغك بأن المسابقة ستنطلق في <b>1 مارس 2025</b>. نتطلع إلى مشاركتكم ونأمل أن تكونوا جزءًا من هذا الحدث المميز!</div>
									<!--end::Content-->
							</div>
									<!--end::Wrapper-->
							</div>
						</div>
				<!--end::Notice-->	

							<!--begin::Navbar-->
							<div class="card mb-5 mb-xl-10">
								<div class="card-body pt-9 pb-0">
									<!--begin::Details-->
									<div class="d-flex flex-wrap flex-sm-nowrap">
										<!--begin: Pic-->
										<div class="me-7 mb-4">
											<div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
												<img src="{{ Auth::user()->photo }}" alt="image" />
												<div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
											</div>
										</div>
										<!--end::Pic-->
										<!--begin::Info-->
										<div class="flex-grow-1">
											<!--begin::Title-->
											<div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
												<!--begin::User-->
												<div class="d-flex flex-column">
													<!--begin::Name-->
													<div class="d-flex align-items-center mb-2">
														<a class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">{{ Auth::user()->name }}</a>
														<a>
															<i class="ki-duotone ki-verify fs-1 text-primary">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</a>
													</div>
													<!--end::Name-->
													<!--begin::Info-->
													<div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
														<a class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
														<i class="ki-duotone ki-profile-circle fs-4 me-1">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>{{ Auth::user()->profile }}</a>
														<a class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
														<i class="ki-duotone ki-geolocation fs-4 me-1">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>{{ Auth::user()->ville->name }}</a>
														<a class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
														<i class="ki-duotone ki-sms fs-4">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>{{ Auth::user()->email }}</a>
													</div>
													<!--end::Info-->
												</div>
												<!--end::User-->

											</div>
											<!--end::Title-->
											<!--begin::Stats-->
											<div class="d-flex flex-wrap flex-stack">
												<!--begin::Wrapper-->
												<div class="d-flex flex-column flex-grow-1 pe-8">
													<!--begin::Stats-->
													<div class="d-flex flex-wrap">
														<!--begin::Stat-->
														<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
															<!--begin::Number-->
															<div class="d-flex align-items-center">
																<i class="ki-duotone ki-arrow-up fs-3 text-success me-2">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
																<div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="{{Auth::user()->participations()->count()}}" data-kt-countup-prefix="">0</div>
															</div>
															<!--end::Number-->
															<!--begin::Label-->
															<div class="fw-semibold fs-6 text-gray-400">Participations</div>
															<!--end::Label-->
														</div>
														<!--end::Stat-->
														<!--end::Stat-->
													</div>
													<!--end::Stats-->
												</div>
												<!--end::Wrapper-->
												<!--begin::Progress-->
												<div class="d-flex align-items-center w-200px w-sm-300px flex-column mt-3">
													<div class="d-flex justify-content-between w-100 mt-auto mb-2">
														<span class="fw-semibold fs-6 text-gray-400">Profil Completion</span>
														<span class="fw-bold fs-6">100%</span>
													</div>
													<div class="h-5px mx-3 w-100 bg-light mb-3">
														<div class="bg-success rounded h-5px" role="progressbar" style="width: 100%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</div>
												<!--end::Progress-->
											</div>
											<!--end::Stats-->
										</div>
										<!--end::Info-->
									</div>
									<!--end::Details-->

								</div>
							</div>
							<!--end::Navbar-->
							
							<!--begin::details View-->
							<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
								<!--begin::Card header-->
								<div class="card-header cursor-pointer">
									<!--begin::Card title-->
									<div class="card-title m-0">
										<h3 class="fw-bold m-0">Détails du profil</h3>
									</div>
									<!--end::Card title-->
									<!--begin::Action-->
{{-- 									<a href="/backoffice/profile" class="btn btn-sm btn-primary align-self-center">Modifier le profil</a> --}}
									<!--end::Action-->
								</div>
								<!--begin::Card header-->
								<!--begin::Card body-->
								<div class="card-body p-9">
									<!--begin::Row-->
									<div class="row mb-7">
										<!--begin::Label-->
										<label class="col-lg-4 fw-semibold text-muted">Nom et Prénom</label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8">
											<span class="fw-bold fs-6 text-gray-800">{{ Auth::user()->name }}</span>
											<span class="badge badge-success">Vérifié</span>
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
									<!--begin::Input group-->
									<div class="row mb-7">
										<!--begin::Label-->
										<label class="col-lg-4 fw-semibold text-muted">Ville</label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8 fv-row">
											<span class="fw-semibold text-gray-800 fs-6">{{ Auth::user()->ville->name }}</span>
										</div>
										<!--end::Col-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row mb-7">
										<!--begin::Label-->
										<label class="col-lg-4 fw-semibold text-muted">Telephone</label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8 d-flex align-items-center">
											<span class="fw-bold fs-6 text-gray-800 me-2">{{ Auth::user()->phone }}</span>
										</div>
										<!--end::Col-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row mb-7">
										<!--begin::Label-->
										<label class="col-lg-4 fw-semibold text-muted">Profil</label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8">
											<a class="fw-semibold fs-6 text-gray-800 text-hover-primary">{{ Auth::user()->profile }}</a>
										</div>
										<!--end::Col-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row mb-7">
										<!--begin::Label-->
										<label class="col-lg-4 fw-semibold text-muted">Genre</label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8">
											<span class="fw-bold fs-6 text-gray-800">{{ Auth::user()->sexe }}</span>
										</div>
										<!--end::Col-->
									</div>
									<!--end::Input group-->
																		<!--begin::Input group-->
									<div class="row mb-7">
										<!--begin::Label-->
										<label class="col-lg-4 fw-semibold text-muted">Date de naissance</label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8">
											

											<span class="fw-bold fs-6 text-gray-800">{{ \Carbon\Carbon::parse(Auth::user()->DateNaissance)->locale('fr_FR')->isoFormat('DD MMMM, YYYY') }}</span>
										</div>
										<!--end::Col-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row mb-7">
										<!--begin::Label-->
										<label class="col-lg-4 fw-semibold text-muted">Email</label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8">
											<span class="fw-bold fs-6 text-gray-800">{{ Auth::user()->email }}</span>
										</div>
										<!--end::Col-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row mb-10">
										<!--begin::Label-->
										<label class="col-lg-4 fw-semibold text-muted">Date d'inscription</label>
										<!--begin::Label-->
										<!--begin::Label-->
										<div class="col-lg-8">
											<span class="fw-semibold fs-6 text-gray-800">{{ \Carbon\Carbon::parse(Auth::user()->created_at)->locale('fr_FR')->isoFormat('DD MMMM, YYYY') }}</span>
										</div>
										<!--begin::Label-->
									</div>
									<!--end::Input group-->
								</div>
								<!--end::Card body-->
							</div>
							<!--end::details View-->


						</div>
						<!--end::Content-->
					</div>
					<!--end::Main-->
					<!--begin::Footer-->
					<div class="footer py-4 d-flex flex-column flex-md-row align-items-center justify-content-between" id="kt_footer">
						<!--begin::Copyright-->
						<div class="order-2 order-md-1">
							<span class="text-white opacity-75 fw-semibold me-1">2024&copy;</span>
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