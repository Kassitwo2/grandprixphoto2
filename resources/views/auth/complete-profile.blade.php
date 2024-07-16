<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<head><base href="../../../"/>
		<title>Le Grand Prix de Photographie By Darem Bouchentouf</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
        <link href=" {{asset('assets-metronic/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets-metronic/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="app-blank bgi-size-cover bgi-attachment-fixed bgi-position-center bgi-no-repeat">
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root" id="kt_app_root">
			<!--begin::Page bg image-->
            <style>body { background-image: url({{asset('assets-metronic/media/auth/bg4.jpg')}}); } [data-bs-theme="dark"] body { background-image: url( { { asset('assets-metronic/media/auth/bg4-dark.jpg') } } ); }</style>

			<!--end::Page bg image-->
			<!--begin::Authentication - Sign-up -->
			<div class="d-flex flex-column flex-column-fluid flex-lg-row">
				<!--begin::Aside-->
				<div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
					<!--begin::Aside-->
					<div class="d-flex flex-center flex-lg-start flex-column">
						<!--begin::Logo-->
						<a href="#" class="mb-7">
                            <img alt="Logo" class="h-75px"  src="{{asset('assets-metronic/media/logos/Concours-photo-SocialLogoTransicon.png')}}"/>
							<img alt="Logo" class="h-200px" src="{{asset('assets-metronic/media/logos/logo-gpp.png')}}"/>
						</a>
						<!--end::Logo-->

					</div>
					<!--begin::Aside-->
				</div>
				<!--begin::Aside-->
				<!--begin::Body-->
				<div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12 p-lg-20">
					<!--begin::Card-->
					<div class="bg-body d-flex flex-column align-items-stretch flex-center rounded-4 w-md-600px p-8">
						<!--begin::Wrapper-->
						<div class="d-flex flex-center flex-column flex-column-fluid px-lg-10 pb-15 pb-lg-20">
							<!--begin::Form-->

							<!--begin::Form-->
							<form class="form w-100" novalidate="novalidate" id="kt_sign_up_form"action="{{ route('users.completeProfile', Auth::id()) }}" method="post">
								@csrf
								@method('put')
								<!--begin::Heading-->
								<div class="text-center mb-11">
									<!--begin::Title-->
									<h1 class="text-dark fw-bolder mb-3">Complétez votre profil</h1>
									<h1 class="text-dark fw-bolder mb-3">أكمل ملفك الشخصي</h1>

									<!--end::Title-->
								</div>
								<!--begin::Heading-->
								<!--begin::Input group=-->
								<div class="fv-row mb-8">
									<!--begin::Label-->
									<label class="fs-6 required fw-semibold form-label mt-3">
										<span style="direction: ltr;">Téléphone</span> / <span>هاتف</span> 
									</label>
										<!--end::Label-->
									<!--begin::Email-->
									
									<div class="input-group">
										<button id="dropdown-phone-button" class="btn btn-secondary">
											+212
										</button>

										<input type="text" name="telephone"  class="form-control{{ $errors->has('telephone') ? ' is-invalid' : '' }}" id="phone-input" placeholder="61234XXXX." value="{{ old('telephone') }}" required>

										@if ($errors->has('telephone'))
											<span class="invalid-feedback" role="alert">
												<strong>Le champ téléphone est obligatoire.</strong>
											</span>
										@endif
										</div>
									<!--end::Email-->

								</div>
								<!--end::Input group=-->

								
								<!--begin::Input group-->
								<div class="fv-row mb-7">
									<!--begin::Label-->
									<label class="fs-6 required fw-semibold form-label mt-3">
										<span>Genre / الجنس</span>
									</label>

										<!--end::Label-->
								<!--begin::Input-->
								<div class="fv-row mb-8 form-control{{ $errors->has('sexe') ? ' is-invalid' : '' }}">
									<span>
									<!--begin::Repeat Password-->
										<input class="form-check-input" name="sexe" type="radio" value="femme" {{ old('sexe') == 'femme' ? 'checked' : '' }} id="femaleGender"/>
										<label class="form-check-label" for="femaleGender">
										Femme / امرأة 
										</label>	
									</span>
									<span class="m-5">
										<input class="form-check-input" name="sexe" type="radio" value="homme" {{ old('sexe') == 'homme' ? 'checked' : '' }} id="maleGender"/>
										<label class="form-check-label" for="maleGender">
										Homme / رجل
										</label>						
									</span>
									<!--end::Repeat Password-->

								</div>
								@if ($errors->has('sexe'))
										<span class="invalid-feedback" role="alert">
											<strong>Le champ genre est obligatoire.</strong>
										</span>
									@endif
									<!--end::Input-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group=-->
								<div class="fv-row mb-8">
									<!--begin::Label-->
									<label class="fs-6 required fw-semibold form-label mt-3">
										<span>Ville / مدينة</span>
									</label>
										<!--end::Label-->
									<!--begin::Email-->
									<select name="ville" required class="form-control{{ $errors->has('ville') ? ' is-invalid' : '' }} form-select form-select-solid" data-control="select2" data-placeholder="Choisir ville">
										<option value="" hidden selected>Villes</option>
										@foreach ($villes as $ville)
											<option value="{{$ville->id}}" {{ old('ville') == $ville->id ? 'selected' : '' }}>{{$ville->name}}</option>
										@endforeach
									</select>																
									<!--end::Email-->
									@if ($errors->has('ville'))
										<span class="invalid-feedback" role="alert">
											<strong>Le champ vill est obligatoire.</strong>
										</span>
									@endif
								</div>
								<!--end::Input group=-->




								<!--begin::Input group=-->
								<div class="fv-row mb-8">
									<!--begin::Email-->
									<label class="required fs-6 fw-semibold mb-2">Date de naissance / تاريخ الميلاد </label>
									<!--begin::Input-->
									<div class="align-items-center">
										<!--begin::Icon-->
										<i class="ki-duotone ki-calendar-8 fs-2 position-absolute m-4">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
											<span class="path4"></span>
											<span class="path5"></span>
											<span class="path6"></span>
										</i>
										<!--end::Icon-->
										<!--begin::Datepicker-->
										<input class="form-control form-control-solid ps-12 form-control{{ $errors->has('date_naissance') ? ' is-invalid' : '' }}" value="{{ old('date_naissance') }}" type="date" placeholder="Sélectionnez une date" name="date_naissance" />
										<!--end::Datepicker-->
										@if ($errors->has('date_naissance'))
											<span class="invalid-feedback mt-3" role="alert">
												<strong>Le champ date de naissance est obligatoire.</strong>
											</span>
										@endif
									</div>
									<!--end::Input-->	

								</div>
								<!--end::Input group=-->


								<!--begin::Input group-->
								<div class="fv-row mb-7">
									<!--begin::Label-->
									<label class=" required fs-6 fw-semibold form-label mt-3">
										<span>Profil / هل انت</span>
									</label>
										<!--end::Label-->
										<!--begin::Input-->
										<!--begin::Input group=-->																													
								<div class="fv-row mb-8 form-control{{ $errors->has('profile') ? ' is-invalid' : '' }}">
									<!--begin::Email-->
									
									<span>
										<input class="form-check-input" name="profile" type="radio" value="Amateur" {{ old('profile') == 'Amateur' ? 'checked' : '' }} id="AmateurProfile"/>
										<label class="form-check-label" for="AmateurProfile">
											Amateur / هاوٍ
										</label>
									</span>
									<span class="m-10">
										<input class="form-check-input" name="profile" type="radio" value="Professionnel" {{ old('profile') == 'professionnel' ? 'checked' : '' }} id="professionelProfile"/>
										<label class="form-check-label" for="professionelProfile">
											Professionnel / محترف
										</label>
									</span>
									<!--end::Email-->
								</div>
								
								@if ($errors->has('profile'))
									<span class="invalid-feedback" role="alert">
										<strong>Le champ profil est obligatoire.</strong>
									</span>
								@endif
								<!--end::Input group=-->
								<!--end::Input-->
								</div>
								<!--end::Input group-->


								<!--begin::Accept-->
								<div class="fv-row mb-8">

									<label class="form-check form-check-inline ">
										
									<div class="row">
											
										<span class="fw-semibold text-gray-700 fs-base ms-1 col-6">
											«Conformément à la loi 09-08, vous disposez d’un droit d’accès, de rectification et d’opposition au traitement de vos données personnelles. Ce traitement et le transfert de données ont été autorisé par la CNDP sous les numéro … et …»
										</span>

										<span class="fs-6 text-gray-700 text-end col-5"  dir="rtl">
											"بموجب القانون 09-08، لديك الحق في الوصول إلى بياناتك الشخصية وتصحيحها والاعتراض عليها. تمت الموافقة على هذه المعالجة ونقل البيانات من قبل CNDP تحت أرقام ... و ..."
										 </span>

									</div>
										<br><br>
										<div class="row">
											<span class="fw-semibold text-gray-700 fs-base ms-1 col-6">En cochant cette case, 
												je confirme avoir lu, compris et accepté <a href="https://grandprixphoto.ma/reglement-du-concours/" target="_blank"  class="ms-1 link-primary">les règles du Grand Prix de la Photographie.</a> 
												Je m'engage à respecter toutes les conditions de participation. Je comprends que mon inscription et ma participation au concours sont
												soumises à ces règles et que toute violation peut entraîner ma disqualification.
												Je consens également à la cession des droits d'utilisation de mes photos à 
												l'organisation du concours et ses partenaires sans prétention de rémunération.
											</span>


											<span class="fs-6 text-gray-700 text-end col-5"  dir="rtl">
												بوضع علامة على هذه الخانة، أؤكد أنني قرأت وفهمت ووافقت على<a href="https://grandprixphoto.ma/arabe/" target="_blank" class="ms-1 link-primary"> قواعد و 

												شروط المشاركة 

												في الجائزة الكبرى للتصوير الفوتوغرافي.</a> 
												أتعهد بالالتزام بجميع شروط المشاركة، بما في ذلك تقديم صور فوتوغرافية أصلية لا تنتهك حقوق النشر أو أي حقوق ملكية فكرية أخرى. 
												أفهم أن تسجيلي ومشاركتي في المسابقة خاضعان لهذه القواعد وأن أي انتهاك قد يؤدي إلى استبعادي.
												كما أوافق أيضًا على منح حقوق استخدام صوري لمنظمي المسابقة وشركائها دون المطالبة بأي تعويض.
											 </span>




										</div>


									</label>
									<div class="d-flex justify-content-center">
										<div class="m-3">
											<input class="form-check-input form-control{{ $errors->has('terms') ? ' is-invalid' : '' }}" {{ old('terms') == '1' ? 'checked' : '' }}  type="checkbox" id="terms" name="terms" required value="1" />
										</div>
									</div>


								</div>
								<!--end::Accept-->

								
								<!--begin::Submit button-->
								<div class="d-grid mb-10">
									<button type="submit" id="kt_sign_up_submit" class="btn btn-primary">
										<!--begin::Indicator label-->
										<span class="indicator-label">Enregistrer</span>
										<!--end::Indicator label-->
										<!--begin::Indicator progress-->
										<span class="indicator-progress">Please wait...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										<!--end::Indicator progress-->
									</button>
								</div>
								<!--end::Submit button-->
							</form>
							<!--end::Form-->
							<form method="POST" action="{{ route('logout') }}">
										@csrf
										<div class="menu-item px-5">
											<a :href="route('logout')"
												onclick="event.preventDefault();
															this.closest('form').submit();" class="menu-link px-5">
												<span class="menu-text">Annuler</span>
											</a>
										</div>
									</form>

							<!--end::Form-->
						</div>
						<!--end::Wrapper-->
						<!--begin::Footer-->
						<div class="text-center flex-stack px-lg-10">
							<!--begin::Links
							<div class="text-center fw-semibold text-primary fs-base gap-5">
								<a href="https://grandprixphoto.ma/reglement-du-concours/" class="text-center" target="_blank">Réglement</a>
							</div>-->
							<!--end::Links-->
						</div>
						<!--end::Footer-->
					</div>
					<!--end::Card-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::Authentication - Sign-up-->
		</div>
		<!--end::Root-->

		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="{{asset('assets-metronic/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('assets-metronic/js/scripts.bundle.js')}}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="{{asset('assets-metronic/js/custom/authentication/sign-in/general.js')}}"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
