<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matkhau extends CI_Controller {
	// Hàm khởi tạo
    function __construct() {
        parent::__construct();
        $this->load->model('frontend/Mproduct');
        $this->load->model('frontend/Mcategory');
        $this->data['com']='sanpham';
        $this->load->library('session');
        $this->load->library('phantrang');
    }
    
	public function index(){
        if(isset($_POST['sapxep'])){
            $dksx=$_POST['sapxep'];
            $char = explode('-', $dksx);
            $f=$char[0];
            $od=$char[1];
            $data = array('0' => $f,
                '1' =>$od
            );
            $this->session->set_userdata('sortby', $data);
        }else{
            if($this->session->userdata('sortby')){
                $data = $this->session->userdata('sortby');
                $f=$data[0];
                $od=$data[1];
                $array = array('sortby');
            }else{
                $f='created';
                $od='desc';
            }
        }
        $this->load->library('phantrang');
        $limit=24;
        $current=$this->phantrang->PageCurrent();
        $first=$this->phantrang->PageFirst($limit, $current);
        $total=$this->Mproduct->product_sanpham_count();
        $this->data['strphantrang']=$this->phantrang->PagePer($total, $current, $limit, $url='quen-mat-khau');
        // $this->data['list']=$this->Mproduct->product_sanpham($limit,$first,$f,$od);
        $this->data['title']='Sun And Flower - Tất cả sản phẩm';
        $this->data['view']='index';
		//$this->load->view('frontend/layout',$this->data);
       
            $this->load->view('frontend/layout',$this->data);
	}
}
