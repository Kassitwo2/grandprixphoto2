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
                    <h3 class="fw-bold my-2">Statistiques de la ville {{ $ville->name }} </h3>
                    <!--end::Title-->
                </div>
                <!--end::Toolbar-->
                <!--begin::Row-->

                <!--begin::Row-->
                <div class="row g-6 g-xl-9">
                    <!--begin::Col-->
                    <div class="col-sm-6 col-xl-6">
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
                                            <div class="fs-2tx ">{{$usersAmateurCount}}</div>
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
                                                <div class="fs-2tx ">{{$usersProCount}}</div>
                                            </div>
                                            <!--end::Heading-->
                                        </div>
                                        <!--end::First Heading and Icon-->
                                    </div>
                                        <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <div class="row">
                                    <!--begin::Indicator-->
                                    <div class="col-6 d-flex align-items-center fw-semibold mt-10">
                                        <span class="badge bg-light text-gray-700 px-3 py-2 me-2">{{$allUsersCount}}</span>
                                        <span class="text-gray-400 fs-7">Total participants</span>
                                    </div>
                                    <!--end::Indicator-->

                                </div>
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Col-->
                      <!--begin::Col-->
                      <div class="col-sm-6 col-xl-6">
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
                </div>
                <!--end::Row-->
                <!--end::Row-->

                <!--begin::Col-->
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
                                            <th class="min-w-125px ">Vitalité</th>
                                            <th class="min-w-125px rounded-end">Total</th>
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
                                            <td>
                                                <a class="ps-5 text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$ParticipationCount}}</a>
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
                <!--end::Col-->


                    <!--begin::Col-->
                    <div class="col-sm-12 col-xl-12 mt-3">
                        <!--begin::Card-->
                        <div class="card h-100">
                            <!--begin::Card header-->
                            <div class="card-header flex-nowrap border-0 pt-9">
                                <!--begin::Card title-->
                                <div class="card-title m-0">
                                    <!--begin::Title-->
                                    <a class="fs-4 fw-semibold text-hover-primary text-gray-600 m-0">Les Utilisateurs</a>
                                    <!--end::Title-->
                                </div>
                                <!--end::Card title-->
                                <!--begin::Search-->
                            <div class="position-relative my-1">
                                <i
                                    class="ki-duotone ki-magnifier fs-2 position-absolute top-50 translate-middle-y ms-4">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <input type="text" data-kt-table-widget-4="search"
                                    class="form-control w-150px fs-7 ps-12" placeholder="Search" />
                            </div>
                            <!--end::Search-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body col-sm-12 d-flex flex-column px-9 pt-6 pb-8">
                                <div class="table-responsive">





                                    <!--begin::Table-->
                                    <table class="table align-middle gs-0 gy-4 users-table" id="users-table">
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
                                                <th class="min-w-100px">Actions</th>



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
                                                <td>
                                                    <a class="btn btn-active-color-light text-light py-3 px-4 get-participations"
                                                    style="background-color: #1E90FF;"
                                                    data-user-id={{$user->id}}>
                                                        Details
                                                    </a>
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

                <!--begin::Modals-->

                <!--end::Modals-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
</div>


<script>
   $(document).ready(function() {
    $(document).on('click', '.get-participations', function () {
        var userId = $(this).data('user-id');

        var url = '/admin/' + userId + '/participations';
        
        // Redirect to the constructed URL
        window.location.href = url;

    });
    $('input[data-kt-table-widget-4="search"]').on('keyup', function() {
            const searchText = $(this).val().toLowerCase();

            $('#users-table tr').each(function() {
                const rowText = $(this).text().toLowerCase();

                if (rowText.includes(searchText)) {
                    $('#users-table thead tr').show();
                    $(this).show();
                } else {
                    $('#users-table thead tr').show();
                    $(this).hide();
                }
            });
        });
});

</script>

@endsection
