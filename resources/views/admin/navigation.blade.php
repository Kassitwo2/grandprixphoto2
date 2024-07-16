@extends('layouts.Dashboard-admin.guest')
@section('content')
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">
							<!--begin::Toolbar-->
							<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
								<!--begin::Toolbar container-->
								<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
									<!--begin::Page title-->
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<!--begin::Title-->
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Navigateur</h1>
										<!--end::Title-->
									</div>
									<!--end::Page title-->
								</div>
								<!--end::Toolbar container-->
							</div>
							<!--end::Toolbar-->
							<!--begin::Content-->
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-xxl">
									<!--begin::About card-->
									<div class="card">
										<!--begin::Body-->
										<div class="card-body p-lg-17">
											<!--begin::About-->
											<div class="mb-18">
												<!--begin::Wrapper-->
												<div class="mb-10">
													<!--begin::Overlay-->
													<div class="overlay">
														<!--begin::Image-->
														<img class="w-100 card-rounded" id="participation" src="" alt="" />
														<!--end::Image-->
													</div>
													<!--end::Container-->
												</div>
												<!--end::Wrapper-->

											</div>
											<!--end::About-->

                                            <div class=" text-center">
                                                <button class="btn btn-primary" id="prevBtn">Previous</button>
                                                <button  class="btn btn-primary" id="nextBtn">Next</button>
                                            </div>
										</div>

									</div>
									<!--end::About card-->
								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->


            <script>


                $(document).ready(function() {
                    var currentId;

                    // Load initial set of participations
                    $.ajax({
                        url: '/backoffice/admins/navigation',
                        method: 'GET',
                        success: function(data) {
                            // Display the first participations
                            displayParticipation(data[1]);
                            currentParticipationId = data[1].id;

                            $('#nextBtn').trigger('click');

                        }
                    });

                    // Function to display participation
                    function displayParticipation(participation) {
                        $('#participation').attr('src', 'storage/' + participation.image);
                    }

                    // Event handler for next button
                    $('#nextBtn').click(function() {
                        $.ajax({
                            url: '/backoffice/participations/' + currentParticipationId + '/next',
                            method: 'GET',
                            success: function(data) {
                                if (data) {
                                    displayParticipation(data);
                                    currentParticipationId = data.id;
                                }
                            }
                        });
                    });

                    // Event handler for previous button
                    $('#prevBtn').click(function() {
                        $.ajax({
                            url: '/backoffice/participations/' + currentParticipationId + '/previous',
                            method: 'GET',
                            success: function(data) {
                                if (data) {
                                    displayParticipation(data);
                                    currentParticipationId = data.id;
                                }
                            }
                        });
                    });


                    $('#nextBtn').trigger('click');

                });


        </script>



@endsection
