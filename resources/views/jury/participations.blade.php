@extends('layouts.Dashboard-jury.guest')
@section('content')

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

<style>

    #like-button {
    color: #888;
    font-size: 1.5em;
    font-family: 'Heebo', sans-serif;
    background-color: transparent;
    border: 0.1em solid;
    border-radius: 1em;
    padding: 0.333em 1em 0.25em;
    line-height: 1.2em;
    box-shadow: 0 0.25em 1em -0.25em;
    cursor: pointer;
    transition: color 150ms ease-in-out, background-color 150ms ease-in-out, transform 150ms ease-in-out;
    outline: 0;
    margin: 5em 0;

    &:hover {
        color: #f0b43e;
    }

    &:active {
        transform: scale(0.95);
    }

    &.selected {
        color: #FFF;
        background-color: #f0b43e;
        border-color: #f0b43e;
    }

    .heart-icon {
        display: inline-block;
        fill: currentColor;
        width: 0.8em;
        height: 0.8em;
        margin-right: 0.2em;
    }
    }

    body {
    text-align: center;
    }

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
<div class="load container my-5" id="whole">
@if($participation)
    <div class="container-fluid">
        <div class="row g-5 g-xl-10 mb-5 mb-xl-10 section">
            <div>
                <div class="card card-flush h-xl-100">
                    <div class="card-body py-9">
                        <!--begin::Row-->
                            <div class="row gx-9 h-50">
                                <!--begin::Col-->
                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                        <!--begin::Image-->
                                        <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-400px min-h-100 h-100" style="background-size: contain; background-repeat: no-repeat; background-position: center; background-image: url('{{ asset('storage/' . $participation->image) }}');">
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
                                                        <span class="text-gray-800 fs-1 fw-bold">{{$participation->title}}</span>
                                                    </div>
                                                        <!--end::Title-->
                                                </div>
                                                <!--end::Heading-->
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Body-->
                                            <div class="mb-6">
                                            <!--begin::Text-->
                                                <span class="fw-semibold text-gray-800 fs-5 mb-8 d-block" style="text-align: left;">{{$participation->description}}</span>
                                                    <!--end::Text-->
                                                    <!--begin::Items-->
                                                        <div class="d-flex align-items-center flex-wrap d-grid gap-2">
                                                            <!--begin::Item-->
                                                            <div class="d-flex align-items-center me-5 me-xl-13">

                                                                <!--begin::Info-->
                                                                <div class="m-0">
                                                                    <a class="fw-bold text-gray-600 text-hover-primary fs-7">{{$participation->categorie->name}}</a>
                                                                </div>
                                                                <!--end::Info-->
                                                            </div>
                                                            <!--end::Item-->
                                                        </div>
                                                    <!--end::Items-->
                                                    <form id="rating-form" class="py-6 px-4" action="{{ route('ratings.store') }}" method="POST" autocomplete="off">
                                                        @csrf
                                                        <div class="d-flex flex-column flex-md-row align-items-start mt-10">
                                                            <!-- Rating Section -->
                                                            <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 me-md-6 mb-3">
                                                                <input type="hidden" name="jury_id" value="{{ Auth::guard('jury')->user()->id }}">
                                                                <input type="hidden" name="participation_id" value="{{ $participation->id }}">
                                                                <div class="form-group col">
                                                                    <div class="col d-flex justify-content-center">
                                                                        <div class="rate ">
                                                                            <input type="radio" id="star5" class="rate" name="rating" value="5"/>
                                                                            <label for="star5" title="5 stars">5 stars</label>
                                                                            <input type="radio" id="star4" class="rate" name="rating" value="4"/>
                                                                            <label for="star4" title="4 stars">4 stars</label>
                                                                            <input type="radio" id="star3" class="rate" name="rating" value="3"/>
                                                                            <label for="star3" title="3 stars">3 stars</label>
                                                                            <input type="radio" id="star2" class="rate" name="rating" value="2">
                                                                            <label for="star2" title="2 stars">2 stars</label>
                                                                            <input type="radio" id="star1" class="rate" name="rating" value="1" checked/>
                                                                            <label for="star1" title="1 star">1 star</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <!-- End Rating Section -->
                                                        </div>
                                                        <!-- Button Section -->
                                                        <div class="col-sm-6 col-md-6 d-flex justify-content-center align-items-center" style="margin-top: 20px; margin-left: 23%">
                                                            <button type="submit" class="btn btn-sm py-3 px-5 btn-primary">
                                                                <span class="fw-bold fs-5">Submit</span>
                                                            </button>

                                                        </div>


                                                            <!-- End Button Section -->

                                                    </form>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



        </div>
    </div>
    @else
    <div style="text-align: center;">
        <h1>Félicitations ! Vous avez noté toutes les participations.</h1>
    </div>
@endif
</div>





<!--begin::Javascript-->
<script>var hostUrl = "assets/";</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="{{asset('assets-metronic-1/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{asset('assets-metronic-1/js/scripts.bundle.js')}}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used for this page only)-->
<script src="{{asset('assets-metronic-1/plugins/custom/datatables/datatables.bundle.js')}}"></script>
<!--end::Vendors Javascript-->

<!--end::Javascript-->
<script src="sweetalert2.min.js"></script>

<script>
   $(document).ready(function() {
    $(document).on('submit', '#rating-form', function(e) {
        e.preventDefault();

        var formData = $(this).serialize();

        $.ajax({
            type: "POST",
            url: $(this).attr('action'),
            data: formData,
            dataType: 'json',
            success: function(data) {
                if (data.success) {
                    $('#whole').load(location.href + ' #whole > *');
                    Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "Evaluation ajoutee avec success",
                    showConfirmButton: false,
                    timer: 1500,
                    customClass: {
                        popup: 'my-small-height-swal'
                    }
                    });



                    // $('.section').load(location.href + ' .section');


                } else {
                    alert('Failed to submit rating');
                }
            },
            error: function(xhr, status, error) {
                alert('An error occurred while processing your request', status, error);
            }
        });
    });
});



</script>

<script>
  document.addEventListener('DOMContentLoaded', function() {
  var likeButton = document.getElementById('like-button');
  likeButton.addEventListener('click', function() {
    window.lb = likeButton;
    likeButton.classList.toggle('selected');
  });
}, false);
</script>


@endsection
