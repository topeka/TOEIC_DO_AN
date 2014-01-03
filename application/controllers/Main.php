<?php
class Main extends CI_Controller{
	public function _construc(){
		parent::_construct();
	}
	public function index(){
		$this->load->view("main_view");
		
	}
	public function speakingformat(){
		$this-> load-> view("speakingformat");
	}/*mo trang gioi thieu format bai thi spe va wri*/
	public function listeningformat(){
		$this-> load-> view("listeningformat");
	}/*mo trang gioi thieu format bai thi lis va rea*/
	public function listening(){
		$this-> load-> view("listening");
	}/*mo trang listening*/
	public function speaking(){
		$this-> load-> view("speaking");
	}/*mo trang speaking*/
	public function reading(){
		$this-> load-> view("reading");
	}/*mo trang speaking*/
	public function writting(){
		$this-> load-> view("writting");
	}/*mo trang speaking*/
	// Luyen tap photo level 250-500
	public function practice_photo_500(){
		$data['link_xml']=base_url().'application/data_test/photo/500/photo.xml';
		$data['link_image']=base_url().'application/data_test/photo/picture/';
		$data['link_audio']=base_url().'application/data_test/photo/audio/';
		$this->load->view("listening/photo/practice_photo_500",$data);
	}	
	public function list_all_incom_500(){

		$this->load->view("reading/incom_sentence/all_500");
	}
	public function incom_sentence_500(){
		

		$this->load->view("reading/incom_sentence/incom_sentence_500");
	}
	public function incom_sentence_750(){

		$this->load->view("reading/incom_sentence/incom_sentence_750");
	}
	
	
}
?>