[?php use_helper('I18N') ?]
<div id="title">
  [?php echo __(sfConfig::get('app_tmcAdministrationPlugin_header_title', 'Tito Miguel Costa'), null, 'tmcAdministrationPlugin') ?]<span class="administration">[?php echo __('Administration area', null, 'tmcAdministrationPlugin')?]</span> - <span class="user">[?php echo $sf_user ?]</span>
</div>
<div id="submenu">
  [?php include_partial('<?php echo $this->getModuleName() ?>/submenu') ?]
</div>