<?php if ($sf_user->hasFlash('error') ): ?>
  <div class="error_list"><?php echo __($sf_user->getFlash('error'), null, 'sfGuardPlugin') ?></div>
<?php endif; ?>
<?php if ($sf_user->hasFlash('notice') ): ?>
  <div class="notice_list"><?php echo __($sf_user->getFlash('notice'), null, 'sfGuardPlugin') ?></div>
<?php endif; ?>