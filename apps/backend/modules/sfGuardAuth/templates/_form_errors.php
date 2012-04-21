<?php if ( count($errors=$form->getErrorSchema()->getErrors()) > 0 ): ?>
  <ul class="error_list">
  <?php foreach( $errors as $field => $error ): ?>
    <li class="<?php echo $field ?>"><span class="widget"><?php echo __($form->getWidgetSchema()->getLabel($field) ? $form->getWidgetSchema()->getLabel($field) : sfInflector::humanize($field), null, 'sfGuardPlugin') ?>:</span> <?php echo __($error, null, 'sfGuardPlugin') ?></li>
  <?php endforeach ?>
  <?php foreach ($form->getGlobalErrors() as $error): ?>
    <li><?php echo __($error, null, 'sfGuardPlugin') ?></li>
  <?php endforeach; ?>
  </ul>
<?php endif ?>