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
                                    <h3 class="fw-bold my-2">Participations
                                    <!--end::Title-->
                                </div>
                                <!--end::Toolbar-->

                                 <!--begin::Tables Widget 12-->
                                 <div class="card mb-5 mb-xl-8">
                                    <!--begin::Header-->
                                    <div class="card-header border-0 pt-5">
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bold fs-3 mb-1">Member Statistics</span>
                                            <span class="text-muted mt-1 fw-semibold fs-7">Over 500 new members</span>
                                        </h3>
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
                                                        <th class="ps-4 min-w-100px rounded-start">Image</th>
                                                        <th class="min-w-125px">Titre</th>
                                                        <th class="min-w-300px">Description</th>
                                                        <th class="min-w-100px">Status</th>
                                                        <th class="min-w-150px">Categorie</th>
                                                        <th class="min-w-150px">Date de participatiopn</th>
                                                        <th class="min-w-200px text-end rounded-end"></th>
                                                    </tr>
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-50px me-5">
                                                                    <span class="symbol-label bg-light">
                                                                        <img src="assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end" alt="" />
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$8,000,000</a>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$5,400</a>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">Intertico</a>
                                                        </td>
                                                        <td>
                                                            <div class="rating">
                                                                <div class="rating-label checked">
                                                                    <i class="ki-duotone ki-star fs-6"></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i class="ki-duotone ki-star fs-6"></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i class="ki-duotone ki-star fs-6"></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i class="ki-duotone ki-star fs-6"></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i class="ki-duotone ki-star fs-6"></i>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 me-2">View</a>
                                                            <a href="#" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4">Edit</a>
                                                        </td>
                                                    </tr>
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