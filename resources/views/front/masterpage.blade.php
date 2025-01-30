<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    @include('Front.Common.links')
    <title>@yield('title')</title>
</head>
<body class="page-template-default page page-id-2403 wp-embed-responsive theme-unicamp woocommerce-no-js desktop desktop-menu mobile-menu-push-to-left header-sticky-both wide page-has-no-sidebar title-bar-none woocommerce elementor-default elementor-kit-22 elementor-page elementor-page-2403"  data-site-width="1200px" data-content-width="1200" data-font="Gordita Helvetica, Arial, sans-serif" data-header-sticky-height="80">


<!-- Loader (Visible on Page Load) -->
<div id="loaderContainer" class="loader-container">
    <div class="loader"></div>
</div>



<div id="page" class="site mt-5 pt-3">
    <div class="content-wrapper">

    @include('front.common.header')

    @yield('content')

    @include('front.common.footer')

    </div>
</div>
</body>
</html>
