<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- Start Meta -->
@include('Admin.common.meta')
<!-- End Meta -->

<body>
    <!-- Start Wrapper -->
    <div id="wrapper">

        <!-- Star Nav. Bar -->
        @include('Admin.common.nav')
        <!-- End Nav. Bar -->

        <!--//////////////////// Start Page Wrapper ////////////////////-->
        <div id="page-wrapper">

            <div id="page-inner">
            <!-- Start Content -->
            @yield('content')
            <!-- End Content -->
            {{-- Start Footer--}}
            @include('Admin.common.footer')
            {{-- End Footer--}}
            </div>
        </div>
        <!--//////////////////// End Page Wrapper ////////////////////-->



    </div>
    <!-- End Wrapper -->

    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <!-- Start Scripts -->
    @include('Admin.common.script')
    <!-- End Scripts -->



</body>

</html>