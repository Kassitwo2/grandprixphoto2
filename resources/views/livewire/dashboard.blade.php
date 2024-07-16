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

                <!--begin::Toolbar-->
                <div class="d-flex flex-wrap flex-stack mb-6">
                    <!--begin::Title-->
                    <h3 class="fw-bold my-2">Statistiques
                    <!--end::Title-->
                </div>
                <!--end::Toolbar-->
                <!--begin::Row-->
                <div class="row g-6 g-xl-9">
                    <!--begin::Col-->
                    <div class="col-sm-6 col-xl-4">
                        <!--begin::Card-->
                        <div class="card h-100">
                            <!--begin::Card header-->
                            <div class="card-header flex-nowrap border-0 pt-9">
                                <!--begin::Card title-->
                                <div class="card-title m-0">
                                    <!--begin::Title-->
                                    <h1 class="fs-4 fw-bold text-hover-primary text-gray-600 m-0">Social Media</h1>
                                    <!--end::Title-->
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body d-flex flex-column px-9 pt-6 pb-8">
                                <!--begin::Row-->
                                <div class="row g-6 g-xl-9">
                                    <!--begin::Col-->
                                    <div class="col-sm-6 col-xl-6">
                                    <!--begin::First Heading and Icon (Left)-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Icon-->
                                        <div class="symbol symbol-45px h-45px w-45px bg-light me-5">
                                            <img src="{{asset('assets-metronic/media/svg/brand-logos/google-icon.svg')}}" alt="image" class="p-3" />
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Heading-->
                                        <div>
                                            <div class="fs-2tx ">{{$googleUsersCount}}</div>
                                        </div>
                                        <!--end::Heading-->
                                    </div>
                                    <!--end::First Heading and Icon-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-sm-6 col-xl-6">
                                    <!--begin::Second Heading and Icon (Right)-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Icon-->
                                        <div class="symbol symbol-45px h-45px w-45px bg-light me-5">
                                            <img src="{{asset('assets-metronic/media/svg/brand-logos/facebook-2.svg')}}" alt="image" class="p-3" />
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Heading-->
                                        <div>
                                            <div class="fs-2tx ">{{$facebookUsersCount}}</div>
                                        </div>
                                        <!--end::Heading-->
                                    </div>
                                    <!--end::Second Heading and Icon-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                		<!--begin::Indicator-->
													<div class="d-flex align-items-center fw-semibold mt-10">
														<span class="badge bg-light text-gray-700 px-3 py-2 me-2">{{$allUsersCount}}</span>
														<span class="text-gray-400 fs-7">Totals d'utilisateurs</span>
													</div>
										<!--end::Indicator-->
                            </div>
                            <!--end::Card body-->
                            
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Col--> 
                    <!--begin::Col-->
                    <div class="col-sm-6 col-xl-4">
                        <!--begin::Card-->
                        <div class="card h-100">
                            <!--begin::Card header-->
                            <div class="card-header flex-nowrap border-0 pt-9">
                                <!--begin::Card title-->
                                <div class="card-title m-0">
                                    <!--begin::Title-->
                                    <h1 class="fs-4 fw-bold text-hover-primary text-gray-600 m-0">Genre</h1>
                                    <!--end::Title-->
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body d-flex flex-column px-9 pt-6 pb-8">
                                <!--begin::Row-->
                                <div class="row g-6 g-xl-9">
                                    <!--begin::Col-->
                                    <div class="col-sm-6 col-xl-6">
                                    <!--begin::First Heading and Icon (Left)-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Icon-->
                                        <div class="symbol symbol-45px h-45px w-45px bg-light me-5">
                                            <img src="{{asset('assets-metronic/media/svg/avatars/female.svg')}}" alt="image" class="p-3" />
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Heading-->
                                        <div>
                                            <div class="fs-2tx ">{{$femmeUsersCount}}</div>
                                        </div>
                                        <!--end::Heading-->
                                    </div>
                                    <!--end::First Heading and Icon-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-sm-6 col-xl-6">
                                        <!--begin::First Heading and Icon (Left)-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Icon-->
                                            <div class="symbol symbol-45px h-45px w-45px bg-light me-5">
                                                <img src="{{asset('assets-metronic/media/svg/avatars/male.svg')}}" alt="image" class="p-3" />
                                            </div>
                                            <!--end::Icon-->
                                            <!--begin::Heading-->
                                            <div>
                                                <div class="fs-2tx ">{{$hommeUsersCount}}</div>
                                            </div>
                                            <!--end::Heading-->
                                        </div>
                                        <!--end::First Heading and Icon-->
                                    </div>
                                        <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Col--> 
                    <!--begin::Col-->
                    <div class="col-sm-6 col-xl-4">
                        <!--begin::Card-->
                        <div class="card h-100">
                            <!--begin::Card header-->
                            <div class="card-header flex-nowrap border-0 pt-9">
                                <!--begin::Card title-->
                                <div class="card-title m-0">
                                    <!--begin::Title-->
                                    <h1 class="fs-4 fw-bold text-hover-primary text-gray-600 m-0">Qualité</h1>
                                    <!--end::Title-->
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body d-flex flex-column px-9 pt-6 pb-8">
                                <!--begin::Row-->
                                <div class="row g-6 g-xl-9">
                                    <!--begin::Col-->
                                    <div class="col-sm-6 col-xl-6">
                                    <!--begin::First Heading and Icon (Left)-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Icon-->
                                        <div class="symbol symbol-50px symbol-circle me-5" data-bs-toggle="tooltip" data-bs-original-title="Susan Redwood" data-kt-initialized="1">
                                            <span class="symbol-label bg-warning text-inverse-warning fw-bold">Am</span>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Heading-->
                                        <div>
                                            <div class="fs-2tx ">{{$amateurUsersCount}}</div>
                                        </div>
                                        <!--end::Heading-->
                                    </div>
                                    <!--end::First Heading and Icon-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-sm-6 col-xl-6">
                                        <!--begin::First Heading and Icon (Left)-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Icon-->
                                            <div class="symbol symbol-50px symbol-circle me-5" data-bs-toggle="tooltip" data-bs-original-title="Susan Redwood" data-kt-initialized="1">
                                                <span class="symbol-label bg-primary text-inverse-primary fw-bold">Pro</span>
                                            </div>
                                            <!--end::Icon-->
                                            <!--begin::Heading-->
                                            <div>
                                                <div class="fs-2tx ">{{$proUsersCount}}</div>
                                            </div>
                                            <!--end::Heading-->
                                        </div>
                                        <!--end::First Heading and Icon-->
                                    </div>
                                        <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Col--> 
                </div>
                <!--end::Row-->

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
                                    <a class="fs-4 fw-semibold text-hover-primary text-gray-600 m-0">Tranche d'age</a>
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

                                            <th class="ps-18 min-w-125px rounded-start">- 18</th>
                                            <th class="min-w-125px">18 - 30</th>
                                            <th class="min-w-125px">30 - 60</th>
                                            <th class="min-w-125px rounded-end">60 +</th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a class="ps-20 text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$countUnderEighteen}}</a>
                                            </td>
                                            <td>
                                                <a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$countBetweenEighteenAndThirty}}</a>
                                            </td>
                                            <td>
                                                <a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$countBetweenThirtyAndSixty}}</a>
                                            </td>
                                            <td>
                                                <a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$usersOverSixty}}</a>
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





                    <!--begin::Col-->
                    <div class="col-sm-12 col-xl-12">
                        <!--begin::Card-->
                        <div class="card h-100">
                            <!--begin::Card header-->
                            <div class="card-header flex-nowrap border-0 pt-9">
                                <!--begin::Card title-->
                                <div class="card-title m-0">
                                    <!--begin::Title-->
                                    <a class="fs-4 fw-semibold text-hover-primary text-gray-600 m-0">Les regions</a>
                                    <!--end::Title-->
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body col-sm-12 d-flex flex-column px-9 pt-6 pb-8">
                                <div class="table-responsive">





                                    <!--begin::Table-->
                                    <table class="table align-middle gs-0 gy-4   table-row-bordered table-row-solid gy-4 gs-9">
                                        <!--begin::Table head-->
                                        <thead>
                                            <tr class="fw-bold text-muted bg-light">
                                                <th class="min-w-225px">Region</th>
                                                <th class="min-w-125px">Nombre d'inscrits</th>
                                            </tr>
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody class="fw-6 fw-semibold text-gray-600">
                                            @foreach ($userCountsParRegions as $userCountsParRegion)

                                            <tr>
                                                <td>
                                                    <a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{ $userCountsParRegion->region }}</a>
                                                </td>
                                                <td>
                                                    <a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{ $userCountsParRegion->user_count }}</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                    <!--end::Heading-->
                                </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Col-->
                </div>




                <!--begin::Modals-->
                <!--begin::Tables Widget 11-->
                <div class="card my-5 mb-xl-8">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold fs-3 mb-1">Utilisateurs</span>
                        </h3>
						<!--begin::Toolbar-->
                        <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">

                            <!--begin::Export-->
                            <a href="{{ route('user.export') }}">
                                <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_customers_export_modal">
                                    <i class="ki-duotone ki-exit-up fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>Export
                                </button>
                             </a>

                            <!--end::Export-->

                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Header-->
                    
                    <!--begin::Body-->
                    <div class="card-body py-3">
                        <!--begin::Table container-->

                        <div class="table-responsive">
                            {{--     <livewire:user-table /> --}}



                            <!--begin::Table-->
                            <table class="table align-middle gs-0 gy-4">
                                <!--begin::Table head-->
                                <thead>
                                    <tr class="fw-bold text-muted bg-light">
                                        <th class="ps-4 min-w-1ß25px rounded-start">Image</th>
                                        <th class="min-w-225px">Nom</th>
                                        <th class="min-w-125px">Email</th>
                                        <th class="min-w-100px">Genre</th>
                                        <th class="min-w-100px">Ville</th>
                                        <th class="min-w-100px">profile</th>
                                        <th class="min-w-100px">Social type</th>
                                        <th class="min-w-100px">Date de naissance</th>



                                    </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                    @foreach ($users as $user )

                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <!--begin::Thumbnail-->
                                                <a class="symbol symbol-50px">
                                                    <span class="symbol-label" style="background-image:url('{{ $user->photo }}');"></span>
                                                </a>
                                                <!--end::Thumbnail-->
                                            </div>
                                        </td>
                                        <td>
                                            <a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$user->name}}</a>
                                        </td>
                                        <td>
                                            <a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$user->email}}</a>
                                        </td>
                                        <td>
                                            <a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$user->sexe}}</a>
                                        </td>
                                        <td>
                                            @if($user->ville)
                                                <a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{ $user->ville->name }}</a>
                                            @else
                                                <span class="text-muted">No ville found</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$user->profile}}</a>
                                        </td>
                                        <td>
                                            <a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$user->social_type}}</a>
                                        </td>
                                        <td>
                                            <a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$user->DateNaissance}}</a>
                                        </td>
                                        
                                    </tr>
                                    @endforeach
                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                            {!! $users->links() !!}

                        </div>
                        <!--end::Table container-->
                    </div>
                    <!--begin::Body-->
                </div>
                <!--end::Tables Widget 11-->

                <!--end::Modals-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
</div>




@endsection
