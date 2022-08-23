@extends('admin.layout.main')

@section('main_content')
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div class="app-toolbar align-items-center justify-content-between">
            <!--begin::Toolbar wrapper-->
            <div class="d-flex flex-grow-1 flex-stack flex-wrap gap-2 mb-n10" id="kt_toolbar">
                <!--begin::Page title-->
                <div class="d-flex flex-column align-items-start me-3 gap-2">
                    <!--begin::Title-->
                    <h1 class="d-flex text-dark fw-bolder m-0 fs-3">Account Overview</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-gray-600">
                            <a href="{{ route('index') }}" class="text-gray-600 text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-gray-600">Crafted</li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-gray-600">Account</li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-gray-500">Setting</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center py-2">
                    <!--begin::Button-->
                    <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                        data-bs-target="#create_new_admin_vendor" id="">Create</a>
                    <!--end::Button-->
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Toolbar wrapper-->
        </div>
    </div>
    <!--end::Toolbar-->
    <!--begin::Content-->
    <div class="app-content flex-column-fluid" id="kt_app_content">
        <!--begin::Navbar-->
        <div class="card mb-5 mb-xl-10">
            <div class="card-body pt-9 pb-0">
                <!--begin::Details-->
                <div class="d-flex flex-wrap flex-sm-nowrap mb-3">
                    <!--begin: Pic-->
                    <div class="me-7 mb-4">
                        <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                            <img src="{{ asset('admin/media/avatars/300-1.jpg') }}" alt="image" />
                            <div
                                class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-primary rounded-circle border border-4 border-white h-20px w-20px">
                            </div>
                        </div>
                    </div>
                    <!--end::Pic-->
                    <!--begin::Info-->
                    <div class="flex-grow-1">
                        <!--begin::Title-->
                        <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                            <!--begin::User-->
                            <div class="d-flex flex-column">
                                <!--begin::Name-->
                                <div class="d-flex align-items-center mb-2">
                                    <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bolder me-1">Max
                                        Smith</a>
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen026.svg-->
                                    <span class="">
                                        <i class="fa-solid fa-badge-check fs-3 text-primary"></i>
                                    </span>
                                    <a href="#" class="btn btn-sm btn-light-success fw-bolder ms-2 fs-8 py-1 px-3">CEO</a>
                                </div>
                                <!--end::Name-->
                                <!--begin::Info-->
                                <div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">
                                    <a href="#"
                                        class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                        <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
                                        <span class="svg-icon svg-icon-4 me-1">
                                            <i class="fa-solid fa-laptop-code"></i>
                                        </span>
                                        <!--end::Svg Icon-->OOHAP Founder
                                    </a>
                                    <a href="#"
                                        class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                        <span class="svg-icon svg-icon-4 me-1">
                                            <i class="fa-solid fa-location-dot"></i>
                                        </span>
                                        <!--end::Svg Icon-->SF, Bay Area
                                    </a>
                                    <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
                                        <!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
                                        <span class="svg-icon svg-icon-4 me-1">
                                            <i class="fa-solid fa-envelope-open"></i>
                                        </span>
                                        <!--end::Svg Icon-->admin@gmail.com
                                    </a>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::User-->
                        </div>
                        <!--end::Title-->
                        <!--begin::Stats-->
                        <div class="d-flex flex-wrap flex-stack">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column flex-grow-1 pe-8">
                                <!--begin::Stats-->
                                <div class="d-flex flex-wrap">
                                    <!--begin::Stat-->
                                    <div
                                        class="border border-gray-300 border-dashed rounded min-w-150px py-3 px-4 me-6 mb-3">
                                        <!--begin::Number-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                            <span class="svg-icon svg-icon-3 svg-icon-success me-2">
                                                <i class="fa-solid fa-arrow-up text-success"></i>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <div class="fs-2 fw-bolder" data-kt-countup="true" data-kt-countup-value="6500"
                                                data-kt-countup-prefix="<i class='fa-solid fa-indian-rupee-sign fs-3 text-dark'></i>">
                                                0
                                            </div>
                                        </div>
                                        <!--end::Number-->
                                        <!--begin::Label-->
                                        <div class="fw-bold fs-6 text-gray-400">Today Earning</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Stat-->
                                    <!--begin::Stat-->
                                    <div
                                        class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                        <!--begin::Number-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                            <span class="svg-icon svg-icon-3 svg-icon-danger me-2">
                                                <i class="fa-solid fa-arrow-down text-danger"></i>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <div class="fs-2 fw-bolder" data-kt-countup="true" data-kt-countup-value="75">0
                                            </div>
                                        </div>
                                        <!--end::Number-->
                                        <!--begin::Label-->
                                        <div class="fw-bold fs-6 text-gray-400">Services Provided (Today)</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Stat-->
                                    <!--begin::Stat-->
                                    <div
                                        class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                        <!--begin::Number-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                            <span class="svg-icon svg-icon-3 svg-icon-success me-2">
                                                <i class="fa-solid fa-arrow-up text-success"></i>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <div class="fs-2 fw-bolder" data-kt-countup="true" data-kt-countup-value="60"
                                                data-kt-countup-prefix="%">0
                                            </div>
                                        </div>
                                        <!--end::Number-->
                                        <!--begin::Label-->
                                        <div class="fw-bold fs-6 text-gray-400">Success Rate</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Stat-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Progress-->
                            <div class="d-flex align-items-center w-200px w-sm-300px flex-column mt-3">
                                <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                                    <span class="fw-bold fs-6 text-gray-400">Profile Compleation</span>
                                    <span class="fw-bolder fs-6">50%</span>
                                </div>
                                <div class="h-5px mx-3 w-100 bg-light mb-3">
                                    <div class="bg-success rounded h-5px" role="progressbar" style="width: 50%;"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <!--end::Progress-->
                        </div>
                        <!--end::Stats-->
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::Details-->
                <!--begin::Navs-->
                <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder">
                    <!--begin::Nav item-->
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5" href="{{ route('profile') }}">Overview</a>
                    </li>
                    <!--end::Nav item-->
                    <!--begin::Nav item-->
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="{{ route('setting') }}">Settings</a>
                    </li>
                    <!--end::Nav item-->
                    <!--begin::Nav item-->
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5" href="{{ route('security') }}">Security</a>
                    </li>
                    <!--end::Nav item-->
                    <!--begin::Nav item-->
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5" href="{{ route('referrals') }}">Referrals</a>
                    </li>
                    <!--end::Nav item-->
                </ul>
                <!--begin::Navs-->
            </div>
        </div>
        <!--end::Navbar-->
        {{-- Basic Info --}}
        <div class="card mb-5 mb-xl-10">
            <!--begin::Card header-->
            <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                data-bs-target="#kt_account_profile_details" aria-expanded="true"
                aria-controls="kt_account_profile_details">
                <!--begin::Card title-->
                <div class="card-title m-0">
                    <h3 class="fw-bolder m-0">Profile Settings</h3>
                </div>
                <!--end::Card title-->
            </div>
            <!--begin::Card header-->
            <!--begin::Content-->
            <div id="kt_account_settings_profile_details" class="collapse show">
                <!--begin::Form-->
                <form id="kt_account_profile_details_form" class="form">
                    @csrf
                    <!--begin::Card body-->
                    <div class="card-body border-top p-9">
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-bold fs-6">Avatar</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <!--begin::Image input-->
                                <div class="image-input image-input-outline" data-kt-image-input="true"
                                    style="background-image: url({{ asset('admin/media/svg/avatars/blank.svg') }})">
                                    <!--begin::Preview existing avatar-->
                                    <div class="image-input-wrapper w-125px h-125px"
                                        style="background-image: url({{ asset('admin/media/avatars/300-1.jpg') }})"></div>
                                    <!--end::Preview existing avatar-->
                                    <!--begin::Label-->
                                    <label
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                        <i class="fa-solid fa-pencil fs-7 text-dark"></i>
                                        <!--begin::Inputs-->
                                        <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" name="avatar_remove" />
                                        <!--end::Inputs-->
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Cancel-->
                                    <span
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                        <i class="fa-solid fa-trash fs-5 text-danger"></i>
                                    </span>
                                    <!--end::Cancel-->
                                    <!--begin::Remove-->
                                    <span
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                        <i class="fa-solid fa-trash fs-5 text-danger"></i>
                                    </span>
                                    <!--end::Remove-->
                                </div>
                                <!--end::Image input-->
                                <!--begin::Hint-->
                                <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                <!--end::Hint-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Full Name</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <!--begin::Row-->
                                <div class="row">
                                    <!--begin::Col-->
                                    <div class="col-lg-6 fv-row">
                                        <input type="text" name="fname"
                                            class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                            placeholder="First name" value="Max" />
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-lg-6 fv-row">
                                        <input type="text" name="lname"
                                            class="form-control form-control-lg form-control-solid" placeholder="Last name"
                                            value="Smith" />
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
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Company</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="company" class="form-control form-control-lg form-control-solid"
                                    placeholder="Enter Company Name" value="OOHAP Pvt. Ltd." />
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-bold fs-6">
                                <span class="required">Country</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                    title="Country of origination"></i>
                            </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <select name="country" aria-label="Select a Country" data-control="select2"
                                    data-placeholder="Select a country..."
                                    class="form-select form-select-solid form-select-lg fw-bold">
                                    <option value="">Select a Country...</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/afghanistan.svg') }}" value="AF">Afghanistan</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/aland-islands.svg') }}" value="AX">Aland Islands</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/albania.svg') }}" value="AL">Albania</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/algeria.svg') }}" value="DZ">Algeria</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/american-samoa.svg') }}" value="AS">American Samoa</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/andorra.svg') }}" value="AD">Andorra</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/angola.svg') }}" value="AO">Angola</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/anguilla.svg') }}" value="AI">Anguilla</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/antigua-and-barbuda.svg') }}" value="AG">Antigua and Barbuda
                                    </option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/argentina.svg') }}" value="AR">Argentina</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/armenia.svg') }}" value="AM">Armenia</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/aruba.svg') }}" value="AW">Aruba</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/australia.svg') }}" value="AU">Australia</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/austria.svg') }}" value="AT">Austria</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/azerbaijan.svg') }}" value="AZ">Azerbaijan</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/bahamas.svg') }}" value="BS">Bahamas</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/bahrain.svg') }}" value="BH">Bahrain</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/bangladesh.svg') }}" value="BD">Bangladesh</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/barbados.svg') }}" value="BB">Barbados</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/belarus.svg') }}" value="BY">Belarus</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/belgium.svg') }}" value="BE">Belgium</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/belize.svg') }}" value="BZ">Belize</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/benin.svg') }}" value="BJ">Benin</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/bermuda.svg') }}" value="BM">Bermuda</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/bhutan.svg') }}" value="BT">Bhutan</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/bolivia.svg') }}" value="BO">Bolivia, Plurinational State of
                                    </option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/bonaire.svg') }}" value="BQ">Bonaire, Sint Eustatius and Saba
                                    </option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/bosnia-and-herzegovina.svg') }}" value="BA">Bosnia and
                                        Herzegovina</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/botswana.svg') }}" value="BW">Botswana</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/brazil.svg') }}" value="BR">Brazil</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/british-indian-ocean-territory.svg') }}" value="IO">British
                                        Indian Ocean Territory</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/brunei.svg') }}" value="BN">Brunei Darussalam</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/bulgaria.svg') }}" value="BG">Bulgaria</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/burkina-faso.svg') }}" value="BF">Burkina Faso</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/burundi.svg') }}" value="BI">Burundi</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/cambodia.svg') }}" value="KH">Cambodia</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/cameroon.svg') }}" value="CM">Cameroon</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/canada.svg') }}" value="CA">Canada</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/cape-verde.svg') }}" value="CV">Cape Verde</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/cayman-islands.svg') }}" value="KY">Cayman Islands</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/central-african-republic.svg') }}" value="CF">Central African
                                        Republic</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/chad.svg') }}" value="TD">Chad</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/chile.svg') }}" value="CL">Chile</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/china.svg') }}" value="CN">China</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/christmas-island.svg') }}" value="CX">Christmas Island</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/cocos-island.svg') }}" value="CC">Cocos (Keeling) Islands
                                    </option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/colombia.svg') }}" value="CO">Colombia</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/comoros.svg') }}" value="KM">Comoros</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/cook-islands.svg') }}" value="CK">Cook Islands</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/costa-rica.svg') }}" value="CR">Costa Rica</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/ivory-coast.svg') }}" value="CI">Côte d'Ivoire</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/croatia.svg') }}" value="HR">Croatia</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/cuba.svg') }}" value="CU">Cuba</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/curacao.svg') }}" value="CW">Curaçao</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/czech-republic.svg') }}" value="CZ">Czech Republic</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/denmark.svg') }}" value="DK">Denmark</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/djibouti.svg') }}" value="DJ">Djibouti</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/dominica.svg') }}" value="DM">Dominica</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/dominican-republic.svg') }}" value="DO">Dominican Republic
                                    </option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/ecuador.svg') }}" value="EC">Ecuador</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/egypt.svg') }}" value="EG">Egypt</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/el-salvador.svg') }}" value="SV">El Salvador</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/equatorial-guinea.svg') }}" value="GQ">Equatorial Guinea</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/eritrea.svg') }}" value="ER">Eritrea</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/estonia.svg') }}" value="EE">Estonia</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/ethiopia.svg') }}" value="ET">Ethiopia</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/falkland-islands.svg') }}" value="FK">Falkland Islands (Malvinas)
                                    </option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/fiji.svg') }}" value="FJ">Fiji</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/finland.svg') }}" value="FI">Finland</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/france.svg') }}" value="FR">France</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/french-polynesia.svg') }}" value="PF">French Polynesia</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/gabon.svg') }}" value="GA">Gabon</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/gambia.svg') }}" value="GM">Gambia</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/georgia.svg') }}" value="GE">Georgia</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/germany.svg') }}" value="DE">Germany</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/ghana.svg') }}" value="GH">Ghana</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/gibraltar.svg') }}" value="GI">Gibraltar</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/greece.svg') }}" value="GR">Greece</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/greenland.svg') }}" value="GL">Greenland</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/grenada.svg') }}" value="GD">Grenada</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/guam.svg') }}" value="GU">Guam</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/guatemala.svg') }}" value="GT">Guatemala</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/guernsey.svg') }}" value="GG">Guernsey</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/guinea.svg') }}" value="GN">Guinea</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/guinea-bissau.svg') }}" value="GW">Guinea-Bissau</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/haiti.svg') }}" value="HT">Haiti</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/vatican-city.svg') }}" value="VA">Holy See (Vatican City State)
                                    </option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/honduras.svg') }}" value="HN">Honduras</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/hong-kong.svg') }}" value="HK">Hong Kong</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/hungary.svg') }}" value="HU">Hungary</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/iceland.svg') }}" value="IS">Iceland</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/india.svg') }}" value="IN" selected>India</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/indonesia.svg') }}" value="ID">Indonesia</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/iran.svg') }}" value="IR">Iran, Islamic Republic of</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/iraq.svg') }}" value="IQ">Iraq</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/ireland.svg') }}" value="IE">Ireland</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/isle-of-man.svg') }}" value="IM">Isle of Man</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/israel.svg') }}" value="IL">Israel</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/italy.svg') }}" value="IT">Italy</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/jamaica.svg') }}" value="JM">Jamaica</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/japan.svg') }}" value="JP">Japan</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/jersey.svg') }}" value="JE">Jersey</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/jordan.svg') }}" value="JO">Jordan</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/kazakhstan.svg') }}" value="KZ">Kazakhstan</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/kenya.svg') }}" value="KE">Kenya</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/kiribati.svg') }}" value="KI">Kiribati</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/north-korea.svg') }}" value="KP">Korea, Democratic People's
                                        Republic of</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/kuwait.svg') }}" value="KW">Kuwait</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/kyrgyzstan.svg') }}" value="KG">Kyrgyzstan</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/laos.svg') }}" value="LA">Lao People's Democratic Republic
                                    </option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/latvia.svg') }}" value="LV">Latvia</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/lebanon.svg') }}" value="LB">Lebanon</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/lesotho.svg') }}" value="LS">Lesotho</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/liberia.svg') }}" value="LR">Liberia</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/libya.svg') }}" value="LY">Libya</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/liechtenstein.svg') }}" value="LI">Liechtenstein</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/lithuania.svg') }}" value="LT">Lithuania</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/luxembourg.svg') }}" value="LU">Luxembourg</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/macao.svg') }}" value="MO">Macao</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/madagascar.svg') }}" value="MG">Madagascar</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/malawi.svg') }}" value="MW">Malawi</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/malaysia.svg') }}" value="MY">Malaysia</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/maldives.svg') }}" value="MV">Maldives</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/mali.svg') }}" value="ML">Mali</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/malta.svg') }}" value="MT">Malta</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/marshall-island.svg') }}" value="MH">Marshall Islands</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/martinique.svg') }}" value="MQ">Martinique</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/mauritania.svg') }}" value="MR">Mauritania</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/mauritius.svg') }}" value="MU">Mauritius</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/mexico.svg') }}" value="MX">Mexico</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/micronesia.svg') }}" value="FM">Micronesia, Federated States of
                                    </option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/moldova.svg') }}" value="MD">Moldova, Republic of</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/monaco.svg') }}" value="MC">Monaco</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/mongolia.svg') }}" value="MN">Mongolia</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/montenegro.svg') }}" value="ME">Montenegro</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/montserrat.svg') }}" value="MS">Montserrat</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/morocco.svg') }}" value="MA">Morocco</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/mozambique.svg') }}" value="MZ">Mozambique</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/myanmar.svg') }}" value="MM">Myanmar</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/namibia.svg') }}" value="NA">Namibia</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/nauru.svg') }}" value="NR">Nauru</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/nepal.svg') }}" value="NP">Nepal</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/netherlands.svg') }}" value="NL">Netherlands</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/new-zealand.svg') }}" value="NZ">New Zealand</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/nicaragua.svg') }}" value="NI">Nicaragua</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/niger.svg') }}" value="NE">Niger</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/nigeria.svg') }}" value="NG">Nigeria</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/niue.svg') }}" value="NU">Niue</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/norfolk-island.svg') }}" value="NF">Norfolk Island</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/northern-mariana-islands.svg') }}" value="MP">Northern Mariana
                                        Islands</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/norway.svg') }}" value="NO">Norway</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/oman.svg') }}" value="OM">Oman</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/pakistan.svg') }}" value="PK">Pakistan</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/palau.svg') }}" value="PW">Palau</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/palestine.svg') }}" value="PS">Palestinian Territory, Occupied
                                    </option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/panama.svg') }}" value="PA">Panama</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/papua-new-guinea.svg') }}" value="PG">Papua New Guinea</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/paraguay.svg') }}" value="PY">Paraguay</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/peru.svg') }}" value="PE">Peru</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/philippines.svg') }}" value="PH">Philippines</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/poland.svg') }}" value="PL">Poland</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/portugal.svg') }}" value="PT">Portugal</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/puerto-rico.svg') }}" value="PR">Puerto Rico</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/qatar.svg') }}" value="QA">Qatar</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/romania.svg') }}" value="RO">Romania</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/russia.svg') }}" value="RU">Russian Federation</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/rwanda.svg') }}" value="RW">Rwanda</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/st-barts.svg') }}" value="BL">Saint Barthélemy</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/saint-kitts-and-nevis.svg') }}" value="KN">Saint Kitts and Nevis
                                    </option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/st-lucia.svg') }}" value="LC">Saint Lucia</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/sint-maarten.svg') }}" value="MF">Saint Martin (French part)
                                    </option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/st-vincent-and-the-grenadines.svg') }}" value="VC">Saint Vincent
                                        and the Grenadines</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/samoa.svg') }}" value="WS">Samoa</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/san-marino.svg') }}" value="SM">San Marino</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/sao-tome-and-prince.svg') }}" value="ST">Sao Tome and Principe
                                    </option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/saudi-arabia.svg') }}" value="SA">Saudi Arabia</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/senegal.svg') }}" value="SN">Senegal</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/serbia.svg') }}" value="RS">Serbia</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/seychelles.svg') }}" value="SC">Seychelles</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/sierra-leone.svg') }}" value="SL">Sierra Leone</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/singapore.svg') }}" value="SG">Singapore</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/sint-maarten.svg') }}" value="SX">Sint Maarten (Dutch part)
                                    </option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/slovakia.svg') }}" value="SK">Slovakia</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/slovenia.svg') }}" value="SI">Slovenia</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/solomon-islands.svg') }}" value="SB">Solomon Islands</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/somalia.svg') }}" value="SO">Somalia</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/south-africa.svg') }}" value="ZA">South Africa</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/south-korea.svg') }}" value="KR">South Korea</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/south-sudan.svg') }}" value="SS">South Sudan</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/spain.svg') }}" value="ES">Spain</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/sri-lanka.svg') }}" value="LK">Sri Lanka</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/sudan.svg') }}" value="SD">Sudan</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/suriname.svg') }}" value="SR">Suriname</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/swaziland.svg') }}" value="SZ">Swaziland</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/sweden.svg') }}" value="SE">Sweden</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/switzerland.svg') }}" value="CH">Switzerland</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/syria.svg') }}" value="SY">Syrian Arab Republic</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/taiwan.svg') }}" value="TW">Taiwan, Province of China</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/tajikistan.svg') }}" value="TJ">Tajikistan</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/tanzania.svg') }}" value="TZ">Tanzania, United Republic of
                                    </option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/thailand.svg') }}" value="TH">Thailand</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/togo.svg') }}" value="TG">Togo</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/tokelau.svg') }}" value="TK">Tokelau</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/tonga.svg') }}" value="TO">Tonga</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/trinidad-and-tobago.svg') }}" value="TT">Trinidad and Tobago
                                    </option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/tunisia.svg') }}" value="TN">Tunisia</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/turkey.svg') }}" value="TR">Turkey</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/turkmenistan.svg') }}" value="TM">Turkmenistan</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/turks-and-caicos.svg') }}" value="TC">Turks and Caicos Islands
                                    </option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/tuvalu.svg') }}" value="TV">Tuvalu</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/uganda.svg') }}" value="UG">Uganda</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/ukraine.svg') }}" value="UA">Ukraine</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/united-arab-emirates.svg') }}" value="AE">United Arab Emirates
                                    </option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/united-kingdom.svg') }}" value="GB">United Kingdom</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/united-states.svg') }}" value="US">United States</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/uruguay.svg') }}" value="UY">Uruguay</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/uzbekistan.svg') }}" value="UZ">Uzbekistan</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/vanuatu.svg') }}" value="VU">Vanuatu</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/venezuela.svg') }}" value="VE">Venezuela, Bolivarian Republic of
                                    </option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/vietnam.svg') }}" value="VN">Vietnam</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/virgin-islands.svg') }}" value="VI">Virgin Islands</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/yemen.svg') }}" value="YE">Yemen</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/zambia.svg') }}" value="ZM">Zambia</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/zimbabwe.svg') }}" value="ZW">Zimbabwe</option>
                                </select>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-bold fs-6">
                                <span class="required">Contact Phone</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                    title="Phone number must be active"></i>
                            </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <div class="input-group mb-3">
                                    <span class="input-group-text border-0 bg-secondary" id="basic-addon1">+91</span>
                                    <input type="tel" name="phone"
                                        class="form-control form-control-lg form-control-solid px-2"
                                        placeholder="Enter Phone number" value="8287110840" />
                                </div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-bold fs-6">Company Site</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <div class="input-group mb-3">
                                    <span class="input-group-text border-0 p-0 bg-secondary" id="basic-addon1">
                                        <select class="form-select py-1 bg-transparent border-0" name="" id="">
                                            <option value="https://" selected>https://</option>
                                            <option value="http://">http://</option>
                                        </select>
                                    </span>
                                    <input type="text" name="phone"
                                        class="form-control form-control-lg form-control-solid px-2"
                                        placeholder="Enter Phone number" value="oohap.in" />
                                </div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Language</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <!--begin::Input-->
                                <select name="language" aria-label="Select a Language" data-control="select2"
                                    data-placeholder="Select a language..."
                                    class="form-select form-select-solid form-select-lg">
                                    <option value="">Select a Language...</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/indonesia.svg') }}" value="id">Bahasa Indonesia - Indonesian
                                    </option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/malaysia.svg') }}" value="msa">Bahasa Melayu - Malay</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/canada.svg') }}" value="ca">Català - Catalan</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/czech-republic.svg') }}" value="cs">Čeština - Czech</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/netherlands.svg') }}" value="da">Dansk - Danish</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/germany.svg') }}" value="de">Deutsch - German</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/united-kingdom.svg') }}" value="en" selected>English</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/united-kingdom.svg') }}" value="en-gb">English UK - British
                                        English</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/spain.svg') }}" value="es">Español - Spanish</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/philippines.svg') }}" value="fil">Filipino</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/france.svg') }}" value="fr">Français - French</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/gabon.svg') }}" value="ga">Gaeilge - Irish (beta)</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/greenland.svg') }}" value="gl">Galego - Galician (beta)</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/croatia.svg') }}" value="hr">Hrvatski - Croatian</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/italy.svg') }}" value="it">Italiano - Italian</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/hungary.svg') }}" value="hu">Magyar - Hungarian</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/netherlands.svg') }}" value="nl">Nederlands - Dutch</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/norway.svg') }}" value="no">Norsk - Norwegian</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/poland.svg') }}" value="pl">Polski - Polish</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/portugal.svg') }}" value="pt">Português - Portuguese</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/romania.svg') }}" value="ro">Română - Romanian</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/slovakia.svg') }}" value="sk">Slovenčina - Slovak</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/finland.svg') }}" value="fi">Suomi - Finnish</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/el-salvador.svg') }}" value="sv">Svenska - Swedish</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/virgin-islands.svg') }}" value="vi">Tiếng Việt - Vietnamese
                                    </option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/turkey.svg') }}" value="tr">Türkçe - Turkish</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/greece.svg') }}" value="el">Ελληνικά - Greek</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/bulgaria.svg') }}" value="bg">Български език - Bulgarian</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/russia.svg') }}" value="ru">Русский - Russian</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/suriname.svg') }}" value="sr">Српски - Serbian</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/ukraine.svg') }}" value="uk">Українська мова - Ukrainian</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/israel.svg') }}" value="he">עִבְרִית - Hebrew</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/pakistan.svg') }}" value="ur">اردو - Urdu (beta)</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/argentina.svg') }}" value="ar">العربية - Arabic</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/argentina.svg') }}" value="fa">فارسی - Persian</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/mauritania.svg') }}" value="mr">मराठी - Marathi</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/india.svg') }}" value="hi">हिन्दी - Hindi</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/bangladesh.svg') }}" value="bn">বাংলা - Bangla</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/guam.svg') }}" value="gu">ગુજરાતી - Gujarati</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/india.svg') }}" value="ta">தமிழ் - Tamil</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/saint-kitts-and-nevis.svg') }}" value="kn">ಕನ್ನಡ - Kannada
                                    </option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/thailand.svg') }}" value="th">ภาษาไทย - Thai</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/south-korea.svg') }}" value="ko">한국어 - Korean</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/japan.svg') }}" value="ja">日本語 - Japanese</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/china.svg') }}" value="zh-cn">简体中文 - Simplified Chinese</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/taiwan.svg') }}" value="zh-tw">繁體中文 - Traditional Chinese
                                    </option>
                                </select>
                                <!--end::Input-->
                                <!--begin::Hint-->
                                <div class="form-text">Please select a preferred language, including date, time, and
                                    number formatting.</div>
                                <!--end::Hint-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Time Zone</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <select name="timezone" aria-label="Select a Timezone" data-control="select2"
                                    data-placeholder="Select a timezone.."
                                    class="form-select form-select-solid form-select-lg">
                                    <option value="">Select a Timezone..</option>
                                    <option data-bs-offset="-39600" value="International Date Line West">(GMT-11:00)
                                        International Date Line West</option>
                                    <option data-bs-offset="-39600" value="Midway Island">(GMT-11:00) Midway Island</option>
                                    <option data-bs-offset="-39600" value="Samoa">(GMT-11:00) Samoa</option>
                                    <option data-bs-offset="-36000" value="Hawaii">(GMT-10:00) Hawaii</option>
                                    <option data-bs-offset="-28800" value="Alaska">(GMT-08:00) Alaska</option>
                                    <option data-bs-offset="-25200" value="Pacific Time (US &amp; Canada)">(GMT-07:00)
                                        Pacific Time (US &amp; Canada)</option>
                                    <option data-bs-offset="-25200" value="Tijuana">(GMT-07:00) Tijuana</option>
                                    <option data-bs-offset="-25200" value="Arizona">(GMT-07:00) Arizona</option>
                                    <option data-bs-offset="-21600" value="Mountain Time (US &amp; Canada)">(GMT-06:00)
                                        Mountain Time (US &amp; Canada)</option>
                                    <option data-bs-offset="-21600" value="Chihuahua">(GMT-06:00) Chihuahua</option>
                                    <option data-bs-offset="-21600" value="Mazatlan">(GMT-06:00) Mazatlan</option>
                                    <option data-bs-offset="-21600" value="Saskatchewan">(GMT-06:00) Saskatchewan</option>
                                    <option data-bs-offset="-21600" value="Central America">(GMT-06:00) Central America
                                    </option>
                                    <option data-bs-offset="-18000" value="Central Time (US &amp; Canada)">(GMT-05:00)
                                        Central Time (US &amp; Canada)</option>
                                    <option data-bs-offset="-18000" value="Guadalajara">(GMT-05:00) Guadalajara</option>
                                    <option data-bs-offset="-18000" value="Mexico City">(GMT-05:00) Mexico City</option>
                                    <option data-bs-offset="-18000" value="Monterrey">(GMT-05:00) Monterrey</option>
                                    <option data-bs-offset="-18000" value="Bogota">(GMT-05:00) Bogota</option>
                                    <option data-bs-offset="-18000" value="Lima">(GMT-05:00) Lima</option>
                                    <option data-bs-offset="-18000" value="Quito">(GMT-05:00) Quito</option>
                                    <option data-bs-offset="-14400" value="Eastern Time (US &amp; Canada)">(GMT-04:00)
                                        Eastern Time (US &amp; Canada)</option>
                                    <option data-bs-offset="-14400" value="Indiana (East)">(GMT-04:00) Indiana (East)
                                    </option>
                                    <option data-bs-offset="-14400" value="Caracas">(GMT-04:00) Caracas</option>
                                    <option data-bs-offset="-14400" value="La Paz">(GMT-04:00) La Paz</option>
                                    <option data-bs-offset="-14400" value="Georgetown">(GMT-04:00) Georgetown</option>
                                    <option data-bs-offset="-10800" value="Atlantic Time (Canada)">(GMT-03:00) Atlantic Time
                                        (Canada)</option>
                                    <option data-bs-offset="-10800" value="Santiago">(GMT-03:00) Santiago</option>
                                    <option data-bs-offset="-10800" value="Brasilia">(GMT-03:00) Brasilia</option>
                                    <option data-bs-offset="-10800" value="Buenos Aires">(GMT-03:00) Buenos Aires</option>
                                    <option data-bs-offset="-9000" value="Newfoundland">(GMT-02:30) Newfoundland</option>
                                    <option data-bs-offset="-7200" value="Greenland">(GMT-02:00) Greenland</option>
                                    <option data-bs-offset="-7200" value="Mid-Atlantic">(GMT-02:00) Mid-Atlantic</option>
                                    <option data-bs-offset="-3600" value="Cape Verde Is.">(GMT-01:00) Cape Verde Is.
                                    </option>
                                    <option data-bs-offset="0" value="Azores">(GMT) Azores</option>
                                    <option data-bs-offset="0" value="Monrovia">(GMT) Monrovia</option>
                                    <option data-bs-offset="0" value="UTC">(GMT) UTC</option>
                                    <option data-bs-offset="3600" value="Dublin">(GMT+01:00) Dublin</option>
                                    <option data-bs-offset="3600" value="Edinburgh">(GMT+01:00) Edinburgh</option>
                                    <option data-bs-offset="3600" value="Lisbon">(GMT+01:00) Lisbon</option>
                                    <option data-bs-offset="3600" value="London">(GMT+01:00) London</option>
                                    <option data-bs-offset="3600" value="Casablanca">(GMT+01:00) Casablanca</option>
                                    <option data-bs-offset="3600" value="West Central Africa">(GMT+01:00) West Central
                                        Africa</option>
                                    <option data-bs-offset="7200" value="Belgrade">(GMT+02:00) Belgrade</option>
                                    <option data-bs-offset="7200" value="Bratislava">(GMT+02:00) Bratislava</option>
                                    <option data-bs-offset="7200" value="Budapest">(GMT+02:00) Budapest</option>
                                    <option data-bs-offset="7200" value="Ljubljana">(GMT+02:00) Ljubljana</option>
                                    <option data-bs-offset="7200" value="Prague">(GMT+02:00) Prague</option>
                                    <option data-bs-offset="7200" value="Sarajevo">(GMT+02:00) Sarajevo</option>
                                    <option data-bs-offset="7200" value="Skopje">(GMT+02:00) Skopje</option>
                                    <option data-bs-offset="7200" value="Warsaw">(GMT+02:00) Warsaw</option>
                                    <option data-bs-offset="7200" value="Zagreb">(GMT+02:00) Zagreb</option>
                                    <option data-bs-offset="7200" value="Brussels">(GMT+02:00) Brussels</option>
                                    <option data-bs-offset="7200" value="Copenhagen">(GMT+02:00) Copenhagen</option>
                                    <option data-bs-offset="7200" value="Madrid">(GMT+02:00) Madrid</option>
                                    <option data-bs-offset="7200" value="Paris">(GMT+02:00) Paris</option>
                                    <option data-bs-offset="7200" value="Amsterdam">(GMT+02:00) Amsterdam</option>
                                    <option data-bs-offset="7200" value="Berlin">(GMT+02:00) Berlin</option>
                                    <option data-bs-offset="7200" value="Bern">(GMT+02:00) Bern</option>
                                    <option data-bs-offset="7200" value="Rome">(GMT+02:00) Rome</option>
                                    <option data-bs-offset="7200" value="Stockholm">(GMT+02:00) Stockholm</option>
                                    <option data-bs-offset="7200" value="Vienna">(GMT+02:00) Vienna</option>
                                    <option data-bs-offset="7200" value="Cairo">(GMT+02:00) Cairo</option>
                                    <option data-bs-offset="7200" value="Harare">(GMT+02:00) Harare</option>
                                    <option data-bs-offset="7200" value="Pretoria">(GMT+02:00) Pretoria</option>
                                    <option data-bs-offset="10800" value="Bucharest">(GMT+03:00) Bucharest</option>
                                    <option data-bs-offset="10800" value="Helsinki">(GMT+03:00) Helsinki</option>
                                    <option data-bs-offset="10800" value="Kiev">(GMT+03:00) Kiev</option>
                                    <option data-bs-offset="10800" value="Kyiv">(GMT+03:00) Kyiv</option>
                                    <option data-bs-offset="10800" value="Riga">(GMT+03:00) Riga</option>
                                    <option data-bs-offset="10800" value="Sofia">(GMT+03:00) Sofia</option>
                                    <option data-bs-offset="10800" value="Tallinn">(GMT+03:00) Tallinn</option>
                                    <option data-bs-offset="10800" value="Vilnius">(GMT+03:00) Vilnius</option>
                                    <option data-bs-offset="10800" value="Athens">(GMT+03:00) Athens</option>
                                    <option data-bs-offset="10800" value="Istanbul">(GMT+03:00) Istanbul</option>
                                    <option data-bs-offset="10800" value="Minsk">(GMT+03:00) Minsk</option>
                                    <option data-bs-offset="10800" value="Jerusalem">(GMT+03:00) Jerusalem</option>
                                    <option data-bs-offset="10800" value="Moscow">(GMT+03:00) Moscow</option>
                                    <option data-bs-offset="10800" value="St. Petersburg">(GMT+03:00) St. Petersburg
                                    </option>
                                    <option data-bs-offset="10800" value="Volgograd">(GMT+03:00) Volgograd</option>
                                    <option data-bs-offset="10800" value="Kuwait">(GMT+03:00) Kuwait</option>
                                    <option data-bs-offset="10800" value="Riyadh">(GMT+03:00) Riyadh</option>
                                    <option data-bs-offset="10800" value="Nairobi">(GMT+03:00) Nairobi</option>
                                    <option data-bs-offset="10800" value="Baghdad">(GMT+03:00) Baghdad</option>
                                    <option data-bs-offset="14400" value="Abu Dhabi">(GMT+04:00) Abu Dhabi</option>
                                    <option data-bs-offset="14400" value="Muscat">(GMT+04:00) Muscat</option>
                                    <option data-bs-offset="14400" value="Baku">(GMT+04:00) Baku</option>
                                    <option data-bs-offset="14400" value="Tbilisi">(GMT+04:00) Tbilisi</option>
                                    <option data-bs-offset="14400" value="Yerevan">(GMT+04:00) Yerevan</option>
                                    <option data-bs-offset="16200" value="Tehran">(GMT+04:30) Tehran</option>
                                    <option data-bs-offset="16200" value="Kabul">(GMT+04:30) Kabul</option>
                                    <option data-bs-offset="18000" value="Ekaterinburg">(GMT+05:00) Ekaterinburg</option>
                                    <option data-bs-offset="18000" value="Islamabad">(GMT+05:00) Islamabad</option>
                                    <option data-bs-offset="18000" value="Karachi">(GMT+05:00) Karachi</option>
                                    <option data-bs-offset="18000" value="Tashkent">(GMT+05:00) Tashkent</option>
                                    <option data-bs-offset="19800" value="Chennai">(GMT+05:30) Chennai</option>
                                    <option data-bs-offset="19800" value="Kolkata" selected>(GMT+05:30) Kolkata</option>
                                    <option data-bs-offset="19800" value="Mumbai">(GMT+05:30) Mumbai</option>
                                    <option data-bs-offset="19800" value="New Delhi">(GMT+05:30) New Delhi</option>
                                    <option data-bs-offset="19800" value="Sri Jayawardenepura">(GMT+05:30) Sri
                                        Jayawardenepura</option>
                                    <option data-bs-offset="20700" value="Kathmandu">(GMT+05:45) Kathmandu</option>
                                    <option data-bs-offset="21600" value="Astana">(GMT+06:00) Astana</option>
                                    <option data-bs-offset="21600" value="Dhaka">(GMT+06:00) Dhaka</option>
                                    <option data-bs-offset="21600" value="Almaty">(GMT+06:00) Almaty</option>
                                    <option data-bs-offset="21600" value="Urumqi">(GMT+06:00) Urumqi</option>
                                    <option data-bs-offset="23400" value="Rangoon">(GMT+06:30) Rangoon</option>
                                    <option data-bs-offset="25200" value="Novosibirsk">(GMT+07:00) Novosibirsk</option>
                                    <option data-bs-offset="25200" value="Bangkok">(GMT+07:00) Bangkok</option>
                                    <option data-bs-offset="25200" value="Hanoi">(GMT+07:00) Hanoi</option>
                                    <option data-bs-offset="25200" value="Jakarta">(GMT+07:00) Jakarta</option>
                                    <option data-bs-offset="25200" value="Krasnoyarsk">(GMT+07:00) Krasnoyarsk</option>
                                    <option data-bs-offset="28800" value="Beijing">(GMT+08:00) Beijing</option>
                                    <option data-bs-offset="28800" value="Chongqing">(GMT+08:00) Chongqing</option>
                                    <option data-bs-offset="28800" value="Hong Kong">(GMT+08:00) Hong Kong</option>
                                    <option data-bs-offset="28800" value="Kuala Lumpur">(GMT+08:00) Kuala Lumpur</option>
                                    <option data-bs-offset="28800" value="Singapore">(GMT+08:00) Singapore</option>
                                    <option data-bs-offset="28800" value="Taipei">(GMT+08:00) Taipei</option>
                                    <option data-bs-offset="28800" value="Perth">(GMT+08:00) Perth</option>
                                    <option data-bs-offset="28800" value="Irkutsk">(GMT+08:00) Irkutsk</option>
                                    <option data-bs-offset="28800" value="Ulaan Bataar">(GMT+08:00) Ulaan Bataar</option>
                                    <option data-bs-offset="32400" value="Seoul">(GMT+09:00) Seoul</option>
                                    <option data-bs-offset="32400" value="Osaka">(GMT+09:00) Osaka</option>
                                    <option data-bs-offset="32400" value="Sapporo">(GMT+09:00) Sapporo</option>
                                    <option data-bs-offset="32400" value="Tokyo">(GMT+09:00) Tokyo</option>
                                    <option data-bs-offset="32400" value="Yakutsk">(GMT+09:00) Yakutsk</option>
                                    <option data-bs-offset="34200" value="Darwin">(GMT+09:30) Darwin</option>
                                    <option data-bs-offset="34200" value="Adelaide">(GMT+09:30) Adelaide</option>
                                    <option data-bs-offset="36000" value="Canberra">(GMT+10:00) Canberra</option>
                                    <option data-bs-offset="36000" value="Melbourne">(GMT+10:00) Melbourne</option>
                                    <option data-bs-offset="36000" value="Sydney">(GMT+10:00) Sydney</option>
                                    <option data-bs-offset="36000" value="Brisbane">(GMT+10:00) Brisbane</option>
                                    <option data-bs-offset="36000" value="Hobart">(GMT+10:00) Hobart</option>
                                    <option data-bs-offset="36000" value="Vladivostok">(GMT+10:00) Vladivostok</option>
                                    <option data-bs-offset="36000" value="Guam">(GMT+10:00) Guam</option>
                                    <option data-bs-offset="36000" value="Port Moresby">(GMT+10:00) Port Moresby</option>
                                    <option data-bs-offset="36000" value="Solomon Is.">(GMT+10:00) Solomon Is.</option>
                                    <option data-bs-offset="39600" value="Magadan">(GMT+11:00) Magadan</option>
                                    <option data-bs-offset="39600" value="New Caledonia">(GMT+11:00) New Caledonia</option>
                                    <option data-bs-offset="43200" value="Fiji">(GMT+12:00) Fiji</option>
                                    <option data-bs-offset="43200" value="Kamchatka">(GMT+12:00) Kamchatka</option>
                                    <option data-bs-offset="43200" value="Marshall Is.">(GMT+12:00) Marshall Is.</option>
                                    <option data-bs-offset="43200" value="Auckland">(GMT+12:00) Auckland</option>
                                    <option data-bs-offset="43200" value="Wellington">(GMT+12:00) Wellington</option>
                                    <option data-bs-offset="46800" value="Nuku'alofa">(GMT+13:00) Nuku'alofa</option>
                                </select>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-bold fs-6">Currency</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <select name="currnecy" aria-label="Select a Currency" data-control="select2"
                                    data-placeholder="Select a currency.."
                                    class="form-select form-select-solid form-select-lg">
                                    <option value="">Select a currency..</option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/united-states.svg') }}" value="USD">
                                        <b>USD</b>&#160;-&#160;USA dollar
                                    </option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/united-states.svg') }}" value="USD" selected>
                                        <b>INR</b>&#160;-&#160;Indian Rupee
                                    </option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/united-kingdom.svg') }}" value="GBP">
                                        <b>GBP</b>&#160;-&#160;British pound
                                    </option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/australia.svg') }}" value="AUD">
                                        <b>AUD</b>&#160;-&#160;Australian dollar
                                    </option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/japan.svg') }}" value="JPY">
                                        <b>JPY</b>&#160;-&#160;Japanese yen
                                    </option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/sweden.svg') }}" value="SEK">
                                        <b>SEK</b>&#160;-&#160;Swedish krona
                                    </option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/canada.svg') }}" value="CAD">
                                        <b>CAD</b>&#160;-&#160;Canadian dollar
                                    </option>
                                    <option data-kt-flag="{{ asset('admin/media/flags/switzerland.svg') }}" value="CHF">
                                        <b>CHF</b>&#160;-&#160;Swiss franc
                                    </option>
                                </select>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Communication</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <!--begin::Options-->
                                <div class="d-flex align-items-center mt-3">
                                    <!--begin::Option-->
                                    <label class="form-check form-check-inline form-check-solid me-5">
                                        <input class="form-check-input" name="communication[]" type="checkbox" value="1" />
                                        <span class="fw-bold ps-2 fs-6">Email</span>
                                    </label>
                                    <!--end::Option-->
                                    <!--begin::Option-->
                                    <label class="form-check form-check-inline form-check-solid">
                                        <input class="form-check-input" name="communication[]" type="checkbox" value="2" />
                                        <span class="fw-bold ps-2 fs-6">Phone</span>
                                    </label>
                                    <!--end::Option-->
                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-0">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-bold fs-6">Allow Marketing</label>
                            <!--begin::Label-->
                            <!--begin::Label-->
                            <div class="col-lg-8 d-flex align-items-center">
                                <div class="form-check form-check-solid form-switch fv-row">
                                    <input class="form-check-input w-45px h-30px" type="checkbox" id="allowmarketing"
                                        checked="checked" />
                                    <label class="form-check-label" for="allowmarketing"></label>
                                </div>
                            </div>
                            <!--begin::Label-->
                        </div>
                        <!--end::Input group-->
                    </div>
                    <!--end::Card body-->
                    <!--begin::Actions-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
                        <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save
                            Changes</button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Content-->
        </div>
        <!--begin::Sign-in Method-->
        <div class="card mb-5 mb-xl-10">
            <!--begin::Card header-->
            <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                data-bs-target="#kt_account_signin_method">
                <div class="card-title m-0">
                    <h3 class="fw-bolder m-0">Sign-in Method</h3>
                </div>
            </div>
            <!--end::Card header-->
            <!--begin::Content-->
            <div id="kt_account_settings_signin_method" class="collapse show">
                <!--begin::Card body-->
                <div class="card-body border-top p-9">
                    <!--begin::Email Address-->
                    <div class="d-flex flex-wrap align-items-center">
                        <!--begin::Label-->
                        <div id="kt_signin_email">
                            <div class="fs-6 fw-bolder mb-1">Email Address</div>
                            <div class="fw-bold text-gray-600">admin@gmail.com</div>
                        </div>
                        <!--end::Label-->
                        <!--begin::Edit-->
                        <div id="kt_signin_email_edit" class="flex-row-fluid d-none">
                            <!--begin::Form-->
                            <form id="kt_signin_change_email" class="form" novalidate="novalidate">
                                <div class="row mb-6">
                                    <div class="col-lg-6 mb-4 mb-lg-0">
                                        <div class="fv-row mb-0">
                                            <label for="emailaddress" class="form-label fs-6 fw-bolder mb-3">Enter New
                                                Email Address</label>
                                            <input type="email" class="form-control form-control-lg form-control-solid"
                                                id="emailaddress" placeholder="Email Address" name="emailaddress"
                                                value="admin@gmail.com" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="fv-row mb-0">
                                            <label for="confirmemailpassword"
                                                class="form-label fs-6 fw-bolder mb-3">Confirm Password</label>
                                            <input type="password" class="form-control form-control-lg form-control-solid"
                                                name="confirmemailpassword" id="confirmemailpassword" />
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <button id="kt_signin_submit" type="button" class="btn btn-primary me-2 px-6">Update
                                        Email</button>
                                    <button id="kt_signin_cancel" type="button"
                                        class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
                                </div>
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Edit-->
                        <!--begin::Action-->
                        <div id="kt_signin_email_button" class="ms-auto">
                            <button class="btn btn-light btn-active-light-primary">Change Email</button>
                        </div>
                        <!--end::Action-->
                    </div>
                    <!--end::Email Address-->
                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-6"></div>
                    <!--end::Separator-->
                    <!--begin::Password-->
                    <div class="d-flex flex-wrap align-items-center mb-10">
                        <!--begin::Label-->
                        <div id="kt_signin_password">
                            <div class="fs-6 fw-bolder mb-1">Password</div>
                            <div class="fw-bold text-gray-600">************</div>
                        </div>
                        <!--end::Label-->
                        <!--begin::Edit-->
                        <div id="kt_signin_password_edit" class="flex-row-fluid d-none">
                            <!--begin::Form-->
                            <form id="kt_signin_change_password" class="form" novalidate="novalidate">
                                <div class="row mb-1">
                                    <div class="col-lg-4">
                                        <div class="fv-row mb-0">
                                            <label for="currentpassword" class="form-label fs-6 fw-bolder mb-3">Current
                                                Password</label>
                                            <input type="password" class="form-control form-control-lg form-control-solid"
                                                name="currentpassword" id="currentpassword" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="fv-row mb-0">
                                            <label for="newpassword" class="form-label fs-6 fw-bolder mb-3">New
                                                Password</label>
                                            <input type="password" class="form-control form-control-lg form-control-solid"
                                                name="newpassword" id="newpassword" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="fv-row mb-0">
                                            <label for="confirmpassword" class="form-label fs-6 fw-bolder mb-3">Confirm New
                                                Password</label>
                                            <input type="password" class="form-control form-control-lg form-control-solid"
                                                name="confirmpassword" id="confirmpassword" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-text mb-5">Password must be at least 8 character and contain symbols</div>
                                <div class="d-flex">
                                    <button id="kt_password_submit" type="button" class="btn btn-primary me-2 px-6">Update
                                        Password</button>
                                    <button id="kt_password_cancel" type="button"
                                        class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
                                </div>
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Edit-->
                        <!--begin::Action-->
                        <div id="kt_signin_password_button" class="ms-auto">
                            <button class="btn btn-light btn-active-light-primary">Reset Password</button>
                        </div>
                        <!--end::Action-->
                    </div>
                    <!--end::Password-->
                    <!--begin::Notice-->
                    <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-6">
                        <!--begin::Icon-->
                        <!--begin::Svg Icon | path: icons/duotune/general/gen048.svg-->
                        <span class="svg-icon d-flex justify-content-center align-items-center me-4">
                            <i class="fa-solid fa-shield-check fs-1 text-primary"></i>
                        </span>
                        <!--end::Svg Icon-->
                        <!--end::Icon-->
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                            <!--begin::Content-->
                            <div class="mb-3 mb-md-0 fw-bold">
                                <h4 class="text-gray-900 fw-bolder">Secure Your Account</h4>
                                <div class="fs-6 text-gray-700 pe-7">Two-factor authentication adds an extra layer of
                                    security to your account. To log in, in addition you'll need to provide a 6 digit code
                                </div>
                            </div>
                            <!--end::Content-->
                            <!--begin::Action-->
                            <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap">Enable</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Notice-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Sign-in Method-->
    </div>
    <!--end::Content wrapper-->
@endsection
