<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MakananAlternative;

use PDF; // Pastikan sudah diimport
use App\Models\Konsul; // Pastikan model Konsul sudah diimport

class PDFController extends Controller
{
    public function generatePDF($id)
    {
        \Log::info('Attempting to generate PDF for Konsul ID: ' . $id); // Log pernyataan awal

        try {
            // Ambil data konsultasi dari database berdasarkan ID
            $konsul = Konsul::findOrFail($id);

            $data = [
                'pasien' => $konsul->pasien->nama,
                'ahli_gizi' => $konsul->ahligizi->nama,
                'makanan' => $konsul->makanan->nama_makanan,
                'makanan_alternative' => collect(explode(',', $konsul->kode_makanan_alternative))
                    ->map(function ($kodeMakanan) {
                        $makanan = MakananAlternative::where('kode_makanan', $kodeMakanan)->first();
                        return $makanan ? $makanan->nama_makanan : null;
                    })
                    ->filter()
                    ->implode(', '),
                'tanggal_konsultasi' => $konsul->tgl_konsultasi,
            ];
            

            // Load view pdf.blade.php dengan data konsultasi yang diambil
            $pdf = PDF::loadView('admin.histori.pdf', compact('konsul'));
        
            \Log::info('PDF generated successfully'); // Log jika PDF berhasil dibuat

            // Download file PDF dengan nama 'document.pdf'
            return $pdf->download('document.pdf');
        } catch (\Exception $e) {
            \Log::error('Failed to generate PDF: ' . $e->getMessage()); // Log jika terjadi kesalahan

            // Mengembalikan respon atau melakukan penanganan kesalahan lainnya
            return back()->withErrors(['error' => 'Failed to generate PDF']);
        }
    }
}
