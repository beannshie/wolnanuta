<?php use_helper('I18N') ?>
<?php echo __('Hi %first_name%', array('%first_name%' => $user->getFirstName()), 'sfGuardPlugin') ?>,

<?php echo __('Below you will have your username and new password', null, 'sfGuardPlugin') ?>:

<?php echo __('Username', null, 'sfGuardPlugin') ?>: <?php echo $user->getUsername() ?>
<?php echo __('Password', null, 'sfGuardPlugin') ?>: <?php echo $password ?>