<?php use_helper('I18N') ?>

<?php include_partial('sfGuardAuth/form_errors', array('form' => $form)) ?>

<form action="<?php echo url_for('@sf_guard_signin') ?>" method="post">
  <?php echo $form->renderHiddenFields() ?>
  <div class="row">
    <?php echo $form['username']->renderLabel() ?>
    <?php echo $form['username']->render(array('class' => 'textbox')) ?>
  </div>
  <div class="row">
    <?php echo $form['password']->renderLabel() ?>
    <?php echo $form['password']->render(array('class' => 'textbox')) ?>
  </div>
  <?php if ( isset($form['remember']) ): ?>
    <div class="row remember">
      <?php echo $form['remember']->render() ?>
      <?php echo $form['remember']->renderLabel() ?>
    </div>
  <?php endif; ?>

  <div class="row submit">
    <input type="submit" value="<?php echo __('Signin', null, 'sfGuardPlugin') ?>" />
  </div>
</form>

<?php if (sfConfig::get('app_sfGuardPlugin_signin_links', false)): ?>
<div id="links">
  <?php if (! include_slot('signin_links')): ?>
  <ul>
    <?php if (isset($routes['sf_guard_forgot_password'])): ?>
      <li><a href="<?php echo url_for('@sf_guard_forgot_password') ?>"><?php echo __('Forgot your password?', null, 'sfGuardPlugin') ?></a></li>
    <?php endif; ?>
    <?php if (isset($routes['sf_guard_register'])): ?>
      <li><a href="<?php echo url_for('@sf_guard_register') ?>"><?php echo __('Want to register?', null, 'sfGuardPlugin') ?></a></li>
    <?php endif; ?>
  </ul>
  <?php endif ?>
  <div class="clear"></div>
</div>
<?php endif ?>