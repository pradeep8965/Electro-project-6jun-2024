
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

       <!-- CSRF Token -->
       <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    
    <!-- 5Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Include DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{url('/')}}/plugins/fontawesome-free/css/all.min.css">
    
    <link rel="stylesheet" href="{{url('/')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{url('/')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{url('/')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{url('/')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{url('/')}}/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('/')}}/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{url('/')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{url('/')}}/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="{{url('/')}}/plugins/summernote/summernote-bs4.min.css">
    <style>
    .p_tbdr{
        border:1px dashed black;
    }
    .btn-purple {
    background-color: #6f42c1;
    color: white;
    }
    .btn-purple2 {
    background-color: #FFF1DC;
    color: white;
    }
    .img-circle {
        border-radius: 50%;
        width: 100px; /* Adjust the size as needed */
        height: 100px; /* Ensure it’s a square to maintain the circle shape */
        object-fit: cover; /* Ensures the image covers the container without distortion */
    }

    .profile-user-img {
        /* Additional styles for the profile image if needed */
    }
    .dataTables_wrapper .dataTables_paginate .paginate_button {
        padding: 0.5em 1em; /* Change padding */
        margin: 0.2em; /* Change margin */
        border-radius: 5px; /* Add border radius */
        border: 1px solid #ddd; /* Add border */
        background-color: #f8f9fa; /* Background color */
        color: #333; /* Text color */
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
        background-color: #007bff; /* Background color on hover */
        color: #fff; /* Text color on hover */
        border: 1px solid #007bff; /* Border color on hover */
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button.current {
        background-color: #007bff; /* Background color for active page */
        color: #fff; /* Text color for active page */
        border: 1px solid #007bff; /* Border color for active page */
    }
</style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
       <!--  <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{url('/')}}/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60"
                width="60">
        </div> -->

        <x-header />
        <x-aside />

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
           
            {{ $slot }}
        </div>
        <!-- /.content-wrapper -->
        <x-footer />

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <!-- jQuery -->
    <script src="{{url('/')}}/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{url('/')}}/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Font Awasome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- ChartJS -->
    <script src="{{url('/')}}/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="{{url('/')}}/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="{{url('/')}}/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="{{url('/')}}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{url('/')}}/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="{{url('/')}}/plugins/moment/moment.min.js"></script>
    <script src="{{url('/')}}/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Summernote -->
    <script src="{{url('/')}}/plugins/summernote/summernote-bs4.min.js"></script>
    
    
    
    <script src="{{url('/')}}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{url('/')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{url('/')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{url('/')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="{{url('/')}}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{url('/')}}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="{{url('/')}}/plugins/jszip/jszip.min.js"></script>
    <script src="{{url('/')}}/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="{{url('/')}}/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="{{url('/')}}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="{{url('/')}}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="{{url('/')}}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>



    <!-- AdminLTE App -->
    <script src="{{url('/')}}/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{url('/')}}/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{url('/')}}/dist/js/pages/dashboard.js"></script>
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true, 
                "lengthChange": false, 
                "autoWidth": false,
                "pageLength": 5, // Fixed number of entries per page
                "info": true, // Display the entry count information
                "buttons": ["copy", "excel", "pdf", "print"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "pageLength": 5, // Fixed number of entries per page
                "searching": false,
                "ordering": true,
                "info": true, // Display the entry count information
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
    <script> 
        document.querySelector('.a_delcategory').addEventListener('click', ()=>{
            console.log('OKOKOKOKOKOK');
        Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to recover it..!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                        title: "Deleted!",
                        text: "Your category has been deleted.",
                        icon: "success"
                        });
                    }
                });
         }); 
    </script>
    <script>
        $(document).ready(function() {
        $('#example1').DataTable({
            "responsive": true, 
            "lengthChange": false, 
            "autoWidth": false,
            "pageLength": 10, // Fixed number of entries per page
            "info": true, // Display the entry count information
            "pagingType": "full_numbers", // Change pagination view
            "buttons": ["copy", "excel", "pdf", "print"]
        });
    });
    </script>
</body>
</html>
