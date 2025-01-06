<?php defined('BASEPATH') or exit('No direct script access allowed');

// Gunakan autoload Composer
require_once APPPATH . '../vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;

class Dompdfs
{
    public function generate($html, $filename = '', $paper = 'A4', $orientation = 'portrait', $stream = TRUE)
    {
        $options = new Options();
        $options->set('isRemoteEnabled', TRUE); // Mengaktifkan opsi untuk load gambar dari URL
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper($paper, $orientation);
        $dompdf->render();
        if ($stream) {
            $dompdf->stream($filename . ".pdf", array("Attachment" => 0)); // 0: tampil di browser
            exit();
        } else {
            return $dompdf->output(); // Mengembalikan konten PDF
        }
    }
}
