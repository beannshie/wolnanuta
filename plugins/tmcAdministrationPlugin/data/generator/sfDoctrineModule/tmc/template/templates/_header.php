[?php use_helper('I18N') ?]
<div id="title">
    <div id="title_logo">
        [?php
        if (sfConfig::get('app_tmcAdministrationPlugin_logo_src'))
        {
            echo link_to(
                image_tag(sfConfig::get('app_tmcAdministrationPlugin_logo_src'), 'size='.sfConfig::get('app_tmcAdministrationPlugin_logo_size')),
                '@homepage');
        }
        else
        {
            echo __(sfConfig::get('app_tmcAdministrationPlugin_header_title'), null, 'tmcAdministrationPlugin');
        }
        ?]
    </div>
    <div id="title_name">
        <span class="administration">
            [?php echo __('Administration area', null, 'tmcAdministrationPlugin')?]
        </span> - <span class="user">[?php echo $sf_user ?]</span>
    </div>
</div>
<div id="submenu">
  [?php include_partial('<?php echo $this->getModuleName() ?>/submenu') ?]
</div>