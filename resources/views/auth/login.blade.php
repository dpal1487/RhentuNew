<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!--begin::Theme mode setup on page load-->
        <script>
            var defaultThemeMode = "light";
            var themeMode;
            if (document.documentElement) {
                if (document.documentElement.hasAttribute("data-theme-mode")) {
                    themeMode = document.documentElement.getAttribute("data-theme-mode");
                } else {
                    if (localStorage.getItem("data-theme") !== null) {
                        themeMode = localStorage.getItem("data-theme");
                    } else {
                        themeMode = defaultThemeMode;
                    }
                }
                if (themeMode === "system") {
                    themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
                }
                document.documentElement.setAttribute("data-theme", themeMode);
            }
        </script>
        <!--end::Theme mode setup on page load-->
        <!--Begin::Google Tag Manager (noscript) -->
        <noscript>
            <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe>
        </noscript>
        <!--End::Google Tag Manager (noscript) -->
        <!--begin::Root-->
        <div class="d-flex flex-column flex-root" id="kt_app_root" style="height: 100vh">
            <!--begin::Authentication - Sign-in -->
            <div class="d-flex flex-column flex-lg-row flex-column-fluid">
                <!--begin::Body-->
                <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
                    <!--begin::Form-->
                    <div class="d-flex flex-center flex-column flex-lg-row-fluid">
                        <!--begin::Wrapper-->
                        <div class="w-lg-500px p-10">
                            <!--begin::Form-->

                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <!--begin::Heading-->
                                <div class="text-center mb-11">
                                    <!--begin::Title-->
                                    <h1 class="text-dark fw-bolder mb-3">Sign In</h1>
                                    <!--end::Title-->

                                </div>
                                <!--begin::Heading-->
                                <!--begin::Login options-->
                                <div class="row g-3 mb-9">
                                    <!--begin::Col-->

                                    <!--end::Col-->
                                    <!--begin::Col-->

                                    <!--end::Col-->
                                </div>
                                <!--end::Login options-->
                                <!--begin::Separator-->

                                <!--end::Separator-->
                                <!--begin::Input group=-->
                                <div class="fv-row mb-8">
                                    <!--begin::Email-->
                                    <input type="text" placeholder="Email" name="email" autocomplete="off" class="form-control bg-transparent" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    <!--end::Email-->
                                </div>
                                <!--end::Input group=-->
                                <div class="fv-row mb-8">
                                    <!--begin::Password-->
                                    <input type="password" placeholder="Password" name="password" autocomplete="off" class="form-control bg-transparent" />
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    <!--end::Password-->
                                </div>
                                <div class="fv-row mb-8">
                                    <label class="form-check form-check-inline">

                                        <input class="form-check-input" id="remember_me" type="checkbox" name="remember" />
                                        <span class="form-check-label fw-semibold text-gray-700 fs-base ms-1">Remember me
                                        </span>
                                    </label>
                                </div>
                                <!--end::Input group=-->
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                                    <div></div>
                                    <!--begin::Link-->
                                    {{-- <a href="reset-password.html" class="link-primary">Forgot Password ?</a> --}}
                                    <!--end::Link-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Submit button-->
                                <div class="d-grid mb-10">
                                    <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                                        <!--begin::Indicator label-->
                                        <span class="indicator-label">Sign In</span>
                                        <!--end::Indicator label-->
                                        <!--begin::Indicator progress-->
                                        <span class="indicator-progress">Please wait...
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        <!--end::Indicator progress-->
                                    </button>
                                </div>
                                <!--end::Submit button-->
                                <!--begin::Sign up-->
                                <div class="text-gray-500 text-center fw-semibold fs-6">Not a Member yet?
                                    <a href="{{ route('register') }}" class="link-primary">Sign up</a>
                                </div>
                                <!--end::Sign up-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Form-->
                    <!--begin::Footer-->

                    <!--end::Footer-->
                </div>
                <!--end::Body-->
                <!--begin::Aside-->
                <div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2" style="background-image: url(../../../assets/media/misc/auth-bg.png)">
                    <!--begin::Content-->
                    <div class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100">
                        <!--begin::Logo-->
                        <a href="../../../index.html" class="mb-0 mb-lg-12">
                            <img alt="Logo" src="../../../assets/media/logos/custom-1.png" class="h-60px h-lg-75px" />
                        </a>
                        <!--end::Logo-->
                        <!--begin::Image-->
                        <img class="d-none d-lg-block mx-auto w-275px w-md-50 w-xl-500px mb-10 mb-lg-20" src="../../../assets/media/misc/auth-screens.png" alt="" />
                        <!--end::Image-->
                        <!--begin::Title-->
                        <h1 class="d-none d-lg-block text-white fs-2qx fw-bolder text-center mb-7">Fast, Efficient and
                            Productive</h1>
                        <!--end::Title-->
                        <!--begin::Text-->
                        <div class="d-none d-lg-block text-white fs-base text-center">In this kind of post,
                            <a href="#" class="opacity-75-hover text-warning fw-bold me-1">the
                                blogger</a>introduces a person they’ve interviewed
                            <br />and provides some background information about
                            <a href="#" class="opacity-75-hover text-warning fw-bold me-1">the interviewee</a>and
                            their
                            <br />work following this is a transcript of the interview.
                        </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Aside-->
            </div>
            <!--end::Authentication - Sign-in-->
        </div>
        <!--end::Root-->
        <!--begin::Javascript-->
        <script>
            var hostUrl = "../../../assets/index.html";
        </script>
        <!--begin::Global Javascript Bundle(mandatory for all pages)-->
        <script src="{{ asset('assets/plugins/global/plugins.bundle.js')}}"></script>
        <script src="{{ asset('assets/js/scripts.bundle.js')}}"></script>
        <!--end::Global Javascript Bundle-->
        <!--begin::Custom Javascript(used for this page only)-->
        <script src="{{ asset('assets/js/custom/authentication/sign-in/general.js')}}"></script>
        <!--end::Custom Javascript-->
        <!--end::Javascript-->
        <!-- Email Address -->





</x-guest-layout>