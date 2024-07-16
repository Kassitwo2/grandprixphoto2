

@extends('layouts.Dashboard-admin.guest')

@section('content')
<div>

							<!--begin::Toolbar-->
							<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
								<!--begin::Toolbar container-->
								<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
									<!--begin::Page title-->
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<!--begin::Title-->
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Les juries</h1>
										<!--end::Title-->
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">
												<a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Dashboard</a>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-400 w-5px h-2px"></span>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">Juries</li>
											<!--end::Item-->
										</ul>
										<!--end::Breadcrumb-->
									</div>
									<!--end::Page title-->
									<!--begin::Actions-->
									<div class="d-flex align-items-center gap-2 gap-lg-3">

										<!--begin::Secondary button-->
										<!--end::Secondary button-->
										<!--begin::Primary button-->
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_customer">Ajouter Jury</button>
										<!--end::Primary button-->
									</div>
									<!--end::Actions-->
								</div>
								<!--end::Toolbar container-->
							</div>
							<!--end::Toolbar-->



							<!--begin::Content-->
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-xxl">
									<!--begin::Card-->
									<div class="card">
										<!--begin::Card header-->
										<div class="card-header border-0 pt-6">
											<!--begin::Card title-->
											<div class="card-title">
												<!--begin::Search-->
												<div class="d-flex align-items-center position-relative my-1">
													<i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
													<input type="text" data-kt-customer-table-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Customers" />
												</div>
												<!--end::Search-->
											</div>
											<!--begin::Card title-->
											<!--begin::Card toolbar-->
											<div class="card-toolbar">
												<!--begin::Toolbar-->
												<div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">

                                                <a href="/user_export">
													<!--begin::Export-->
													<button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_customers_export_modal">
													<i class="ki-duotone ki-exit-up fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>Export</button>
													<!--end::Export-->
                                                </a>

												</div>
												<!--end::Toolbar-->
												<!--begin::Group actions-->
												<div class="d-flex justify-content-end align-items-center d-none" data-kt-customer-table-toolbar="selected">
													<div class="fw-bold me-5">
													<span class="me-2" data-kt-customer-table-select="selected_count"></span>Selected</div>
													<button type="button" class="btn btn-danger" data-kt-customer-table-select="delete_selected">Delete Selected</button>
												</div>
												<!--end::Group actions-->
											</div>
											<!--end::Card toolbar-->
										</div>
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body pt-0">
											<!--begin::Table-->
                                            
											<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
												<thead>
													<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">

														<th class="min-w-125px">Nom</th>
														<th class="min-w-125px">Email</th>
														<th class="min-w-125px">Created Date</th>
														<th class="text-end min-w-70px">Actions</th>
													</tr>
												</thead>
												<tbody class="fw-semibold text-gray-600">
                                                    @foreach($juries as $jury)
													<tr>

														<td>
															<span class="text-gray-800 text-hover-primary mb-1">{{$jury->name}}</span>
														</td>
														<td>
															<span class="text-gray-600 text-hover-primary mb-1">{{$jury->email}}</span>
														</td>
														<td>{{$jury->created_at}}</td>

                                                        <td class="text-end">
                                                            <div class="d-flex justify-content-end flex-shrink-0">
                                                                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 kt_modal_update_customer" 
                                                                data-bs-toggle="modal" 
                                                                data-bs-target="#kt_modal_update_customer"
                                                                data-id="{{$jury->id}}"
                                                                data-name="{{$jury->name}}"
                                                                data-email="{{$jury->email}}">
                                                                    <i class="ki-duotone ki-pencil fs-2">
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                    </i>
                                                                </a>
                                                                
                                                                <a id="delete-jury-btn"  class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm delete-jury-btn"  data-jury-id="{{ $jury->id }}">
                                                                    <i class="ki-duotone ki-trash fs-2">
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                        <span class="path3"></span>
                                                                        <span class="path4"></span>
                                                                        <span class="path5"></span>
                                                                    </i>
                                                                </a>
                                                            </div>
                                                        </td>
													</tr>
                                                    @endforeach

												</tbody>
											</table>
											<!--end::Table-->
                                            {!!$juries->links() !!}
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Card-->
									<!--begin::Modals-->
									<!--begin::Modal - Customers - Add-->
									<div class="modal fade" id="kt_modal_add_customer" tabindex="-1" aria-hidden="true">
										<!--begin::Modal dialog-->
										<div class="modal-dialog modal-dialog-centered mw-650px">
											<!--begin::Modal content-->
											<div class="modal-content">
												<!--begin::Form-->
												<form  class="form" action="{{ route('save-jury') }}" method="POST" id="kt_modal_add_customer_form">
													<!--begin::Modal header-->
                                                    @csrf
													<div class="modal-header" id="kt_modal_add_customer_header">
														<!--begin::Modal title-->
														<h2 class="fw-bold">Ajouter Jury</h2>
														<!--end::Modal title-->
														<!--begin::Close-->
														<div id="kt_modal_add_customer_close" class="btn btn-icon btn-sm btn-active-icon-primary">
															<i class="ki-duotone ki-cross fs-1">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</div>
														<!--end::Close-->
													</div>
													<!--end::Modal header-->
													<!--begin::Modal body-->
													<div class="modal-body py-10 px-lg-17">
														<!--begin::Scroll-->
														<div class="scroll-y me-n7 pe-7" id="kt_modal_add_customer_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_customer_header" data-kt-scroll-wrappers="#kt_modal_add_customer_scroll" data-kt-scroll-offset="300px">
															<!--begin::Input group-->
															<div class="fv-row mb-7">
																<!--begin::Label-->
																<label class="required fs-6 fw-semibold mb-2">Name</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" placeholder="" name="name" />
																<!--end::Input-->
															</div>
															<!--end::Input group-->
															<!--begin::Input group-->
															<div class="fv-row mb-7">
																<!--begin::Label-->
																<label class="fs-6 fw-semibold mb-2">
																	<span class="required">Email</span>
																	<span class="ms-1" data-bs-toggle="tooltip" title="Email address must be active">
																		<i class="ki-duotone ki-information fs-7">
																			<span class="path1"></span>
																			<span class="path2"></span>
																			<span class="path3"></span>
																		</i>
																	</span>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="email" class="form-control form-control-solid" placeholder="" name="email" />
																<!--end::Input-->
															</div>
															<!--end::Input group-->
															<!--begin::Input group-->
															<div class="fv-row mb-15">
																<!--begin::Label-->
																<label class="fs-6 fw-semibold mb-2">Mot de passe</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="password" class="form-control form-control-solid" autocomplete="off"  name="password" />
																<!--end::Input-->
															</div>
															<!--end::Input group-->
														</div>
														<!--end::Scroll-->
													</div>
													<!--end::Modal body-->
													<!--begin::Modal footer-->
													<div class="modal-footer flex-center">
														<!--begin::Button-->
														<button type="reset" id="kt_modal_add_customer_cancel" class="btn btn-light me-3">Discard</button>
														<!--end::Button-->
														<!--begin::Button-->
														<button type="submit" id="kt_modal_add_customer_submit" class="btn btn-primary">
															<span class="indicator-label">Submit</span>
														</button>
														<!--end::Button-->
													</div>
													<!--end::Modal footer-->
												</form>
												<!--end::Form-->
											</div>
										</div>
									</div>
									<!--end::Modal - Customers - Add-->

                                    <!--begin::Modal - Customers - Update-->
                                    <div class="modal fade" id="kt_modal_update_customer" tabindex="-1" aria-hidden="true">
                                        <!--begin::Modal dialog-->
                                        <div class="modal-dialog modal-dialog-centered mw-650px">
                                            <!--begin::Modal content-->
                                            <div class="modal-content">
                                                <!--begin::Form-->
                                                <form class="form" action="{{ route('update.jury') }}" method="POST" id="kt_modal_update_customer_form">
                                                    <!--begin::Modal header-->
                                                    @csrf
                                                    <input type="hidden" id="up_id" name="id">
                                                    <div class="modal-header" id="kt_modal_update_customer_header">
                                                        <!--begin::Modal title-->
                                                        <h2 class="fw-bold">Modifier Jury</h2>
                                                        <!--end::Modal title-->
                                                        <!--begin::Close-->
                                                        <div id="kt_modal_update_customer_close" class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                                                            <i class="ki ki-close fs-1"></i>
                                                        </div>
                                                        <!--end::Close-->
                                                    </div>
                                                    <!--end::Modal header-->
                                                    <!--begin::Modal body-->
                                                    <div class="modal-body py-10 px-lg-17">
                                                        <!--begin::Scroll-->
                                                        <div class="scroll-y me-n7 pe-7" id="kt_modal_update_customer_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_update_customer_header" data-kt-scroll-wrappers="#kt_modal_update_customer_scroll" data-kt-scroll-offset="300px">
                                                            <!--begin::Input group-->
                                                            <div class="fv-row mb-7">
                                                                <!--begin::Label-->
                                                                <label class="required fs-6 fw-semibold mb-2">Nom</label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <input type="text" id="up_name" class="form-control form-control-solid" name="name" />
                                                                <!--end::Input-->
                                                            </div>
                                                            <!--end::Input group-->
                                                            <!--begin::Input group-->
                                                            <div class="fv-row mb-7">
                                                                <!--begin::Label-->
                                                                <label class="fs-6 fw-semibold mb-2">
                                                                    <span class="required">Email</span>
                                                                    <span class="ms-1" data-bs-toggle="tooltip" title="Email address must be active">
                                                                        <i class="ki ki-bold-info text-primary fs-7"></i>
                                                                    </span>
                                                                </label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <input type="email" id="up_email" class="form-control form-control-solid" name="email" />
                                                                <!--end::Input-->
                                                            </div>
                                                            <!--end::Input group-->
                                                            <!--begin::Input group-->
                                                            <div class="fv-row mb-15">
                                                                <!--begin::Label-->
                                                                <label class="fs-6 fw-semibold mb-2">Mot de passe</label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <input type="password" id="up_password" class="form-control form-control-solid" autocomplete="off" name="password" />
                                                                <!--end::Input-->
                                                            </div>
                                                            <!--end::Input group-->
                                                        </div>
                                                        <!--end::Scroll-->
                                                    </div>
                                                    <!--end::Modal body-->
                                                    <!--begin::Modal footer-->
                                                    <div class="modal-footer flex-center">
                                                        <!--begin::Button-->
                                                        <button type="reset" id="kt_modal_update_customer_cancel" class="btn btn-light me-3" data-bs-dismiss="modal">Annuler</button>
                                                        <!--end::Button-->
                                                        <!--begin::Button-->
                                                        <button type="submit" id="kt_modal_update_customer_submit" class="btn btn-primary">
                                                            <span class="indicator-label">Soumettre</span>
                                                        </button>
                                                        <!--end::Button-->
                                                    </div>
                                                    <!--end::Modal footer-->
                                                </form>
                                                <!--end::Form-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Modal - Customers - Update-->
								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
</div>



<script>
    $(document).ready(function() {
    $('#kt_modal_add_customer_form').submit(function(e) {
        e.preventDefault();

        var form = $(this);
        var url = form.attr('action');
        var formData = form.serialize();

        $.ajax({
            type: "POST",
            url: url,
            data: formData,
            dataType: 'json',
            success: function(data) {
                if (data.success) {
                    form.trigger('reset');
                    $('#kt_modal_add_customer').modal('hide');
                    $('.table').load(location.href+' .table');

                    // Code to fetch and display the updated list of customers if required



                    const Toast = Swal.mixin({
                    toast: true,
                    position: "top-end",
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.onmouseenter = Swal.stopTimer;
                        toast.onmouseleave = Swal.resumeTimer;
                    }
                    });
                    Toast.fire({
                    icon: "success",
                    title: "Signed in successfully"
                    });

                } else {
                    alert('Failed to add jury');
                }
            },
            error: function(xhr, status, error) {
                alert('An error occurred while processing your request');
            }
        });

    });


    $(document).on('click','.kt_modal_update_customer',function() {
    
    
        let id = $(this).data('id');
        let name = $(this).data('name');
        let email = $(this).data('email');
        let password = $(this).data('password');


        $('#up_id').val(id);
        $('#up_name').val(name);
        $('#up_email').val(email);
        // /$('#up_password').val(password);


    });


    $('#kt_modal_update_customer_form').on('submit', function(e) {
            e.preventDefault();

            // Serialize form data
            var formData = $(this).serialize();

            // Send AJAX request
            $.ajax({
                type: "POST",
                url: "{{ route('update.jury') }}",
                data: formData,
                success: function(response) {
                    // Handle success response
                    console.log(response);
                    $('.table').load(location.href+' .table');
                    $('#kt_modal_update_customer').modal('hide');





                    const Toast = Swal.mixin({
                    toast: true,
                    position: "top-end",
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.onmouseenter = Swal.stopTimer;
                        toast.onmouseleave = Swal.resumeTimer;
                    }
                    });
                    Toast.fire({
                    icon: "success",
                    title: "Signed in successfully"
                    });

                },
                error: function(xhr, status, error) {
                    // Handle error response
                    console.error(xhr.responseText);
                    alert('Failed to update jury');
                }
            });
    });




  



    $(document).on('click', '.delete-jury-btn', function() {
            var juryId = $(this).data('jury-id');

            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "DELETE",
                        url: "{{ route('juries.ajaxDestroy', ':jury_id') }}".replace(':jury_id', juryId),
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            console.log(response);
                            $('.table').load(location.href + ' .table');
                            // Perform any additional actions after successful deletion
                            Swal.fire({
                                title: "Deleted!",
                                text: "Your file has been deleted.",
                                icon: "success"
                            });
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                            alert('Échec de la suppression du jury');
                        }
                    });
                }
            });
        });
   
});
</script>
@endsection
