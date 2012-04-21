<?php use_helper('I18N', 'JavascriptBase') ?>

<?php use_stylesheet(sfConfig::get('sf_admin_module_web_dir').'/css/reset.css') ?>
<?php use_stylesheet(sfConfig::get('sf_admin_module_web_dir').'/css/sf_guard.css') ?>
<?php use_stylesheet(sfConfig::get('sf_admin_module_web_dir').'/css/'.sfConfig::get('app_tmcAdministrationPlugin_theme', 'blue').'.css') ?>

<?php use_javascript(sfConfig::get('sf_admin_module_web_dir').'/js/jquery-1.4.2.min.js') ?>

<div id="page">
  <h1><span class="administration"><?php echo __('No credentials', null, 'sfGuardPlugin')?></span><?php echo __(sfConfig::get('app_sfGuardPlugin_header_title', 'Tito Miguel Costa'), null, 'sfGuardPlugin') ?></h1>

  <div id="content">
    <div id="logo">
      <?php include_partial('logo') ?>
    </div>
    <hr />
    <div id="form">
      <p class="error_list"><?php echo __('Oops! The page you asked for is secure and you do not have proper credentials.', null, 'sfGuardPlugin') ?></p>

      <?php if (sfConfig::get('app_sfGuardPlugin_secure_links', true)): ?>
        <div id="links">
          <?php if( !include_slot('secure_links')): ?>
          <ul>
            <li><?php echo link_to(__('Homepage', null, 'sfGuardPlugin'), '@homepage') ?></li>
            <li><?php echo link_to_function(__('Previous page', null, 'sfGuardPlugin'), 'history.go(-1)') ?></li>
            <li><?php echo link_to(__('Logout', null, 'sfGuardPlugin'), '@sf_guard_signout') ?></li>
          </ul>
          <?php endif ?>
          <div class="clear"></div>
        </div>
      <?php endif ?>
    </div>
    <div class="clear"></div>
  </div>

  <?php include_partial('footer') ?>
</div>