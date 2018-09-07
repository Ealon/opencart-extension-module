<?php
class ControllerExtensionModuleLayout1 extends Controller {
	public function index($setting) {
		if (isset($setting['module_description'][$this->config->get('config_language_id')])) {
			$data['section_title'] = html_entity_decode($setting['module_description'][$this->config->get('config_language_id')]['title'], ENT_QUOTES, 'UTF-8');
			$data['description'] = html_entity_decode($setting['module_description'][$this->config->get('config_language_id')]['description'], ENT_QUOTES, 'UTF-8');
			$data['column1_title'] = html_entity_decode($setting['module_description'][$this->config->get('config_language_id')]['column1_title'], ENT_QUOTES, 'UTF-8');
			$data['column1_content'] = html_entity_decode($setting['module_description'][$this->config->get('config_language_id')]['column1_content'], ENT_QUOTES, 'UTF-8');
			$data['column2_title'] = html_entity_decode($setting['module_description'][$this->config->get('config_language_id')]['column2_title'], ENT_QUOTES, 'UTF-8');
			$data['column2_content'] = html_entity_decode($setting['module_description'][$this->config->get('config_language_id')]['column2_content'], ENT_QUOTES, 'UTF-8');
			$data['column3_title'] = html_entity_decode($setting['module_description'][$this->config->get('config_language_id')]['column3_title'], ENT_QUOTES, 'UTF-8');
			$data['column3_content'] = html_entity_decode($setting['module_description'][$this->config->get('config_language_id')]['column3_content'], ENT_QUOTES, 'UTF-8');
			$data['button_text'] = html_entity_decode($setting['module_description'][$this->config->get('config_language_id')]['button_text'], ENT_QUOTES, 'UTF-8');

			return $this->load->view('extension/module/layout1', $data);
		}
	}
}