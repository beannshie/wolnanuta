<?php use_helper('I18N') ?>

<div id="form">
  <?php include_partial('sfGuardAuth/form_errors', array('form' => $form)) ?>

  <form action="<?php echo url_for('@sf_guard_register') ?>" method="post">
    <table>
      <tfoot>
        <tr>
          <td colspan="2">
            <input type="submit" name="register" class="button" value="<?php echo __('Register', null, 'sfGuardPlugin') ?>" />
          </td>
        </tr>
      </tfoot>
      <tbody>
        <?php echo $form ?>
      </tbody>
    </table>
  </form>

  <?php if (sfConfig::get('app_sfGuardPlugin_register_links', true)): ?>
  <div id="links">
    <?php if( ! include_slot('register_links') ): ?>
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
</div>