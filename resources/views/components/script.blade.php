 <!-- jQuery -->
 <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
 <!-- Bootstrap 4 -->
 <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
 <!-- DataTables  & Plugins -->
 <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
 <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
 <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
 <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
 <script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
 <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
 <script src="{{ asset('assets/plugins/jszip/jszip.min.js') }}"></script>
 <script src="{{ asset('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
 <script src="{{ asset('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
 <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
 <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
 <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
 <!-- Select2 -->
 <script src="{{ asset('assets/plugins/select2/js/select2.full.min.js') }}"></script>
 <script>
     $('.select2').select2({});
 </script>
 <!-- Bootstrap4 Duallistbox -->
 <script src="{{ asset('assets/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js') }}"></script>
 <!-- InputMask -->
 <script src="{{ asset('assets/plugins/moment/moment.min.js') }}"></script>
 <script src="{{ asset('assets/plugins/inputmask/jquery.inputmask.min.js') }}"></script>
 <!-- date-range-picker -->
 <script src="{{ asset('assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
 <!-- bootstrap color picker -->
 <script src="{{ asset('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
 <!-- Tempusdominus Bootstrap 4 -->
 <script src="{{ asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
 <!-- Bootstrap Switch -->
 <script src="{{ asset('assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
 <!-- BS-Stepper -->
 <script src="{{ asset('assets/plugins/bs-stepper/js/bs-stepper.min.js') }}"></script>
 <!-- dropzonejs -->
 <script src="{{ asset('assets/plugins/dropzone/min/dropzone.min.js') }}"></script>
 <!-- AdminLTE App -->
 <script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
 <script>
     $(document).ready(function() {
         $('#example1').DataTable();
     });
 </script>

 @include('sweetalert::alert')
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>