<?php 

class Export extends CI_Controller{
	public function pdf(){
		$this->load->library('dompdf_gen')

		$data['tb_brg'] = $this->model_barang->tampil_data('nama_brg')->result();

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
		$data['tb_brg'] = $this->model_barang->tampil_data('nama_brg')->result();

		require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel.php');
		require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

		$object = new PHPExcel();

		$object->getProperties()->setCreator("Toko_Az");
		$object->getProperties()->setLastModifiedBy("Toko_Az");
		$object->getProperties()->setTitle("Data Barang");

		$object->setActiveSheetIndex(0);

		$object->setActiveSheetIndex()->setCellValue('A1', 'NO');
		$object->setActiveSheetIndex()->setCellValue('B1', 'NAMA BARANG');
		$object->setActiveSheetIndex()->setCellValue('C1', 'KETERANGAN');
		$object->setActiveSheetIndex()->setCellValue('D1', 'KATEGORI');
		$object->setActiveSheetIndex()->setCellValue('E1', 'HARGA');
		$object->setActiveSheetIndex()->setCellValue('F1', 'STOK');

		$baris = 2;
		$no = 1;

		foreach ($data['tb_brg'] as $brg) {
			$object->getActiveSheet()->setCellValue('A'.$baris, $no++);
			$object->getActiveSheet()->setCellValue('B'.$baris, $brg->nama_brg);
			$object->getActiveSheet()->setCellValue('C'.$baris, $brg->keterangan);
			$object->getActiveSheet()->setCellValue('D'.$baris, $brg->kategori);
			$object->getActiveSheet()->setCellValue('E'.$baris, $brg->harga);
			$object->getActiveSheet()->setCellValue('F'.$baris, $brg->stock);

			$baris++;
		}

		$filename="Data_Barang".'.xlsx';

		$object->getActiveSheet()->setTitle("Data Barang");

		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheethtml.sheet');
		header('Content-Disposition: attachment;filename="'.$filename.'"');
		header('Cache-Control: max-age=0');

		$writer=PHPExcel_IOFactory::createwriter($object, 'Excel2007');
		$writer->save('php://output');

		exit;
	}
}