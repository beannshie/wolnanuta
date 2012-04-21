<?php use_helper('I18N', 'JavascriptBase') ?>

<?php use_stylesheet(sfConfig::get('sf_admin_module_web_dir').'/css/reset.css') ?>
<?php use_stylesheet(sfConfig::get('sf_admin_module_web_dir').'/css/jquery.jscrollpane.css') ?>
<?php use_stylesheet(sfConfig::get('sf_admin_module_web_dir').'/css/sf_guard.css') ?>
<?php use_stylesheet(sfConfig::get('sf_admin_module_web_dir').'/css/'.sfConfig::get('app_tmcAdministrationPlugin_theme', 'blue').'.css') ?>

<?php use_javascript(sfConfig::get('sf_admin_module_web_dir').'/js/jquery-1.4.2.min.js') ?>
<?php use_javascript(sfConfig::get('sf_admin_module_web_dir').'/js/sf_guard_form.js') ?>

<div id="page">
  <h1><span class="administration"><?php echo __('Want to register?', null, 'sfGuardPlugin') ?></span><?php echo __(sfConfig::get('app_sfGuardPlugin_header_title', 'Tito Miguel Costa'), null, 'sfGuardPlugin') ?></h1>

  <div id="content">
    <div id="logo">
      <?php include_partial('sfGuardAuth/logo') ?>
    </div>
    <hr />
    <?php include_partial('form', array('form' => $form, 'routes' => $sf_context->getRouting()->getRoutes())) ?>
  </div>

  <?php include_partial('sfGuardAuth/footer') ?>
</div>