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
									<a href="../../demo19/dist/index.html" class="text-gray-600 text-hover-primary">
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
							<h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bolder fs-3 m-0">Modifier la participation</h1>
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
								<div class="alert alert-danger mb-5">
									@foreach ($errors->all() as $error)
										<li>{{ $error }}</li>
									@endforeach
								</div>
							@endif


							<span id="result">

							</span>
							<!--begin::Form-->
							<form id="kt_ecommerce_add_product_form" class="form d-flex flex-column flex-lg-row" method="POST" action="{{ route('participations.update', $participation->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
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
														<a href="#" class="fw-semibold fs-8 text-gray-600">Les photos soumises doivent avoir une résolution minimale de 240 dpi (points par pouce) et être au format JPEG pour garantir une qualité d’impression et de visualisation optimale. Les dimensions minimales sont fixées à 3000 pixels sur le côté le plus court.</a>
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
														<p class="fw-semibold fs-8 text-gray-600">Afin de maintenir l’anonymat durant le processus d’évaluation, les photos ne doivent comporter aucun filigrane, signature, ou autre marque identifiant l’auteur.</p>
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
														<p class="fw-semibold fs-8 text-gray-600">Les photographies doivent être des œuvres originales et non plagiées. Les participants doivent posséder tous les droits sur les images soumises.</p>
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
														<p class="fw-semibold fs-8 text-gray-600">Chaque photo soumise doit clairement refléter le thème général du concours « Maroc, phare d’Afrique » et aussi se placer dans la bonne catégorie. Les œuvres qui ne correspondent pas au thème ou qui sont jugées hors sujet par le jury seront disqualifiées.</p>
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
														<p class="fw-semibold fs-8 text-gray-600">Les participants peuvent soumettre un nombre maximal de 10 photos, spécifié par le règlement du concours, pour s’assurer que chaque œuvre reçoit l’attention méritée du jury. Chaque photo soumise doit être afféctée a sa catégorie et accompagnée d’un titre et, si nécessaire, d’une courte description expliquant sa relation avec le thème du concours.</p>
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
														<a href="https://grandprixphoto.ma/reglement-du-concours/" target="_blank" class="fw-semibold fs-8 text-primary-600">Consultez tous les règlements</a>
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
															<div class="mb-10 col-sm-12 col-lg-6 card-body text-center pt-0">
																<!--begin::Image input-->
																<div class="image-input image-input-outline {{ $participation->image ? '' : 'image-input-empty' }} image-input-placeholder mb-3" data-kt-image-input="true">
																	<!--begin::Preview existing image-->
																	<div class="image-input-wrapper w-150px h-150px" 
																		style="background-image: url('{{ $participation->image ? asset("storage/Thumbnails/$participation->image") : asset("default-image.jpg") }}')">
																	</div>
																	<!--end::Preview existing image-->
															
																	<label class="required form-label">Image / الصورة</label>
															
																	<!--begin::Label for Upload-->
																	<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" 
																		   data-kt-image-input-action="change" 
																		   data-bs-toggle="tooltip" 
																		   title="Changer l'image">
																		   <i class="ki-duotone ki-pencil fs-7">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>																		<!--begin::Inputs-->
																		<input type="file" name="image" id="formFileLg" accept=".png, .jpg, .jpeg" size="20000000"/>
																		<input type="hidden" name="avatar_remove" />
																		<!--end::Inputs-->
																	</label>
																	<!--end::Label for Upload-->
															
																	<!--begin::Cancel-->
																	<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" 
																		  data-kt-image-input-action="cancel" 
																		  data-bs-toggle="tooltip" 
																		  title="Cancel avatar">
																		<i class="ki-duotone ki-cross fs-2"></i>
																	</span>
																	<!--end::Cancel-->

																</div>
																<!--end::Image input-->
															
																<!--begin::Description-->
																<div class="text-muted fs-7">Types de fichiers autorisés : png, jpg, jpeg.</div>
																<!--end::Description-->
															</div>
															
															<div class="col-sm-12 col-lg-12">
																<!--begin::Label-->
																<label class="required form-label">Catégories / الفئات</label>
																<!--end::Label-->
																	<!--begin::Select2-->
																	<select class="form-select mb-2 form-control{{ $errors->has('categorie') ? ' is-invalid' : '' }}" name="categorie" data-control="select2" data-hide-search="true" data-placeholder="Sélectionner une categorie">
																		<option value="{{ $participation->category_id }}" selected="selected" hidden>{{ $participation->categorie->name }}</option>
																		@foreach($categories as $categorie)
																			<option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
																		@endforeach
																	</select>
																	<!--end::Select2-->
																<!--begin::Description-->
																<div class="text-muted fs-7">Le titre de l'image est obligatoire</div>
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
															<input type="text" name="title"  class="form-control mb-2 form-control{{ $errors->has('title') ? ' is-invalid' : '' }} " placeholder="Titre" value="{{$participation->title}}" />
															<!--end::Input-->
															<!--begin::Description-->
                                                            @error('title')
															    <div class="text-danger mt-3 fs-7">Titre d'image est requis.</div>
                                                            @enderror
															<!--end::Description-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div>
															<!--begin::Label-->
															<label class="form-label required">Description / وصف</label>
															<!--end::Label-->
															<!--begin::Editor-->
															<textarea class="form-control form-control-solid form-control{{ $errors->has('description') ? ' is-invalid' : '' }} " rows="11" placeholder="Description" name="description">{{$participation->description}}</textarea>
															<!--end::Editor-->
															<!--begin::Description-->
															<div class="text-muted fs-7">Attribuez une description a l'image pour une meilleure visibilité.</div>
															<!--end::Description-->
															<!--begin::Description-->
                                                            @error('description')
                                                                 <div class="text-danger mt-3 fs-7">Description d'image est requis.</div>
                                                             @enderror
															<!--end::Description-->
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
										<a href="/backoffice/participations"  id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Annuler</a>
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
	<script>


document.getElementById('formFileLg').addEventListener('change', function(event) {
    const file = event.target.files[0];
    const resultDiv = document.getElementById('result');
    resultDiv.innerHTML = ''; // Clear previous result
	var fileInput = document.getElementById('formFileLg');

    const successMessage = '<div class="alert alert-success mb-5"><li>votre photo respecte les conditions du concours.</li> <li class="text-end" dir="rtl">صورتك تحترم جميع شروط المسابقة.</li></div>';

    let errorMessage = '<div class="alert alert-danger mb-5">';

    // Vérification de la taille du fichier
    if (file.size < 10 * 1024 * 1024) { // Check if file size is less than 3MB
        errorMessage += `<li class="error">Le fichier doit être supérieur à 10MB. Taille actuelle : ${(file.size / 1024 / 1024).toFixed(2)}MB</li>`;
    }

    const reader = new FileReader();

    reader.onload = function(e) {
        const img = new Image();
        img.src = e.target.result;

        img.onload = function() {
            const width = img.width;
            const height = img.height;
            const shortestSide = Math.min(width, height);

            // Vérification de la taille de l'image
            if (shortestSide < 3000) {
                errorMessage += `<li class="error">Le bord le plus court doit être supérieur à 3000px. Taille actuelle : ${shortestSide}px</li>`;
				fileInput.value = '';

            }

            // Utilisation de EXIF.js pour obtenir les métadonnées EXIF
            EXIF.getData(img, function() {
                const dpiX = EXIF.getTag(this, "XResolution") || 72;
                const dpiY = EXIF.getTag(this, "YResolution") || 72;

                // Vérification de la résolution de l'image
                if (dpiX < 240 || dpiY < 240) {
                    errorMessage += `<li class="error">La résolution doit être de 240dpi ou plus. Résolution actuelle : ${dpiX}dpi</li>`;
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

@endsection