@extends('layouts.Dashboard-jury.guest')
@section('content')

<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}

    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">

        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-xxl">






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

            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
</div>

@endsection
