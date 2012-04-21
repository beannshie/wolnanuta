<?php use_helper('I18N', 'JavascriptBase') ?>

<?php use_stylesheet('/tmcAdministrationPlugin/css/reset.css') ?>
<?php use_stylesheet('/tmcAdministrationPlugin/css/jquery.jscrollpane.css') ?>
<?php use_stylesheet('/tmcAdministrationPlugin/css/sf_guard.css') ?>
<?php use_stylesheet('/tmcAdministrationPlugin/css/sf_guard_forgot_password.css') ?>

<?php use_javascript('/tmcAdministrationPlugin/js/jquery-1.4.2.min.js') ?>
<?php use_javascript('/tmcAdministrationPlugin/js/jquery.jscrollpane.min.js') ?>
<?php use_javascript('/tmcAdministrationPlugin/js/jquery.mousewheel.js') ?>
<?php use_javascript('/tmcAdministrationPlugin/js/sf_guard_form.js') ?>

<div id="page">
  <h1><span class="administration"><?php echo __('Change password', null, 'sfGuardPlugin') ?></span><?php echo __(sfConfig::get('app_sf_guard_plugin_title', 'Universidade dos Açores'), null, 'sfGuardPlugin') ?></h1>

  <div id="content">
    <div id="logo">
      <?php include_partial('sfGuardAuth/logo') ?>
    </div>
    <hr />
    <div id="form">
      <h2><?php echo __('Hi %name%', array('%name%' => $user->getName()), 'sfGuardPlugin') ?></h2>

      <h3><?php echo __('Enter your new password in the form below.', null, 'sfGuardPlugin') ?></h3>

      <?php include_partial('sfGuardAuth/form_errors', array('form' => $form)) ?>

      <form action="<?php echo url_for('@sf_guard_forgot_password_change?unique_key='.$sf_request->getParameter('unique_key')) ?>" method="POST">
        <table>
          <tfoot>
            <tr>
              <td colspan="2"><input type="submit" name="change" class="button" value="<?php echo __('Change', null, 'sfGuardPlugin') ?>" /></td>
            </tr>
          </tfoot>
          <tbody>
            <?php echo $form ?>
          </tbody>
        </table>
      </form>
      <div class="clear"></div>
      
      <?php if (sfConfig::get('app_tmcAdministrationPlugin_forgot_password_links', true)): ?>
      <div id="links">
        <?php if( ! include_slot('forgot_password_links') ): ?>
        <ul>
          <li><?php echo link_to(__('homepage', null, 'sfGuardPlugin'), '@homepage') ?></li>
          <li><?php echo link_to(__('Signin', null, 'sfGuardPlugin'), '@sf_guard_signin') ?></li>
          <?php $routes = $sf_context->getRouting()->getRoutes() ?>
          <?php if (isset($routes['sf_guard_forgot_password'])): ?>
            <li><a href="<?php echo url_for('@sf_guard_forgot_password') ?>"><?php echo __('Forgot your password?', null, 'sfGuardPlugin') ?></a></li>
          <?php endif; ?>

          <?php if (isset($routes['sf_guard_register'])): ?>
            <li><a href="<?php echo url_for('@sf_guard_register') ?>"><?php echo __('Want to register?', null, 'sfGuardPlugin') ?></a></li>
          <?php endif; ?>
        </ul>
        <?php endif ?>
      </div>
      <?php endif ?>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>

  <?php include_partial('sfGuardAuth/footer') ?>
</div>