<script src="{{ asset('admin-assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('admin-assets/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('admin-assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{ asset('admin-assets/js/select2.full.min.js') }}"></script>
<script src="{{ asset('admin-assets/js/jquery.dataTables.min.js') }}"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>
<script src="{{ asset('admin-assets/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('admin-assets/js/additional-methods.min.js') }}"></script>
<script src="{{ asset('admin-assets/js/Chart.min.js') }}"></script>
<script src="{{ asset('admin-assets/js/sparkline.js') }}"></script>
<script src="{{ asset('admin-assets/js/jquery.knob.min.js') }}"></script>
<script src="{{ asset('admin-assets/js/moment.min.js') }}"></script>
<script src="{{ asset('admin-assets/js/daterangepicker.js') }}"></script>
<script src="{{ asset('admin-assets/js/jquery.datetimepicker.js') }}"></script>
<script src="{{ asset('admin-assets/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<script src="{{ asset('admin-assets/js/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('admin-assets/js/jquery.overlayScrollbars.min.js') }}"></script>
<script src="{{ asset('admin-assets/js/demo.js') }}"></script>
<script src="{{ asset('admin-assets/js/adminlte.js') }}"></script>
<script src="{{ asset('admin-assets/js/demo.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>
<script>
    $(function () {

        $.widget.bridge('uibutton', $.ui.button);

        toastr.options = {
            "preventDuplicates": true
        }

        $('.select2').select2();

        $('.dataTable').DataTable({
            dom: 'Bfrtip',
            buttons: [ 'print', {
                    extend: 'csv',
                    charset: 'UTF-16LE',
                    bom: true
                }, 'excel' ],
            aaSorting: [],
        });

        $('#timepicker1,#timepicker2,#timepicker3,#timepicker4,#timepicker5,#timepicker6,#timepicker7,#timepicker8,#timepicker9,#timepicker10,#timepicker11,#timepicker12,#timepicker13,#timepicker14, #timepicker19,#timepicker29,#timepicker39,#timepicker49,#timepicker59,#timepicker69,#timepicker79,#timepicker89,#timepicker99,#timepicker109,#timepicker119,#timepicker129,#timepicker139,#timepicker149').datetimepicker({
            format: 'LT'
        });


    });
</script>
@stack('js')

@if(session('message'))
<script>
    toastr.{{ session('type') }}("{{ session('message') }}");
</script>
@endif

@if($errors->any())
<script>
    @foreach($errors->all() as $error)
        toastr.error("{{ $error }}");
    @endforeach
</script>
<script>
    @if(count($errors) > 0)
        @foreach($errors->all() as $error)
            toastr.error("{{ $error }}");
        @endforeach
    @endif
</script>
@endif
