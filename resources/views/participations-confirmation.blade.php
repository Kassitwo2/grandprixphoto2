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
                    <h3 class="fw-bold my-2">Statistiques
                    <!--end::Title-->
                </div>
                <!--end::Toolbar-->

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
                                                <div class="fs-2tx ">{{$totalParticipantsFemme}}</div>
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
                                                <div class="fs-2tx ">{{$totalParticipantsHomme}}</div>
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
                                        <span class="badge bg-light text-gray-700 px-3 py-2 me-2">{{$totalParticipants}}</span>
                                        <span class="text-gray-400 fs-7">Total participants</span>
                                    </div>
                                    <!--end::Indicator-->
                                    <!--begin::Indicator-->
                                    <div class="col-6 d-flex align-items-center fw-semibold mt-10">
                                        <span class="badge bg-light text-gray-700 px-3 py-2 me-2">{{$participationsCount}}</span>
                                        <span class="text-gray-400 fs-7">Total participations</span>
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
                                            <div class="fs-2tx ">{{$countsByProfileAmateur}}</div>
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
                                                <div class="fs-2tx ">{{$countsByProfileProfessionnel}}</div>
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
                            <span class="card-label fw-bold fs-3 mb-1">Confermation du participation</span>
                        </h3>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body py-3">
                        <!--begin::Table container-->
                        <div class=" table-responsive">
                            <!--begin::Table-->
                            <table class="participation table align-middle gs-0 gy-4  table-row-bordered table-row-solid">
                                <!--begin::Table head-->
                                <thead>
                                    <tr class="fw-bold text-muted bg-light">
                                        <th class="ps-4 min-w-50px rounded-start">Image</th>
                                        <th class="min-w-250px rounded-end">Action</th>

                                        <th class="min-w-125px">Titre</th>
                                        <th class="min-w-400px">Description</th>
                                        <th class="min-w-150px">Catégorie</th>
                                    {{--<th class="min-w-100px">Status</th>--}}   
                                        <th class="min-w-200px">Camera</th>
                                        <th class="min-w-150px">Dimensions</th>
                                        <th class="min-w-150px">Resolution</th>
                                        <th class="min-w-100px">IsColor</th>
                                        <th class="min-w-100px">Size</th>
                                        <th class="min-w-150px">Date de participation</th>
                                    </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                    @foreach ($participations as $participation)
                                        @php
                                            $exifData = null; // Define $exifData variable outside try-catch block
                                        
                                            try {
                                                // Path to your image file
                                                $imagePath = 'storage/' . $participation->image;
                                        
                                                // Read EXIF data from the image file
                                                $exifData = exif_read_data($imagePath);


                                                // Check if resolution data is available and resolution is less than 300 DPI
                                                    $resolutionX = $exifData['XResolution'];
                                                    $resolutionY = $exifData['YResolution'];

                                                // Convert resolution to DPI
                                                    $dpiX = $resolutionX / 2.54; // 1 inch = 2.54 cm
                                                    $dpiY = $resolutionY / 2.54;


                                                $sizeInMegabytes = $exifData['FileSize'] / (1024 * 1024);
                                            } catch (Exception $e) {
                                                // Display error message if there's an error reading EXIF data
                                                //echo '<span class="badge badge-light-warning">En cours</span>';
                                            }
                                        @endphp

                                    @if ($exifData !== null )
                                        @if ( $participation->is_conforme == 0 && ($exifData['COMPUTED']['Width'] < 3000 || $exifData['COMPUTED']['Height'] < 3000) )
                                            <tr class="bg-warning min-w-50px rounded-start">
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Thumbnail-->
                                                        <a href="#" class="symbol symbol-50px m-3 image-modal-link" data-image-detail="{{ $participation->image }}" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">
                                                            <span class="symbol-label" style="background-image:url('storage/Thumbnails/{{ $participation->image }}');"></span>
                                                        </a>
                                                        <!--end::Thumbnail-->
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="row">
                                                        <div class="col-5">
                                                            <form id="AprouveeForm" action="{{ route('participation.confirmation') }}" method="POST">
                                                                @csrf
                                                                <input hidden type="text" name="id" value="{{$participation->id}}">
                                                                <input hidden type="text" name="is_conforme" value="1">
                                                                <button class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 me-2" type="submit">Approuvée</button>
                                                            </form>

                                                        </div>
                                                        <div class="col-4">
                                                            <form id="RejeteeForm" action="{{ route('participation.confirmation', $participation->id) }}" method="POST">
                                                                @csrf
                                                                <input hidden type="text" name="id" value="{{$participation->id}}">
                                                                <input hidden type="text" name="is_conforme" value="-1">
                                                                <button class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 me-2" type="submit">Rejetée</button>
                                                            </form>
                                                        </div>


                                                    </div>
                                                </td> 
                                                <td>
                                                    <a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$participation->title}}</a>
                                                </td>
                                                <td>
                                                    <a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$participation->description}}</a>
                                                </td>
                                                <td>
                                                    <a  class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$participation->categorie->name}}</a>
                                                </td>

                                                {{--<td>
                                                    
                                                    
                                                    <?php

                                                        try {
                                                            // Path to your image file
                                                            $imagePath = 'storage/'.$participation->image ;

                                                            // Read EXIF data from the image file
                                                            $exifData = exif_read_data($imagePath);
                                                            $sizeInMegabytes = $exifData['FileSize'] / (1024 * 1024);

                                                            if($participation->is_conforme == 1){

                                                                echo '<span class="badge badge-light-success">Approuvée</span>';
                                                            }

                                                            elseif($participation->is_conforme == 0 && $exifData['COMPUTED']['Width'] > 4000 || $exifData['COMPUTED']['Height'] > 4000 || round($sizeInMegabytes, 2) > 10) {

                                                            
                                                            echo '<span class="badge badge-light-warning">En cours</span>';

                                                            }elseif ($participation->is_conforme == -1) {
                                                                echo '<span class="badge badge-light-danger">Rejetée</span>';
                                                            }else {

                                                                echo '<span class="badge badge-light-success">Approuvée</span>';
                                                            }

                                                            // Display EXIF data
                                                        } catch (Exception $e) {
                                                            // Display error message if there's an error reading EXIF data
                                                            echo '<span class="badge badge-light-warning">En cours</span>';

                                                        }
                                                    ?>
                                                </td> --}}

                                                <td>
                                                    <a  class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">

                                                        <?php

                                                            try {
                                                                // Path to your image file
                                                                $imagePath = 'storage/'.$participation->image ;

                                                                // Read EXIF data from the image file
                                                                $exifData = exif_read_data($imagePath);

                                                                // Display EXIF data
                                                                echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">' . $exifData['Make'] . ' - ' . $exifData['Model'] . '</a>';
                                                            } catch (Exception $e) {
                                                                // Display error message if there's an error reading EXIF data
                                                                echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">NULL</a>';

                                                            }
                                                        ?>
                                                        
                                                    </a>
                                                </td>

                                                <td>
                                                    <a  class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">

                                                        <?php

                                                            try {
                                                                // Path to your image file
                                                                $imagePath = 'storage/'.$participation->image ;

                                                                // Read EXIF data from the image file
                                                                $exifData = exif_read_data($imagePath);

                                                                // Display EXIF data
                                                                echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">' . $exifData['COMPUTED']['Width'] ." / ". $exifData['COMPUTED']['Height']. '</a>';

                                                            } catch (Exception $e) {
                                                                // Display error message if there's an error reading EXIF data
                                                                echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">NULL</a>';
                                                            }
                                                        ?>
                                                        
                                                    </a>
                                                </td>
                                                <td>
                                                    <a  class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">

                                                        <?php

                                                            try {
                                                                // Path to your image file
                                                                $imagePath = 'storage/'.$participation->image ;

                                                                // Read EXIF data from the image file
                                                                $exifData = exif_read_data($imagePath);


                                                                $xResolution = explode('/', $exifData['XResolution'])[0];

                                                                $yResolution = explode('/', $exifData['YResolution'])[0];

                                                                if($xResolution < 300 || $yResolution <300){
                                                                    echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6 badge badge-danger">' . $xResolution ." / ". $yResolution. '</a>';

                                                                }else {
                                                                    echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6 ">' . $xResolution ." / ". $yResolution. '</a>';
                                                                }


                                                                // Display EXIF data

                                                            } catch (Exception $e) {
                                                                // Display error message if there's an error reading EXIF data
                                                                echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6 badge badge-danger">NULL</a>';
                                                            }
                                                        ?>
                                                        
                                                    </a>
                                                </td>
                                                <td>
                                                    <a  class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">

                                                        <?php

                                                            try {
                                                                // Path to your image file
                                                                $imagePath = 'storage/'.$participation->image ;

                                                                // Read EXIF data from the image file
                                                                $exifData = exif_read_data($imagePath);

                                                                $is_color = $exifData['COMPUTED']['IsColor'];

                                                                if ($is_color == 1) {
                                                                    echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">Colorisée</a>';
                                                                }else {
                                                                    echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">Décolorisée</a>';
                                                                }

                                                                // Display EXIF data


                                                            } catch (Exception $e) {
                                                                // Display error message if there's an error reading EXIF data
                                                                echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">NULL</a>';
                                                            }
                                                        ?>
                                                        
                                                    </a>
                                                </td>
                                                <td>
                                                    <a  class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">

                                                        <?php

                                                            try {
                                                                // Path to your image file
                                                                $imagePath = 'storage/'.$participation->image;

                                                                // Read EXIF data from the image file
                                                                $exifData = exif_read_data($imagePath);

                                                                // Convert bytes to megabytes
                                                                $sizeInMegabytes = $exifData['FileSize'] / (1024 * 1024);

                                                                if (round($sizeInMegabytes, 2) < 5) {
                                                                    echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6 badge badge-danger">' .round($sizeInMegabytes, 2). ' MB</a>';
                                                                }else {
                                                                    echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">' .round($sizeInMegabytes, 2). ' MB</a>';
                                                                }
                                                                // Display EXIF data

                                                            } catch (Exception $e) {
                                                                // Display error message if there's an error reading EXIF data
                                                                echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6 badge badge-danger">NULL</a>';
                                                            }
                                                        ?>
                                                        
                                                    </a>
                                                </td>

                                                <td>
                                                    <a  class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{date('d-m-Y', strtotime($participation->created_at));}}</a>
                                                </td>

                                            </tr>
                                        @elseif ($participation->is_conforme == 1)
                                            <tr class="bg-success min-w-50px rounded-start">
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Thumbnail-->
                                                        <a href="#" class="symbol symbol-50px m-3 image-modal-link" data-image-detail="{{ $participation->image }}" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">
                                                            <span class="symbol-label" style="background-image:url('storage/Thumbnails/{{ $participation->image }}');"></span>
                                                        </a>
                                                        <!--end::Thumbnail-->
                                                    </div>
                                                    
                                                </td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-5">
                                                            <form id="AprouveeForm" action="{{ route('participation.confirmation') }}" method="POST">
                                                                @csrf
                                                                <input hidden type="text" name="id" value="{{$participation->id}}">
                                                                <input hidden type="text" name="is_conforme" value="1">
                                                                <button class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 me-2" type="submit">Approuvée</button>
                                                            </form>
    
                                                        </div>
                                                        <div class="col-4">
                                                            <form id="RejeteeForm" action="{{ route('participation.confirmation', $participation->id) }}" method="POST">
                                                                @csrf
                                                                <input hidden type="text" name="id" value="{{$participation->id}}">
                                                                <input hidden type="text" name="is_conforme" value="-1">
                                                                <button class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 me-2" type="submit">Rejetée</button>
                                                            </form>
                                                        </div>
    
    
                                                    </div>
                                                </td> 
                                                <td>
                                                    <a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$participation->title}} </a>
                                                </td>
                                                <td>
                                                    <a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$participation->description}}</a>
                                                </td>
                                                <td>
                                                    <a  class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$participation->categorie->name}}</a>
                                                </td>

                                                {{--<td>
                                                    
                                                    
                                                    <?php

                                                        try {
                                                            // Path to your image file
                                                            $imagePath = 'storage/'.$participation->image ;

                                                            // Read EXIF data from the image file
                                                            $exifData = exif_read_data($imagePath);
                                                            $sizeInMegabytes = $exifData['FileSize'] / (1024 * 1024);

                                                            if($participation->is_conforme == 1){

                                                                echo '<span class="badge badge-light-success">Approuvée</span>';
                                                            }

                                                            elseif($participation->is_conforme == 0 && $exifData['COMPUTED']['Width'] > 4000 || $exifData['COMPUTED']['Height'] > 4000 || round($sizeInMegabytes, 2) > 10) {

                                                            
                                                            echo '<span class="badge badge-light-warning">En cours</span>';

                                                            }elseif ($participation->is_conforme == -1) {
                                                                echo '<span class="badge badge-light-danger">Rejetée</span>';
                                                            }else {

                                                                echo '<span class="badge badge-light-success">Approuvée</span>';
                                                            }

                                                            // Display EXIF data
                                                        } catch (Exception $e) {
                                                            // Display error message if there's an error reading EXIF data
                                                            echo '<span class="badge badge-light-warning">En cours</span>';

                                                        }
                                                    ?>
                                                </td> --}}

                                                <td>
                                                    <a  class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">

                                                        <?php

                                                            try {
                                                                // Path to your image file
                                                                $imagePath = 'storage/'.$participation->image ;

                                                                // Read EXIF data from the image file
                                                                $exifData = exif_read_data($imagePath);

                                                                // Display EXIF data
                                                                echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">' . $exifData['Make'] . ' - ' . $exifData['Model'] . '</a>';
                                                            } catch (Exception $e) {
                                                                // Display error message if there's an error reading EXIF data
                                                                echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">NULL</a>';

                                                            }
                                                        ?>
                                                        
                                                    </a>
                                                </td>

                                                <td>
                                                    <a  class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">

                                                        <?php

                                                            try {
                                                                // Path to your image file
                                                                $imagePath = 'storage/'.$participation->image ;

                                                                // Read EXIF data from the image file
                                                                $exifData = exif_read_data($imagePath);

                                                                // Display EXIF data
                                                                echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">' . $exifData['COMPUTED']['Width'] ." / ". $exifData['COMPUTED']['Height']. '</a>';

                                                            } catch (Exception $e) {
                                                                // Display error message if there's an error reading EXIF data
                                                                echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">NULL</a>';
                                                            }
                                                        ?>
                                                        
                                                    </a>
                                                </td>
                                                <td>
                                                    <a  class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">

                                                        <?php

                                                            try {
                                                                // Path to your image file
                                                                $imagePath = 'storage/'.$participation->image ;

                                                                // Read EXIF data from the image file
                                                                $exifData = exif_read_data($imagePath);


                                                                $xResolution = explode('/', $exifData['XResolution'])[0];

                                                                $yResolution = explode('/', $exifData['YResolution'])[0];

                                                                if($xResolution < 300 || $yResolution <300){
                                                                    echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6 badge badge-danger">' . $xResolution ." / ". $yResolution. '</a>';

                                                                }else {
                                                                    echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6 ">' . $xResolution ." / ". $yResolution. '</a>';
                                                                }

                                                            } catch (Exception $e) {
                                                                // Display error message if there's an error reading EXIF data
                                                                echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6 badge badge-danger">NULL</a>';
                                                            }
                                                        ?>
                                                        
                                                    </a>
                                                </td>
                                                <td>
                                                    <a  class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">

                                                        <?php

                                                            try {
                                                                // Path to your image file
                                                                $imagePath = 'storage/'.$participation->image ;

                                                                // Read EXIF data from the image file
                                                                $exifData = exif_read_data($imagePath);

                                                                $is_color = $exifData['COMPUTED']['IsColor'];

                                                                if ($is_color == 1) {
                                                                    echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">Colorisée</a>';
                                                                }else {
                                                                    echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">Décolorisée</a>';
                                                                }

                                                            } catch (Exception $e) {
                                                                // Display error message if there's an error reading EXIF data
                                                                echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">NULL</a>';
                                                            }
                                                        ?>
                                                        
                                                    </a>
                                                </td>
                                                <td>
                                                    <a  class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">

                                                        <?php

                                                            try {
                                                                // Path to your image file
                                                                $imagePath = 'storage/'.$participation->image;

                                                                // Read EXIF data from the image file
                                                                $exifData = exif_read_data($imagePath);

                                                                // Convert bytes to megabytes
                                                                $sizeInMegabytes = $exifData['FileSize'] / (1024 * 1024);


                                                                if (round($sizeInMegabytes, 2) < 5) {
                                                                    echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6 badge badge-danger">' .round($sizeInMegabytes, 2). ' MB</a>';
                                                                }else {
                                                                    echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">' .round($sizeInMegabytes, 2). ' MB</a>';
                                                                }
                                                            } catch (Exception $e) {
                                                                // Display error message if there's an error reading EXIF data
                                                                echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6 badge badge-danger">NULL</a>';
                                                            }
                                                        ?>
                                                        
                                                    </a>
                                                </td>

                                                <td>
                                                    <a  class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{date('d-m-Y', strtotime($participation->created_at));}}</a>
                                                </td>

                                            </tr>
                                        @elseif($participation->is_conforme == -1)
                                            <tr class="bg-danger min-w-50px rounded-start">
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Thumbnail-->
                                                        <a href="#" class="symbol symbol-50px m-3 image-modal-link" data-image-detail="{{ $participation->image }}" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">
                                                            <span class="symbol-label" style="background-image:url('storage/Thumbnails/{{ $participation->image }}');"></span>
                                                        </a>
                                                        <!--end::Thumbnail-->
                                                    </div>
                                                    
                                                </td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-5">
                                                            <form id="AprouveeForm" action="{{ route('participation.confirmation') }}" method="POST">
                                                                @csrf
                                                                <input hidden type="text" name="id" value="{{$participation->id}}">
                                                                <input hidden type="text" name="is_conforme" value="1">
                                                                <button class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 me-2" type="submit">Approuvée</button>
                                                            </form>

                                                        </div>
                                                        <div class="col-4">
                                                            <form id="RejeteeForm" action="{{ route('participation.confirmation', $participation->id) }}" method="POST">
                                                                @csrf
                                                                <input hidden type="text" name="id" value="{{$participation->id}}">
                                                                <input hidden type="text" name="is_conforme" value="-1">
                                                                <button class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 me-2" type="submit">Rejetée</button>
                                                            </form>
                                                        </div>


                                                    </div>
                                                </td> 
                                                <td>
                                                    <a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$participation->title}}</a>
                                                </td>
                                                <td>
                                                    <a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$participation->description}}</a>
                                                </td>
                                                <td>
                                                    <a  class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$participation->categorie->name}}</a>
                                                </td>

                                                {{--<td>
                                                    
                                                    
                                                    <?php

                                                        try {
                                                            // Path to your image file
                                                            $imagePath = 'storage/'.$participation->image ;

                                                            // Read EXIF data from the image file
                                                            $exifData = exif_read_data($imagePath);
                                                            $sizeInMegabytes = $exifData['FileSize'] / (1024 * 1024);

                                                            if($participation->is_conforme == 1){

                                                                echo '<span class="badge badge-light-success">Approuvée</span>';
                                                            }

                                                            elseif($participation->is_conforme == 0 && $exifData['COMPUTED']['Width'] > 4000 || $exifData['COMPUTED']['Height'] > 4000 || round($sizeInMegabytes, 2) > 10) {

                                                            
                                                            echo '<span class="badge badge-light-warning">En cours</span>';

                                                            }elseif ($participation->is_conforme == -1) {
                                                                echo '<span class="badge badge-light-danger">Rejetée</span>';
                                                            }else {

                                                                echo '<span class="badge badge-light-success">Approuvée</span>';
                                                            }

                                                            // Display EXIF data
                                                        } catch (Exception $e) {
                                                            // Display error message if there's an error reading EXIF data
                                                            echo '<span class="badge badge-light-warning">En cours</span>';

                                                        }
                                                    ?>
                                                </td> --}}

                                                <td>
                                                    <a  class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">

                                                        <?php

                                                            try {
                                                                // Path to your image file
                                                                $imagePath = 'storage/'.$participation->image ;

                                                                // Read EXIF data from the image file
                                                                $exifData = exif_read_data($imagePath);

                                                                // Display EXIF data
                                                                echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">' . $exifData['Make'] . ' - ' . $exifData['Model'] . '</a>';
                                                            } catch (Exception $e) {
                                                                // Display error message if there's an error reading EXIF data
                                                                echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">NULL</a>';

                                                            }
                                                        ?>
                                                        
                                                    </a>
                                                </td>

                                                <td>
                                                    <a  class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">

                                                        <?php

                                                            try {
                                                                // Path to your image file
                                                                $imagePath = 'storage/'.$participation->image ;

                                                                // Read EXIF data from the image file
                                                                $exifData = exif_read_data($imagePath);

                                                                // Display EXIF data
                                                                echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">' . $exifData['COMPUTED']['Width'] ." / ". $exifData['COMPUTED']['Height']. '</a>';

                                                            } catch (Exception $e) {
                                                                // Display error message if there's an error reading EXIF data
                                                                echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">NULL</a>';
                                                            }
                                                        ?>
                                                        
                                                    </a>
                                                </td>
                                                <td>
                                                    <a  class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">

                                                        <?php

                                                            try {
                                                                // Path to your image file
                                                                $imagePath = 'storage/'.$participation->image ;

                                                                // Read EXIF data from the image file
                                                                $exifData = exif_read_data($imagePath);

                                                                // Display EXIF data
                                                                echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">' . $exifData['XResolution'] ." - ". $exifData['YResolution']. '</a>';

                                                            } catch (Exception $e) {
                                                                // Display error message if there's an error reading EXIF data
                                                                echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">NULL</a>';
                                                            }
                                                        ?>
                                                        
                                                    </a>
                                                </td>
                                                <td>
                                                    <a  class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">

                                                        <?php

                                                            try {
                                                                // Path to your image file
                                                                $imagePath = 'storage/'.$participation->image ;

                                                                // Read EXIF data from the image file
                                                                $exifData = exif_read_data($imagePath);


                                                                $is_color = $exifData['COMPUTED']['IsColor'];

                                                                if ($is_color == 1) {
                                                                    echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">Colorisée</a>';
                                                                }else {
                                                                    echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">Décolorisée</a>';
                                                                }

                                                            } catch (Exception $e) {
                                                                // Display error message if there's an error reading EXIF data
                                                                echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">NULL</a>';
                                                            }
                                                        ?>
                                                        
                                                    </a>
                                                </td>
                                                <td>
                                                    <a  class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">

                                                        <?php

                                                            try {
                                                                // Path to your image file
                                                                $imagePath = 'storage/'.$participation->image;

                                                                // Read EXIF data from the image file
                                                                $exifData = exif_read_data($imagePath);

                                                                // Convert bytes to megabytes
                                                                $sizeInMegabytes = $exifData['FileSize'] / (1024 * 1024);

                                                                // Display EXIF data
                                                                echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">' .round($sizeInMegabytes, 2). ' MB</a>';

                                                            } catch (Exception $e) {
                                                                // Display error message if there's an error reading EXIF data
                                                                echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">NULL</a>';
                                                            }
                                                        ?>
                                                        
                                                    </a>
                                                </td>

                                                <td>
                                                    <a  class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{date('d-m-Y', strtotime($participation->created_at));}}</a>
                                                </td>


                                            </tr>
                                        @else
                                            <tr class="min-w-50px rounded-start">
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Thumbnail-->
                                                        <a href="#" class="symbol symbol-50px m-3 image-modal-link" data-image-detail="{{ $participation->image }}" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">
                                                            <span class="symbol-label" style="background-image:url('storage/Thumbnails/{{ $participation->image }}');"></span>
                                                        </a>
                                                        <!--end::Thumbnail-->
                                                    </div>
                                                    
                                                </td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-5">
                                                            <form id="AprouveeForm" action="{{ route('participation.confirmation') }}" method="POST">
                                                                @csrf
                                                                <input hidden type="text" name="id" value="{{$participation->id}}">
                                                                <input hidden type="text" name="is_conforme" value="1">
                                                                <button class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 me-2" type="submit">Approuvée</button>
                                                            </form>

                                                        </div>
                                                        <div class="col-4">
                                                            <form id="RejeteeForm" action="{{ route('participation.confirmation', $participation->id) }}" method="POST">
                                                                @csrf
                                                                <input hidden type="text" name="id" value="{{$participation->id}}">
                                                                <input hidden type="text" name="is_conforme" value="-1">
                                                                <button class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 me-2" type="submit">Rejetée</button>
                                                            </form>
                                                        </div>


                                                    </div>
                                                </td> 
                                                <td>
                                                    <a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$participation->title}}</a>
                                                </td>
                                                <td>
                                                    <a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$participation->description}}</a>
                                                </td>
                                                <td>
                                                    <a  class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$participation->categorie->name}}</a>
                                                </td>
                                                {{--<td>
                                                    
                                                    
                                                    <?php

                                                        try {
                                                            // Path to your image file
                                                            $imagePath = 'storage/'.$participation->image ;

                                                            // Read EXIF data from the image file
                                                            $exifData = exif_read_data($imagePath);
                                                            $sizeInMegabytes = $exifData['FileSize'] / (1024 * 1024);

                                                            if($participation->is_conforme == 1){

                                                                echo '<span class="badge badge-light-success">Approuvée</span>';
                                                            }

                                                            elseif($participation->is_conforme == 0 && $exifData['COMPUTED']['Width'] > 4000 || $exifData['COMPUTED']['Height'] > 4000 || round($sizeInMegabytes, 2) > 10) {

                                                            
                                                            echo '<span class="badge badge-light-warning">En cours</span>';

                                                            }elseif ($participation->is_conforme == -1) {
                                                                echo '<span class="badge badge-light-danger">Rejetée</span>';
                                                            }else {

                                                                echo '<span class="badge badge-light-success">Approuvée</span>';
                                                            }

                                                            // Display EXIF data
                                                        } catch (Exception $e) {
                                                            // Display error message if there's an error reading EXIF data
                                                            echo '<span class="badge badge-light-warning">En cours</span>';

                                                        }
                                                    ?>
                                                </td> --}}
                                                <td>
                                                    <a  class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">

                                                        <?php

                                                            try {
                                                                // Path to your image file
                                                                $imagePath = 'storage/'.$participation->image ;

                                                                // Read EXIF data from the image file
                                                                $exifData = exif_read_data($imagePath);

                                                                // Display EXIF data
                                                                echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">' . $exifData['Make'] . ' - ' . $exifData['Model'] . '</a>';
                                                            } catch (Exception $e) {
                                                                // Display error message if there's an error reading EXIF data
                                                                echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">NULL</a>';

                                                            }
                                                        ?>
                                                        
                                                    </a>
                                                </td>
                                                <td>
                                                    <a  class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">

                                                        <?php

                                                            try {
                                                                // Path to your image file
                                                                $imagePath = 'storage/'.$participation->image ;

                                                                // Read EXIF data from the image file
                                                                $exifData = exif_read_data($imagePath);

                                                                // Display EXIF data
                                                                echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">' . $exifData['COMPUTED']['Width'] ." / ". $exifData['COMPUTED']['Height']. '</a>';

                                                            } catch (Exception $e) {
                                                                // Display error message if there's an error reading EXIF data
                                                                echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">NULL</a>';
                                                            }
                                                        ?>
                                                        
                                                    </a>
                                                </td>
                                                <td>
                                                    <a  class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">

                                                        <?php

                                                            try {
                                                                // Path to your image file
                                                                $imagePath = 'storage/'.$participation->image ;

                                                                // Read EXIF data from the image file
                                                                $exifData = exif_read_data($imagePath);


                                                                $xResolution = explode('/', $exifData['XResolution'])[0];

                                                                $yResolution = explode('/', $exifData['YResolution'])[0];

                                                                if($xResolution < 300 || $yResolution <300){
                                                                    echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6 badge badge-danger">' . $xResolution ." / ". $yResolution. '</a>';

                                                                }else {
                                                                    echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6 ">' . $xResolution ." / ". $yResolution. '</a>';
                                                                }

                                                            } catch (Exception $e) {
                                                                // Display error message if there's an error reading EXIF data
                                                                echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6 badge badge-danger">NULL</a>';
                                                            }
                                                        ?>
                                                        
                                                    </a>
                                                </td>
                                                <td>
                                                    <a  class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">

                                                        <?php

                                                            try {
                                                                // Path to your image file
                                                                $imagePath = 'storage/'.$participation->image ;

                                                                // Read EXIF data from the image file
                                                                $exifData = exif_read_data($imagePath);

 
                                                                $is_color = $exifData['COMPUTED']['IsColor'];

                                                                if ($is_color == 1) {
                                                                    echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">Colorisée</a>';
                                                                }else {
                                                                    echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">Décolorisée</a>';
                                                                }
                                                                
                                                            } catch (Exception $e) {
                                                                // Display error message if there's an error reading EXIF data
                                                                echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">NULL</a>';
                                                            }
                                                        ?>
                                                        
                                                    </a>
                                                </td>
                                                <td>
                                                    <a  class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">

                                                        <?php

                                                            try {
                                                                // Path to your image file
                                                                $imagePath = 'storage/'.$participation->image;

                                                                // Read EXIF data from the image file
                                                                $exifData = exif_read_data($imagePath);

                                                                // Convert bytes to megabytes
                                                                $sizeInMegabytes = $exifData['FileSize'] / (1024 * 1024);

                                                                if (round($sizeInMegabytes, 2) < 5) {
                                                                    echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6 badge badge-danger">' .round($sizeInMegabytes, 2). ' MB</a>';
                                                                }else {
                                                                    echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">' .round($sizeInMegabytes, 2). ' MB</a>';
                                                                }

                                                            } catch (Exception $e) {
                                                                // Display error message if there's an error reading EXIF data
                                                                echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6 badge badge-danger">NULL</a>';
                                                            }
                                                        ?>
                                                        
                                                    </a>
                                                </td>

                                                <td>
                                                    <a  class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{date('d-m-Y', strtotime($participation->created_at));}}</a>
                                                </td>

 
                                            </tr>
                                        @endif
                                    @elseif ($participation->is_conforme == 1)
                                        <tr class="bg-success min-w-50px rounded-start">
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Thumbnail-->
                                                    <a href="#" class="symbol symbol-50px m-3 image-modal-link" data-image-detail="{{ $participation->image }}" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">
                                                        <span class="symbol-label" style="background-image:url('storage/Thumbnails/{{ $participation->image }}');"></span>
                                                    </a>
                                                    <!--end::Thumbnail-->
                                                </div>
                                                
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-5">
                                                        <form id="AprouveeForm" action="{{ route('participation.confirmation') }}" method="POST">
                                                            @csrf
                                                            <input hidden type="text" name="id" value="{{$participation->id}}">
                                                            <input hidden type="text" name="is_conforme" value="1">
                                                            <button class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 me-2" type="submit">Approuvée</button>
                                                        </form>

                                                    </div>
                                                    <div class="col-4">
                                                        <form id="RejeteeForm" action="{{ route('participation.confirmation', $participation->id) }}" method="POST">
                                                            @csrf
                                                            <input hidden type="text" name="id" value="{{$participation->id}}">
                                                            <input hidden type="text" name="is_conforme" value="-1">
                                                            <button class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 me-2" type="submit">Rejetée</button>
                                                        </form>
                                                    </div>


                                                </div>
                                            </td> 
                                            <td>
                                                <a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$participation->title}}</a>
                                            </td>
                                            <td>
                                                <a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$participation->description}}</a>
                                            </td>
                                            <td>
                                                <a  class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$participation->categorie->name}}</a>
                                            </td>

                                            {{--<td>
                                                
                                                
                                                <?php

                                                    try {
                                                        // Path to your image file
                                                        $imagePath = 'storage/'.$participation->image ;

                                                        // Read EXIF data from the image file
                                                        $exifData = exif_read_data($imagePath);
                                                        $sizeInMegabytes = $exifData['FileSize'] / (1024 * 1024);

                                                        if($participation->is_conforme == 1){

                                                            echo '<span class="badge badge-light-success">Approuvée</span>';
                                                        }

                                                        elseif($participation->is_conforme == 0 && $exifData['COMPUTED']['Width'] > 4000 || $exifData['COMPUTED']['Height'] > 4000 || round($sizeInMegabytes, 2) > 10) {

                                                        
                                                        echo '<span class="badge badge-light-warning">En cours</span>';

                                                        }elseif ($participation->is_conforme == -1) {
                                                            echo '<span class="badge badge-light-danger">Rejetée</span>';
                                                        }else {

                                                            echo '<span class="badge badge-light-success">Approuvée</span>';
                                                        }

                                                        // Display EXIF data
                                                    } catch (Exception $e) {
                                                        // Display error message if there's an error reading EXIF data
                                                        echo '<span class="badge badge-light-warning">En cours</span>';

                                                    }
                                                ?>
                                            </td> --}}

                                            <td>
                                                <a  class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">

                                                    <?php

                                                        try {
                                                            // Path to your image file
                                                            $imagePath = 'storage/'.$participation->image ;

                                                            // Read EXIF data from the image file
                                                            $exifData = exif_read_data($imagePath);

                                                            // Display EXIF data
                                                            echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">' . $exifData['Make'] . ' - ' . $exifData['Model'] . '</a>';
                                                        } catch (Exception $e) {
                                                            // Display error message if there's an error reading EXIF data
                                                            echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">NULL</a>';

                                                        }
                                                    ?>
                                                    
                                                </a>
                                            </td>

                                            <td>
                                                <a  class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">

                                                    <?php

                                                        try {
                                                            // Path to your image file
                                                            $imagePath = 'storage/'.$participation->image ;

                                                            // Read EXIF data from the image file
                                                            $exifData = exif_read_data($imagePath);

                                                            // Display EXIF data
                                                            echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">' . $exifData['COMPUTED']['Width'] ." / ". $exifData['COMPUTED']['Height']. '</a>';

                                                        } catch (Exception $e) {
                                                            // Display error message if there's an error reading EXIF data
                                                            echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">NULL</a>';
                                                        }
                                                    ?>
                                                    
                                                </a>
                                            </td>
                                            <td>
                                                <a  class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">

                                                    <?php

                                                        try {
                                                            // Path to your image file
                                                            $imagePath = 'storage/'.$participation->image ;

                                                            // Read EXIF data from the image file
                                                            $exifData = exif_read_data($imagePath);

                                                            $xResolution = explode('/', $exifData['XResolution'])[0];

                                                            $yResolution = explode('/', $exifData['YResolution'])[0];

                                                            if($xResolution < 300 || $yResolution < 300){
                                                                echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6 badge badge-danger">' . $xResolution ." / ". $yResolution. '</a>';

                                                            }else {
                                                                echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6 ">' . $xResolution ." / ". $yResolution. '</a>';
                                                            }
                                                        } catch (Exception $e) {
                                                            // Display error message if there's an error reading EXIF data
                                                            echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6 badge badge-danger">NULL</a>';
                                                        }
                                                    ?>
                                                    
                                                </a>
                                            </td>
                                            <td>
                                                <a  class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">

                                                    <?php

                                                        try {
                                                            // Path to your image file
                                                            $imagePath = 'storage/'.$participation->image ;

                                                            // Read EXIF data from the image file
                                                            $exifData = exif_read_data($imagePath);


                                                            $is_color = $exifData['COMPUTED']['IsColor'];

                                                            if ($is_color == 1) {
                                                                echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">Colorisée</a>';
                                                            }else {
                                                                echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">Décolorisée</a>';
                                                            }
                                                            
                                                        } catch (Exception $e) {
                                                            // Display error message if there's an error reading EXIF data
                                                            echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">NULL</a>';
                                                        }
                                                    ?>
                                                    
                                                </a>
                                            </td>
                                            <td>
                                                <a  class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">

                                                    <?php

                                                        try {
                                                            // Path to your image file
                                                            $imagePath = 'storage/'.$participation->image;

                                                            // Read EXIF data from the image file
                                                            $exifData = exif_read_data($imagePath);

                                                            // Convert bytes to megabytes
                                                            $sizeInMegabytes = $exifData['FileSize'] / (1024 * 1024);


                                                            if (round($sizeInMegabytes, 2) < 5) {
                                                                echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6 badge badge-danger">' .round($sizeInMegabytes, 2). ' MB</a>';
                                                            }else {
                                                                echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">' .round($sizeInMegabytes, 2). ' MB</a>';
                                                            }
                                                        } catch (Exception $e) {
                                                            // Display error message if there's an error reading EXIF data
                                                            echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6 badge badge-danger">NULL</a>';
                                                        }
                                                    ?>
                                                    
                                                </a>
                                            </td>

                                            <td>
                                                <a  class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{date('d-m-Y', strtotime($participation->created_at));}}</a>
                                            </td>


                                        </tr>
                                    @elseif($participation->is_conforme == -1)
                                        <tr class="bg-danger min-w-50px rounded-start">
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Thumbnail-->
                                                    <a href="#" class="symbol symbol-50px m-3 image-modal-link" data-image-detail="{{ $participation->image }}" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">
                                                        <span class="symbol-label" style="background-image:url('storage/Thumbnails/{{ $participation->image }}');"></span>
                                                    </a>
                                                    <!--end::Thumbnail-->
                                                </div>
                                                
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-5">
                                                        <form id="AprouveeForm" action="{{ route('participation.confirmation') }}" method="POST">
                                                            @csrf
                                                            <input hidden type="text" name="id" value="{{$participation->id}}">
                                                            <input hidden type="text" name="is_conforme" value="1">
                                                            <button class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 me-2" type="submit">Approuvée</button>
                                                        </form>

                                                    </div>
                                                    <div class="col-4">
                                                        <form id="RejeteeForm" action="{{ route('participation.confirmation', $participation->id) }}" method="POST">
                                                            @csrf
                                                            <input hidden type="text" name="id" value="{{$participation->id}}">
                                                            <input hidden type="text" name="is_conforme" value="-1">
                                                            <button class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 me-2" type="submit">Rejetée</button>
                                                        </form>
                                                    </div>


                                                </div>
                                            </td> 
                                            <td>
                                                <a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$participation->title}}</a>
                                            </td>
                                            <td>
                                                <a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$participation->description}}</a>
                                            </td>
                                            <td>
                                                <a  class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$participation->categorie->name}}</a>
                                            </td>

                                            {{--<td>
                                                
                                                
                                                <?php

                                                    try {
                                                        // Path to your image file
                                                        $imagePath = 'storage/'.$participation->image ;

                                                        // Read EXIF data from the image file
                                                        $exifData = exif_read_data($imagePath);
                                                        $sizeInMegabytes = $exifData['FileSize'] / (1024 * 1024);

                                                        if($participation->is_conforme == 1){

                                                            echo '<span class="badge badge-light-success">Approuvée</span>';
                                                        }

                                                        elseif($participation->is_conforme == 0 && $exifData['COMPUTED']['Width'] > 4000 || $exifData['COMPUTED']['Height'] > 4000 || round($sizeInMegabytes, 2) > 10) {

                                                        
                                                        echo '<span class="badge badge-light-warning">En cours</span>';

                                                        }elseif ($participation->is_conforme == -1) {
                                                            echo '<span class="badge badge-light-danger">Rejetée</span>';
                                                        }else {

                                                            echo '<span class="badge badge-light-success">Approuvée</span>';
                                                        }

                                                        // Display EXIF data
                                                    } catch (Exception $e) {
                                                        // Display error message if there's an error reading EXIF data
                                                        echo '<span class="badge badge-light-warning">En cours</span>';

                                                    }
                                                ?>
                                            </td> --}}

                                            <td>
                                                <a  class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">

                                                    <?php

                                                        try {
                                                            // Path to your image file
                                                            $imagePath = 'storage/'.$participation->image ;

                                                            // Read EXIF data from the image file
                                                            $exifData = exif_read_data($imagePath);

                                                            // Display EXIF data
                                                            echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">' . $exifData['Make'] . ' - ' . $exifData['Model'] . '</a>';
                                                        } catch (Exception $e) {
                                                            // Display error message if there's an error reading EXIF data
                                                            echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">NULL</a>';

                                                        }
                                                    ?>
                                                    
                                                </a>
                                            </td>

                                            <td>
                                                <a  class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">

                                                    <?php

                                                        try {
                                                            // Path to your image file
                                                            $imagePath = 'storage/'.$participation->image ;

                                                            // Read EXIF data from the image file
                                                            $exifData = exif_read_data($imagePath);

                                                            // Display EXIF data
                                                            echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">' . $exifData['COMPUTED']['Width'] ." / ". $exifData['COMPUTED']['Height']. '</a>';

                                                        } catch (Exception $e) {
                                                            // Display error message if there's an error reading EXIF data
                                                            echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">NULL</a>';
                                                        }
                                                    ?>
                                                    
                                                </a>
                                            </td>
                                            <td>
                                                <a  class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">

                                                    <?php

                                                        try {
                                                            // Path to your image file
                                                            $imagePath = 'storage/'.$participation->image ;

                                                            // Read EXIF data from the image file
                                                            $exifData = exif_read_data($imagePath);

                                                            $xResolution = explode('/', $exifData['XResolution'])[0];

                                                            $yResolution = explode('/', $exifData['YResolution'])[0];

                                                            if($xResolution < 300 || $yResolution <300){
                                                                echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6 badge badge-danger">' . $xResolution ." / ". $yResolution. '</a>';

                                                            }else {
                                                                echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6 ">' . $xResolution ." / ". $yResolution. '</a>';
                                                            }

                                                        } catch (Exception $e) {
                                                            // Display error message if there's an error reading EXIF data
                                                            echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6 badge badge-danger">NULL</a>';
                                                        }
                                                    ?>
                                                    
                                                </a>
                                            </td>
                                            <td>
                                                <a  class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">

                                                    <?php

                                                        try {
                                                            // Path to your image file
                                                            $imagePath = 'storage/'.$participation->image ;

                                                            // Read EXIF data from the image file
                                                            $exifData = exif_read_data($imagePath);


                                                            $is_color = $exifData['COMPUTED']['IsColor'];

                                                            if ($is_color == 1) {
                                                                echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">Colorisée</a>';
                                                            }else {
                                                                echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">Décolorisée</a>';
                                                            }

                                                        } catch (Exception $e) {
                                                            // Display error message if there's an error reading EXIF data
                                                            echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">NULL</a>';
                                                        }
                                                    ?>
                                                    
                                                </a>
                                            </td>
                                            <td>
                                                <a  class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">

                                                    <?php

                                                        try {
                                                            // Path to your image file
                                                            $imagePath = 'storage/'.$participation->image;

                                                            // Read EXIF data from the image file
                                                            $exifData = exif_read_data($imagePath);

                                                            // Convert bytes to megabytes
                                                            $sizeInMegabytes = $exifData['FileSize'] / (1024 * 1024);

                                                            if (round($sizeInMegabytes, 2) < 5) {
                                                                echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6 badge badge-danger">' .round($sizeInMegabytes, 2). ' MB</a>';
                                                            }else {
                                                                echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">' .round($sizeInMegabytes, 2). ' MB</a>';
                                                            }
                                                        } catch (Exception $e) {
                                                            // Display error message if there's an error reading EXIF data
                                                            echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6 badge badge-danger">NULL</a>';
                                                        }
                                                    ?>
                                                    
                                                </a>
                                            </td>

                                            <td>
                                                <a  class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{date('d-m-Y', strtotime($participation->created_at));}}</a>
                                            </td>


                                        </tr>
                                    @else
                                        <tr class="min-w-50px rounded-start">
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Thumbnail-->
                                                    <a href="#" class="symbol symbol-50px m-3 image-modal-link" data-image-detail="{{ $participation->image }}" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">
                                                        <span class="symbol-label" style="background-image:url('storage/Thumbnails/{{ $participation->image }}');"></span>
                                                    </a>
                                                    <!--end::Thumbnail-->
                                                </div>
                                                
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-5">
                                                        <form id="AprouveeForm" action="{{ route('participation.confirmation') }}" method="POST">
                                                            @csrf
                                                            <input hidden type="text" name="id" value="{{$participation->id}}">
                                                            <input hidden type="text" name="is_conforme" value="1">
                                                            <button class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 me-2" type="submit">Approuvée</button>
                                                        </form>

                                                    </div>
                                                    <div class="col-4">
                                                        <form id="RejeteeForm" action="{{ route('participation.confirmation', $participation->id) }}" method="POST">
                                                            @csrf
                                                            <input hidden type="text" name="id" value="{{$participation->id}}">
                                                            <input hidden type="text" name="is_conforme" value="-1">
                                                            <button class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 me-2" type="submit">Rejetée</button>
                                                        </form>
                                                    </div>


                                                </div>
                                            </td> 

                                            <td>
                                                <a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$participation->title}}</a>
                                            </td>
                                            <td>
                                                <a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$participation->description}}</a>
                                            </td>
                                            <td>
                                                <a  class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$participation->categorie->name}}</a>
                                            </td>

                                            {{--<td>
                                                
                                                
                                                <?php

                                                    try {
                                                        // Path to your image file
                                                        $imagePath = 'storage/'.$participation->image ;

                                                        // Read EXIF data from the image file
                                                        $exifData = exif_read_data($imagePath);
                                                        $sizeInMegabytes = $exifData['FileSize'] / (1024 * 1024);

                                                        if($participation->is_conforme == 1){

                                                            echo '<span class="badge badge-light-success">Approuvée</span>';
                                                        }

                                                        elseif($participation->is_conforme == 0 && $exifData['COMPUTED']['Width'] > 4000 || $exifData['COMPUTED']['Height'] > 4000 || round($sizeInMegabytes, 2) > 10) {

                                                        
                                                        echo '<span class="badge badge-light-warning">En cours</span>';

                                                        }elseif ($participation->is_conforme == -1) {
                                                            echo '<span class="badge badge-light-danger">Rejetée</span>';
                                                        }else {

                                                            echo '<span class="badge badge-light-success">Approuvée</span>';
                                                        }

                                                        // Display EXIF data
                                                    } catch (Exception $e) {
                                                        // Display error message if there's an error reading EXIF data
                                                        echo '<span class="badge badge-light-warning">En cours</span>';

                                                    }
                                                ?>
                                            </td> --}}

                                            <td>
                                                <a  class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">

                                                    <?php

                                                        try {
                                                            // Path to your image file
                                                            $imagePath = 'storage/'.$participation->image ;

                                                            // Read EXIF data from the image file
                                                            $exifData = exif_read_data($imagePath);

                                                            // Display EXIF data
                                                            echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">' . $exifData['Make'] . ' - ' . $exifData['Model'] . '</a>';
                                                        } catch (Exception $e) {
                                                            // Display error message if there's an error reading EXIF data
                                                            echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">NULL</a>';

                                                        }
                                                    ?>
                                                    
                                                </a>
                                            </td>

                                            <td>
                                                <a  class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">

                                                    <?php

                                                        try {
                                                            // Path to your image file
                                                            $imagePath = 'storage/'.$participation->image ;

                                                            // Read EXIF data from the image file
                                                            $exifData = exif_read_data($imagePath);

                                                            // Display EXIF data
                                                            echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">' . $exifData['COMPUTED']['Width'] ." / ". $exifData['COMPUTED']['Height']. '</a>';

                                                        } catch (Exception $e) {
                                                            // Display error message if there's an error reading EXIF data
                                                            echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">NULL</a>';
                                                        }
                                                    ?>
                                                    
                                                </a>
                                            </td>
                                            <td>
                                                <a  class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">

                                                    <?php

                                                        try {
                                                            // Path to your image file
                                                            $imagePath = 'storage/'.$participation->image ;

                                                            // Read EXIF data from the image file
                                                            $exifData = exif_read_data($imagePath);

                                                            $xResolution = explode('/', $exifData['XResolution'])[0];

                                                            $yResolution = explode('/', $exifData['YResolution'])[0];

                                                            

                                                            if($xResolution < 300 || $yResolution < 300){
                                                                echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6 badge badge-danger">' . $xResolution ." / ". $yResolution. '</a>';

                                                            }else {
                                                                echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6 ">' . $xResolution ." / ". $yResolution. '</a>';
                                                            }

                                                        } catch (Exception $e) {
                                                            // Display error message if there's an error reading EXIF data
                                                            echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6 badge badge-danger">NULL</a>';
                                                        }
                                                    ?>
                                                    
                                                </a>
                                            </td>
                                            <td>
                                                <a  class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">

                                                    <?php

                                                        try {
                                                            // Path to your image file
                                                            $imagePath = 'storage/'.$participation->image ;

                                                            // Read EXIF data from the image file
                                                            $exifData = exif_read_data($imagePath);

                                                            // Display EXIF data
                                                            echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">' .$exifData['COMPUTED']['IsColor']. '</a>';


                                                        } catch (Exception $e) {
                                                            // Display error message if there's an error reading EXIF data
                                                            echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">NULL</a>';
                                                        }
                                                    ?>
                                                    
                                                </a>
                                            </td>
                                            <td>
                                                <a  class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">

                                                    <?php

                                                        try {
                                                            // Path to your image file
                                                            $imagePath = 'storage/'.$participation->image;

                                                            // Read EXIF data from the image file
                                                            $exifData = exif_read_data($imagePath);

                                                            // Convert bytes to megabytes
                                                            $sizeInMegabytes = $exifData['FileSize'] / (1024 * 1024);

                                                            if (round($sizeInMegabytes, 2) < 5) {
                                                                echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6 badge badge-danger">' .round($sizeInMegabytes, 2). ' MB</a>';
                                                            }else {
                                                                echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">' .round($sizeInMegabytes, 2). ' MB</a>';
                                                            }
                                                        } catch (Exception $e) {
                                                            // Display error message if there's an error reading EXIF data
                                                            echo '<a class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6 badge badge-danger">NULL</a>';
                                                        }
                                                    ?>
                                                    
                                                </a>
                                            </td>

                                            <td>
                                                <a  class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{date('d-m-Y', strtotime($participation->created_at));}}</a>
                                            </td>


                                        </tr>
                                    @endif
                                    

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


    	<!--begin::Modal - View Users-->
		<div class="modal fade" id="kt_modal_view_users" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog mw-650px">
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
							<h1 class="mb-3">Exif Data</h1>
							<!--end::Title-->

						</div>
						<!--end::Heading-->
						<!--begin::Users-->
						<div class="mb-15">
							<!--begin::List-->
							<div class="mh-375px scroll-y me-n7 pe-7">
								<!--begin::User-->
								<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Details-->
										<div class="">
											<!--begin::Name-->
											<a class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary" style="margin-right:200px">Company</a>
											<!--end::Name-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="">
										<!--begin::Sales-->
										<div class="text-center">
											<div class="fs-7 text-muted" id="Company"></div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::User-->


							</div>
							<!--end::List-->

                            <!--begin::List-->
							<div class="mh-375px scroll-y me-n7 pe-7">
								<!--begin::User-->
								<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Details-->
										<div class="">
											<!--begin::Name-->
											<a class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary" style="margin-right:200px">IsColor</a>
											<!--end::Name-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="">
										<!--begin::Sales-->
										<div class="text-center">
											<div class="fs-7 text-muted" id="IsColor"></div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
							</div>
							<!--end::User-->


							</div>
							<!--end::List-->
                        	<!--begin::List-->
							<div class="mh-375px scroll-y me-n7 pe-7">
								<!--begin::User-->
								<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Details-->
										<div class="">
											<!--begin::Name-->
											<a class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary" style="margin-right:200px">Height</a>
											<!--end::Name-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="">
										<!--begin::Sales-->
										<div class="text-center">
											<div class="fs-7 text-muted" id="Height"></div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::User-->


							</div>
							<!--end::List-->

                            <!--begin::List-->
							<div class="mh-375px scroll-y me-n7 pe-7">
								<!--begin::User-->
								<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Details-->
										<div class="">
											<!--begin::Name-->
											<a class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary" style="margin-right:200px">Width</a>
											<!--end::Name-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="">
										<!--begin::Sales-->
										<div class="text-center">
											<div class="fs-7 text-muted" id="Width"></div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::User-->


							</div>
							<!--end::List-->
                            <!--begin::List-->
							<div class="mh-375px scroll-y me-n7 pe-7">
								<!--begin::User-->
								<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Details-->
										<div class="">
											<!--begin::Name-->
											<a class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary" style="margin-right:200px">FileSize</a>
											<!--end::Name-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="">
										<!--begin::Sales-->
										<div class="text-center">
											<div class="fs-7 text-muted" id="FileSize"></div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::User-->
							</div>
							<!--end::List-->



                            <!--begin::List-->
							<div class="mh-375px scroll-y me-n7 pe-7">
								<!--begin::User-->
								<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Details-->
										<div class="">
											<!--begin::Name-->
											<a class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary" style="margin-right:200px">Résolution X</a>
											<!--end::Name-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="">
										<!--begin::Sales-->
										<div class="text-center">
											<div class="fs-7 text-muted" id="resolutionX"></div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::User-->
							</div>
							<!--end::List-->


                            <!--begin::List-->
							<div class="mh-375px scroll-y me-n7 pe-7">
								<!--begin::User-->
								<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Details-->
										<div class="">
											<!--begin::Name-->
											<a class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary" style="margin-right:200px">Résolution Y</a>
											<!--end::Name-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="">
										<!--begin::Sales-->
										<div class="text-center">
											<div class="fs-7 text-muted" id="resolutionY"></div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::User-->
							</div>
							<!--end::List-->

                            <!--begin::List-->
							<div class="mh-375px scroll-y me-n7 pe-7">
								<!--begin::User-->
								<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Details-->
										<div class="">
											<!--begin::Name-->
											<a class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary" style="margin-right:200px">MimeType</a>
											<!--end::Name-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="">
										<!--begin::Sales-->
										<div class="text-center">
											<div class="fs-7 text-muted" id="MimeType"></div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
								</div>
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
                            $('.participation').load(location.href + ' .participation');

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
                                title: "Participation bien approuvée."
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
                                $('.participation').load(location.href + ' .participation');

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
                                    title: "Participation bien rejetée."
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

@endsection