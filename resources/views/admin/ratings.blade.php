@extends('layouts.Dashboard-admin.guest')
@section('content')
<style>
    .my-small-height-swal {
    padding: 10px;
    }

    .my-small-height-swal .swal2-title {
    font-size: 1.25em; 
    margin-bottom: 5px;
    }

    .my-small-height-swal .swal2-icon {
    font-size: 1.5em;
    margin-top: 5px; 
    }

</style>
<style>
    .rate {
        float: left;
        height: 46px;
        padding: 0 10px;
        }
        .rate:not(:checked) > input {
        position:absolute;
        display: none;
        }
        .rate:not(:checked) > label {
        float:right;
        width:1em;
        overflow:hidden;
        white-space:nowrap;
        cursor:pointer;
        font-size:30px;
        color:#ccc;
        }
        .rated:not(:checked) > label {
        float:right;
        width:1em;
        overflow:hidden;
        white-space:nowrap;
        cursor:pointer;
        font-size:30px;
        color:#ccc;
        }
        .rate:not(:checked) > label:before {
        content: '★ ';
        }
        .rate > input:checked ~ label {
        color: #ffc700;
        }
        .rate:not(:checked) > label:hover,
        .rate:not(:checked) > label:hover ~ label {
        color: #deb217;
        }
        .rate > input:checked + label:hover,
        .rate > input:checked + label:hover ~ label,
        .rate > input:checked ~ label:hover,
        .rate > input:checked ~ label:hover ~ label,
        .rate > label:hover ~ input:checked ~ label {
        color: #c59b08;
        }
        .star-rating-complete{
           color: #c59b08;
        }
        .rating-container .form-control:hover, .rating-container .form-control:focus{
        background: #fff;
        border: 1px solid #ced4da;
        }
        .rating-container textarea:focus, .rating-container input:focus {
        color: #000;
        }
        .rated {
        float: left;
        height: 46px;
        padding: 0 10px;
        }
        .rated:not(:checked) > input {
        position:absolute;
        display: none;
        }
        .rated:not(:checked) > label {
        float:right;
        width:1em;
        overflow:hidden;
        white-space:nowrap;
        cursor:pointer;
        font-size:30px;
        color:#ffc700;
        }
        .rated:not(:checked) > label:before {
        content: '★ ';
        }
        .rated > input:checked ~ label {
        color: #ffc700;
        }
        .rated:not(:checked) > label:hover,
        .rated:not(:checked) > label:hover ~ label {
        color: #deb217;
        }
        .rated > input:checked + label:hover,
        .rated > input:checked + label:hover ~ label,
        .rated > input:checked ~ label:hover,
        .rated > input:checked ~ label:hover ~ label,
        .rated > label:hover ~ input:checked ~ label {
        color: #c59b08;
        }
</style> 
<!--begin::Content wrapper-->
<div class="d-flex flex-column flex-column-fluid">
    <!--begin::Content-->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            <!--begin::Toolbar-->
            <div class="d-flex flex-wrap flex-stack mb-6">
                <!--begin::Title-->
                <h3 class="fw-bold my-2">Liste des évaluations par les jurés
                    <!--end::Title-->
            </div>
            <!--end::Toolbar-->

            <!--begin::Tables Widget 12-->
            <div class="card mb-5 mb-xl-8">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold fs-3 mb-1">Les Participations</span>
                    </h3>
                    <div class="card-toolbar">
                        <!--begin::Filters-->
                        <div class="d-flex flex-stack flex-wrap gap-4">
                            <!--begin::Status-->
                            <div class="d-flex align-items-center fw-bold">
                                <!--begin::Label-->
                                <div class="text-gray-400 fs-7 me-2">Categorie</div>
                                <!--end::Label-->
                                <!--begin::Select-->
                                <select id="categoryFilter"
                                    class="form-select form-select-transparent text-gray-900 fs-7 lh-1 fw-bold py-0 ps-3 w-auto select2-hidden-accessible"
                                    data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px"
                                    data-placeholder="Select an option">
                                    <option value="Show All" selected="selected">Afficher Tout</option>
                                    <option value="1">Faras</option>
                                    <option value="5">Sport & Vitalité</option>
                                    <option value="2">Trésors du maroc</option>
                                </select>
                                <!--end::Select-->
                            </div>
                            <!--end::Status-->
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
                        <!--begin::Filters-->
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body py-3">
                    <!--begin::Table container-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table align-middle gs-0 gy-4" id="ratingsTable">
                            <!--begin::Table head-->
                            <thead>
                                <tr class="fw-bold text-muted bg-light">
                                    <th class="ps-4 min-w-100px rounded-start">Image</th>
                                    <th class="min-w-100px">Title</th>
                                    <th class="min-w-100px">Categorie</th>
                                    @foreach ($juries as $jury)
                                    <th class="min-w-100px">{{$jury->name}}</th>
                                    @endforeach
                                    <th class="min-w-100px">Super Admin</th>
                                    <th class="min-w-100px">Total</th>
                                    <th class="min-w-100px">Actions</th>
                                </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody>
                                @foreach ($participations as $participation)
                                    <tr data-category-id="{{ $participation->categorie->id }}">
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-50px me-5">
                                                    <a href="#" class="symbol symbol-50px m-3 image-modal-link"
                                                        data-image-detail="{{ $participation->image }}"
                                                        data-image-title="{{ $participation->title }}"
                                                        data-image-category="{{ $participation->categorie->name }}"
                                                        data-image-description="{{ $participation->description }}"
                                                        data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">
                                                        <span class="symbol-label bg-light">
                                                            <img src="storage/Thumbnails/{{ $participation->image }}"
                                                                style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0;"
                                                                alt="">
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="d-block text-black-600 fw-bold mb-1 fs-6"
                                                data-title="{{ $participation->title }}">
                                                {{ $participation->title }}
                                            </span>
                                        </td>
                                        <td>
                                            <span class="d-block text-grey-600 mb-1 fs-6">
                                                {{ $participation->categorie->name }}
                                            </span>
                                        </td>
                                        @php    $total = 0; @endphp
                                        @foreach($juries as $jury)
                                        
                                        <td>
                                            @php
                                            $rating = $jury->ratings->where('participation_id', $participation->id)->first();
                                        @endphp
                                            @if ($rating)
                                                <span class="d-block text-black-800 mb-1 fs-6 fw-bold">
                                                    {{ $rating->rating * 10 }}
                                                </span>
                                                @php            $total += ($rating->rating * 10); @endphp
                                            @else
                                                <span class="d-block text-gray-800 mb-1 fs-6">
                                                    null
                                                </span>
                                            @endif
                                        </td>
                                        @endforeach
                                        @foreach($admins as $admin)
                                        
                                        <td class="text-center">
                                            @php
                                                $rating = $admin->ratings->where('participation_id', $participation->id)->first();
                                            @endphp
                                            @if ($rating)
                                                <span class="d-block text-black-800 mb-1 fs-6 fw-bold">
                                                    {{ $rating->rating * 10 }}
                                                </span>
                                                @php            $total += ($rating->rating * 10); @endphp
                                            @else
                                                <span class="d-block text-gray-800 mb-1 fs-6">
                                                    null
                                                </span>
                                            @endif
                                        </td>
                                        @endforeach
                                        <td >
                                            <span class="d-block text-black-800 mb-1 py-3 px-4 fs-4 fw-bold">
                                                {{ $total }}
                                            </span>
                                        </td>
                                        <td class="text-center">
                                            @foreach($admins as $admin)
                                            @php
                                                $rating = $admin->ratings->where('participation_id', $participation->id)->first();
                                            @endphp
                                            @if ($rating)
                                                <a 
                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px update-btn"
                                                style="background-color: #1E90FF;"
                                                data-image-detail-update="{{ $participation->image }}"
                                                data-image-title-update="{{ $participation->title }}"
                                                data-image-category-update="{{ $participation->categorie->name }}"
                                                data-image-description-update="{{ $participation->description }}"
                                                data-image-id-update="{{ $participation->id }}"
                                                data-image-update="{{ $rating->rating }}"
                                                data-update-id="{{ $rating->id }}"
                                                data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan_update">
                                                    <i class="bi bi-pen" style="color: white;"></i>
                                                </a>
                                                <a 
                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px delete-btn"
                                                style="background-color: rgb(255, 94, 94);"
                                                data-rating-id="{{ $rating->id }}"
                                                data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan_delete">
                                                    <i class="bi bi-trash" style="color: white;"></i>
                                                </a>

                                            
                                            @else
                                            <a class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px rating-btn"
                                            style="background-color: gold;"
                                            data-image-detail-rating="{{ $participation->image }}"
                                            data-image-title-rating="{{ $participation->title }}"
                                            data-image-category-rating="{{ $participation->categorie->name }}"
                                            data-image-description-rating="{{ $participation->description }}"
                                            data-image-id-rating="{{ $participation->id }}">
                                            <i class="bi bi-star-fill" style="color: white;"></i>
                                            </a>
                                            @endif
                                            @endforeach
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

<div class="modal fade" id="kt_modal_upgrade_plan" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content rounded">
            <div class="modal-header justify-content-end border-0 pb-0">
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </div>
            </div>
            <div class="modal-body pt-0 pb-15 px-5 px-xl-20">
                <div class="d-flex flex-column">
                    <div class="row mt-10">
                        <div class="col-12">
                            <img id="image-detail" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="row mt-10">
                        <div class="col-12">
                            <span id="image-category" class="fw-bold text-gray-600 text-hover-primary fs-6"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h3 id="image-title" class="fs-2hx text-gray-900 mb-6"></h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <span id="image-description" class="text-gray-900 fs-3"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="kt_modal_upgrade_plan_actions" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-xl" id="rating_formulaire">
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
                <div>
                    <div class="card card-flush h-xl-100">
                        <div class="card-body py-9">
                            <!--begin::Row-->
                            <div class="row gx-9 h-50">
                                <!--begin::Col-->
                                <div class="col-sm-12 col-md-12 col-lg-6">
                                    <!--begin::Image-->
                                    <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-400px min-h-100 h-100"
                                        style="background-size: contain; background-repeat: no-repeat; background-position: center;">
                                        <img id="image-detail-rating" class="img-fluid align-center" alt="">
                                    </div>
                                    <!--end::Image-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-sm-12 col-md-12 col-lg-6 mt-md-5 mt-sm-5">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column h-100">
                                        <!--begin::Header-->
                                        <div class="mb-7">
                                            <!--begin::Headin-->
                                            <div class="d-flex flex-stack mb-6">
                                                <!--begin::Title-->
                                                <div class="flex-shrink-0 me-5">
                                                    <span id="image-title-rating"
                                                        class="text-gray-800 fs-1 fw-bold"></span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Heading-->
                                        </div>
                                        <!--end::Header-->

                                        <!--begin::Body-->
                                        <div class="mb-6">
                                            <!--begin::Text-->
                                            <span id="image-description-rating"
                                                class="fw-semibold text-gray-800 fs-5 mb-8 d-block"
                                                style="text-align: left;"></span>
                                            <!--end::Text-->
                                            <!--begin::Items-->
                                            <div class="d-flex align-items-center flex-wrap d-grid gap-2">
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center me-5 me-xl-13">

                                                    <!--begin::Info-->
                                                    <div class="m-0">
                                                        <a id="image-category-rating"
                                                            class="fw-bold text-gray-600 text-hover-primary fs-7"></a>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Items-->





                                            <form id="rating-form" class="py-6 px-4"
                                                action="{{ route('ratings.storeAdmin') }}" method="POST"
                                                autocomplete="off">
                                                @csrf
                                                <div class="d-flex flex-column flex-md-row align-items-start mt-10">
                                                    <!-- Rating Section -->
                                                    <div
                                                        class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 me-md-6 mb-3">
                                                        <input type="hidden" name="admin_id"
                                                            value="{{ Auth::guard('admin')->user()->id }}">
                                                        <input type="hidden" name="participation_id"
                                                            id="image-id-rating">
                                                        <div class="form-group col">
                                                            <div class="col d-flex justify-content-center">
                                                                <div class="rate ">
                                                                    <input type="radio" id="star5" class="rate"
                                                                        name="rating" value="5" />
                                                                    <label for="star5" title="5 stars">5 stars</label>
                                                                    <input type="radio" id="star4" class="rate"
                                                                        name="rating" value="4" />
                                                                    <label for="star4" title="4 stars">4 stars</label>
                                                                    <input type="radio" id="star3" class="rate"
                                                                        name="rating" value="3" />
                                                                    <label for="star3" title="3 stars">3 stars</label>
                                                                    <input type="radio" id="star2" class="rate"
                                                                        name="rating" value="2">
                                                                    <label for="star2" title="2 stars">2 stars</label>
                                                                    <input type="radio" id="star1" class="rate"
                                                                        name="rating" value="1" checked />
                                                                    <label for="star1" title="1 star">1 star</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Rating Section -->
                                                </div>
                                                <!-- Button Section -->
                                                <div class="col-sm-6 col-md-6 d-flex justify-content-center align-items-center"
                                                    style="margin-top: 20px; margin-left: 23%">
                                                    <button type="submit" class="btn btn-sm py-3 px-5 btn-primary">
                                                        <span class="fw-bold fs-5">Suivant</span>
                                                    </button>

                                                </div>


                                                <!-- End Button Section -->
                                                <!-- Modal HTML -->
                                                <div id="ok-modal" class="modal">
                                                    <div class="success-animation">
                                                        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 52 52">
                                                            <circle class="checkmark__circle" cx="26" cy="26" r="25"
                                                                fill="none" />
                                                            <path class="checkmark__check" fill="none"
                                                                d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Plans-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>

<div class="modal fade" id="kt_modal_upgrade_plan_update" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-xl" id="rating_formulaire">
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
                <div>
                    <div class="card card-flush h-xl-100">
                        <div class="card-body py-9">
                            <!--begin::Row-->
                            <div class="row gx-9 h-50">
                                <!--begin::Col-->
                                <div class="col-sm-12 col-md-12 col-lg-6">
                                    <!--begin::Image-->
                                    <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-400px min-h-100 h-100"
                                        style="background-size: contain; background-repeat: no-repeat; background-position: center;">
                                        <img id="image-detail-update" class="img-fluid align-center" alt="">
                                    </div>
                                    <!--end::Image-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-sm-12 col-md-12 col-lg-6 mt-md-5 mt-sm-5">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column h-100">
                                        <!--begin::Header-->
                                        <div class="mb-7">
                                            <!--begin::Headin-->
                                            <div class="d-flex flex-stack mb-6">
                                                <!--begin::Title-->
                                                <div class="flex-shrink-0 me-5">
                                                    <span id="image-title-update"
                                                        class="text-gray-800 fs-1 fw-bold"></span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Heading-->
                                        </div>
                                        <!--end::Header-->

                                        <!--begin::Body-->
                                        <div class="mb-6">
                                            <!--begin::Text-->
                                            <span id="image-description-update"
                                                class="fw-semibold text-gray-800 fs-5 mb-8 d-block"
                                                style="text-align: left;"></span>
                                            <!--end::Text-->
                                            <!--begin::Items-->
                                            <div class="d-flex align-items-center flex-wrap d-grid gap-2">
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center me-5 me-xl-13">

                                                    <!--begin::Info-->
                                                    <div class="m-0">
                                                        <a id="image-category-update"
                                                            class="fw-bold text-gray-600 text-hover-primary fs-7"></a>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Items-->





                                            <form id="update-form" class="py-6 px-4"  method="POST" autocomplete="off">
                                                @csrf
                                                @method('PUT')
                                                <div class="d-flex flex-column flex-md-row align-items-start mt-10">
                                                    <!-- Rating Section -->
                                                    <div
                                                        class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 me-md-6 mb-3">
                                                        <input type="hidden" name="id"
                                                            id="update-id">
                                                            <div class="form-group col">
                                                                <div class="col d-flex justify-content-center">
                                                                    <div class="rate">
                                                                        <input type="radio" id="star6" class="rate"
                                                                            name="rating" value="5" />
                                                                        <label for="star6" title="5 stars">5 stars</label>
                                                                        <input type="radio" id="star7" class="rate"
                                                                            name="rating" value="4" />
                                                                        <label for="star7" title="4 stars">4 stars</label>
                                                                        <input type="radio" id="star8" class="rate"
                                                                            name="rating" value="3" />
                                                                        <label for="star8" title="3 stars">3 stars</label>
                                                                        <input type="radio" id="star9" class="rate"
                                                                            name="rating" value="2">
                                                                        <label for="star9" title="2 stars">2 stars</label>
                                                                        <input type="radio" id="star10" class="rate"
                                                                            name="rating" value="1" checked />
                                                                        <label for="star10" title="1 star">1 star</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                    </div>
                                                    <!-- End Rating Section -->
                                                </div>
                                                <!-- Button Section -->
                                                <div class="col-sm-6 col-md-6 d-flex justify-content-center align-items-center"
                                                    style="margin-top: 20px; margin-left: 23%">
                                                    <button type="submit" class="btn btn-sm py-3 px-5 btn-primary">
                                                        <span class="fw-bold fs-5">Submit</span>
                                                    </button>

                                                </div>


                                                <!-- End Button Section -->
                                                <!-- Modal HTML -->
                                                <div id="ok-modal" class="modal">
                                                    <div class="success-animation">
                                                        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 52 52">
                                                            <circle class="checkmark__circle" cx="26" cy="26" r="25"
                                                                fill="none" />
                                                            <path class="checkmark__check" fill="none"
                                                                d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Plans-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>

<div class="modal fade" tabindex="-1" id="kt_modal_1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Participation Déjà Évaluée</h3>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <p>Vous Avez Déjà Évalué Cette Participation</p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="kt_modal_upgrade_plan_delete" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
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
            <div class="modal-body text-center fs-4">
                Êtes-vous sûr de supprimer cette évaluation ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light font-weight-bold" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-error font-weight-bold delete-sure" style="background-color: rgb(255, 94, 94); color: white;">Supprimer</button>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
        $('#categoryFilter').on('change', function () {
            const selectedCategory = $(this).val();

            // Always show the table header
            $('#ratingsTable thead tr').show();

            // Filter the table body rows
            $('#ratingsTable tbody tr').each(function () {
                const categoryId = $(this).data('category-id');

                if (selectedCategory === 'Show All' || categoryId == selectedCategory) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });
        $('input[data-kt-table-widget-4="search"]').on('keyup', function() {
            const searchText = $(this).val().toLowerCase();

            $('#ratingsTable tr').each(function() {
                const rowText = $(this).text().toLowerCase();

                if (rowText.includes(searchText)) {
                    $('#ratingsTable thead tr').show();
                    $(this).show();
                } else {
                    $('#ratingsTable thead tr').show();
                    $(this).hide();
                }
            });
        });

        $(document).on('click', '.image-modal-link', function () {
            var imageUrl = $(this).data('image-detail');
            var imageTitle = $(this).data('image-title');
            var imageCategory = $(this).data('image-category');
            var imageDescription = $(this).data('image-category');
            var imageDescription = $(this).data('image-description');
            
            $('#image-detail').attr('src', 'storage/' + imageUrl);
            $('#image-title').text(imageTitle);
            $('#image-category').text(imageCategory);
            $('#image-description').text(imageDescription);

        });



        $(document).on('click', '.rating-btn', function () {
            var imageUrl = $(this).data('image-detail-rating');
            var imageTitle = $(this).data('image-title-rating');
            var imageCategory = $(this).data('image-category-rating');
            var imageDescription = $(this).data('image-description-rating');
            var participationId = $(this).data('image-id-rating');

            $('#image-detail-rating').attr('src', 'storage/' + imageUrl);
            $('#image-title-rating').text(imageTitle);
            $('#image-category-rating').text(imageCategory);
            $('#image-description-rating').text(imageDescription);
            $('#image-id-rating').val(participationId);

            checkParticipation(participationId);
        });

        function checkParticipation(participationId) {
            $.ajax({
                url: '/check-participation', // Define your route in web.php
                type: 'GET',
                data: { participation_id: participationId },
                success: function (response) {
                    if (response.isRated) {
                        
                        var myModal1 = new bootstrap.Modal(document.getElementById('kt_modal_1'));
                        myModal1.show();
                        $('#kt_modal_upgrade_plan_actions').hide();
                    } else {
                        // Show the modal
                        var myModal = new bootstrap.Modal(document.getElementById('kt_modal_upgrade_plan_actions'));
                        myModal.show();
                        $('#kt_modal_1').hide();

                    }
                }
            });
        }

        $(document).on('submit', '#rating-form', function (e) {
            e.preventDefault();

            var formData = $(this).serialize();

            $.ajax({
                type: "POST",
                url: $(this).attr('action'),
                data: formData,
                dataType: 'json',
                success: function (data) {
                    if (data.success) {
                        $('#kt_modal_upgrade_plan_actions').modal('hide'); 

                        $('#ratingsTable').load(location.href + ' #ratingsTable > *');

                        $('#rating-form').load(location.href + ' #rating-form > *');

                        Swal.fire({
                        position: "top-end",
                        icon: "success",
                        title: "Évaluation ajoutée avec succès",
                        showConfirmButton: false,
                        timer: 500,
                        customClass: {
                            popup: 'my-small-height-swal'
                        }
                        });

                    } else {
                        alert('Failed to submit rating');
                    }
                },
                error: function (xhr, status, error) {
                    alert('An error occurred while processing your request: ' + error);
                }
            });
        });

        $(document).on('click', '.update-btn', function () {
            var imageUrlUpdate = $(this).data('image-detail-update');
            var imageTitleUpdate = $(this).data('image-title-update');
            var imageCategoryUpdate = $(this).data('image-category-update');
            var imageDescriptionUpdate = $(this).data('image-description-update');
            var participationIdUpdate = $(this).data('image-id-update');
            var ratingIdUpdate = $(this).data('update-id');
            var ratingUpdate = $(this).data('image-update');

            $('#image-detail-update').attr('src', 'storage/' + imageUrlUpdate);
            $('#image-title-update').text(imageTitleUpdate);
            $('#image-category-update').text(imageCategoryUpdate);
            $('#image-description-update').text(imageDescriptionUpdate);
            $('#image-id-update').val(participationIdUpdate);
            $('#update-id').val(ratingIdUpdate);
            $('#input[name="rating"][value="' + ratingUpdate + '"]').prop('checked', true);
        });

        $(document).on('submit', '#update-form', function (e) {
            e.preventDefault();

            var formData = $(this).serialize();
            var ratingId = $('#update-id').val();

            $.ajax({
                type: "PUT", 
                url: `/admin/ratings/${ratingId}/update-rating`, 
                data: formData,
                dataType: 'json',
                success: function (data) {
                    if (data.success) {
                        $('#kt_modal_upgrade_plan_update').modal('hide'); 
                        

                        $('#ratingsTable').load(location.href + ' #ratingsTable > *');

                        $('#update-form').load(location.href + ' #update-form > *');


                        Swal.fire({
                        position: "top-end",
                        icon: "success",
                        title: "Évaluation mise à jour avec succès",
                        showConfirmButton: false,
                        timer: 500,
                        customClass: {
                            popup: 'my-small-height-swal'
                        }
                        });
                        location.reload();


                    } else {
                        alert('Failed to submit rating');
                    }
                },
                error: function (xhr, status, error) {
                    alert('An error occurred while processing your request: ' + error);
                }
            });
        });

        $(document).on('click', '.delete-btn', function (e){
            e.preventDefault();
            var ratingId = $(this).data('rating-id'); 
            var formData = $(this).closest('form').serialize(); 

            $('#kt_modal_upgrade_plan_delete').modal('show'); 

            $(document).on('click', '.delete-sure', function (e){
                $.ajax({
                type: "PUT", 
                url: `/admin/ratings/${ratingId}/delete-rating`, 
                data: formData + '&_token=' + $('meta[name="csrf-token"]').attr('content'),
                dataType: 'json',
                success: function (data) {
                    if (data.success) {
                        
                        $('#kt_modal_upgrade_plan_delete').modal('hide'); 

                        $('#ratingsTable').load(location.href + ' #ratingsTable > *');


                        Swal.fire({
                        position: "top-end",
                        icon: "success",
                        title: "Évaluation supprimée avec succès",
                        showConfirmButton: false,
                        timer: 500,
                        customClass: {
                            popup: 'my-small-height-swal'
                        }
                        });

                    }
                }
                });
            });
            
        });

});


</script>


@endsection