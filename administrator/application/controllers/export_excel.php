<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//require APPPATH . '/libraries/BaseController.php';
/*
 * Author : Ismo Broto : git @ismo1106
 */

class Export_excel extends CI_Controller {
    public function __construct() {
        parent::__construct();
        
        //$this->isLoggedIn();        
        $this->load->library('PHPExcel');
    }
    
    function index() {
		$this->load->view('admin/excel/export-index');
    }

    function download() {
        //$select = $this->db->get('tbl_material')->result();
		//$select = $this->db->query('select*from tbl_material where tipe_jenis="Bambu"')->result();
		$kategori = $this->input->post('category');
        $this->db->select('*');
		$this->db->from('tbl_material');
		$this->db->where('tipe_jenis', $kategori);
		$select = $this->db->get()->result();
		//return $query->result_array();
		
        $objPHPExcel    = new PHPExcel();
        $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(5);
        $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(17);
        $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(17);
        $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(17);
		$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(35);
		$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(17);
		$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(5);
        
        $objPHPExcel->getActiveSheet()->getStyle(1)->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle(2)->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle(3)->getFont()->setBold(true);
        
        $header = array(
            'alignment' => array(
                'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
                'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
            ),
            'font' => array(
                'bold' => true,
                'color' => array('rgb' => 'FF0000'),
                'name' => 'Verdana'
            )
        );

        $objPHPExcel->getActiveSheet()->getStyle("A1:E2")
                ->applyFromArray($header)
                ->getFont()->setSize(16);
        $objPHPExcel->getActiveSheet()->mergeCells('A1:E2');
        $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A1', 'Daftar List Material Gudang untuk '.$kategori)

            ->setCellValue('A3', 'No.')
            ->setCellValue('B3', 'No Kode Lengkap')
			->setCellValue('C3', 'KLP')
            ->setCellValue('D3', 'Tipe Jenis')
            ->setCellValue('E3', 'Item Uraian')
			->setCellValue('F3', 'Spesifikasi')
			->setCellValue('G3', 'Satuan')
			->setCellValue('H3', 'No Kode');
        
        $ex = $objPHPExcel->setActiveSheetIndex(0);
        $no = 1;
        $counter = 4;
        foreach ($select as $row):
            $ex->setCellValue('A'.$counter, $no++);
            $ex->setCellValue('B'.$counter, $row->no_kode_lengkap);
            $ex->setCellValue('C'.$counter, $row->klp);
            $ex->setCellValue('D'.$counter, $row->tipe_jenis);
			$ex->setCellValue('E'.$counter, $row->item_uraian);
			$ex->setCellValue('F'.$counter, $row->spesifikasi);
			$ex->setCellValue('G'.$counter, $row->satuan);
			$ex->setCellValue('H'.$counter, $row->no_kode);
            
            $counter = $counter+1;
        endforeach;
        
        $objPHPExcel->getProperties()->setCreator("Arief Setiyadi")
            ->setLastModifiedBy("Arief Setiyadi")
            ->setTitle("Export PHPExcel Material Gudang")
            ->setSubject("Export PHPExcel Material Gudang")
            ->setDescription("Export Material Excel2007 XLSX, generated by PHPExcel.")
            ->setKeywords("office 2007 openxml php")
            ->setCategory("PHPExcel");
        $objPHPExcel->getActiveSheet()->setTitle('Data Orang');
        
        $objWriter  = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        header('Last-Modified:'. gmdate("D, d M Y H:i:s").'GMT');
        header('Chace-Control: no-store, no-cache, must-revalation');
        header('Chace-Control: post-check=0, pre-check=0', FALSE);
        header('Pragma: no-cache');
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="ExportDataMaterialUntukLapangan-'.$kategori.'-'. date('Ymd') .'.xlsx"');
        
        $objWriter->save('php://output');
    }
}