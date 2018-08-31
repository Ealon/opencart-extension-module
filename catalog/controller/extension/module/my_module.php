<?php
class ControllerExtensionModuleMyModule extends Controller {
	public function index($setting) {
		if (isset($setting['module_description'][$this->config->get('config_language_id')])) {
			$data['section_title'] = html_entity_decode($setting['module_description'][$this->config->get('config_language_id')]['title'], ENT_QUOTES, 'UTF-8');
			$data['description'] = html_entity_decode($setting['module_description'][$this->config->get('config_language_id')]['description'], ENT_QUOTES, 'UTF-8');
			$data['column1_title'] = html_entity_decode($setting['module_description'][$this->config->get('config_language_id')]['column1_title'], ENT_QUOTES, 'UTF-8');

			return $this->load->view('extension/module/my_module', $data);
		}
	}
}