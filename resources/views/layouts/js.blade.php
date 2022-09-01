<script src="{{asset('assets/admin/lib/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/admin/lib/jquery-ui/ui/widgets/datepicker.js')}}"></script>
<script src="{{asset('assets/admin/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/admin/lib/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('assets/admin/lib/moment/min/moment.min.js')}}"></script>
<script src="{{asset('assets/admin/lib/peity/jquery.peity.min.js')}}"></script>
<script src="{{asset('assets/admin/lib/rickshaw/vendor/d3.min.js')}}"></script>
<script src="{{asset('assets/admin/lib/rickshaw/vendor/d3.layout.min.js')}}"></script>
<script src="{{asset('assets/admin/lib/rickshaw/rickshaw.min.js')}}"></script>
<script src="{{asset('assets/admin/lib/jquery.flot/jquery.flot.js')}}"></script>
<script src="{{asset('assets/admin/lib/jquery.flot/jquery.flot.resize.js')}}"></script>
<script src="{{asset('assets/admin/lib/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
<script src="{{asset('assets/admin/lib/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('assets/admin/lib/echarts/echarts.min.js')}}"></script>
<script src="{{asset('assets/admin/lib/select2/js/select2.full.min.js')}}"></script>
{{--<script src="http://maps.google.com/maps/api/js?key=AIzaSyAq8o5-8Y5pudbJMJtDFzb8aHiWJufa5fg"></script>--}}
<script src="{{asset('assets/admin/lib/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/admin/lib/datatables.net-dt/js/dataTables.dataTables.min.js')}}"></script>
<script src="{{asset('assets/admin/lib/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/admin/lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js')}}"></script>

<script src="{{asset('assets/admin/lib/highlightjs/highlight.pack.min.js')}}"></script>
<script src="{{asset('assets/admin/lib/select2/js/select2.min.js')}}"></script>
<script src="{{asset('assets/admin/lib/timepicker/jquery.timepicker.min.js')}}"></script>
<script src="{{asset('assets/admin/lib/spectrum-colorpicker/spectrum.js')}}"></script>
<script src="{{asset('assets/admin/lib/jquery.maskedinput/jquery.maskedinput.js')}}"></script>
<script src="{{asset('assets/admin/lib/bootstrap-tagsinput/bootstrap-tagsinput.min.js')}}"></script>
<script src="{{asset('assets/admin/lib/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>


<script src="{{asset('assets/admin/js/bracket.js')}}"></script>
{{--<script src="{{asset('assets/admin/js/map.shiftworker.js')}}"></script>--}}
<script src="{{asset('assets/admin/js/ResizeSensor.js')}}"></script>
<script src="{{asset('assets/admin/js/ckeditor.js')}}"></script>
{{--<script src="{{asset('assets/admin/ckeditor/ckeditor_wiris/integration/WIRISplugins.js?viewer=image')}}"></script>--}}

<script src="{{asset('assets/admin/js/dashboard.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>







<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.colVis.min.js"></script>


<script src="{{asset('assets/admin/lib/jquery-steps/build/jquery.steps.min.js')}}"></script>

<script>

    $(document).ready(function () {


        $("form").each(function() {
            $("input[type='submit']").attr("disabled", true);
        });

        $('#formid').on('keyup keypress', function(e) {
            var keyCode = e.keyCode || e.which;
            if (keyCode === 13) {
                e.preventDefault();
                return false;
            }
        });
    });
    $('#file').on('change',function () {
        $('#fileLabel').text(this.files[0].name);
    });
</script>

