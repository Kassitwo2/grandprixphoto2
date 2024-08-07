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
                    <h3 class="fw-bold my-2">Statistiques</h3>
                    <!--end::Title-->
                </div>
                <!--end::Toolbar-->

                <!--begin::Row-->
                <div class="row">
                    <!--begin::Col-->
                    <div class="col-sm-12 col-xl-12">
                        <!--begin::Card-->
                        <div class="card h-100">
                            <!--begin::Card header-->
                            <div class="card-header flex-nowrap border-0 pt-9">
                                <!--begin::Card title-->
                                <div class="card-title m-0">
                                    <a class="fs-4 fw-semibold text-hover-primary text-gray-600 m-0">Les Statistiques</a>
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->

                            <!--begin::Card body-->
                            <div class="card-body col-sm-12 d-flex flex-column px-9 pt-6 pb-8">
                                <!-- Barre de recherche et tri -->
                                <form method="GET" action="{{ route('count-ville') }}" id="search-form">
                                    <div class="d-flex align-items-center justify-content-start my-1 mb-3">
                                        <!--begin::Search-->
                                        <div class="d-flex align-items-center position-relative">
                                            <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                            <input type="text" name="search" class="form-control form-control-solid w-250px ps-12" placeholder="Rechercher une ville" value="{{ $search }}">
                                        </div>
                                        <!--end::Search-->
                                        
                                        <!--begin::Region Filter-->
                                        <div class="d-flex align-items-center position-relative ms-3">
                                            <select name="region" class="form-control form-control-solid h-100 w-250px ps-12" onchange="this.form.submit()">
                                                <option value="">Toutes les régions</option>
                                                @foreach($regions as $region)
                                                    <option value="{{ $region->id }}" {{ $selectedRegion == $region->id ? 'selected' : '' }}>
                                                        {{ $region->region }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <!--end::Region Filter-->
                                    </div>
                                </form>

                                <!--begin::Table-->
                                <div class="table-responsive">
                                    <table class="table align-middle gs-0 gy-4 table-row-bordered table-row-solid">
                                        <!--begin::Table head-->
                                        <thead>
                                            <tr class="fw-bold text-muted bg-light">
                                                <th class="min-w-225px">Ville</th>
                                                <th class="min-w-125px">Professionnels</th>
                                                <th class="min-w-125px">Amateurs</th>
                                                <th class="min-w-125px">Males</th>
                                                <th class="min-w-125px">Females</th>
                                                <th class="min-w-125px">Action</th>
                                            </tr>
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody class="fw-6 fw-semibold text-gray-600">
                                            @foreach($villesData as $ville)
                                                <tr>
                                                    <td>
                                                        <a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{ $ville['name'] }}</a>
                                                    </td>
                                                    <td>
                                                        <a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{ $ville['pro_count'] }}</a>
                                                    </td>
                                                    <td>
                                                        <a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{ $ville['amt_count'] }}</a>
                                                    </td>
                                                    <td>
                                                        <a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{ $ville['male_count'] }}</a>
                                                    </td>
                                                    <td>
                                                        <a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{ $ville['female_count'] }}</a>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('detailsVille',['id' => $ville['id']]) }}" class="btn btn-sm btn-primary">Détails</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                </div>
                                <!--end::Table-->

                                <!--begin::Modals-->
                                <!-- Ajoutez ici les modaux si nécessaire -->
                                <!--end::Modals-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->

            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
</div>
@endsection
