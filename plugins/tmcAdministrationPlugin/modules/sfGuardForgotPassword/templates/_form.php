<?php use_helper('I18N') ?>

<form action="<?php echo url_for('@sf_guard_forgot_password') ?>" method="post">
  <table>
    <tfoot>
      <tr>
        <td colspan="2"><input type="submit" name="change" class="button" value="<?php echo __('Request', null, 'sfGuardPlugin') ?>" /></td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form ?>
    </tbody>
  </table>
</form>

<?php if (sfConfig::get('app_sfGuardPlugin_forgot_password_links', true)): ?>
<div id="links">
  <?php if( ! include_slot('forgot_password_links') ): ?>
  <ul>
    <li><?php echo link_to(__('Signin', null, 'sfGuardPlugin'), '@sf_guard_signin') ?></li>
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