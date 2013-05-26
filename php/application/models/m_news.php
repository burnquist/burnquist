<?php
class m_news extends CI_Model {
	private $tbl_news = 'news';
	function __construct() {
	parent::__construct();
	}
	
	function getjrecord(){
	$jrec=$this->db->count_all($this->tbl_news);
	return $jrec;
	}
	
	
	function get_news($p,$jppage) {
	$sqlstr="SELECT id,tgl_news,email,title,komentar
			FROM news ORDER BY id limit $p,$jppage";
	//$sqlstr.="ORDER BY id limit $p,$jppage";
	$hslquery=$this->db->query($sqlstr);
	return $hslquery;
	}
	
	function get_pricerevlon_mdl($KD_BARCODE) {
	$sqlstr="SELECT BRANDNAME, NM_JNS_BRAND, NM_BRAND, DET_NM_JNS_BRAND, HRG_JUAL, KD_BARCODE
			FROM VW_BRAND
			INNER JOIN NM_STOCK ON NM_STOCK.ID_DDJNS_BRAND = VW_BRAND.ID_DDJNS_BRAND 
			WHERE KD_BARCODE = $KD_BARCODE"; 
	//$sqlstr.="ORDER BY VW_BRAND.ID_DDJNS_BRAND ";
	$hslquery=$this->db->query($sqlstr);
	return $hslquery;
	}
	
	function edit_price ($KD_BARCODE){
	 
			$sqlstr="SELECT BRANDNAME, NM_JNS_BRAND, NM_BRAND, DET_NM_JNS_BRAND, HRG_JUAL, KD_BARCODE
			FROM VW_BRAND
			INNER JOIN NM_STOCK ON NM_STOCK.KD_BARCODE = $KD_BARCODE";
	//$sqlstr.="ORDER BY VW_BRAND.ID_DDJNS_BRAND limit $p,$jppage";
	$hslquery=$this->db->query($sqlstr);
	return $hslquery;
			          
        }
	

}
?>
