

					<!--begin::Main-->
					<div class="d-flex flex-row flex-column-fluid align-items-stretch">
						<!--begin::Content-->
						<div class="content flex-row-fluid" id="kt_content">

                            <!--begin::Deactivate Account-->
                                @include('profile.partials.update-profile-information-form')
							<!--end::Basic info-->
{{-- 
							<!--begin::Deactivate Account-->
							<div class="card">
								<!--begin::Card header-->
								<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_deactivate" aria-expanded="true" aria-controls="kt_account_deactivate">
									<div class="card-title m-0">
										<h3 class="fw-bold m-0">Deactivate Account</h3>
									</div>
								</div>
								<!--end::Card header-->
								<!--begin::Content-->
								<div id="kt_account_settings_deactivate" class="collapse show">
									<!--begin::Form-->
                                    
									<form method="post" action="{{ route('profile.destroy') }}"  id="kt_account_deactivate_form" class="form">
                                        @csrf
                                        @method('delete')
										<!--begin::Card body-->
										<div class="card-body border-top p-9">
											<!--begin::Notice-->
											<div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">
												<!--begin::Icon-->
												<i class="ki-duotone ki-information fs-2tx text-warning me-4">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
												</i>
												<!--end::Icon-->
												<!--begin::Wrapper-->
												<div class="d-flex flex-stack flex-grow-1">
													<!--begin::Content-->
													<div class="fw-semibold">
														<h4 class="text-gray-900 fw-bold">You Are Deactivating Your Account</h4>
														<div class="fs-6 text-gray-700">For extra security, this requires you to confirm your email or phone number when you reset yousignr password.
														<br />
														<a class="fw-bold" href="#">Learn more</a></div>
													</div>
													<!--end::Content-->
												</div>
												<!--end::Wrapper-->
											</div>
											<!--end::Notice-->
											<!--begin::Form input row-->
											<div class="form-check form-check-solid fv-row">
												<input name="deactivate" class="form-check-input" type="checkbox" value="" id="deactivate" />
												<label class="form-check-label fw-semibold ps-2 fs-6" for="deactivate">I confirm my account deactivation</label>
											</div>
											<!--end::Form input row-->
										</div>
										<!--end::Card body-->
										<!--begin::Card footer-->
										<div class="card-footer d-flex justify-content-end py-6 px-9">
											<button id="kt_account_deactivate_account_submit" type="submit" class="btn btn-danger fw-semibold">Deactivate Account</button>
										</div>
										<!--end::Card footer-->
                                        
									</form>

                                    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
                                        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                                            @csrf
                                            @method('delete')
                                
                                            <h2 class="text-lg font-medium text-gray-900">
                                                {{ __('Are you sure you want to delete your account?') }}
                                            </h2>
                                
                                            <p class="mt-1 text-sm text-gray-600">
                                                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                                            </p>
                                
                                            <div class="mt-6">
                                                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />
                                
                                                <x-text-input
                                                    id="password"
                                                    name="password"
                                                    type="password"
                                                    class="mt-1 block w-3/4"
                                                    placeholder="{{ __('Password') }}"
                                                />
                                
                                                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                                            </div>
                                
                                            <div class="mt-6 flex justify-end">
                                                <x-secondary-button x-on:click="$dispatch('close')">
                                                    {{ __('Cancel') }}
                                                </x-secondary-button>
                                
                                                <x-danger-button class="ms-3">
                                                    {{ __('Delete Account') }}
                                                </x-danger-button>
                                            </div>
                                        </form>
                                    </x-modal>
									<!--end::Form-->
								</div>
								<!--end::Content-->
							</div>
							<!--end::Deactivate Account--> --}}
						</div>
						<!--end::Content-->
					</div>
					<!--end::Main-->