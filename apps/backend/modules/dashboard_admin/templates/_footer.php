<?php use_helper('I18N') ?>  

<div id='sf_admin_theme_footer'>
  <?php echo __('Copyright &copy; %current_year% %site_name%.', array('%current_year%' => date('Y'), '%site_name%' => sfAdminDash::getProperty('site'))); ?>
</div>
