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
									<span class="text-gray-600 text-hover-primary">
										<i class="ki-duotone ki-home text-gray-700 fs-6"></i>
									</span>
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
								<li class="breadcrumb-item text-gray-500 mx-n1">Mes participations</li>
								<!--end::Item-->
							</ul>
							<!--end::Breadcrumb-->
							<!--begin::Title-->
							<h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bolder fs-3 m-0">Mes participations</h1>
							<!--end::Title-->
						</div>
						<!--end::Page title-->
						<!--begin::Wrapper-->
						<div class="d-flex flex-align-items flex-wrap gap-3 gap-xl-0">

							<!--begin::Actions-->
							<div class="d-flex align-items-center flex-shrink-0">
								<a href="/backoffice/participation-form" class="btn btn-sm btn-flex btn-primary ms-5">Participer</a>
							</div> 
							<!--end::Actions-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Toolbar-->
					<!--begin::Main-->
					<div class="d-flex flex-row flex-column-fluid align-items-stretch">
						<!--begin::Content-->


						<div class="content flex-row-fluid" id="kt_content">

						@if(session()->has('success'))
							<div class="alert alert-success mb-5">
								{{ session('success') }}
							</div>
						@endif
						@if(session()->has('error'))
							<div class="alert alert-danger mb-5">
								{{ session('error') }}
							</div>
						@endif
						@if(session('error'))
							<div class="alert alert-danger">
								{{ session('error') }}
							</div>
						@endif

							<!--begin::Participations-->
							<div class="card card-flush">
								<!--begin::Tables Widget 11-->
									<div class="card mb-5 mb-xl-8">
										<!--begin::Header-->
										<div class="card-header border-0 pt-5">
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bold fs-3 mb-1">Mes participations</span>
											</h3>
{{-- 											<div class="card-toolbar">
												<a href="/backoffice/participation-form" class="btn btn-sm btn-light-primary">
												<i class="ki-duotone ki-plus fs-2"></i>nouvelle participation</a>
											</div> --}}
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body py-3">
											<!--begin::Table container-->
											<div class="table-responsive">
												<!--begin::Table-->
												<table class="table align-middle gs-0 gy-4">
													<!--begin::Table head-->
													<thead>
														<tr class="fw-bold text-muted bg-light">
															<th class="ps-4 min-w-50px rounded-start">Image</th>
															<th class="min-w-125px">Titre</th>
															<th class="min-w-225px">Description</th>
															<th class="min-w-100px">Catégorie</th>
															<th class="min-w-100px">Statut</th>
															<th class="min-w-150px">Date de participation</th>
															<th class="min-w-150px rounded-end">Actions</th>
														</tr>
													</thead>
													<!--end::Table head-->
													<!--begin::Table body-->
													<tbody>
														@foreach ($participations as $participation )
														
														@if ($participation->is_conforme == 0)
														<tr>
															<td>
																<div class="d-flex align-items-center">
																	<!--begin::Thumbnail-->
																	<a class="symbol m-3 symbol-50px">
																		<span class="symbol-label" style="background-image:url('storage/Thumbnails/{{ $participation->image }}');"></span>
																	</a>
																	<!--end::Thumbnail-->
																</div>
															</td>
															<td>
																<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$participation->title}}</a>
															</td>
															<td>
																<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$participation->description}}</a>
															</td>
															<td>
																<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$participation->categorie->name}}</a>
															</td>

															<td>
																<a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">En cours</a>
															</td>

															<td>
																<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$participation->created_at->format('d/m/Y')}}</a>
															</td>
															

															<td class="text-start">		

 																<a href="{{ route('participations.edit', $participation->id) }}" data-bs-toggle="tooltip" data-bs-placement="top"  title="Modifier" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																	<i class="ki-duotone ki-pencil fs-2">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</a>

																<a id="delete-participation-btn"  class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm delete-participation-btn"  data-participation-id="{{ $participation->id }}">
                                                                    <i class="ki-duotone ki-trash fs-2">
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                        <span class="path3"></span>
                                                                        <span class="path4"></span>
                                                                        <span class="path5"></span>
                                                                    </i>
                                                                </a>


															</td>
														</tr>
														@elseif ($participation->is_conforme == 1)
														<tr class="bg-success">
															<td>
																<div class="d-flex align-items-center">
																	<!--begin::Thumbnail-->
																	<a class="symbol m-3 symbol-50px">
																		<span class="symbol-label" style="background-image:url('storage/Thumbnails/{{ $participation->image }}');"></span>
																	</a>
																	<!--end::Thumbnail-->
																</div>
															</td>
															<td>
																<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$participation->title}}</a>
															</td>
															<td>
																<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$participation->description}}</a>
															</td>
															<td>
																<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$participation->categorie->name}}</a>
															</td>

															<td>
																<a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">Approuvée</a>
															</td>
																	
															<td>
																<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$participation->created_at->format('d/m/Y')}}</a>
															</td>

															<td class="text-start">		

{{-- 																<a href="{{ route('participations.edit', $participation->id) }}" data-bs-toggle="tooltip" data-bs-placement="top"  title="Modifier" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																	<i class="ki-duotone ki-pencil fs-2">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</a>

																<a id="delete-participation-btn"  class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm delete-participation-btn"  data-participation-id="{{ $participation->id }}">
                                                                    <i class="ki-duotone ki-trash fs-2">
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                        <span class="path3"></span>
                                                                        <span class="path4"></span>
                                                                        <span class="path5"></span>
                                                                    </i>
                                                                </a>
 --}}

															</td>
														</tr>
														@else
														<tr class="bg-danger">
															<td>
																<div class="d-flex align-items-center">
																	<!--begin::Thumbnail-->
																	<a class="symbol m-3 symbol-50px">
																		<span class="symbol-label" style="background-image:url('storage/Thumbnails/{{ $participation->image }}');"></span>
																	</a>
																	<!--end::Thumbnail-->
																</div>
															</td>
															<td>
																<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$participation->title}}</a>
															</td>
															<td>
																<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$participation->description}}</a>
															</td>
															<td>
																<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$participation->categorie->name}}</a>
															</td>
															<td>
																<a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$participation->motif}}</a>
															</td>
															<td>
																<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$participation->created_at->format('d/m/Y')}}</a>
															</td>

															<td class="text-start">		

	 															<a href="{{ route('participations.edit', $participation->id) }}" data-bs-toggle="tooltip" data-bs-placement="top"  title="Modifier" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																	<i class="ki-duotone ki-pencil fs-2">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</a>

																<a id="delete-participation-btn"  class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm delete-participation-btn"  data-participation-id="{{ $participation->id }}">
                                                                    <i class="ki-duotone ki-trash fs-2">
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                        <span class="path3"></span>
                                                                        <span class="path4"></span>
                                                                        <span class="path5"></span>
                                                                    </i>
                                                                </a>


															</td>
														</tr>
														@endif


														@endforeach

													</tbody>
													<!--end::Table body-->

												</table>
												<!--end::Table-->
												@if($participations->isEmpty())

												<!--begin::Notice-->
													<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed  p-6">
														<!--begin::Icon-->
														<i class="ki-duotone ki-information fs-2tx text-primary me-4">
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
																		<div class="fs-6 text-gray-700">
																			Vous n'avez actuellement aucune participation. Vous pouvez participer en cliquant sur le lien
																			<a href="/backoffice/participation-form">ici</a> ou  le bouton 'Nouvelle Participation' ci-dessus.
																		</div>  
				 													{{--	<div class="fs-6 text-gray-700">
																			Cher utilisateur, nous tenons à vous informer que la participation débutera le <b> 1er mars 2025.</b>  
																			Nous avons hâte de vous voir rejoindre cet événement passionnant !
																		</div>
																		<br>
																		<div class="fs-6 text-gray-700 text-end">
																			<span>!</span>	عزيزي المستخدم، نود إعلامك بأن المشاركة ستبدأ
																			في
																			<b>1 مارس 2025</b>
																			نتطلع إلى رؤيتكم للانضمام إلى هذا الحدث المثير
																		</div>--}}
															<!--end::Content-->
															</div>
														<!--end::Wrapper-->
													</div>
												</div>
												<!--end::Notice-->		
												@endif
											</div>
											<!--end::Table container-->
										</div>
										<!--begin::Body-->
									</div>
									<!--end::Tables Widget 11-->



							</div>
							<!--end::Participations-->
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
					function confirmDelete(event) {
						event.preventDefault();
						if (confirm('Êtes-vous sûr de vouloir supprimer cette participation?')) {
							document.getElementById('deleteForm').submit();
						}
					}


					$(document).ready(function() {

					$(document).on('click', '.delete-participation-btn', function() {
						var participationId = $(this).data('participation-id');

						Swal.fire({
							text: "Êtes-vous sûr de vouloir supprimer cette participation?",
							icon: "warning",
							showCancelButton: true,
							confirmButtonColor: "#3085d6",
							cancelButtonColor: "#d33",
							cancelButtonText:"Annuler",
							confirmButtonText: "Oui, supprimer!"
						}).then((result) => {
							if (result.isConfirmed) {
								$.ajax({
									type: "GET",
									url: "{{ route('participations.destroy', ':participation_id') }}".replace(':participation_id', participationId),
									headers: {
										'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
									},
									success: function(response) {
										//console.log(response);
										$('.table').load(location.href + ' .table');
										// Perform any additional actions after successful deletion
										Swal.fire({
											title: "Supprimé!",
											text: "participation supprimée avec succès.",
											icon: "succès"
										});
									},
									error: function(xhr, status, error) {
										console.error(xhr.responseText);
										alert('Échec de la suppression du participation');
									}
								});
							}
						});
					});
				});
		</script>
@endsection