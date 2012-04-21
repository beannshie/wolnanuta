[?php use_javascript('<?php echo sfConfig::get('sf_admin_module_web_dir').'/js/jquery-1.4.2.min.js' ?>', 'first') ?]
[?php use_javascript('<?php echo sfConfig::get('sf_admin_module_web_dir').'/js/jquery-ui-1.8.6.custom.min.js' ?>') ?]
[?php use_javascript('<?php echo sfConfig::get('sf_admin_module_web_dir').'/js/sf_admin.js' ?>') ?]

[?php use_stylesheet('<?php echo sfConfig::get('sf_admin_module_web_dir').'/css/reset.css' ?>', 'first') ?]
[?php use_stylesheet('<?php echo sfConfig::get('sf_admin_module_web_dir').'/css/jquery/jquery-ui-1.8.6.custom.css' ?>') ?]

[?php
/*
[?php use_stylesheet('<?php echo sfConfig::get('sf_admin_module_web_dir').'/css/dropdown.css' ?>') ?]
[?php use_stylesheet('<?php echo sfConfig::get('sf_admin_module_web_dir').'/css/sf_admin.css' ?>') ?]
[?php use_stylesheet('<?php echo sfConfig::get('sf_admin_module_web_dir').'/css/' ?>'.sfConfig::get('app_tmcAdministrationPlugin_theme', 'blue').'.css') ?]
*/
?]
[?php use_stylesheet('<?php echo sfConfig::get('sf_admin_module_web_dir').'/css/compressed.css' ?>') ?]

<?php if (isset($this->params['css'])): ?> 
[?php use_stylesheet('<?php echo $this->params['css'] ?>', 'last') ?]
<?php endif; ?>