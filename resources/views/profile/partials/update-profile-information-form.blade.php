

@if(session()->has('success'))
<div class="alert alert-success mb-5">
    {{ session('success') }}
</div>
@endif
@if ($errors->any())
    <div class="alert alert-danger mb-5">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </div>
@endif
<div class="card mb-5 mb-xl-10">
    <!--begin::Card header-->
    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
        <!--begin::Card title-->
        <div class="card-title m-0">
            <h3 class="fw-bold m-0">Détails du profil</h3>
        </div>
        <!--end::Card title-->
    </div>
    <!--begin::Card header-->
    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>
    <!--begin::Content-->
    <div id="kt_account_settings_profile_details" class="collapse show">
        <!--begin::Form-->
        <form method="post" action="{{ route('profile.update') }}" id="kt_account_profile_details_form" class="form">
            @csrf
            @method('patch')
            <!--begin::Card body-->
            <div class="card-body border-top p-9">
                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-semibold fs-6">Avatar</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <!--begin::Image input-->
                        <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('{{$user->photo}}')">
                            <!--begin::Preview existing avatar-->
                            <div class="image-input-wrapper w-125px h-125px" style="background-image: url({{$user->photo}})"></div>
                            <!--end::Preview existing avatar-->
                            <!--begin::Label-->
                            <label class=" w-25px h-25px bg-body shadow" hidden  data-kt-image-input-action="change" data-bs-toggle="tooltip" title="">
                                <!--begin::Inputs-->
                                <input disabled type="file" value="/strong{{$user->photo}}" name="photo" accept=".png, .jpg, .jpeg" />
                                <input disabled type="hidden" value="/strong{{$user->photo}}" name="avatar_remove" />
                                <!--end::Inputs-->
                            </label>
                            <!--end::Label-->
                        </div>
                        <!--end::Image input-->
                        <!--begin::Hint-->
                        <div class="form-text">Types de fichiers autorisés : png, jpg, jpeg.</div>
                        <!--end::Hint-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Nom et Prénom</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <!--begin::Row-->
                        <div class="row">
                            <!--begin::Col-->
                            <div class="col-lg-12 fv-row">
                                <input type="text" name="name" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="First name" value="{{$user->name}}" />
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Email</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                        <input type="text" disabled name="email" class="form-control form-control-lg form-control-solid" placeholder="Company name" value="{{$user->email}}"/>
                    </div>
                    <!--end::Col-->
                </div>




                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">profil</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row">
                                            <!--begin::Options-->
                                            <div class="d-flex align-items-center mt-3">
                                                <!--begin::Option-->
                                                <label class="form-check form-check-custom form-check-inline form-check-solid me-5">
                                                    <input class="form-check-input"  name="profile" type="radio" {{ $user->profile === 'Amateur' ? 'checked' : '' }} value="Amateur" />
                                                    <span class="fw-semibold ps-2 fs-6">Amateur</span>
                                                </label>
                                                <!--end::Option-->
                                                <!--begin::Option-->
                                                <label class="form-check form-check-custom form-check-inline form-check-solid">
                                                    <input class="form-check-input" name="profile" type="radio" {{ $user->profile === 'Professionnel' ? 'checked' : '' }} value="Professionnel" />
                                                    <span class="fw-semibold ps-2 fs-6">Professionnel</span>
                                                </label>
                                                <!--end::Option-->
                                            </div>
                                            <!--end::Options-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->


            
                


                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-semibold fs-6">
                        <span class="required">Telephone</span>

                    </label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                        <input type="text" name="phone" class="form-control form-control-lg form-control-solid" placeholder="Phone number" value="{{$user->phone}}" />
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Ville</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                        <!--begin::Input-->
                        <select name="ville_id" data-control="select2" data-placeholder="{{$user->ville->name}}" class="form-select form-select-solid form-select-lg">
                            <option selected value="{{$user->ville_id}}">{{$user->ville->name}}</option>
                            @foreach ( $villes as $ville )
                                <option value="{{$ville->id}}">{{$ville->name}}</option>
                            @endforeach
                        </select>
                        <!--end::Input-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->





                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Date de naissance</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                        <!--begin::Options-->
									<!--begin::Input-->
									<div class="align-items-center">
										<!--begin::Icon-->
										<i class="ki-duotone ki-calendar-8 fs-2 position-absolute m-4">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
											<span class="path4"></span>
											<span class="path5"></span>
											<span class="path6"></span>
										</i>
										<!--end::Icon-->
										<!--begin::Datepicker-->
										<input class="form-control form-control-solid ps-12 form-control{{ $errors->has('date_naissance') ? ' is-invalid' : '' }}" value="{{$user->DateNaissance}}" type="date" placeholder="Sélectionnez une date" name="DateNaissance" />
										<!--end::Datepicker-->
										@if ($errors->has('date_naissance'))
											<span class="invalid-feedback mt-3" role="alert">
												<strong>Le champ date de naissance est obligatoire.</strong>
											</span>
										@endif
									</div>
									<!--end::Input-->	
                        <!--end::Options-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->            
                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Genre</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                        <!--begin::Options-->
                        <div class="d-flex align-items-center mt-3">
                            <!--begin::Option-->
                            <label class="form-check form-check-custom form-check-inline form-check-solid me-5">
                                <input class="form-check-input"  name="sexe" type="radio" {{ $user->sexe === 'homme' ? 'checked' : '' }} value="homme" />
                                <span class="fw-semibold ps-2 fs-6">Homme</span>
                            </label>
                            <!--end::Option-->
                            <!--begin::Option-->
                            <label class="form-check form-check-custom form-check-inline form-check-solid">
                                <input class="form-check-input" name="sexe" type="radio" {{ $user->sexe === 'femme' ? 'checked' : '' }} value="femme" />
                                <span class="fw-semibold ps-2 fs-6">Femme</span>
                            </label>
                            <!--end::Option-->
                        </div>
                        <!--end::Options-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->

            </div>
            <!--end::Card body-->
            <!--begin::Actions-->
            <div class="card-footer d-flex justify-content-end py-6 px-9">
                <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Enregistrer</button>
                @if (session('status') === 'profile-updated')
                    <p
                        x-data="{ show: true }"
                        x-show="show"
                        x-transition
                        x-init="setTimeout(() => show = false, 2000)"
                        class="text-sm text-gray-600"
                    ></p>
                @endif
            </div>
            <!--end::Actions-->
        </form>
        <!--end::Form-->
    </div>
    <!--end::Content-->
</div>