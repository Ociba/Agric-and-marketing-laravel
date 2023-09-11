<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Joome-Your Market Center</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="{{ asset('logo2.png')}}" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="{{ asset('Front/css/font-icons.css')}}">
    <!-- plugins css -->
    <link rel="stylesheet" href="{{ asset('Front/css/plugins.css')}}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('Front/css/style.css')}}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ asset('Front/css/responsive.css')}}">
    <style>
    .show_bg_2 {
    background-image:
    linear-gradient(to bottom, rgba(46, 184, 46, 0.82), rgba(46, 184, 46, 0.93)),
    url('bg.png');
    width: 80%;
    height: 400px;
    background-size: cover;
    color: white;
    padding: 20px;
}
</style>
</head>

<body>

<!-- Body main wrapper start -->
<div class="body-wrapper">

    <!-- HEADER AREA START (header-5) -->
    <!-- HEADER AREA END -->

    <!-- Utilize Cart Menu Start -->

    <!-- ABOUT US AREA START -->
    <div class="ltn__about-us-area pt-80">
        <div class="container">
            <div class="row pb-5">
                <div class="col-lg-7 align-self-center">
                    <div class="about-us-info-wrap">
                        <div class="section-title-area ltn__section-title-2">
                            <h6 class="section-title">Get Amazing Services<span>.</span></h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
                        </div>
                        <div class="about-us-info-wrap-inner about-us-info-devide">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <div class="list-item-with-icon">
                                <ul>
                                    <li><a href="contact.html">24/7 Online Support</a></li>
                                    <li><a href="team.html">Expert Team</a></li>
                                    <li><a href="service-details.html">Pure Equipment</a></li>
                                    <li><a href="shop.html">Unlimited Product</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 align-self-center">
                    <div class="get-a-quote-wrap">
                        <h2 class="text-center">Login Your Details</h2>
                        <x-validation-errors class="mb-4" />

                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('login') }}" class="get-a-quote-form">
                            @csrf
                            <div class="input-item input-item-email ltn__custom-icon">
                                <input type="text" id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Enter your contact OR Email">
                            </div>
                            <div class="input-item input-item-name ltn__custom-icon">
                                <input id="password"  type="password" name="password" required autocomplete="current-password" placeholder="Enter your Password">
                            </div>
                            <label class="checkbox-inline pb-2"><input type="checkbox" id="remember_me" name="remember" value=""> Remember Me.
                            </label>    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
                            @if (Route::has('password.request'))
                            <span class="text-right">
                                    <a href="{{ route('password.request') }}">Forgot Password</a>
                            </span>
                            @endif
                            <div class="btn-wrapper mt-0">
                                <button type="submit" class="btn theme-btn-1 btn-effect-1 text-uppercase" style="background-color: var(--section-bg-1);color:black;">Login</button>
                            </div>
                        </form>
                        {{-- <a href="/dashboard1">dashboard</a> --}}
                    </div>
                </div>
            </div>
            <div class="row pb-4">
                <div class="col-lg-12 text-center">
                        <div style="background-color: var(--ltn__secondary-color); color:#fff">
                            <a href="http://localhost:3000/">Back To Dashboard</a>
                        </div>
                </div> 
            </div>
            <div class="row">
                <div class="col-lg-12 align-self-center text-center">
                    <span style="font-weight:bold;"> © All Rights Reserved by <a href="https://myjome.com"><span style="color:#80B500">JOOME</span></a> 2020- {{date('Y')}}</span>
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT US AREA END -->

</div>
<!-- Body main wrapper end -->

    <!-- All JS Plugins -->
    <script src="{{ asset('Front/js/plugins.js')}}"></script>
    <!-- Main JS -->
    <script src="{{ asset('Front/js/main.js')}}"></script>
</body>
</html>

