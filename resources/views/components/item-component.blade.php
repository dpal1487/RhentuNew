<div class="card mb-5 mb-xxl-5">
    <div class="card-header cursor-pointer">
        <!--begin::Card title-->
        <div class="card-title m-0">
            <h3 class="fw-bold m-0">Items Details</h3>
        </div>
        <!--end::Card title-->
    </div>
    @foreach ($items as $item)
        <div class="card-body pb-0  position-relative ">
            <!--begin::Toolbar-->
            <div class="card-toolbar position-absolute w-fit top-0 end-0 p-5">
                <!--begin::Menu-->
                <button
                    class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                    data-kt-menu-overflow="true">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                    <span class="svg-icon svg-icon-1 svg-icon-gray-300 me-n1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.3" x="2" y="2" width="20"
                                height="20" rx="4" fill="currentColor" />
                            <rect x="11" y="11" width="2.6" height="2.6"
                                rx="1.3" fill="currentColor" />
                            <rect x="15" y="11" width="2.6" height="2.6"
                                rx="1.3" fill="currentColor" />
                            <rect x="7" y="11" width="2.6" height="2.6"
                                rx="1.3" fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </button>
                <!--begin::Menu 2-->
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                    data-kt-menu="true">
                    <!--begin::Menu item-->
                    @foreach ($itemstatus as $key => $value)
                        <div class="menu-item px-3">
                            <button href="#" id="kt_docs_sweetalert_basic"
                                data-id="{{ $item->id }}" data-status="{{ $value->id }}"
                                class="menu-link px-3 border-0 bg-transparent statusChange">{{ $value->label }}</button>
                            {{-- <button data-id="{{ $item->id }}" data-value="{{ $value->id }}" class="menu-link px-3 statusChange btn:focus">{{ $value->label }}</button> --}}
                        </div>
                    @endforeach
                    <!--end::Menu item-->
                </div>
                <!--end::Menu 2-->
                <!--end::Menu-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Details-->
            <div class="d-flex flex-wrap flex-sm-nowrap">
                <!--begin: Pic-->
                <div class="me-5 mb-4">
                    <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                        <img src="{{ asset('assets/media/avatars/300-1.jpg') }}" alt="image" />
                        {{-- <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div> --}}
                    </div>
                </div>
                <!--end::Pic-->
                <!--begin::Info-->

                <div class="flex-grow-1">

                    <!--begin::Title-->
                    <div class="d-flex justify-content-between align-items-start flex-wrap mb-0">
                        <!--begin::User-->
                        <div class="row col-md-12 mb-0">
                            <div class="col-md-5">


                                <div class="d-flex flex-column">
                                    <!--begin::Name-->
                                    <p class="text-gray-900  fs-2 fw-bold">{{ $item->name }}</p>
                                    <!--end::Name-->
                                    <!--begin::Info-->
                                    <div class="d-flex">
                                        <p class="d-flex align-items-center text-gray-400  me-2">
                                            <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
                                            <span class="svg-icon svg-icon-4 me-1">
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M483.2 790.3L861.4 412c1.7-1.7 2.5-4 2.3-6.3l-25.5-301.4c-.7-7.8-6.8-13.9-14.6-14.6L522.2 64.3c-2.3-.2-4.7.6-6.3 2.3L137.7 444.8a8.03 8.03 0 0 0 0 11.3l334.2 334.2c3.1 3.2 8.2 3.2 11.3 0zm122.7-533.4c18.7-18.7 49.1-18.7 67.9 0 18.7 18.7 18.7 49.1 0 67.9-18.7 18.7-49.1 18.7-67.9 0-18.7-18.7-18.7-49.1 0-67.9zm283.8 282.9l-39.6-39.5a8.03 8.03 0 0 0-11.3 0l-362 361.3-237.6-237a8.03 8.03 0 0 0-11.3 0l-39.6 39.5a8.03 8.03 0 0 0 0 11.3l243.2 242.8 39.6 39.5c3.1 3.1 8.2 3.1 11.3 0l407.3-406.6c3.1-3.1 3.1-8.2 0-11.3z"></path></svg>
                                            </span>
                                            <!--end::Svg Icon-->Houses & Apartments
                                        </p>
                                        <p class="d-flex align-items-center text-gray-400  me-2">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                            <span class="svg-icon svg-icon-4 me-1">
                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.3"
                                                        d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>


                                            <!--end::Svg Icon-->City
                                        </p>
                                        <p class="d-flex align-items-center text-gray-400  me-2">
                                            <!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
                                            <span class="svg-icon svg-icon-4 me-1">
                                                <svg stroke="currentColor" fill="currentColor"
                                                    stroke-width="0" viewBox="0 0 24 24" height="1em"
                                                    width="1em" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z">
                                                    </path>
                                                    <path
                                                        d="M13 7h-2v5.414l3.293 3.293 1.414-1.414L13 11.586z">
                                                    </path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->Per Hour
                                        </p>
                                    </div>
                                    <!--end::Info-->
                                </div>
                            </div>
                            <div class="col-md-7">
                                <p class="text-gray-900 fw-bold m-2">
                                    <svg stroke="currentColor" stroke-width="0" role="img"
                                        viewBox="0 0 24 24" height="1em" width="1em"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <title></title>
                                        <path
                                            d="M12.008 9.597a5.623 5.623 0 1 1 0 11.245 5.623 5.623 0 0 1 0-11.245zM.154 8.717l3.02 3.574a.639.639 0 0 0 .913.068c4.885-4.379 10.97-4.379 15.84 0a.642.642 0 0 0 .916-.068l3.006-3.574a.646.646 0 0 0-.075-.906c-7.1-6.204-16.462-6.204-23.555 0a.65.65 0 0 0-.065.906z">
                                        </path>
                                    </svg>
                                    Status
                                    <!--end::Svg Icon-->
                                </p>
                                <div class="d-flex flex-column mt-3">
                                    <!--begin::Name-->
                                    <!--end::Name-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">

                                        <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
                                        <span class="svg-icon svg-icon-4 me-1">
                                            @if($item->status->id==1)
                                            <span class="badge badge-light-success fs-6 fw-bold">
                                            @elseif($item->status->id==2)
                                            <span class="badge badge-light-warning fs-6 fw-bold">
                                            @elseif($item->status->id==3)
                                            <span class="badge badge-light-danger fs-6 fw-bold">
                                            @elseif($item->status->id==4)
                                            <span class="badge badge-light-info fs-6 fw-bold">
                                            @else
                                            <span class="badge badge-light-primary fs-6 fw-bold">
                                            @endif
                                                <svg stroke="currentColor" fill="currentColor"
                                                    stroke-width="0" viewBox="0 0 15 16" height="1.5em"
                                                    width="1em" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z">
                                                    </path>
                                                </svg>
                                                {{ $item->status->label }}</span>
                                                {{ $item->status->text }}
                                        </span>




                                    </div>
                                    <!--end::Info-->
                                </div>

                            </div>
                        </div>
                        <div class="row col-md-12">
                            <div class="col-md-8">
                                <p class="text-gray-900  fs-3 fw-bold">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                        viewBox="0 0 16 16" height="1em" width="1em"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5H0V4zm11.5 1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-2zM0 11v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1H0z">
                                        </path>
                                    </svg>
                                    PRICING
                                </p>

                            </div>

                        </div>
                        <div class="d-flex flex-column">
                            <!--begin::Name-->
                            <!--end::Name-->
                            <!--begin::Info-->
                            <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
                                <p class="d-flex align-items-center text-gray-400 me-3">
                                    <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
                                    <span class="svg-icon svg-icon-4 me-1">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                            viewBox="0 0 16 16" height="1em" width="1em"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4v1.06Z">
                                            </path>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->{{ $item->rent_price }} Rent Price
                                </p>
                                <p class="d-flex align-items-center text-gray-400 me-3">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                    <span class="svg-icon svg-icon-4 me-1">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                            viewBox="0 0 16 16" height="1em" width="1em"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4v1.06Z">
                                            </path>
                                        </svg>
                                    </span>


                                    <!--end::Svg Icon-->{{ $item->security_price }} Security Price
                                    </@php

                                    @endphp>

                            </div>
                            <!--end::Info-->
                        </div>
                        <div class="row col-md-12">
                            <div class="col-md-8">
                                <p class="text-gray-900 fs-3 fw-bold">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                        viewBox="0 0 512 512" height="1em" width="1em"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M428.4 27.8v456.4h60.9V27.8h-60.9zM327 168.2v316h60.8v-316H327zM225.4 273.6v210.6h61V273.6h-61zM124 343.8v140.4h60.9V343.8H124zM22.67 394.9v89.3h60.84v-89.3H22.67z">
                                        </path>
                                    </svg>
                                    STATS
                                </p>

                            </div>

                        </div>
                        <div class="d-flex flex-column">
                            <!--begin::Name-->
                            <!--end::Name-->
                            <!--begin::Info-->
                            <div class="d-flex flex-wrap fw-semibold fs-6 me-5">
                                <div class="me-5 ">
                                    <span class="svg-icon svg-icon-4 me-2">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                            viewBox="0 0 24 24" height="1em" width="1em"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill="none" stroke="#000" stroke-width="2"
                                                d="M12,21 C7,21 1,16 1,12 C1,8 7,3 12,3 C17,3 23,8 23,12 C23,16 17,21 12,21 Z M12,7 C9.23875,7 7,9.23875 7,12 C7,14.76125 9.23875,17 12,17 C14.76125,17 17,14.76125 17,12 C17,9.23875 14.76125,7 12,7 L12,7 Z">
                                            </path>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->0 Views

                                    <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                    <span class="svg-icon svg-icon-4 me-1">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                            viewBox="0 0 24 24" aria-hidden="true" height="1em"
                                            width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->0 Reviews

                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                        version="1.1" viewBox="0 0 18 16" height="1em" width="1em"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 12.041v-0.825c1.102-0.621 2-2.168 2-3.716 0-2.485 0-4.5-3-4.5s-3 2.015-3 4.5c0 1.548 0.898 3.095 2 3.716v0.825c-3.392 0.277-6 1.944-6 3.959h14c0-2.015-2.608-3.682-6-3.959z">
                                        </path>
                                        <path
                                            d="M5.112 12.427c0.864-0.565 1.939-0.994 3.122-1.256-0.235-0.278-0.449-0.588-0.633-0.922-0.475-0.863-0.726-1.813-0.726-2.748 0-1.344 0-2.614 0.478-3.653 0.464-1.008 1.299-1.633 2.488-1.867-0.264-1.195-0.968-1.98-2.841-1.98-3 0-3 2.015-3 4.5 0 1.548 0.898 3.095 2 3.716v0.825c-3.392 0.277-6 1.944-6 3.959h4.359c0.227-0.202 0.478-0.393 0.753-0.573z">
                                        </path>
                                    </svg>
                                    <!--end::Svg Icon-->0 Customers
                                </div>
                                <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::User-->

                    </div>
                    <!--end::Title-->

                </div>
                <!--end::Info-->
            </div>
            <!--end::Details-->
        </div>
        <hr>
    @endforeach
</div>

@section('javascript')
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="assets/plugins/global/plugins.bundle.js"></script>

<script>
    const button = document.getElementById('kt_docs_sweetalert_basic');

    button.addEventListener('click', e => {
        e.preventDefault();

        Swal.fire({
            text: "Here's a basic example of SweetAlert!",
            icon: "success",
            buttonsStyling: false,
            confirmButtonText: "Ok, got it!",
            customClass: {
                confirmButton: "btn btn-primary"
            }
        });
    });

    // import * as axios from 'axios';
    $(document).ready(function() {
        // alert( "this.value" );
        $('.statusChange').on('click', async function() {
            // alert( this.value )
            // let ItemId = $(this).data('id');
            // let itemStatusId = $(this).data('value');
            const {
                id: ItemId,
                status: itemStatusId
            } = $(this)[0].dataset;
            // console.log("id", ItemId, "value", itemStatusId);
            // console.log("Item Status Id", axios.get )

            const res = await axios.post('{{ route('item.status') }}', {
                    'item_id': ItemId,
                    'itemstatus_id': itemStatusId
                })
                .then((res) => {
                    //   assign state posts with response data
                    //  posts.value = res.data.data;
                    if (res.status === 200) {
                        let resp = JSON.parse(res.request.response);
                        Swal.fire({
                            text: resp.success,
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        });
                    }
                    else{

                        Swal.fire({
                            text: "Something Went Wrong !",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-warning"
                            }
                        });

                    }
                })
                .catch((error) => {
                    console.log(error.res.data);
                }).finally(() => {
                    window.location.reload()
                })
        });
    });
</script>
@endsection
