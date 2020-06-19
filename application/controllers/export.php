<?php 
require('./excel/vendor/autoload.php');
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
class Export extends CI_Controller{
	public function pdf(){
		$this->load->library('dompdf_gen');

		$data['tb_barang'] = $this->model_barang->tampil_data('tb_barang')->result();

		$this->load->view('laporan_pdf',$data);

		$paper_size = 'A4';
		$orientation = 'landscape';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporan_data_barang.pdf", array('Attachment' =>0));
	}

	public function excel(){
		$data['tb_barang'] = $this->model_barang->tampil_data('tb_barang')->result();

		$sheet = new Spreadsheet();
        $sheet->getProperties()->setCreator('SMKN 24 Jakarta')
        ->setLastModifiedBy('Toko_Az')
        ->setTitle('Data Barang')
        ->setSubject('Data Barang')
        ->setDescription('Test document for Office 2007 XLSX, generated using PHP classes.')
        ->setKeywords('office 2007 openxml php')
        ->setCategory('Barang');

        $object = $sheet->getActiveSheet();
        $object->setCellValue('A1', 'NO');
		$object->setCellValue('B1', 'NAMA BARANG');
		$object->setCellValue('C1', 'KETERANGAN');
		$object->setCellValue('D1', 'KATEGORI');
		$object->setCellValue('E1', 'HARGA');
		$object->setCellValue('F1', 'STOK');

        $baris=2;
        $no=1;
        foreach ($data['tb_barang'] as $brg) {
            $object = $sheet->getActiveSheet();
            $object->setCellValue('A'.$baris, $no++);
			$object->setCellValue('B'.$baris, $brg->nama_brg);
			$object->setCellValue('C'.$baris, $brg->keterangan);
			$object->setCellValue('D'.$baris, $brg->kategori);
			$object->setCellValue('E'.$baris, $brg->harga);
			$object->setCellValue('F'.$baris, $brg->stock);
            $baris++;
    
        }

        $filename="Data_Barang".'.xlsx';
        $sheet->getActiveSheet()->setTitle('Data Barang');
        $sheet->setActiveSheetIndex(0);
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="'.$filename.'"');
        header('Cache-Control: max-age=0');
        header('Cache-Control: max-age=1');

        header('Expires: 0');
        header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); 
        header('Cache-Control: cache, must-revalidate'); 
        header('Pragma: public'); 

        $writer = IOFactory::createWriter($sheet,'Xlsx');
        $writer->save('php://output');

        exit;
	}
}