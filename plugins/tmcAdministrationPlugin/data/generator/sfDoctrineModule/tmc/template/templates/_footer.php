[?php use_helper('I18N') ?]
[?php echo __('developed by', null, 'tmcAdministrationPlugin') ?] [?php echo link_to(sfConfig::get('app_tmcAdministrationPlugin_footer_name', 'titomiguelcosta'), sfConfig::get('app_tmcAdministrationPlugin_footer_url', 'http://www.titomiguelcosta.com'), array('target' => '_blank')) ?] &copy; [?php echo date('Y') ?]