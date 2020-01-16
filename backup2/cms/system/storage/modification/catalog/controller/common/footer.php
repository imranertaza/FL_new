<?php
class ControllerCommonFooter extends Controller {
	public function index() {
 
 /*======Show Themeconfig=======*/ 
 $data['soconfig'] = $this->soconfig; 
 $this->load->language('extension/soconfig/soconfig'); 
 $data['objlang'] = $this->language; 
 $data['lang_id'] = $this->config->get('config_language_id'); 
 $data['theme_directory'] = $this->config->get('theme_default_directory'); 
 $data['account_fb'] = isset($this->request->get['account_fb']) ? $this->request->get['account_fb'] : '' ; 
 $data['compare'] = $this->url->link('product/compare', '', true); 
 
 // add position 
if( $this->soconfig->get_settings('typefooter') == 1) $data['footer_1'] = $this->load->controller('extension/soconfig/footer_1'); 
else if( $this->soconfig->get_settings('typefooter') == 2) $data['footer_2'] = $this->load->controller('extension/soconfig/footer_2'); 
else if( $this->soconfig->get_settings('typefooter') == 3) $data['footer_3'] = $this->load->controller('extension/soconfig/footer_3'); 
else if( $this->soconfig->get_settings('typefooter') == 4) $data['footer_4'] = $this->load->controller('extension/soconfig/footer_4'); 
else if( $this->soconfig->get_settings('typefooter') == 5) $data['footer_5'] = $this->load->controller('extension/soconfig/footer_5'); 
else if( $this->soconfig->get_settings('typefooter') == 6) $data['footer_6'] = $this->load->controller('extension/soconfig/footer_6'); 
else if( $this->soconfig->get_settings('typefooter') == 7) $data['footer_7'] = $this->load->controller('extension/soconfig/footer_7'); 
else if( $this->soconfig->get_settings('typefooter') == 8) $data['footer_8'] = $this->load->controller('extension/soconfig/footer_8'); 
else if( $this->soconfig->get_settings('typefooter') == 9) $data['footer_9'] = $this->load->controller('extension/soconfig/footer_9'); 
else if( $this->soconfig->get_settings('typefooter') == 10) $data['footer_10'] = $this->load->controller('extension/soconfig/footer_10'); 
else if( $this->soconfig->get_settings('typefooter') == 11) $data['footer_11'] = $this->load->controller('extension/soconfig/footer_11'); 
else if( $this->soconfig->get_settings('typefooter') == 12) $data['footer_12'] = $this->load->controller('extension/soconfig/footer_12'); 
else if( $this->soconfig->get_settings('typefooter') == 13) $data['footer_13'] = $this->load->controller('extension/soconfig/footer_13'); 
else if( $this->soconfig->get_settings('typefooter') == 14) $data['footer_14'] = $this->load->controller('extension/soconfig/footer_14'); 
else if( $this->soconfig->get_settings('typefooter') == 15) $data['footer_15'] = $this->load->controller('extension/soconfig/footer_15'); 
 
 
		$this->load->language('common/footer');

		$this->load->model('catalog/information');

		$data['informations'] = array();

		foreach ($this->model_catalog_information->getInformations() as $result) {
			if ($result['bottom']) {
				$data['informations'][] = array(
					'title' => $result['title'],
					'href'  => $this->url->link('information/information', 'information_id=' . $result['information_id'])
				);
			}
		}

		$data['contact'] = $this->url->link('information/contact');
		$data['return'] = $this->url->link('account/return/add', '', true);
		$data['sitemap'] = $this->url->link('information/sitemap');
		$data['tracking'] = $this->url->link('information/tracking');
		$data['manufacturer'] = $this->url->link('product/manufacturer');
		$data['voucher'] = $this->url->link('account/voucher', '', true);
		$data['affiliate'] = $this->url->link('affiliate/login', '', true);
		$data['special'] = $this->url->link('product/special');
		$data['account'] = $this->url->link('account/account', '', true);
		$data['order'] = $this->url->link('account/order', '', true);
		$data['wishlist'] = $this->url->link('account/wishlist', '', true);
		$data['newsletter'] = $this->url->link('account/newsletter', '', true);

		$data['powered'] = sprintf($this->language->get('text_powered'), $this->config->get('config_name'), date('Y', time()));

		// Whos Online
		if ($this->config->get('config_customer_online')) {
			$this->load->model('tool/online');

			if (isset($this->request->server['REMOTE_ADDR'])) {
				$ip = $this->request->server['REMOTE_ADDR'];
			} else {
				$ip = '';
			}

			if (isset($this->request->server['HTTP_HOST']) && isset($this->request->server['REQUEST_URI'])) {
				$url = ($this->request->server['HTTPS'] ? 'https://' : 'http://') . $this->request->server['HTTP_HOST'] . $this->request->server['REQUEST_URI'];
			} else {
				$url = '';
			}

			if (isset($this->request->server['HTTP_REFERER'])) {
				$referer = $this->request->server['HTTP_REFERER'];
			} else {
				$referer = '';
			}

			$this->model_tool_online->addOnline($ip, $this->customer->getId(), $url, $referer);
		}


 $data['so_countdown'] = $this->load->controller('extension/module/so_countdown');
 
		$data['scripts'] = $this->document->getScripts('footer');
		
 
 // Menu Mobile 
 //Decodes HTML Entities 
 $data['customfooter_text'] = html_entity_decode($data['soconfig']->get_settings('customfooter_text'), ENT_QUOTES, 'UTF-8'); 
 $data['lang_id'] = $this->config->get('config_language_id'); 
 
		return $this->load->view('common/footer', $data);
	}
}
