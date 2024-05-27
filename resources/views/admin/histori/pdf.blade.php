<!-- resources/views/admin/histori/pdf_single.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PDF Template</title>
    <!-- Tambahkan CSS sesuai kebutuhan -->
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .content-wrapper {
            padding: 20px;
        }
        .title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .item {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="content-wrapper">
        <div class="title">Detail Konsultasi</div>
        <div class="item">
            <strong>Pasien:</strong> {{ $konsul->pasien->nama }} <br>
            <strong>Ahli Gizi:</strong> {{ $konsul->ahligizi->nama }} <br>
            <strong>Makanan:</strong> {{ $konsul->makanan->nama_makanan }} <br>
            <strong>Makanan:</strong> {!! $konsul->makanan_alternative !!} <br>
            
            <strong>Tanggal Konsultasi:</strong> {{ $konsul->tgl_konsultasi }} <br>
        </div>
    </div>
</body>

</html>
