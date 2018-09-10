<?php
class ControllerExtensionModuleMyModule extends Controller {
	public function index($setting) {
		if (isset($setting['module_description'][$this->config->get('config_language_id')])) {
      
      $data['section_title'] = html_entity_decode($setting['module_description'][$this->config->get('config_language_id')]['title'], ENT_QUOTES, 'UTF-8');
			$data['description'] = html_entity_decode($setting['module_description'][$this->config->get('config_language_id')]['description'], ENT_QUOTES, 'UTF-8');
			$data['background'] = html_entity_decode($setting['module_description'][$this->config->get('config_language_id')]['background'], ENT_QUOTES, 'UTF-8');
			$data['img1'] = html_entity_decode($setting['module_description'][$this->config->get('config_language_id')]['img1'], ENT_QUOTES, 'UTF-8');
			$data['fields'] = $setting['module_description'][$this->config->get('config_language_id')]['fields'];
			$data['button_text'] = html_entity_decode($setting['module_description'][$this->config->get('config_language_id')]['button_text'], ENT_QUOTES, 'UTF-8');

			return $this->load->view('extension/module/my_module', $data);
		}
	}
}