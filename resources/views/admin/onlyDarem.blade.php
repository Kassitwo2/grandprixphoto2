@extends('layouts.Dashboard-admin.guest')

@section('content')
<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}

    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">

        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-xxl">

                <!--begin::Row-->
                <div class="row g-6 mt-3 g-xl-9">
                    <!--begin::Col-->
                    <div class="col-sm-12 col-xl-12">
                        <!--begin::Card-->
                        <div class="card h-100">
                            <!--begin::Card header-->
                            <div class="card-header flex-nowrap border-0 pt-9">
                                <!--begin::Card title-->
                                <div class="card-title m-0">
                                    <!--begin::Title-->
                                    <a class="fs-4 fw-semibold text-hover-primary text-gray-600 m-0">users in Essaouira</a>
                                    <!--end::Title-->
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body col-sm-12 d-flex flex-column px-9 pt-6 pb-8">
                                <div class="table-responsive">

                                    <!--begin::Heading-->
                                    <table class="table align-middle gs-0 gy-4">
                                        <!--begin::Table head-->
                                        <thead>
                                            <tr class="fw-bold text-muted bg-light">
                                                <th class="ps-18 min-w-100px rounded-start">image</th>
                                                <th class="min-w-100px">name</th>
                                                <th class="min-w-100px">Profile</th>
                                                <th class="min-w-100px">telephone</th>
                                                <th class="min-w-100px">Email</th>
                                                <th class="min-w-100px">ville</th>
                                                <th class="min-w-100px rounded-end">Actions</th>
                                            </tr>
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody>
                                            @foreach ( $users as $user )
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-50px me-5">
                                                            <a href="#" class="symbol symbol-50px m-3 image-modal-link" data-image-detail="{{ $user->photo }}" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">
                                                                <span class="symbol-label bg-light">
                                                                    <img src="{{ $user->photo }}" style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0;" alt="">
                                                                </span> 
                                                            </a>                                                                         
                                                        </div>
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <a class="ps-20 text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$user->name}}</a>
                                                </td>
                                                <td>
                                                    <a class="ps-15 text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$user->profile}}</a>
                                                </td>
                                                <td>
                                                    <a class="ps-15 text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$user->phone}}</a>
                                                </td>
                                                <td>
                                                    <a class="ps-15 text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$user->email}}</a>
                                                </td>
                                                <td>
                                                    <a class="ps-5 text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$user->ville->name}}</a>
                                                </td>

                                                <td>
                                                    <button type="button" class="btn btn-info btn-lg get-participations" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users" data-id="{{$user->id}}">Open Modal</button>
                                                </td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Heading-->
                                </div>
                            </div>
                            <!--end::Card-->
                        </div>
                    <!--end::Col-->
                    </div>
                </div>
                <!--end::Row-->

                <!--begin::Modal - View Users-->
                <div class="modal fade" id="kt_modal_view_users" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog mw-950px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Modal header-->
                            <div class="modal-header pb-0 border-0 justify-content-end">
                                <!--begin::Close-->
                                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                    <i class="ki-duotone ki-cross fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                                <!--end::Close-->
                            </div>
                            <!--begin::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                                <!--begin::Heading-->
                                <div class="text-center mb-13">
                                    <!--begin::Title-->
                                    <h1 class="mb-3">Browse Users</h1>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="text-muted fw-semibold fs-5">If you need more info, please check out our
                                    <a href="#" class="link-primary fw-bold">Users Directory</a>.</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Users-->
                                <div class="mb-15">
                                    <!--begin::List-->
                                    <div class="mh-375px scroll-y me-n7 pe-7" >
                                        <!--begin::User-->
											<!--begin::Table-->
                                            
											<table class="table align-middle table-row-dashed fs-6 gy-5" id="participations" >
												<thead>
													<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">

														<th class="min-w-125px">Image</th>
														<th class="min-w-125px">Categorie</th>
														<th class="min-w-125px">Titre</th>
														<th class="text-end min-w-70px">Actions</th>
													</tr>
												</thead>
											</table>
											<!--end::Table-->
                                        <!--end::User-->
                                    </div>
                                    <!--end::List-->
                                </div>
                                <!--end::Users-->



                            </div>
                            <!--end::Modal body-->
                        </div>
                        <!--end::Modal content-->
                    </div>
                    <!--end::Modal dialog-->
                </div>
                <!--end::Modal - View Users-->




                <!--begin::Modal - Upgrade plan-->
                <div class="modal fade" id="kt_modal_upgrade_plan" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-xl">
                        <!--begin::Modal content-->
                        <div class="modal-content rounded">
                            <!--begin::Modal header-->
                            <div class="modal-header justify-content-end border-0 pb-0">
                                <!--begin::Close-->
                                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                    <i class="ki-duotone ki-cross fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                                <!--end::Close-->
                            </div>
                            <!--end::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body pt-0 pb-15 px-5 px-xl-20">
                                <!--begin::Plans-->
                                <div class="d-flex flex-column">
                                    <!--begin::Row-->
                                    <div class="row mt-10">
                                        <div class="col-12">
                                            <img  id="image-detail" class="img-fluid"  alt="">
                                        </div>
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Plans-->
                            </div>
                            <!--end::Modal body-->
                        </div>
                        <!--end::Modal content-->
                    </div>
                    <!--end::Modal dialog-->
                </div>
                <!--end::Modal - Upgrade plan-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
</div>
     
<script>
    $(document).ready(function() {

        
                //show images with full size
                $(document).on('click', '.image-modal-link', function() {
                    var imageUrl = $(this).data('image-detail');
                    $('#image-detail').attr('src', 'storage/' + imageUrl); // Assuming 'storage' is your base path
                });

        
                //Aprouvee les participation
                $(document).on('submit', '#AprouveeForm', function(e) {
                    e.preventDefault();

                    // Serialize form data
                    var formData = $(this).serialize();

                    // Send AJAX request
                    $.ajax({
                        type: "POST",
                        url: "{{ route('participation.confirmation') }}",
                        data: formData,
                        success: function(response) {
                            // Handle success response
                            console.log(response);

                            
                            
                            // Update the content without reloading the page
                            $('.refuse').load(location.href + ' .refuse');
                            $('.standby').load(location.href + ' .standby');
                            $('.approuve').load(location.href + ' .approuve');


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
                                title: "Participation  approuvée."
                            });

                        },
                        error: function(xhr, status, error) {
                            // Handle error response
                            console.error(xhr.responseText);
                            alert('Failed to update');
                        }
                    });
                });


                //Rejetee les participation
                $(document).on('submit', '#RejeteeForm', function(e) {
                    
                        e.preventDefault();

                        // Serialize form data
                        var formData = $(this).serialize();

                        // Send AJAX request
                        $.ajax({
                            type: "POST",
                            url: "{{ route('participation.confirmation') }}",
                            data: formData,
                            success: function(response) {
                                // Handle success response
                                console.log(response);

                                $('.refuse').load(location.href + ' .refuse');
                                $('.standby').load(location.href + ' .standby');
                                $('.approuve').load(location.href + ' .approuve');

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
                                    title: "Participation rejetée."
                                });

                            },
                            error: function(xhr, status, error) {
                                // Handle error 0
                                console.error(xhr.responseText);
                                alert('Failed to update');
                            }
                        });
                });


                $('.get-participations').click(function() {
                        var userId = $(this).data('id');
                        $.ajax({
                            url: '/users/' + userId + '/participations',
                            type: 'GET',
                            success: function(data) {
                                var participationsDiv = $('#participations');
                                participationsDiv.empty(); // Clear any existing content

                                if (data.length === 0) {
                                    participationsDiv.append('<p>No participations found.</p>');
                                } else {
                                    var list = $('<tbody class="fw-semibold text-gray-600" ></tbody>');
                                    $.each(data, function(index, participation) {
                                        list.append('<tr><td><!--begin::Avatar--><a class="symbol symbol-50px m-3 image-modal-link" data-image-detail='+ participation.image +' data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan"><span class="symbol-label hoverZoomLink" style="background-image:url(\'storage/Thumbnails/' + participation.image + '\');"></span></a><!--end::Avatar--></td><td><span class="text-gray-600 text-hover-primary mb-1">'+participation.categorie.name+'</span></td><td>'+participation.title+'</td><td><div class="row"><div class="col-3"><form id="AprouveeForm" action="{{ route('participation.confirmation') }}" method="POST">@csrf<input hidden type="text" name="id" value="'+ participation.id +'"><input hidden type="text" name="is_conforme" value="1"><button title="Approuver" class="btn btn-bg-success btn-color-muted btn-active-color-primary btn-sm px-4 me-2" type="submit"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z"/></svg></button></form> </div><div class="col-3"><form id="RejeteeForm" action="{{ route('participation.confirmation', 'participation.id') }}" method="POST"> @csrf<input hidden type="text" name="id" value="'+ participation.id +'"><input hidden type="text" name="is_categorie" value="1"><input hidden type="text" name="is_conforme" value="-1"><button title="Refuser la catégorie" style="background-color:#ff9500" class="btn btn-bg-danger btn-color-muted btn-active-color-primary btn-sm px-4 me-2" type="submit"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-384c13.3 0 24 10.7 24 24V264c0 13.3-10.7 24-24 24s-24-10.7-24-24V152c0-13.3 10.7-24 24-24zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z"/></svg> </button></form></div><div class="col-3"><form id="RejeteeForm" action="{{ route('participation.confirmation', 'participation.id') }}" method="POST">@csrf<input hidden type="text" name="id" value="'+ participation.id +'"><input hidden type="text" name="is_categorie" value="-1"><input hidden type="text" name="is_conforme" value="-1"><button title="Refuser le sujet"  class="btn btn-bg-danger btn-color-muted btn-active-color-primary btn-sm px-4 me-2" type="submit"><svg xmlns="http://www.w3.org/2000/svg" height="20" width="25" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L512.9 376.7C552.2 340.2 576 292.3 576 240C576 125.1 461.4 32 320 32c-67.7 0-129.3 21.4-175.1 56.3L38.8 5.1zm385.2 425L82.9 161.3C70.7 185.6 64 212.2 64 240c0 45.1 17.7 86.8 47.7 120.9c-1.9 24.5-11.4 46.3-21.4 62.9c-5.5 9.2-11.1 16.6-15.2 21.6c-2.1 2.5-3.7 4.4-4.9 5.7c-.6 .6-1 1.1-1.3 1.4l-.3 .3 0 0 0 0 0 0 0 0c-4.6 4.6-5.9 11.4-3.4 17.4c2.5 6 8.3 9.9 14.8 9.9c28.7 0 57.6-8.9 81.6-19.3c22.9-10 42.4-21.9 54.3-30.6c31.8 11.5 67 17.9 104.1 17.9c37 0 72.3-6.4 104.1-17.9z"/></svg></button></form></div><div class="col-3"><form id="RejeteeForm" action="{{ route('participation.confirmation', 'participation.id') }}" method="POST">@csrf<input hidden type="text" name="id" value="'+ participation.id +'"><input hidden type="text" name="is_categorie" value="2"><input hidden type="text" name="is_conforme" value="-1"><button title="Refuser largeur et hauteur"  class="btn btn-bg-danger btn-color-muted btn-active-color-primary btn-sm px-4 me-2" type="submit"><svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M200 32H56C42.7 32 32 42.7 32 56V200c0 9.7 5.8 18.5 14.8 22.2s19.3 1.7 26.2-5.2l40-40 79 79-79 79L73 295c-6.9-6.9-17.2-8.9-26.2-5.2S32 302.3 32 312V456c0 13.3 10.7 24 24 24H200c9.7 0 18.5-5.8 22.2-14.8s1.7-19.3-5.2-26.2l-40-40 79-79 79 79-40 40c-6.9 6.9-8.9 17.2-5.2 26.2s12.5 14.8 22.2 14.8H456c13.3 0 24-10.7 24-24V312c0-9.7-5.8-18.5-14.8-22.2s-19.3-1.7-26.2 5.2l-40 40-79-79 79-79 40 40c6.9 6.9 17.2 8.9 26.2 5.2s14.8-12.5 14.8-22.2V56c0-13.3-10.7-24-24-24H312c-9.7 0-18.5 5.8-22.2 14.8s-1.7 19.3 5.2 26.2l40 40-79 79-79-79 40-40c6.9-6.9 8.9-17.2 5.2-26.2S209.7 32 200 32z"/></svg></button></form></div></div></td> </tr>');
                                    // <li>' + participation.title + '</li>');  Adjust as per your data structure
                                    });
                                    participationsDiv.append(list);
                                }
                            },
                            error: function(xhr, status, error) {
                                console.error(xhr.responseText);

                                console.log(error);
                                alert('Error retrieving participations.'+ error);
                            }
                        });
                });
        });
</script>

@endsection
