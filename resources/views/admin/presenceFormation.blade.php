@extends('layouts.Dashboard-admin.guest')
@section('content')

    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">

        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-xxl">
                                <!--begin::Toolbar-->
                                <div class="d-flex flex-wrap flex-stack mb-6">
                                    <!--begin::Title-->
                                    <h3 class="fw-bold my-2">Liste de présence formation
                                    <!--end::Title-->
                                </div>
                                <!--end::Toolbar-->

                                 <!--begin::Tables Widget 12-->
                                 <div class="card mb-5 mb-xl-8">
                                    <!--begin::Header-->
                                    <div class="card-header border-0 pt-5">
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bold fs-3 mb-1">Les membres</span>
                                        </h3>
                                        <div class="card-toolbar">
                                            <a href="/backoffice/presence" class="btn btn-sm btn-light-primary">
                                            <i class="ki-duotone ki-plus fs-2"></i>Ajouter</a>
                                        </div>
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
                                                        <th class="ps-4 min-w-100px rounded-start">Nom</th>
                                                        <th class="min-w-125px">Prénom</th>
                                                        <th class="min-w-300px">Téléphone</th>
                                                        <th class="min-w-100px">Email</th>
                                                        <th class="min-w-150px">Genre</th>
                                                        <th class="ps-4 min-w-200px rounded-end">Date de Formation</th>
                                                    </tr>
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody>
                                                    @foreach ($presences as $presence )
                                                    <tr>
                                                        <td>
                                                            <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$presence->nom}}</a>
                                                        </td>

                                                        <td>
                                                            <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$presence->prenom}}</a>
                                                        </td>

                                                        <td>
                                                            <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$presence->telephone}}</a>
                                                        </td>

                                                        <td>
                                                            <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$presence->email}}</a>
                                                        </td>

                                                        <td>
                                                            <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$presence->genre}}</a>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$presence->dateFormation}}</a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                                <!--end::Table body-->
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Table container-->
                                    </div>
                                    <!--begin::Body-->
                                </div>
                                <!--end::Tables Widget 12-->
            </div>
        </div>
    </div>

@endsection