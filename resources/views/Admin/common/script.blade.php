<script src="{{asset('Admin/js/jquery-1.10.2.js')}}"></script>
<!-- Bootstrap Js -->
<script src="{{asset('Admin/js/bootstrap.min.js')}}"></script>
<!-- Metis Menu Js -->
<script src="{{asset('Admin/js/jquery.metisMenu.js')}}"></script>
<!-- Morris Chart Js -->
<script src="{{asset('Admin/js/morris/raphael-2.1.0.min.js')}}"></script>
@if(\Request::segment(2) == "contacts" or \Request::segment(2) == "categories" ) <!-- to Upload DataTables JS -->
    @else
<script src="{{asset('Admin/js/morris/morris.js')}}"></script>
<script src="{{asset('Admin/js/custom-scripts.js')}}"></script>
    @endif
<!-- Custom Js -->
<!-- DataTable Scripts -->
<script src="{{asset('Admin/js/dataTables/jquery.dataTables.js')}}"></script>
<script src="{{asset('Admin/js/dataTables/dataTables.bootstrap.js')}}"></script>
<script>
    $(document).ready(function () {
        $('#dataTables-example').dataTable();
    });
</script>