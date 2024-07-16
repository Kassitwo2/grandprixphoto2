<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<head><base href="../../../"/>
		<title>Le Grand Prix de Photographie By Darem Bouchentouf</title>
		<meta charset="utf-8" />
		
		<meta name="viewport" content="width=device-width, initial-scale=1" />

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

							<form class="form w-100" novalidate="novalidate" id="kt_sign_up_form" action="{{ route('save.form.data') }}" method="post">
									@method('put')
									@csrf
								<!--begin::Heading-->
								<div class="text-center mb-11">
									<!--begin::Title-->
									<h1 class="text-dark fw-bolder mb-3">Formulaire de présence</h1>

									<h1 class="text-dark fw-bolder mb-3">استمارة الحضور</h1>

									<!--end::Title-->
								</div>
								<!--begin::Heading-->



								<!--begin::Input group=-->
								<div class="fv-row mb-8">
									<!--begin::Label-->
									<label class="fs-6 required fw-semibold form-label mt-3">
										<span style="direction: ltr;">Date</span> / <span>التاريخ </span> 
									</label>
										<!--end::Label-->
									<!--begin::Email-->
									
									<div class="input-group">

										<input class="form-control form-control-solid ps-12" disabled value="2024-05-25" min="2024-05-11" max="2024-04-27" type="datetime" placeholder="Sélectionnez une date" name="DateFormation" />

									</div>
									<!--end::Email-->
								</div>
								<!--end::Input group=-->

								<!--begin::Input group=-->
								<div class="fv-row mb-8">
									<!--begin::Label-->
									<label class="fs-6 required fw-semibold form-label mt-3">
										<span style="direction: ltr;">Prénom</span> / <span>الاسم الشخصي</span> 
									</label>
										<!--end::Label-->
									<!--begin::Email-->
									
									<div class="input-group">

										<input type="text" name="prenom"  class="form-control{{ $errors->has('prenom') ? ' is-invalid' : '' }}" id="prename-input" placeholder="Prénom." value="{{ old('prenom') }}" required>

										@if ($errors->has('prenom'))
											<span class="invalid-feedback" role="alert">
												<strong>Le champ téléphone est obligatoire.</strong>
											</span>
										@endif
										</div>
									<!--end::Email-->
								</div>
								<!--end::Input group=-->

								
								<!--begin::Input group=-->
								<div class="fv-row mb-8">
									<!--begin::Label-->
									<label class="fs-6 required fw-semibold form-label mt-3">
										<span style="direction: ltr;">Nom</span> / <span>النسب</span> 
									</label>
										<!--end::Label-->
									<!--begin::Email-->
									
									<div class="input-group">

										<input type="text" name="nom"  class="form-control{{ $errors->has('nom') ? ' is-invalid' : '' }}" id="name-input" placeholder="Nom." value="{{ old('nom') }}" required>

										@if ($errors->has('nom'))
											<span class="invalid-feedback" role="alert">
												<strong>Le champ téléphone est obligatoire.</strong>
											</span>
										@endif
										</div>
									<!--end::Email-->

								</div>
								<!--end::Input group=-->

								<!--begin::Input group=-->
								<div class="fv-row mb-8">
									<!--begin::Label-->
									<label class="fs-6 required fw-semibold form-label mt-3">
										<span style="direction: ltr;">Téléphone</span> / <span>الهاتف</span> 
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

								<!--begin::Input group=-->
								<div class="fv-row mb-8">
									<!--begin::Label-->
									<label class="fs-6 required fw-semibold form-label mt-3">
										<span style="direction: ltr;">Email</span> / <span>البريد الالكتروني</span> 
									</label>
										<!--end::Label-->
									<!--begin::Email-->
									
									<div class="input-group">

										<input type="text" name="EMAIL"  class="form-control{{ $errors->has('EMAIL') ? ' is-invalid' : '' }}" id="phone-input" placeholder="Email." value="{{ old('EMAIL') }}" required>

										@if ($errors->has('EMAIL'))
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
								<div class="fv-row mb-8 form-control{{ $errors->has('genre') ? ' is-invalid' : '' }}">
									<span>
									<!--begin::Repeat Password-->
										<input class="form-check-input" name="genre" type="radio" value="femme" {{ old('genre') == 'femme' ? 'checked' : '' }} id="femaleGender"/>
										<label class="form-check-label" for="femaleGender">
										Femme / امرأة 
										</label>	
									</span>
									<span class="m-5">
										<input class="form-check-input" name="genre" type="radio" value="homme" {{ old('genre') == 'homme' ? 'checked' : '' }} id="maleGender"/>
										<label class="form-check-label" for="maleGender">
										Homme / رجل
										</label>						
									</span>
									<!--end::Repeat Password-->
								</div>

								@if ($errors->has('genre'))
									<span class="invalid-feedback" role="alert">
										<strong>Le champ genre est obligatoire.</strong>
									</span>
								@endif
									<!--end::Input-->
								</div>
								<!--end::Input group-->



								
								<!--begin::Submit button-->
								<div class="d-grid mb-10">
									<button type="submit" id="kt_sign_up_submit" class="btn btn-primary">
										<!--begin::Indicator label-->
										<span class="indicator-label">Enregistrer</span>
										<!--end::Indicator label-->
									</button>
								</div>
								<!--end::Submit button-->
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
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

		<script>
			$(document).ready(function() {
				$('#kt_sign_up_form').submit(function(event) {
					event.preventDefault(); // Prevent the default form submission

					var formData = $(this).serialize(); // Serialize form data
					var form = $(this);

					$.ajax({
						url: '{{ route("save.form.data") }}',
						type: 'POST', // Change the request method to POST
						data: formData,
						success: function(response) {
							// Handle success response
							console.log(response);

							form.trigger('reset');

							Swal.fire({
							title: "Confirmation!",
							text: "Votre présence a été ajoutée avec succès. ",

							icon: "success"
							});
						},
						error: function(xhr, status, error) {
							// Handle error response
							console.error(xhr.responseText);
							alert('An error occurred while saving form data.');
						}
					});
				});
			});
		</script>


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
