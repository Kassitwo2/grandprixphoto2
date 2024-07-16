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
				<li class="breadcrumb-item text-gray-700 fw-bold lh-1">Dashboard</li>
				<!--end::Item-->
				<!--begin::Item-->
				<li class="breadcrumb-item">
					<i class="ki-duotone ki-right fs-7 text-gray-700 mx-n1"></i>
				</li>
				<!--end::Item-->
				<!--begin::Item-->
				<li class="breadcrumb-item text-gray-700 fw-bold lh-1">Participations</li>
				<!--end::Item-->
				<!--begin::Item-->
				<li class="breadcrumb-item">
					<i class="ki-duotone ki-right fs-7 text-gray-700 mx-n1"></i>
				</li>
				<!--end::Item-->
				<!--begin::Item-->
				<li class="breadcrumb-item text-gray-500 mx-n1">Participer</li>
				<!--end::Item-->
			</ul>
			<!--end::Breadcrumb-->
			<!--begin::Title-->
			<h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bolder fs-3 m-0">Formulaire
				de participation</h1>
			<!--end::Title-->
		</div>
		<!--end::Page title-->

	</div>
	<!--end::Toolbar-->
	<!--begin::Main-->
	<div class="d-flex flex-row flex-column-fluid align-items-stretch">
		<!--begin::Content-->



		<div class="content flex-row-fluid" id="kt_content">
			@if ($errors->any())
				<div id="result1" class="alert alert-danger mb-5">
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</div>
			@endif

			<span>
				<ul class="p-5"  id="result">

				</ul>

			</span>

			<!--begin::Form-->
			<form id="kt_ecommerce_add_product_form" class="form d-flex flex-column flex-lg-row"
				action="{{ route('store.participation') }}" method="POST" enctype="multipart/form-data">
				@csrf
				<!--begin::Aside column-->

				<div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
					<!--begin::Careers about-->
					<div class="card bg-light">
						<!--begin::Body-->
						<div class="card-body">
							<!--begin::Top-->
							<div class="mb-7">
								<!--begin::Title-->
								<h6 class="fs-1 text-gray-800 w-bolder mb-6">Règles de Qualité de Photographie</h6>
								<!--end::Title-->
							</div>
							<!--end::Top-->
							<!--begin::Item-->
							<div class="mb-8">
								<!--begin::Title-->
								<h5 class="text-gray-700 w-bolder mb-0">1 . Résolution et Format</h5>
								<!--end::Title-->
								<!--begin::Section-->
								<div class="my-2">
									<!--begin::Row-->
									<div class="d-flex align-items-center mb-3">
										<!--begin::Bullet-->
										<span class=" me-3"></span>
										<!--end::Bullet-->
										<!--begin::Text-->
										<a href="#" class="fw-semibold fs-8 text-gray-600">Les photos soumises doivent
											avoir une résolution minimale de 240 dpi (points par pouce) et être au
											format JPEG pour garantir une qualité d’impression et de visualisation
											optimale. Les dimensions minimales sont fixées à 3000 pixels sur le côté le
											plus court.</a>
										<!--end::Text-->
									</div>
									<!--end::Row-->
								</div>
								<!--end::Section-->
							</div>
							<!--end::Item-->




							<!--begin::Item-->
							<div class="mb-8">
								<!--begin::Title-->
								<h5 class="text-gray-700 w-bolder mb-0">2 . Pas de Filigranes ou Signatures</h5>
								<!--end::Title-->
								<!--begin::Section-->
								<div class="my-2">
									<!--begin::Row-->
									<div class="d-flex align-items-center mb-3">
										<!--begin::Bullet-->
										<span class=" me-3"></span>
										<!--end::Bullet-->
										<!--begin::Text-->
										<p class="fw-semibold fs-8 text-gray-600">Afin de maintenir l’anonymat durant le
											processus d’évaluation, les photos ne doivent comporter aucun filigrane,
											signature, ou autre marque identifiant l’auteur.</p>
										<!--end::Text-->
									</div>
									<!--end::Row-->
								</div>
								<!--end::Section-->
							</div>
							<!--end::Item-->




							<!--begin::Item-->
							<div class="mb-8">
								<!--begin::Title-->
								<h5 class="text-gray-700 w-bolder mb-0">3 . Respect des Thèmes</h5>
								<!--end::Title-->
								<!--begin::Section-->
								<div class="my-2">
									<!--begin::Row-->
									<div class="d-flex align-items-center mb-3">
										<!--begin::Bullet-->
										<span class=" me-3"></span>
										<!--end::Bullet-->
										<!--begin::Text-->
										<p class="fw-semibold fs-8 text-gray-600">Les photographies doivent être des
											œuvres originales et non plagiées. Les participants doivent posséder tous
											les droits sur les images soumises.</p>
										<!--end::Text-->
									</div>
									<!--end::Row-->
								</div>
								<!--end::Section-->
							</div>
							<!--end::Item-->




							<!--begin::Item-->
							<div class="mb-8">
								<!--begin::Title-->
								<h5 class="text-gray-700 w-bolder mb-0">4 . Respect des Thèmes</h5>
								<!--end::Title-->
								<!--begin::Section-->
								<div class="my-2">
									<!--begin::Row-->
									<div class="d-flex align-items-center mb-3">
										<!--begin::Bullet-->
										<span class=" me-3"></span>
										<!--end::Bullet-->
										<!--begin::Text-->
										<p class="fw-semibold fs-8 text-gray-600">Chaque photo soumise doit clairement
											refléter le thème général du concours « Maroc, phare d’Afrique » et aussi se
											placer dans la bonne catégorie. Les œuvres qui ne correspondent pas au thème
											ou qui sont jugées hors sujet par le jury seront disqualifiées.</p>
										<!--end::Text-->
									</div>
									<!--end::Row-->
								</div>
								<!--end::Section-->
							</div>
							<!--end::Item-->


							<!--begin::Item-->
							<div class="mb-8">
								<!--begin::Title-->
								<h5 class="text-gray-700 w-bolder mb-0">5 . Nombre de Soumissions</h5>
								<!--end::Title-->
								<!--begin::Section-->
								<div class="my-2">
									<!--begin::Row-->
									<div class="d-flex align-items-center mb-3">
										<!--begin::Bullet-->
										<span class=" me-3"></span>
										<!--end::Bullet-->
										<!--begin::Text-->
										<p class="fw-semibold fs-8 text-gray-600">Les participants peuvent soumettre un
											nombre maximal de 10 photos, spécifié par le règlement du concours, pour
											s’assurer que chaque œuvre reçoit l’attention méritée du jury. Chaque photo
											soumise doit être afféctée a sa catégorie et accompagnée d’un titre et, si
											nécessaire, d’une courte description expliquant sa relation avec le thème du
											concours.</p>
										<!--end::Text-->
									</div>
									<!--end::Row-->
								</div>
								<!--end::Section-->
							</div>
							<!--end::Item-->

							<!--begin::Item-->
							<div class="mb-8">

								<!--begin::Section-->
								<div class="my-2">
									<!--begin::Row-->
									<div class="d-flex align-items-center mb-3">
										<!--begin::Bullet-->
										<span class=" me-3"></span>
										<!--end::Bullet-->
										<!--begin::Text-->
										<a href="https://grandprixphoto.ma/reglement-du-concours/" target="_blank"
											class="fw-semibold fs-8 text-primary-600">Consultez tous les règlements</a>
										<!--end::Text-->
									</div>
									<!--end::Row-->
								</div>
								<!--end::Section-->
							</div>
							<!--end::Item-->



						</div>
						<!--end::Body-->
					</div>
					<!--end::Careers about-->
				</div>
				<!--end::Aside column-->
				<!--begin::Main column-->
				<div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
					<!--begin::Tab content-->
					<div class="tab-content">
						<!--begin::Tab pane-->
						<div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
							<div class="d-flex flex-column gap-7 gap-lg-10">
								<!--begin::General options-->
								<div class="card card-flush py-10">
									<!--begin::Card body-->
									<div class="card-body pt-0">
										<!--begin::Input group-->
										<div class="mb-10 row">
											<div class="mb-10 col-sm-12 col-lg-6">
												<!--begin::Label-->
												<label class="required form-label">Image / الصورة</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input class="form-control form-control-lg" name="image" id="formFileLg"
													type="file" />
												<!--end::Input-->
												<!--begin::Description-->
												<div class="text-muted pt-1 fs-7">Types de fichiers autorisés : png,
													jpg, jpeg.</div>
												<div id="result"></div>

												<!--end::Description-->
											</div>
											<div class="col-sm-12 col-lg-6">
												<!--begin::Label-->
												<label class="required form-label">Catégories / الفئات</label>
												<!--end::Label-->
												<!--begin::Select2-->
												<select name="categorie" id="kt_ecommerce_add_product_status_select"
													class="form-select  mb-2" data-control="select2"
													data-hide-search="true"
													data-placeholder="Sélectionner une catégorie">
													<option value="{{ old('categorie') }}" selected="selected" hidden>
														Catégories</option>
													@foreach($categories as $categorie)
														<option value="{{ $categorie->id }}" {{ old('categorie') == $categorie->id ? 'selected' : '' }}>
															{{ $categorie->name }}</option>
													@endforeach
												</select>
												<!--end::Select2-->
												<!--begin::Description-->
												<div class="text-muted fs-7" id="categorieobli">La catégorie de l'image
													est obligatoire</div>
												<!--end::Description-->
											</div>

										</div>
										<!--end::Input group-->

										<!--begin::Input group-->
										<div class="mb-10 fv-row">
											<!--begin::Label-->
											<label class="required form-label">Titre d'image / عنوان الصورة</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input type="text" value="{{ old('title') }}" name="title"
												class="form-control mb-2" placeholder="Titre" value="" />
											<!--end::Input-->
											<!--begin::Description-->
											<div class="text-muted fs-7">Le titre de l'image est obligatoire</div>
											<!--end::Description-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div>
											<!--begin::Label-->
											<label class="required form-label">Description / وصف</label>
											<!--end::Label-->
											<!--begin::Editor-->
											<textarea id="myInput" class="form-control form-control-solid" rows="11"
												placeholder="Description"
												name="description">{{ old('description') }}</textarea>
											<!--end::Editor-->
											<!--begin::Description-->
											<div class="row mt-5">
												<div class="text-muted fs-7  col-sm-12 col-lg-11">Attribuez une
													description a l'image pour une meilleure visibilité.</div>
												<!--end::Description-->
												<p id="charCount" class="text-muted fs-7 col-sm-12 col-lg-1 ">0/1000</p>
											</div>
										</div>
										<!--end::Input group-->
									</div>
									<!--end::Card header-->
								</div>
								<!--end::General options-->

							</div>
						</div>
						<!--end::Tab pane-->
					</div>
					<!--end::Tab content-->
					<div class="d-flex justify-content-end">
						<!--begin::Button-->
						<a href="/backoffice/participations" id="kt_ecommerce_add_product_cancel"
							class="btn btn-light me-5">Annuler</a>
						<!--end::Button-->
						<!--begin::Button-->
						<button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
							<span class="indicator-label">Participer</span>
						</button>
						<!--end::Button-->
					</div>
				</div>
				<!--end::Main column-->
			</form>
			<!--end::Form-->
		</div>
		<!--end::Content-->
	</div>
	<!--end::Main-->
	<!--begin::Footer-->
	<div class="footer py-4 d-flex flex-column flex-md-row align-items-center justify-content-between" id="kt_footer">
		<!--begin::Copyright-->
		<div class="order-2 order-md-1">
			<span class="text-white opacity-75 fw-semibold me-1">2024&copy;</span>
			<a href="https://www.3wdev.ma/" target="_blank" class="text-white text-hover-primary opacity-75">Powered by
				3wDev.ma</a>
		</div>
		<!--end::Copyright-->
		<!--begin::Menu-->
		<ul class="menu menu-white menu-hover-primary fw-semibold order-1 opacity-75">
			<li class="menu-item">
				<a href="https://grandprixphoto.ma/reglement-du-concours/" target="_blank"
					class="menu-link px-2">Règlement du concours.</a>
			</li>
		</ul>
		<!--end::Menu-->
	</div>
	<!--end::Footer-->
</div>
<!--end::Wrapper-->


<script>
	$(document).ready(function () {

		// Sélection de l'élément input
		const input = document.getElementById('myInput');

		// Sélection de l'élément où afficher le nombre de caractères
		const charCount = document.getElementById('charCount');

		// Ajout d'un écouteur d'événement sur l'input
		input.addEventListener('input', function () {
			// Récupération de la longueur de la valeur de l'input
			const length = this.value.length;

			// Affichage du nombre de caractères
			charCount.textContent = length + '/1000';
		});

		$('#kt_ecommerce_add_product_form').on('submit', function (e) {
			let isValid = true;
			const selectElement = $('#kt_ecommerce_add_product_status_select');
			const resultDiv = document.getElementById('result');
			resultDiv.innerHTML = '';

			let errorMessage = '<div class="alert alert-danger mb-5">';

			if ($('#formFileLg').val() === '') {
				isValid = false;
				errorMessage += `<li class="error mx-5" >L'image est obligatoire</li>`;
				$('#formFileLg').addClass('input-error');
			}

			if (selectElement.val() === null || selectElement.val() === "") {
				isValid = false;
				errorMessage += `<li class="error mx-5">La catégorie de l'image est obligatoire</li>`;
				selectElement.next('.select2-container').find('.select2-selection').css('border', ' 1px solid red');
			}

			if ($('input[name="title"]').val().trim() === '') {
				isValid = false;
				errorMessage += `<li class="error mx-5" >Le titre de l'image est obligatoire</li>`;
				$('input[name="title"]').addClass('input-error');
			}

			if ($('#myInput').val().trim() === '') {
				isValid = false;
				errorMessage += `<li class="error mx-5">La description de l'image est obligatoire</li>`;
				$('#myInput').addClass('input-error');
			}

			if (errorMessage === '<div class="alert alert-danger mb-5">') {
				const successMessage = '<div class="alert alert-success">Form submitted successfully!</div>';
				resultDiv.innerHTML = successMessage;
			} else {
				errorMessage += '</div>';
				resultDiv.innerHTML = errorMessage;
			}

			if (!isValid) {
				e.preventDefault();
				$('html, body').animate({
					scrollTop: $(".input-error:first").offset().top
				}, 200);
			}
		});

		// Reset border for the image input
		$('#formFileLg').on('change', function () {
			$(this).removeClass('input-error');
		});

		// Reset border for the title input
		$('input[name="title"]').on('input', function () {
			$(this).removeClass('input-error');
		});

		// Reset border for the description textarea
		$('#myInput').on('input', function () {
			$(this).removeClass('input-error');
		});

		// Keep the existing Select2 reset function
		$('#kt_ecommerce_add_product_status_select').on('change', function () {
			$(this).next('.select2-container').find('.select2-selection').css('border', '');
		});


	});


	document.getElementById('formFileLg').addEventListener('change', function (event) {
		const file = event.target.files[0];
		const resultDiv = document.getElementById('result');
		resultDiv.innerHTML = ''; // Clear previous result
		var fileInput = document.getElementById('formFileLg');

		const successMessage = '<div class="alert alert-success mb-5"><li class="mx-5">Votre photo respecte les conditions du concours.</li> <li class="text-end mx-5" dir="rtl">صورتك تحترم جميع شروط المسابقة.</li></div>';

		let errorMessage = '<div class="alert alert-danger mb-5">';

		// Vérification de la taille du fichier
		if (file.size < 10 * 1024 * 1024) { // Check if file size is less than 3MB
			errorMessage += `<li class="error mx-5">Le fichier doit être supérieur à 10MB. Taille actuelle : ${(file.size / 1024 / 1024).toFixed(2)}MB</li>`;
		}

		const reader = new FileReader();

		reader.onload = function (e) {
			const img = new Image();
			img.src = e.target.result;

			img.onload = function () {
				const width = img.width;
				const height = img.height;
				const shortestSide = Math.min(width, height);

				// Vérification de la taille de l'image
				if (shortestSide < 3000) {
					errorMessage += `<li class="error mx-5">Le bord le plus court doit être supérieur à 3000px. Taille actuelle : ${shortestSide}px</li>`;
					fileInput.value = '';

				}

				// Utilisation de EXIF.js pour obtenir les métadonnées EXIF
				EXIF.getData(img, function () {
					const dpiX = EXIF.getTag(this, "XResolution") || 72;
					const dpiY = EXIF.getTag(this, "YResolution") || 72;

					// Vérification de la résolution de l'image
					if (dpiX < 240 || dpiY < 240) {
						errorMessage += `<li class="error mx-5">La résolution doit être de 240dpi ou plus. Résolution actuelle : ${dpiX}dpi</li>`;
						fileInput.value = '';

					}

					if (errorMessage === '<div class="alert alert-danger mb-5">') {
						resultDiv.innerHTML = successMessage;
					} else {
						errorMessage += '</div>'; // Close the error message div
						resultDiv.innerHTML = errorMessage;
					}
				});
			}
		}

		reader.readAsDataURL(file);
	});



</script>
<style>
	.input-error {
		border: 1px solid red !important;
	}

	/* .select2-container--default.select2-container--error .select2-selection--single {
		border: 1px solid red !important;
	} */
</style>



@endsection