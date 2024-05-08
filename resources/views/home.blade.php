@section('css')
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
@endsection

@section('js')
<!-- DataTables  & Plugins -->
<script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('assets/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('assets/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<script src="{{asset('assets/plugins/dataTables.bootstrap4.min.js')}}"></script>
<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "lengthMenu": [5, 10, 25, 50], // Menambahkan opsi jumlah entri
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            "lengthMenu": [5, 10, 25, 50], // Menambahkan opsi jumlah entri
        });
    });
</script>
@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RS. Bayangkara Kediri</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .navbar {
        background: linear-gradient(to bottom, #007bff, #ffffff);
        color: #fff;
        padding: 10px 20px;
        }
        .navbar a {
            color: #fff;
            text-decoration: none;
            margin-right: 20px;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            text-align: center;
        }
        .address {
            margin-top: 50px;
        }
        .copyright {
            margin-top: 20px;
            text-align: center;
            font-size: 12px;
            color: #666;
        }

        .img-circle {
        width: 60px; /* Lebar gambar */
        height: 60px; /* Tinggi gambar */
        margin-top: 5px; /* Jarak dari atas */
        margin-left: 10px; /* Jarak dari kiri */
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a>
        <img src="{{ asset('assets/dist/img/rs.png') }}" class="img-circle elevation-3" alt="logo rumah sakit" >
        <img src="{{ asset('assets/dist/img/kk.png') }}" class="img-circle elevation-3" alt="logo rkesehatan kedokteran" >
        <b>Bayangkara </b>KEDIRI
        </a>
        
    </div>

    <div class="container">
        <h1>Selamat Datang di Rumah Sakit Bayangkara Kediri</h1>
        <h2>"Kami Peduli, Kami Mendengarkan, Kami Melayani"</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque nibh vel odio vehicula, id dapibus dui malesuada.</p>

        <div class="address">
            <p>Alamat: Jl. Contoh No.123, Kota Contoh</p>
        </div>
    </div>

    <div class="copyright">
        <p>&copy; 2024 Rumah Sakit XYZ. All rights reserved.</p>
    </div>
</body>
</html>
