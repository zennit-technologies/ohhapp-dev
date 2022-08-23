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
                    <h1 class="d-flex text-dark fw-bolder m-0 fs-3">MarketPlace Listings</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-gray-600">
                            <a href="{{ route('index') }}" class="text-gray-600 text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-gray-600">Marketplace</li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-gray-500">Manage Listing</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center py-2">
                    <!--begin::Button-->
                    <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                        data-bs-target="#create_new_admin_vendor">Create New</a>
                    <!--end::Button-->
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Toolbar wrapper-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Content-->
        <div class="app-content flex-column-fluid" id="kt_app_content">
            <!--begin::Contacts App- Add New Contact-->
            <div class="row g-7">
                <div class="col-xl-6">
                    <!--begin::Contacts-->
                    <div class="card card-flush h-lg-100" id="kt_contacts_main">
                        <!--begin::Card header-->
                        <div class="card-header pt-7" id="kt_chat_contacts_header">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
                                <span class="svg-icon svg-icon-1 me-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path
                                            d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z"
                                            fill="currentColor" />
                                        <path opacity="0.3"
                                            d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <h2>Add New Contact</h2>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-5">
                            <!--begin::Form-->
                            <form id="kt_ecommerce_settings_general_form" class="form" action="#">
                                <!--begin::Input group-->
                                <div class="mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold mb-3">
                                        <span>Update Avatar</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="Allowed file types: png, jpg, jpeg."></i>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Image input wrapper-->
                                    <div class="mt-1">
                                        <!--begin::Image input-->
                                        <div class="image-input image-input-outline" data-kt-image-input="true"
                                            style="background-image: url('../../assets/media/svg/avatars/blank.svg')">
                                            <!--begin::Preview existing avatar-->
                                            <div class="image-input-wrapper w-100px h-100px"
                                                style="background-image: url('../../assets/media/svg/avatars/blank.svg')">
                                            </div>
                                            <!--end::Preview existing avatar-->
                                            <!--begin::Edit-->
                                            <label
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                title="Change avatar">
                                                <i class="bi bi-pencil-fill fs-7"></i>
                                                <!--begin::Inputs-->
                                                <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                                <input type="hidden" name="avatar_remove" />
                                                <!--end::Inputs-->
                                            </label>
                                            <!--end::Edit-->
                                            <!--begin::Cancel-->
                                            <span
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                title="Cancel avatar">
                                                <i class="bi bi-x fs-2"></i>
                                            </span>
                                            <!--end::Cancel-->
                                            <!--begin::Remove-->
                                            <span
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                title="Remove avatar">
                                                <i class="bi bi-x fs-2"></i>
                                            </span>
                                            <!--end::Remove-->
                                        </div>
                                        <!--end::Image input-->
                                    </div>
                                    <!--end::Image input wrapper-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mt-3">
                                        <span class="required">Name</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="Enter the contact's name."></i>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="name" value="" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mt-3">
                                        <span>Company Name</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="Enter the contact's company name (optional)."></i>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="company_name"
                                        value="" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Row-->
                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                    <!--begin::Col-->
                                    <div class="col">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Email</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="Enter the contact's email."></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="email" class="form-control form-control-solid" name="email"
                                                value="" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span>Phone</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="Enter the contact's phone number (optional)."></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid" name="phone"
                                                value="" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                    <!--begin::Col-->
                                    <div class="col">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span>City</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="Enter the contact's city of residence (optional)."></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid" name="city"
                                                value="" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Country</span>
                                            </label>
                                            <!--end::Label-->
                                            <div class="w-100">
                                                <div class="form-floating border rounded">
                                                    <!--begin::Select2-->
                                                    <select id="kt_ecommerce_select2_country"
                                                        class="form-select form-select-solid lh-1 py-3" name="country"
                                                        data-kt-ecommerce-settings-type="select2_flags"
                                                        data-placeholder="Select a country">
                                                        <option></option>
                                                        <option value="AF"
                                                            data-kt-select2-country="../../assets/media/flags/afghanistan.svg">
                                                            Afghanistan</option>
                                                        <option value="AX"
                                                            data-kt-select2-country="assets/media/flags/aland-islands.html">
                                                            Aland Islands</option>
                                                        <option value="AL"
                                                            data-kt-select2-country="assets/media/flags/albania.html">
                                                            Albania</option>
                                                        <option value="DZ"
                                                            data-kt-select2-country="assets/media/flags/algeria.html">
                                                            Algeria</option>
                                                        <option value="AS"
                                                            data-kt-select2-country="assets/media/flags/american-samoa.html">
                                                            American Samoa</option>
                                                        <option value="AD"
                                                            data-kt-select2-country="assets/media/flags/andorra.html">
                                                            Andorra</option>
                                                        <option value="AO"
                                                            data-kt-select2-country="assets/media/flags/angola.html">Angola
                                                        </option>
                                                        <option value="AI"
                                                            data-kt-select2-country="assets/media/flags/anguilla.html">
                                                            Anguilla</option>
                                                        <option value="AG"
                                                            data-kt-select2-country="assets/media/flags/antigua-and-barbuda.html">
                                                            Antigua and Barbuda</option>
                                                        <option value="AR"
                                                            data-kt-select2-country="assets/media/flags/argentina.html">
                                                            Argentina</option>
                                                        <option value="AM"
                                                            data-kt-select2-country="assets/media/flags/armenia.html">
                                                            Armenia</option>
                                                        <option value="AW"
                                                            data-kt-select2-country="assets/media/flags/aruba.html">Aruba
                                                        </option>
                                                        <option value="AU"
                                                            data-kt-select2-country="assets/media/flags/australia.html">
                                                            Australia</option>
                                                        <option value="AT"
                                                            data-kt-select2-country="assets/media/flags/austria.html">
                                                            Austria</option>
                                                        <option value="AZ"
                                                            data-kt-select2-country="assets/media/flags/azerbaijan.html">
                                                            Azerbaijan</option>
                                                        <option value="BS"
                                                            data-kt-select2-country="assets/media/flags/bahamas.html">
                                                            Bahamas</option>
                                                        <option value="BH"
                                                            data-kt-select2-country="assets/media/flags/bahrain.html">
                                                            Bahrain</option>
                                                        <option value="BD"
                                                            data-kt-select2-country="assets/media/flags/bangladesh.html">
                                                            Bangladesh</option>
                                                        <option value="BB"
                                                            data-kt-select2-country="assets/media/flags/barbados.html">
                                                            Barbados</option>
                                                        <option value="BY"
                                                            data-kt-select2-country="assets/media/flags/belarus.html">
                                                            Belarus</option>
                                                        <option value="BE"
                                                            data-kt-select2-country="assets/media/flags/belgium.html">
                                                            Belgium</option>
                                                        <option value="BZ"
                                                            data-kt-select2-country="assets/media/flags/belize.html">Belize
                                                        </option>
                                                        <option value="BJ"
                                                            data-kt-select2-country="assets/media/flags/benin.html">Benin
                                                        </option>
                                                        <option value="BM"
                                                            data-kt-select2-country="assets/media/flags/bermuda.html">
                                                            Bermuda</option>
                                                        <option value="BT"
                                                            data-kt-select2-country="assets/media/flags/bhutan.html">Bhutan
                                                        </option>
                                                        <option value="BO"
                                                            data-kt-select2-country="assets/media/flags/bolivia.html">
                                                            Bolivia, Plurinational State of</option>
                                                        <option value="BQ"
                                                            data-kt-select2-country="assets/media/flags/bonaire.html">
                                                            Bonaire, Sint Eustatius and Saba</option>
                                                        <option value="BA"
                                                            data-kt-select2-country="assets/media/flags/bosnia-and-herzegovina.html">
                                                            Bosnia and Herzegovina</option>
                                                        <option value="BW"
                                                            data-kt-select2-country="assets/media/flags/botswana.html">
                                                            Botswana</option>
                                                        <option value="BR"
                                                            data-kt-select2-country="assets/media/flags/brazil.html">Brazil
                                                        </option>
                                                        <option value="IO"
                                                            data-kt-select2-country="assets/media/flags/british-indian-ocean-territory.html">
                                                            British Indian Ocean Territory</option>
                                                        <option value="BN"
                                                            data-kt-select2-country="assets/media/flags/brunei.html">Brunei
                                                            Darussalam</option>
                                                        <option value="BG"
                                                            data-kt-select2-country="assets/media/flags/bulgaria.html">
                                                            Bulgaria</option>
                                                        <option value="BF"
                                                            data-kt-select2-country="assets/media/flags/burkina-faso.html">
                                                            Burkina Faso</option>
                                                        <option value="BI"
                                                            data-kt-select2-country="assets/media/flags/burundi.html">
                                                            Burundi</option>
                                                        <option value="KH"
                                                            data-kt-select2-country="assets/media/flags/cambodia.html">
                                                            Cambodia</option>
                                                        <option value="CM"
                                                            data-kt-select2-country="assets/media/flags/cameroon.html">
                                                            Cameroon</option>
                                                        <option value="CA"
                                                            data-kt-select2-country="assets/media/flags/canada.html">Canada
                                                        </option>
                                                        <option value="CV"
                                                            data-kt-select2-country="assets/media/flags/cape-verde.html">
                                                            Cape Verde</option>
                                                        <option value="KY"
                                                            data-kt-select2-country="assets/media/flags/cayman-islands.html">
                                                            Cayman Islands</option>
                                                        <option value="CF"
                                                            data-kt-select2-country="assets/media/flags/central-african-republic.html">
                                                            Central African Republic</option>
                                                        <option value="TD"
                                                            data-kt-select2-country="assets/media/flags/chad.html">Chad
                                                        </option>
                                                        <option value="CL"
                                                            data-kt-select2-country="assets/media/flags/chile.html">Chile
                                                        </option>
                                                        <option value="CN"
                                                            data-kt-select2-country="assets/media/flags/china.html">China
                                                        </option>
                                                        <option value="CX"
                                                            data-kt-select2-country="assets/media/flags/christmas-island.html">
                                                            Christmas Island</option>
                                                        <option value="CC"
                                                            data-kt-select2-country="assets/media/flags/cocos-island.html">
                                                            Cocos (Keeling) Islands</option>
                                                        <option value="CO"
                                                            data-kt-select2-country="assets/media/flags/colombia.html">
                                                            Colombia</option>
                                                        <option value="KM"
                                                            data-kt-select2-country="assets/media/flags/comoros.html">
                                                            Comoros</option>
                                                        <option value="CK"
                                                            data-kt-select2-country="assets/media/flags/cook-islands.html">
                                                            Cook Islands</option>
                                                        <option value="CR"
                                                            data-kt-select2-country="assets/media/flags/costa-rica.html">
                                                            Costa Rica</option>
                                                        <option value="CI"
                                                            data-kt-select2-country="assets/media/flags/ivory-coast.html">
                                                            Côte d'Ivoire</option>
                                                        <option value="HR"
                                                            data-kt-select2-country="assets/media/flags/croatia.html">
                                                            Croatia</option>
                                                        <option value="CU"
                                                            data-kt-select2-country="assets/media/flags/cuba.html">Cuba
                                                        </option>
                                                        <option value="CW"
                                                            data-kt-select2-country="assets/media/flags/curacao.html">
                                                            Curaçao</option>
                                                        <option value="CZ"
                                                            data-kt-select2-country="assets/media/flags/czech-republic.html">
                                                            Czech Republic</option>
                                                        <option value="DK"
                                                            data-kt-select2-country="assets/media/flags/denmark.html">
                                                            Denmark</option>
                                                        <option value="DJ"
                                                            data-kt-select2-country="assets/media/flags/djibouti.html">
                                                            Djibouti</option>
                                                        <option value="DM"
                                                            data-kt-select2-country="assets/media/flags/dominica.html">
                                                            Dominica</option>
                                                        <option value="DO"
                                                            data-kt-select2-country="assets/media/flags/dominican-republic.html">
                                                            Dominican Republic</option>
                                                        <option value="EC"
                                                            data-kt-select2-country="assets/media/flags/ecuador.html">
                                                            Ecuador</option>
                                                        <option value="EG"
                                                            data-kt-select2-country="assets/media/flags/egypt.html">Egypt
                                                        </option>
                                                        <option value="SV"
                                                            data-kt-select2-country="assets/media/flags/el-salvador.html">El
                                                            Salvador</option>
                                                        <option value="GQ"
                                                            data-kt-select2-country="assets/media/flags/equatorial-guinea.html">
                                                            Equatorial Guinea</option>
                                                        <option value="ER"
                                                            data-kt-select2-country="assets/media/flags/eritrea.html">
                                                            Eritrea</option>
                                                        <option value="EE"
                                                            data-kt-select2-country="assets/media/flags/estonia.html">
                                                            Estonia</option>
                                                        <option value="ET"
                                                            data-kt-select2-country="assets/media/flags/ethiopia.html">
                                                            Ethiopia</option>
                                                        <option value="FK"
                                                            data-kt-select2-country="assets/media/flags/falkland-islands.html">
                                                            Falkland Islands (Malvinas)</option>
                                                        <option value="FJ"
                                                            data-kt-select2-country="assets/media/flags/fiji.html">Fiji
                                                        </option>
                                                        <option value="FI"
                                                            data-kt-select2-country="assets/media/flags/finland.html">
                                                            Finland</option>
                                                        <option value="FR"
                                                            data-kt-select2-country="assets/media/flags/france.html">France
                                                        </option>
                                                        <option value="PF"
                                                            data-kt-select2-country="assets/media/flags/french-polynesia.html">
                                                            French Polynesia</option>
                                                        <option value="GA"
                                                            data-kt-select2-country="assets/media/flags/gabon.html">Gabon
                                                        </option>
                                                        <option value="GM"
                                                            data-kt-select2-country="assets/media/flags/gambia.html">Gambia
                                                        </option>
                                                        <option value="GE"
                                                            data-kt-select2-country="assets/media/flags/georgia.html">
                                                            Georgia</option>
                                                        <option value="DE"
                                                            data-kt-select2-country="assets/media/flags/germany.html">
                                                            Germany</option>
                                                        <option value="GH"
                                                            data-kt-select2-country="assets/media/flags/ghana.html">Ghana
                                                        </option>
                                                        <option value="GI"
                                                            data-kt-select2-country="assets/media/flags/gibraltar.html">
                                                            Gibraltar</option>
                                                        <option value="GR"
                                                            data-kt-select2-country="assets/media/flags/greece.html">Greece
                                                        </option>
                                                        <option value="GL"
                                                            data-kt-select2-country="assets/media/flags/greenland.html">
                                                            Greenland</option>
                                                        <option value="GD"
                                                            data-kt-select2-country="assets/media/flags/grenada.html">
                                                            Grenada</option>
                                                        <option value="GU"
                                                            data-kt-select2-country="assets/media/flags/guam.html">Guam
                                                        </option>
                                                        <option value="GT"
                                                            data-kt-select2-country="assets/media/flags/guatemala.html">
                                                            Guatemala</option>
                                                        <option value="GG"
                                                            data-kt-select2-country="assets/media/flags/guernsey.html">
                                                            Guernsey</option>
                                                        <option value="GN"
                                                            data-kt-select2-country="assets/media/flags/guinea.html">Guinea
                                                        </option>
                                                        <option value="GW"
                                                            data-kt-select2-country="assets/media/flags/guinea-bissau.html">
                                                            Guinea-Bissau</option>
                                                        <option value="HT"
                                                            data-kt-select2-country="assets/media/flags/haiti.html">Haiti
                                                        </option>
                                                        <option value="VA"
                                                            data-kt-select2-country="assets/media/flags/vatican-city.html">
                                                            Holy See (Vatican City State)</option>
                                                        <option value="HN"
                                                            data-kt-select2-country="assets/media/flags/honduras.html">
                                                            Honduras</option>
                                                        <option value="HK"
                                                            data-kt-select2-country="assets/media/flags/hong-kong.html">Hong
                                                            Kong</option>
                                                        <option value="HU"
                                                            data-kt-select2-country="assets/media/flags/hungary.html">
                                                            Hungary</option>
                                                        <option value="IS"
                                                            data-kt-select2-country="assets/media/flags/iceland.html">
                                                            Iceland</option>
                                                        <option value="IN"
                                                            data-kt-select2-country="assets/media/flags/india.html">India
                                                        </option>
                                                        <option value="ID"
                                                            data-kt-select2-country="assets/media/flags/indonesia.html">
                                                            Indonesia</option>
                                                        <option value="IR"
                                                            data-kt-select2-country="assets/media/flags/iran.html">Iran,
                                                            Islamic Republic of</option>
                                                        <option value="IQ"
                                                            data-kt-select2-country="assets/media/flags/iraq.html">Iraq
                                                        </option>
                                                        <option value="IE"
                                                            data-kt-select2-country="assets/media/flags/ireland.html">
                                                            Ireland</option>
                                                        <option value="IM"
                                                            data-kt-select2-country="assets/media/flags/isle-of-man.html">
                                                            Isle of Man</option>
                                                        <option value="IL"
                                                            data-kt-select2-country="assets/media/flags/israel.html">Israel
                                                        </option>
                                                        <option value="IT"
                                                            data-kt-select2-country="assets/media/flags/italy.html">Italy
                                                        </option>
                                                        <option value="JM"
                                                            data-kt-select2-country="assets/media/flags/jamaica.html">
                                                            Jamaica</option>
                                                        <option value="JP"
                                                            data-kt-select2-country="assets/media/flags/japan.html">Japan
                                                        </option>
                                                        <option value="JE"
                                                            data-kt-select2-country="assets/media/flags/jersey.html">Jersey
                                                        </option>
                                                        <option value="JO"
                                                            data-kt-select2-country="assets/media/flags/jordan.html">Jordan
                                                        </option>
                                                        <option value="KZ"
                                                            data-kt-select2-country="assets/media/flags/kazakhstan.html">
                                                            Kazakhstan</option>
                                                        <option value="KE"
                                                            data-kt-select2-country="assets/media/flags/kenya.html">Kenya
                                                        </option>
                                                        <option value="KI"
                                                            data-kt-select2-country="assets/media/flags/kiribati.html">
                                                            Kiribati</option>
                                                        <option value="KP"
                                                            data-kt-select2-country="assets/media/flags/north-korea.html">
                                                            Korea, Democratic People's Republic of</option>
                                                        <option value="KW"
                                                            data-kt-select2-country="assets/media/flags/kuwait.html">Kuwait
                                                        </option>
                                                        <option value="KG"
                                                            data-kt-select2-country="assets/media/flags/kyrgyzstan.html">
                                                            Kyrgyzstan</option>
                                                        <option value="LA"
                                                            data-kt-select2-country="assets/media/flags/laos.html">Lao
                                                            People's Democratic Republic</option>
                                                        <option value="LV"
                                                            data-kt-select2-country="assets/media/flags/latvia.html">Latvia
                                                        </option>
                                                        <option value="LB"
                                                            data-kt-select2-country="assets/media/flags/lebanon.html">
                                                            Lebanon</option>
                                                        <option value="LS"
                                                            data-kt-select2-country="assets/media/flags/lesotho.html">
                                                            Lesotho</option>
                                                        <option value="LR"
                                                            data-kt-select2-country="assets/media/flags/liberia.html">
                                                            Liberia</option>
                                                        <option value="LY"
                                                            data-kt-select2-country="assets/media/flags/libya.html">Libya
                                                        </option>
                                                        <option value="LI"
                                                            data-kt-select2-country="assets/media/flags/liechtenstein.html">
                                                            Liechtenstein</option>
                                                        <option value="LT"
                                                            data-kt-select2-country="assets/media/flags/lithuania.html">
                                                            Lithuania</option>
                                                        <option value="LU"
                                                            data-kt-select2-country="assets/media/flags/luxembourg.html">
                                                            Luxembourg</option>
                                                        <option value="MO"
                                                            data-kt-select2-country="assets/media/flags/macao.html">Macao
                                                        </option>
                                                        <option value="MG"
                                                            data-kt-select2-country="assets/media/flags/madagascar.html">
                                                            Madagascar</option>
                                                        <option value="MW"
                                                            data-kt-select2-country="assets/media/flags/malawi.html">Malawi
                                                        </option>
                                                        <option value="MY"
                                                            data-kt-select2-country="assets/media/flags/malaysia.html">
                                                            Malaysia</option>
                                                        <option value="MV"
                                                            data-kt-select2-country="assets/media/flags/maldives.html">
                                                            Maldives</option>
                                                        <option value="ML"
                                                            data-kt-select2-country="assets/media/flags/mali.html">Mali
                                                        </option>
                                                        <option value="MT"
                                                            data-kt-select2-country="assets/media/flags/malta.html">Malta
                                                        </option>
                                                        <option value="MH"
                                                            data-kt-select2-country="assets/media/flags/marshall-island.html">
                                                            Marshall Islands</option>
                                                        <option value="MQ"
                                                            data-kt-select2-country="assets/media/flags/martinique.html">
                                                            Martinique</option>
                                                        <option value="MR"
                                                            data-kt-select2-country="assets/media/flags/mauritania.html">
                                                            Mauritania</option>
                                                        <option value="MU"
                                                            data-kt-select2-country="assets/media/flags/mauritius.html">
                                                            Mauritius</option>
                                                        <option value="MX"
                                                            data-kt-select2-country="assets/media/flags/mexico.html">Mexico
                                                        </option>
                                                        <option value="FM"
                                                            data-kt-select2-country="assets/media/flags/micronesia.html">
                                                            Micronesia, Federated States of</option>
                                                        <option value="MD"
                                                            data-kt-select2-country="assets/media/flags/moldova.html">
                                                            Moldova, Republic of</option>
                                                        <option value="MC"
                                                            data-kt-select2-country="assets/media/flags/monaco.html">Monaco
                                                        </option>
                                                        <option value="MN"
                                                            data-kt-select2-country="assets/media/flags/mongolia.html">
                                                            Mongolia</option>
                                                        <option value="ME"
                                                            data-kt-select2-country="assets/media/flags/montenegro.html">
                                                            Montenegro</option>
                                                        <option value="MS"
                                                            data-kt-select2-country="assets/media/flags/montserrat.html">
                                                            Montserrat</option>
                                                        <option value="MA"
                                                            data-kt-select2-country="assets/media/flags/morocco.html">
                                                            Morocco</option>
                                                        <option value="MZ"
                                                            data-kt-select2-country="assets/media/flags/mozambique.html">
                                                            Mozambique</option>
                                                        <option value="MM"
                                                            data-kt-select2-country="assets/media/flags/myanmar.html">
                                                            Myanmar</option>
                                                        <option value="NA"
                                                            data-kt-select2-country="assets/media/flags/namibia.html">
                                                            Namibia</option>
                                                        <option value="NR"
                                                            data-kt-select2-country="assets/media/flags/nauru.html">Nauru
                                                        </option>
                                                        <option value="NP"
                                                            data-kt-select2-country="assets/media/flags/nepal.html">Nepal
                                                        </option>
                                                        <option value="NL"
                                                            data-kt-select2-country="assets/media/flags/netherlands.html">
                                                            Netherlands</option>
                                                        <option value="NZ"
                                                            data-kt-select2-country="assets/media/flags/new-zealand.html">
                                                            New Zealand</option>
                                                        <option value="NI"
                                                            data-kt-select2-country="assets/media/flags/nicaragua.html">
                                                            Nicaragua</option>
                                                        <option value="NE"
                                                            data-kt-select2-country="assets/media/flags/niger.html">Niger
                                                        </option>
                                                        <option value="NG"
                                                            data-kt-select2-country="assets/media/flags/nigeria.html">
                                                            Nigeria</option>
                                                        <option value="NU"
                                                            data-kt-select2-country="assets/media/flags/niue.html">Niue
                                                        </option>
                                                        <option value="NF"
                                                            data-kt-select2-country="assets/media/flags/norfolk-island.html">
                                                            Norfolk Island</option>
                                                        <option value="MP"
                                                            data-kt-select2-country="assets/media/flags/northern-mariana-islands.html">
                                                            Northern Mariana Islands</option>
                                                        <option value="NO"
                                                            data-kt-select2-country="assets/media/flags/norway.html">Norway
                                                        </option>
                                                        <option value="OM"
                                                            data-kt-select2-country="assets/media/flags/oman.html">Oman
                                                        </option>
                                                        <option value="PK"
                                                            data-kt-select2-country="assets/media/flags/pakistan.html">
                                                            Pakistan</option>
                                                        <option value="PW"
                                                            data-kt-select2-country="assets/media/flags/palau.html">Palau
                                                        </option>
                                                        <option value="PS"
                                                            data-kt-select2-country="assets/media/flags/palestine.html">
                                                            Palestinian Territory, Occupied</option>
                                                        <option value="PA"
                                                            data-kt-select2-country="assets/media/flags/panama.html">Panama
                                                        </option>
                                                        <option value="PG"
                                                            data-kt-select2-country="assets/media/flags/papua-new-guinea.html">
                                                            Papua New Guinea</option>
                                                        <option value="PY"
                                                            data-kt-select2-country="assets/media/flags/paraguay.html">
                                                            Paraguay</option>
                                                        <option value="PE"
                                                            data-kt-select2-country="assets/media/flags/peru.html">Peru
                                                        </option>
                                                        <option value="PH"
                                                            data-kt-select2-country="assets/media/flags/philippines.html">
                                                            Philippines</option>
                                                        <option value="PL"
                                                            data-kt-select2-country="assets/media/flags/poland.html">Poland
                                                        </option>
                                                        <option value="PT"
                                                            data-kt-select2-country="assets/media/flags/portugal.html">
                                                            Portugal</option>
                                                        <option value="PR"
                                                            data-kt-select2-country="assets/media/flags/puerto-rico.html">
                                                            Puerto Rico</option>
                                                        <option value="QA"
                                                            data-kt-select2-country="assets/media/flags/qatar.html">Qatar
                                                        </option>
                                                        <option value="RO"
                                                            data-kt-select2-country="assets/media/flags/romania.html">
                                                            Romania</option>
                                                        <option value="RU"
                                                            data-kt-select2-country="assets/media/flags/russia.html">Russian
                                                            Federation</option>
                                                        <option value="RW"
                                                            data-kt-select2-country="assets/media/flags/rwanda.html">Rwanda
                                                        </option>
                                                        <option value="BL"
                                                            data-kt-select2-country="assets/media/flags/st-barts.html">Saint
                                                            Barthélemy</option>
                                                        <option value="KN"
                                                            data-kt-select2-country="assets/media/flags/saint-kitts-and-nevis.html">
                                                            Saint Kitts and Nevis</option>
                                                        <option value="LC"
                                                            data-kt-select2-country="assets/media/flags/st-lucia.html">Saint
                                                            Lucia</option>
                                                        <option value="MF"
                                                            data-kt-select2-country="assets/media/flags/sint-maarten.html">
                                                            Saint Martin (French part)</option>
                                                        <option value="VC"
                                                            data-kt-select2-country="assets/media/flags/st-vincent-and-the-grenadines.html">
                                                            Saint Vincent and the Grenadines</option>
                                                        <option value="WS"
                                                            data-kt-select2-country="assets/media/flags/samoa.html">Samoa
                                                        </option>
                                                        <option value="SM"
                                                            data-kt-select2-country="assets/media/flags/san-marino.html">San
                                                            Marino</option>
                                                        <option value="ST"
                                                            data-kt-select2-country="assets/media/flags/sao-tome-and-prince.html">
                                                            Sao Tome and Principe</option>
                                                        <option value="SA"
                                                            data-kt-select2-country="assets/media/flags/saudi-arabia.html">
                                                            Saudi Arabia</option>
                                                        <option value="SN"
                                                            data-kt-select2-country="assets/media/flags/senegal.html">
                                                            Senegal</option>
                                                        <option value="RS"
                                                            data-kt-select2-country="assets/media/flags/serbia.html">Serbia
                                                        </option>
                                                        <option value="SC"
                                                            data-kt-select2-country="assets/media/flags/seychelles.html">
                                                            Seychelles</option>
                                                        <option value="SL"
                                                            data-kt-select2-country="assets/media/flags/sierra-leone.html">
                                                            Sierra Leone</option>
                                                        <option value="SG"
                                                            data-kt-select2-country="assets/media/flags/singapore.html">
                                                            Singapore</option>
                                                        <option value="SX"
                                                            data-kt-select2-country="assets/media/flags/sint-maarten.html">
                                                            Sint Maarten (Dutch part)</option>
                                                        <option value="SK"
                                                            data-kt-select2-country="assets/media/flags/slovakia.html">
                                                            Slovakia</option>
                                                        <option value="SI"
                                                            data-kt-select2-country="assets/media/flags/slovenia.html">
                                                            Slovenia</option>
                                                        <option value="SB"
                                                            data-kt-select2-country="assets/media/flags/solomon-islands.html">
                                                            Solomon Islands</option>
                                                        <option value="SO"
                                                            data-kt-select2-country="assets/media/flags/somalia.html">
                                                            Somalia</option>
                                                        <option value="ZA"
                                                            data-kt-select2-country="assets/media/flags/south-africa.html">
                                                            South Africa</option>
                                                        <option value="KR"
                                                            data-kt-select2-country="assets/media/flags/south-korea.html">
                                                            South Korea</option>
                                                        <option value="SS"
                                                            data-kt-select2-country="assets/media/flags/south-sudan.html">
                                                            South Sudan</option>
                                                        <option value="ES"
                                                            data-kt-select2-country="assets/media/flags/spain.html">Spain
                                                        </option>
                                                        <option value="LK"
                                                            data-kt-select2-country="assets/media/flags/sri-lanka.html">Sri
                                                            Lanka</option>
                                                        <option value="SD"
                                                            data-kt-select2-country="assets/media/flags/sudan.html">Sudan
                                                        </option>
                                                        <option value="SR"
                                                            data-kt-select2-country="assets/media/flags/suriname.html">
                                                            Suriname</option>
                                                        <option value="SZ"
                                                            data-kt-select2-country="assets/media/flags/swaziland.html">
                                                            Swaziland</option>
                                                        <option value="SE"
                                                            data-kt-select2-country="assets/media/flags/sweden.html">Sweden
                                                        </option>
                                                        <option value="CH"
                                                            data-kt-select2-country="assets/media/flags/switzerland.html">
                                                            Switzerland</option>
                                                        <option value="SY"
                                                            data-kt-select2-country="assets/media/flags/syria.html">Syrian
                                                            Arab Republic</option>
                                                        <option value="TW"
                                                            data-kt-select2-country="assets/media/flags/taiwan.html">Taiwan,
                                                            Province of China</option>
                                                        <option value="TJ"
                                                            data-kt-select2-country="assets/media/flags/tajikistan.html">
                                                            Tajikistan</option>
                                                        <option value="TZ"
                                                            data-kt-select2-country="assets/media/flags/tanzania.html">
                                                            Tanzania, United Republic of</option>
                                                        <option value="TH"
                                                            data-kt-select2-country="assets/media/flags/thailand.html">
                                                            Thailand</option>
                                                        <option value="TG"
                                                            data-kt-select2-country="assets/media/flags/togo.html">Togo
                                                        </option>
                                                        <option value="TK"
                                                            data-kt-select2-country="assets/media/flags/tokelau.html">
                                                            Tokelau</option>
                                                        <option value="TO"
                                                            data-kt-select2-country="assets/media/flags/tonga.html">Tonga
                                                        </option>
                                                        <option value="TT"
                                                            data-kt-select2-country="assets/media/flags/trinidad-and-tobago.html">
                                                            Trinidad and Tobago</option>
                                                        <option value="TN"
                                                            data-kt-select2-country="assets/media/flags/tunisia.html">
                                                            Tunisia</option>
                                                        <option value="TR"
                                                            data-kt-select2-country="assets/media/flags/turkey.html">Turkey
                                                        </option>
                                                        <option value="TM"
                                                            data-kt-select2-country="assets/media/flags/turkmenistan.html">
                                                            Turkmenistan</option>
                                                        <option value="TC"
                                                            data-kt-select2-country="assets/media/flags/turks-and-caicos.html">
                                                            Turks and Caicos Islands</option>
                                                        <option value="TV"
                                                            data-kt-select2-country="assets/media/flags/tuvalu.html">Tuvalu
                                                        </option>
                                                        <option value="UG"
                                                            data-kt-select2-country="assets/media/flags/uganda.html">Uganda
                                                        </option>
                                                        <option value="UA"
                                                            data-kt-select2-country="assets/media/flags/ukraine.html">
                                                            Ukraine</option>
                                                        <option value="AE"
                                                            data-kt-select2-country="assets/media/flags/united-arab-emirates.html">
                                                            United Arab Emirates</option>
                                                        <option value="GB"
                                                            data-kt-select2-country="assets/media/flags/united-kingdom.html">
                                                            United Kingdom</option>
                                                        <option value="US"
                                                            data-kt-select2-country="assets/media/flags/united-states.html">
                                                            United States</option>
                                                        <option value="UY"
                                                            data-kt-select2-country="assets/media/flags/uruguay.html">
                                                            Uruguay</option>
                                                        <option value="UZ"
                                                            data-kt-select2-country="assets/media/flags/uzbekistan.html">
                                                            Uzbekistan</option>
                                                        <option value="VU"
                                                            data-kt-select2-country="assets/media/flags/vanuatu.html">
                                                            Vanuatu</option>
                                                        <option value="VE"
                                                            data-kt-select2-country="assets/media/flags/venezuela.html">
                                                            Venezuela, Bolivarian Republic of</option>
                                                        <option value="VN"
                                                            data-kt-select2-country="assets/media/flags/vietnam.html">
                                                            Vietnam</option>
                                                        <option value="VI"
                                                            data-kt-select2-country="assets/media/flags/virgin-islands.html">
                                                            Virgin Islands</option>
                                                        <option value="YE"
                                                            data-kt-select2-country="assets/media/flags/yemen.html">Yemen
                                                        </option>
                                                        <option value="ZM"
                                                            data-kt-select2-country="assets/media/flags/zambia.html">Zambia
                                                        </option>
                                                        <option value="ZW"
                                                            data-kt-select2-country="assets/media/flags/zimbabwe.html">
                                                            Zimbabwe</option>
                                                    </select>
                                                    <!--end::Select2-->
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mt-3">
                                        <span>Notes</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="Enter any additional notes about the contact (optional)."></i>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <textarea class="form-control form-control-solid" name="notes"></textarea>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Separator-->
                                <div class="separator mb-6"></div>
                                <!--end::Separator-->
                                <!--begin::Action buttons-->
                                <div class="d-flex justify-content-end">
                                    <!--begin::Button-->
                                    <button type="reset" data-kt-contacts-type="cancel"
                                        class="btn btn-light me-3">Cancel</button>
                                    <!--end::Button-->
                                    <!--begin::Button-->
                                    <button type="submit" data-kt-contacts-type="submit" class="btn btn-primary">
                                        <span class="indicator-label">Save</span>
                                        <span class="indicator-progress">Please wait...
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                    <!--end::Button-->
                                </div>
                                <!--end::Action buttons-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Contacts-->
                </div>
            </div>
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
@endsection

@section('scripts')
    <script src="https://preview.keenthemes.com/metronic8/demo22/assets/js/custom/apps/user-management/users/list/table.js">
    </script>
    <script
        src="https://preview.keenthemes.com/metronic8/demo22/assets/js/custom/apps/user-management/users/list/export-users.js">
    </script>
    <script src="https://preview.keenthemes.com/metronic8/demo22/assets/js/custom/apps/user-management/users/list/add.js">
    </script>
    <script src="https://preview.keenthemes.com/metronic8/demo22/assets/js/custom/apps/contacts/edit-contact.js"></script>
@endsection
