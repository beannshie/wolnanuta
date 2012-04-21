<?php if ($listActions = $this->configuration->getValue('list.batch_actions')): ?>
<li class="sf_admin_batch_actions_choice">
  <select name="batch_action">
    <option value="">[?php echo __('Choose an action', array(), 'tmcAdministrationPlugin') ?]</option>
    <?php foreach ((array) $listActions as $action => $params): ?>
      <?php echo $this->addCredentialCondition('<option value="'.$action.'">[?php echo __("'.$params['label'].'", array(), "'.$this->getI18nCatalogue().'") ?]</option>', $params) ?>
    <?php endforeach; ?>
  </select>
  
  <?php $form = new sfForm(); if ($form->isCSRFProtected()): ?>
    <input type="hidden" name="<?php echo $form->getCSRFFieldName() ?>" value="<?php echo $form->getCSRFToken() ?>" />
  <?php endif; ?>
  <input type="image" class="go" src="<?php echo sfConfig::get('sf_admin_module_web_dir') ?>/images/go.png" alt="[?php echo __('go', array(), 'tmcAdministrationPlugin') ?]" />
</li>
<?php endif; ?>
