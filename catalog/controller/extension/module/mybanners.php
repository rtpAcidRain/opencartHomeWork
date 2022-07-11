<?php
class ControllerExtensionModulemybanners extends Controller {
	public function index($setting) {
		$this->load->language('extension/module/mybanners');
		
		$this->load->model('extension/module/mybanners');
				
		$data['heading_title'] = $this->language->get('heading_title');
		return $this->load->view('extension/module/mybanners', $data);
	}}