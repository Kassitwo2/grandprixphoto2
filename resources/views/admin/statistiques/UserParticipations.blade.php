@extends('layouts.Dashboard-admin.guest')
@section('content')
<div>
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">

            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-xxl">
    
                    <!--begin::Toolbar-->
                    <div class="d-flex flex-wrap flex-stack mb-6">
                        <!--begin::Title-->
                        <h3 class="fw-bold my-2">Profil
                        <!--end::Title-->
                    </div>
                    <!--end::Toolbar-->
                    <!--begin::Navbar-->
                    <div class="card mb-5 mb-xl-10">
                        <div class="card-body pt-9 pb-0">
                            <!--begin::Details-->
                            <div class="d-flex flex-wrap flex-sm-nowrap">
                                <!--begin: Pic-->
                                <div class="me-7 mb-4">
                                    <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                        <img src="{{ $user->photo }}" alt="image" />
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
                                                <a class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">{{ $user->name }}</a>
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
                                                </i>{{ $user->profile }}</a>
                                                <a class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                                <i class="ki-duotone ki-geolocation fs-4 me-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>{{ $user->ville->name }}</a>
                                                <a class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
                                                <i class="ki-duotone ki-sms fs-4">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>{{ $user->email }}</a>
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
                                                        <div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="{{$user->participations->count()}}" data-kt-countup-prefix="">0</div>
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
                    <!--begin::Toolbar-->
                    <div class="d-flex flex-wrap flex-stack mb-6">
                        <!--begin::Title-->
                        <h3 class="fw-bold my-2">Statistiques
                        <!--end::Title-->
                    </div>
                    <!--end::Toolbar-->
    


    
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
                                        <a class="fs-4 fw-semibold text-hover-primary text-gray-600 m-0">Catégories</a>
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
    
                                                <th class="ps-18 min-w-125px rounded-start">Faras</th>
                                                <th class="min-w-125px">Trésors du maroc</th>
                                                <th class="min-w-125px rounded-end">Vitalité</th>
                                            </tr>
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a class="ps-20 text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$participationsCountByFaras}}</a>
                                                </td>
                                                <td>
                                                    <a class="ps-15 text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$participationsCountByTresorsDuMaroc}}</a>
                                                </td>
                                                <td>
                                                    <a class="ps-5 text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$participationsCountByVitalite}}</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                <!--end::Heading-->
                                    </div>
                                <!--end::Card body-->
                                </div>
                            <!--end::Card-->
                            </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
    
    

    
                    <!--begin::Col-->
                    <div class="col-12 mb-5 mb-xl-10">
                        <!--begin::Tables widget 16-->
                        <div class="card card-flush h-xl-100">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <a class="fs-4 fw-semibold text-hover-primary text-gray-600 m-0">Participations</a>
                                </h3>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-6">
    
                                <!--begin::Tab Content-->
                                <div class="tab-content">
                                        <!--begin::Table container-->
                                        <div class="table-responsive mb-5">
                                            <!--begin::Table-->
                                            <table class="participation standby table align-middle gs-0 gy-4  table-row-bordered table-row-solid">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <tr class="fw-bold text-muted bg-light">
                                                        <th class="ps-4 min-w-50px rounded-start">Image</th>
    
                                                        <th class="min-w-150px">Catégorie</th>
                                                        <th class="min-w-125px">Titre</th>
                                                        <th class="min-w-400px">Description</th>
                                                    {{--<th class="min-w-100px">Status</th>--}}   
                                                        <th class="min-w-150px">Date de participation</th>
                                                    </tr>
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody class="partici">
                                                    @foreach ($participations as $participation)


                                                            <tr class="min-w-50px rounded-start">
                                                                                                                
                                                                <td>
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="symbol symbol-50px me-5">               
                                                                                <a href="#" class="symbol symbol-50px m-3 image-modal-link" data-image-detail="{{ $participation->image }}" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">
                                                                                <span class="symbol-label bg-light">
                                                                                    <img src="storage/Thumbnails/{{ $participation->image }}" style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0;" alt="">
                                                                                </span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </td>                                        
                                                                </td>

                                                                <td>
                                                                    <a  class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$participation->categorie->name}}</a>
                                                                </td>
                                                                <td>
                                                                    <a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$participation->title}}</a>
                                                                </td>
                                                                <td>
                                                                    <a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$participation->description}}</a>
                                                                </td>
    
                                                                <td>
                                                                    <a  class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{date('d-m-Y', strtotime($participation->created_at));}}</a>
                                                                </td>
    
    
                                                            </tr>
                                                        
    
                                                    @endforeach
    
                                                </tbody>
                                                <!--end::Table body-->
                                            </table>
                                            <!--end::Table-->
                                        </div>

                                        <!--end::Table container-->
    
                                    <!--end::Table container-->
                                </div>
                                <!--end::Tab Content-->
                            </div>
                            <!--end: Card Body-->
                        </div>
                        <!--end::Tables widget 16-->
                    </div>
                    <!--end::Col-->
                </div>
            </div>
    
        </div>
    
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
                                    // Handle error response
                                    console.error(xhr.responseText);
                                    alert('Failed to update');
                                }
                            });
                    });
    
    
                });
                    
            </script>
    
</div>
@endsection